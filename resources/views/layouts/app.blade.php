@php
    $setting = \App\Models\SiteSetting::first();

    // Use values from DB or fallback default
    $metaTitle =
        $setting && $setting->meta_title
            ? $setting->meta_title
            : 'ছাতার পাইয়া বহুমুখী উচ্চ বিদ্যালয় - পুনর্মিলনী ২০২৬';
    $metaDescription =
        $setting && $setting->meta_description ? $setting->meta_description : 'Default description here...';
    $Qr_videoUrl = $setting && $setting->qr_video_url ? $setting->qr_video_url : '';
    $favicon = $setting && $setting->favicon ? asset($setting->favicon) : asset('assets/logo.png');
    $logo = $setting && $setting->logo ? asset($setting->logo) : asset('assets/logo.png');
@endphp
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="{{ $favicon }}" type="image/png">
    <!-- Dynamic Title -->
    <title>{{ $metaTitle }}</title>
    <!-- Dynamic Meta Description -->
    <meta name="description" content="{{ $metaDescription }}">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/datatables/datatables.css') }}">
    <link rel=" stylesheet" href="{{ asset('assets/css/datatables/buttons.css') }}">
    <link rel=" stylesheet" href="{{ asset('assets/css/datatables/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-nav">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between py-2">
                <!-- Logo -->
                <div class="flex items-center space-x-4 group cursor-pointer">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2">
                        <img src="{{ $logo }}" alt="Logo" class="w-20 h-20 rounded-full shadow-lg">

                    </a>
                </div>
                <!-- Navigation Menu -->
                <nav class="hidden lg:flex items-center space-x-2">
                    <a href="{{ route('home') }}"
                        class="flex items-center space-x-2 px-4 py-2 rounded-xl font-medium text-white hover:bg-white/10 transition-all duration-300 group">
                        <i class="fas fa-home text-orange-400"></i>
                        <span>হোম</span>
                    </a>
                    <a href="{{ route('home') }}#registration"
                        class="flex items-center space-x-2 px-4 py-2 rounded-xl font-medium text-white hover:bg-white/10 transition-all duration-300 group">
                        <i class="fas fa-user-plus text-orange-400"></i>
                        <span>নিবন্ধন</span>
                    </a>
                    <a href="{{ route('home') }}#alumni"
                        class="flex items-center space-x-2 px-4 py-2 rounded-xl font-medium text-white hover:bg-white/10 transition-all duration-300 group">
                        <i class="fas fa-users text-orange-400"></i>
                        <span>প্রাক্তন ছাত্র/ছাত্রী</span>
                    </a>
                    <a href="{{ route('home') }}#events"
                        class="flex items-center space-x-2 px-4 py-2 rounded-xl font-medium text-white hover:bg-white/10 transition-all duration-300 group">
                        <i class="fas fa-calendar text-orange-400"></i>
                        <span>কার্যক্রম</span>
                    </a>
                </nav>
                <!-- Action Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}#contact"
                        class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 inline-flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        যোগাযোগ
                    </a>
                    <a onclick="showdonationModal()"
                        class="bg-gradient-to-r from-orange-500 via-red-500 to-pink-600 hover:from-orange-600 hover:via-red-600 hover:to-pink-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 inline-flex items-center cursor-pointer">
                        <i class="fa-solid fa-hand-holding-dollar mr-2"></i> ডোনেশন
                    </a>
                </div>
            </div>
        </div>
    </header>
    <a href="#top" id="scrollTopBtn" title="Go to top"
        class="fixed bottom-5 right-5 z-50 px-3 py-2  text-white bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl shadow-2xl transition-opacity opacity-0 pointer-events-none">
        <i class="fas fa-arrow-up"></i>
    </a>
    <div id="top"></div>
    @if (session('success'))
        <div id="toast-success" class="fixed top-20 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg z-50">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('toast-success');
                if (toast) toast.remove();
            }, 3000);
        </script>
    @endif
    <div> @yield('content') </div>
    <!-- Donation Modal -->
    <div id="donationModal" class="fixed inset-0 z-50 hidden">
        <!-- Overlay -->
        <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm transition-opacity duration-300"
            onclick="closedonationModal()"></div>
        <!-- Modal Content -->
        <div class="flex items-center justify-center min-h-screen p-4">
            <div id="donationModalContent"
                class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full mx-4 transform transition-all duration-300 scale-95 opacity-0 overflow-y-auto max-h-screen">
                <!-- Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900">ডোনেশন ফর্ম</h3>
                    <button onclick="closedonationModal()"
                        class="text-gray-400 hover:text-gray-600 transition-colors p-2 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <!-- Body -->
                <div class="px-6 py-8">
                    @if (session('success'))
                        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('donate.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">নাম <span
                                        class="text-red-500">*</span></label>
                                <input name="name" value="{{ old('name') }}" type="text"
                                    class="form-input w-full border rounded-lg px-4 py-2" placeholder="আব্দুল করিম">
                                @error('name')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">মোবাইল নম্বর <span
                                        class="text-red-500">*</span></label>
                                <input name="mobile" value="{{ old('mobile') }}" type="tel"
                                    class="form-input w-full border rounded-lg px-4 py-2" placeholder="০১৭xxxxxxxx">
                                @error('mobile')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">মোট পেমেন্ট (টাকা) <span
                                        class="text-red-500">*</span></label>
                                <input name="amount" value="{{ old('amount') }}" type="number" step="0.01"
                                    class="form-input w-full border rounded-lg px-4 py-2" placeholder="amount">
                                @error('amount')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="">
                                <label class="block text-gray-700 font-semibold">কিভাবে পেমেন্ট করবেন?</label>
                                <a href="{{ $Qr_videoUrl }}" target="_blank" title="QR পেমেন্ট ভিডিও">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 152 152">
                                        <path fill="#d81414"
                                            d="M100.87 47.41H51.13A15.13 15.13 0 0 0 36 62.55v26.9a15.13 15.13 0 0 0 15.13 15.14h49.74A15.13 15.13 0 0 0 116 89.45v-26.9a15.13 15.13 0 0 0-15.13-15.14zM65.46 88.26V63.74L86.54 76z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                                <h4 class="font-semibold text-blue-800 mb-2 flex items-center"><i
                                        class="fas fa-info-circle mr-2"></i> পেমেন্ট নির্দেশনা</h4>
                                <p class="text-sm text-blue-700">• বিকাশ: <strong>+৮৮০১৯১৫৮৭১৬৪৪</strong> (Personal)
                                </p>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-lg border border-blue-200 text-center">
                                <h4 class="font-semibold text-blue-800 mb-2 flex items-center justify-center"><i
                                        class="fas fa-image mr-2"></i> স্ক্যান করুন</h4>
                                <img src="{{ asset('assets/images/qr-code.png') }}" alt="QR Code"
                                    class="w-32 h-32 object-cover mx-auto">
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-3 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-check-circle mr-2"></i> ডোনেশন করুন
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- terms and conditions Modal -->
    <div id="rulesModal"
        class="fixed inset-0 z-50 hidden opacity-0 scale-95 transition-all duration-300 bg-black bg-opacity-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-white border-b border-gray-200 p-6 rounded-t-2xl">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                        <i class="fas fa-book text-blue-600 mr-3"></i>
                        পুনর্মিলনী নিয়মাবলী
                    </h2>
                    <button onclick="closeRulesModal()" class="text-gray-500 hover:text-gray-700 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Content -->
            <div class="p-6 space-y-6">
                <!-- General Rules -->
                <div class="bg-blue-50 p-6 rounded-xl border border-blue-200">
                    <h3 class="text-xl font-bold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        সাধারণ নিয়মাবলী
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span>রেজিস্ট্রেশন ফি প্রদানের পর রেজিস্ট্রেশন নিশ্চিত হবে</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span>প্রতি ব্যক্তির জন্য রেজিস্ট্রেশন ফি ১০০০ টাকা</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span>রেজিস্ট্রেশনের সময় সঠিক তথ্য প্রদান করতে হবে</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <span>পরিবার ও বন্ধুদের একসাথে রেজিস্ট্রেশন করা যাবে</span>
                        </li>
                    </ul>
                </div>

                <!-- Event Rules -->
                <div class="bg-green-50 p-6 rounded-xl border border-green-200">
                    <h3 class="text-xl font-bold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        অনুষ্ঠান সংক্রান্ত নিয়ম
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-clock text-orange-500 mr-3 mt-1"></i>
                            <span>নির্ধারিত সময়ে অনুষ্ঠানে উপস্থিত থাকতে হবে</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock text-orange-500 mr-3 mt-1"></i>
                            <span>অনুষ্ঠানের সময়সূচী অনুযায়ী কার্যক্রম পালন করতে হবে</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock text-orange-500 mr-3 mt-1"></i>
                            <span>প্রোগ্রামে সক্রিয় অংশগ্রহণ প্রত্যাশিত</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock text-orange-500 mr-3 mt-1"></i>
                            <span>অনুষ্ঠানের ফটো ও ভিডিও সংগ্রহ করা যাবে</span>
                        </li>
                    </ul>
                </div>

                <!-- Payment Rules -->
                <div class="bg-purple-50 p-6 rounded-xl border border-purple-200">
                    <h3 class="text-xl font-bold text-purple-800 mb-4 flex items-center">
                        <i class="fas fa-credit-card mr-2"></i>
                        পেমেন্ট নিয়মাবলী
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-money-bill-wave text-purple-500 mr-3 mt-1"></i>
                            <span>শুধুমাত্র মোবাইল ব্যাংকিং এর মাধ্যমে পেমেন্ট গ্রহণযোগ্য</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-money-bill-wave text-purple-500 mr-3 mt-1"></i>
                            <span>পেমেন্টের পর Transaction ID সংরক্ষণ করুন</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-money-bill-wave text-purple-500 mr-3 mt-1"></i>
                            <span>ভুল পেমেন্টের জন্য সংগঠক দায়ী থাকবেন না</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-money-bill-wave text-purple-500 mr-3 mt-1"></i>
                            <span>পেমেন্ট যাচাইয়ের পর নিশ্চিতকরণ SMS পাবেন</span>
                        </li>
                    </ul>
                </div>

                <!-- Code of Conduct -->
                <div class="bg-red-50 p-6 rounded-xl border border-red-200">
                    <h3 class="text-xl font-bold text-red-800 mb-4 flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        আচরণবিধি
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-user-friends text-red-500 mr-3 mt-1"></i>
                            <span>সকলের সাথে শ্রদ্ধা ও সম্মানের সাথে আচরণ করুন</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-user-friends text-red-500 mr-3 mt-1"></i>
                            <span>কোনো ধরনের অশালীন আচরণ গ্রহণযোগ্য নয়</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-user-friends text-red-500 mr-3 mt-1"></i>
                            <span>রাজনৈতিক আলোচনা এড়িয়ে চলুন</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-user-friends text-red-500 mr-3 mt-1"></i>
                            <span>পরিবেশ পরিচ্ছন্ন রাখুন</span>
                        </li>
                    </ul>
                </div>

                <!-- Cancellation Policy -->
                <div class="bg-yellow-50 p-6 rounded-xl border border-yellow-200">
                    <h3 class="text-xl font-bold text-yellow-800 mb-4 flex items-center">
                        <i class="fas fa-undo mr-2"></i>
                        বাতিলকরণ নীতি
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-ban text-yellow-500 mr-3 mt-1"></i>
                            <span>অনুষ্ঠানের ৭ দিন আগে পর্যন্ত বাতিল করা যাবে</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-ban text-yellow-500 mr-3 mt-1"></i>
                            <span>বাতিলের ক্ষেত্রে ৫০% ফি কাটা হবে</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-ban text-yellow-500 mr-3 mt-1"></i>
                            <span>প্রাকৃতিক দুর্যোগের কারণে স্থগিত হলে পূর্ণ অর্থ ফেরত</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        যোগাযোগ
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4 text-gray-700">
                        <div class="flex items-center">
                            <i class="fas fa-phone text-blue-500 mr-3"></i>
                            <span>হটলাইন: ০১৭১২-৩৪৫৬৭৮</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-green-500 mr-3"></i>
                            <span>ইমেইল: reunion@example.com</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-facebook text-blue-600 mr-3"></i>
                            <span>Facebook: @ReunionPage</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-orange-500 mr-3"></i>
                            <span>সময়: সকাল ৯টা - রাত ৯টা</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="sticky bottom-0 bg-white border-t border-gray-200 p-6 rounded-b-2xl">
                <div class="flex justify-between items-center">
                    <p class="text-sm text-gray-600">
                        <i class="fas fa-info-circle mr-1"></i>
                        এই নিয়মাবলী সকল অংশগ্রহণকারীর জন্য বাধ্যতামূলক
                    </p>
                    <button onclick="closeRulesModal()"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        বুঝেছি
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <a href="{{ route('home') }}">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br">
                                <img src="{{ $logo }}" alt="Logo"
                                    class="w-12 h-12 rounded-full shadow-lg">
                            </div>
                            <div>
                                <h3 class="font-bold">ছাতার পাইয়া বহুমুখী উচ্চ বিদ্যালয়</h3>
                                <p class="text-sm text-gray-400">পুনর্মিলনী ২০২৬</p>
                            </div>
                        </div>
                    </a>
                    <p class="text-gray-400 text-sm">আমাদের বিদ্যালয়ের সকল প্রাক্তন ও বর্তমান শিক্ষার্থীদের একসাথে
                        নিয়ে আসার প্রচেষ্টা।</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">দ্রুত লিংক</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href=" {{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">
                                হোম</a>
                        </li>
                        <li><a href="{{ route('home') }}#registration"
                                class="text-gray-400 hover:text-white transition-colors">নিবন্ধন</a>
                        </li>
                        <li><a href="{{ route('home') }}#alumni"
                                class="text-gray-400 hover:text-white transition-colors">প্রাক্তন
                                ছাত্র</a></li>
                        <li><a href="{{ route('home') }}#events"
                                class="text-gray-400 hover:text-white transition-colors">কার্যক্রম</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">যোগাযোগের তথ্য</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="text-gray-400"><i class="fas fa-phone mr-2"></i>+৮৮০ ১৭০০০০০০</li>
                        <li class="text-gray-400"><i class="fas fa-envelope mr-2"></i>info@reunion.com</li>
                        <li class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>ছাছাতারপাইয়া, সেনবাগ,
                            নোয়াখালী, বাংলাদেশ
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">সামাজিক মাধ্যম</h4>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-green-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="flex space-x-4 mt-6">
                        <img class="h-10 rounded-full" src="{{ asset('assets/images/bkash.png') }}" alt="">
                        <img class="h-10 rounded-full" src="{{ asset('assets/images/nagad.png') }}" alt="">

                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">© ২০২৬ ছাতার পাইয়া বহুমুখী উচ্চ বিদ্যালয়। সকল অধিকার সংরক্ষিত। |
                    ডেভেলপ করেছেন পুনর্মিলনী কমিটি</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const radioSingle = document.getElementById('radioSingle');
            const radioGroup = document.getElementById('radioGroup');
            const groupSelectWrapper = document.getElementById('groupSelectWrapper');
            const participantSelect = document.getElementById('participantCount');
            const totalAmountField = document.getElementById('totalAmount');

            const baseAmount = 1000;
            const extraPerPerson = 500;

            // Calculate and update amount
            function toBanglaNumber(number) {
                const banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
                return number.toString().split('').map(d => {
                    return /\d/.test(d) ? banglaDigits[parseInt(d)] : d;
                }).join('');
            }

            function updateAmount() {
                if (radioSingle.checked) {
                    totalAmountField.value = toBanglaNumber(1000);
                } else if (radioGroup.checked) {
                    const count = parseInt(participantSelect.value);
                    if (!isNaN(count) && count >= 1) {
                        const extraPeople = count - 1;
                        const total = baseAmount + (extraPeople * extraPerPerson);
                        totalAmountField.value = toBanglaNumber(total);
                    } else {
                        totalAmountField.value = toBanglaNumber(0);
                    }
                }
            }
            // Radio change listeners
            radioSingle.addEventListener('change', function() {
                if (this.checked) {
                    groupSelectWrapper.classList.add('hidden');
                    participantSelect.value = "";
                    updateAmount();
                }
            });

            radioGroup.addEventListener('change', function() {
                if (this.checked) {
                    groupSelectWrapper.classList.remove('hidden');
                    updateAmount();
                }
            });
            // Select change listener
            participantSelect.addEventListener('change', updateAmount);
        });
    </script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });
    </script>


</body>

</html>
