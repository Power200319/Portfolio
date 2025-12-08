@extends('layout')

@section('title', 'Portfolio')

@section('content')


<!-- About Section -->
<section id="about" class="py-5" style="background: #0f1624; position: relative; overflow: hidden;">
    <!-- Background Effects -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-20 w-64 h-64 bg-cyan-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-cyan-300 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 animate-fade-in">
        <div class="grid lg:grid-cols-2 gap-16 items-center min-h-screen">
            <!-- Left Side -->
            <div class="animate-slide-up">
                <h1 class="p-2 text-2xl font-bold text-white mb-6" style="text-shadow: 0 0 10px #c7c7c7;">
                     I'm<br> <span class="p-2 text-5xl inline-block
                            overflow-hidden
                            whitespace-nowrap
                            border-r-2 border-[#00eaff] font-semibold typing-name">Peng Samnang</span>
                </h1>
                <p class="p-2 text-lg md:text-xl text-[#c7c7c7] leading-relaxed">
                    <span class="wave-letter" style="animation-delay:0s">F</span>
                    <span class="wave-letter" style="animation-delay:0.05s">u</span>
                    <span class="wave-letter" style="animation-delay:0.1s">l</span>
                    <span class="wave-letter" style="animation-delay:0.15s"> </span>
                    <span class="wave-letter" style="animation-delay:0.2s">l</span>
                    <span class="wave-letter" style="animation-delay:0.25s">- </span>
                    <span class="wave-letter" style="animation-delay:0.3s">S</span>
                    <span class="wave-letter" style="animation-delay:0.35s">t</span>
                    <span class="wave-letter" style="animation-delay:0.4s">a</span>
                    <span class="wave-letter" style="animation-delay:0.45s">c</span>
                    <span class="wave-letter" style="animation-delay:0.5s">k</span>
                    <span class="wave-letter" style="animation-delay:0.55s">-</span>
                    <span class="wave-letter" style="animation-delay:0.6s">D</span>
                    <span class="wave-letter" style="animation-delay:0.65s">e</span>
                    <span class="wave-letter" style="animation-delay:0.7s">v</span>
                    <span class="wave-letter" style="animation-delay:0.75s">e</span>
                    <span class="wave-letter" style="animation-delay:0.8s">l</span>
                    <span class="wave-letter" style="animation-delay:0.85s">o</span>
                    <span class="wave-letter" style="animation-delay:0.9s">p</span>
                    <span class="wave-letter" style="animation-delay:0.95s">e</span>
                    <span class="wave-letter" style="animation-delay:1s">r</span>

                    <!-- continue with your text ... -->
                </p>


                <!-- Skill Tags -->
                <div class="p-2 flex flex-wrap gap-4 mb-8">
                    <div class="px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-cyan-400/30 text-white font-medium transition-all duration-300 hover:bg-cyan-400/20 hover:shadow-lg hover:shadow-cyan-400/50 hover:scale-105 flex items-center justify-center" style="box-shadow: 0 0 10px rgba(0, 234, 255, 0.3);">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </div>
                    <div class="px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-cyan-400/30 text-white font-medium transition-all duration-300 hover:bg-cyan-400/20 hover:shadow-lg hover:shadow-cyan-400/50 hover:scale-105 flex items-center justify-center" style="box-shadow: 0 0 10px rgba(0, 234, 255, 0.3);">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </div>
                    <div class="px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-cyan-400/30 text-white font-medium transition-all duration-300 hover:bg-cyan-400/20 hover:shadow-lg hover:shadow-cyan-400/50 hover:scale-105 flex items-center justify-center" style="box-shadow: 0 0 10px rgba(0, 234, 255, 0.3);">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </div>
                  
                </div>

                <!-- Stats Cards -->
                <!-- <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl border border-white/10 transition-all duration-300 hover:bg-white/10 hover:border-cyan-400/50 hover:shadow-xl hover:shadow-cyan-400/20">
                        <div class="text-3xl font-bold text-cyan-400 mb-2">5+</div>
                        <div class="text-white font-medium">Years Experience</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl border border-white/10 transition-all duration-300 hover:bg-white/10 hover:border-cyan-400/50 hover:shadow-xl hover:shadow-cyan-400/20">
                        <div class="text-3xl font-bold text-cyan-400 mb-2">50+</div>
                        <div class="text-white font-medium">Projects Completed</div>
                    </div>
                </div> -->
            </div>

            <!-- Right Side -->
            <div class="animate-slide-up delay-2 relative">
                <!-- Circular Background Glow -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-80 h-80 rounded-full blur-xl opacity-30 animate-pulse" style="background: linear-gradient(135deg, #00eaff, #00b4d8);"></div>
                </div>

                <!-- Profile Image Container -->
                <div class="relative z-10 flex items-center justify-center">
                    <div class="relative w-80 h-80 group flex items-center justify-center">

                        <!-- OUTER GLOWING BORDER -->
                        <div class="absolute inset-0 rounded-full border-4 border-cyan-400
                            opacity-60 group-hover:opacity-90 transition-all duration-500
                            pointer-events-none"
                            style="box-shadow: 0 0 45px #00eaff, 0 0 90px #00eaff, 0 0 135px #00eaff;">
                        </div>

                        <!-- INNER GLOW RING -->
                        <div class="absolute inset-4 rounded-full border-2 border-cyan-300 opacity-40
                            pointer-events-none "
                            style="box-shadow: inset 0 0 30px rgba(0, 234, 255, 0.6), inset 0 0 60px rgba(0, 234, 255, 0.4);">
                        </div>

                        <!-- COSMIC PARTICLES -->
                        <div class="absolute inset-0 rounded-full pointer-events-none">
                            <div class="absolute top-2 left-8 w-1 h-1 bg-cyan-300 rounded-full animate-ping opacity-70"></div>
                            <div class="absolute bottom-4 right-6 w-1.5 h-1.5 bg-cyan-400 rounded-full animate-pulse opacity-60"></div>
                            <div class="absolute top-1/2 right-2 w-1 h-1 bg-cyan-200 rounded-full animate-bounce opacity-80"></div>
                        </div>

                        <!-- IMAGE ON TOP -->
                        <div class="relative  rounded-full overflow-hidden w-72 h-72 
                            group-hover:scale-105 transition-transform duration-500 z-20">
                            <img src="/image/profile.jpg"
                                class="w-71 h-71 object-cover group-hover:scale-110 transition-transform duration-500"
                                style="filter: brightness(1.15) contrast(1.1);">
                        </div>

                    </div>
                </div>


                <!-- Floating Particles -->
                <div class="absolute top-10 right-10 w-3 h-3 bg-cyan-400 rounded-full animate-bounce opacity-70" style="box-shadow: 0 0 15px #00eaff; animation-delay: 0s;"></div>
                <div class="absolute bottom-20 left-10 w-4 h-4 bg-cyan-300 rounded-full animate-pulse opacity-50" style="box-shadow: 0 0 20px #00eaff; animation-delay: 0.5s;"></div>
                <div class="absolute top-1/2 right-5 w-2 h-2 bg-cyan-500 rounded-full animate-ping opacity-60" style="box-shadow: 0 0 10px #00eaff; animation-delay: 1s;"></div>
                <div class="absolute bottom-10 right-1/4 w-3 h-3 bg-cyan-200 rounded-full animate-pulse opacity-40" style="box-shadow: 0 0 12px #00eaff; animation-delay: 1.5s;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-24 relative overflow-hidden" style="background: #0f1624; position: relative; overflow: hidden;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-cyan-400 to-blue-400 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0V8a2 2 0 01-2 2H8a2 2 0 01-2-2V6m8 0H8m0 0V4"></path>
                    </svg>
                    Experience
                </span>
            </div>
            <!-- <h2 class="text-5xl md:text-6xl font-bold text-white mb-6 animate-slide-up">
                💼 Experience
            </h2> -->
            <!-- <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-slide-up delay-1">
                A timeline of my career growth and key achievements in web development
            </p> -->
        </div>

        <div class="relative max-w-5xl mx-auto">
            <!-- Enhanced Timeline line -->
            <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-1  from-cyan-400 via-blue-500 to-purple-600 transform md:-translate-x-0.5 hidden md:block opacity-60"></div>
            <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-3 from-cyan-400/30 via-blue-500/30 to-purple-600/30 transform md:-translate-x-0.5 rounded-full hidden md:block shadow-lg" style="box-shadow: 0 0 20px rgba(0, 234, 255, 0.3);"></div>

            <!-- Experience items -->
            <div class="space-y-12">
                <!-- Experience 1 -->
                <div class="relative flex mr-3 items-start md:items-center animate-slide-up delay-1">
                    <div class="shrink-0 w-16 h-16 bg-linear-to-r from-cyan-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform hover:scale-110 transition-transform duration-300" style="box-shadow: 0 0 20px rgba(0, 234, 255, 0.5);">
                        2025
                    </div>
                    <div class="ml-8 md:ml-0 md:w-1/2 md:pr-12">
                        <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-linear-to-r from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1">Full-Stack Developer</h3>
                                    <!-- <p class="text-cyan-300 font-medium">TechCorp Solutions, San Francisco, CA</p> -->
                                    <span class="inline-block bg-cyan-500/20 text-cyan-300 px-2 py-1 rounded-full text-xs border border-cyan-500/30 mt-1">2025 - Present</span>
                                </div>
                            </div>
                            <p class="text-blue-100 mb-6 leading-relaxed">
                                Start Being a Full-Stack Developer, working on end-to-end solutions from frontend to backend.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-sm border border-cyan-500/30">Django</span>
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-500/30">React</span>
                                <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-500/30">MySQL</span>
                                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30">Tailwind CSS</span>
                                <span class="bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full text-sm border border-yellow-500/30">JavaScript</span>
                                <span class="bg-red-500/20 text-red-300 px-3 py-1 rounded-full text-sm border border-red-500/30">HTML/CSS</span>
                                <span class="bg-indigo-500/20 text-indigo-300 px-3 py-1 rounded-full text-sm border border-indigo-500/30">Neon</span>
                                <!-- <span class="bg-pink-500/20 text-pink-300 px-3 py-1 rounded-full text-sm border border-pink-500/30">Bootstrap</span> -->
                                <span class="bg-orange-500/20 text-orange-300 px-3 py-1 rounded-full text-sm border border-orange-500/30">Git</span>
                                <span class="bg-gray-500/20 text-gray-300 px-3 py-1 rounded-full text-sm border border-gray-500/30">GitHub</span>
                                <span class="bg-teal-500/20 text-teal-300 px-3 py-1 rounded-full text-sm border border-teal-500/30">Figma</span>
                                <!-- <span class="bg-violet-500/20 text-violet-300 px-3 py-1 rounded-full text-sm border border-violet-500/30">Laravel</span> -->
                                <!-- <span class="bg-emerald-500/20 text-emerald-300 px-3 py-1 rounded-full text-sm border border-emerald-500/30">PostgreSQL</span> -->
                                <span class="bg-sky-500/20 text-sky-300 px-3 py-1 rounded-full text-sm border border-sky-500/30">Vercel</span>
                                <span class="bg-rose-500/20 text-rose-300 px-3 py-1 rounded-full text-sm border border-rose-500/30">Cloudinary</span>
                                <span class="bg-fuchsia-500/20 text-fuchsia-300 px-3 py-1 rounded-full text-sm border border-fuchsia-500/30">Docker</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="relative flex ml-7 items-start md:items-center md:flex-row-reverse animate-slide-up delay-2">
                    <div class="shrink-0 w-16 h-16 bg-linear-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform hover:scale-110 transition-transform duration-300" style="box-shadow: 0 0 20px rgba(34, 197, 94, 0.5);">
                        2024
                    </div>
                    <div class="ml-8 md:ml-0 md:w-1/2 md:pl-12 md:text-right">
                        <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-end mb-4">
                                <div class="text-right">
                                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1">BackEnd Developer</h3>
                                    <!-- <p class="text-green-300 font-medium">WebDev Agency, Remote</p> -->
                                    <span class="inline-block bg-green-500/20 text-green-300 px-2 py-1 rounded-full text-xs border border-green-500/30 mt-1">2024 - 2025</span>
                                </div>
                                <div class="w-12 h-12 bg-linear-to-r from-green-400 to-blue-500 rounded-xl flex items-center justify-center ml-4 shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-blue-100 mb-6 leading-relaxed">
                                Start ed specializing in backend development, focusing on building robust APIs and server-side logic.
                            </p>
                            <div class="flex flex-wrap gap-2 justify-end">
                                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30">Vue.js</span>
                                <span class="bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full text-sm border border-yellow-500/30">Django</span>
                                <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-500/30">MySQL</span>
                                <span class="bg-red-500/20 text-red-300 px-3 py-1 rounded-full text-sm border border-red-500/30">API</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience 3 -->
                <div class="relative flex mr-3 items-start md:items-center animate-slide-up delay-3">
                    <div class="shrink-0 w-16 h-16 bg-linear-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform hover:scale-110 transition-transform duration-300" style="box-shadow: 0 0 20px rgba(168, 85, 247, 0.5);">
                        2023
                    </div>
                    <div class="ml-8 md:ml-0 md:w-1/2 md:pr-12">
                        <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-linear-to-r from-purple-400 to-pink-500 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1">FrontEnd Developer</h3>
                                    <!-- <p class="text-purple-300 font-medium">Digital Innovations, New York, NY</p> -->
                                    <span class="inline-block bg-purple-500/20 text-purple-300 px-2 py-1 rounded-full text-xs border border-purple-500/30 mt-1">2023 - 2024</span>
                                </div>
                            </div>
                            <p class="text-blue-100 mb-6 leading-relaxed">
                                Started my career as a Frontend Developer, focusing on building responsive and interactive user interfaces.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-500/30">JavaScript</span>
                                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30">React</span>
                                <span class="bg-orange-500/20 text-orange-300 px-3 py-1 rounded-full text-sm border border-orange-500/30">HTML/CSS</span>
                                <span class="bg-pink-500/20 text-pink-300 px-3 py-1 rounded-full text-sm border border-pink-500/30">Tailwind CSS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-24 relative overflow-hidden" style="background: #0f1624; position: relative; overflow: hidden;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Skills
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold bg-linear-to-r from-gray-900 via-blue-800 to-purple-800 bg-clip-text text-transparent mb-6 animate-slide-up">
                Technologies I Use
            </h2>
            <style>
                .marquee {
                    animation: marquee 30s linear infinite;
                }
                @keyframes marquee {
                    0% { transform: translateX(100%); }
                    100% { transform: translateX(-100%); }
                }

                .galaxy-bg {
                    background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.98) 50%, rgba(15, 23, 42, 1) 100%);
                    position: relative;
                    overflow: hidden;
                }

                .galaxy-bg::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-image:
                        radial-gradient(1px 1px at 20px 30px, rgba(56, 189, 248, 0.3), transparent),
                        radial-gradient(1px 1px at 40px 70px, rgba(56, 189, 248, 0.2), transparent),
                        radial-gradient(1px 1px at 90px 40px, rgba(147, 197, 253, 0.4), transparent),
                        radial-gradient(1px 1px at 130px 80px, rgba(147, 197, 253, 0.3), transparent),
                        radial-gradient(1px 1px at 160px 30px, rgba(56, 189, 248, 0.2), transparent);
                    background-repeat: repeat;
                    background-size: 250px 120px;
                    animation: twinkle 6s ease-in-out infinite alternate;
                    opacity: 0.4;
                }

                .galaxy-bg::after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background:
                        radial-gradient(circle at 20% 80%, rgba(56, 189, 248, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(147, 197, 253, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(99, 102, 241, 0.08) 0%, transparent 50%);
                    animation: nebula 12s ease-in-out infinite alternate;
                }

                @keyframes twinkle {
                    0% { opacity: 0.3; }
                    100% { opacity: 1; }
                }

                @keyframes nebula {
                    0% { transform: scale(1) rotate(0deg); }
                    100% { transform: scale(1.1) rotate(5deg); }
                }

                .cosmic-glow {
                    filter: drop-shadow(0 0 8px rgba(147, 197, 253, 0.4))
                           drop-shadow(0 0 16px rgba(100, 149, 237, 0.2))
                           drop-shadow(0 0 24px rgba(65, 105, 225, 0.1));
                    transition: filter 0.3s ease;
                }

                .cosmic-glow:hover {
                    filter: drop-shadow(0 0 12px rgba(147, 197, 253, 0.6))
                           drop-shadow(0 0 24px rgba(100, 149, 237, 0.3))
                           drop-shadow(0 0 36px rgba(65, 105, 225, 0.2));
                }

                .marquee-paused {
                    animation-play-state: paused;
                }
            </style>
            <!-- <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-slide-up delay-1">
                A comprehensive toolkit of modern technologies and frameworks I leverage to build exceptional digital experiences
            </p> -->
        </div>

        <div class="relative">
            <!-- Background Effects -->
            <!-- <div class="absolute inset-0 opacity-20">
                <div class="absolute top-10 left-10 w-32 h-32 bg-cyan-400 rounded-full blur-2xl animate-pulse"></div>
                <div class="absolute bottom-10 right-10 w-40 h-40 bg-purple-400 rounded-full blur-2xl animate-pulse delay-1000"></div>
            </div> -->
            <div class="relative z-10 overflow-hidden max-w-5xl mx-auto">
                <div class="flex flex-nowrap gap-10 marquee">
                    <!-- HTML5  -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">HTML5 - Expert</span>
                        </div>
                    </div>
                    <!-- CSS3 -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">CSS3 - Expert</span>
                        </div>
                    </div>
                    <!-- JavaScript (ES6+) -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">JavaScript - Advanced</span>
                        </div>
                    </div>
                    <!-- React & Vue.js -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">React & Vue.js - Advanced</span>
                        </div>
                    </div>
                    <!-- Tailwind CSS -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.simpleicons.org/tailwindcss/white" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">Tailwind CSS - Expert</span>
                        </div>
                    </div>
                    <!-- PHP  -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">PHP - Expert</span>
                        </div>
                    </div>
                    <!-- Python -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">Python - Advanced</span>
                        </div>
                    </div>
                    <!-- Node.js -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">Node.js - Advanced</span>
                        </div>
                    </div>
                    <!-- MySQL -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">MySQL - Expert</span>
                        </div>
                    </div>
                    <!-- REST APIs -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">REST APIs - Expert</span>
                        </div>
                    </div>
                    <!-- Git & GitHub -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">Git & GitHub - Expert</span>
                        </div>
                    </div>
                    <!-- Docker -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">Docker - Advanced</span>
                        </div>
                    </div>
                    <!-- Figma & Adobe XD -->
                    <div class="group relative w-16 h-16 flex items-center justify-center hover:scale-110 transition-all duration-500 ease-out cursor-pointer">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" class="w-12 h-12 cosmic-glow">
                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-gray-900/95 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                            <span class="font-medium">Figma - Expert</span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const marqueeElement = document.querySelector('.marquee');
    let isPaused = false;

    // Add click event listeners to all skill icons
    document.querySelectorAll('.marquee > div').forEach(icon => {
        icon.addEventListener('click', function(e) {
            e.preventDefault();
            if (isPaused) {
                marqueeElement.classList.remove('marquee-paused');
                isPaused = false;
            } else {
                marqueeElement.classList.add('marquee-paused');
                isPaused = true;
            }
        });
    });
});
</script>

