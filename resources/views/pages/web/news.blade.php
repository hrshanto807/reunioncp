@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="hero-bg size-auto pt-32 flex justify-center items-center">
        <div class="text-center">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-gradient">সব খবর</h2>
                <p class="text-xl text-white">পুনর্মিলনী সংক্রান্ত সকল গুরুত্বপূর্ণ তথ্য এবং আপডেট</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4 rounded-full"></div>
            </div>

        </div>
    </section>
   {{-- news section --}}
    <section id="news" class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">          
            <div class="grid md:grid-cols-3 gap-8">

                @foreach ($newsItems as $news)
                    @php
            $colorKey = 'blue';
            $textColorClass = tailwind_color_class($colorKey, 'text');     
            $textHoverClass = tailwind_color_class($colorKey, 'text', '700'); 
            $bgBadgeClass = tailwind_color_class($colorKey, 'bg', '100');   
            $textBadgeClass = tailwind_color_class($colorKey, 'text', '700'); 
        @endphp

                    <div class="news-card group relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1"
                            style="background: linear-gradient(to right, 
                            {{ $news->color_from ?? '#3b82f6' }}, {{ $news->color_to ?? '#22d3ee' }})">
                        </div>

                        <div class="flex items-start space-x-3 mb-6">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300"
                                style="background: linear-gradient(to bottom right, {{ $news->color_from ?? '#3b82f6' }}, {{ $news->color_to ?? '#22d3ee' }})">

                                @if($news->photo)
                                    <img src="{{ asset($news->photo) }}" alt="news image"
                                        class="w-10 h-10 object-cover rounded-xl" />
                                @else
                                    <i class="{{ $news->icon_class ?? 'fas fa-info' }} text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                                @endif
                            </div>
                            <div class="flex-1">
                                <span class="inline-block {{ $bgBadgeClass }} {{ $textBadgeClass }} font-semibold text-xs px-3 py-1 rounded-full mb-1">
                                    {{ $news->category->name }}
                                </span>
                                <div class="text-gray-500 text-sm flex items-center">
                                    <i class="fas fa-clock mr-1"></i>
                                    {{ $news->created_at ? $news->created_at->diffForHumans() : 'সময় নেই' }}
                                </div>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:{{ $textColorClass }} transition-colors duration-300">
                            {{ $news->title }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">{{ $news->short_desc }}</p>

                        <div class="flex items-center justify-between">
                             <a href="{{ route('newsDetails', encode_id($news->id)) }}" target="_blank"
               class="inline-flex items-center {{ $textColorClass }} font-semibold text-sm hover:{{ $textHoverClass }} transition-colors group-hover:translate-x-2 transition-transform duration-300">
                বিস্তারিত পড়ুন
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
            </a>
                            <div class="flex items-center space-x-2 text-gray-400">
        <!-- Facebook Share -->
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}&t={{ urlencode($news->title) }}" target="_blank" rel="noopener noreferrer"  class="hover:text-blue-600 transition-colors" title="Share on Facebook"> <i class="fab fa-facebook-f"></i>
        </a>

        <!-- WhatsApp Share -->
        <a href="https://wa.me/?text={{ urlencode($news->title . ' ' . request()->fullUrl()) }}" 
        target="_blank" rel="noopener noreferrer" class="hover:text-green-500 transition-colors"title="Share on WhatsApp">
        <i class="fab fa-whatsapp"></i>
        </a>
    </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Pagination -->
        <div class="text-center mt-12">
           {{ $newsItems->links('pagination::tailwind') }}
        </div>
        </div>

    </section>
     
@endsection
