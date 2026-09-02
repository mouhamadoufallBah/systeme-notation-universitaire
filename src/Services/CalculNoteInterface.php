<?php

namespace App\Services;

interface CalculNoteInterface
{
    public function calculer(float $noteInitiale, bool $estEnRetard): float;
}
