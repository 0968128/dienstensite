<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\User;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        // Zoeken en filteren
        $searchbar = $request->get('searchbar');
        $filter = $request->get('filter');

        if($filter == 1)
        $appointments = Appointment::where(
            'name', 'LIKE', "%{$searchbar}%")->get();
        if($filter == 2)
        $appointments = Appointment::where(
            'name', 'LIKE', "%{$searchbar}%")->where(
            'klant_id', auth()->id())->get();
        elseif($filter == 3)
        $appointments = Appointment::where(
            'name', 'LIKE', "%{$searchbar}%")->where(
            'dienstverlener_id', auth()->id())->get();
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $users = User::all();
        return view('appointments.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:5'],
            'descr' => ['required', 'min:20'],
            'confirmed' => [],
            'dienstverlener_id' => []
        ]);
        Appointment::create($attributes + ['klant_id' => auth()->id()]);
        return redirect('/appointments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        if(auth()->id() == $appointment->klant_id || auth()->id() == $appointment->dienstverlener_id)
            return view("appointments.show", compact('appointment'));
        else return redirect('/geentoegang');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        if(auth()->id() == $appointment->klant_id)
            return view('appointments.edit', compact('appointment'));
        else return redirect('/geentoegang');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Appointment $appointment)
    {
        if(auth()->id() == $appointment->klant_id) {
            $appointment->update(request(['name', 'descr']));
            return view("appointments.show", compact('appointment'));
        } else {
            return redirect('/geentoegang');
        }
    }

    public function confirm(Appointment $appointment) {
        if(auth()->id() == $appointment->dienstverlener_id) {
            $appointment->update([
                'confirmed' => request()->has('confirmed')
            ]);
            return back();
        } else {
            return redirect('/appointments');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        if(auth()->id() == $appointment->klant_id) {
            $appointment->delete();
        }
        return redirect('/appointments');
    }
}
