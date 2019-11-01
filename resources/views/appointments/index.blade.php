@extends('layouts.app')

@section('content')
    <h1>Afspraken</h1>
    <form name="searchfilter" id="searchfilter" action="">
        <input type="text" name="searchbar" placeholder="Typ een zoekterm...">
            <select type="text" name="filter">
                <option value="">Alle afspraken</option>
                <option value="">Ik als klant</option>
                <option value="">Ik als dienstverlener</option>
            </select>
        <input type="submit" name="submit" value="zoeken">
    </form>
    <ul>
        @foreach ($appointments as $appointment)
            <li>
                <a href="/appointments/{{ $appointment->id }}">
                    {{ $appointment->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection