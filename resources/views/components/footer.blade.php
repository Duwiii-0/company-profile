<footer class="bg-gray-800 text-white py-16"
    style="background: radial-gradient(circle at center 130%, #FF5F5F 30%, #993939 100%);">
    <div class="container mx-auto px-6 lg:px-8">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-12">
            <!-- Logo Section -->
            <div class="lg:col-span-1">
                <div class="text-2xl font-bold pb-5">
                    <img src="{{ Vite::asset('resources/images/Logo.png') }}" class="w-40 h-auto" alt="Adipratama Logo">
                </div>
                <p class="text-red-100 leading-relaxed">
                    Kreatif Solusi untuk masa depan digital yang lebih baik.
                    Kami menyediakan layanan IT terpercaya dan inovatif.
                </p>
            </div>

            <!-- Useful Links -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-semibold mb-5 text-white">Useful Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#home"
                            class="text-red-200 hover:text-white hover:underline transition-all duration-300 transform hover:translate-x-1">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#about"
                            class="text-red-200 hover:text-white hover:underline transition-all duration-300 transform hover:translate-x-1">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#services"
                            class="text-red-200 hover:text-white hover:underline transition-all duration-300 transform hover:translate-x-1">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#projects"
                            class="text-red-200 hover:text-white hover:underline transition-all duration-300 transform hover:translate-x-1">
                            Projects
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Our Services -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-semibold mb-5 text-white">Our Services</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#"
                            class="text-red-200 hover:text-white hover:underline transition-all duration-300 transform hover:translate-x-1">
                            IT Consultant
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-red-200 hover:text-white hover:underline transition-all duration-300 transform hover:translate-x-1">
                            Skill Certification
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-red-200 hover:text-white hover:underline transition-all duration-300 transform hover:translate-x-1">
                            Online Coding Platform
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="lg:col-span-1">
                <h3 class="text-lg font-semibold mb-5 text-white">Find Us</h3>
                <div class="space-y-4">
                    <!-- Address -->
                    <div class="">
                        <p class="text-red-200 text-sm mb-1">Office Hours: Mon - Fri : 8am - 9pm</p>
                        <div class="text-red-100 contact-item text-sm leading-relaxed">
                            <strong class="text-white">PT Adipratama Kreatif Solusi</strong><br>
                            Gedung Cyber 2, Lt 15,<br>
                            Jl. HR. Rasuna Said Blok X-5 No.13<br>
                            Kuningan, Jakarta Selatan 12950<br>
                            Indonesia
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="">
                        <p class="text-red-200 text-sm mb-1">Email</p>
                        <div class="contact-item">
                            <a href="mailto:adipratama@gmail.com"
                                class="text-red-100 hover:text-white transition-colors duration-300">
                                adipratama@gmail.com
                            </a>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="">
                        <p class="text-red-200 text-sm mb-1">Phone</p>
                        <div class="contact-item">
                            <a href="tel:+628121302086"
                                class="text-red-100 hover:text-white transition-colors duration-300">
                                +62-812-1302-0861
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-red-300/20 mt-12 mb-8"></div>

        <!-- Bottom Footer -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Copyright -->
            <div class="text-red-200 text-sm">
                &copy; {{ date('Y') }} PT Adipratama Kreatif Solusi. All rights reserved.
            </div>

            <!-- Social Media -->
            <div class="flex items-center space-x-4">
                <a href="https://facebook.com/adipratama" target="_blank"
                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                    <x-icons.facebook class="w-5 h-5"/>
                </a>
                <a href="https://instagram.com/adipratama" target="_blank"
                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                    <x-icons.instagram class="w-5 h-5 text-white" />
                </a>
                <a href="https://wa.me/628121302086" target="_blank"
                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                    <x-icons.whatsapp class="w-5 h-5 text-white" />
                </a>
                <a href="https://linkedin.com/company/adipratama" target="_blank"
                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                    <x-icons.linkedin class="w-5 h-5 text-white" />
                </a>
                <a href="https://twitter.com/adipratama" target="_blank"
                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                    <x-icons.x class="w-5 h-5 text-white " />
                </a>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Custom hover effects for footer links */
    .contact-item {
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        transform: translateX(4px);
    }

    /* Social media hover effects */
    .social-icon {
        position: relative;
        overflow: hidden;
    }

    .social-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .social-icon:hover::before {
        left: 100%;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .contact-item {
            text-align: center;
        }

        footer .container {
            text-align: center;
        }

        footer .grid {
            text-align: left;
        }
    }
</style>