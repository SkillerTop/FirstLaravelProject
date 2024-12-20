<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('home')->with('status', 'You have been redirected!');
    }
    
}
