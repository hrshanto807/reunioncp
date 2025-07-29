@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="hero-bg size-auto pt-32 flex justify-center items-center">
        <div class="text-center">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-gradient">পেমেন্ট তালিকা
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
                    <i class="fas fa-users mr-2"></i> অংশগ্রহণকারীদের পেমেন্ট তালিকা
                </h2>
                <div id="table-wrapper" style="overflow-x:auto;">
                    <table id="datatable" class="display nowrap" style="width:100%">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ক্রমিক</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">নাম</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ব্যাচ</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">মোবাইল নম্বর</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">বর্তমান ঠিকানা</th>
                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap">পেমেন্ট (৳)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $index => $item)
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">{{ $loop->index  +1 }}
                                    </td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->name }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->batch }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->phone }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->present_address }}</td>
                                    <td class="py-3 px-4 border border-gray-300 text-green-600  font-semibold">
                                        {{ banglaNumber(number_format($item->amount, 0, '.', ',')) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
