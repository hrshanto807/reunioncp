@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="hero-bg size-auto pt-32 flex justify-center items-center">
        <div class="text-center">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-gradient">{{$news->title}}</h2>
                <p class="text-xl text-white">{{$news->short_desc}}</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4 rounded-full"></div>
            </div>

        </div>
    </section>
<!-- Latest News Section -->
<section id="news" class="py-16 bg-gradient-to-br from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Render full HTML content from the database --}}
        {!! $news->content !!}
    </div>
</section>
@endsection
