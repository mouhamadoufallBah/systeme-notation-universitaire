<?php

namespace App\Dto;

namespace App\Dto;

class CopieDetailDTO
{
    public function __construct(
        public readonly int|string $id,
        public readonly string $noteBrute,
        public readonly string $noteFinale,
        public readonly string $penaliteAppliquee,
        public readonly string $dateDepot,
        public readonly string $dateLimite,
        public readonly bool $estEnRetard
    ) {}

    public static function fromEntity(object $copie): self
    {
        return new self(
            id: $copie->id,
            noteBrute: number_format($copie->note_brute, 1) . ' /20',
            noteFinale: number_format($copie->note_finale, 1) . ' /20',
            penaliteAppliquee: $copie->penalite_appliquee == 1? ' -2pts' : '-',
            dateDepot: $copie->date_depot instanceof \DateTimeInterface
                ? $copie->date_depot->format('Y-m-d H:i:s')
                : $copie->date_depot,
            dateLimite: $copie->date_limite instanceof \DateTimeInterface
                ? $copie->date_limite->format('Y-m-d H:i:s')
                : $copie->date_limite,
            estEnRetard: $copie->isEstEnRetard ?? false
        );
    }
}
