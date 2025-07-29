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
                <div id="table-wrapper" style="overflow-x:auto;">
                    <table id="datatable" class="display nowrap" style="width:100%">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ক্রমিক</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">নাম</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">মোবাইল নম্বর</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">স্ট্যাটাস </th>
                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap">অনুদানের
                                    পরিমাণ (৳)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $index => $item)
                                <tr>
                                    <td class="py-3 px-4 border">{{ $loop->index + 1 }}</td>
                                    <td class="py-3 px-4 border">{{ $item->name }}</td>
                                    <td class="py-3 px-4 border">{{ $item->mobile }}</td>
                                    <td class="py-3 px-4 border text-left">
                                        @if ($item->status == 'Approved')
                                            <span class="bg-green-600 text-white text-xs px-3 py-1 rounded">Approved</span>
                                        @elseif ($item->status == 'Cancel')
                                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">Cancel</span>
                                        @elseif ($item->status == 'pending')
                                            <span class="bg-yellow-500 text-white text-xs px-3 py-1 rounded">Pending</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 border text-left text-green-700 font-bold">
                                        {{ banglaNumber(number_format($item->amount, 0)) }}
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
