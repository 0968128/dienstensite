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
        if(auth()->user()) {
            return view ('profile', compact('user'));
        } else {
            return back();
        }
        
    }

    public function contact() {
        return view ('contact');
    }

    public function about() {
        return view ('about');
    }

    public function geentoegang() {
        return view ('nopermission');
    }
}