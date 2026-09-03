<?php

use App\Repository\Database;
use App\Controller\CopieExamenController;
use App\Services\SoumissionCopieService;
use App\Repository\PdoCopieExamenRepository;
use Bramus\Router\Router;

define("BASE_PATH", dirname(__DIR__));

require_once(BASE_PATH . "/vendor/autoload.php");

require_once(BASE_PATH . "/config/bootstrap.php");

$router = new Router();

$repository = new PdoCopieExamenRepository(Database::getConnection());
$soumissionService = new SoumissionCopieService($repository);
$controller = new CopieExamenController($soumissionService);

$router->get('/copies', function () use ($controller) {
    $controller->index();
});

$router->get('/copies/create', function () use ($controller) {
    $controller->form();
});

$router->post('/copies', function () use ($controller) {
    $controller->store();
});

$router->get('/copies/(\d+)', function ($id) use ($controller) {
    $_GET['id'] = $id;
    $controller->show();
});

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    $errorMessage = "Page introuvable (404).";
    require_once BASE_PATH . '/templates/errors/erreur.html.php';
});


$router->run();
