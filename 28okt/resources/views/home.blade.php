@extends('layouts.welcome')

@section('title', 'Home - Dhiva Portfolio')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#ECE7EI] via-white to-[#C7C6C1] dark:from-dark dark:via-gray-900 dark:to-[#1e1e1e] px-6 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-32 w-80 h-80 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-[#48494B]/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="text-center relative z-10 animate-fade-in max-w-4xl mx-auto">
        <!-- Profile Picture -->
        <div class="relative mx-auto mb-8 w-48 h-48">
            <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#6C3428] to-[#A67B5B] animate-spin-slow"></div>
            <img src="{{ asset('images/profile_dhiva.jpg') }}" alt="Dhiva" 
                 class="relative rounded-full w-44 h-44 object-cover mx-auto mt-2 border-4 border-white dark:border-dark shadow-2xl">
        </div>
        
        <!-- Main Heading -->
        <h1 class="text-5xl md:text-7xl font-black mb-6 text-[#6C3428]">
    Hi, I'm <span>Dhiva</span> 
    <span class="inline-block animate-wiggle">👋🏻</span>
</h1>


        <!-- Subtitle -->
        <p class="text-2xl md:text-3xl text-gray-600 dark:text-gray-300 mb-6 font-medium">
            Informatics Engineering Student
        </p>
        
        <p class="text-xl text-[#6C3428] dark:text-[#DFA878] font-semibold mb-8">
    Artificial Intelligence Enthusiast
</p>

        
        <!-- Short Description -->
        <p class="text-lg text-gray-500 dark:text-gray-400 mb-12 leading-relaxed max-w-2xl mx-auto">
            Passionate about creating intelligent solutions through code and artificial intelligence. 
            Currently exploring the intersection of technology and human-centered design.
        </p>
        
        <!-- Quick Stats -->
        <div class="grid grid-cols-3 gap-8 max-w-2xl mx-auto mb-12">
            <div class="text-center">
                <div class="text-3xl font-bold text-[#6C3428] mb-2">2+</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Years Learning</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-[#6C3428] mb-2">10+</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Projects</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-[#6C3428] mb-2">5+</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Technologies</div>
            </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ url('/projects') }}" 
               class="px-8 py-4 bg-gradient-to-r from-[#6C3428] to-[#A67B5B] text-white rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2"
                <span>View My Work</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </a>
            <a href="{{ url('/contact') }}" 
   class="px-8 py-4 border-2 border-[#6C3428] text-[#6C3428] rounded-full font-semibold hover:bg-[#6C3428] hover:text-white transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
    <span>Get In Touch</span>
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
    </svg>
</a>
        </div>
    </div>
</section>
@endsection