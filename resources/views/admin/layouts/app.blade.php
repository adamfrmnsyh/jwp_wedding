<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Wedding Organizer</title>
  @vite('resources/css/app.css') {{-- kalau pakai Vite --}}
</head>
<body class="bg-gray-100 flex">

  {{-- Sidebar --}}
  <aside class="w-64 bg-pink-700 text-black min-h-screen">
    <div class="p-4 text-2xl font-bold">Admin WO</div>
    <nav class="mt-6">
      <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-pink-600">Dashboard</a>
      <a href="{{ route('admin.katalog.index') }}" class="block px-4 py-2 hover:bg-pink-600">Katalog</a>
      <a href="{{ route('admin.pesanan.index') }}" class="block px-4 py-2 hover:bg-pink-600">Pesanan</a>
      <a href="{{ route('admin.kontak.index') }}" class="block px-4 py-2 hover:bg-pink-600">Kontak</a>
    </nav>
  </aside>

  {{-- Main Content --}}
  <main class="flex-1 p-6">
    @yield('content')
  </main>

</body>
</html>
