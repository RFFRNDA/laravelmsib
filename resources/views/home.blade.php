@extends('layouts.main')

@section('container')
    <h1>Halaman Utama</h1>
    <div class="row">
        <div class="col-sm-3">
            <div class="p-3 mb-2 bg-primary text-dark rounded-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <a href="/profile" class="btn btn-primary">Go to Profile page</a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="p-3 mb-2 bg-warning text-dark rounded-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Education</h5>
                    <a href="/education" class="btn btn-warning">Go to Education page</a>
                </div>
            </div>
            </div>
        </div>
@endsection