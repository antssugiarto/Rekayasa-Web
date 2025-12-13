<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // READ: /produk/read (GET)
    public function readAll()
    {
        $data = Produk::with('kategori')->get();
        return response()->json($data);
    }

    // READ: /produk/read (GET)
    public function readOne($id)
    {
        $data = Produk::with('kategori')->find($id);
        return response()->json($data);
    }

    // CREATE: /produk/create (POST)
    public function create(Request $request)
    {
        $produk = Produk::create($request->all());

        return response()->json([
            'message' => 'Produk berhasil dibuat',
            'produk'  => $produk,
        ], 200);
    }

    // UPDATE: /produk/update/{id} (PUT/PATCH)
    public function update($id, Request $request)
    {
        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return response()->json([
            'message' => 'Produk berhasil diupdate',
            'produk'  => $produk,
        ], 200);
    }

    // DELETE: /produk/delete/{id} (DELETE) 
    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus',
        ], 200);
    }
}
