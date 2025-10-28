<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Dhiva Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        dark: '#0F172A',
                        light: '#F1F5F9'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        "fade-in": "fadeIn 1s ease-in forwards",
                        "slide-up": "slideUp 0.8s ease-out forwards"
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                    },
                },
            },
        };      
    </script>
    <style>
        .clip-hex {
            clip-path: polygon(
                50% 0%,
                93% 25%,
                93% 75%,
                50% 100%,
                7% 75%,
                7% 25%
            );
        }
        .page-transition {
            transition: all 0.3s ease-in-out;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body class="bg-[#F5F5F0] text-gray-800 dark:bg-dark dark:text-white font-sans transition-colors duration-300">
    <!-- Navigation -->
    <header class="fixed w-full z-50 bg-[#6C3428] dark:bg-dark/90 backdrop-blur shadow-lg">
        <div class="mx-auto flex justify-between items-center p-4">
            <h1 class="text-xl font-bold text-light">DhivaPortfolio</h1>
            <nav>
                <ul class="flex gap-4 text-sm md:text-base">
                    <li>
                        <a href="{{ url('/home') }}" class="text-light hover:text-white transition px-3 py-2 rounded-lg {{ request()->is('home') || request()->is('/') ? 'bg-[#BA704F] text-white' : 'hover:bg-white/10' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-light hover:text-white transition px-3 py-2 rounded-lg {{ request()->is('about') ? 'bg-[#BA704F] text-white' : 'hover:bg-white/10' }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/education') }}" class="text-light hover:text-white transition px-3 py-2 rounded-lg {{ request()->is('education') ? 'bg-[#BA704F] text-white' : 'hover:bg-white/10' }}">
                            Education
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/projects') }}" class="text-light hover:text-white transition px-3 py-2 rounded-lg {{ request()->is('projects') ? 'bg-[#BA704F] text-white' : 'hover:bg-white/10' }}">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/skills') }}" class="text-light hover:text-white transition px-3 py-2 rounded-lg {{ request()->is('skills') ? 'bg-[#BA704F] text-white' : 'hover:bg-white/10' }}">
                            Skills
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="text-light hover:text-white transition px-3 py-2 rounded-lg {{ request()->is('contact') ? 'bg-[#BA704F] text-white' : 'hover:bg-white/10' }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
            <button onclick="document.documentElement.classList.toggle('dark')" class="ml-4 p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                🌙
            </button>
        </div>
    </header>

    <!-- Main Content - Full Page -->
    <main class="min-h-screen pt-20 page-transition">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center text-sm py-6 text-white dark:text-gray-400 bg-[#421d15] dark:bg-gray-800">
        &copy; 2025 Dhiva Kesuma Pertiwi. All rights reserved.
    </footer>

    <script>
        // Add active page indicator
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('nav a');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('bg-primary', 'text-white');
                }
            });
        });
    </script>
</body>
</html>