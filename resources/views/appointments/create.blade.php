<form method="post" action="/store/appointment">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
    <div>
        <label>
            Name: <input type="text" name="name" id="1"/>
        </label><br>
        <label>
            Description: <input type="text" name="descr" id="2"/>
        </label><br>
        <label>
            Dienstverlener:
            <select type="text" name="dienstverlener" id="2" value="">
                <option value="">Hier moet een foreach loop komen van alle gebruikers</option>
            </select>
        </label><br>
        <label>
            Timeslot:
            <select type="text" name="timeslot" id="1" value="">
                <option value="">Hier moet een foreach loop komen van alle timeslots die bovenstaande gebruiker heeft opengesteld.</option>
            </select>
        </label>
    </div>
    <button type="submit">Send</button>
</form>