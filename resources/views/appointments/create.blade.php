@extends('layouts.app')

@section('content')
    <form method="post" action="/appointments">
        {{ csrf_field() }}
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div>
            <label>
                Name: <input type="text" name="name" value="{{ old('name') }}" required>
            </label><br>
            <label>
                Description: <textarea name="descr" value="{{ old('descr') }}" required></textarea>
            </label><br>
            <label>
                Dienstverlener:
                <select type="text" name="dienstverlener_id" value="{{ old('dienstverlener_id') }}" required>
                    @foreach($users as $user)
                        <option id="{{ $user->id }}" value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </label><br>
        </div>
        <button type="submit">Send</button>
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
@endsection