@extends('layouts.app')

@section('content')
    <h1>The checked dudes are our moderators</h1>
    <p>
        <ul>
            @foreach($users as $user)
            <br><div>{{ $user->name }}</div>
                <label for="moderator">
                    @if($user->id != Auth::user()->id)
                        @if($user->hasRole('moderator'))
                            <form method="post" action="/moderators">
                                @method('patch')
                                @csrf
                                <input type="submit" name="moderator" value="Degradeer">
                            </form>
                        @else
                            <form method="post" action="/moderators">
                                @method('patch')
                                @csrf
                                <input type="submit" name="moderator" value="Promoveer">
                            </form>
                        @endif
                    @endif
                </label>
            @endforeach
        </ul>
    </p>
@endsection