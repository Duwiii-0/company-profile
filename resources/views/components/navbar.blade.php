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
                <a href="{{ route('home') }}#about"
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
            class="text-red-700 bg-white px-6 py-2 rounded-full hover:bg-transparent hover:border-white hover:shadow-lg transition-all duration-300 text-sm font-semibold cursor-pointer absolute right-4">
            Contact Us
        </a>
    </nav>
</header>

<style>
    /* Ensure nav container has proper height for absolute positioning */
    nav {
        height: 70px;
    }

    /* Subtle hover effects */
    .nav-link:hover {
        transform: translateY(-2px);
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        font-weight: 600;
    }

    /* Active state */
    .nav-link.active {
        font-weight: 600;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    /* Underline effect on hover */
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -4px;
        left: 50%;
        background-color: white;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link.active::after {
        width: 100%;
    }

    /* Click effect */
    .nav-link:active {
        transform: translateY(0);
        transition: transform 0.1s ease;
    }

    /* Subtle pulse effect on click */
    .nav-link.clicked {
        animation: subtle-pulse 0.3s ease;
    }

    @keyframes subtle-pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        ul {
            space-x: 2rem;
            /* Reduce spacing on smaller screens */
        }
    }

    @media (max-width: 768px) {
        .nav-link {
            font-size: 0.875rem;
        }

        ul {
            space-x: 1.5rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Add click animation
                this.classList.add('clicked');
                setTimeout(() => {
                    this.classList.remove('clicked');
                }, 300);
            });
        });
    });
</script>