@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

    <x-hero />

    <!-- Welcome Section - Simple dan sesuai Figma -->
    <section class=" w-full min-h-screen flex">
        <!-- Content Container -->

        <!-- Right Image Area -->
            <div class="w-2/5 flex flex-col justify-center items-center mt-70 absolute right-40 px-8 z-100">
                <!-- CEO Image Container -->
                <div class="">
                    <div class="w-72 h-100 bg-gray-200 rounded-2xl shadow-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/Officeman.jpg') }}" alt="John Doe - CEO"
                            class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- CEO Info -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">John Doe</h3>
                    <p class="text-gray-500 italic">Chief Executive Operations</p>
                </div>
            </div>

        <div class=" z-20 flex min-h-screen w-full bg-gray-100">
            <!-- Left Content Area -->
            <div class="w-full flex items-center px-16 py-20 ml-48 ">
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
                </div>
            </div>
        </div>

        <!-- Red background area - diagonal cut -->
        <div class="w-3/8 h-full"
            style="clip-path: polygon(0% 0, 100% 0, 100% 100%, 0 100%);">

            <!-- Plus pattern di area merah -->
            <div class="absolute inset-0 opacity-70"
                style="background-image: url('data:image/svg+xml;utf8,<svg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><path d=&quot;M30 15V45M15 30H45&quot; stroke=&quot;white&quot; stroke-opacity=&quot;0.4&quot; stroke-width=&quot;1&quot;/></svg>'); background-size: 120px 60px;">
            </div>
        </div>

    </section>

    <!-- About Us Section -->
    <section id="about" class="w-full h-screen flex">
        <!-- Left Side - Office Image -->
        <div class="w-2/5 h-full">
            <img src="{{ Vite::asset('resources/images/Office.jpg') }}" alt="Our Office" class="w-full h-full object-cover">
        </div>

        <!-- Right Side - About Content -->
        <div class="w-full h-full flex flex-col justify-center px-16 py-16 bg-gray-100 relative">

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
        <div class="w-70 h-full rounded-bl-full"></div>
    </section>

    {{-- Hero Section with Red Theme --}}
    <section class="w-full min-h-screen bg-gray-100 relative overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-32 h-32 bg-red-500 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-20 w-40 h-40 bg-red-400 rounded-full blur-3xl animate-pulse-slow"
                style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-20 h-20 bg-red-600 rounded-full blur-2xl animate-float"></div>
            <div class="absolute top-1/4 right-1/3 w-24 h-24 bg-red-300 rounded-full blur-2xl animate-float"
                style="animation-delay: 3s;"></div>
        </div>

        <div class="container mx-auto px-6 py-20 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 min-h-[75vh]">

                {{-- Left side - Image with modern card design --}}
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-start">
                    <div class="group relative">
                        {{-- Gradient border effect --}}
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-red-400 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                        </div>

                        {{-- Main card --}}
                        <div
                            class="relative bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 group-hover:border-red-200">
                            <div class="rounded-xl overflow-hidden bg-gradient-to-br from-gray-50 to-white p-4">
                                <img src="{{ Vite::asset('resources/images/dummy.png') }}" alt="Adipratama Company"
                                    class="w-full h-full object-contain rounded-lg hover:scale-105 transition-transform duration-700">
                            </div>

                            {{-- Decorative dots --}}
                            <div
                                class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-red-500 to-red-600 rounded-full opacity-80">
                            </div>
                            <div
                                class="absolute -bottom-2 -left-2 w-4 h-4 bg-gradient-to-r from-red-400 to-red-500 rounded-full opacity-60">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right side - Content --}}
                <div class="w-full lg:w-1/2 space-y-12">
                    {{-- Main heading with gradient text --}}
                    <div class="space-y-6">
                        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight text-gray-900">
                            With over a decade of
                            <span class="bg-gradient-to-r from-red-500 to-red-600 bg-clip-text text-transparent">
                                experience
                            </span>, we deliver<br>
                            <span class="bg-gradient-to-r from-red-400 to-red-500 bg-clip-text text-transparent">
                                tailored solutions
                            </span> that empower<br>
                            your business to
                            <span class="bg-gradient-to-r from-red-600 to-red-700 bg-clip-text text-transparent">
                                grow
                            </span>
                        </h1>

                        {{-- Decorative line --}}
                        <div class="flex">
                            <div class="w-20 h-1 bg-gradient-to-r from-red-500 to-red-600 rounded-full"></div>
                        </div>
                    </div>

                    {{-- Statistics Cards --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        {{-- 95% Card --}}
                        <div class="group relative">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-red-200 to-red-300 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                            </div>
                            <div
                                class="relative bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 group-hover:border-red-200 text-center group-hover:scale-105">
                                {{-- Number with gradient --}}
                                <div class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-red-500 to-red-600 bg-clip-text text-transparent mb-3 counter"
                                    data-target="95" data-suffix="%">
                                    0%
                                </div>
                                <p class="text-gray-600 text-lg font-medium leading-tight">
                                    Complete customer<br>satisfaction
                                </p>
                                {{-- Progress bar --}}
                                <div class="w-full h-1 bg-gray-200 rounded-full mt-4 overflow-hidden">
                                    <div
                                        class="h-full bg-gradient-to-r from-red-500 to-red-600 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-1000 origin-left">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 10+ Card (Featured) --}}
                        <div class="group relative lg:scale-105 lg:-mt-2">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-red-400 to-red-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200">
                            </div>
                            <div
                                class="relative bg-white rounded-2xl p-6 shadow-2xl hover:shadow-3xl transition-all duration-500 border-2 border-red-200 text-center group-hover:scale-105">
                                {{-- Featured badge --}}
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                                    <span
                                        class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                                        Global Reach
                                    </span>
                                </div>

                                {{-- Number with gradient --}}
                                <div class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-red-500 to-red-600 bg-clip-text text-transparent mb-3 counter"
                                    data-target="10" data-suffix="+">
                                    0+
                                </div>
                                <p class="text-gray-600 text-lg font-medium">
                                    Clients worldwide
                                </p>
                                {{-- Progress bar --}}
                                <div class="w-full h-1 bg-gray-200 rounded-full mt-4 overflow-hidden">
                                    <div
                                        class="h-full bg-gradient-to-r from-red-500 to-red-600 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-1000 origin-left">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 50+ Card --}}
                        <div class="group relative">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-red-200 to-red-300 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                            </div>
                            <div
                                class="relative bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 group-hover:border-red-200 text-center group-hover:scale-105">
                                {{-- Number with gradient --}}
                                <div class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-red-500 to-red-600 bg-clip-text text-transparent mb-3 counter"
                                    data-target="50" data-suffix="+">
                                    0+
                                </div>
                                <p class="text-gray-600 text-lg font-medium leading-tight">
                                    Completed Projects
                                </p>
                                {{-- Progress bar --}}
                                <div class="w-full h-1 bg-gray-200 rounded-full mt-4 overflow-hidden">
                                    <div
                                        class="h-full bg-gradient-to-r from-red-500 to-red-600 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-1000 origin-left">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Call to action buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <a href="{{ route('home') }}#services"
                            class="group relative px-8 py-4 bg-gradient-to-r from-red-500 to-red-600 text-white font-semibold rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-2xl">
                            <span class="relative z-10 flex items-center justify-center">
                                Get Started Today
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </span>
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>

                        <a href="{{ route('aboutus') }}"
                            class="group px-8 py-4 bg-white text-gray-700 font-semibold rounded-2xl border-2 border-gray-200 hover:border-red-300 hover:text-red-600 transform hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">
                            <span class="flex items-center justify-center">
                                Learn More
                                <svg class="w-5 h-5 ml-2 transform group-hover:rotate-45 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-gray-100 relative overflow-hidden">
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
                <h2 class="text-5xl font-extrabold mb-6 text-transparent bg-clip-text bg-black">
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
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3
                                class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-red-600 transition-colors duration-300">
                                Skill Certification</h3>
                            <p class="text-gray-600 mb-8 leading-relaxed">Program sertifikasi profesional untuk meningkatkan
                                kompetensi IT dan membuka peluang karir yang lebih luas.</p>

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
                                    Industry-Recognized Certificates
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
                                    Hands-on Practice
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
                                    Career Guidance
                                </li>
                            </ul>

                            <!-- Enhanced CTA Button -->
                            <div class="transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500"
                                style="transition-delay: 0.3s">
                                <button
                                    class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-8 py-3 rounded-xl hover:from-red-600 hover:to-pink-600 transition-all duration-300 text-sm font-semibold shadow-lg hover:shadow-red-500/25 hover:scale-105 flex items-center group/btn">
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
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3
                                class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-red-600 transition-colors duration-300">
                                Online Coding Platform</h3>
                            <p class="text-gray-600 mb-8 leading-relaxed">Platform pembelajaran interaktif untuk mengasah
                                skill programming dengan berbagai bahasa dan framework terkini.</p>

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
                                    Interactive Code Editor
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
                                    Real-time Feedback
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
                                    Progress Tracking
                                </li>
                            </ul>

                            <!-- Enhanced CTA Button -->
                            <div class="transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500"
                                style="transition-delay: 0.3s">
                                <button
                                    class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-8 py-3 rounded-xl hover:from-red-600 hover:to-pink-600 transition-all duration-300 text-sm font-semibold shadow-lg hover:shadow-red-500/25 hover:scale-105 flex items-center group/btn">
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

    <section class="py-20 bg-gradient-to-br visi from-slate-900 via-red-900 to-slate-900 relative overflow-hidden">
        <!-- Enhanced animated background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-red-900/30 to-black/70"></div>

            <!-- Floating orbs with better animation -->
            <div
                class="absolute top-1/4 left-1/4 w-64 h-64 bg-gradient-to-r from-red-500/20 to-rose-500/20 rounded-full blur-3xl animate-float">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-red-600/15 to-red-500/15 rounded-full blur-3xl animate-float-delayed">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-red-500/10 to-rose-500/10 rounded-full blur-3xl animate-pulse">
            </div>

            <!-- Subtle grid pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="w-full h-full bg-grid-pattern"></div>
            </div>
        </div>

        <div class="relative z-10 container mx-auto px-6">
            <!-- Enhanced header -->
            <div class="text-center mb-20">
                <div class="inline-block mb-6">
                    <h2 class="text-7xl md:text-8xl font-black mb-8 leading-tight">
                        <span class="bg-gradient-to-r from-white via-red-200 to-rose-200 bg-clip-text text-transparent">
                            The Values
                        </span>
                        <br>
                        <span class="bg-gradient-to-r from-red-300 via-rose-300 to-white bg-clip-text text-transparent">
                            We Honor
                        </span>
                    </h2>

                    <!-- Decorative line with animation -->
                    <div class="flex justify-center items-center space-x-4 mb-8">
                        <div class="w-12 h-px bg-gradient-to-r from-transparent to-red-400"></div>
                        <div class="w-8 h-8 bg-gradient-to-r from-red-500 to-rose-500 rounded-full animate-pulse"></div>
                        <div class="w-24 h-px bg-gradient-to-r from-red-400 to-rose-400"></div>
                        <div class="w-8 h-8 bg-gradient-to-r from-rose-500 to-red-500 rounded-full animate-pulse delay-300">
                        </div>
                        <div class="w-12 h-px bg-gradient-to-r from-rose-400 to-transparent"></div>
                    </div>
                </div>

                <p class="text-xl md:text-2xl text-gray-300 max-w-5xl mx-auto leading-relaxed">
                    At the core of our company lies a set of values that guide every action we take.
                    <br class="hidden md:block">
                    <span class="text-red-200 font-medium">
                        These values shape our culture, inspire our people, and reflect the standards we uphold in every
                        partnership.
                    </span>
                </p>
            </div>

            <!-- Enhanced values grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-12 md:gap-16 max-w-8xl mx-auto">

                <!-- Integrity -->
                <div class="group relative">
                    <!-- Card glow effect -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-red-600 to-rose-600 rounded-3xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                    </div>

                    <div
                        class="relative bg-white/10 backdrop-blur-xl rounded-2xl p-10 border border-white/20 group-hover:border-red-300/50 transition-all duration-500 group-hover:transform group-hover:scale-105">
                        <!-- Icon container -->
                        <div class="relative mb-10">
                            <div
                                class="w-30 h-30 mx-auto bg-gradient-to-br from-white/20 to-white/5 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-white/30 group-hover:border-red-300/50 transition-all duration-500 group-hover:rotate-6 group-hover:scale-110">
                                <img src="{{ Vite::asset('resources/images/integrity.png') }}" alt="integrity"
                                    class="w-10 h-10 filter brightness-0 invert group-hover:brightness-110 transition-all duration-500">
                            </div>

                            <!-- Icon background glow -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-red-400/20 to-rose-400/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl">
                            </div>
                        </div>

                        <div class="text-center space-y-8">
                            <h3
                                class="text-2xl font-bold text-white group-hover:text-red-200 transition-colors duration-500">
                                Integrity
                            </h3>
                            <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                                We act with honesty and transparency in everything we do. Trust is built through
                                accountability and ethical decision-making.
                            </p>
                        </div>

                        <!-- Bottom accent -->
                        <div
                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-1 bg-gradient-to-r from-red-400 to-rose-400 group-hover:w-3/4 transition-all duration-700 rounded-full">
                        </div>
                    </div>
                </div>

                <!-- Customer Focus -->
                <div class="group relative">
                    <!-- Card glow effect -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-red-700 to-red-600 rounded-3xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                    </div>

                    <div
                        class="relative bg-white/10 backdrop-blur-xl rounded-2xl p-8 border border-white/20 group-hover:border-red-300/50 transition-all duration-500 group-hover:transform group-hover:scale-105">
                        <!-- Icon container -->
                        <div class="relative mb-8">
                            <div
                                class="w-30 h-30 mx-auto bg-gradient-to-br from-white/20 to-white/5 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-white/30 group-hover:border-red-300/50 transition-all duration-500 group-hover:rotate-6 group-hover:scale-110">
                                <img src="{{ Vite::asset('resources/images/customer-focus.png') }}" alt="customer-focus"
                                    class="w-10 h-10 filter brightness-0 invert group-hover:brightness-110 transition-all duration-500">
                            </div>

                            <!-- Icon background glow -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-red-400/20 to-red-500/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl">
                            </div>
                        </div>

                        <div class="text-center space-y-6">
                            <h3
                                class="text-2xl font-bold text-white group-hover:text-red-200 transition-colors duration-500">
                                Customer Focus
                            </h3>
                            <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                                We listen, we care, and we are committed to creating value for those we serve. Our
                                dedication ensures their diverse needs are met with precision and empathy, fostering lasting
                                relationships.
                            </p>
                        </div>

                        <!-- Bottom accent -->
                        <div
                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-1 bg-gradient-to-r from-red-400 to-red-500 group-hover:w-3/4 transition-all duration-700 rounded-full">
                        </div>
                    </div>
                </div>

                <!-- Collaboration -->
                <div class="group relative">
                    <!-- Card glow effect -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-red-800 to-red-600 rounded-3xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                    </div>

                    <div
                        class="relative bg-white/10 backdrop-blur-xl rounded-2xl p-8 border border-white/20 group-hover:border-red-300/50 transition-all duration-500 group-hover:transform group-hover:scale-105">
                        <!-- Icon container -->
                        <div class="relative mb-8">
                            <div
                                class="w-30 h-30 mx-auto bg-gradient-to-br from-white/20 to-white/5 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-white/30 group-hover:border-red-300/50 transition-all duration-500 group-hover:rotate-6 group-hover:scale-110">
                                <img src="{{ Vite::asset('resources/images/communication.png') }}" alt="collaboration"
                                    class="w-10 h-10 filter brightness-0 invert group-hover:brightness-110 transition-all duration-500">
                            </div>

                            <!-- Icon background glow -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-red-400/20 to-red-600/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl">
                            </div>
                        </div>

                        <div class="text-center space-y-6">
                            <h3
                                class="text-2xl font-bold text-white group-hover:text-red-200 transition-colors duration-500">
                                Collaboration
                            </h3>
                            <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                                We believe in the power of teamwork across departments, with partners, and with our clients
                                to create impactful outcomes. By fostering open communication, together, we achieve more
                                results.
                            </p>
                        </div>

                        <!-- Bottom accent -->
                        <div
                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-1 bg-gradient-to-r from-red-400 to-red-600 group-hover:w-3/4 transition-all duration-700 rounded-full">
                        </div>
                    </div>
                </div>

                <!-- Excellence -->
                <div class="group relative">
                    <!-- Card glow effect -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-rose-600 to-red-600 rounded-3xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                    </div>

                    <div
                        class="relative bg-white/10 backdrop-blur-xl rounded-2xl p-8 border border-white/20 group-hover:border-red-300/50 transition-all duration-500 group-hover:transform group-hover:scale-105">
                        <!-- Icon container -->
                        <div class="relative mb-8">
                            <div
                                class="w-30 h-30 mx-auto bg-gradient-to-br from-white/20 to-white/5 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-white/30 group-hover:border-red-300/50 transition-all duration-500 group-hover:rotate-6 group-hover:scale-110">
                                <img src="{{ Vite::asset('resources/images/exelence.png') }}" alt="excellence"
                                    class="w-10 h-10 filter brightness-0 invert group-hover:brightness-110 transition-all duration-500">
                            </div>

                            <!-- Icon background glow -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-rose-400/20 to-red-400/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl">
                            </div>
                        </div>

                        <div class="text-center space-y-6">
                            <h3
                                class="text-2xl font-bold text-white group-hover:text-red-200 transition-colors duration-500">
                                Excellence
                            </h3>
                            <p class="text-gray-300 leading-relaxed group-hover:text-white transition-colors duration-500">
                                We strive to deliver the highest quality in all our work, constantly seeking innovation and
                                continuous improvement. Our unwavering commitment to excellence drives every action and
                                decision we make.
                            </p>
                        </div>

                        <!-- Bottom accent -->
                        <div
                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-1 bg-gradient-to-r from-rose-400 to-red-400 group-hover:w-3/4 transition-all duration-700 rounded-full">
                        </div>
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


    <section id="testi" class="py-16 pt-10 h-[90vh] bg-gray-100 ">
        <h2 class="text-5xl font-bold mb-20 text-black text-shadow-glow text-center">Experince Shared By<br>Our Clients</h2>
        <x-card />
    </section>
    <section id="testi" class="py-16 pt-10 h-[1vh] bg-gray-100 ">
    </section>
@endsection