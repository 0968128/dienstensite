@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <p id="greet" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Hi {{ Auth::user()->name }}, you look good today! <span class="caret"></span>
                </p>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <br><a href="/afspraken/mijn">Mijn afspraken</a>
                    <br><a href="/opentimeslots/mijn">Mijn open timeslots</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection