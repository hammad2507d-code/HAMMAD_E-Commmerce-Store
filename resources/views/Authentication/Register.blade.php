@extends('layouts.Auth')

@section('title', 'Register')

@section('content')

<h2 class="fw-bold text-center mb-4">
    Create Account
</h2>

<form>

    <div class="mb-3">
        <label>Full Name</label>
        <input type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email Address</label>
        <input type="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control">
    </div>

    <div class="mb-4">
        <label>Confirm Password</label>
        <input type="password" class="form-control">
    </div>

    <button class="btn btn-success btn-auth w-100">
        Create Account
    </button>

</form>

<div class="text-center mt-3">
    Already have an account?
    <a href="/login">Login</a>
</div>

@endsection