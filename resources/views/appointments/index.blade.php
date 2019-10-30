<h1>Afspraken</h1>
<form name="searchfilter" id="searchfilter" action="">
    <input type="text" name="searchbar" placeholder="Typ een zoekterm...">
        <select type="text" name="filter">
            <option value="">Alle afspraken</option>
            <option value="">Ik als klant</option>
            <option value="">Ik als dienstverlener</option>
        </select>
    <input type="submit" name="submit" value="zoeken">
</form>

@foreach ($appointments as $appointment)
<ul>{{ $appointment->name }}</ul>
@endforeach