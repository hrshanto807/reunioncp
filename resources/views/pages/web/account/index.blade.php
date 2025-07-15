@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="hero-bg size-auto pt-32 flex justify-center items-center">
        <div class="text-center">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-gradient">আর্থিক অবস্থা
                </h2>
                <p class="text-xl text-white">পুনর্মিলনী আয়োজনের আর্থিক হিসাব ও তথ্য</p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>
        </div>
    </section>
    <!-- Alumni Directory Section -->
    <section id="alumni" class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Detailed Financial Breakdown (Hidden by default) -->
            <div id="financial-details" class="">
                <!-- Income and Expense Breakdown -->
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Income Details -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-green-600 mb-6 flex items-center">
                            <i class="fas fa-arrow-up mr-2"></i>
                            আয়ের বিবরণ
                        </h3>
                        <table class="w-full text-left text-gray-700 border border-gray-300 border-collapse">
                            <tbody>
                                <tr class="cursor-pointer hover:bg-blue-100"
                                    onclick="window.location='{{route('registration')}}'">
                                    <td class="py-3 px-4 border border-gray-300 text-blue-600">
                                        রেজিস্ট্রেশন ফি
                                    </td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-green-600 text-right">
                                        ১,৪০,০০০
                                    </td>
                                </tr>
                                <tr class="cursor-pointer hover:bg-blue-100"
                                    onclick="window.location='{{route('sponser')}}'">
                                    <td class="py-3 px-4 border border-gray-300 text-blue-600">স্পনসরশিপ</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-green-600 text-right">
                                        ১৫,০০০</td>
                                </tr>
                                <tr class="cursor-pointer hover:bg-blue-100"
                                    onclick="window.location='{{route('donation')}}'">
                                    <td class="py-3 px-4 border border-gray-300 text-blue-600">অনুদান</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-green-600 text-right">
                                        ৫,০০০</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 border border-gray-300 font-bold text-gray-900">মোট</td>
                                    <td class="py-4 px-4 border border-gray-300 font-bold text-green-600 text-right">
                                        ১,৬০,০০০</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Expense Details -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-red-600 mb-6 flex items-center">
                            <i class="fas fa-arrow-down mr-2"></i>
                            ব্যয়ের বিবরণ
                        </h3>
                        <table class="w-full text-left text-gray-700 border border-gray-300 border-collapse">
                            <tbody>
                                <tr>
                                    <td class="py-3 px-4  border border-gray-300 ">খাবার ব্যবস্থা</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ৯০,০০০</td>
                                </tr>
                                <tr class="cursor-pointer hover:bg-blue-100"
                                    onclick="window.location='expense/expense.html'">
                                    <td class="py-3 px-4 border border-gray-300">হল ভাড়া</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ২০,০০০</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">সাউন্ড সিস্টেম</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ৮,০০০</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">আলোকসজ্জা</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ৫,০০০</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">প্রিন্টিং ও স্টেশনারি</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ৩,৫০০</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">পরিবহন</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ৪,০০০</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">উপহার ও স্মৃতিচিহ্ন</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ৩,৮০০</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">বিবিধ</td>
                                    <td class="py-3 px-4 border border-gray-300 font-semibold text-red-600 text-right">
                                        ১,০০০</td>
                                </tr>
                                <tr>
                                    <td class="pt-4 py-3 px-4 border border-gray-300 font-bold text-gray-900">মোট</td>
                                    <td class="pt-4 py-3 px-4 border border-gray-300 font-bold text-red-600 text-right">
                                        ১,৩৫,৩০০</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Expense Category Chart -->
                <div class="bg-white rounded-2xl p-6 shadow-lg mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">ব্যয়ের বিভাগ অনুযায়ী বিভাজন</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-red-500 rounded"></div>
                                <span class="text-gray-700">খাবার ব্যবস্থা</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-red-500 h-3 rounded-full" style="width: 66.5%"></div>
                                </div>
                                <span class="text-sm font-semibold">৬৬.৫%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-blue-500 rounded"></div>
                                <span class="text-gray-700">হল ভাড়া</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-blue-500 h-3 rounded-full" style="width: 14.8%"></div>
                                </div>
                                <span class="text-sm font-semibold">১৪.৮%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-green-500 rounded"></div>
                                <span class="text-gray-700">সাউন্ড সিস্টেম</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-green-500 h-3 rounded-full" style="width: 5.9%"></div>
                                </div>
                                <span class="text-sm font-semibold">৫.৯%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-yellow-500 rounded"></div>
                                <span class="text-gray-700">আলোকসজ্জা</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-yellow-500 h-3 rounded-full" style="width: 3.7%"></div>
                                </div>
                                <span class="text-sm font-semibold">৩.৭%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-purple-500 rounded"></div>
                                <span class="text-gray-700">পরিবহন</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-purple-500 h-3 rounded-full" style="width: 3.0%"></div>
                                </div>
                                <span class="text-sm font-semibold">৩.০%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-orange-500 rounded"></div>
                                <span class="text-gray-700">উপহার ও স্মৃতিচিহ্ন</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-orange-500 h-3 rounded-full" style="width: 2.8%"></div>
                                </div>
                                <span class="text-sm font-semibold">২.৮%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-pink-500 rounded"></div>
                                <span class="text-gray-700">প্রিন্টিং ও স্টেশনারি</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-pink-500 h-3 rounded-full" style="width: 2.6%"></div>
                                </div>
                                <span class="text-sm font-semibold">২.৬%</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-gray-500 rounded"></div>
                                <span class="text-gray-700">বিবিধ</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-48 bg-gray-200 rounded-full h-3">
                                    <div class="bg-gray-500 h-3 rounded-full" style="width: 0.7%"></div>
                                </div>
                                <span class="text-sm font-semibold">০.৭%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Committee Members -->
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">কমিটির সদস্যরা</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">মোঃ আমিনুল ইসলাম</div>
                                <div class="text-sm text-gray-600">সভাপতি</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৭১২৩৪৫৬৭৮</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">জনাব করিম উদ্দিন</div>
                                <div class="text-sm text-gray-600">সম্পাদক</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৮৯০১২৩৪৫৬</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">মোছাঃ রহিমা খাতুন</div>
                                <div class="text-sm text-gray-600">কোষাধ্যক্ষ</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৬১২৭৮৯০১২</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">আব্দুর রহমান</div>
                                <div class="text-sm text-gray-600">সাংগঠনিক সম্পাদক</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৫৫৫১২৩৪৫৬</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">নুরুল হক</div>
                                <div class="text-sm text-gray-600">প্রচার সম্পাদক</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৯১৯৮৭৬৫৪ৃ</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">সালমা আক্তার</div>
                                <div class="text-sm text-gray-600">সাংস্কৃতিক সম্পাদক</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৭৭৭১২৩৪৫৬</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">মোঃ রফিকুল ইসলাম</div>
                                <div class="text-sm text-gray-600">আবাসন সম্পাদক</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৮১৮৯৮৭৬৫৪</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">ফাতেমা বেগম</div>
                                <div class="text-sm text-gray-600">খাদ্য সম্পাদক</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৯৯৯১২৩৪৫৬</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-indigo-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">মাহবুব আলম</div>
                                <div class="text-sm text-gray-600">তথ্য ও যোগাযোগ</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৬৬৬৭৮৯০১২</div>
                        </div>

                        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 bg-cyan-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">শাহিদা পারভীন</div>
                                <div class="text-sm text-gray-600">নিরাপত্তা ও শৃঙ্খলা</div>
                            </div>
                            <div class="ml-auto text-sm text-gray-500">+৮৮০১৩৩৩৪৫৬৭৮৯</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
