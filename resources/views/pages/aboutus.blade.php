@extends('layouts.app')

@section('content')
    {{-- About Us Section --}}
    <section id="about" class="relative  bg-gradient-to-br from-red-50 to-orange-50 overflow-hidden">

        <div class="">
            

            {{-- Hero Section --}}
            <div class="relative pb-16 pt-50 mx-auto text-center flex flex-col justify-center bg-gradient-to-br from-red-700 to-red-500 px-0 w-screen">
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black mb-6 text-white leading-none tracking-tight">
                    Adipratama Kreatif Solusi
                </h1>
                <div class="prose prose-lg mx-auto prose-invert text-center ">
                        <p class="text-lg lg:text-xl text-gray-100 max-w-[80vw] leading-relaxed mb-6">
                        We are your trusted partner in the digital landscape. We offer expert IT consulting, industry-recognized IT skill certification, and a dynamic online coding academy. Our strength lies in our great team, who are passionate about driving innovation and ensuring seamless communication in every endeavor, ultimately delivering impactful results for our clients                        </p>
                </div>
                    <div class="w-[45vw] h-auto overflow-hidden absolute -right-20 -top-35">
                        <img src="{{ Vite::asset('resources/images/logonlyw.png') }}" alt="logo"
                        class="w-full h-full object-cover opacity-10">
                    </div>
            </div>


            {{-- Team Section --}}
            <div class=" relative max-w-7xl mx-auto mb-20 pt-20 ">   
                <div class="text-center mb-16">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-red-700 to-red-500 bg-clip-text text-transparent">Meet Our Team</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Our strength at PT Adipratama Kreatif Solusi comes from our great team. We're a passionate group of IT consultants, certification experts, and coding instructors. We're all about innovation and clear communication, working together to deliver the best solutions for you.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 max-w-7xl h-96 lg:grid-cols-4 gap-8 mx-auto mb-12">
                    {{-- Team Member 1 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile.png') }}');">
                            <div class="group-hover:backdrop-blur-md rounded-tl-md flex flex-col p-2 transition-all grayscale group-hover:grayscale-0 duration-300 space-y-6">
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold bg-gradient-to-r from-red-700 to-red-600 bg-clip-text text-transparent">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>

                    {{-- Team Member 2 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center  transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile2.png') }}');">
                            <div class="group-hover:backdrop-blur-md rounded-tl-md flex flex-col p-2 transition-all grayscale group-hover:grayscale-0 duration-300 space-y-6">
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold bg-gradient-to-r from-red-700 to-red-600 bg-clip-text text-transparent">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>

                    {{-- Team Member 3 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="group-hover:backdrop-blur-md rounded-tl-md flex flex-col p-2 transition-all grayscale group-hover:grayscale-0 duration-300 space-y-6">
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold bg-gradient-to-r from-red-700 to-red-600 bg-clip-text text-transparent">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>

                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile3.png') }}');">
                            <div class="group-hover:backdrop-blur-md rounded-tl-md flex flex-col p-2 transition-all grayscale group-hover:grayscale-0 duration-300 space-y-6">
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="group-hover:backdrop-blur-md rounded-md w-10 h-10  flex items-center justify-center">
                                    <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/facebookR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pl-3 pt-2">
                            <h3 class="text-xl font-bold bg-gradient-to-r from-red-700 to-red-600 bg-clip-text text-transparent">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>
                </div>
            </div>

 {{-- Enhanced Values Section --}}
<div class="relative w-screen mx-auto mb-20 px-4">
    {{-- Background decorative elements --}}
    <div class="absolute inset-0"></div>
    
    <div class="relative py-16">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-red-700 to-red-500 bg-clip-text text-transparent">Why They Choose Us</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Our commitment to excellence drives everything we do
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-12 max-w-[80vw]  mx-auto">
            {{-- Innovation Card --}}
            <div class="group relative bg-white rounded-2xl p-8 text-center shadow-lg hover:border-red-700 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                {{-- Decorative background --}}
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-orange-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative">
                    {{-- Icon container with enhanced styling --}}
                    <div class="w-24 h-24  mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                        <div class="w-12 h-12 flex items-center justify-center">
                            <x-icons.innovation class="w-12 h-12 text-red-600"/>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-gray-900 bg-clip-text text-transparent mb-4 group-hover:from-red-600 group-hover:to-red-700 transition-all duration-300">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Selalu menggunakan teknologi terdepan dan solusi kreatif untuk memberikan hasil yang outstanding
                    </p>
                    
                    {{-- Decorative bottom accent --}}
                    <div class="w-16 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-sm"></div>
                </div>
            </div>

            {{-- Quality Card --}}
            <div class="group relative bg-white rounded-2xl p-8 text-center shadow-lg hover:border-red-700 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                {{-- Decorative background --}}
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-orange-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative">
                    {{-- Icon container with enhanced styling --}}
                    <div class="w-24 h-24  mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                        <div class="w-12 h-12 flex items-center justify-center">
                            <x-icons.quallity class="w-12 h-12 text-red-600"/>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-gray-900 bg-clip-text text-transparent mb-4 group-hover:from-red-600 group-hover:to-red-700 transition-all duration-300">Quality</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Mengutamakan hasil berkualitas tinggi dengan standar internasional dan perhatian terhadap detail
                    </p>
                    
                    {{-- Decorative bottom accent --}}
                    <div class="w-16 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-sm"></div>
                </div>
            </div>

            {{-- Great Team Card --}}
            <div class="group relative bg-white rounded-2xl p-8 text-center shadow-lg hover:border-red-700 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                {{-- Decorative background --}}
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-orange-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative">
                    {{-- Icon container with enhanced styling --}}
                    <div class="w-24 h-24 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                        <div class="w-12 h-12 flex items-center justify-center">
                            <x-icons.collab class="w-12 h-12 text-red-600"/>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-gray-900 bg-clip-text text-transparent mb-4 group-hover:from-red-600 group-hover:to-red-700 transition-all duration-300">Great Team</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Bekerja sama dengan klien sebagai partner untuk mencapai kesuksesan bersama
                    </p>
                    
                    {{-- Decorative bottom accent --}}
                    <div class="w-16 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-sm"></div>
                </div>
            </div>
            {{-- Trust & Reliability Card --}}
            <div class="group relative bg-white rounded-2xl p-8 text-center shadow-lg hover:border-red-700 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">
                {{-- Decorative background --}}
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-orange-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative">
                    {{-- Icon container with enhanced styling --}}
                    <div class="w-24 h-24  mx-auto mb-6 flex items-center justify-center  group-hover:scale-110 transition-all duration-300">
                        <div class="w-12 h-12 flex items-center justify-center">
                            {{-- Trust/Shield icon placeholder - replace with your actual icon component --}}
                            <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7L12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-gray-900 bg-clip-text text-transparent mb-4 group-hover:from-red-600 group-hover:to-red-700 transition-all duration-300">Trust & Reliability</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Membangun kepercayaan jangka panjang melalui konsistensi, transparansi, dan komitmen pada setiap project
                    </p>
                    
                    {{-- Decorative bottom accent --}}
                    <div class="w-16 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-sm"></div>
                </div>
            </div>
        </div>
    </div>
</div>

            {{-- Our client Section --}}
            <div class="max-w-5xl h-auto mx-auto mb-20 ">
                <div class=" mb-12">
                    <h2 class="text-center text-4xl lg:text-5xl font-bold mb-2 bg-gradient-to-r from-red-700 to-red-500 bg-clip-text text-transparent">Who Trusted Us</h2>
                    <p class="text-center text-lg mx-auto text-gray-600 max-w-2xl leading-relaxed">
                        Meet our partners and clients
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
                    <img src="{{ Vite::asset('resources/images/lenovo.png') }}" alt="Client 10" class=" p-5 rounded-lg object-cover">
                    </div>
                    <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/nvidia.png') }}" alt="Client 10" class=" p-5 rounded-lg object-cover">
                    </div>
                </div>
            </div>

{{-- Elegant Stats Section --}}
<div class="relative max-w-6xl mx-auto mb-32 px-4">
    {{-- Subtle Background Elements --}}
    <div class="absolute -inset-4 bg-gradient-to-br from-red-900/5 via-transparent to-red-800/5 rounded-[3rem] blur-3xl"></div>
    
    <div class="relative">
        {{-- Elegant Header --}}
        <div class="text-center mb-20">
            <div class="inline-flex items-center space-x-3">
                <span class="text-red-600 font-medium tracking-wider uppercase text-sm">Our Journey</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-light text-gray-900 mb-6 leading-tight">
                <span class="font-extralight text-gray-600">With over</span><br>
                <span class="font-semibold bg-gradient-to-r from-red-700 to-red-500 bg-clip-text text-transparent">10 years of excellence</span>
            </h2>
            
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-red-600 to-transparent mx-auto"></div>
        </div>

        {{-- Main Stats Container --}}
        <div class="relative bg-white/70 backdrop-blur-xl rounded-[2.5rem] border border-white/20 shadow-[0_8px_32px_rgba(0,0,0,0.08)] overflow-hidden">            
            {{-- Stats Grid --}}
            <div class="p-12 lg:p-16">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                    {{-- Stat 1: Projects --}}
                    <div class="group relative text-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-500/3 to-red-600/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-all duration-700 ease-out"></div>
                        
                        <div class="relative py-8">
                            {{-- Elegant Icon --}}
                            <div class="w-20 h-20 mx-auto mb-8 relative">
                                <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-red-600/20 rounded-2xl rotate-3 group-hover:rotate-6 transition-transform duration-500"></div>
                                <div class="relative w-full h-full bg-white rounded-2xl shadow-lg flex items-center justify-center group-hover:shadow-xl transition-all duration-500">
                                    <svg class="w-8 h-8 text-red-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            {{-- Number --}}
                            <div class="mb-4">
                                <h1 class="text-6xl lg:text-7xl font-extralight text-gray-900 mb-2 group-hover:scale-105 transition-transform duration-500">
                                    <span class="font-light">190</span><span class="text-red-500 text-5xl lg:text-6xl">+</span>
                                </h1>
                            </div>
                            
                            {{-- Label --}}
                            <p class="text-lg font-medium text-gray-600 tracking-wide">Completed Projects</p>
                            
                            {{-- Elegant Underline --}}
                            <div class="w-12 h-px bg-gradient-to-r from-transparent via-red-500 to-transparent mx-auto mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    {{-- Stat 2: Clients --}}
                    <div class="group relative text-center ">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-500/3 to-red-600/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-all duration-700 ease-out"></div>
                        
                        <div class="relative py-8">
                            {{-- Elegant Icon --}}
                            <div class="w-20 h-20 mx-auto mb-8 relative">
                                <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-red-600/20 rounded-2xl -rotate-3 group-hover:-rotate-6 transition-transform duration-500"></div>
                                <div class="relative w-full h-full bg-white rounded-2xl shadow-lg flex items-center justify-center group-hover:shadow-xl transition-all duration-500">
                                    <svg class="w-8 h-8 text-red-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            {{-- Number --}}
                            <div class="mb-4">
                                <h1 class="text-6xl lg:text-7xl font-extralight text-gray-900 mb-2 group-hover:scale-105 transition-transform duration-500">
                                    <span class="font-light">50</span><span class="text-red-500 text-5xl lg:text-6xl">+</span>
                                </h1>
                            </div>
                            
                            {{-- Label --}}
                            <p class="text-lg font-medium text-gray-600 tracking-wide">Trusted Clients</p>
                            
                            {{-- Elegant Underline --}}
                            <div class="w-12 h-px bg-gradient-to-r from-transparent via-red-500 to-transparent mx-auto mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    {{-- Stat 3: Retention --}}
                    <div class="group relative text-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-500/3 to-red-600/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-all duration-700 ease-out"></div>
                        
                        <div class="relative py-8">
                            {{-- Elegant Icon --}}
                            <div class="w-20 h-20 mx-auto mb-8 relative">
                                <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-red-600/20 rounded-2xl rotate-2 group-hover:rotate-4 transition-transform duration-500"></div>
                                <div class="relative w-full h-full bg-white rounded-2xl shadow-lg flex items-center justify-center group-hover:shadow-xl transition-all duration-500">
                                    <svg class="w-8 h-8 text-red-600" stroke="currentColor" fill="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            {{-- Number --}}
                            <div class="mb-4">
                                <h1 class="text-6xl lg:text-7xl font-extralight text-gray-900 mb-2 group-hover:scale-105 transition-transform duration-500">
                                    <span class="font-light">86</span><span class="text-red-500 text-5xl lg:text-6xl">%</span>
                                </h1>
                            </div>
                            
                            {{-- Label --}}
                            <p class="text-lg font-medium text-gray-600 tracking-wide">Client Retention</p>
                            
                            {{-- Elegant Underline --}}
                            <div class="w-12 h-px bg-gradient-to-r from-transparent via-red-500 to-transparent mx-auto mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Elegant CTA Section --}}
        <div class="mt-16 text-center">
            <div class="inline-flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-8 bg-white/50 backdrop-blur-sm rounded-3xl px-8 py-8 border border-white/30 transition-all duration-300 hover:scale-103">
                <div class="flex items-center space-x-4">
                    <div>
                        <p class="text-gray-600 font-light">Impressed by our work?</p>
                        <h3 class="text-2xl font-light text-gray-900">Let's create something <span class="font-medium text-red-600">extraordinary</span></h3>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}"
                    class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white font-medium rounded-2xl hover:from-red-700 hover:to-red-800 shadow-lg hover:shadow-2xl transition-all duration-200 transform hover:-translate-y-1 hover:scale-103">
                    <span class="mr-3 tracking-wide">Start Conversation</span>
                    <svg class="w-4 h-4 opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>
@endsection