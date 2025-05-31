@extends('admin.master')
@section('content')

<div class="px-4 container-fluid">
    <h1 class="mt-4">Testimonial</h1>
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TestimonialModal">
        Add Testimonial
    </button>

    <!-- Modal -->
    <div class="modal fade" id="TestimonialModal" tabindex="-1" role="dialog" aria-labelledby="TestimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TestimonialModalLabel">Add Testimonial Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/saveTestimonial" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="tname" class="form-label">name</label>
                            <input type="text" class="form-control" id="tname" name="tname" placeholder="Enter Name">
                        </div>

                        <!-- Profession -->
                        <div class="mb-3">
                            <label for="tprofession" class="form-label">Profession</label>
                            <input type="text" class="form-control" id="tprofession" name="tprofession" placeholder="Enter Profession">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="tdescription" class="form-label">Description</label>
                            <input type="text" class="form-control" id="tdescription" name="tdescription" placeholder="Enter Description">
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="timage" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="timage" name="timage">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Modal -->

    <div class="mb-4 card">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>profession</th>
                        <th>description</th>
                        <th>image</th>

                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($testimonials as $testimonial)
                    @php
                    //dd($slider)
                    @endphp
                    <tr>
                        <td>{{ $testimonial->id }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->profession }}</td>
                        <td>{{ $testimonial->description }}</td>
                        <td><img width="100" src="{{asset('storage/'.$testimonial->image) }}" alt=""></td>

                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sliderModal{{ $testimonial->id }}">Edit</button>
                            <a href="/deleteTestimonial/{{ $testimonial->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <div class="modal fade" id="sliderModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Testimonial{{ $testimonial->id }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="/updateTestimonial" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="testimonial_id" value="{{ $testimonial->id }}">
                                    <div class="modal-body">

                                        <!-- Name -->
                                        <div class="mb-3">
                                            <label for="tname" class="form-label">name</label>
                                            <input type="text" class="form-control" id="tname" name="tname" placeholder="Enter Name">
                                        </div>

                                        <!-- Profession -->
                                        <div class="mb-3">
                                            <label for="tprofession" class="form-label">Profession</label>
                                            <input type="text" class="form-control" id="tprofession" name="tprofession" placeholder="Enter Profession">
                                        </div>

                                        <!-- Description -->
                                        <div class="mb-3">
                                            <label for="tdescription" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="tdescription" name="tdescription" placeholder="Enter Description">
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="mb-3">
                                            <label for="timage" class="form-label">Image Upload</label>
                                            <input type="file" class="form-control" id="timage" name="timage">
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </tbody>
            </table>
        </div>
    </div>

    @endsection