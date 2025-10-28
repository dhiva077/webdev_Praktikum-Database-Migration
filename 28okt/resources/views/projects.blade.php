@extends('layouts.welcome')

@section('title', 'Projects - Dhiva Portfolio')

@section('content')
<section class="min-h-screen py-20 bg-[#F5F5F0] dark:bg-gray-900">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16 animate-slide-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800 dark:text-white">
                My Projects
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                A collection of my work and creative endeavors
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-slide-up">
            @php
                $projects = [
                    [
                        'image' => 'https://i.pinimg.com/736x/56/67/93/5667936906181a6fbe0501b471e2b5bd.jpg',
                        'title' => 'Code Masterpiece',
                        'description' => 'Advanced programming projects focusing on clean code architecture and user experience design.',
                        'category' => 'Web Development',
                        'status' => 'completed'
                    ],
                    [
                        'image' => 'https://i.pinimg.com/736x/d7/a6/b7/d7a6b7df9d677526b75e90248d74a456.jpg',
                        'title' => 'Creative Photography',
                        'description' => 'Digital art and photography projects exploring visual storytelling and creative expression.',
                        'category' => 'Design & Art',
                        'status' => 'ongoing'
                    ],
                    [
                        'image' => 'https://i.pinimg.com/736x/0c/41/dc/0c41dc3e379d017c240ad51108a49077.jpg',
                        'title' => 'AI Innovation',
                        'description' => 'Machine learning and artificial intelligence projects solving real-world problems.',
                        'category' => 'AI/ML',
                        'status' => 'upcoming'
                    ]
                ];
            @endphp

            @foreach($projects as $project)
            <div class="group">
                <div class="bg-[#6C3428] rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 h-full flex flex-col">
                    <!-- Project Image -->
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ $project['image'] }}" 
                             alt="{{ $project['title'] }}" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            @if($project['status'] == 'completed')
                            <span class="bg-green-100 text-black px-3 py-1 rounded-full text-sm font-semibold">
                                Completed
                            </span>
                            @elseif($project['status'] == 'ongoing')
                            <span class="bg-yellow-100 text-black px-3 py-1 rounded-full text-sm font-semibold">
                                Ongoing
                            </span>
                            @else
                            <span class="bg-blue-100 text-black px-3 py-1 rounded-full text-sm font-semibold">
                                Upcoming
                            </span>
                            @endif
                        </div>
                        
                        <!-- Category -->
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-black/70 text-white px-3 py-1 rounded-full text-sm">
                                {{ $project['category'] }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Project Content -->
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="text-[#F5F5F0] font-bold text-[#F5F5F0] dark:text-white mb-3">
                            {{ $project['title'] }}
                        </h3>
                        <p class="text-[#B19470] dark:text-gray-300 mb-6 leading-relaxed flex-grow">
                            {{ $project['description'] }}
                        </p>
                        
                        <button class="w-full bg-gradient-to-r from-[#F5F5F0] to-[#D9CFC3] text-[#6C3428] py-3 rounded-xl font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            View Project Details
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-16 animate-slide-up">
            <div class="bg-gradient-to-r from-[#6C3428] to-[#A67B5B] rounded-2xl p-8 text-white max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold mb-4">Interested in my work?</h3>
                <p class="mb-6 opacity-90">Let's discuss potential collaborations or projects!</p>
                <a href="{{ url('/contact') }}" 
                class="inline-block bg-gradient-to-r from-[#F5F5F0] to-[#E7E2DA] text-[#6C3428] px-8 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>
</section>
@endsection