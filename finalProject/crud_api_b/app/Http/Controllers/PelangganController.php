<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // READ: /pelanggan/read (GET)
    public function readAll()
    {
        $data = Pelanggan::all();
        return response()->json($data);
    }

    // READ: /pelanggan/read/{id} (GET)
    public function readOne($id)
    {
        $data = Pelanggan::find($id);
        return response()->json($data);
    }

    // CREATE: /pelanggan/create (POST)
    public function create(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());

        return response()->json([
            'message'   => 'Pelanggan berhasil dibuat',
            'pelanggan' => $pelanggan,
        ], 200);
    }

    // UPDATE: /pelanggan/update/{id} (PUT/PATCH)
    public function update($id, Request $request)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return response()->json([
            'message'   => 'Pelanggan berhasil diupdate',
            'pelanggan' => $pelanggan,
        ], 200);
    }

    // DELETE: /pelanggan/delete/{id} (DELETE) 
    public function delete($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return response()->json([
            'message' => 'Pelanggan berhasil dihapus',
        ], 200);
    }
}
