@extends('admin.layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-3xl font-semibold">Data Katalog</h1>
  <a href="{{ route('admin.katalog.create') }}" class="bg-pink-600 text-white px-4 py-2 rounded">Tambah Paket</a>
</div>

<table class="min-w-full bg-white border rounded shadow">
  <thead>
    <tr class="bg-gray-200 text-left">
      <th class="px-4 py-2 border">#</th>
      <th class="px-4 py-2 border">Nama Paket</th>
      <th class="px-4 py-2 border">Harga</th>
      <th class="px-4 py-2 border">Gambar</th>
      <th class="px-4 py-2 border">Deskripsi</th>
      <th class="px-4 py-2 border">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($katalogs as $index => $katalog)
    <tr>
      <td class="px-4 py-2 border">{{ $index + 1 }}</td>
      <td class="px-4 py-2 border">{{ $katalog->nama_paket }}</td>
      <td class="px-4 py-2 border">Rp {{ number_format($katalog->harga, 0, ',', '.') }}</td>
      <td class="px-4 py-2 border">
        @if($katalog->gambar)
        <img src="{{ asset('storage/' . $katalog->gambar) }}"
          alt="{{ $katalog->nama_paket }}"
          class="w-32">

        @else
        <span>Tidak ada gambar</span>
        @endif
      </td>
      <td class="px-4 py-2 border">{{ Str::limit($katalog->deskripsi, 50) }}</td>
      <td class="px-4 py-2 border">
        <a href="{{ route('admin.katalog.edit', $katalog->id) }}" class="text-blue-600">Edit</a> |
        <form action="{{ route('admin.katalog.destroy', $katalog->id) }}" method="POST" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-600" onclick="return confirm('Yakin mau hapus paket ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="4" class="text-center p-4">Belum ada data katalog.</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection