<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portfolio - Web Developer')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
        .animate-fade-in { opacity: 0; animation: fadeIn 1s ease-in-out forwards; }
        .animate-slide-up { opacity: 0; transform: translateY(20px); animation: slideUp 1s ease-in-out forwards; }
        @keyframes fadeIn { to { opacity: 1; } }
        @keyframes slideUp { to { opacity: 1; transform: translateY(0); } }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }

        /* Star Background Styles */
        .star {
          position: absolute;
          border-radius: 50%;
          background: white;
          box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.4);
        }

        .meteor {
          position: absolute;
          background: linear-gradient(to right, white, white, transparent);
          border-radius: 50%;
          box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.3);
        }

        @keyframes meteor {
          0% {
            transform: translateX(-100px) translateY(-100px) rotate(45deg);
            opacity: 1;
          }
          100% {
            transform: translateX(calc(100vw + 100px)) translateY(calc(100vh + 100px)) rotate(45deg);
            opacity: 0;
          }
        }

        .animate-meteor {
          animation: meteor linear infinite;
        }

        .animate-pulse-subtle {
          animation: pulse-subtle 2s ease-in-out infinite;
        }

        @keyframes pulse-subtle {
          0%, 100% { opacity: 0.5; }
          50% { opacity: 1; }
        }

        @keyframes typing {
          0% { width: 0 }
          50% { width: 11ch }
          100% { width: 0 }
        }

        @keyframes cursorBlink {
          0%, 100% { border-color: transparent }
          50% { border-color: #00eaff }
        }

        .typing-name {
          width: 0;
          animation: typing 7s steps(12, end) infinite, cursorBlink 0.7s infinite;
          text-shadow: 0 0 20px #00eaff;
        }
        @keyframes waveOpacity {
        0%   { opacity: 0.2; transform: translateY(0px); }
        50%  { opacity: 1; transform: translateY(-4px); }
        100% { opacity: 0.2; transform: translateY(0px); }
        }

        .wave-letter {
        display: inline-block;
        animation: waveOpacity 1.8s ease-in-out infinite;
        }
    </style>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="text-white" style="background: linear-gradient(to bottom right, rgb(17 24 39), rgb(30 58 138), rgb(88 28 135));">
    <!-- Navigation -->
    <nav id="main-nav" class="fixed top-0 w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-white hover:text-cyan-400 transition-colors">Portfolio</a>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="#about" class="text-white hover:text-cyan-400 font-medium transition-colors duration-300">About</a>
                    <a href="#experience" class="text-white hover:text-cyan-400 font-medium transition-colors duration-300">Experience</a>
                    <a href="#skills" class="text-white hover:text-cyan-400 font-medium transition-colors duration-300">Skills</a>
                    <a href="#projects" class="text-white hover:text-cyan-400 font-medium transition-colors duration-300">Projects</a>
                    <a href="#contact" class="text-white hover:text-cyan-400 font-medium transition-colors duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Star Background -->
    <div id="star-background" class="fixed inset-0 overflow-hidden pointer-events-none z-0"></div>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2026 SINCERE. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Simple scroll animation trigger
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.animate-slide-up').forEach(el => {
            observer.observe(el);
        });

        // Navigation is always transparent

        // Star Background Functionality
        let stars = [];
        let meteors = [];

        function generateStars() {
            const starBackground = document.getElementById('star-background');
            starBackground.innerHTML = ''; // Clear existing stars

            const numberOfStars = Math.floor(
                (window.innerWidth * window.innerHeight) / 10000
            );

            stars = [];

            for (let i = 0; i < numberOfStars; i++) {
                const star = {
                    id: i,
                    size: Math.random() * 3 + 1,
                    x: Math.random() * 100,
                    y: Math.random() * 100,
                    opacity: Math.random() * 0.5 + 0.5,
                    animationDuration: Math.random() * 4 + 2,
                };

                stars.push(star);

                const starElement = document.createElement('div');
                starElement.className = 'star animate-pulse-subtle';
                starElement.style.width = star.size + 'px';
                starElement.style.height = star.size + 'px';
                starElement.style.left = star.x + '%';
                starElement.style.top = star.y + '%';
                starElement.style.opacity = star.opacity;
                starElement.style.animationDuration = star.animationDuration + 's';

                starBackground.appendChild(starElement);
            }
        }

        function generateMeteors() {
            const starBackground = document.getElementById('star-background');
            const numberOfMeteors = 4;

            meteors = [];

            for (let i = 0; i < numberOfMeteors; i++) {
                const meteor = {
                    id: i,
                    size: Math.random() * 2 + 1,
                    x: Math.random() * 100,
                    y: Math.random() * 20,
                    delay: Math.random() * 15,
                    animationDuration: Math.random() * 3 + 3,
                };

                meteors.push(meteor);

                const meteorElement = document.createElement('div');
                meteorElement.className = 'meteor animate-meteor';
                meteorElement.style.width = meteor.size * 50 + 'px';
                meteorElement.style.height = meteor.size * 2 + 'px';
                meteorElement.style.left = meteor.x + '%';
                meteorElement.style.top = meteor.y + '%';
                meteorElement.style.animationDelay = meteor.delay + 's';
                meteorElement.style.animationDuration = meteor.animationDuration + 's';

                starBackground.appendChild(meteorElement);
            }
        }

        function initStarBackground() {
            generateStars();
            generateMeteors();

            window.addEventListener('resize', () => {
                generateStars();
            });
        }

        // Force animations to work on page load
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.animate-fade-in, .animate-slide-up').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            });

            // Initialize star background immediately
            initStarBackground();
        });
    </script>
</body>
</html>