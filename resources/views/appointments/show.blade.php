@extends('layouts.app')

@section('content')
    <h1>{{ $appointment->name }}</h1>
    <p>
        {{ $appointment->descr }}
        {{ $appointment->timeslot }}
        <a href="/appointments/{{ $appointment->id }}/edit">Edit</a>
        <a href="/appointments">Terug</a>
    </p>
@endsection