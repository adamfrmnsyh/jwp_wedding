@extends('admin.layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-3">✏️ Edit Paket Katalog</h2>

    <form action="{{ route('admin.katalog.update', $katalog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        {{-- Nama Paket --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Paket</label>
            <input type="text" name="nama_paket" 
                   value="{{ old('nama_paket', $katalog->nama_paket) }}"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 p-2" required>
        </div>

        {{-- Harga --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
            <input type="number" name="harga" 
                   value="{{ old('harga', $katalog->harga) }}"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 p-2" required>
        </div>

        {{-- Deskripsi --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4"
                      class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 p-2"
                      placeholder="Tambahkan deskripsi paket...">{{ old('deskripsi', $katalog->deskripsi) }}</textarea>
        </div>

        {{-- Gambar --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Paket</label>
            @if ($katalog->gambar)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $katalog->gambar) }}" 
                         alt="{{ $katalog->nama_paket }}"
                         class="h-32 w-32 object-cover rounded-lg shadow">
                </div>
            @endif
            <input type="file" name="gambar" 
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 p-2">
            <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar.</p>
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.katalog.index') }}" 
               class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">
                Batal
            </a>
            <button type="submit"
                    class="px-4 py-2 bg-pink-600 text-white rounded-lg shadow hover:bg-pink-700">
                💾 Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
