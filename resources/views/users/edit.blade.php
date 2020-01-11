@extends('layouts.app')

@section('content')
    <h1>Edit user</h1>
    <form method="post" action="/users/{{ $user->id }}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label>
                Name: <input type="text" name="name" value="{{ $user->name }}" required>
            </label><br>
            <label>
                Email: <input type="email" name="email" value="{{ $user->email }}" required></textarea>
            </label><br>
        </div>
        <button type="submit">Confirm</button>
    </form>
    <form method="POST" action="/users/{{ $user->id }}">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
@endsection