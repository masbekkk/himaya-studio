<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            try {
                $vouchers = Voucher::all();
                return formatResponse(true, 'Vouchers retrieved successfully', $vouchers);
            } catch (\Exception $e) {
                return formatResponse(false, 'Error retrieving vouchers', null, $e->getMessage(), 500);
            }
        } else {
            return view('admin.voucher');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'voucher_name' => 'required|string|max:255',
            'voucher_code' => 'required|string|max:255|unique:vouchers,voucher_code',
            'disc_percentage' => 'required|integer|min:0|max:100',
            'max_disc' => 'required|integer|min:0',
            'minimum_payments' => 'required|integer|min:0',
            'status' => 'required|in:ACTIVE,INACTIVE',
        ]);

        try {
            $voucher = Voucher::create($validated);
            return formatResponse(true, 'Voucher created successfully', $voucher, null, 201);
        } catch (\Exception $e) {
            return formatResponse(false, 'Error creating voucher', null, $e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Voucher $voucher)
    {
        try {
            return formatResponse(true, 'Voucher retrieved successfully', $voucher);
        } catch (\Exception $e) {
            return formatResponse(false, 'Error retrieving voucher', null, $e->getMessage(), 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher)
    {
        $validated = $request->validate([
            'voucher_name' => 'required|string|max:255',
            'voucher_code' => 'required|string|max:255|unique:vouchers,voucher_code,' . $voucher->id,
            'disc_percentage' => 'required|integer|min:0|max:100',
            'max_disc' => 'required|integer|min:0',
            'minimum_payments' => 'required|integer|min:0',
            'status' => 'required|in:ACTIVE,INACTIVE',
        ]);

        try {
            $voucher->update($validated);
            return formatResponse(true, 'Voucher updated successfully', $voucher);
        } catch (\Exception $e) {
            return formatResponse(false, 'Error updating voucher', null, $e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voucher $voucher)
    {
        try {
            $voucher->delete();
            return formatResponse(true, 'Voucher deleted successfully');
        } catch (\Exception $e) {
            return formatResponse(false, 'Error deleting voucher', null, $e->getMessage(), 500);
        }
    }

    public function checkVoucher(Request $request)
    {
        try {
            $voucher = Voucher::whereRaw('BINARY voucher_code = ?', [$request->voucher])->first();
            if (!$voucher) {
                return formatResponse(false, 'Voucher Tidak Terdaftar!', null, "Voucher Tidak Terdaftar!", 422);
            }

            if ($request->price < $voucher->minimum_payments) {
                return formatResponse(false, 'Tidak Mencapai Minimun Pembelian: ' . format_price_idr($voucher->minimum_payments) . '!', null,  'Tidak Mencapai Minimun Pembelian: ' . format_price_idr($voucher->minimum_payments) . '!', 422);
            }
            $newPrice = countDisc($request->price, $voucher->disc_percentage, $voucher->max_disc);
            return formatResponse(true, 'Voucher applied successfully', ['new_price' => $newPrice, 'voucher_id' => Crypt::encryptString($voucher->id)]);
        } catch (\Exception $e) {
            return formatResponse(false, 'Error deleting voucher', null, $e->getMessage(), 500);
        }
    }
}
