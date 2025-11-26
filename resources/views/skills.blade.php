@extends('layout')

@section('title', 'Skills - Portfolio')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white mb-4 animate-slide-up">Skills & Technologies</h1>
            <p class="text-xl text-blue-200 animate-slide-up delay-1">The tools and technologies I use to bring ideas to life</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 animate-slide-up delay-1">
                <h2 class="text-xl font-semibold mb-4 text-blue-600">Frontend</h2>
                <ul class="space-y-3">
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">HTML5 & CSS3</span>
                        <div class="w-24 bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">JavaScript (ES6+)</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-cyan-400 h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">React & Vue.js</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-cyan-400 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">Tailwind CSS</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-cyan-400 h-2 rounded-full" style="width: 88%"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 animate-slide-up delay-2">
                <h2 class="text-xl font-semibold mb-4 text-green-300">Backend</h2>
                <ul class="space-y-3">
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">PHP & Laravel</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-green-400 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">Node.js</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-green-400 h-2 rounded-full" style="width: 80%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">MySQL & PostgreSQL</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-green-400 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">REST APIs</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-green-400 h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 animate-slide-up delay-3">
                <h2 class="text-xl font-semibold mb-4 text-purple-300">Tools & Others</h2>
                <ul class="space-y-3">
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">Git & GitHub</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-purple-400 h-2 rounded-full" style="width: 95%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">Docker</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-purple-400 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">AWS & Heroku</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-purple-400 h-2 rounded-full" style="width: 70%"></div>
                        </div>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-blue-200">Figma & Adobe XD</span>
                        <div class="w-24 bg-white/20 rounded-full h-2">
                            <div class="bg-purple-400 h-2 rounded-full" style="width: 80%"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection