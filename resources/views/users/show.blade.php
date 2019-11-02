@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}
    <a href="/user/{{ $user->id }}/edit">Edit</a></p>

@endsection