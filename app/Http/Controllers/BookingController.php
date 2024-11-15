<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{

    public function to_checkout(Request $request)
    {
        if ($request->isMethod('post')) {
            // Store all request data in the session
            session(['checkout' => $request->all()]);

            // Redirect to the same route to handle the GET request
            return view('checkout', $request->all());
        } else {
            if (session()->has('checkout')) {
                $data = session('checkout');
                // Pass data to the view
                return view('checkout', $data);
            }
            return redirect()->route('book-now');
        }
    }

    public function open_modal(Request $request)
    {
        return view('modals.modal-book', ['product' => 'Self Photo Studio'])->render();
    }

    // Create a new booking
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'product' => 'required|string',
                'date_books' => 'required|date',
                'duration' => 'required|string',
                'price' => 'required|string',
                'add_on' => 'nullable|string',
                'start_time' => 'required|string',
                'end_time' => 'required|string',
                'details' => 'nullable|string',
                'booker_name' => 'required|string',
                'booker_email' => 'required|email',
                'booker_phone' => 'required|string',
            ]);

            $booking = Booking::create($validatedData);

            return formatResponse(true, 'Booking created successfully.', $booking);
        } catch (\Exception $e) {
            Log::error('Error creating booking: ' . $e->getMessage());
            return formatResponse(false, 'Failed to create booking.', null, $e->getMessage(), 500);
        }
    }

    // Retrieve all bookings
    public function index()
    {
        try {
            $bookings = Booking::all();
            return formatResponse(true, 'Bookings retrieved successfully.', $bookings);
        } catch (\Exception $e) {
            Log::error('Error retrieving bookings: ' . $e->getMessage());
            return formatResponse(false, 'Failed to retrieve bookings.', null, $e->getMessage(), 500);
        }
    }

    // Retrieve a single booking by ID
    public function show($id)
    {
        try {
            $booking = Booking::findOrFail($id);
            return formatResponse(true, 'Booking retrieved successfully.', $booking);
        } catch (\Exception $e) {
            Log::error('Error retrieving booking: ' . $e->getMessage());
            return formatResponse(false, 'Booking not found.', null, $e->getMessage(), 404);
        }
    }

    // Update a booking
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'product' => 'nullable|string',
                'date_books' => 'nullable|date',
                'duration' => 'nullable|string',
                'price' => 'nullable|string',
                'add_on' => 'nullable|string',
                'start_time' => 'nullable|string',
                'end_time' => 'nullable|string',
                'details' => 'nullable|string',
                'booker_name' => 'nullable|string',
                'booker_email' => 'nullable|email',
                'booker_phone' => 'nullable|string',
            ]);

            $booking = Booking::findOrFail($id);
            $booking->update($validatedData);

            return formatResponse(true, 'Booking updated successfully.', $booking);
        } catch (\Exception $e) {
            Log::error('Error updating booking: ' . $e->getMessage());
            return formatResponse(false, 'Failed to update booking.', null, $e->getMessage(), 500);
        }
    }

    // Delete a booking
    public function destroy($id)
    {
        try {
            $booking = Booking::findOrFail($id);
            $booking->delete();
            return formatResponse(true, 'Booking deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting booking: ' . $e->getMessage());
            return formatResponse(false, 'Failed to delete booking.', null, $e->getMessage(), 500);
        }
    }
}
