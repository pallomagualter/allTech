<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inicio extends Controller 
{
    public function index()
    {
        echo View('templates/header');
        echo View('templates/index');
        echo View('templates/footer');
    }
}

?>