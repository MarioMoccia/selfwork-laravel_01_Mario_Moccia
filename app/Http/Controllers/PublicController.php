<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Redirect;

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

    public function contactUs()
    {
        return view('contacts');
    }

    public function contactSubmit(Request $request)
    {
        $user = $request->input('user');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to($email)->send(new ContactMail($user, $email, $message));
        return redirect(route('homepage'))->with('emailSent', 'Messaggio inviato correttamente!');
    }
}
