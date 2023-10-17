@extends('layouts.app')
@section('title-page', 'Bangunan Aplikasi Sarpras')
@section('content')

@section('content')
    {{-- Start page title --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="container page-title-box d-flex align-items-center justify-content-between py-3 rounded-2">
                <h4 class="mb-sm-0 fw-bold">DASHBOARD</h4>

                {{-- Breadcrumb --}}
                <div class="page-title-right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah
                    </button>
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
                    
                </div>
            </div>
        </div> <!-- end col -->
    </div> 
    <!-- End content row -->
@endsection