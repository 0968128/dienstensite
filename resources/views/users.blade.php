@extends('layouts.app')

@section('content')
    <h1>Alle gebruikers</h1>
    <p>
        <ul>
            @foreach($users as $user)
                <div>
                    {{ $user->name }} is {{ $user->roles[0]->name }}
                </div>
            @endforeach
        </ul>
    </p>
@endsection