@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="hero-bg size-auto pt-32 flex justify-center items-center">
        <div class="text-center">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-gradient">অনুদান তালিকা
                </h2>
                <p class="text-xl text-white">পুনর্মিলনী আয়োজনের আর্থিক হিসাব ও তথ্য</p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>
        </div>
    </section>
    <!-- Alumni Directory Section -->    
    <section class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-xl font-bold text-purple-600 mb-6 flex items-center">
                    <i class="fas fa-handshake mr-2"></i>স্পনসর তালিকা
                </h2>

                <!-- Scrollable Table Wrapper -->
                <div class="w-full overflow-x-auto block">
                    <table class="w-full min-w-[600px] border border-gray-300 text-left text-gray-700 border-collapse">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ক্রমিক</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">স্পনসরের নাম</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">প্রতিষ্ঠান / ব্র্যান্ড
                                </th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">যোগাযোগ</th>
                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap">অর্থায়ন (৳)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-4 border border-gray-300">১</td>
                                <td class="py-3 px-4 border border-gray-300">মো. রাশেদুল ইসলাম</td>
                                <td class="py-3 px-4 border border-gray-300">রাশেদ এন্টারপ্রাইজ</td>
                                <td class="py-3 px-4 border border-gray-300">০১৭১১১২২৩৩৪</td>
                                <td class="py-3 px-4 border border-gray-300 text-purple-600 text-right font-semibold">
                                    ১০,০০০</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-gray-300">২</td>
                                <td class="py-3 px-4 border border-gray-300">সাবরিনা হক</td>
                                <td class="py-3 px-4 border border-gray-300">হক ফ্যাশন হাউজ</td>
                                <td class="py-3 px-4 border border-gray-300">০১৮৮৮৮৮৮৮৮৮</td>
                                <td class="py-3 px-4 border border-gray-300 text-purple-600 text-right font-semibold">
                                    ৮,০০০</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-gray-300">৩</td>
                                <td class="py-3 px-4 border border-gray-300">আব্দুল করিম</td>
                                <td class="py-3 px-4 border border-gray-300">করিম ট্রেডিং</td>
                                <td class="py-3 px-4 border border-gray-300">০১৯৯৯৯৯৯৯৯৯</td>
                                <td class="py-3 px-4 border border-gray-300 text-purple-600 text-right font-semibold">
                                    ৫,০০০</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-purple-50 font-bold">
                            <tr>
                                <td colspan="3"></td>
                                <td class="py-3 px-4 border border-gray-300 text-gray-900">মোট</td>
                                <td class="py-3 px-4 border border-gray-300 text-purple-600 text-right">২৩,০০০</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection