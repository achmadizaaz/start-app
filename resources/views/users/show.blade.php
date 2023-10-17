@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
    {{-- Start page title --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="container page-title-box d-flex align-items-center justify-content-between py-3 rounded-2">
                <h4 class="mb-sm-0 fw-bold">DETAIL USER</h4>

                <div class="page-title-right">
                    <div class="d-flex gap-1">
                        <a href="#" class="btn btn-sm btn-warning rounded-4 px-3">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger rounded-4 px-3">
                                <i class="bi bi-trash3"></i> Delete
                            </button>
                        </form>
                   </div>

                    
                </div> 
            </div>
        </div>
    </div>
    {{-- End page title --}}

    {{-- Start Content Row --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card " style="height: 215px">
                <div class="card-body">
                    <div class="mb-3 text-center">
                        <img src="https://testing.unmerpas.ac.id/img/Universitas%20Merdeka%20Pasuruan.webp" alt="{{ $user->name }}" height="180px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <tr>
                                    <td class="fw-bold">Name</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Username</td>
                                    <td>{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Is active</td>
                                    <td>{{ $user->is_active ? 'Active' : 'Non active' }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table">
                                <tr>
                                    <td class="fw-bold">Password Default</td>
                                    <td>{{ $user->password_default }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Last login at</td>
                                    <td>{{ $user->last_login_at ? $user->last_login_at->diffForHumas() : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Last login ip</td>
                                    <td>{{ $user->last_login_ip ? $user->last_login_ip: '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    <!-- End content row -->
@endsection