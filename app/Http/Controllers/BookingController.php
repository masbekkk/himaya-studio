<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function to_checkout(Request $request) {
        // dd($request->all());
        // "add_on" => "[{"addon1":"Kustom"},{"addon2":"Hard Copy"}]"
        // $req = [
        // "_token" => "GptRp3jrRYA7yOPHJ3th5Oys8uRTMiEiIWq5UGRY",
        // "date" => "2024-11-13",
        // "duration" => "60",
        // "price" => "219000",
        // "product" => "Self Photo Studio",
        // "add_on" => "[{"addon1":"Kustom"},{"addon2":"Hard Copy"}]",
        // ];
        return view('checkout', $request->all());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
