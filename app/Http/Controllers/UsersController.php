<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Appointment;

class UsersController extends Controller
{
    public function index() {
        $user = \App\User::first();
        $users = \App\User::all();
        $roles = \App\Role::all();
        return view('users', compact(['user', 'users']));
    }

    public function show(User $user)
    {
        if(auth()->id() == $user->id)
            return view("users.show", compact('user'));
        else return redirect('/geentoegang');
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
        else return redirect('/geentoegang');
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
            return redirect('/geentoegang');
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
        return redirect('/geentoegang');
    }
}