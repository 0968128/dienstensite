<form method="post" action="/timeslots/store">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
    <div>
        <label>
            Datum:<input type="date" name="date" id="1" value="">
        <label>
    </div>
    <div>
        <label>
            Timeslot:
            <select name="timeslot" id="1">
                <option type="time" value="7:00">7:00</option>
                <option type="time" value="8:00">8:00</option>
                <option type="time" value="9:00">9:00</option>
                <option type="time" value="10:00">10:00</option>
                <option type="time" value="11:00">11:00</option>
                <option type="time" value="12:00">12:00</option>
                <option type="time" value="13:00">13:00</option>
                <option type="time" value="14:00">14:00</option>
                <option type="time" value="15:00">15:00</option>
                <option type="time" value="16:00">16:00</option>
                <option type="time" value="17:00">17:00</option>
                <option type="time" value="18:00">18:00</option>
                <option type="time" value="19:00">19:00</option>
                <option type="time" value="20:00">20:00</option>
            </select>
        </label>
    </div>
    <button type="submit">Send</button>
</form>