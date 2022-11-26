@extends('layouts.app-backend', ['title' => 'Users Management'])

{{-- {{ session()->get('pesan') }} --}}
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12 col-xs-12 col-sm-12 ">
                <div class="col-md-12 col-xs-12 col-sm-12 mt-5 mb-1">
                    <h1><i class="bi bi-people"></i> Data user</h1>
                    <div class="col-xs-12 d-flex justify-content-between">
                        {{-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#addDataUser"><i class="bi bi-plus-square-fill"></i>
                            Add
                            user</button> --}}
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
                <div class="col-xs-12">
                    @if (session()->has('pesan'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session()->get('pesan') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr class="table-secondary">
                            <th width="7%">#</th>
                            <th width="5%">No</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $row)
                            <tr>
                                <td>
                                    <form action="{{ route('userManagmentDelete', $row->id) }}" method="post">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <div class="btn-group" role="group" style="min-height: 30px">
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="bi bi-trash"></i></button>
                                            <a href="{{ route('userManagmentEdit', $row->id) }}"
                                                class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                                        </div>
                                    </form>
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

                </div>

            </div>
        </div>
    </div>
@endsection
