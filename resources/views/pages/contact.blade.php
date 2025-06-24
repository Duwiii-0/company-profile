@extends('layouts.app')

@section('content')
    <style>
        /* Contact Page Enhanced Styles */
        .contact-container {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        /* Content wrapper */
        .content-wrapper {
            position: relative;
            z-index: 2;
        }

        /* Enhanced heading styles */
        .contact-container h1 {
            background: linear-gradient(135deg, #1f2937, #374151);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
            letter-spacing: -0.025em;
            line-height: 1.1;
        }

        .contact-container p {
            color: #64748b;
            font-weight: 400;
            line-height: 1.7;
        }

        /* Contact info items */
        .contact-info-item {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 24px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-info-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #ef4444, #dc2626);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.95);
        }

        .contact-info-item:hover::before {
            opacity: 1;
        }

        .contact-info-item h3 {
            color: #1f2937 !important;
            font-weight: 600;
        }

        .contact-info-item p {
            color: #64748b !important;
        }

        /* Icon decorations */
        .icon-decoration {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 15px;
            height: 15px;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border-radius: 50%;
            margin-right: 12px;
            color: white;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }

        /* Enhanced form styling */
        .enhanced-form-container {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border-radius: 20px;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .enhanced-form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.05) 0%, rgba(220, 38, 38, 0.05) 100%);
            z-index: -1;
        }

        .enhanced-form-container h2 {
            background: linear-gradient(135deg, #1f2937, #374151);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .enhanced-form-container .subtitle {
            color: #64748b;
            line-height: 1.6;
        }

        /* Form inputs */
        .form-input {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid rgba(229, 231, 235, 0.5);
            transition: all 0.3s ease;
            font-size: 14px;
            color: #374151;
        }

        .form-input:focus {
            outline: none;
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
            background: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
        }

        .form-input::placeholder {
            color: #9ca3af;
            font-weight: 400;
        }

        /* Submit button */
        .submit-btn {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 50%, #b91c1c 100%);
            border: none;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(239, 68, 68, 0.4);
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        /* Labels */
        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
            display: block;
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {

            .contact-container h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .contact-container {
                padding: 40px 0;
            }

            .contact-container h1 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .contact-info-item {
                padding: 20px;
            }

            .social-icon {
                width: 40px;
                height: 40px;
            }

            .enhanced-form-container {
                padding: 30px 20px;
            }
        }
    </style>

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
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-phone"></i>
                                </span>
                                Pusat Panggilan
                            </h3>
                            <div class="space-y-2">
                                <p>0800 1234 567 89 90</p>
                                <p>+62 21 1234 5678</p>
                            </div>
                        </div>

                        <!-- Our Location -->
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                Lokasi Kami
                            </h3>
                            <div class="space-y-2">
                                <p>Gedung Cyber 2, Lt 15,<br>
                                    Jl. HR. Rasuna Said Blok X-5 No.13<br>
                                    Kuningan, Jakarta Selatan 12950<br>
                                    Indonesia</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                Email
                            </h3>
                            <p>adipratama@gmail.com</p>
                        </div>

                        <!-- Social Network -->
                        <div class="contact-info-item">
                            <h3 class="text-lg font-semibold mb-3 flex items-center">
                                <span class="icon-decoration">
                                    <i class="fas fa-share-alt"></i>
                                </span>
                                Media Sosial
                            </h3>
                            <div class="flex space-x-4">
                                <a href="https://linkedin.com/in/adipratama" target="_blank"
                                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                    <img src="{{ Vite::asset('resources/images/linkedinR.png') }}" alt="LinkedIn"
                                        class="w-6 h-6 object-cover">
                                </a>

                                <a href="https://instagram.com/adipratama" target="_blank"
                                    class="social-icon w-10 h-10 flex items-center justify-center hover:scale-110 transition-all duration-300">
                                    <img src="{{ Vite::asset('resources/images/instagramR.png') }}" alt="Instagram"
                                        class="w-6 h-6 object-cover">
                                </a>
                                <a href="https://wa.me/628121302086" target="_blank"
                                    class="social-icon w-10 h-10 flex items-center justify-center">
                                    <x-icons.whatsapp class="w-5 h-5" />
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