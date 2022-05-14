@extends('layout.auth-layout')
@section('konten')
    <main class="form-signin">
        <form action="/register" method="POST">
            @csrf
            <img class="mb-4" src="{{ URL::asset('assets/logo-gabungan.png') }}" alt="" height="72">

            <h1 class="h3 mb-3 fw-normal">Register your account</h1>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="text" name="utusanSekolah" class="form-control" id="utusanSekolah"
                    placeholder="SMA Negeri 1 Sidoarjo">
                <label for="utusanSekolah">Utusan Sekolah</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            {{-- <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
                <label for="floatingPassword">Confirm Password</label>
            </div> --}}
            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            <p class="my-3">Have an account? <a href="/login" class="nav-link fw-bold">Sign In</a></p>
        </form>
    </main>
@endsection
