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
            <select type="text" name="dienstverlener" value="" required>
                <option value="1">Hier moet een foreach loop komen van alle gebruikers</option>
            </select>
        </label><br>
        <label>
            Timeslot:
            <select type="text" name="timeslot" value="{{ old('timeslot') }}" required>
                <option value="2">Hier moet een foreach loop komen van alle timeslots die bovenstaande gebruiker heeft opengesteld.</option>
            </select>
        </label>
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