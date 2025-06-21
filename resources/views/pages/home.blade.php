@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

    <x-hero />

    <!-- Welcome Section - mengganti section yang sudah ada setelah hero -->
    <section class="w-full h-[75vh] bg-gray-100 flex">
        <!-- Left content area -->
        <div class="w-full flex flex-col justify-center px-20 py-16">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold text-gray-800 mb-8">Welcome</h1>

                <p class="text-gray-600 text-base leading-relaxed mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>

                <p class="text-gray-600 text-base leading-relaxed mb-12">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Laboris nisi ut aliquip ex ea commodo consequat. Ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>

                <!-- CEO Info -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-1">John Doe</h3>
                    <p class="text-gray-500 italic">Chief Executive Operations</p>
                </div>
            </div>
        </div>

        <!-- Right side - CEO Image -->
        <div class="w-full flex justify-center items-center px-10">
            <div class="bg-gradient-to-br from-red-400 to-red-600 relative overflow-hidden"
                style="border-radius: 0 0 0 100px;">
                <!-- Decorative elements -->
                <div class="absolute top-10 right-10 w-2 h-2 bg-white/30 rounded-full"></div>
                <div class="absolute top-20 right-20 w-1 h-1 bg-white/20 rounded-full"></div>
                <div class="absolute top-32 right-16 w-1 h-1 bg-white/20 rounded-full"></div>
                <div class="absolute top-44 right-24 w-2 h-2 bg-white/30 rounded-full"></div>

                <!-- CEO Image Container -->
                <div class="w-80 h-96 bg-gray-200 m-8 rounded-lg shadow-xl overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/Officeman.jpg') }}" alt="John Doe - CEO"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="w-full h-[80vh] bg-white flex">
        <!-- Left Side - Office Image -->
        <div class="w-1/2 h-full relative">
            <div
                class="h-full bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center relative overflow-hidden">
                <!-- Office Image Container -->
                <div class="w-4/5 h-3/5 bg-gray-100 rounded-lg shadow-2xl overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/office.jpg') }}" alt="Our Office"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Right Side - About Content -->
        <div class="w-1/2 h-full flex flex-col justify-center px-12 py-16 bg-white relative">
            <!-- Decorative corner -->
            <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-bl from-red-400 to-red-600 rounded-bl-full"></div>

            <div class="space-y-6 max-w-lg">
                <!-- About Us Heading -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">About Us</h2>
                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Laboris nisi ut aliquip
                        ex ea commodo consequat. Ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>

                    <!-- Learn More Button -->
                    <div class="mt-8">
                        <a href="{{ route('aboutus') }}"
                            class="group inline-flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Learn More
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-[75vh] bg-gray-100 flex justify-center">
        <div class=" w-full flex flex-3/6 justify-center px-10 pl-20 items-center">
            <div class="rounded-lg bg-white/50">
                <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
            </div>
        </div>
        <div class=" w-full flex flex-col ">
            <div class="b h-full">
                <p class="text-4xl pt-24">With over a decade of experience, we deliver <br>tailored solutions that empower
                    your business to grow</p>
            </div>
            <div class=" h-full flex flex-row pt-24">
                <div class=" w-full space-y-2">
                    <p class="text-4xl">95%</p>
                    <p class="text-xl">Complete customer <br>satisfaction</p>
                </div>
                <div class=" w-full space-y-2">
                    <p class="text-4xl">10+</p>
                    <p class="text-xl">Clients worldwide</p>
                </div>
                <div class=" w-full space-y-2">
                    <p class="text-4xl">50+</p>
                    <p class="text-xl">Completed Project</p>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Services</h2>
            <div class="">
                <div class="grid grid-cols-3 gap-8">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md hover:shadow-red-700/20 group relative flex flex-col items-start overflow-hidden cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <span
                            class="text-xl font-semibold translate-y-10 transition-all duration-300 text-start group-hover:translate-y-0">IT
                            Consultant</span>
                        <span
                            class="transform translate-y-0 opacity-0 transition-all duration-300 
                                                                group-hover:translate-y-1 text-start group-hover:opacity-100 text-gray-700">Kami
                            membangun
                            situs web
                            responsif dan berkinerja tinggi sesuai kebutuhan Anda.
                        </span>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl shadow-md hover:shadow-red-700/20 group relative flex flex-col items-start overflow-hidden cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <span
                            class="text-xl font-semibold translate-y-10 transition-all duration-300 text-start group-hover:translate-y-0">Skill
                            Certification</span>
                        <span
                            class="transform translate-y-0 opacity-0 transition-all duration-300 
                                                                group-hover:translate-y-1 text-start group-hover:opacity-100 text-gray-700">Menciptakan
                            desain
                            visual yang menarik dan efektif untuk branding Anda.</span>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl shadow-md hover:shadow-red-700/20 group relative flex flex-col items-start overflow-hidden cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <span
                            class="text-xl font-semibold translate-y-10 transition-all duration-300 text-start group-hover:translate-y-0">Online
                            Coding Platform</span>
                        <span
                            class="transform translate-y-0 opacity-0 transition-all duration-300 
                                                                group-hover:translate-y-1 text-start group-hover:opacity-100 text-gray-700">Strategi
                            pemasaran
                            digital untuk meningkatkan jangkauan dan konversi Anda.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 visi space-y-10">
        <div class="flex flex-col items-center mt-10">
            <h2 class="text-3xl font-bold mb-4 text-white text-shadow-glow">The Values We Honor</h2>
            <p class="text-gray-700 mb-4 text-center">At the core of our company lies a set of values that guide every
                action we take.<br>
                These values shape our culture, inspire our people, and reflect the standards we uphold in every partnership
            </p>
        </div>
        <div class="grid grid-cols-4 gap-10 mx-10">
            <div class="flex flex-col items-center justify-center space-y-5">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Integrity</p>
                <p class=" text-center ">We act with honesty and transparency in everything we do.
                    Trust is built through accountability and ethical decision-making.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Customer Focus</p>
                <p class=" text-center ">We listen, we care, and we are committed to creating value for those we serve
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Collaboration</p>
                <p class=" text-center ">We believe in the power of teamwork — across departments, with partners, and with
                    our clients — to create impactful outcomes.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Excellence</p>
                <p class=" text-center ">We strive to deliver the highest quality in our work, constantly seeking innovation
                    and improvement.
                </p>
            </div>
        </div>
    </section>

    <section id="misi" class="py-16">
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

    <section id="clients" class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center"> Our Clients</h2>
            <div class="flex justify-center">
                <x-slider />
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