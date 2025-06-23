@extends('layouts.app')

@section('content')
    {{-- About Us Section --}}
    <section id="about" class="relative  bg-gray-100 overflow-hidden">

        <div class="">
            {{-- Hero Section --}}
            <div class="relative pb-16 bg-red-700 pt-50 mx-auto pl-37 px-0 w-screen">
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black mb-6 text-shadow-glow text-white leading-none tracking-tight">
                    Adipratama Kreatif Solusi
                </h1>
                <div class="prose prose-lg prose-invert">
                        <p class="text-lg lg:text-xl text-gray-100 pr-50 max-w-[80vw] leading-relaxed mb-6">
                        We are your trusted partner in the digital landscape. We offer expert IT consulting, industry-recognized IT skill certification, and a dynamic online coding academy. Our strength lies in our great team, who are passionate about driving innovation and ensuring seamless communication in every endeavor, ultimately delivering impactful results for our clients                        </p>
                    </div>
                <div class="w-[45vw] h-auto overflow-hidden absolute -right-20 -top-30">
                        <img src="{{ Vite::asset('resources/images/logonlyw.png') }}" alt="logo"
                            class="w-full h-full object-cover opacity-20">
                </div>
            </div>


            {{-- Team Section --}}
            <div class="max-w-7xl mx-auto mb-20 pt-20">   
                <div class="text-center mb-16">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-900">Meet Our Team</h2>
                    <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                        Our strength at PT Adipratama Kreatif Solusi comes from our great team. We're a passionate group of IT consultants, certification experts, and coding instructors. We're all about innovation and clear communication, working together to deliver the best solutions for you.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 max-w-4xl h-96 lg:grid-cols-3 gap-8 mx-auto mb-12">
                    {{-- Team Member 1 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2 transition-all  duration-300 space-y-6">
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
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>

                    {{-- Team Member 2 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2 transition-all  duration-300 space-y-6">
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
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>

                    {{-- Team Member 3 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2 transition-all  duration-300 space-y-6">
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
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2 transition-all  duration-300 space-y-6">
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
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>
                    {{-- Team Member 5 --}}
                    <div class="flex flex-col h-96 w-64">
                        <div
                            class=" backdrop-blur-lg group rounded-lg  bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-300 overflow-hidden flex flex-row flex-2/3 items-end justify-end"
                            style="background-image: url('{{ Vite::asset('resources/images/profile4.png') }}');">
                            <div class="flex flex-col p-2 transition-all  duration-300 space-y-6">
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
                            <h3 class="text-xl font-bold text-red-700">Sarah Lestari</h3>
                            <p class="text-sm text-gray-500 font-semibold">UI/UX Design Lead</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Our Services Section --}}
            <div class="max-w-5xl h-auto mx-auto mb-20">
                <div class=" mb-12">
                    <h2 class="text-center text-4xl lg:text-5xl font-bold mb-2 text-gray-900">Who Trusted Us</h2>
                    <p class="text-center text-lg mx-auto text-gray-700 max-w-2xl">
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

            {{-- Values Section --}}
            <div class="max-w-6xl mx-auto mb-20">
                <div class="mb-12">
                    <h2 class="text-3xl text-center lg:text-4xl font-bold mb-6 text-gray-900">Why Client Trusted Us</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="p-8 text-center">
                        <div class="w-20 h-20  rounded-full mx-auto mb-6 flex items-center justify-center">
                            <div class=" w-100 h-100 flex items-center justify-center object-cover">
                            <x-icons.innovation class="w-100 h-100"/>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-red-700 mb-4">Innovation</h3>
                        <p class="text-gray-900 leading-relaxed">Selalu menggunakan teknologi terdepan dan solusi kreatif
                            untuk memberikan hasil yang outstanding</p>
                    </div>

                    <div
                        class=" p-8 text-center">
                        <div class="w-20 h-20 bg-yellow-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                           <x-icons.quallity/>
                        </div>
                        <h3 class="text-2xl font-bold text-red-700 mb-4">Quality</h3>
                        <p class="text-gray-900 leading-relaxed">Mengutamakan hasil berkualitas tinggi dengan standar
                            internasional dan perhatian terhadap detail</p>
                    </div>

                    <div
                        class=" p-8 text-center">
                        <div class="w-20 h-20 bg-yellow-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <x-icons.collab/>
                        </div>
                        <h3 class="text-2xl font-bold text-red-700 mb-4">Great Team</h3>
                        <p class="text-gray-900 leading-relaxed">Bekerja sama dengan klien sebagai partner untuk mencapai
                            kesuksesan bersama</p>
                    </div>
                </div>
            </div>

            {{-- Stats Section --}}
            <div class="max-w-6xl  mx-auto mb-20 felx flex-col">
                <div
                    class="p-8 lg:p-12  flex">
                    <div class="flex  w-full h-full items-center mr-10">
                        <h2 class="text-2xl lg:text-4xl font-bold text-gray-900">With over <span class=" text-red-700">10</span> years of experience</h2>
                    </div>
                    <div class="flex flex-col w-full justify-center">
                        <h1 class="flex  text-5xl font-semibold">190+</h1>
                        <p class=" text-2xl ">Completed Project</p>
                    </div>
                    <div class="flex flex-col w-full justify-center">
                        <h1 class="flex  text-5xl font-semibold">50+</h1>
                        <p class="text-2xl ">Total Clients</p>
                    </div>
                    <div class="flex flex-col w-full justify-center">
                        <h1 class="flex  text-5xl font-semibold">86%</h1>
                        <p class="text-2xl ">Client Retention Rate</p>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end items-center mr-20">
                    <p class="pt-1">Like what we do?</p>
                    <h1 class="text-2xl font-semibold">Contact Us Now</h1>
                    <a href="{{ route('contact') }}"
                        class="text-red-700 bg-white px-6 py-2 rounded-full hover:bg-transparent hover:border-2 hover:border-white  hover:shadow-lg transition-all duration-300 text-sm font-semibold cursor-pointer border-2 border-transparent">
                        Send Massage
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection