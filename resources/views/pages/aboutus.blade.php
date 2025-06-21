@extends('layouts.app')

@section('content')
    {{-- About Us Section --}}
    <section id="about" class="relative bg-gradient-to-br from-red-700 via-red-600 to-red-800 text-white overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-radial from-red-600/20 via-transparent to-red-800/40"></div>
            <div class="absolute top-0 left-0 right-0 h-full bg-repeat opacity-20 pattern-bg"></div>
        </div>

        <div class="container mx-auto relative z-10 px-4 sm:px-6 lg:px-8">
            {{-- Hero Section --}}
            <div class="pt-20 pb-16 text-center">
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black mb-6 text-shadow-glow leading-none tracking-tight">
                    Tentang
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-400">
                        Kami
                    </span>
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl font-light text-red-100 max-w-4xl mx-auto leading-relaxed mb-12">
                    Adipratama Kreatif Solusi - Mewujudkan Visi Digital Anda
                </p>
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
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-yellow-300">Tim Kami</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto mb-6"></div>
                    <p class="text-lg text-red-100 max-w-3xl mx-auto">
                        Bersama sebagai software engineer dan berkembang sebagai entrepreneur visioner yang berkomitmen
                        untuk memberikan dampak positif pada bisnis melalui solusi software yang inovatif dan berkelanjutan.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    {{-- Team Member 1 --}}
                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-3xl overflow-hidden border border-white/20 shadow-2xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div class="relative">
                            <div
                                class="aspect-square bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                <div
                                    class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Taufan Arfianto</h3>
                            <div class="border-l-4 border-yellow-400 pl-4 space-y-1">
                                <p class="text-yellow-300 font-semibold">CEO & Founder of AKS</p>
                                <p class="text-red-100 text-sm">Director of AKS Group</p>
                            </div>
                        </div>
                    </div>

                    {{-- Team Member 2 --}}
                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-3xl overflow-hidden border border-white/20 shadow-2xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div class="relative">
                            <div
                                class="aspect-square bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                <div
                                    class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Sidiq Permana</h3>
                            <div class="border-l-4 border-yellow-400 pl-4 space-y-1">
                                <p class="text-yellow-300 font-semibold">CTO & Co-Founder of AKS</p>
                                <p class="text-red-100 text-sm">Google Developer Expert in Android</p>
                            </div>
                        </div>
                    </div>

                    {{-- Team Member 3 --}}
                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-3xl overflow-hidden border border-white/20 shadow-2xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div class="relative">
                            <div
                                class="aspect-square bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                <div
                                    class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Ghiyats Hanif I</h3>
                            <div class="border-l-4 border-yellow-400 pl-4 space-y-1">
                                <p class="text-yellow-300 font-semibold">VP Mobile Engineer of AKS</p>
                                <p class="text-red-100 text-sm">Senior Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Additional Team Members Row --}}
                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    {{-- Team Member 4 --}}
                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-3xl overflow-hidden border border-white/20 shadow-2xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div class="relative">
                            <div
                                class="aspect-square bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                <div
                                    class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Ahmad Rizki</h3>
                            <div class="border-l-4 border-yellow-400 pl-4 space-y-1">
                                <p class="text-yellow-300 font-semibold">Lead Backend Developer</p>
                                <p class="text-red-100 text-sm">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>

                    {{-- Team Member 5 --}}
                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-3xl overflow-hidden border border-white/20 shadow-2xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div class="relative">
                            <div
                                class="aspect-square bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                <div
                                    class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Sarah Lestari</h3>
                            <div class="border-l-4 border-yellow-400 pl-4 space-y-1">
                                <p class="text-yellow-300 font-semibold">UI/UX Design Lead</p>
                                <p class="text-red-100 text-sm">Creative Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Our Services Section --}}
            <div class="max-w-7xl mx-auto mb-20">
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-yellow-300">Layanan Kami</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto mb-6"></div>
                    <p class="text-lg text-red-100 max-w-2xl mx-auto">
                        Solusi komprehensif untuk transformasi digital bisnis Anda
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 shadow-xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Pengembangan Web</h3>
                        <p class="text-red-100 text-sm leading-relaxed">Website modern, responsif, dan user-friendly untuk
                            meningkatkan presence digital Anda</p>
                    </div>

                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 shadow-xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Aplikasi Mobile</h3>
                        <p class="text-red-100 text-sm leading-relaxed">Aplikasi iOS dan Android yang powerful dan
                            user-centric untuk menjangkau audience mobile</p>
                    </div>

                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 shadow-xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Digital Marketing</h3>
                        <p class="text-red-100 text-sm leading-relaxed">Strategi pemasaran digital yang efektif untuk
                            meningkatkan brand awareness dan konversi</p>
                    </div>

                    <div
                        class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 shadow-xl hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-red-900" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Konsultasi IT</h3>
                        <p class="text-red-100 text-sm leading-relaxed">Solusi teknologi komprehensif dan konsultasi
                            strategis untuk pertumbuhan bisnis Anda</p>
                    </div>
                </div>
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

    {{-- Additional Styles --}}
    <style>
        .text-shadow-glow {
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.5), 0 0 40px rgba(255, 255, 255, 0.3);
        }

        .pattern-bg {
            background-image: url('data:image/svg+xml;charset=utf-8,<svg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="white" fill-opacity="0.1"><path d="M0 0h20v20H0zM20 20h20v20H20zM40 40h20v20H40zM60 60h20v20H60z"/></g></g></svg>');
            background-size: 80px 80px;
        }

        .bg-gradient-radial {
            background: radial-gradient(circle at center, var(--tw-gradient-stops));
        }

        .prose-invert {
            color: #f1f5f9;
        }

        .prose-invert h1,
        .prose-invert h2,
        .prose-invert h3,
        .prose-invert h4 {
            color: #fbbf24;
        }
    </style>
@endsection