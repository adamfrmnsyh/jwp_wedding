<x-navbar />

<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="max-w-prose font-serif mx-auto text-center mt-2 mb-15">
        <h2 class="text-5xl font-thin text-[#757171]" style="font-family: 'Cinzel Decorative', serif; font-weight: 400; font-style: normal;">
            Katalog Wedding
        </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($katalogs as $katalog)
        <div class="bg-white rounded-lg hover:shadow-lg transition shadow-xl/20 cursor-pointer">
            <img
                src="{{ asset('storage/' . $katalog->gambar) }}"
                alt="{{ $katalog->nama_paket }}"
                class="h-64 w-full object-cover sm:h-80 lg:h-60 rounded-t-lg" />

            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                    {{ $katalog->nama_paket }}
                </h3>

                <p class="mt-1 text-pink-600 font-semibold">
                    Rp {{ number_format($katalog->harga, 0, ',', '.') }}
                </p>

                <p class="mt-2 text-gray-600 text-sm">
                    {{ Str::limit($katalog->deskripsi, 60) }}
                </p>

                <a href="#" class="mt-3 inline-block px-4 py-2 bg-pink-600 text-white text-sm rounded-lg hover:bg-pink-700 transition">
                    Pesan Sekarang
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<x-footer />