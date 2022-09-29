@extends('layouts.app-backend', ['title' => 'items'])

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h1>Hello items</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
