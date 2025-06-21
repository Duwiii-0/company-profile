@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

    <x-hero/>

    <section class="w-full h-[75vh] bg-gray-100 flex justify-center">
        <div class=" w-full flex flex-3/6 justify-center px-10 pl-20 items-center">
            <div class="rounded-lg bg-white/50">
            <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
            </div>
        </div>
        <div class=" w-full flex flex-col ">
            <div class="b h-full">
                <p class="text-4xl pt-24">With over a decade of experience, we deliver <br>tailored solutions that empower your business to grow</p>
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
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-red-700/20 group relative flex flex-col items-start overflow-hidden cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <span class="text-xl font-semibold translate-y-10 transition-all duration-300 text-start group-hover:translate-y-0">IT Consultant</span>
                        <span class="transform translate-y-0 opacity-0 transition-all duration-300 
                        group-hover:translate-y-1 text-start group-hover:opacity-100 text-gray-700">Kami membangun situs web 
                        responsif dan berkinerja tinggi sesuai kebutuhan Anda.
                        </span>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-red-700/20 group relative flex flex-col items-start overflow-hidden cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <span class="text-xl font-semibold translate-y-10 transition-all duration-300 text-start group-hover:translate-y-0">Skill Certification</span>
                        <span class="transform translate-y-0 opacity-0 transition-all duration-300 
                        group-hover:translate-y-1 text-start group-hover:opacity-100 text-gray-700">Menciptakan desain visual yang menarik dan efektif untuk branding Anda.</span>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-red-700/20 group relative flex flex-col items-start overflow-hidden cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <span class="text-xl font-semibold translate-y-10 transition-all duration-300 text-start group-hover:translate-y-0">Online Coding Platform</span>
                        <span class="transform translate-y-0 opacity-0 transition-all duration-300 
                        group-hover:translate-y-1 text-start group-hover:opacity-100 text-gray-700">Strategi pemasaran digital untuk meningkatkan jangkauan dan konversi Anda.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 visi space-y-10">
        <div class="flex flex-col items-center mt-10">
            <h2 class="text-3xl font-bold mb-4 text-white text-shadow-glow">The Values We Honor</h2>
            <p class="text-gray-700 mb-4 text-center">At the core of our company lies a set of values that guide every action we take.<br> 
            These values shape our culture, inspire our people, and reflect the standards we uphold in every partnership</p>
        </div>
        <div class="grid grid-cols-4 gap-10 mx-10 items-start">
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Integrity</p>
                <p class=" text-center ">We act with honesty and transparency in everything we do. 
                    Trust is built through accountability and ethical decision-making.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Customer Focus</p>
                <p class=" text-center ">We listen, we care, and we are committed to creating value for those we serve
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Collaboration</p>
                <p class=" text-center ">We believe in the power of teamwork — across departments, with partners, and with our clients — to create impactful outcomes.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-5 ">
                <div class="h-40 w-46 bg-gray-200 p-5 flex justify-center items-center rounded-xl shadow-md shadow-white">
                    <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1">
                </div>
                <p class="mb-2 text-2xl">Excellence</p>
                <p class=" text-center ">We strive to deliver the highest quality in our work, constantly seeking innovation and improvement.
                </p>
            </div>
        </div>
    </section>

    <section id="testi" class="py-16 h-[90vh]">
        <h2 class="text-3xl font-bold mb-4 text-black text-shadow-glow text-center">Experince Shared By<br>Our Clients</h2>
        <x-card/>
    </section>

    <section id="clients" class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center"> Our Clients</h2>
            <div class="flex justify-center">
            <x-slider/>
        </div>
        </div>
    </section>

@endsection