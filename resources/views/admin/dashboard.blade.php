@extends('admin.layouts.app')

@section('content')
<h1 class="text-3xl font-semibold mb-6">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <div class="bg-white p-6 rounded shadow">
    <h2 class="text-lg font-bold">Total Katalog</h2>
    <p class="text-2xl mt-2">12</p>
  </div>
  <div class="bg-white p-6 rounded shadow">
    <h2 class="text-lg font-bold">Total Pesanan</h2>
    <p class="text-2xl mt-2">5</p>
  </div>
  <div class="bg-white p-6 rounded shadow">
    <h2 class="text-lg font-bold">Pesan Kontak</h2>
    <p class="text-2xl mt-2">8</p>
  </div>
</div>
@endsection
