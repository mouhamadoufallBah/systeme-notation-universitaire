<?php

namespace App\Entity;

class CopieExamen extends AbstractDocument
{
    private float $noteBrute;
    private float $noteFinale;
    private float $penaliteAppliquee;

    public function __construct(
        \DateTimeImmutable $dateDepot,
        \DateTimeImmutable $dateLimite,
        float $noteBrute,
        float $noteFinale,
        float $penaliteAppliquee,
        ?int $id = null
    ) {
        parent::__construct($dateDepot, $dateLimite, $id);
        $this->setNoteBrute($noteBrute);
        $this->setNoteFinale($noteFinale);
        $this->penaliteAppliquee = $penaliteAppliquee;
    }

    public function getNoteBrute(): float
    {
        return $this->noteBrute;
    }

    public function setNoteBrute(float $noteBrute): void
    {
        $this->noteBrute = $noteBrute;
    }

    public function getNoteFinale(): float
    {
        return $this->noteFinale;
    }

    public function setNoteFinale(float $noteFinale): void
    {
        $this->noteFinale = $noteFinale;
    }

    public function getPenaliteAppliquee(): float
    {
        return $this->penaliteAppliquee;
    }

    public function setPenaliteAppliquee(float $penaliteAppliquee): void
    {
        $this->penaliteAppliquee = $penaliteAppliquee;
    }

}
