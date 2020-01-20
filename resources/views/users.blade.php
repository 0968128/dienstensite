@extends('layouts.app')

@section('content')
    <h1>Alle gebruikers</h1>
    <p>
        <ul>
            @foreach($users as $user)
                <div>
                    {{ $user->name }} is zowel {{ $user->roles[0]->name }} als {{ $user->roles[1]->name }}
                </div>
            @endforeach
        </ul>
    </p>
@endsection