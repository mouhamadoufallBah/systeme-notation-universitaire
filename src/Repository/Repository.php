<?php

namespace App\Repository;

abstract class BaseRepository
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function save(array $copieData): int|string
    {
        $sql = "INSERT INTO copies_examen (etudiant_id, examen_id, note, est_en_retard) 
                VALUES (:etudiant_id, :examen_id, :note, :est_en_retard)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'etudiant_id' => $copieData['etudiant_id'] ?? null,
            'examen_id'   => $copieData['examen_id'] ?? null,
            'note'        => $copieData['note'] ?? 0.0,
            'est_en_retard' => $copieData['est_en_retard'] ?? false,
        ]);

        return $this->db->lastInsertId();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM copies_examen";
        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function findById(int|string $id): ?object
    {
        $sql = "SELECT * FROM copies_examen WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);

        $result = $stmt->fetch(\PDO::FETCH_OBJ);

        return $result !== false ? $result : null;
    }
}
