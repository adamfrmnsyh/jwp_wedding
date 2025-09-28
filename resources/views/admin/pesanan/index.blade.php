@extends('admin.layouts.app')

@section('content')
<h1 class="text-3xl font-semibold mb-6">Pesanan Masuk</h1>

<table class="min-w-full bg-white border rounded shadow">
  <thead>
    <tr class="bg-gray-200 text-left">
      <th class="px-4 py-2 border">#</th>
      <th class="px-4 py-2 border">Nama</th>
      <th class="px-4 py-2 border">Paket</th>
      <th class="px-4 py-2 border">Tanggal</th>
      <th class="px-4 py-2 border">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="px-4 py-2 border">1</td>
      <td class="px-4 py-2 border">Budi</td>
      <td class="px-4 py-2 border">Paket Silver</td>
      <td class="px-4 py-2 border">12-12-2025</td>
      <td class="px-4 py-2 border text-green-600">Menunggu Konfirmasi</td>
    </tr>
  </tbody>
</table>
@endsection
