@extends('layout')

@section('title', 'Portfolio')

@section('content')


<!-- About Section -->
<section id="about" class="py-20 relative overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Profile Image -->
                <div class="animate-slide-up delay-1">
                    <div class="relative">
                        <div class="absolute -inset-4  from-cyan-400 via-blue-500 to-indigo-600 rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
                        <img src="{{ asset('image/profile.jpg') }}" alt="Peng Samnang "
                             class="relative w-60 h-60 mx-auto rounded-full border-2 border-white shadow-2xl shadow-blue-500/30 transform hover:scale-105 transition-all duration-500 object-cover">
                        <div class="absolute bottom-34 right-15 bg-linear-to-r from-cyan-400 to-blue-500 text-white p-4 rounded-2xl shadow-xl animate-bounce">
                            <div class="text-2xl font-bold">5+</div>
                            <div class="text-sm font-medium">Years</div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="animate-slide-up delay-2 space-y-8">
                    <!-- Name and Title -->
                    <div class="text-left">
                        <h3 class="text-4xl md:text-5xl font-bold text-white mb-3">
                            Peng Samnang
                        </h3>
                        <p class="text-xl md:text-2xl text-blue-200 font-medium mb-6">
                            Full-Stack Developer
                        </p>
                    </div>

                    <!-- Description -->
                    <div class="">
                        <h4 class="text-2xl font-semibold text-white mb-4 flex items-center">
                            <span class="w-10 h-10 bg-linear-to-r from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center mr-3">
                                <span class="text-white text-lg">💡</span>
                            </span>
                            My Story
                        </h4>
                        <p class="text-blue-100 leading-relaxed text-lg">
                            I'm a passionate full-stack developer with over 5 years of experience creating exceptional digital experiences.
                            My journey began with curiosity about how websites work, and it evolved into a deep love for crafting
                            beautiful, functional applications that solve real-world problems.
                        </p>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="text-center p-4 bg-white/10 rounded-2xl backdrop-blur-sm border border-white/20">
                            <div class="text-3xl font-bold text-cyan-300">50+</div>
                            <div class="text-sm text-blue-200 font-medium">Projects</div>
                        </div>
                        <div class="text-center p-4 bg-white/10 rounded-2xl backdrop-blur-sm border border-white/20">
                            <div class="text-3xl font-bold text-blue-300">30+</div>
                            <div class="text-sm text-blue-200 font-medium">Clients</div>
                        </div>
                        <div class="text-center p-4 bg-white/10 rounded-2xl backdrop-blur-sm border border-white/20">
                            <div class="text-3xl font-bold text-indigo-300">5+</div>
                            <div class="text-sm text-blue-200 font-medium">Years</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-24 relative overflow-hidden" style="background: transparent;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-cyan-400 to-blue-400 text-white px-4 py-2 rounded-full text-sm font-medium">
                    💼 Experience
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-6 animate-slide-up">
                Professional Journey
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-slide-up delay-1">
                A timeline of my career growth and key achievements in web development
            </p>
        </div>

        <div class="relative max-w-5xl mx-auto">
            <!-- Enhanced Timeline line -->
            <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-1from-cyan-400 via-blue-500 to-purple-600 transform md:-translate-x-0.5 hidden md:block"style="background: linear-gradient(to bottom right, rgb(17 24 39), rgb(30 58 138), rgb(88 28 135));"></div>
            <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-3 from-cyan-400/20 via-blue-500/20 to-purple-600/20 transform md:-translate-x-0.5 rounded-full hidden md:block"style="background: linear-gradient(to bottom right, rgb(17 24 39), rgb(30 58 138), rgb(88 28 135));"></div>

            <!-- Experience items -->
            <div class="space-y-12">
                <!-- Experience 1 -->
                <div class="relative flex items-start md:items-center animate-slide-up delay-1">
                    <div class="shrink-0 w-16 h-16 bg-linear-to-r from-cyan-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform hover:scale-110 transition-transform duration-300">
                        2023
                    </div>
                    <div class="ml-8 md:ml-0 md:w-1/2 md:pr-12">
                        <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-linear-to-r from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white text-xl">🚀</span>
                                </div>
                                <div>
                                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1">Senior Full-Stack Developer</h3>
                                    <p class="text-cyan-300 font-medium">TechCorp Solutions, San Francisco, CA</p>
                                </div>
                            </div>
                            <p class="text-blue-100 mb-6 leading-relaxed">
                                Led development of enterprise-level web applications using Laravel and React.
                                Managed a team of 4 developers and implemented agile methodologies for scalable solutions.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full text-sm border border-cyan-500/30">Laravel</span>
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-500/30">React</span>
                                <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-500/30">MySQL</span>
                                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30">AWS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="relative flex items-start md:items-center md:flex-row-reverse animate-slide-up delay-2">
                    <div class="shrink-0 w-16 h-16 bg-linear-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform hover:scale-110 transition-transform duration-300">
                        2021
                    </div>
                    <div class="ml-8 md:ml-0 md:w-1/2 md:pl-12 md:text-right">
                        <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300">
                            <div class="flex items-center justify-end mb-4">
                                <div>
                                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1">Full-Stack Developer</h3>
                                    <p class="text-green-300 font-medium">WebDev Agency, Remote</p>
                                </div>
                                <div class="w-12 h-12 bg-linear-to-r from-green-400 to-blue-500 rounded-xl flex items-center justify-center ml-4">
                                    <span class="text-white text-xl">💻</span>
                                </div>
                            </div>
                            <p class="text-blue-100 mb-6 leading-relaxed">
                                Developed custom web solutions for clients ranging from startups to Fortune 500 companies.
                                Specialized in e-commerce platforms and content management systems.
                            </p>
                            <div class="flex flex-wrap gap-2 justify-end">
                                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30">Vue.js</span>
                                <span class="bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full text-sm border border-yellow-500/30">Node.js</span>
                                <span class="bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-500/30">MongoDB</span>
                                <span class="bg-red-500/20 text-red-300 px-3 py-1 rounded-full text-sm border border-red-500/30">Docker</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience 3 -->
                <div class="relative flex items-start md:items-center animate-slide-up delay-3">
                    <div class="shrink-0 w-16 h-16 bg-linear-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg transform hover:scale-110 transition-transform duration-300">
                        2019
                    </div>
                    <div class="ml-8 md:ml-0 md:w-1/2 md:pr-12">
                        <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/10 hover:bg-white/15 transition-all duration-300">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-linear-to-r from-purple-400 to-pink-500 rounded-xl flex items-center justify-center mr-4">
                                    <span class="text-white text-xl">🌟</span>
                                </div>
                                <div>
                                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1">Junior Web Developer</h3>
                                    <p class="text-purple-300 font-medium">Digital Innovations, New York, NY</p>
                                </div>
                            </div>
                            <p class="text-blue-100 mb-6 leading-relaxed">
                                Started my professional journey building responsive websites and learning modern web technologies.
                                Contributed to 15+ client projects and gained expertise in frontend frameworks.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-500/30">JavaScript</span>
                                <span class="bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-sm border border-green-500/30">PHP</span>
                                <span class="bg-orange-500/20 text-orange-300 px-3 py-1 rounded-full text-sm border border-orange-500/30">WordPress</span>
                                <span class="bg-pink-500/20 text-pink-300 px-3 py-1 rounded-full text-sm border border-pink-500/30">jQuery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-24 relative overflow-hidden" style="background: transparent;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-20">
            <div class="inline-block mb-4">
                <span class="bg-linear-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium">
                    🛠️ Skills
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold bg-linear-to-r from-gray-900 via-blue-800 to-purple-800 bg-clip-text text-transparent mb-6 animate-slide-up">
                Technologies I Use
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-slide-up delay-1">
                A comprehensive toolkit of modern technologies and frameworks I leverage to build exceptional digital experiences
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Frontend Card -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl border border-white/50 hover:shadow-2xl hover:bg-white/90 transition-all duration-500 animate-slide-up delay-1 transform hover:-translate-y-2">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-linear-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">💻</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Frontend</h3>
                    <p class="text-gray-600">Creating beautiful user interfaces</p>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-blue-50 to-blue-100 rounded-xl">
                        <span class="font-medium text-gray-800">HTML5 & CSS3</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-cyan-50 to-cyan-100 rounded-xl">
                        <span class="font-medium text-gray-800">JavaScript (ES6+)</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-indigo-50 to-indigo-100 rounded-xl">
                        <span class="font-medium text-gray-800">React & Vue.js</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-purple-50 to-purple-100 rounded-xl">
                        <span class="font-medium text-gray-800">Tailwind CSS</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend Card -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl border border-white/50 hover:shadow-2xl hover:bg-white/90 transition-all duration-500 animate-slide-up delay-2 transform hover:-translate-y-2">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-linear-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">⚙️</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Backend</h3>
                    <p class="text-gray-600">Building robust server-side solutions</p>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-green-50 to-green-100 rounded-xl">
                        <span class="font-medium text-gray-800">PHP & Laravel</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-emerald-50 to-emerald-100 rounded-xl">
                        <span class="font-medium text-gray-800">Node.js</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-teal-50 to-teal-100 rounded-xl">
                        <span class="font-medium text-gray-800">MySQL & PostgreSQL</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-teal-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-teal-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-teal-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-teal-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-teal-400 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-cyan-50 to-cyan-100 rounded-xl">
                        <span class="font-medium text-gray-800">REST APIs</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools Card -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl border border-white/50 hover:shadow-2xl hover:bg-white/90 transition-all duration-500 animate-slide-up delay-3 transform hover:-translate-y-2">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-linear-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white text-2xl">🛠️</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Tools & DevOps</h3>
                    <p class="text-gray-600">Essential development workflow tools</p>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-purple-50 to-purple-100 rounded-xl">
                        <span class="font-medium text-gray-800">Git & GitHub</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-pink-50 to-pink-100 rounded-xl">
                        <span class="font-medium text-gray-800">Docker</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-indigo-50 to-indigo-100 rounded-xl">
                        <span class="font-medium text-gray-800">AWS & Heroku</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-linear-to-r from-orange-50 to-orange-100 rounded-xl">
                        <span class="font-medium text-gray-800">Figma & Adobe XD</span>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                            <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-24 relative overflow-hidden" style="background: transparent;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
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
<section id="contact" class="py-16 relative overflow-hidden" style="background: transparent;">

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
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.374 0 0 5.373 0 12 0 17.302 3.438 21.8 8.207 23.387c.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
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

    
