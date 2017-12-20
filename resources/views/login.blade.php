@extends('partials.master')
@section('style-sheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('custom-css/login-form.css') }}">
@endsection
@section('content')
    <div class="loginBox">
        <img src="{{ asset('images/Icon-user.png') }}" class="user">
        <h2>Login Form</h2>
        @if(Session::has('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
        <form method="post" action="">
            {{ csrf_field() }}
            <p>Email</p>
            <input type="text" name="username" placeholder="Enter user name" value="{{ old('username') }}">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" name="" value="Sign In">
        </form>
    </div>
@endsection