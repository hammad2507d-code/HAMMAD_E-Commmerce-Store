@extends('layouts.Auth')

@section('title', 'Login')

@section('content')

<h2 class="fw-bold text-center mb-4">
    Login Account
</h2>

<form>

    <div class="mb-3">
        <label>Email Address</label>
        <input type="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control">
    </div>

    <button class="btn btn-primary btn-auth w-100">
        Login
    </button>

</form>

<div class="text-center mt-3">
    Don't have an account?
    <a href="/register">Register</a>
</div>

@endsection