<!-- Projects Section -->
<section id="projects" class="py-24 relative overflow-hidden" style="background: #0f1624; position: relative; overflow: hidden;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative galaxy-bg py-16">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-emerald-600 to-teal-600 text-white px-4 py-2 rounded-full text-sm font-medium">
                    🚀 Projects
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold bg-linear-to-r from-gray-900 via-blue-800 to-purple-800 bg-clip-text text-transparent mb-6 animate-slide-up">
                Featured Work
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-slide-up delay-1">
                A showcase of my recent projects that demonstrate my skills in full-stack development and modern web technologies
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 animate-slide-up delay-1 transform hover:-translate-y-4">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="E-Commerce Platform"
                        class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">Featured</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-linear-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mr-3">
                            <span class="text-white text-lg">🛒</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">E-Commerce Platform</h3>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Full-stack e-commerce solution with payment processing, inventory management, and admin dashboard.
                        Built with Laravel backend and React frontend for optimal performance.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                        <span class="bg-cyan-100 text-cyan-800 px-3 py-1 rounded-full text-sm">React</span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">MySQL</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Stripe</span>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center text-emerald-600 hover:text-emerald-700 font-medium group">
                            <span>Live Demo</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center text-gray-600 hover:text-gray-800 font-medium group">
                            <span>GitHub</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 animate-slide-up delay-2 transform hover:-translate-y-4">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Task Management App"
                        class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-medium">Real-time</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-linear-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center mr-3">
                            <span class="text-white text-lg">📋</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Task Management App</h3>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Collaborative task management platform with real-time updates, team collaboration features,
                        and advanced project tracking capabilities.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Vue.js</span>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">Node.js</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Socket.io</span>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">MongoDB</span>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center text-emerald-600 hover:text-emerald-700 font-medium group">
                            <span>Live Demo</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center text-gray-600 hover:text-gray-800 font-medium group">
                            <span>GitHub</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 animate-slide-up delay-3 transform hover:-translate-y-4">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" alt="Portfolio Website"
                        class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-medium">Personal</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-linear-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-3">
                            <span class="text-white text-lg">🎨</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Portfolio Website</h3>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Modern, responsive portfolio website with smooth animations, dark mode support,
                        and optimized performance. Built with Laravel and styled with Tailwind CSS.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                        <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                        <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">JavaScript</span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Vite</span>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center text-emerald-600 hover:text-emerald-700 font-medium group">
                            <span>Live Demo</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center text-gray-600 hover:text-gray-800 font-medium group">
                            <span>GitHub</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-12 animate-slide-up delay-1">
            <a href="/projects" class="inline-flex items-center bg-linear-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <span>View All Projects</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 relative overflow-hidden" style="background: #0f1624; position: relative; overflow: hidden;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-cyan-400 to-blue-400 text-white px-4 py-2 rounded-full text-sm font-medium">
                    📬 Contact
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-6 animate-slide-up">
                Let's Work Together
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-slide-up delay-1">
                Have a project in mind? I'd love to hear about it. Let's create something amazing together.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div class="animate-slide-up delay-2">
                <div class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl border border-white/20">
                    <h3 class="text-3xl font-bold text-white mb-8">Get In Touch</h3>

                    <div class="space-y-6">
                        <div class="flex items-center p-4 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300">
                            <div class="w-14 h-14 bg-linear-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Email</h4>
                                <p class="text-blue-200">john.doe@example.com</p>
                            </div>
                        </div>

                        <div class="flex items-center p-4 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300">
                            <div class="w-14 h-14 bg-linear-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Phone</h4>
                                <p class="text-blue-200">+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <div class="flex items-center p-4 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300">
                            <div class="w-14 h-14 bg-linear-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Location</h4>
                                <p class="text-blue-200">San Francisco, CA</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-8">
                        <h4 class="text-xl font-semibold text-white mb-4">Follow Me</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.374 0 0 5.373 0 12 0 17.302 3.438 21.8 8.207 23.387c.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="animate-slide-up delay-3">
                <form class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl border border-white/20">
                    <h3 class="text-3xl font-bold text-white mb-8">Send a Message</h3>

                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-blue-200 mb-2 font-medium">Name</label>
                            <input type="text" id="name" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent backdrop-blur-sm" placeholder="Your name">
                        </div>

                        <div>
                            <label for="email" class="block text-blue-200 mb-2 font-medium">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent backdrop-blur-sm" placeholder="your.email@example.com">
                        </div>

                        <div>
                            <label for="subject" class="block text-blue-200 mb-2 font-medium">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent backdrop-blur-sm" placeholder="Project inquiry">
                        </div>

                        <div>
                            <label for="message" class="block text-blue-200 mb-2 font-medium">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent backdrop-blur-sm resize-none" placeholder="Tell me about your project..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-linear-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white py-4 px-6 rounded-2xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>