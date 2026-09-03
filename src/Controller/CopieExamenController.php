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

    public function index(): void
    {
        $copies = $this->soumissionService->getAllCopies();
        require_once BASE_PATH . '/templates/copie/list.html.php';
    }

    public function form(): void
    {
        require_once BASE_PATH . '/templates/copie/form.html.php';
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

            header('Location: /copies');
            exit;
        } catch (Exception $e) {
            http_response_code(400);
            $errorMessage = $e->getMessage();
        }
    }

    public function show(): void
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header('Location: /copies');
            exit;
        }

        $copie = $this->soumissionService->getCopyById($id);

        if (!$copie) {
            $errorMessage = "Copie d'examen introuvable.";
            require_once BASE_PATH . '/templates/errors/erreur.html.php';
            return;
        }

        require_once BASE_PATH . '/templates/copie/detail.html.php';
    }
}
