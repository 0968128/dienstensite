@extends('layouts.app')

@section('content')
    <h1>These dudes are our moderators</h1>
    <p>
        <ul>
            <li><form>@if()<input type="submit" value="Promoveer">@else()<input type="submit" value="Degradeer">@endif</form></li>
        </ul>
    </p>
@endsection