<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+AU+QLD:wght@100..400&display=swap" rel="stylesheet">
    
</head>

<body class="bg-[#FFF2EB]">
    <header id="main-header" class="bg-[#FDEFF4]/70 sticky top-0 z-50 transition-all duration-300">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <!-- Logo di kiri -->
                <div>
                    <img class="h-17 rounded-xl" src="img/logoweb.png" alt="Logo">
                </div>

                <!-- Navbar di kanan -->
                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-12 text-[16px] font-serif">
                            <li>
                                <a class="text-gray-600 hover:text-pink-600 transition" href="/home"> Beranda </a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-pink-600 transition" href="/katalog"> Katalog </a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-pink-600 transition" href="/kontak"> Kontak Kami </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 10) {
                header.classList.add('backdrop-blur-md');
            } else {
                header.classList.remove('backdrop-blur-md');
            }
        });
    </script>