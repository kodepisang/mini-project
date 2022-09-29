@extends('layouts.app-backend', ['title' => 'Users Management'])

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12 col-xs-12 col-sm-12 ">
                <div class="col-md-12 col-xs-12 col-sm-12 mt-5 mb-1">
                    <h1><i class="bi bi-people"></i> Data user</h1>
                    <div class="col-xs-12 d-flex justify-content-end">
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
                            <th>#</th>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $row)
                            <tr>
                                <td><button type="button" class="btn btn-outline-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                    <button type="button" class="btn btn-outline-warning btn-sm"><i
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
@endsection
