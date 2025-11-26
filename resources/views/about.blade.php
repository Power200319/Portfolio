@extends('layout')

@section('title', 'About - Portfolio')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white mb-4 animate-slide-up">About Me</h1>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto animate-slide-up delay-1">I'm a passionate web developer with 5+ years of experience creating digital solutions. I love turning complex problems into simple, beautiful designs.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-slide-up delay-2">
                <img src="https://via.placeholder.com/500x400" alt="Profile" class="rounded-lg shadow-lg">
            </div>
            <div class="animate-slide-up delay-3">
                <h2 class="text-2xl font-semibold mb-4 text-white">My Journey</h2>
                <p class="text-blue-200 mb-4">Started with HTML and CSS, fell in love with JavaScript frameworks. Now specializing in full-stack development with Laravel and React.</p>
                <p class="text-blue-200 mb-6">When I'm not coding, you'll find me hiking, reading tech blogs, or experimenting with new technologies.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20">
                        <h3 class="font-semibold text-white">Experience</h3>
                        <p class="text-blue-200">5+ Years</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20">
                        <h3 class="font-semibold text-white">Projects</h3>
                        <p class="text-blue-200">50+ Completed</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20">
                        <h3 class="font-semibold text-white">Clients</h3>
                        <p class="text-blue-200">30+ Happy</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/20">
                        <h3 class="font-semibold text-white">Location</h3>
                        <p class="text-blue-200">Remote</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection