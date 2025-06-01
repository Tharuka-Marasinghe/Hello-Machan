@extends('admin.master')
@section( 'content')

<div class="px-4 container-fluid">
    <h1 class="mt-4">Settings</h1>
</div>

<div>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>

    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    </div>
    <div class="container">
        <h2>Change Site Settings</h2>
        <hr />
        <form action="/settingsUpdate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="site_name" class="form-label">Site Name</label>
                <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $setting['site_name'] }}">
            </div>
            <div class="mb-3">
                <label for="site_email" class="form-label">Site Email</label>
                <input type="email" class="form-control" id="site_email" name="site_email" value="{{ $setting['site_email'] }}">
            </div>
            <div class="mb-3">
                <label for="site_phone" class="form-label">Site Phone</label>
                <input type="text" class="form-control" id="site_phone" name="site_phone" value="{{ $setting['site_phone'] }}">
            </div>
            <div class="mb-3">
                <label for="site_address" class="form-label">Site Address</label>
                <input type="text" class="form-control" id="site_address" name="site_address" value="{{ $setting['site_address'] }}">
            </div>



            <button type="submit" class="btn btn-primary">Update Settings</button>
    </div>
    @endsection