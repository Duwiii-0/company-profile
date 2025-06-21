<header class="bg-red-700 shadow-md fixed w-full top-0 z-50"> {{-- Pastikan warna ini --}}
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
        <div class="text-2xl font-bold text-white">
            <a href="#home">
                <img src="{{ Vite::asset('resources/images/Logo.png') }}" class="w-48 h-auto" alt="logo">
            </a>
        </div>
        {{-- Pastikan ini ada: flex-grow dan justify-center pada ul --}}
        <ul class="flex-grow flex justify-center space-x-6 items-center">
            <li><a href="#home" class="text-white hover:text-gray-200 transition duration-300">Home</a></li>
            <li><a href="" class="text-white hover:text-gray-200 transition duration-300">About</a></li>
            <li><a href="#services" class="text-white hover:text-gray-200 transition duration-300">Services</a></li>
            <li><a href="#projects" class="text-white hover:text-gray-200 transition duration-300">Projects</a></li>
        </ul>
            <a
                href="{{ route('contact') }}" target="_blank"                
                class="text-red-700 bg-white px-4 py-2 rounded-full hover:bg-gray-100 transition duration-300 text-sm font-semibold cursor-pointer relative z-50">Contact
                Us
            </a>
    </nav>
</header>