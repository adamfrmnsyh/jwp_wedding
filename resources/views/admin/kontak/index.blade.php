@extends('admin.layouts.app')

@section('content')
<h1 class="text-3xl font-semibold mb-6">Pesan Kontak</h1>

<table class="min-w-full bg-white border rounded shadow">
  <thead>
    <tr class="bg-gray-200 text-left">
      <th class="px-4 py-2 border">#</th>
      <th class="px-4 py-2 border">Nama</th>
      <th class="px-4 py-2 border">Email</th>
      <th class="px-4 py-2 border">Subjek</th>
      <th class="px-4 py-2 border">Pesan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="px-4 py-2 border">1</td>
      <td class="px-4 py-2 border">Sinta</td>
      <td class="px-4 py-2 border">sinta@example.com</td>
      <td class="px-4 py-2 border">Pertanyaan paket</td>
      <td class="px-4 py-2 border">Apakah tersedia paket intimate wedding?</td>
    </tr>
  </tbody>
</table>
@endsection
