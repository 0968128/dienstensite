<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index() {
        return view('welcome', [
            'foo' => 'diensten'
        ]);
    }

    public function profile(User $user) {
        return view ('profile', compact('user'));
    }

    public function contact() {
        return view ('contact');
    }

    public function about() {
        return view ('about');
    }
}
