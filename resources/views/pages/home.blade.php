@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

    <x-hero />

    <!-- Welcome Section - Simple dan sesuai Figma -->
    <section class="relative w-full min-h-screen">
        <!-- Background utama putih -->
        <div class="absolute inset-0 bg-white"></div>

        <!-- Red background area - diagonal cut -->
        <div class="absolute top-0 right-0 w-1/5 h-full bg-gradient-to-br from-red-400 via-red-500 to-red-600"
            style="clip-path: polygon(0% 0, 100% 0, 100% 100%, 0 100%);">

            <!-- Plus pattern di area merah -->
            <div class="absolute inset-0 opacity-70"
                style="background-image: url('data:image/svg+xml;utf8,<svg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><path d=&quot;M30 15V45M15 30H45&quot; stroke=&quot;white&quot; stroke-opacity=&quot;0.4&quot; stroke-width=&quot;1&quot;/></svg>'); background-size: 120px 60px;">
            </div>
        </div>

        <div>
            <div class="absolute -top-2 -left-1.5 w-3 h-3 bg-red-400 rotate-45"></div>
            <div class="absolute bottom-0 -left-1 w-2 h-2 bg-red-400 rotate-45"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-20 flex min-h-screen">
            <!-- Left Content Area -->
            <div class="w-3/5 flex items-center px-16 py-20">
                <div class="max-w-2xl">
                    <h1 class="text-6xl font-bold text-gray-800 mb-8">Welcome</h1>

                    <p class="text-gray-600 text-base leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint
                        occaecat cupidatat ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>

                    <p class="text-gray-600 text-base leading-relaxed mb-12">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Laboris nisi ut aliquip ex ea commodo consequat. Ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>

                    <!-- CEO Info -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">John Doe</h3>
                        <p class="text-gray-500 italic">Chief Executive Operations</p>
                    </div>
                </div>
            </div>

            <!-- Right Image Area -->
            <div class="w-2/5 flex justify-center items-center relative px-8">
                <!-- CEO Image Container -->
                <div class="relative z-30">
                    <div class="w-72 h-100 bg-gray-200 rounded-2xl shadow-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/Officeman.jpg') }}" alt="John Doe - CEO"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="w-full h-screen bg-white flex">
        <!-- Left Side - Office Image -->
        <div class="w-2/5 h-full">
            <img src="{{ Vite::asset('resources/images/office.jpg') }}" alt="Our Office" class="w-full h-full object-cover">
        </div>

        <!-- Right Side - About Content -->
        <div class="w-1/2 h-full flex flex-col justify-center px-16 py-16 bg-white relative rounded-bl-[80px]">
            <!-- Decorative corner element -->
            <div class="absolute left-190 top-0 right-0 w-70 h-213 bg-red-500 rounded-bl-[100px]"></div>

            <div class="space-y-6 max-w-lg relative z-10">
                <!-- About Us Heading -->
                <h2 class="text-4xl font-bold text-gray-800 mb-8">About Us</h2>

                <div class="space-y-4">
                    <p class="text-gray-600 text-base leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <p class="text-gray-600 text-base leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Laboris nisi ut aliquip
                        ex ea commodo consequat. Ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <!-- Learn More Button -->
                <div class="mt-8">
                    <a href="{{ route('aboutus') }}"
                        class="group inline-flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Learn More
                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-[75vh] bg-gray-100 flex justify-center">
        <div class=" w-full flex flex-3/6 justify-center px-10 pl-20 items-center">
            <div class="rounded-lg bg-white/50 ">
            <img src="{{ Vite::asset('resources/images/skdakds.png') }}" alt="foto class="w-full h-full object-contain rounded-lg">
">
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
            <h2 class="text-3xl font-bold mb-4 text-white">The Values We Honor</h2>
            <p class="text-white mb-4 text-center">At the core of our company lies a set of values that guide every action we take.<br> 
            These values shape our culture, inspire our people, and reflect the standards we uphold in every partnership</p>
        </div>
        <div class="grid grid-cols-4 gap-10 mx-10 items-start">
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl">
                    <img src="{{ Vite::asset('resources/images/integrity.png') }}" alt="integrity">
                </div>
                <p class="mb-2 text-2xl text-white">Integrity</p>
                <p class=" text-center text-white">We act with honesty and transparency in everything we do. 
                    Trust is built through accountability and ethical decision-making.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl text-white">Customer Focus</p>
                <p class=" text-center text-white">We listen, we care, and we are committed to creating value for those we serve
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md">
                    <img src="{{ Vite::asset('resources/images/communication.png') }}" alt="collaboration">
                </div>
                <p class="mb-2 text-2xl text-white">Collaboration</p>
                <p class=" text-center text-white">We believe in the power of teamwork across departments, with partners, and with our clients to create impactful outcomes.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md">
                    <img src="{{ Vite::asset('resources/images/exelence.png') }}" alt="exellence">
                </div>
                <p class="mb-2 text-2xl text-white">Excellence</p>
                <p class=" text-center text-white">We strive to deliver the highest quality in our work, constantly seeking innovation and improvement.
                </p>
            </div>
        </div>
    </section>

    <section id="testi" class="py-16 h-[90vh]">
        <h2 class="text-3xl font-bold mb-4 text-black text-shadow-glow text-center">Experince Shared By<br>Our Clients</h2>
        <x-card />
    </section>

    <section id="clients" class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center"> Our Clients</h2>
            <div class="flex justify-center">
                <x-slider />
            </div>
        </div>
    </section>

@endsection