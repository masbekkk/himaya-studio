<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
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
}
