<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacketRequest;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $packets = Packet::orderBy('created_at', $request->input('order') ?? 'asc')->paginate(10);

        if ($request->has('s')) {
            $packets = Packet::where('nama', 'LIKE', '%' . $request->input('s') . '%')->paginate(10);
        }

        return view('pages.packets', ['packets' => $packets]);
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
    public function store(PacketRequest $request)
    {
        Packet::create($request->validated());

        return redirect()->back()->with('success', 'Berhasil menambah paket baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Packet $packet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Packet $packet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Packet $packet)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'nullable|string|min:3',
            'harga' => 'nullable|integer|min:1000'
        ]);

        if ($validator->fails()) return redirect()->route('packet')->withErrors(['error' => $validator->errors()]);

        $packet->update($validator->validated());

        return redirect()->route('packet')->with('success', 'Berhasil edit paket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packet $packet)
    {
        $packet->delete();

        return redirect()->route('packet')->with('success', 'Berhasil menghapus paket');
    }
}
