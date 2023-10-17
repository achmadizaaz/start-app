@extends('layouts.app')

@section('title', 'Users')

@section('content')
    {{-- Start page title --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="container page-title-box d-flex align-items-center justify-content-between py-3 rounded-2">
                <h4 class="mb-sm-0 fw-bold">USERS</h4>

                {{-- Breadcrumb --}}
                <div class="page-title-right">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                       Create User
                    </button>
                    <!-- Modal Create User -->
                    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="createUserModalLabel">Create User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div class="thumb mb-3">
                                                <img src="https://testing.unmerpas.ac.id/img/Universitas%20Merdeka%20Pasuruan.webp" id="previewImageUser" width="180px">
                                            </div>
                                            <label for="image" class="btn btn-primary">Upload Image</label>
                                            <input type="file" name="image" class="form-control d-none" id="image">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="username">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" name="email">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="password_default" class="form-label">Password Default <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="password_default">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="is_active" class="form-label">Is Active <span class="text-danger">*</span></label>
                                                <select name="is_active" id="is_active" class="form-select">
                                                    <option value="0">Non active</option>
                                                    <option value="1">Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    {{-- End page title --}}

    {{-- Start Content Row --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>No</th>
                                <th>Image</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Is active</th>
                                <th>Last login</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="https://testing.unmerpas.ac.id/img/Universitas%20Merdeka%20Pasuruan.webp" alt="{{ $user->username }}" width="40px" height="40px">
                                        </td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }} </td>
                                        <td>{{ $user->is_active ? 'Active' :'Non active' }}</td>
                                        <td>1 Hari yang lalu</td>
                                        <td>
                                           <div class="d-flex gap-1">
                                                <a href="{{ route('users.show', $user->slug) }}" class="btn btn-sm btn-info rounded-5"><i class="bi bi-eye"></i></a>
                                                <a href="#" class="btn btn-sm btn-warning rounded-5"><i class="bi bi-pencil-square"></i></a>
                                                <form action="#" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger rounded-5"><i class="bi bi-trash3"></i></button>
                                                </form>
                                           </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> 
    <!-- End content row -->
@endsection