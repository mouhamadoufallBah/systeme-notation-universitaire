<?php

namespace App\Dto;

use App\Services\DateValidator;
use App\Services\NoteValidator;

readonly class SoumettreCopieDTO
{
    public float $noteBrute;
    public \DateTimeImmutable $dateDepot;
    public \DateTimeImmutable $dateLimite;

    private function __construct(float $noteBrute, \DateTimeImmutable $dateDepot, \DateTimeImmutable $dateLimite)
    {
        $this->noteBrute = NoteValidator::validate($noteBrute);

        $this->dateDepot = DateValidator::validateDate($dateDepot, 'date de depot');
        $this->dateLimite = DateValidator::validateDate($dateLimite, 'date limite');
    }

    public static function fromArray(array $data): SoumettreCopieDTO
    {
        $noteBrute = $data['note_brute'] ?? null;
        $dateDepot = $data['date_depot'] ?? null;
        $dateLimite = $data['date_limite'] ?? null;

        return new SoumettreCopieDTO($noteBrute, $dateDepot, $dateLimite);
    }
}
