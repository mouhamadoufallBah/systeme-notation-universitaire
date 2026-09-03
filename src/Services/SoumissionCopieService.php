<?php

namespace App\Services;

use App\Dto\CopieDetailDTO;
use App\Dto\SoumettreCopieDTO;
use App\Entity\CopieExamen;
use App\Repository\PdoCopieExamenRepository;

class SoumissionCopieService
{
    private PdoCopieExamenRepository $repository;

    public function __construct(PdoCopieExamenRepository $repository)
    {
        $this->repository = $repository;
    }

    public function save(SoumettreCopieDTO $data): CopieExamen
    {
        $noteFInal = $this->getNoteFinal($data->noteBrute, $data->dateLimite, $data->dateDepot);
        $penalite = $this->getPenalite($data->dateLimite, $data->dateDepot);
        $copieExam = new CopieExamen($data->dateDepot, $data->dateLimite, $data->noteBrute, $noteFInal, $penalite);
        $this->repository->save($copieExam);

        return $copieExam;
    }

    public function getAllCopies(): array
    {
        return $this->repository->findAll();
    }

    public function getCopyById(int|string $id): ?CopieDetailDTO
    {
        return $this->repository->findById($id);
    }

    private function getNoteFinal(float $noteBrute, \DateTimeImmutable $dateLimit, \DateTimeImmutable $dateDepot): float
    {
        if ($dateDepot > $dateLimit) {
            $noteFinal = $noteBrute - 2;

            return max(0.0, $noteFinal);
        }

        return $noteBrute;
    }

    private function getPenalite(\DateTimeImmutable $dateLimit, \DateTimeImmutable $dateDepot): bool
    {
        return $dateDepot > $dateLimit;
    }
}
