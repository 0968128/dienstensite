<h1>Timeslots</h1>

@foreach ($timeslots as $timeslot)
<ul>{{ $timeslot->name }}</ul>
@endforeach