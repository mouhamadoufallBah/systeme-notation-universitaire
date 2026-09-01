<?php

namespace App\Entity;

abstract class AbstractDocument
{
    private ?int $id;
    private \DateTime $dateDepot;
    private \DateTime $dateLimite;

    public function __construct(\DateTime $dateDepot, \DateTime $dateLimite, ?int $id = null)
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

    public function getDateDepot(): \DateTime
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTime $dateDepot): void
    {
        $this->dateDepot = $dateDepot;
    }

    public function getDateLimite(): \DateTime
    {
        return $this->dateLimite;
    }

    public function setDateLimite(\DateTime $dateLimite): void
    {
        $this->dateLimite = $dateLimite;
    }
}
