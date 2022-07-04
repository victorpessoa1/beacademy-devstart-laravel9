<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): void
    {
        $users = [
            'nomes' => [
                'José Lira',
                'José Victor'
            ]
        ];

        dd($users);
    }

    public function show($id)
    {
        var_dump("o Usuário é {$id}");
        dd("Id do usuário é {$id}");
    }

}
