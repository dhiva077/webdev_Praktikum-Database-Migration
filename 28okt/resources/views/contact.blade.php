@extends('layouts.welcome')

@section('content')
<!-- Contact -->
<section id="contact" class="bg-[#F5F5F0] py-24 px-6 sm:px-12 lg:px-24">
    <div class="max-w-3xl mx-auto text-center animate-slide-up">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Get in Touch</h2>
        <p class="text-gray-600 mb-12">You can reach me through any of the platforms below. I'm always happy to connect!</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Email -->
            <a href="mailto:dhivakesuma@gmail.com" class="flex items-center p-5 bg-[#6C3428] rounded-2xl shadow hover:bg-[#BA704F] transition transform hover:bg-[#BA704F] animate-slide-up delay-[0ms]">
                <div class="bg-blue-100 p-3 rounded-full mr-4">
                    <img src="https://img.icons8.com/ios-filled/24/1e3a8a/email.png" alt="Email" />
                </div>
                <span class="text-white font-medium">dhivakesuma@gmail.com</span>
            </a>
    
            <!-- Instagram -->
            <a href="https://www.instagram.com/dhvprtwii?igsh=MW5pcmh6ODd0am44dQ==" target="_blank" class="flex items-center p-5 bg-[#6C3428] rounded-2xl shadow hover:bg-[#BA704F] transition transform hover:bg-[#BA704F] animate-slide-up delay-[100ms]">
                <div class="bg-pink-100 p-3 rounded-full mr-4">
                    <img src="https://img.icons8.com/ios-filled/24/d946ef/instagram-new.png" alt="Instagram" />
                </div>
                <span class="text-white font-medium">@dhvprtwii</span>
            </a>
    
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/dhiva-kesuma-pertiwi-76328833b/" target="_blank" class="flex items-center p-5 bg-[#6C3428] rounded-2xl shadow hover:bg-[#BA704F] transition transform hover:bg-[#BA704F] animate-slide-up delay-[200ms]">
                <div class="bg-blue-100 p-3 rounded-full mr-4">
                    <img src="https://img.icons8.com/ios-filled/24/0e76a8/linkedin.png" alt="LinkedIn" />
                </div>
                <span class="text-white font-medium">Dhiva Kesuma Pertiwi</span>
            </a>
    
            <!-- GitHub -->
            <a href="https://github.com/dhiva077" target="_blank" class="flex items-center p-5 bg-[#6C3428] rounded-2xl shadow hover:bg-[#BA704F] transition transform hover:bg-[#BA704F] animate-slide-up delay-[300ms]">
                <div class="bg-gray-200 p-3 rounded-full mr-4">
                    <img src="https://img.icons8.com/ios-glyphs/24/333333/github.png" alt="GitHub" />
                </div>
                <span class="text-white font-medium">github.com/dhivakp</span>
            </a>
        </div>
    </div>

    <style>
        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-up {
            animation: slideUp 0.8s ease-out both;
        }

        /* Delay per card agar muncul satu-satu */
        .delay-\[0ms\] { animation-delay: 0ms; }
        .delay-\[100ms\] { animation-delay: 100ms; }
        .delay-\[200ms\] { animation-delay: 200ms; }
        .delay-\[300ms\] { animation-delay: 300ms; }
    </style>
</section>
@endsection
