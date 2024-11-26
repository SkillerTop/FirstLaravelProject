<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    // Метод для параметра (наприклад, ім'я користувача)
    public function userProfile($username)
    {
        return view('user-profile', ['username' => $username]);
    }
}
