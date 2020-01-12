@extends('layouts.app')

@section('content')
    <h1>Alle afspraken van de website</h1>
    <ul>
        @foreach ($appointments as $appointment)
            <div href="/appointments/{{ $appointment->id }}">{{ $appointment->name }}{{  }}{{  }}</div>
        @endforeach
    </ul>
@endsection