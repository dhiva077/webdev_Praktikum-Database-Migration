@extends('layouts.welcome')

@section('title', 'About - Dhiva Portfolio')

@section('content')
<section class="min-h-screen py-20 bg-[#F5F5F0] dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16 animate-slide-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800 dark:text-white">
                About Me
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Get to know more about my journey and passion
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center animate-slide-up">
            <!-- Photo Section -->
            <div class="text-center lg:text-left">
                <div class="relative inline-block">
                    <div class="absolute -inset-2 bg-gradient-to-r from-primary to-[#48494B] rounded-2xl blur opacity-5"></div>
                    <img src="{{ asset('images/about.jpeg') }}" alt="Dhiva" 
                         class="relative rounded-2xl w-full max-w-md mx-auto shadow-2xl">
                </div>
            </div>

            <!-- Content Section -->
            <div class="space-y-6">
                <div class="bg-gradient-to-br from-[#C7C6C1] to-white dark:from-gray-800 dark:to-gray-900 p-8 rounded-2xl shadow-lg">
                    <h2 class="text-2xl font-bold mb-4 text-[#46444C] dark:text-white">
                        Dhiva Kesuma Pertiwi
                    </h2>
                    <p class="text-lg leading-relaxed text-gray-600 dark:text-gray-300 mb-4">
                        Hello! I'm a second-semester Informatics Engineering student at Ciputra University Makassar, 
                        currently diving deep into Artificial Intelligence (AI) and software development as part of 
                        my journey in the technology world.
                    </p>
                    <p class="text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                        From the beginning, I believe that technology is not just about code, but also about creating 
                        intelligent and impactful solutions. That's why I continue to explore creative ways to combine 
                        logic, art, and empathy, both through application development and social projects.
                    </p>
                </div>

                <!-- Quick Info -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-[#C7C6C1] dark:bg-gray-800 p-4 rounded-xl text-center">
                        <div class="text-sm text-gray-600 dark:text-gray-300 mb-1">Current Role</div>
                        <div class="font-semibold text-[#46444C] dark:text-white">Student</div>
                    </div>
                    <div class="bg-[#C7C6C1] dark:bg-gray-800 p-4 rounded-xl text-center">
                        <div class="text-sm text-gray-600 dark:text-gray-300 mb-1">University</div>
                        <div class="font-semibold text-[#46444C] dark:text-white">Ciputra University</div>
                    </div>
                    <div class="bg-[#C7C6C1] dark:bg-gray-800 p-4 rounded-xl text-center">
                        <div class="text-sm text-gray-600 dark:text-gray-300 mb-1">Major</div>
                        <div class="font-semibold text-[#46444C] dark:text-white">Informatics</div>
                    </div>
                    <div class="bg-[#C7C6C1] dark:bg-gray-800 p-4 rounded-xl text-center">
                        <div class="text-sm text-gray-600 dark:text-gray-300 mb-1">Focus</div>
                        <div class="font-semibold text-[#46444C] dark:text-white">AI & Development</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <a href="{{ url('/contact') }}" 
                    class="flex-1 px-6 py-3 bg-gradient-to-r from-[#6C3428] to-[#A67B5B] text-white rounded-xl font-semibold text-center hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        Contact Me
                    </a>

                    <a href="{{ asset('files/CV Dhiva.jpg') }}" 
                       class="flex-1 px-6 py-3 border-2 border-[#6C3428] text-[#6C3428] dark:border-white dark:text-white rounded-xl font-semibold text-center hover:bg-[#BA704F] hover:text-white dark:hover:bg-white dark:hover:text-dark transform hover:-translate-y-1 transition-all duration-300">
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection