<?php

namespace App\Entity;

class CopieExamen extends AbstractDocument
{
    private float $noteBrute;
    private float $noteFinale;
    private float $penaliteAppliquee;

    public function __construct(
        \DateTime $dateDepot,
        \DateTime $dateLimite,
        float $noteBrute,
        float $noteFinale,
        float $penaliteAppliquee,
        ?int $id
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
        $this->validerNote($noteBrute);
        $this->noteBrute = $noteBrute;
    }

    public function getNoteFinale(): float
    {
        return $this->noteFinale;
    }

    public function setNoteFinale(float $noteFinale): void
    {
        $this->validerNote($noteFinale);
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

    private function validerNote(float $note): void
    {
        if ($note < 0 || $note > 20) {
            throw new \Exception("La note doit être comprise entre 0 et 20. Valeur reçue : " . $note);
        }
    }
}
