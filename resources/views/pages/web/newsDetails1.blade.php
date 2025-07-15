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
            <!-- news content added here -->
            <h4 class="text-lg font-semibold text-gray-900 mb-3">গুরুত্বপূর্ণ ঘোষণা</h4>
            <p class="mb-4">প্রিয় প্রাক্তন ও বর্তমান শিক্ষার্থীবৃন্দ,</p>
            <p class="mb-4">আমরা আনন্দের সাথে জানাচ্ছি যে, পুনর্মিলনী ২০২৬ এর নিবন্ধনের শেষ তারিখ <strong>১৫ ডিসেম্বর
                    ২০২৬</strong> পর্যন্ত বৃদ্ধি করা হয়েছে।</p>

            <h5 class="font-semibold text-gray-900 mb-2">নিবন্ধন প্রক্রিয়া:</h5>
            <ul class="list-disc list-inside mb-4 space-y-1">
                <li>অনলাইন নিবন্ধন ফর্ম পূরণ করুন</li>
                <li>নিবন্ধন ফি ১০০০ টাকা প্রদান করুন</li>
                <li>বিকাশ/নগদ/রকেট এর মাধ্যমে পেমেন্ট করুন</li>
                <li>Transaction ID জমা দিন</li>
            </ul>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                <p class="text-yellow-800"><strong>মনে রাখবেন:</strong> নিবন্ধনের পর আপনি একটি নিশ্চিতকরণ SMS পাবেন।</p>
            </div>

            <p>আরো তথ্যের জন্য যোগাযোগ করুন: <strong>০১৭১২-৩৪৫৬৭৮</strong></p>
        </div>
    </section>
@endsection
