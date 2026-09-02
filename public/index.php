<?php

use App\Core\Database;

define("BASE_PATH", dirname(__DIR__));

require_once(BASE_PATH."/vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

$db = Database::getConnection();

var_dump($db);


