@extends('layouts.app')

@section('content')
    <h1>Edit project</h1>
    <form method="post" action="/appointments/{{ $appointment->id }}">
        @method('PATCH')
        {{ @csrf_field() }}
        <div class="field">
            <label>
                Name: <input type="text" name="name" value="{{ $appointment->name }}" required>
            </label><br>
            <label>
                Description: <textarea name="descr" required>{{ $appointment->descr }}</textarea>
            </label><br>
            <label>
                Timeslot:
                <select type="text" name="timeslot" value="2" required>
                    <option value="2">{{ Hier moet een foreach loop komen van alle timeslots die bovenstaande gebruiker heeft opengesteld. }}</option>
                </select>
            </label><br>
        </div>
        <button type="submit">Send</button>
    </form>
    <form method="POST" action="/appointments/{{ $appointment->id }}">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
@endsection