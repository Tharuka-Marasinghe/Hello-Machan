@extends('admin.master')
@section('content')

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
                    <th>email</th>
                    <th>datetime</th>
                    <th>people</th>
                    <th>message</th>

                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($bookings as $booking)
                @php
                //dd($slider)
                @endphp
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->datetime }}</td>
                    <td>{{ $booking->people }}</td>
                    <td>{{ $booking->message }}</td>


                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sliderModal{{ $booking->id }}">Accept</button>
                        <a href="/booking/reject/{{ $booking->id }}" class="btn btn-danger">Reject</a>
                    </td>
                </tr>


                @endforeach




            </tbody>
        </table>
    </div>
</div>

@endsection