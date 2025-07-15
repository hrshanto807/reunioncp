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
            <h4 class="text-lg font-semibold text-gray-900 mb-3">অনুষ্ঠান স্থলের বিবরণ</h4>
            <p class="mb-4">পুনর্মিলনী ২০২৬ এর বিভিন্ন কার্যক্রম নিম্নলিখিত স্থানসমূহে অনুষ্ঠিত হবে:</p>

            <div class="space-y-4">
                <div class="border-l-4 border-green-500 pl-4">
                    <h5 class="font-semibold text-gray-900">মূল অনুষ্ঠান</h5>
                    <p class="text-gray-600">স্কুল প্রাঙ্গণ (মূল ভবন)</p>
                    <p class="text-sm text-gray-500">উদ্বোধনী, স্মৃতিচারণ, সমাপনী অনুষ্ঠান</p>
                </div>

                <div class="border-l-4 border-blue-500 pl-4">
                    <h5 class="font-semibold text-gray-900">সাংস্কৃতিক অনুষ্ঠান</h5>
                    <p class="text-gray-600">স্বাধীন কমিউনিটি সেন্টার</p>
                    <p class="text-sm text-gray-500">গান, কবিতা, নাটক ও নৃত্য</p>
                </div>

                <div class="border-l-4 border-orange-500 pl-4">
                    <h5 class="font-semibold text-gray-900">খাবার পরিবেশনা</h5>
                    <p class="text-gray-600">স্কুল ক্যান্টিন এলাকা</p>
                    <p class="text-sm text-gray-500">নাস্তা ও দুপুরের খাবার</p>
                </div>

                <div class="border-l-4 border-purple-500 pl-4">
                    <h5 class="font-semibold text-gray-900">ক্রীড়া প্রতিযোগিতা</h5>
                    <p class="text-gray-600">স্কুল খেলার মাঠ</p>
                    <p class="text-sm text-gray-500">ফুটবল, ক্রিকেট ও অন্যান্য খেলা</p>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
                <h5 class="font-semibold text-yellow-800 mb-2">পার্কিং ব্যবস্থা:</h5>
                <p class="text-yellow-700">স্কুলের পাশের মাঠে গাড়ি পার্ক করার ব্যবস্থা রয়েছে। নিরাপত্তার জন্য
                    দায়িত্বপ্রাপ্ত ব্যক্তি থাকবেন।</p>
            </div>
        </div>
    </section>
@endsection
