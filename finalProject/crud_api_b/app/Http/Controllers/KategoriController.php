<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // READ: /kategori/read (GET)
    public function readAll()
    {
        $data = Kategori::all();
        return response()->json($data);
    }

    // READ: /kategori/read/{id} (GET)
    public function readOne($id)
    {
        $data = Kategori::find($id);
        return response()->json($data);
    }

    // CREATE: /kategori/create (POST)
    public function create(Request $request)
    {
        $kategori = Kategori::create($request->all());

        return response()->json([
            'message'  => 'Kategori berhasil dibuat',
            'kategori' => $kategori,
        ], 200);
    }

    // UPDATE: /kategori/update/{id} (PUT/PATCH)
    public function update($id, Request $request)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        return response()->json([
            'message'  => 'Kategori berhasil diupdate',
            'kategori' => $kategori,
        ], 200);
    }

    // DELETE: /kategori/delete/{id} (DELETE) 
    public function delete($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return response()->json([
            'message' => 'Kategori berhasil dihapus',
        ], 200);
    }
}
