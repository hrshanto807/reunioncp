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
                <h2 class="text-xl font-bold text-green-600 mb-6 flex items-center">
                    <i class="fas fa-users mr-2"></i>অনুদান তালিকা
                </h2>

                <!-- Scrollable Table Wrapper -->
                <div class="w-full overflow-x-auto block">
                    <table class="w-full min-w-[600px] border border-gray-300 text-left text-gray-700 border-collapse">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ক্রমিক</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">নাম</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">মোবাইল নম্বর</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">পেমেন্ট পদ্ধতি </th>
                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap">অনুদানের
                                    পরিমাণ (৳)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-4 border border-gray-300">১</td>
                                <td class="py-3 px-4 border border-gray-300">জাহিদ হাসান</td>
                                <td class="py-3 px-4 border border-gray-300">০১৭১২৩৪৫৬৭৮</td>
                                <td class="py-3 px-4 border border-gray-300">বিকাশ </td>
                                <td class="py-3 px-4 border border-gray-300 text-green-600 text-right font-semibold">
                                    ১,০০০</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 border border-gray-300">২</td>
                                <td class="py-3 px-4 border border-gray-300">মাহিনুর রহমান</td>
                                <td class="py-3 px-4 border border-gray-300">০১৮৯৯৮৮৭৭৬৬</td>
                                <td class="py-3 px-4 border border-gray-300">বিকাশ</td>
                                <td class="py-3 px-4 border border-gray-300 text-green-600 text-right font-semibold">
                                    ১,৫০০</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-green-50 font-bold">
                            <tr>
                                <td colspan="3"></td>
                                <td class="py-3 px-4 border border-gray-300 text-gray-900">মোট</td>
                                <td class="py-3 px-4 border border-gray-300 text-green-600 text-right">৮,০০০</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
