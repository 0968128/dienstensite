<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
        $users = User::with('roles')->get();
        return view('users', compact('users'));
    }

    public function show(User $user)
    {
        if(auth()->id() == $user->id)
            return view("users.show", compact('user'));
        else return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(auth()->id() == $user->id)
            return view('users.edit', compact('user'));
        else return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        if(auth()->id() == $user->id) {
            $user->update(request(['name', 'email']));
            return view("users.show", compact('user'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(auth()->id() == $user->id) {
            $user->delete();
        }
        return redirect('/');
    }
}