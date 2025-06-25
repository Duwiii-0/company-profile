@extends('layouts.app')

@section('content')

    <div class="contact-container py-20">

        <div class="max-w-7xl mx-auto px-6 content-wrapper mt-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <!-- Left Column - Contact Information -->
                <div class="space-y-12">
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                            Kami siap membantu Anda dan menjawab pertanyaan Anda
                        </h1>
                        <p class="text-lg leading-relaxed">
                            Siap mendapatkan bantuan dari konsultan bisnis? Kami memberikan pengalaman pelanggan yang
                            mendalam dan solusi terbaik untuk kebutuhan Anda.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Call Center -->
                        <div
                            class="bg-white pl-3 pt-3 pb-3 rounded-lg transition-all duration-300 hover:shadow-[-5px_5px_0_#FECACA] ">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-phone"></i>
                                </span>
                                Pusat Panggilan
                            </h3>
                            <div class="px-3">
                                <p>+62 21 1234 5678</p>
                            </div>
                        </div>

                        <!-- Our Location -->
                        <div
                            class="bg-white pl-3 pt-3 pb-3 rounded-lg transition-all duration-300 hover:shadow-[-5px_5px_0_#FECACA] ">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                Lokasi Kami
                            </h3>
                            <div class="space-y-2 px-3">
                                <p>Gedung Cyber 2, Lt 15,<br>
                                    Jl. HR. Rasuna Said Blok X-5 No.13,
                                    Kuningan, Jakarta Selatan 12950
                                    Indonesia</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div
                            class="bg-white pl-3 pt-3 pb-3 rounded-lg transition-all duration-300 hover:shadow-[-5px_5px_0_#FECACA] ">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                Email
                            </h3>
                            <p class="px-3 ">adipratama@gmail.com</p>
                        </div>

                        <!-- Social Network -->
                        <div
                            class="bg-white pl-3 pt-3 pb-3 rounded-lg transition-all duration-300 hover:shadow-[-5px_5px_0_#FECACA] ">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-share-alt"></i>
                                </span>
                                Media Sosial
                            </h3>
                            <div class="flex space-x-4 px-3">
                                <a href="https://linkedin.com/in/adipratama" target="_blank"
                                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                    <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="LinkedIn"
                                        class="w-6 h-6 object-cover">
                                </a>

                                <a href="https://instagram.com/adipratama" target="_blank"
                                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                    <img src="{{ Vite::asset('resources/images/whatsappR.png') }}" alt="Instagram"
                                        class="w-6 h-6 object-cover">
                                </a>
                                <a href="https://wa.me/628121302086" target="_blank"
                                    class="social-icon w-9 h-9 flex items-center justify-center">
                                    <img src="{{ Vite::asset('resources/images/instagramR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                </a>
                                <a href="https://twitter.com/adipratama" target="_blank"
                                    class="social-icon w-10 h-10 flex items-center justify-center">
                                    <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="Twitter/X"
                                        class="w-6 h-6 object-cover">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="enhanced-form-container">
                    <!-- Form decoration -->
                    <div class="form-decoration-1"></div>
                    <div class="form-decoration-2"></div>

                    <div class="mb-8 relative z-10">
                        <h2 class="text-2xl font-bold mb-2">Hubungi Kami</h2>
                        <p class="subtitle">
                            Tentukan tujuan Anda dan identifikasi area di mana kami dapat memberikan nilai tambah untuk
                            bisnis Anda.
                        </p>
                    </div>

                    <form class="space-y-6 relative z-10">
                        <div>
                            <label class="form-label text-sm">
                                Nama Lengkap
                            </label>
                            <input type="text" name="full_name" class="form-input w-full px-4 py-3 rounded-lg"
                                placeholder="Masukkan nama lengkap Anda" required>
                        </div>

                        <div>
                            <label class="form-label text-sm">
                                Email
                            </label>
                            <input type="email" name="email" class="form-input w-full px-4 py-3 rounded-lg"
                                placeholder="Masukkan alamat email Anda" required>
                        </div>

                        <div>
                            <label class="form-label text-sm">
                                Subjek
                            </label>
                            <input type="text" name="subject" class="form-input w-full px-4 py-3 rounded-lg"
                                placeholder="Masukkan subjek pesan" required>
                        </div>

                        <div>
                            <label class="form-label text-sm">
                                Pesan
                            </label>
                            <textarea name="message" rows="5" class="form-input w-full px-4 py-3 rounded-lg resize-none"
                                placeholder="Tulis pesan Anda di sini" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn w-full py-4 px-6 rounded-lg text-white font-medium">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection