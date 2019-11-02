<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome', [
            'foo' => 'diensten'
        ]);
    }

    public function profile() {
        return view ('profile');
    }

    public function contact() {
        return view ('contact');
    }

    public function about() {
        return view ('about');
    }

    public function moderators() {
        $users = User::all();
        return view('moderators', compact('users'));
    }
}
