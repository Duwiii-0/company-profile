<section id="home" class="relative
                    min-h-[90vh]
                    flex items-center justify-center
                    text-white overflow-hidden
                    bg-gradient-to-br from-red-700 via-red-600 to-pink-700 {{-- Gradient background yang lebih gelap --}}
                    p-8
                    ">

        <div class="container mx-auto relative z-10 text-left md:text-left"> {{-- Konten ke kiri --}}
            <div class="w-[40vw]">
            {{-- Lebih kecil di perangkat mobile --}}
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 text-shadow-glow" style="max-width: 600px;">
                Adipratama <br> Kreatif Solusi.
            </h1>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            </div>
        </div>

        <div class="absolute
                            top-65 right-0 md:right-0 {{-- Sesuaikan posisi kanan --}}
                            transform -translate-y-1/2
                            text-[10rem] md:text-[25rem] {{-- Ukuran lebih besar --}}
                              font-bold text-white opacity-10 {{-- Lebih transparan --}}
                            leading-none z-0
                            flex flex-col {{-- Tambahkan flex flex-col untuk menumpuk angka --}}
                            ">
            <span>20</span> {{-- Angka 20 --}}
            <span>25</span> {{-- Angka 25 --}}
        </div>
    </section>