@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}
    <a href="/users/{{ $user->id }}/edit">Edit</a></p>

@endsection