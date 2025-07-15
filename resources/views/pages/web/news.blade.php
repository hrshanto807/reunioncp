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
    <!-- Latest News Section -->
    <section id="news" class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="news-card group show_more relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-pink-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-exclamation text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-red-100 text-red-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">গুরুত্বপূর্ণ</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-600 transition-colors duration-300">
                        নিবন্ধনের শেষ তারিখ বর্ধিত</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">পুনর্মিলনী নিবন্ধনের শেষ তারিখ ১৫ ডিসেম্বর
                        পর্যন্ত বৃদ্ধি করা হয়েছে। আগ্রহী সকলেই এই সুযোগের সদ্ব্যবহার করুন।</p>

                    <div class="flex items-center justify-between">
                        <a href="{{route('newsDetails1')}}" target="_blank"
                            class="inline-flex items-center text-red-600 font-semibold text-sm hover:text-red-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
                <!-- News Card 2 -->
                <div class="news-card group show_more relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-info text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-blue-100 text-blue-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">তথ্য</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                        কার্যক্রমের সময়সূচী প্রকাশ</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">পুনর্মিলনী কার্যক্রমের বিস্তারিত সময়সূচী
                        প্রকাশিত হয়েছে। সকাল ৯টা থেকে রাত ১০টা পর্যন্ত বিভিন্ন কার্যক্রম থাকবে।</p>

                    <div class="flex items-center justify-between">
                        <a href="{{route('newsDetails2')}}" target="_blank"
                            class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
                <!-- News Card 3 -->
                <div class="news-card group show_more relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-map-marker-alt text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-green-100 text-green-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">স্থান</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">
                        অনুষ্ঠানের স্থান নির্ধারণ
                    </h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        মূল অনুষ্ঠান মূল প্রাঙ্গনে এবং সাংস্কৃতিক অনুষ্ঠান স্বাধীন কমিউনিটি সেন্টারে অনুষ্ঠিত হবে।
                    </p>

                    <div class="flex items-center justify-between">
                        <a href="{{route('newsDetails3')}}" target="_blank"
                            class="inline-flex items-center text-green-600 font-semibold text-sm hover:text-green-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
                <!-- News Card 1 -->
                <div class="news-card group show_more hidden relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-pink-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-exclamation text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-red-100 text-red-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">গুরুত্বপূর্ণ</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-600 transition-colors duration-300">
                        নিবন্ধনের শেষ তারিখ বর্ধিত</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">পুনর্মিলনী নিবন্ধনের শেষ তারিখ ১৫ ডিসেম্বর
                        পর্যন্ত বৃদ্ধি করা হয়েছে। আগ্রহী সকলেই এই সুযোগের সদ্ব্যবহার করুন।</p>

                    <div class="flex items-center justify-between">
                        <a href="single-news/news1.html" target="_blank"
                            class="inline-flex items-center text-red-600 font-semibold text-sm hover:text-red-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
                <!-- News Card 2 -->
                <div class="news-card group show_more hidden relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-info text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-blue-100 text-blue-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">তথ্য</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                        কার্যক্রমের সময়সূচী প্রকাশ</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">পুনর্মিলনী কার্যক্রমের বিস্তারিত সময়সূচী
                        প্রকাশিত হয়েছে। সকাল ৯টা থেকে রাত ১০টা পর্যন্ত বিভিন্ন কার্যক্রম থাকবে।</p>

                    <div class="flex items-center justify-between">
                        <a href="single-news/news2.html" target="_blank"
                            class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
                <!-- News Card 3 -->
                <div class="news-card group show_more hidden relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-map-marker-alt text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-green-100 text-green-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">স্থান</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">
                        অনুষ্ঠানের স্থান নির্ধারণ
                    </h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        মূল অনুষ্ঠান মূল প্রাঙ্গনে এবং সাংস্কৃতিক অনুষ্ঠান স্বাধীন কমিউনিটি সেন্টারে অনুষ্ঠিত হবে।
                    </p>

                    <div class="flex items-center justify-between">
                        <a href="single-news/news3.html" target="_blank"
                            class="inline-flex items-center text-green-600 font-semibold text-sm hover:text-green-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button id="loadMoreBtn" onclick="loadMoreAlumni()"
                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-10 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1">
                    <i class="fas fa-plus-circle mr-2"></i>
                    আরও দেখুন
                </button>
            </div>
        </div>
    </section>
@endsection
