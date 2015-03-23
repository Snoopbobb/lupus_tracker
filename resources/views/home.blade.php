@extends('layout')

@section('content')
	<div class="hero">
        <div class="hero-content">
            <h1>Welcome to Lupus Tracker</h1>
        </div>
        <div class="hero-buttons-wrapper">
            @if (Auth::user())
                <a href="/auth/logout"><button>Logout</button></a>
                <a href="/calendar/{{ Auth::user()->user_id }}"><button>Calendar</button></a>
            @else
                <a href="/auth/register"><button>Register</button></a>
                <a href="/auth/login"><button>Login</button></a>
            @endif
        </div>
    </div>
    <div class="second-section">
        <h3>Cool text goes here</h3>
    </div>
    <div class="third-section">
        <h3>More text or graphics</h3>
    </div>
    <div class="fourth-section">
        <h3>Cool text goes here</h3>
    </div>
    <div class="fifth-section">
        <h3>More cool stuff, but big</h3>
    </div>
    <div class="sixth-section">
        <h3>More text and stuff</h3>
    </div>
@endsection
