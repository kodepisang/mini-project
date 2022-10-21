@extends('layouts.app-backend', ['title' => 'Users Management'])

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12 col-xs-12 col-sm-12 ">
                <div class="col-md-12 col-xs-12 col-sm-12 mt-5 mb-1">
                    <h1><i class="bi bi-people"></i> Data user</h1>
                    <div class="col-xs-12 d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#addDataUser"><i class="bi bi-plus-square-fill"></i>
                            Add
                            user</button>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">Cari Nama</label>
                            </div>
                            <div class="col-auto">
                                <input type="password" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>


                </div>
                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr class="table-secondary">
                            <th width="5%">#</th>
                            <th width="5%">No</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $row)
                            <tr>
                                <td><button type="button" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                    <button type="button" class="btn btn-warning btn-sm"><i
                                            class="bi bi-pencil"></i></button>
                                </td>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addDataUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addDataUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataUserLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
