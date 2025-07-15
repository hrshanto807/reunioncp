<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ছাতার পাইয়া বহুমুখী উচ্চ বিদ্যালয় - পুনর্মিলনী ২০২৬</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/buttons_datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive_datatables.min.css')}}">   
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/1.jpg') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-nav">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between py-2">
                <!-- Logo -->
                <div class="flex items-center space-x-4 group cursor-pointer">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2">
                       <img src="{{ asset('assets/logo.png') }}" alt="Logo"
                            class="w-20 h-20 rounded-full shadow-lg">
                       
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
                    {{-- <a href="admin-panel/index.html"
                        class="flex items-center space-x-2 px-4 py-2 rounded-xl font-medium text-white hover:bg-white/10 transition-all duration-300 group">
                        <i class="fas fa-calendar text-orange-400"></i>
                        <span>Admin</span>
                    </a> --}}
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
    <div>
        @yield('content')
    </div>
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
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">নাম <span
                                        class="text-red-500">*</span></label>
                                <input type="text" class="form-input w-full border rounded-lg px-4 py-2"
                                    placeholder="আব্দুল করিম">
                            </div>
                            <!-- Mobile -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">মোবাইল নম্বর <span
                                        class="text-red-500">*</span></label>
                                <input type="tel" class="form-input w-full border rounded-lg px-4 py-2"
                                    placeholder="০১৭xxxxxxxx">
                            </div>
                            <!-- Payment Method -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">পেমেন্ট পদ্ধতি <span
                                        class="text-red-500">*</span></label>
                                <select class="form-input">
                                    <option value="">পেমেন্ট মাধ্যম নির্বাচন করুন</option>
                                    <option value="bkash">🟣 বিকাশ (bKash)</option>
                                </select>
                            </div>
                            <!-- Amount -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">মোট পেমেন্ট (টাকা)
                                    <span class="text-red-500">*</span></label>
                                <input type="number" class="form-input w-full border rounded-lg px-4 py-2"
                                    placeholder="amount">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    যে নম্বর থেকে পেমেন্ট করেছেন <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" class="form-input" placeholder="০১৭xxxxxxxx">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    Transaction ID <span class="text-red-500">*</span>
                                </label>
                                <input type="text" class="form-input" placeholder="যেমন: BKH123ABC789">
                            </div>
                        </div>
                        <!-- Submit -->
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
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-white text-xl"></i>
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
                        <li><a href="{{ route('home') }}"
                                class="text-gray-400 hover:text-white transition-colors">হোম</a>
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- DataTables Core JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Extensions -->
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <!-- Export dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

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
    <script>
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#datatable')) {
                $('#datatable').DataTable({
                    responsive: true,
                    scrollX: true,
                    dom: 'Bfrtip',
                    buttons: ['copy', 'excel', 'pdf', 'print'],
                    language: {
                        search: "",
                         searchPlaceholder: "Search...",
                        lengthMenu: "প্রতি পৃষ্ঠায় _MENU_ রেকর্ড",
                        info: "_TOTAL_ রেকর্ডের মধ্যে _START_ থেকে _END_ প্রদর্শিত হচ্ছে",
                        paginate: {
                            next: "পরবর্তী",
                            previous: "পূর্ববর্তী"
                        },
                        zeroRecords: "কোনো মিল খুঁজে পাওয়া যায়নি"
                    }
                });
            }
        });
    </script>
</body>

</html>
