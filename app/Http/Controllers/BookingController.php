<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index()

    {
        $bookings = Booking::all();
        return view("admin.bookings", compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'datetime' => 'required|date|after:now',
            'people'   => 'required|integer|min:1',
            'message'  => 'nullable|string',
        ]);

        try {
            // Convert the datetime to MySQL format
            $formattedDateTime = \Carbon\Carbon::createFromFormat(
                'm/d/Y g:i A',
                $request->datetime
            )->format('Y-m-d H:i:s');

            $booking = new Booking();
            $booking->name = $request->name;
            $booking->email = $request->email;
            $booking->datetime = $formattedDateTime;
            $booking->people = $request->people;
            $booking->message = $request->message;
            $booking->save();

            return back()->with('success', 'Table booked successfully!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Invalid date format')
                ->withInput();
        }
    }
}
