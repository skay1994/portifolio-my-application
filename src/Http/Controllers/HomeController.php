<?php

namespace App\Http\Controllers;

use Skay1994\MyFramework\Attributes\Route;

class HomeController
{
    #[Route]
    public function index()
    {
        return 'Hello World!';
    }

    #[Route('edit/{?name}', methods: ['GET'])]
    public function edit(string $name = 'Person')
    {
        return 'Hello ' . $name .', whatsup!';
    }
}