<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Cache;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'rt_rw' => ['required', 'regex:/^\d{3}\/\d{3}$/'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'kartu_identitas' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        DB::beginTransaction();

        try {
            $data['kartu_identitas'] = null;
            if ($request->hasFile('kartu_identitas')) {
                $file = $request->file('kartu_identitas');
                $filePath = $file->store('kartu_identitas_pelanggan', 'public');
                $data['kartu_identitas'] = $filePath; // Save the file path in the notes field
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->string('password')),
                'rt_rw' => $request->rt_rw,
                'kartu_identitas' => $data['kartu_identitas'],
            ]);
            // Create the initial bill for the user
            $initialBill = Bill::create([
                'user_id' => $user->id,
                'bill_date' => now(),           // Set the bill date to current date
                'status' => 'NOT YET PAYBILL',            // Default status, adjust as necessary
                'v_start' => 0,                  // Initial value, adjust as needed
                'v_end' => 0,                    // Initial value, adjust as needed
                'v_total' => 0,                  // Initial value, adjust as needed
                'tunggakan' => 0,                // Initial value, adjust as needed
                'total_bill' => Cache::get('fee_register'),               // Initial value, adjust as needed
                'pay_regis' => Cache::get('fee_register')                 // Initial payment, adjust as needed
            ]);
            event(new Registered($user));

            Auth::login($user);
            DB::commit();
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
}
