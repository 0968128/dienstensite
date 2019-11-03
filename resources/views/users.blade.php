@extends('layouts.app')

@section('content')
    <h1>Alle gebruikers</h1>
    <p>
        <ul>
            @foreach($users as $user)
                <div>{{ $user->name }}</div>
            @endforeach
        </ul>
    </p>
@endsection