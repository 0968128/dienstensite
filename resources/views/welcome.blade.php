@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lucas' dienstensite</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/profile') }}">Profiel</a>
                    @else
                        Je moet <a href="{{ route('login') }}">inloggen</a> om een afspraak te maken. Heb je nog geen account? Je kunt je ook

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">nu registreren</a>.
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Lucas' {{$foo}}site
                </div>

                <div class="links">
                @if (Route::has('login'))
                    <a href="/about">Over ons</a>
                    <a href="/contact">Contact</a>
                    @auth
                        <a href="/appointments">Afsprakenoverzicht</a>
                        <a href="/timeslots">Timeslotsoverzicht</a>
                        <a href="/appointments/create">Afspraak maken</a>
                        <a href="/timeslots/create">Timeslot openzetten</a>
                        <a href="/moderators">Moderators</a>
                    @endauth
                @endif
                </div>
            </div>
        </div>
    </body>
</html>
