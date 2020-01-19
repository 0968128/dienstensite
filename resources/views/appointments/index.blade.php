@extends('layouts.app')

@section('content')
    <h1>Afspraken</h1>
    <form name="searchfilter" id="searchfilter" action="">
        <input type="text" name="searchbar" placeholder="Typ een zoekterm..." value="{{ $searchbar }}">
        <select type="text" name="filter">
            @if($filter == 3)
                <option value="">Kies</option>
                <option value="2">Ik als klant</option>
                <option selected value="3">Ik als dienstverlener</option>
            @elseif ($filter == 2)
                <option value="">Kies</option>
                <option selected value="2">Ik als klant</option>
                <option value="3">Ik als dienstverlener</option>
            @else
                <option selected value="">Kies</option>
                <option value="2">Ik als klant</option>
                <option value="3">Ik als dienstverlener</option>
            @endif
        </select>
        <input type="submit" name="submit" value="zoeken">
    </form>
    Gecheckte afpsraken staan vast
    <ul>
        @foreach ($appointments as $appointment)
            <div>
                <form method="POST" action="/appointment/{{ $appointment->id }}">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox" for="confirmed">
                        <input type="checkbox" name="confirmed" onChange="this.form.submit()" {{ $appointment->confirmed ? 'checked' : ''}}>
                        <a href="/appointments/{{ $appointment->id }}">{{ $appointment->name }}</a>
                    </label>
                </form>
            </div>
        @endforeach
    </ul>
@endsection