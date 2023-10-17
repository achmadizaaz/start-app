@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    {{-- Start page title --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="container page-title-box d-flex align-items-center justify-content-between py-3 rounded-2">
                <h4 class="mb-sm-0 fw-bold">Roles</h4>

                {{-- Breadcrumb --}}
                <div class="page-title-right">
                   <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createRoleModal">
                        Create Role
                    </button>
                    <!-- Modal Create Role -->
                    <div class="modal fade" id="createRoleModal" tabindex="-1" aria-labelledby="createRoleModalLabel" aria-hidden="true">
                        <form action="{{ route('users.roles.store') }}" method="POST">
                            @csrf
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="createRoleModalLabel">Create Role</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="name-role" class="form-label">Name Role</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                                <th>Role Name</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->created_at->diffForHumans()}}</td>
                                        <td>
                                           <div class="d-flex gap-1">
                                                <form action="{{ route('users.roles.delete', $role->name) }}" method="POST">
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