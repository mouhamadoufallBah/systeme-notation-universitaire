<?php

namespace App\Controller;

use App\Dto\SoumettreCopieDTO;
use App\Services\SoumissionCopieService;
use Exception;

class CopieExamenController
{
    public function __construct(
        private SoumissionCopieService $soumissionService
    ) {}

    public function form(): void
    {
        require_once BASE_PATH . '/templates/copie/form.php';
    }

    public function store(): void
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                header('Location: /copie/form');
                exit;
            }

            $noteBrute  = (float) $_POST['note_brute'];
            $dateDepot  =  new \DateTimeImmutable($_POST['date_depot']);
            $dateLimite =   new \DateTimeImmutable($_POST['date_limite']);
            $data = [
                'note_brute' => $noteBrute,
                'date_depot' => $dateDepot,
                'date_limite' => $dateLimite
            ];

            $dto = SoumettreCopieDTO::fromArray($data);

            $copie = $this->soumissionService->save($dto);

            header('Location: /copie/list');
            exit;
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            require_once BASE_PATH . '/templates/error.php';
        }
    }

    public function index(): void
    {
        require_once BASE_PATH . '/templates/copie/list.php';
    }

    public function show(): void
    {
        require_once BASE_PATH . '/templates/copie/detail.php';
    }
}
