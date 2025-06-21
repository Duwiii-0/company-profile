@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

    <x-hero />

    <!-- Welcome Section - Simple dan sesuai Figma -->
    <section class="relative w-full min-h-screen">
        <!-- Background utama putih -->
        <div class="absolute inset-0 bg-white"></div>

        <!-- Red background area - diagonal cut -->
        <div class="absolute top-0 right-0 w-1/5 h-full bg-pink-700"
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
        <div class="w-full h-full flex flex-col justify-center px-16 py-16 bg-white relative rounded-bl-[80px]">

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
         <!-- Decorative corner element -->
        <div class="w-70 h-full bg-red-500 rounded-bl-[100px]"></div>
    </section>

    <section class="w-full h-[75vh] bg-gray-100 flex justify-center">
        <div class=" w-full flex flex-3/6 justify-center px-10 pl-20 items-center">
            <div class="rounded-lg bg-white/50 ">
                <img src="{{ Vite::asset('resources/images/skdakds.png') }}" alt="foto class=" w-full h-full object-contain
                    rounded-lg">
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
    <section id="services" class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-red-100/30 to-transparent rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-blue-100/30 to-transparent rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
        </div>
        <div
            class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-r from-green-100/20 to-purple-100/20 rounded-full blur-2xl -translate-x-1/2 -translate-y-1/2">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Enhanced Header -->
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-pink-500 rounded-full mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <!-- Medal circle -->
                        <circle cx="12" cy="9" r="5" fill="currentColor" stroke="currentColor"></circle>
                        <!-- Ribbon left -->
                        <path d="M8 12v7l4-2 4 2v-7" stroke="currentColor" fill="none"></path>
                        <!-- Star inside medal -->
                        <path d="M12 6l1 2h2l-1.5 1.5L14 12l-2-1-2 1 .5-2.5L9 8h2l1-2z" fill="red" stroke="none"></path>
                    </svg>
                </div>
                <h2
                    class="text-5xl font-extrabold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-gray-800 via-gray-700 to-gray-800">
                    Our Services
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Kami menyediakan solusi teknologi terpadu untuk mengembangkan kemampuan dan karir Anda di bidang IT
                    dengan pendekatan yang inovatif dan profesional
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-pink-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- IT Consultant Card -->
                <div class="group relative">
                    <!-- Animated border -->
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-red-500 via-pink-500 to-red-600 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-sm">
                    </div>

                    <div
                        class="relative bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl group overflow-hidden cursor-pointer transition-all duration-700 hover:-translate-y-3 border border-gray-100">
                        <!-- Floating particles effect -->
                        <div
                            class="absolute top-4 right-4 w-2 h-2 bg-red-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 animate-pulse">
                        </div>
                        <div class="absolute top-8 right-8 w-1 h-1 bg-pink-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700 animate-pulse"
                            style="animation-delay: 0.2s"></div>
                        <div class="absolute top-6 right-12 w-1.5 h-1.5 bg-red-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 animate-pulse"
                            style="animation-delay: 0.4s"></div>

                        <!-- Gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-red-50/80 via-pink-50/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <!-- Icon with enhanced animation -->
                        <div class="relative z-10 mb-8">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-red-100 to-pink-100 rounded-2xl flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-red-500 group-hover:to-pink-500 transition-all duration-500 shadow-lg group-hover:shadow-red-500/25 group-hover:rotate-3 group-hover:scale-110">
                                <svg class="w-10 h-10 text-red-500 group-hover:text-white transition-all duration-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3
                                class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-red-600 transition-colors duration-300">
                                IT Consultant</h3>
                            <p class="text-gray-600 mb-8 leading-relaxed">Konsultasi strategis untuk transformasi digital,
                                optimasi sistem, dan solusi teknologi yang tepat untuk bisnis dan perushaan Anda.</p>

                            <!-- Enhanced Features with staggered animation -->
                            <ul class="space-y-3 mb-8">
                                <li
                                    class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-red-500 to-pink-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    System Architecture Planning
                                </li>
                                <li class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500"
                                    style="transition-delay: 0.1s">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-red-500 to-pink-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Digital Transformation
                                </li>
                                <li class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500"
                                    style="transition-delay: 0.2s">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-red-500 to-pink-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Technology Assessment
                                </li>
                            </ul>

                            <!-- Enhanced CTA Button -->
                            <div class="transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500"
                                style="transition-delay: 0.3s">
                                <button
                                    class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-8 py-3 rounded-xl hover:from-red-600 hover:to-pink-600 transition-all duration-300 text-sm font-semibold shadow-lg hover:shadow-red-500/25 hover:scale-105 flex items-center group/btn">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skill Certification Card -->
                <div class="group relative">
                    <!-- Animated border -->
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-600 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-sm">
                    </div>

                    <div
                        class="relative bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl group overflow-hidden cursor-pointer transition-all duration-700 hover:-translate-y-3 border border-gray-100">
                        <!-- Floating particles effect -->
                        <div
                            class="absolute top-4 right-4 w-2 h-2 bg-blue-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 animate-pulse">
                        </div>
                        <div class="absolute top-8 right-8 w-1 h-1 bg-cyan-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700 animate-pulse"
                            style="animation-delay: 0.2s"></div>
                        <div class="absolute top-6 right-12 w-1.5 h-1.5 bg-blue-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 animate-pulse"
                            style="animation-delay: 0.4s"></div>

                        <!-- Gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-50/80 via-cyan-50/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <!-- Icon with enhanced animation -->
                        <div class="relative z-10 mb-8">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-2xl flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-blue-500 group-hover:to-cyan-500 transition-all duration-500 shadow-lg group-hover:shadow-blue-500/25 group-hover:rotate-3 group-hover:scale-110">
                                <svg class="w-10 h-10 text-blue-500 group-hover:text-white transition-all duration-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3
                                class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                Skill Certification</h3>
                            <p class="text-gray-600 mb-8 leading-relaxed">Program sertifikasi profesional untuk meningkatkan
                                kompetensi IT dan membuka peluang karir yang lebih luas.</p>

                            <!-- Enhanced Features with staggered animation -->
                            <ul class="space-y-3 mb-8">
                                <li
                                    class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Industry-Recognized Certificates
                                </li>
                                <li class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500"
                                    style="transition-delay: 0.1s">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Hands-on Practice
                                </li>
                                <li class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500"
                                    style="transition-delay: 0.2s">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Career Guidance
                                </li>
                            </ul>

                            <!-- Enhanced CTA Button -->
                            <div class="transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500"
                                style="transition-delay: 0.3s">
                                <button
                                    class="bg-gradient-to-r from-blue-500 to-cyan-500 text-white px-8 py-3 rounded-xl hover:from-blue-600 hover:to-cyan-600 transition-all duration-300 text-sm font-semibold shadow-lg hover:shadow-blue-500/25 hover:scale-105 flex items-center group/btn">
                                    View Programs
                                    <svg class="w-4 h-4 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Online Coding Platform Card -->
                <div class="group relative">
                    <!-- Animated border -->
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-green-500 via-emerald-500 to-green-600 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-sm">
                    </div>

                    <div
                        class="relative bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl group overflow-hidden cursor-pointer transition-all duration-700 hover:-translate-y-3 border border-gray-100">
                        <!-- Floating particles effect -->
                        <div
                            class="absolute top-4 right-4 w-2 h-2 bg-green-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 animate-pulse">
                        </div>
                        <div class="absolute top-8 right-8 w-1 h-1 bg-emerald-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700 animate-pulse"
                            style="animation-delay: 0.2s"></div>
                        <div class="absolute top-6 right-12 w-1.5 h-1.5 bg-green-300 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 animate-pulse"
                            style="animation-delay: 0.4s"></div>

                        <!-- Gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-green-50/80 via-emerald-50/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <!-- Icon with enhanced animation -->
                        <div class="relative z-10 mb-8">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-100 to-emerald-100 rounded-2xl flex items-center justify-center group-hover:bg-gradient-to-br group-hover:from-green-500 group-hover:to-emerald-500 transition-all duration-500 shadow-lg group-hover:shadow-green-500/25 group-hover:rotate-3 group-hover:scale-110">
                                <svg class="w-10 h-10 text-green-500 group-hover:text-white transition-all duration-500"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3
                                class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                                Online Coding Platform</h3>
                            <p class="text-gray-600 mb-8 leading-relaxed">Platform pembelajaran interaktif untuk mengasah
                                skill programming dengan berbagai bahasa dan framework terkini.</p>

                            <!-- Enhanced Features with staggered animation -->
                            <ul class="space-y-3 mb-8">
                                <li
                                    class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Interactive Code Editor
                                </li>
                                <li class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500"
                                    style="transition-delay: 0.1s">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Real-time Feedback
                                </li>
                                <li class="flex items-center text-sm text-gray-600 transform translate-x-2 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500"
                                    style="transition-delay: 0.2s">
                                    <div
                                        class="w-5 h-5 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    Progress Tracking
                                </li>
                            </ul>

                            <!-- Enhanced CTA Button -->
                            <div class="transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500"
                                style="transition-delay: 0.3s">
                                <button
                                    class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-3 rounded-xl hover:from-green-600 hover:to-emerald-600 transition-all duration-300 text-sm font-semibold shadow-lg hover:shadow-green-500/25 hover:scale-105 flex items-center group/btn">
                                    Start Learning
                                    <svg class="w-4 h-4 ml-2 transform group-hover/btn:translate-x-1 transition-transform duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 visi space-y-10">
        <div class="flex flex-col items-center mt-10 mb-20">
            <h2 class="text-5xl font-bold mb-8 text-white">The Values We Honor</h2>
            <p class="text-white mb-4 text-center">At the core of our company lies a set of values that guide every action
                we take.<br>
                These values shape our culture, inspire our people, and reflect the standards we uphold in every partnership
            </p>
        </div>
        <div class="grid grid-cols-4 gap-10 mx-10 items-start">
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-white p-5 flex justify-center items-center rounded-xl">
                    <img src="{{ Vite::asset('resources/images/integrity.png') }}" alt="integrity">
                </div>
                <p class="mb-2 text-2xl text-white">Integrity</p>
                <p class=" text-center text-white">We act with honesty and transparency in everything we do.
                    Trust is built through accountability and ethical decision-making.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-white p-5 flex justify-center items-center rounded-xl shadow-md">
                    <img src="{{ Vite::asset('resources/images/customer-focus.png') }}" alt="customer-focus">
                </div>
                <p class="mb-2 text-2xl text-white">Customer Focus</p>
                <p class=" text-center text-white">We listen, we care, and we are committed to creating value for those we
                    serve
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-white p-5 flex justify-center items-center rounded-xl shadow-md">
                    <img src="{{ Vite::asset('resources/images/communication.png') }}" alt="collaboration">
                </div>
                <p class="mb-2 text-2xl text-white">Collaboration</p>
                <p class=" text-center text-white">We believe in the power of teamwork across departments, with partners,
                    and with our clients to create impactful outcomes.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-white p-5 flex justify-center items-center rounded-xl shadow-md">
                    <img src="{{ Vite::asset('resources/images/exelence.png') }}" alt="exellence">
                </div>
                <p class="mb-2 text-2xl text-white">Excellence</p>
                <p class=" text-center text-white">We strive to deliver the highest quality in our work, constantly seeking
                    innovation and improvement.
                </p>
            </div>
        </div>
    </section>

    <section id="testi" class="py-16 h-[90vh]">
        <h2 class="text-5xl font-bold mb-20 text-black text-shadow-glow text-center">Experince Shared By<br>Our Clients</h2>
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