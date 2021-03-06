@extends('layout.auth-layout')
@section('konten')
    <main class="form-signin">
        <form>
            <img class="mb-4" src="{{ URL::asset('assets/logo-gabungan.png') }}" alt="" height="72">

            <h1 class="h3 mb-3 fw-normal">Sign into your account</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="my-3">Don't have an account? <a href="/register" class="nav-link fw-bold">Register here</a>
            </p>
        </form>
    </main>
@endsection
