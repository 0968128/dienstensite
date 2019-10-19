<form method="post" action="/store/timeslot">
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
                <option type="time" value="9:00">9:00</option>
                <option type="time" value="10:00">10:00</option>
                <option type="time" value="11:00">11:00</option>
                <option type="time" value="12:00">12:00</option>
                <option type="time" value="13:00">13:00</option>
                <option type="time" value="14:00">14:00</option>
                <option type="time" value="15:00">15:00</option>
                <option type="time" value="16:00">16:00</option>
            </select>
        </label>
    </div>
    <button type="submit">Send</button>
</form>