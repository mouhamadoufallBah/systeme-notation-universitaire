<?php

namespace App\Repository;

interface CopieExamenRepositoryInterface
{
    public function save(array $copieData): int|string;

    public function findAll(): array;

    public function findById(int|string $id): ?object;
}
