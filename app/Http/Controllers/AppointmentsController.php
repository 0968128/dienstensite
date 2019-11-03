<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

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
        // Zoeken
        $searchbar = $request->get('searchbar');
        $filter = $request->get('filter');
        $appointments = Appointment::where(
            'name', 'LIKE', "%{$searchbar}%")->where(
            'klant_id', auth()->id())->orWhere(
            'dienstverlener_id', auth()->id()
        )->get();

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
    public function create(Request $request)
    {
        return view('appointments.create');
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
            'timeslot' => 'required',
        ]);
        Appointment::create($attributes + ['klant_id' => auth()->id(), 'dienstverlener_id' => auth()->id() + 1]);
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
        else return redirect('/appointments');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        if(auth()->id() == $appointment->klant_id || auth()->id() == $appointment->dienstverlener_id)
            return view('appointments.edit', compact('appointment'));
        else return redirect('/appointments');
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
        if(auth()->id() == $appointment->klant_id || auth()->id() == $appointment->dienstverlener_id) {
            $appointment->update(request(['name', 'descr', 'timeslot']));
            return view("appointments.show", compact('appointment'));
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
