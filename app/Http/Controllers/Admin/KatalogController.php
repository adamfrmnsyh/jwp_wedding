<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::all();
        return view('admin.katalog.index', compact('katalogs'));
    }

    public function create()
    {
        return view('admin.katalog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga'      => 'required|numeric',
            'deskripsi'  => 'nullable|string',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            // Simpan hanya relatif path (misalnya: katalog/xxxx.jpg)
            $path = $request->file('gambar')->store('katalog', 'public');
        }

        Katalog::create([
            'nama_paket' => $request->nama_paket,
            'harga'      => $request->harga,
            'deskripsi'  => $request->deskripsi,
            'gambar'     => $path,
        ]);

        return redirect()->route('admin.katalog.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $katalog = Katalog::findOrFail($id);
        return view('admin.katalog.edit', compact('katalog'));
    }

    public function update(Request $request, $id)
    {
        $katalog = Katalog::findOrFail($id);

        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga'      => 'required|numeric',
            'deskripsi'  => 'nullable|string',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $path = $katalog->gambar;

        if ($request->hasFile('gambar')) {
            // hapus gambar lama kalau ada
            if ($katalog->gambar && Storage::disk('public')->exists($katalog->gambar)) {
                Storage::disk('public')->delete($katalog->gambar);
            }

            // simpan gambar baru
            $path = $request->file('gambar')->store('katalog', 'public');
        }

        $katalog->update([
            'nama_paket' => $request->nama_paket,
            'harga'      => $request->harga,
            'deskripsi'  => $request->deskripsi,
            'gambar'     => $path,
        ]);

        return redirect()->route('admin.katalog.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $katalog = Katalog::findOrFail($id);

        // hapus gambar kalau ada
        if ($katalog->gambar && Storage::disk('public')->exists($katalog->gambar)) {
            Storage::disk('public')->delete($katalog->gambar);
        }

        $katalog->delete();

        return redirect()->route('admin.katalog.index')->with('success', 'Paket berhasil dihapus.');
    }
}
