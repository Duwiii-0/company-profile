<header class="bg-gradient-to-b from-black/50 to-transparent  fixed w-full top-0 z-50">
    <nav class="container mx-auto px-4 py-6 flex items-center relative">
        <!-- Logo Section - Fixed positioning -->
        <div class="text-2xl font-bold text-white absolute left-4">
            <a href="{{ route('home') }}#home">
                <img src="{{ Vite::asset('resources/images/Logo.png') }}" class="w-48 h-auto" alt="logo">
            </a>
        </div>

        <!-- Navigation Menu - Absolutely Centered -->
        <ul class="flex space-x-12 items-center absolute left-1/2 transform -translate-x-1/2">
            <li>
                <a href="{{ route('home') }}#home"
                    class="nav-link text-white hover:text-white transition-all duration-300 relative font-semibold {{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('aboutus') }}"
                    class="nav-link text-white hover:text-white transition-all duration-300 relative font-semibold {{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}#services"
                    class="nav-link text-white hover:text-white transition-all duration-300 relative font-semibold {{ request()->is('services') ? 'active' : '' }}">
                    Services
                </a>
            </li>
            <li>
                <a href="{{ route('portfolio') }}"
                    class="nav-link text-white hover:text-white transition-all duration-300 relative font-semibold {{ request()->is('portfolio') ? 'active' : '' }}">
                    Portfolio
                </a>
            </li>
        </ul>

        <!-- Contact Button - Fixed positioning -->
        <a href="{{ route('contact') }}"
            class="text-red-700 bg-white px-6 py-2 rounded-full hover:bg-transparent hover:border-2 hover:border-white hover:text-white hover:shadow-lg transition-all duration-600 text-sm font-semibold cursor-pointer absolute right-4 border-2 border-transparent">
            Contact Us
        </a>
    </nav>
</header>