<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class ModeratorsController extends Controller {
    public function index() {
        $users = User::with('roles')->get();
        return view('moderators', compact('users'));
    }

    public function promote($userId) {
        $user = User::where('id', $userId)->firstOrFail();
        $moderatorRole = Role::where('name', 'moderator')->firstOrFail();
        $user->roles()->attach($moderatorRole->id);
        return redirect('/moderators');
    }

    public function religate($userId) {
        return redirect('/moderators');
        $moderatorRole = Role::where('name', 'moderator')->firstOrFail();
        $user->roles()->detach($moderatorRole->id);
        return redirect('/moderators');
    }
}
