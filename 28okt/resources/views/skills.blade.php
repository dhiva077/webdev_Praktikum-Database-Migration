@extends('layouts.welcome')

@section('title', 'Skills - Dhiva Portfolio')

@section('content')
<section id="skills" class="min-h-screen bg-[#F5F5F0] text-black py-20 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Judul dan Deskripsi -->
        <div class="text-center mb-16 animate-slide-up">
            <h2 class="text-4xl font-bold mb-4 text-[#46444C]">Skills & Tools</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Technologies and tools I use to bring ideas to life
            </p>
        </div>

        <!-- Grid Skills -->
        <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto animate-slide-up">
            @php
                $skills = [
                    ['name' => 'HTML', 'image' => 'https://i.pinimg.com/736x/c5/73/ff/c573ff5552d6da9a1d28ec4e27cd1445.jpg'],
                    ['name' => 'CSS', 'image' => 'https://i.pinimg.com/736x/23/4c/b3/234cb3541babe60e78df2030e2ea6da1.jpg'],
                    ['name' => 'JavaScript', 'image' => 'https://i.pinimg.com/736x/0e/4f/dc/0e4fdce8ac22e09688c580e5bc4dcd7d.jpg'],
                    ['name' => 'Python', 'image' => 'https://i.pinimg.com/736x/a8/c9/34/a8c934a6bd243de6e63aaf072c69013c.jpg'],
                    ['name' => 'Java', 'image' => 'https://i.pinimg.com/736x/c9/08/07/c9080749a3b2d05ae531df10c1a42a11.jpg'],
                    ['name' => 'TailwindCSS', 'image' => 'https://i.pinimg.com/736x/eb/bd/64/ebbd64ad2af51779d27e265216f6330a.jpg'],
                    ['name' => 'Laravel', 'image' => 'https://i.pinimg.com/736x/42/ce/60/42ce60609179ef814591e4221497ff69.jpg'],
                    ['name' => 'PHP', 'image' => 'https://i.pinimg.com/1200x/cf/19/c8/cf19c8a0c6e186028ec251b973f4ff9d.jpg'],
                    ['name' => 'MySQL', 'image' => 'https://i.pinimg.com/736x/09/7b/34/097b349ab1d78c15744c3a89ff457939.jpg'],
                    ['name' => 'GitHub', 'image' => 'https://i.pinimg.com/736x/94/61/ff/9461ffde690752a65c8c5ce5c7a04dcc.jpg'],
                    ['name' => 'VS Code', 'image' => 'https://i.pinimg.com/736x/01/e6/21/01e621158668a4b8b7c92f1d1671bd43.jpg'],
                    ['name' => 'Android Studio', 'image' => 'https://i.pinimg.com/736x/5a/81/46/5a814660c6e142c48f5d7241c45e4597.jpg'],
                    ['name' => 'Flutter', 'image' => 'https://i.pinimg.com/1200x/44/51/b1/4451b16f14d94961bbc5a1a29c2d3459.jpg'],
                    ['name' => 'Figma', 'image' => 'https://i.pinimg.com/736x/29/95/95/29959595fe22edde8408b060d3ac3d82.jpg'],
                    ['name' => 'Canva', 'image' => 'https://i.pinimg.com/736x/d6/29/c4/d629c46f64ec9b0b2d176648fd40add0.jpg'],
                    ['name' => 'Dart', 'image' => 'https://i.pinimg.com/1200x/4c/64/02/4c640245914ae3321f5b861fccccdb73.jpg'],
                ];
            @endphp

            @foreach ($skills as $skill)
                <div class="w-24 h-24 bg-[#BA704F] clip-hex flex items-center justify-center hover:bg-[#6C3428] transition duration-300 shadow-md hover:shadow-xl transform hover:-translate-y-1">
                    <img src="{{ $skill['image'] }}" alt="{{ $skill['name'] }}" class="w-10 h-10">
                </div>
            @endforeach
        </div>
    </div>

    <style>
        /* Bentuk hexagon */
        .clip-hex {
            clip-path: polygon(
                50% 0%, 93% 25%, 93% 75%, 
                50% 100%, 7% 75%, 7% 25%
            );
        }

        /* Animasi slide-up seperti di halaman About */
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
            animation: slideUp 1s ease-out;
        }
    </style>
</section>
@endsection
