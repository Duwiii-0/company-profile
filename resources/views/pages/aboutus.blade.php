@extends('layouts.app')

@section('content')
    {{-- About Us Section --}}
    <section id="about" class="relative  bg-gray-100 overflow-hidden">

        <div class="">
            {{-- Hero Section --}}
            <div class="relative pb-16 bg-red-700 pt-50 mx-auto pl-70 px-0 w-screen">
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black mb-6 text-shadow-glow text-white leading-none tracking-tight">
                    About Us
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-white text-opacity-90 font-medium max-w-4xl leading-relaxed mb-12">
                    Adipratama Kreatif Solusi - Mewujudkan Visi Digital Anda
                </p>
                <div class="w-[45vw] h-auto overflow-hidden absolute -right-20 -top-30">
                        <img src="{{ Vite::asset('resources/images/logonlyw.png') }}" alt="logo"
                            class="w-full h-full object-cover opacity-20">
                </div>
            </div>

            {{-- Main Story Section --}}
            <div class="max-w-6xl mx-auto mb-20">
                <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 lg:p-12 border border-white/20 shadow-2xl">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-yellow-300">Siapa Kami</h2>
                        <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto mb-8"></div>
                    </div>

                    <div class="prose prose-lg prose-invert max-w-none text-center">
                        <p class="text-xl lg:text-2xl text-red-50 leading-relaxed mb-8 font-light">
                            Adipratama Kreatif Solusi adalah perusahaan teknologi inovatif yang berdedikasi untuk
                            memberikan solusi digital terdepan di Indonesia.
                        </p>
                        <p class="text-lg lg:text-xl text-red-100 leading-relaxed mb-8">
                            Kami menggabungkan kreativitas, teknologi, dan strategi bisnis untuk membantu klien mencapai
                            tujuan mereka. Dengan tim profesional berpengalaman, kami berkomitmen menghadirkan hasil
                            berkualitas tinggi yang tidak hanya memenuhi ekspektasi, tetapi melampaui harapan klien.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Team Section --}}
            <div class="max-w-7xl mx-auto mb-20">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-yellow-300">Meet Our Team</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto mb-6"></div>
                    <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                        Bersama sebagai software engineer dan berkembang sebagai entrepreneur visioner yang berkomitmen
                        untuk memberikan dampak positif pada bisnis melalui solusi software yang inovatif dan berkelanjutan.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 max-w-4xl h-96 lg:grid-cols-3 gap-8 mx-auto mb-12">
                    {{-- Team Member 1 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg rounded-lg rounded-br-none bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2  bg-gray-100 space-y-6">
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10 flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>

                    {{-- Team Member 2 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg rounded-lg rounded-br-none bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2  bg-gray-100 space-y-6">
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>

                    {{-- Team Member 3 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg rounded-lg rounded-br-none bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2  bg-gray-100 space-y-6">
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                   <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>
                </div>

                {{-- Additional Team Members Row --}}
                <div class="grid md:grid-cols-2 h-96 max-w-2xl mx-auto justify-items-center">
                    {{-- Team Member 4 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg rounded-lg rounded-br-none bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2  bg-gray-100 space-y-6">
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                   <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10 flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>
                    {{-- Team Member 5 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg  rounded-lg  bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2 transition-all duration-300 space-y-6">
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="bg-gray-900 w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Our Services Section --}}
            <div class="max-w-5xl h-auto mx-auto mb-20">
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-yellow-300">Who Trusted Us</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto mb-6"></div>
                    <p class="text-lg text-red-100 max-w-2xl mx-auto">
                        Solusi komprehensif untuk transformasi digital bisnis Anda
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-x-20 gap-y-5">
                    <div class="flex justify-center items-center">
                        <img src="{{ Vite::asset('resources/images/playstation.png') }}" alt="Client 4" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1" class=" p-5 rounded-lg object-cover ">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/google.png') }}" alt="Client 2" class=" p-10 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/meta.png') }}" alt="Client 3" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/kawasaki.png') }}" alt="Client 4" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/roblox.png') }}" alt="Client 5" class=" p-8 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/spotify.png') }}" alt="Client 6" class=" p-5 rounded-lg object-cover flex justify-center items-center">
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ Vite::asset('resources/images/brave.png') }}" alt="Client 7" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/cars.png') }}" alt="Client 8" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/under_armour.png') }}" alt="Client 9" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/lenovo.png') }}" alt="Client 10" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/nvidia.png') }}" alt="Client 10" class=" p-5 rounded-lg object-cover">
                    </div>
                </div>
                <p class="text-lg sm:text-xl md:text-2xl font-semibold  text-black max-w-2xl mx-auto mt-5 text-center">
                    And Many More...
                </p>
            </div>

            {{-- Values Section --}}
            <div class="max-w-6xl mx-auto mb-20">
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-yellow-300">Nilai-Nilai Kami</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto mb-6"></div>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="bg-gradient-to-br from-yellow-400/20 to-orange-500/20 backdrop-blur-lg rounded-2xl p-8 border border-yellow-300/30 shadow-xl text-center">
                        <div class="w-20 h-20 bg-yellow-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Inovasi</h3>
                        <p class="text-red-100 leading-relaxed">Selalu menggunakan teknologi terdepan dan solusi kreatif
                            untuk memberikan hasil yang outstanding</p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-yellow-400/20 to-orange-500/20 backdrop-blur-lg rounded-2xl p-8 border border-yellow-300/30 shadow-xl text-center">
                        <div class="w-20 h-20 bg-yellow-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Kualitas</h3>
                        <p class="text-red-100 leading-relaxed">Mengutamakan hasil berkualitas tinggi dengan standar
                            internasional dan perhatian terhadap detail</p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-yellow-400/20 to-orange-500/20 backdrop-blur-lg rounded-2xl p-8 border border-yellow-300/30 shadow-xl text-center">
                        <div class="w-20 h-20 bg-yellow-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Kolaborasi</h3>
                        <p class="text-red-100 leading-relaxed">Bekerja sama dengan klien sebagai partner untuk mencapai
                            kesuksesan bersama</p>
                    </div>
                </div>
            </div>

            {{-- Stats Section --}}
            <div class="max-w-6xl mx-auto mb-20">
                <div
                    class="bg-gradient-to-br from-orange-500/20 to-red-600/20 backdrop-blur-lg rounded-3xl p-8 lg:p-12 border border-orange-400/30 shadow-2xl">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-yellow-300">Prestasi Kami</h2>
                        <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto"></div>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold text-white mb-2">50+</div>
                            <div class="text-red-100 text-lg">Proyek Selesai</div>
                            <div class="text-red-200 text-sm mt-1">Dengan kepuasan tinggi</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold text-white mb-2">25+</div>
                            <div class="text-red-100 text-lg">Klien Puas</div>
                            <div class="text-red-200 text-sm mt-1">Partnership jangka panjang</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold text-white mb-2">5+</div>
                            <div class="text-red-100 text-lg">Tahun Pengalaman</div>
                            <div class="text-red-200 text-sm mt-1">Di industri teknologi</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold text-white mb-2">100%</div>
                            <div class="text-red-100 text-lg">Komitmen</div>
                            <div class="text-red-200 text-sm mt-1">Untuk kesuksesan klien</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mission & Vision Section --}}
            <div class="max-w-6xl mx-auto mb-20">
                <div class="grid md:grid-cols-2 gap-8">
                    <div
                        class="bg-gradient-to-br from-red-600/30 to-red-800/30 backdrop-blur-lg rounded-3xl p-8 lg:p-10 border border-red-500/30 shadow-2xl">
                        <div class="text-center mb-8">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-2xl lg:text-3xl font-bold text-yellow-300">Visi Kami</h3>
                        </div>
                        <p class="text-red-50 leading-relaxed text-center text-lg">
                            Menjadi perusahaan teknologi terdepan yang memberikan solusi digital inovatif
                            untuk mengakselerasi transformasi digital di Indonesia.
                        </p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-orange-600/30 to-red-700/30 backdrop-blur-lg rounded-3xl p-8 lg:p-10 border border-orange-500/30 shadow-2xl">
                        <div class="text-center mb-8">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl lg:text-3xl font-bold text-yellow-300">Misi Kami</h3>
                        </div>
                        <p class="text-red-50 leading-relaxed text-center text-lg">
                            Menghadirkan solusi teknologi berkualitas tinggi yang membantu bisnis berkembang
                            melalui inovasi, kreativitas, dan pelayanan yang excellent.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Call to Action --}}
            <div class="max-w-4xl mx-auto pb-20">
                <div
                    class="bg-gradient-to-r from-yellow-400/20 to-orange-500/20 backdrop-blur-lg rounded-3xl p-8 lg:p-12 border border-yellow-300/30 shadow-2xl text-center">
                    <h3 class="text-2xl lg:text-3xl font-bold mb-4 text-yellow-300">Siap Berkolaborasi?</h3>
                    <p class="text-red-50 mb-8 text-lg lg:text-xl max-w-2xl mx-auto">
                        Mari wujudkan visi digital Anda bersama tim profesional kami. Konsultasi gratis untuk menentukan
                        solusi terbaik bagi bisnis Anda.
                    </p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="{{ route('contact') }}"
                            class="bg-gradient-to-r from-yellow-400 to-orange-500 text-red-900 px-8 lg:px-10 py-4 rounded-full font-semibold hover:from-yellow-300 hover:to-orange-400 transition-all duration-300 transform hover:scale-105 shadow-lg text-lg">
                            Hubungi Kami
                        </a>
                        <a href="{{ route('portfolio') }}"
                            class="bg-white/10 text-white px-8 lg:px-10 py-4 rounded-full font-semibold hover:bg-white/20 transition-all duration-300 border border-white/30 text-lg">
                            Lihat Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection