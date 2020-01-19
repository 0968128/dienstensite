@extends('layouts.app')

@section('content')
    <h1>Alle gebruikers</h1>
    <p>
        <ul>
            @foreach($users as $user)
                <div>{{ $user->name }} {{ $user->roles }} </div>
            @endforeach
        </ul>
    </p>
@endsection