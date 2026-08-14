<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $users = [
        ['name' => 'Mario', 'surname' => 'Moccia', 'Ruolo' => 'Direttore'],
        ['name' => 'Marika', 'surname' => 'Iodice', 'Ruolo' => 'Giornalista'],
        ['name' => 'Nicola', 'surname' => 'Moccia', 'Ruolo' => 'Giornalista'],
    ];
    public function homepage()
    {
        return view('welcome');
    }

    public function aboutUs()
    {


        return view('about-us', ['users' => $this->users]);
    }

    public function aboutUsDetail($name)
    {
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('about-us-detail', ['user' => $user]);
            }
        }
    }
}
