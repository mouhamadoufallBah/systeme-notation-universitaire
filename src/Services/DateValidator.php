<?php

namespace App\Services;

class DateValidator
{
    public static function validateDate(string|null|\DateTimeImmutable $date, string $nomChamp): \DateTimeImmutable
    { {
            if ($date === null || $date === '') {
                throw new \InvalidArgumentException(sprintf("Le champ '%s' est obligatoire.", $nomChamp));
            }

            if (is_string($date)) {
                try {
                    $date = new \DateTimeImmutable($date);
                } catch (\Exception $e) {
                    throw new \InvalidArgumentException(sprintf("Le champ '%s' doit être une date valide.", $nomChamp));
                }
            }

            return $date;
        }
    }
}
