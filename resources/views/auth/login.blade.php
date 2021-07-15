@extends('layouts.auth-master')

@section('title')
    Login
@endsection

@section('content')
    <h4>Hello! </h4>
    <h6 class="font-weight-light">Silahkan Login</h6>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="" class="pt-3 needs-validation" novalidate="">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control form-control-lg rounded" name="email" placeholder="Username atau Email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg rounded" name="password" placeholder="Password" required>
        </div>
        <div class="mt-3">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Masuk</button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Belum punya akun? <a href="{{ route('register')}}" class="text-primary">Daftar</a>
        </div>
    </form>
@endsection
