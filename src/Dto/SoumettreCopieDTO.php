<?php

namespace App\Dto;

readonly class SoumettreCopieDTO
{
    public float $noteBrute;
    public \DateTimeImmutable $dateDepot;
    public \DateTimeImmutable $dateLimite;

    private function __construct(float $noteBrute, \DateTimeImmutable $dateDepot, \DateTimeImmutable $dateLimite)
    {
        $this->noteBrute = $noteBrute;
        $this->dateDepot = $dateDepot;
        $this->dateLimite = $dateLimite;
    }
}