<?php

namespace App\Repository;

use App\Dto\CopieDetailDTO;
use App\Dto\CopieListItemDTO;
use App\Entity\CopieExamen;

class PdoCopieExamenRepository extends BaseRepository implements CopieExamenRepositoryInterface
{

    public function __construct(\PDO $db)
    {
        parent::__construct($db);
    }

    public function save(CopieExamen $copieExamen): int|string
    {
        $sql = "INSERT INTO copies_examen (note_brute, note_finale, penalite_appliquee, date_depot, date_limite) 
                VALUES (:note_brute, :note_finale, :penalite_appliquee, :date_depot, :date_limite)";

        $this->executeUpdate($sql, [
            'note_brute'         => $copieExamen->getNoteBrute(),
            'note_finale'        => $copieExamen->getNoteFinale(),
            'penalite_appliquee' => $copieExamen->getPenaliteAppliquee(),
            'date_depot'         => $copieExamen->getDateDepot()->format('Y-m-d H:i:s'),
            'date_limite'        => $copieExamen->getDateLimite()->format('Y-m-d H:i:s'),
        ]);

        return $this->instance->lastInsertId();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM copies_examen";
        $copieExamens = $this->query($sql, false);

        return array_map(fn($copie) => CopieListItemDTO::fromEntity($copie), $copieExamens);
    }

    public function findById(int|string $id): ?object
    {
        $sql = "SELECT * FROM copies_examen WHERE id = :id";
        $copieExamen = $this->executeQuery($sql,  ['id' => $id], true);
        if (!$copieExamen) {
            return null;
        }

        return CopieDetailDTO::fromEntity($copieExamen);
    }
}
