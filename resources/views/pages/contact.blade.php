@extends('layouts.app')

@section('content')
    <style>
        .contact-container {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .contact-container::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.1));
            border-radius: 50%;
            z-index: 1;
        }

        .contact-container::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -15%;
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.1), rgba(251, 191, 36, 0.1));
            border-radius: 50%;
            z-index: 1;
        }

        .content-wrapper {
            position: relative;
            z-index: 2;
        }

        .decorative-dots {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(59, 130, 246, 0.3);
            border-radius: 50%;
        }

        .dot-1 {
            top: 20%;
            left: 10%;
        }

        .dot-2 {
            top: 15%;
            right: 25%;
        }

        .dot-3 {
            bottom: 25%;
            left: 15%;
        }

        .dot-4 {
            bottom: 30%;
            right: 20%;
        }

        .floating-element {
            position: absolute;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .icon-decoration {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 6px;
            margin-right: 8px;
        }

        .form-input {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        .submit-btn {
            background: #1f2937;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .submit-btn:hover {
            background: #111827;
            transform: translateY(-1px);
        }

        .contact-info-item {
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateX(5px);
        }

        .social-icon {
            width: 30px;
            height: 30px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-2px) scale(1.1);
        }
    </style>

    <div class="contact-container py-20">
        <!-- Decorative Elements -->
        <div class="decorative-dots dot-1"></div>
        <div class="decorative-dots dot-2"></div>
        <div class="decorative-dots dot-3"></div>
        <div class="decorative-dots dot-4"></div>

        <div class="floating-element"
            style="top: 10%; right: 15%; width: 20px; height: 20px; background: rgba(59, 130, 246, 0.2); border-radius: 50%;">
        </div>
        <div class="floating-element"
            style="bottom: 15%; left: 20%; width: 15px; height: 15px; background: rgba(236, 72, 153, 0.2); border-radius: 50%; animation-delay: -2s;">
        </div>

        <div class="max-w-7xl mx-auto px-6 content-wrapper mt-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <!-- Left Column - Contact Information -->
                <div class="space-y-12">
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                            Kami siap membantu Anda dan menjawab pertanyaan Anda
                        </h1>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Siap mendapatkan bantuan dari konsultan bisnis? Kami memberikan pengalaman pelanggan yang
                            mendalam dan solusi terbaik untuk kebutuhan Anda.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Call Center -->
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-phone" style="font-size: 6px;"></i>
                                </span>
                                Pusat Panggilan
                            </h3>
                            <div class="space-y-2 text-gray-600">
                                <p>0800 1234 567 89 90</p>
                                <p>+62 21 1234 5678</p>
                            </div>
                        </div>

                        <!-- Our Location -->
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-map-marker-alt" style="font-size: 6px;"></i>
                                </span>
                                Lokasi Kami
                            </h3>
                            <div class="space-y-2 text-gray-600">
                                <p>Gedung Cyber 2, Lt 15,
                                    Jl. HR. Rasuna Said Blok X-5 No.13
                                    Kuningan, Jakarta Selatan 12950
                                    Indonesia</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-envelope" style="font-size: 6px;"></i>
                                </span>
                                Email
                            </h3>
                            <p class="text-gray-600">adipratama@gmail.com</p>
                        </div>

                        <!-- Social Network -->
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-share-alt" style="font-size: 6px;"></i>
                                </span>
                                Media Sosial
                            </h3>
                            <div class="flex space-x-4">
                                <a href="https://twitter.com/adipratama" target="_blank"
                                    class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                    <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                    class="w-full h-full object-cover">
                                </a>
                                
                                <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-7 h-7 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                         <img src="{{ Vite::asset('resources/images/instagramR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                <a href="https://wa.me/628121302086" target="_blank"
                                    class="social-icon w-10 h-10 flex items-center justify-center">
                                    <x-icons.whatsapp class="w-5 h-5" />
                                </a>
                               <a href="https://twitter.com/adipratama" target="_blank"
                                        class="social-icon w-10 h-10 flex items-center justify-center">
                                         <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="facebook"
                                        class="w-full h-full object-cover">
                                    </a>
                                <a href="https://twitter.com/adipratama" target="_blank"
                                    class="social-icon w-7 h-7 flex items-center justify-center">
                                        <img src="{{ Vite::asset('resources/images/XR.png') }}" alt="facebook"
                                    class="w-full h-full object-cover">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 relative overflow-hidden">
                    <!-- Form decoration -->
                    <div
                        class="absolute top-4 right-4 w-8 h-8 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full opacity-50">
                    </div>
                    <div
                        class="absolute bottom-4 left-4 w-6 h-6 bg-gradient-to-br from-pink-100 to-yellow-100 rounded-full opacity-40">
                    </div>

                    <div class="mb-8 relative z-10">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Hubungi Kami</h2>
                        <p class="text-gray-600">
                            Tentukan tujuan Anda dan identifikasi area di mana kami dapat memberikan nilai tambah untuk
                            bisnis Anda.
                        </p>
                    </div>

                    <form class="space-y-6 relative z-10">

                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">
                                Nama Lengkap
                            </label>
                            <input type="text" name="full_name" class="form-input w-full px-4 py-3 rounded-lg"
                                placeholder="Masukkan nama lengkap Anda" required>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">
                                Email
                            </label>
                            <input type="email" name="email" class="form-input w-full px-4 py-3 rounded-lg"
                                placeholder="Masukkan alamat email Anda" required>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">
                                Subjek
                            </label>
                            <input type="text" name="subject" class="form-input w-full px-4 py-3 rounded-lg"
                                placeholder="Masukkan subjek pesan" required>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">
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