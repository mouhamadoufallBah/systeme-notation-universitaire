<?php

namespace App\Repository;

use App\Entity\CopieExamen;

abstract class PdoCopieExamenRepository extends BaseRepository implements CopieExamenRepositoryInterface
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function save(CopieExamen $copieExamen): int|string
    {
        $sql = "INSERT INTO copies_examen (etudiant_id, examen_id, note, est_en_retard) 
                VALUES (:etudiant_id, :examen_id, :note, :est_en_retard)";

        $this->executeUpdate($sql, [
            'note_brute'         => $copieExamen->getNoteBrute(),
            'note_finale'        => $copieExamen->getNoteFinale(),
            'penalite_appliquee' => $copieExamen->getPenaliteAppliquee(),
            'date_depot'         => $copieExamen->getDateDepot()->format('Y-m-d H:i:s'),
            'date_limite'        => $copieExamen->getDateLimite()->format('Y-m-d H:i:s'),
        ]);

        return $this->db->lastInsertId();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM copies_examen";
        $copieExamens = $this->query($sql, false);

        return $copieExamens;
    }

    public function findById(int|string $id): ?object
    {
        $sql = "SELECT * FROM copies_examen WHERE id = :id";
        $copieExamens = $this->executeQuery($sql,  ['id' => $id], true);

        return $copieExamens;
    }
}
