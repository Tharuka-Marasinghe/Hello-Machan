@extends('admin.master')

@section('content')
<div class="px-4 container-fluid">
    <h1 class="mt-4">Menu Manager</h1>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Menu
</button>


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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/saveMenu" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="imageUpload" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-select">
                                <option value="" disabled selected>Select Category</option>
                                <option value="Rice">Rice</option>
                                <option value="Kottu">Kottu</option>
                                <option value="Biriyani">Biriyani</option>
                                <option value="Soup">Soup</option>
                            </select>
                        </div>

                        <!-- Size -->
                        <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <select name="size" id="size" class="form-select">
                                <option value="" disabled selected>Select Size</option>
                                <option value="Small">Small</option>

                                <option value="Large">Large</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Menu</button>
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
                        <th>name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>image</th>
                        <th>category</th>
                        <th>size</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>{{ $menu->price }}</td>
                        <td><img width="100" src="{{asset('storage/'.$menu->image) }}" alt=""></td>
                        <td>{{ $menu->category }}</td>
                        <td>{{ $menu->size }}</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#menuModal{{ $menu->id }}">Edit</button>
                            <a href="/deleteMenu/{{ $menu->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <div class="modal fade" id="menuModal{{ $menu->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('menu.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                    <div class="modal-body">

                                        <!-- Name -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                        </div>

                                        <!-- Description -->
                                        <div class="mb-3">
                                            <label for="description" class="form-label">description</label>
                                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
                                        </div>

                                        <!-- Price -->
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="mb-3">
                                            <label for="imageUpload" class="form-label">Image Upload</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>

                                        <!-- Category -->
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select name="category" id="category" class="form-select">
                                                <option value="" disabled selected>Select Category</option>
                                                <option value="Rice">Rice</option>
                                                <option value="Kottu">Kottu</option>
                                                <option value="Biriyani">Biriyani</option>
                                                <option value="Soup">Soup</option>
                                            </select>
                                        </div>

                                        <!-- Size -->
                                        <div class="mb-3">
                                            <label for="size" class="form-label">Size</label>
                                            <select name="size" id="size" class="form-select">
                                                <option value="" disabled selected>Select Size</option>
                                                <option value="Small">Small</option>

                                                <option value="Large">Large</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Menu</button>
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