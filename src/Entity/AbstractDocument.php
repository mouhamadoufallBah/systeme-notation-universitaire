<?php

namespace App\Entity;

abstract class AbstractDocument
{
    private ?int $id;
    private \DateTimeImmutable $dateDepot;
    private \DateTimeImmutable $dateLimite;

    public function __construct(\DateTimeImmutable $dateDepot, \DateTimeImmutable $dateLimite, ?int $id = null)
    {
        $this->id = $id;
        $this->dateDepot = $dateDepot;
        $this->dateLimite = $dateLimite;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDateDepot(): \DateTimeImmutable
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeImmutable $dateDepot): void
    {
        $this->dateDepot = $dateDepot;
    }

    public function getDateLimite(): \DateTimeImmutable
    {
        return $this->dateLimite;
    }

    public function setDateLimite(\DateTimeImmutable $dateLimite): void
    {
        $this->dateLimite = $dateLimite;
    }
}
