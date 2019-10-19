<h1>Appointments</h1>

@foreach ($appointments as $appointment)
<ul>{{ $appointment->name }}</ul>
@endforeach