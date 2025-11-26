@extends('layout')

@section('title', 'Experience - Portfolio')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white mb-4 animate-slide-up">Work Experience</h1>
            <p class="text-xl text-blue-200 animate-slide-up delay-1">My professional journey and career highlights</p>
        </div>

        <div class="relative">
            <!-- Timeline line -->
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-blue-200"></div>

            <!-- Experience items -->
            <div class="space-y-12">
                <!-- Experience 1 -->
                <div class="relative flex items-start animate-slide-up delay-1">
                    <div class="shrink-0 w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        2023
                    </div>
                    <div class="ml-8 bg-white/10 backdrop-blur-sm p-6 rounded-lg border  border-l-4 border-blue-500">
                        <h3 class="text-xl font-semibold text-white mb-2">Senior Full-Stack Developer</h3>
                        <p class="text-blue-400 font-medium mb-2">TechCorp Solutions, San Francisco, CA</p>
                        <p class="text-blue-200 mb-4">Led development of enterprise-level web applications using Laravel and React. Managed a team of 4 developers and implemented agile methodologies.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Laravel</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">React</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">MySQL</span>
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm">AWS</span>
                        </div>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="relative flex items-start animate-slide-up delay-2">
                    <div class="shrink-0 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        2021
                    </div>
                    <div class="ml-8 bg-white/10 backdrop-blur-sm p-6 rounded-lg border  border-l-4 border-green-500">
                        <h3 class="text-xl font-semibold text-white mb-2">Full-Stack Developer</h3>
                        <p class="text-green-400 font-medium mb-2">WebDev Agency, Remote</p>
                        <p class="text-blue-200 mb-4">Developed custom web solutions for clients ranging from startups to Fortune 500 companies. Specialized in e-commerce platforms and content management systems.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Vue.js</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Node.js</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">MongoDB</span>
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-sm">Docker</span>
                        </div>
                    </div>
                </div>

                <!-- Experience 3 -->
                <div class="relative flex items-start animate-slide-up delay-3">
                    <div class="shrink-0 w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        2019
                    </div>
                    <div class="ml-8 bg-white/10 backdrop-blur-sm p-6 rounded-lg border  border-l-4 border-purple-500">
                        <h3 class="text-xl font-semibold text-white mb-2">Junior Web Developer</h3>
                        <p class="text-purple-400 font-medium mb-2">Digital Innovations, New York, NY</p>
                        <p class="text-blue-200 mb-4">Started my professional journey building responsive websites and learning modern web technologies. Contributed to 15+ client projects and gained expertise in frontend frameworks.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">JavaScript</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">PHP</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">WordPress</span>
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm">jQuery</span>
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="relative flex items-start animate-slide-up delay-1">
                    <div class="shrink-0 w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        2018
                    </div>
                    <div class="ml-8 bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-l-4 border-orange-500">
                        <h3 class="text-xl font-semibold text-white mb-2">Bachelor of Computer Science</h3>
                        <p class="text-orange-400 font-medium mb-2">University of Technology, CA</p>
                        <p class="text-blue-200 mb-4">Graduated with honors, specializing in web development and software engineering. Completed capstone project on scalable web architectures.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm">Computer Science</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Web Development</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Software Engineering</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Certifications -->
        <div class="mt-20">
            <h2 class="text-3xl font-bold text-white mb-8 text-center animate-slide-up">Certifications</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 animate-slide-up delay-1">
                    <h3 class="text-lg font-semibold text-white mb-2">AWS Certified Developer</h3>
                    <p class="text-blue-200 mb-2">Amazon Web Services</p>
                    <p class="text-sm text-blue-300">2023 - Present</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 animate-slide-up delay-2">
                    <h3 class="text-lg font-semibold text-white mb-2">Laravel Certified Developer</h3>
                    <p class="text-blue-200 mb-2">Laravel</p>
                    <p class="text-sm text-blue-300">2022 - Present</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 animate-slide-up delay-3">
                    <h3 class="text-lg font-semibold text-white mb-2">React Developer Certification</h3>
                    <p class="text-blue-200 mb-2">Meta (Facebook)</p>
                    <p class="text-sm text-blue-300">2021 - Present</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection