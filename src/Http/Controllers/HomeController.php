<?php

namespace App\Http\Controllers;

use Skay1994\MyFramework\Attributes\Route;

class HomeController
{
    #[Route]
    public function index()
    {
        return view('welcome');
    }

    #[Route('/pt-br')]
    public function portugese()
    {
        return view('welcome_br', [
            'title' => 'Bem-vindo a Minha Aplicação',
        ]);
    }
}
