@extends('layouts.app')

@section('content')
    <h1>The checked dudes are our moderators</h1>
    <p>
        <ul>
            @foreach($users as $user)
                <form method="post" action="/users">
                    @method('patch')
                    @csrf
                    <label for="moderator">
                        <input type="submit" name="moderator">
                        {{ $user->name }}
                    </label>
                </form>
            @endforeach
        </ul>
    </p>
@endsection