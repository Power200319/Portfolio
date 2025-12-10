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
    <!-- Background Effects -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-20 w-64 h-64 bg-green-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-400 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-cyan-400 rounded-full blur-3xl animate-pulse delay-500"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute top-10 right-10 w-3 h-3 bg-green-400 rounded-full animate-bounce opacity-70" style="box-shadow: 0 0 15px #00ff88; animation-delay: 0s;"></div>
    <div class="absolute bottom-20 left-10 w-4 h-4 bg-blue-400 rounded-full animate-pulse opacity-50" style="box-shadow: 0 0 20px #3b82f6; animation-delay: 0.5s;"></div>
    <div class="absolute top-1/2 right-5 w-2 h-2 bg-cyan-400 rounded-full animate-ping opacity-60" style="box-shadow: 0 0 10px #00eaff; animation-delay: 1s;"></div>
    <div class="absolute bottom-10 right-1/4 w-3 h-3 bg-green-300 rounded-full animate-pulse opacity-40" style="box-shadow: 0 0 12px #00ff88; animation-delay: 1.5s;"></div>
    <div class="absolute top-20 left-1/4 w-2 h-2 bg-blue-300 rounded-full animate-bounce opacity-50" style="box-shadow: 0 0 8px #3b82f6; animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-green-400 to-blue-500 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center shadow-lg" style="box-shadow: 0 0 20px rgba(34, 197, 94, 0.5);">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Projects
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold bg-linear-to-r from-gray-900 via-green-800 to-blue-800 bg-clip-text text-transparent mb-6 animate-slide-up">
                Featured Projects
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-slide-up delay-1">
                A showcase of my recent work, from websites to management systems
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Swimming Course Website -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 group">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-linear-to-r from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1">Swimming Course Website</h3>
                        <span class="inline-block bg-cyan-500/20 text-cyan-300 px-2 py-1 rounded-full text-xs border border-cyan-500/30">Website</span>
                    </div>
                </div>
                <p class="text-blue-100 mb-6 leading-relaxed">
                    A comprehensive website for swimming courses, featuring course registration, instructor profiles, and class scheduling.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-sm border border-cyan-500/30">HTML</span>
                    <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-500/30">CSS</span>
                    <span class="bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full text-sm border border-yellow-500/30">JavaScript</span>
                    <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30">React</span>
                    <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-500/30">Tailwind CSS</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-green-400 font-medium">Completed</span>
                    <button class="bg-cyan-500/20 hover:bg-cyan-500/30 text-cyan-300 px-4 py-2 rounded-full text-sm border border-cyan-500/30 transition-colors duration-300">
                        View Project
                    </button>
                </div>
            </div>

            <!-- Web Recommendation Tour Booking -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 hover:border-green-400/50 hover:shadow-xl hover:shadow-green-400/20 transition-all duration-500 transform hover:scale-105 group animate-slide-up delay-2" style="box-shadow: 0 0 20px rgba(34, 197, 94, 0.1);">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-linear-to-r from-green-400 to-blue-500 rounded-xl flex items-center justify-center mr-4 shadow-lg" style="box-shadow: 0 0 15px rgba(34, 197, 94, 0.5);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-green-300 transition-colors duration-300">Web Recommendation Tour Booking</h3>
                        <span class="inline-block bg-green-500/20 text-green-300 px-2 py-1 rounded-full text-xs border border-green-500/30">Website</span>
                    </div>
                </div>
                <p class="text-blue-100 mb-6 leading-relaxed">
                    An intelligent tour booking platform with personalized recommendations, featuring AI-powered suggestions and seamless booking experience.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30 hover:bg-green-500/30 transition-colors duration-300">React</span>
                    <span class="bg-red-500/20 text-red-300 px-3 py-1 rounded-full text-sm border border-red-500/30 hover:bg-red-500/30 transition-colors duration-300">Tailwind CSS</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-green-400 font-medium flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Completed
                    </span>
                    <a href="#" class="bg-green-500/20 hover:bg-green-500/30 text-green-300 px-4 py-2 rounded-full text-sm border border-green-500/30 transition-all duration-300 hover:shadow-lg hover:shadow-green-400/50 hover:scale-105 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        View Project
                    </a>
                </div>
            </div>

            <!-- Logistic Delivery System -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 hover:border-purple-400/50 hover:shadow-xl hover:shadow-purple-400/20 transition-all duration-500 transform hover:scale-105 group animate-slide-up delay-3" style="box-shadow: 0 0 20px rgba(168, 85, 247, 0.1);">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-linear-to-r from-purple-400 to-pink-500 rounded-xl flex items-center justify-center mr-4 shadow-lg" style="box-shadow: 0 0 15px rgba(168, 85, 247, 0.5);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-purple-300 transition-colors duration-300">Logistic Delivery System</h3>
                        <span class="inline-block bg-purple-500/20 text-purple-300 px-2 py-1 rounded-full text-xs border border-purple-500/30">System</span>
                    </div>
                </div>
                <p class="text-blue-100 mb-6 leading-relaxed">
                    A comprehensive logistics management system for tracking deliveries, managing inventory, and optimizing routes for efficient operations.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-500/30 hover:bg-purple-500/30 transition-colors duration-300">Python</span>
                    <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-500/30 hover:bg-blue-500/30 transition-colors duration-300">Django</span>
                    <span class="bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full text-sm border border-yellow-500/30 hover:bg-yellow-500/30 transition-colors duration-300">MySQL</span>
                    <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30 hover:bg-green-500/30 transition-colors duration-300">Vue.js</span>
                    <span class="bg-red-500/20 text-red-300 px-3 py-1 rounded-full text-sm border border-red-500/30 hover:bg-red-500/30 transition-colors duration-300">Tailwind CSS</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-green-400 font-medium flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Completed
                    </span>
                    <a href="#" class="bg-purple-500/20 hover:bg-purple-500/30 text-purple-300 px-4 py-2 rounded-full text-sm border border-purple-500/30 transition-all duration-300 hover:shadow-lg hover:shadow-purple-400/50 hover:scale-105 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        View Project
                    </a>
                </div>
            </div>

            <!-- University Management System -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 hover:border-orange-400/50 hover:shadow-xl hover:shadow-orange-400/20 transition-all duration-500 transform hover:scale-105 group animate-slide-up delay-4" style="box-shadow: 0 0 20px rgba(249, 115, 22, 0.1);">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-linear-to-r from-orange-400 to-red-500 rounded-xl flex items-center justify-center mr-4 shadow-lg" style="box-shadow: 0 0 15px rgba(249, 115, 22, 0.5);">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-orange-300 transition-colors duration-300">University Management System</h3>
                        <span class="inline-block bg-orange-500/20 text-orange-300 px-2 py-1 rounded-full text-xs border border-orange-500/30">System</span>
                    </div>
                </div>
                <p class="text-blue-100 mb-6 leading-relaxed">
                    A complete university management platform handling student enrollment, course management, grades, and administrative operations.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="bg-orange-500/20 text-orange-300 px-3 py-1 rounded-full text-sm border border-orange-500/30 hover:bg-orange-500/30 transition-colors duration-300">Python</span>
                    <span class="bg-red-500/20 text-red-300 px-3 py-1 rounded-full text-sm border border-red-500/30 hover:bg-red-500/30 transition-colors duration-300">Django</span>
                    <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-500/30 hover:bg-purple-500/30 transition-colors duration-300">MySQL</span>
                    <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-500/30 hover:bg-blue-500/30 transition-colors duration-300">Vue.js</span>
                    <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30 hover:bg-green-500/30 transition-colors duration-300">Tailwind CSS</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-yellow-400 font-medium flex items-center">
                        <svg class="w-4 h-4 mr-1 animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25"></circle>
                            <path fill="currentColor" class="opacity-75" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Ongoing
                    </span>
                    <a href="#" class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-300 px-4 py-2 rounded-full text-sm border border-orange-500/30 transition-all duration-300 hover:shadow-lg hover:shadow-orange-400/50 hover:scale-105 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        View Project
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24 relative overflow-hidden" style="background: #0f1624; position: relative; overflow: hidden;">
    <!-- Background Effects -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-20 w-64 h-64 bg-cyan-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-cyan-300 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute top-10 right-10 w-3 h-3 bg-cyan-400 rounded-full animate-bounce opacity-70" style="box-shadow: 0 0 15px #00eaff; animation-delay: 0s;"></div>
    <div class="absolute bottom-20 left-10 w-4 h-4 bg-cyan-300 rounded-full animate-pulse opacity-50" style="box-shadow: 0 0 20px #00eaff; animation-delay: 0.5s;"></div>
    <div class="absolute top-1/2 right-5 w-2 h-2 bg-cyan-500 rounded-full animate-ping opacity-60" style="box-shadow: 0 0 10px #00eaff; animation-delay: 1s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-cyan-400 to-blue-400 text-white px-4 py-2 rounded-full text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Contact
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-6 animate-slide-up">
                Let's Connect
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-slide-up delay-1">
                Feel free to reach out for collaborations, opportunities, or just to say hello!
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <!-- Facebook -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 group animate-slide-up delay-1">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-linear-to-r from-blue-600 to-blue-500 rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300" style="box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Facebook</h3>
                    <p class="text-blue-100 mb-4">Peng Samnang</p>
                    <a href="https://www.facebook.com/share/1Gp6Utgfjn/?mibextid=wwXIfr" target="_blank" class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-300 px-6 py-3 rounded-full text-sm border border-blue-500/30 transition-all duration-300 hover:shadow-lg hover:shadow-blue-400/50 hover:scale-105 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        Visit Profile
                    </a>
                </div>
            </div>

            <!-- LinkedIn -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 group animate-slide-up delay-2">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-linear-to-r from-blue-700 to-blue-600 rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300" style="box-shadow: 0 0 20px rgba(37, 99, 235, 0.5);">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">LinkedIn</h3>
                    <p class="text-blue-100 mb-4">Peng Samnang</p>
                    <a href="http://linkedin.com/in/peng-samnang-740363317" target="_blank" class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-300 px-6 py-3 rounded-full text-sm border border-blue-500/30 transition-all duration-300 hover:shadow-lg hover:shadow-blue-400/50 hover:scale-105 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        Visit Profile
                    </a>
                </div>
            </div>

            <!-- Telegram -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 group animate-slide-up delay-3">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-linear-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300" style="box-shadow: 0 0 20px rgba(6, 182, 212, 0.5);">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-1.447-1.21-1.44-2.075.01-.84.544-1.07.764-1.105.5-.046 1.17-.208 1.17-.208s.288-.14.444-.21c-.284-.09-.56-.293-.56-.293s-.14-.054-.302-.08c-.563-.102-1.165-.208-2.724-.375C7.603 10.085 7.1 9.74 7.1 9.74s-.102-.05-.13-.07c-.286-.157-.401-.408-.401-.408s-.169-.193-.271-.282c-.534-.315-1.01-.573-1.01-.573-.263-.158-.526-.316-.526-.316l-.002-.002s-.169-.193-.271-.282c-.534-.315-1.01-.573-1.01-.573-.263-.158-.526-.316-.526-.316l-.002-.002.669 2.382c.293.105.623.23.996.346.754.231 1.614.457 2.437.574.037.006.074.01.11.01.218 0 .406-.041.555-.094.06-.02.12-.045.18-.072.006 0 .01-.003.016-.003.552-.234 1.037-.532 1.037-.532s.288-.14.444-.21c-.284-.09-.56-.293-.56-.293s-.14-.054-.302-.08c-.563-.102-1.165-.208-2.724-.375-.944-.132-1.665-.258-1.665-.258s-.102-.05-.13-.07c-.286-.157-.401-.408-.401-.408s-.169-.193-.271-.282c-.534-.315-1.01-.573-1.01-.573-.263-.158-.526-.316-.526-.316l-.002-.002s-.169-.193-.271-.282c-.534-.315-1.01-.573-1.01-.573-.263-.158-.526-.316-.526-.316l-.002-.002l.669 2.382c.293.105.623.23.996.346.754.231 1.614.457 2.437.574.037.006.074.01.11.01.218 0 .406-.041.555-.094.06-.02.12-.045.18-.072.006 0 .01-.003.016-.003.552-.234 1.037-.532 1.037-.532s.288-.14.444-.21c-.284-.09-.56-.293-.56-.293s-.14-.054-.302-.08c-.563-.102-1.165-.208-2.724-.375-.944-.132-1.665-.258-1.665-.258s-.102-.05-.13-.07c-.286-.157-.401-.408-.401-.408s-.169-.193-.271-.282c-.534-.315-1.01-.573-1.01-.573-.263-.158-.526-.316-.526-.316l-.002-.002z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Telegram</h3>
                    <p class="text-blue-100 mb-2">Peng Samnang</p>
                    <p class="text-cyan-300 font-medium mb-4">+855 96 348 8464</p>
                    <p class="text-cyan-300 font-medium mb-4">@pengsamnang</p>
                    <a href="https://t.me/pengsamnang" target="_blank" class="bg-cyan-500/20 hover:bg-cyan-500/30 text-cyan-300 px-6 py-3 rounded-full text-sm border border-cyan-500/30 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-400/50 hover:scale-105 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        Send Message
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>