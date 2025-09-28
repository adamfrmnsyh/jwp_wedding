@extends('admin.layouts.app')

@section('content')
<h1 class="text-3xl font-semibold mb-6">Tambah Paket</h1>

<form action="{{ route('admin.katalog.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-lg">
  @csrf
  <div class="mb-4">
    <label class="block mb-2">Nama Paket</label>
    <input type="text" name="nama_paket" class="w-full border rounded p-2">
  </div>

  <div class="mb-4">
    <label class="block mb-2">Harga</label>
    <input type="number" name="harga" class="w-full border rounded p-2">
  </div>

  <div class="mb-4">
    <label class="block mb-2">Deskripsi</label>
    <textarea name="deskripsi" rows="4" class="w-full border rounded p-2"></textarea>
  </div>

  <div class="mb-4">
    <label class="block mb-2">Gambar</label>
    <input type="file" name="gambar" class="w-full border rounded p-2">
  </div>

  <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
