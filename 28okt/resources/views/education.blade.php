@extends('layouts.welcome')

@section('title', 'Education - Dhiva Portfolio')

@section('content')
<section class="min-h-screen py-20 bg-gradient-to-br from-[#ECE7EI] to-[#C7C6C1] dark:from-gray-900 dark:to-[#1e1e1e]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16 animate-slide-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800 dark:text-white">
                Education Journey
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                My academic path and learning experiences
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 animate-slide-up">
    @php
        $educations = [
            [
                'logo' => 'images/ARIFAH.png',
                'name' => 'MA Arifah Gowa',
                'major' => 'Mathematics and Natural Sciences',
                'period' => '2021 - 2024',
                'description' => 'Completed high school education with focus on science and mathematics, building strong foundation for technology studies.'
            ],
            [
                'logo' => 'images/LOGO CIPUTRA .png',
                'name' => 'Ciputra University',
                'major' => 'Informatics - Artificial Intelligence',
                'period' => '2024 - Present',
                'description' => 'Currently pursuing bachelor degree in Informatics Engineering with specialization in Artificial Intelligence.',
            ],
            [
                'logo' => 'images/UNM.png',
                'name' => 'State University of Makassar',
                'major' => 'Computer Engineering',
                'period' => '2024',
                'description' => 'Short course program focusing on computer engineering fundamentals and practical applications.'
            ]
        ];
    @endphp

    @foreach($educations as $education)
    <div class="group">
        <div class="bg-[#6C3428] dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 h-full flex flex-col">
            <!-- Logo and Header -->
            <div class="text-center mb-6">
                <div class="bg-[#F5F5F0] dark:bg-gray-700 rounded-2xl p-4 inline-flex items-center justify-center mb-4">
                    <img src="{{ asset($education['logo']) }}" 
                         alt="{{ $education['name'] }}" 
                         class="w-16 h-16 object-contain">
                </div>
                <h3 class="text-[#F5F5F0] font-bold text-[#F5F5F0] dark:text-white mb-2">
                    {{ $education['name'] }}
                </h3>
                @if(isset($education['current']))
                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold inline-block mb-2">
                    Current
                </span>
                @endif
            </div>
            
            <!-- Content -->
            <div class="flex-grow">
                <p class="text-[#B19470] font-semibold text-[#B19470] dark:text-primary-400 mb-3 text-center">
                    {{ $education['major'] }}
                </p>
                <p class="text-[#F5F5F0] dark:text-[#F5F5F0] mb-4 text-center leading-relaxed">
                    {{ $education['description'] }}
                </p>
            </div>
            
            <!-- Period -->
            <div class="text-[#F5F5F0] pt-4 border-t border-gray-200 dark:border-gray-700">
                <p class="text-[#F5F5F0] dark:text-gray-400 font-semibold">
                    {{ $education['period'] }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>


        <!-- Additional Info -->
        <div class="mt-16 text-center animate-slide-up">
            <div class="bg-[#6C3428] dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                <h3 class="text-[#B19470] font-bold text-[#B19470] dark:text-white mb-4">
                    Continuous Learning
                </h3>
                <p class="text-[#B19470] dark:text-gray-300 leading-relaxed">
                    Beyond formal education, I actively participate in online courses, workshops, and personal projects 
                    to continuously expand my knowledge in artificial intelligence, web development, and emerging technologies.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection