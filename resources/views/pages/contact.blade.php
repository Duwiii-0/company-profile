@extends('layouts.app')

@section('content')
<style>
    .form-input {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
    }
    .form-input:focus {
        background: rgba(255, 255, 255, 1);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .submit-btn {
        background: linear-gradient(135deg, #ff6b6b, #ff8e8e);
        transition: all 0.3s ease;
    }
    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(255, 107, 107, 0.4);
    }
    .info-card {
        background: linear-gradient(135deg, #4a5568, #2d3748);
    }

</style>
<div class="bg-red-200 pt-32 pb-20">
<div class="contact-section flex items-center justify-center">
    <div class="max-w-6xl w-full">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-white mb-2">
                Have a Project Idea?
            </h1>
            <p class="text-xl text-orange-300 font-semibold">
                Let's Talk!
            </p>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <div class="">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-white text-sm font-medium mb-2">
                                First Name *
                            </label>
                            <input type="text" name="first_name" 
                                   class="form-input w-full px-4 py-3 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        </div>
                        <div>
                            <label class="block text-white text-sm font-medium mb-2">
                                Last Name *
                            </label>
                            <input type="text" name="last_name" 
                                   class="form-input w-full px-4 py-3 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        </div>
                    </div>

                    <div>
                        <label class="block text-white text-sm font-medium mb-2">
                            Email *
                        </label>
                        <input type="email" name="email" 
                               class="form-input w-full px-4 py-3 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>

                    <div>
                        <label class="block text-white text-sm font-medium mb-2">
                            Phone Number *
                        </label>
                        <input type="tel" name="phone" 
                               class="form-input w-full px-4 py-3 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>

                    <div>
                        <label class="block text-white text-sm font-medium mb-2">
                            Your Message *
                        </label>
                        <textarea name="message" rows="4" 
                                  class="form-input w-full px-4 py-3 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-orange-400 resize-none"></textarea>
                    </div>

                    <button type="submit" 
                            class="submit-btn w-full py-4 px-8 rounded-xl text-white font-semibold text-lg border-0 cursor-pointer">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="info-card rounded-3xl p-8 shadow-2xl text-white">
                <div class="space-y-8">
                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-500 p-3 rounded-full">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Address</h3>
                            <p class="text-gray-300">
                                Jl. Kebon Jeruk Raya No. 123<br>
                                Jakarta Barat, DKI Jakarta<br>
                                Indonesia 11530
                            </p>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-500 p-3 rounded-full">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Contact</h3>
                            <p class="text-gray-300">
                                Phone: +62 21 1234 5678<br>
                                Email: info@company.com
                            </p>
                        </div>
                    </div>

                    <!-- Open Time -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-500 p-3 rounded-full">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Open Time</h3>
                            <p class="text-gray-300">
                                Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 2:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>

                    <!-- Stay Connected -->
                    <div>
                         <h3 class="text-xl font-semibold mb-4">Stay Connected</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon bg-orange-500 p-3 rounded-full hover:bg-orange-600">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a href="#" class="social-icon bg-orange-500 p-3 rounded-full hover:bg-orange-600">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a href="#" class="social-icon bg-orange-500 p-3 rounded-full hover:bg-orange-600">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                            <a href="#" class="social-icon bg-orange-500 p-3 rounded-full hover:bg-orange-600">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </a>
                            <a href="#" class="social-icon bg-orange-500 p-3 rounded-full hover:bg-orange-600">
                                <i class="fab fa-youtube text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection