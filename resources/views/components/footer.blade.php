<footer class="bg-gray-800 text-white flex flex-col text-center py-4  pt-16" style="background: radial-gradient(circle at center 130%, #FF5F5F 30%, #993939 100%);">
    <div class="flex flex-row justify-center align-center">
        <div class="flex flex-col flex-1 items-start ml-23">
            <div class="text-xl pb-5">Logo</div>
            <p class="text-white/90">motto or tagline here Lorem ipsum dolor sit amet</p>
            <p class="text-white/90">consectetur adipiscing elit</p>
        </div>
        <div class="flex flex-row flex-2 justify-center mr-23">
            <div class="flex flex-col w-full items-start space-y-5">
                <div>Useful Links</div>
                <ul class="flex flex-col items-start space-y-1">
                    <li><a href="/" class="hover:underline text-white/50">Home</a></li>
                    <li><a href="/" class="hover:underline text-white/50">About</a></li>
                    <li><a href="/" class="hover:underline text-white/50">Services</a></li>
                    <li><a href="/" class="hover:underline text-white/50">Projects</a></li>
                </ul>
            </div>
            <div class="flex flex-col w-full items-start space-y-5">
                <div>Our Services</div>
                <ul class="flex flex-col items-start space-y-1">
                    <li><a href="/" class="hover:underline text-white/50">IT Consultant</a></li>
                    <li><a href="/" class="hover:underline text-white/50">Skill Certification</a></li>
                    <li><a href="/" class="hover:underline text-white/50">Online Coding Platform</a></li>
                </ul>
            </div>
            <div class="flex flex-col w-full items-start space-y-5">
                <div>Find Us</div>
                <ul class="flex flex-col items-start space-y-1">
                    <li class="flex flex-col items-start">
                        <p class="text-white/70">Mon - Fri : 8am - 9pm</p>
                        <a href="/" class="hover:underline text-start">PT Adipratama Keatif solusi <br>
                            Gedung Cyber 2, Lt 15,
                            Jl. HR. Rasuna Said Blok X-5 No.13
                            Kuningan, Jakarta Selatan 12950
                            Indonesia
                        </a>
                    </li>
                    <li class="flex flex-col items-start">
                        <p class="text-white/70">Email</p>
                        <a href="/" class="hover:underline text-start">
                            Adipratama@gmail.com
                        </a>
                    </li>
                    <li class="flex flex-col items-start">
                        <p class="text-white/70">Phone</p>
                        <a href="/" class="hover:underline text-start">
                            +62-812-1302-0861   
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="h-[1px] w-[87vw] bg-gray-500 mr-23 ml-23 mt-8 mb-2"></div>

    <div class="flex flex-row justify-center align-center">
        <div class="flex flex-row justify-start align-center w-full pt-1 ml-23">
            <p class="text-white/70">&copy; {{ date('Y') }} Company Name. All rights reserved.</p>
        </div>
        <div class="flex flex-row justify-end align-center w-full pt-1 space-x-5 mr-25">
            <a href="https://facebook.com/yourcompany" target="_blank" class="w-6 h-6 rounded-full flex items-center justify-center hover:bg-blue-100 transition">
                <x-icons.facebook class="w-6 h-6" />
            </a>
            <a href="https://instagram.com/yourcompany" target="_blank" class="w-6 h-6 rounded-full flex items-center justify-center hover:bg-blue-100 transition">
                <x-icons.instagram class="w-6 h-6" />
            </a>
            {{-- ADA PROBLEM UKURAN KEGEDEAN
            <a href="https://linkedin.com/company/yourcompany" target="_blank" class="w-7 h-7 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-100 transition">
                <x-icons.linkedin class="w-7 h-7 text-white" />
            </a>--}}
            <a href="https://linkedin.com/company/yourcompany" target="_blank" class="w-6 h-6 rounded-full flex items-center justify-center hover:bg-blue-100 transition">
                <x-icons.whatsapp class="w-6 h-6" />
            </a>
            <a href="https://twitter.com/yourcompany" target="_blank" class="w-6 h-6 rounded-full flex items-center justify-center hover:bg-blue-100 transition">
                <x-icons.x class="w-6 h-6" />
            </a>
        </div>
    </div>
</footer>
