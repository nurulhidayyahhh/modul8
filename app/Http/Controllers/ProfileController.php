<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'My Profile';
        $namaa = 'Nurul Hidayah';
        $email = 'nurulhidayah8604@gmail.com';
        $instagram = '@nurulhidayyahhh';
        $desc = 'Hi! You can call me Nurul. I am 20 years old. I am 
        easy to adapt, can work hard, and work with in 
        team. Besides, I love learning new things';

        return view(('profile'), [
            'pageTitle' => $pageTitle,
            'namaa' => $namaa,
            'email' => $email,
            'instagram' => $instagram,
            'desc' => $desc
        ]);
    }
}
