<?php

namespace App\Service;

use App\Services\CalculNoteInterface;

class CalculNoteAvecRetardService implements CalculNoteInterface
{
    private const float PENALITE_RETARD = 2.0;
    private const float NOTE_MINIMALE = 0.0;

    public function calculer(float $noteInitiale, bool $estEnRetard): float
    {
        if (!$estEnRetard) {
            return max(self::NOTE_MINIMALE, $noteInitiale);
        }

        $noteFinale = $noteInitiale - self::PENALITE_RETARD;

        return max(self::NOTE_MINIMALE, $noteFinale);
    }
}