<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ModeratorsController extends Controller {
    public function moderatorDemo() {
        $users = User::all();
        return view('moderators', compact('users'));
    }
}
