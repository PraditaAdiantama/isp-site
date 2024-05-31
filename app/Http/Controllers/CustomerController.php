<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::with('packet')->orderBy('created_at', $request->input('order') ?? 'asc')->paginate(10);
        $packets = Packet::all();

        if ($request->has('search')) {
            $customers = Customer::where('nama', 'LIKE', "%" . $request->input('search') . "%")->paginate(10);

            return response()->json($customers);
        }

        if ($request->has('s')) $customers = Customer::where('nama', 'LIKE', "%" . $request->input('s') . "%")->paginate(10);

        return view('pages.customers', [
            'customers' => $customers,
            'packets' => $packets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {

        return view('pages.customers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        Customer::create($request->validated());

        return redirect()->route('customer')->with('success', 'Berhasil menambah customer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validator = Validator::make($request->all(), [
            'alamat' => 'nullable|string|min:3',
            'tanggal_awal_berlangganan' => 'date|nullable',
            'packet_id' => 'nullable|integer|exists:packets,id',
            'keterangan' => 'nullable|string|min:3'
        ]);

        if ($validator->fails()) return redirect()->route('customer')->withErrors(['errors' => $validator->errors()]);

        $customer->update($validator->validated());

        return redirect()->route('customer')->with('success', 'Berhasil update customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer')->with('success', 'Berhasil menghapus customer');
    }
}
