@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

    <section id="home" class="relative
                    min-h-screen
                    flex items-center justify-center
                    text-white overflow-hidden
                    bg-gradient-to-br from-red-700 via-red-600 to-pink-700 {{-- Gradient background yang lebih gelap --}}
                    p-8
                    ">

        <div class="absolute inset-0 pattern-plus-grid opacity-20"></div> {{-- Akan ditambahkan di CSS nanti --}}

        <div class="container mx-auto relative z-10 text-left md:text-left"> {{-- Konten ke kiri --}}
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 text-shadow-glow" style="max-width: 600px;">
                Adipratama <br> Kreatif Solusi.
            </h1>
            <p class="text-lg md:text-xl uppercase border-b border-white pb-2 w-fit"> {{-- Garis bawah sebatas teks --}}
                COMPANY PROFILE
            </p>
        </div>

        <div class="absolute
                            top-1/2 right-0 md:right-10 {{-- Sesuaikan posisi kanan --}}
                            transform -translate-y-1/2
                            text-[18rem] md:text-[25rem] {{-- Ukuran lebih besar --}}
                            font-bold text-white opacity-10 {{-- Lebih transparan --}}
                            leading-none z-0
                            flex flex-col {{-- Tambahkan flex flex-col untuk menumpuk angka --}}
                            ">
            <span>20</span> {{-- Angka 20 --}}
            <span>25</span> {{-- Angka 25 --}}
        </div>
    </section>

    <section id="welcome" class="welcome-section bg-white py-16">
        <div class="container mx-auto flex items-center flex-wrap md:flex-nowrap">
            <div class="md:w-2/3 pr-8 mb-8 md:mb-0">
                <h2 class="text-3xl font-bold mb-4">Welcome</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                <p class="font-semibold">John Doe</p>
                <p class="text-gray-600">Chief Executive Operations</p>
            </div>
            <div class="md:w-1/3">
                <img src="{{ asset('images/john-doe.jpg') }}" alt="John Doe" class="rounded-lg shadow-lg w-full h-auto">
            </div>
        </div>
    </section>

    <section id="about" class="about-section py-16 bg-gray-50">
        <div class="container mx-auto flex items-center flex-wrap md:flex-nowrap">
            <div class="md:w-1/2 pr-8 mb-8 md:mb-0">
                <img src="{{ asset('images/office-interior.jpg') }}" alt="Office Interior"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">About Us</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </section>

    <section id="services" class="services-section py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-5xl text-blue-500 mb-4"><i class="fas fa-desktop"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                    <p class="text-gray-700">Kami membangun situs web responsif dan berkinerja tinggi sesuai kebutuhan Anda.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-5xl text-green-500 mb-4"><i class="fas fa-paint-brush"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Graphic Design</h3>
                    <p class="text-gray-700">Menciptakan desain visual yang menarik dan efektif untuk branding Anda.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-5xl text-purple-500 mb-4"><i class="fas fa-chart-line"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Digital Marketing</h3>
                    <p class="text-gray-700">Strategi pemasaran digital untuk meningkatkan jangkauan dan konversi Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="visi" class="vision-section py-16 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-4">Visi Kami</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center space-x-2">
                        <span class="text-blue-500 text-xl"><i class="fas fa-lightbulb"></i></span>
                        <p>Ide Kreatif</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-green-500 text-xl"><i class="fas fa-rocket"></i></span>
                        <p>Inovasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="misi" class="mission-section py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-4">Misi Kami</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-gray-700 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center space-x-2">
                        <span class="text-purple-500 text-xl"><i class="fas fa-handshake"></i></span>
                        <p>Kerja Sama</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-orange-500 text-xl"><i class="fas fa-users"></i></span>
                        <p>Pemberdayaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients-section bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Clients</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <img src="{{ asset('images/client-1.jpg') }}" alt="Client 1" class="rounded-lg shadow-md">
                <img src="{{ asset('images/client-2.jpg') }}" alt="Client 2" class="rounded-lg shadow-md">
                <img src="{{ asset('images/client-3.jpg') }}" alt="Client 3" class="rounded-lg shadow-md">
                <img src="{{ asset('images/client-4.jpg') }}" alt="Client 4" class="rounded-lg shadow-md">
                <img src="{{ asset('images/client-5.jpg') }}" alt="Client 5" class="rounded-lg shadow-md">
                <img src="{{ asset('images/client-6.jpg') }}" alt="Client 6" class="rounded-lg shadow-md">
            </div>
        </div>
    </section>

    <section id="projects" class="projects-section py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Projects</h2>
            <p class="text-center text-gray-700">TBD: Tambahkan konten proyek Anda di sini.</p>
        </div>
    </section>

    <section id="contact" class="contact-section bg-gray-200 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
            <p class="text-gray-700">TBD: Tambahkan form kontak atau informasi kontak di sini.</p>
        </div>
    </section>

@endsection