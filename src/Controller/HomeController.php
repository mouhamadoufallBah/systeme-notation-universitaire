<?php

namespace App\Controller;

class HomeController
{

    public function home()
    {
        require_once(BASE_PATH . "/templates/index.php");
    }
}
