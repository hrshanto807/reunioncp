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
            <h4 class="text-lg font-semibold text-gray-900 mb-3">বিস্তারিত কার্যক্রম</h4>
            <p class="mb-4">পুনর্মিলনী ২০২৬ এর সম্পূর্ণ কার্যক্রমের সময়সূচী প্রকাশ করা হলো:</p>

            <div class="bg-blue-50 rounded-lg p-4 mb-4">
                <h5 class="font-semibold text-blue-900 mb-3">দিন ১: ১৫ ডিসেম্বর ২০২৬</h5>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between"><span>০৮:০০ - ০৯:০০</span><span>নিবন্ধন ও অভ্যর্থনা</span></div>
                    <div class="flex justify-between"><span>০৯:০০ - ১০:৩০</span><span>উদ্বোধনী অনুষ্ঠান</span></div>
                    <div class="flex justify-between"><span>১০:৩০ - ১২:০০</span><span>স্মৃতিচারণ</span></div>
                    <div class="flex justify-between"><span>১২:০০ - ১৪:০০</span><span>দুপুরের খাবার</span></div>
                    <div class="flex justify-between"><span>১৪:০০ - ১৭:০০</span><span>সাংস্কৃতিক অনুষ্ঠান</span></div>
                </div>
            </div>

            <div class="bg-green-50 rounded-lg p-4 mb-4">
                <h5 class="font-semibold text-green-900 mb-3">দিন ২: ১৬ ডিসেম্বর ২০২৬</h5>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between"><span>০৯:০০ - ১১:০০</span><span>ক্রীড়া প্রতিযোগিতা</span></div>
                    <div class="flex justify-between"><span>১১:০০ - ১৩:০০</span><span>প্রাক্তন শিক্ষক সংবর্ধনা</span>
                    </div>
                    <div class="flex justify-between"><span>১৩:০০ - ১৫:০০</span><span>দুপুরের খাবার</span></div>
                    <div class="flex justify-between"><span>১৫:০০ - ১৮:০০</span><span>বিনোদনমূলক অনুষ্ঠান</span></div>
                </div>
            </div>

            <p class="text-sm text-gray-600">* সময়সূচী পরিবর্তনের অধিকার আয়োজক কমিটি সংরক্ষণ করে।</p>
        </div>
    </section>
@endsection
