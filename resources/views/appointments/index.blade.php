@extends('layouts.app')

@section('content')
    <h1>Afspraken</h1>
    <form name="searchfilter" id="searchfilter" action="">
        <input type="text" name="searchbar" placeholder="Typ een zoekterm..." value="{{ old('searchbar') }}">
        <select type="text" name="filter" value="{{ old('filter') }}">
            <option value="1">Alle afspraken</option>
            <option value="2">Ik als klant</option>
            <option value="3">Ik als dienstverlener</option>
        </select>
        <input type="submit" name="submit" value="zoeken">
    </form>
    Gecheckte afpsraken staan vast
    <ul>
        @foreach ($appointments as $appointment)
            <div>
                <form method="POST" action="/confirm">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox" for="confirmed">
                        <input type="checkbox" name="confirmed" onChange="this.form.submit()">
                        <a href="/appointments/{{ $appointment->id }}">{{ $appointment->name }}</a>
                    </label>
                </form>
            </div>
        @endforeach
    </ul>
@endsection