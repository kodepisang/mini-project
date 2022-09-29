@extends('layouts.app-frond', ['title' => 'welcome'])
@section('content')
    <div class="col-md-12 col-lg-12 d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-md-5 d-flex flex-column text-center">
            <h1 class="display-1">Welcome</h1>
            <div class="d-flex justify-content-center">
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_ojjrkacr.json" background="transparent"
                    speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </lottie-player>
            </div>
            <h1>Mini Project</h1>
            <div class="d-flex justify-content-center">
                <a href="{{ route('login') }}" class="btn btn-primary w-50 mx-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-warning w-50 mx-2">Daftar</a>
            </div>
        </div>

    </div>
@endsection
