@extends('layouts.app')

@section('content')
<div class="jumbotron text-centre">
     <h1>Welcome To Arnold Mashely</h1>
     <p>This is the home page of the laravel project for the progress learning</p>
     <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="{{ route('register') }}">Register</a></p>
</div>
@endsection
