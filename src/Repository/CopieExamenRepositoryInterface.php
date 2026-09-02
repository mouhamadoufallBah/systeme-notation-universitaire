<?php

namespace App\Repository;

use App\Entity\CopieExamen;

interface CopieExamenRepositoryInterface
{
    public function save(CopieExamen $copieData): int|string;

    public function findAll(): array;

    public function findById(int|string $id): ?object;
}
