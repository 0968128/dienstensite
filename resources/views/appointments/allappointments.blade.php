@extends('layouts.app')

@section('content')
    <h1>Alle afspraken van de website</h1>
    @foreach ($appointments as $appointment)
        <div>{{ $appointment->user->name }} heeft deze dienst aangevraagd: {{ $appointment->name }}</div>
    @endforeach
@endsection