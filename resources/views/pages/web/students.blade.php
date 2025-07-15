@extends('layouts.app');
@section('content')
    <!-- Hero Section -->
    <section class="hero-bg size-auto pt-32 flex justify-center items-center">
        <div class="text-center">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-gradient">প্রাক্তন ছাত্রছাত্রীদের
                    তালিকা</h2>
                <p class="text-xl text-white">আমাদের বিদ্যালয়ের গর্বিত প্রাক্তন শিক্ষার্থীদের খোঁজ দিন</p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>
        </div>
    </section>
    <!-- Alumni Directory Section -->
    <section id="alumni" class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Search Filters -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2 flex items-center">
                        <i class="fas fa-search text-blue-600 mr-2"></i>
                        নাম দিয়ে খুঁজুন
                    </label>
                    <input type="text" id="nameSearch" class="form-input" placeholder="যেমন: মোহাম্মদ আব্দুল করিম">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2 flex items-center">
                        <i class="fas fa-graduation-cap text-green-600 mr-2"></i>
                        ব্যাচ/সাল
                    </label>
                    <select id="batchFilter" class="form-input">
                        <option value="">সব ব্যাচ</option>
                        <option value="2025">২০২৫</option>
                        <option value="2024">২০২৪</option>
                        <option value="2023">২০২৩</option>
                        <option value="2022">২০২২</option>
                        <option value="2021">২০২১</option>
                        <option value="2020">২০২০</option>
                        <option value="2019">২০১৯</option>
                        <option value="2018">২০১৮</option>
                        <option value="2017">২০১৭</option>
                        <option value="2016">২০১৬</option>
                        <option value="2015">২০১৫</option>
                        <option value="2014">২০১৪</option>
                        <option value="2013">২০১৩</option>
                        <option value="2012">২০১২</option>
                        <option value="2011">২০১১</option>
                        <option value="2010">২০১০</option>
                        <option value="2009">২০০৯</option>
                        <option value="2008">২০০৮</option>
                        <option value="2007">২০০৭</option>
                        <option value="2006">২০০৬</option>
                        <option value="2005">২০০৫</option>
                        <option value="2004">২০০৪</option>
                        <option value="2003">২০০৩</option>
                        <option value="2002">২০০২</option>
                        <option value="2001">২০০১</option>
                        <option value="2000">২০০০</option>
                        <option value="1999">১৯৯৯</option>
                        <option value="1998">১৯৯৮</option>
                        <option value="1997">১৯৯৭</option>
                        <option value="1996">১৯৯৬</option>
                        <option value="1995">১৯৯৫</option>
                        <option value="1994">১৯৯৪</option>
                        <option value="1993">১৯৯৩</option>
                        <option value="1992">১৯৯২</option>
                        <option value="1991">১৯৯১</option>
                        <option value="1990">১৯৯০</option>
                        <option value="1989">১৯৮৯</option>
                        <option value="1988">১৯৮৮</option>
                        <option value="1987">১৯৮৭</option>
                        <option value="1986">১৯৮৬</option>
                        <option value="1985">১৯৮৫</option>
                        <option value="1984">১৯৮৪</option>
                        <option value="1983">১৯৮৩</option>
                        <option value="1982">১৯৮২</option>
                        <option value="1981">১৯৮১</option>
                        <option value="1980">১৯৮০</option>
                        <option value="1979">১৯৭৯</option>
                        <option value="1978">১৯৭৮</option>
                        <option value="1977">১৯৭৭</option>
                        <option value="1976">১৯৭৬</option>
                        <option value="1975">১৯৭৫</option>
                        <option value="1974">১৯৭৪</option>
                        <option value="1973">১৯৭৩</option>
                        <option value="1972">১৯৭২</option>
                        <option value="1971">১৯৭১</option>
                        <option value="1970">১৯৭০</option>
                        <option value="1969">১৯৬৯</option>
                        <option value="1968">১৯৬৮</option>
                        <option value="1967">১৯৬৭</option>
                        <option value="1966">১৯৬৬</option>
                        <option value="1965">১৯৬৫</option>
                        <option value="1964">১৯৬৪</option>
                    </select>
                </div>

            </div>
            <!-- Alumni Cards Container -->
            <div id="alumniContainer" class="grid md:grid-cols-4 gap-6">
                <!-- Alumni Card 1 -->
                <div class="alumni-card show_more group" data-name="আমিনুর রহমান" data-batch="2017" data-area="dhaka">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">আমিনুর রহমান</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৭</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>বিজ্ঞান</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>ঢাকা, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            B+
                        </span>
                    </div>
                </div>
                <!-- Alumni Card 2 -->
                <div class="alumni-card show_more group" data-name="আব্দুর রহিম" data-batch="2021" data-area="sylhet">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">আব্দুর রহিম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০২১</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>মানবিক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>সিলেট, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            A+
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 3 -->
                <div class="alumni-card show_more group" data-name="তানভীর আহমেদ" data-batch="2019" data-area="dhaka">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">তানভীর আহমেদ</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৯</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>ব্যবসায়িক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>ঢাকা, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            O+
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 4 -->
                <div class="alumni-card show_more group" data-name="নাদিম রহমান" data-batch="2018"
                    data-area="chittagong">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-purple-500 to-violet-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">নাদিম রহমান</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৮</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>বিজ্ঞান</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>চট্টগ্রাম, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            AB+
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 5 -->
                <div class="alumni-card show_more group hidden" data-name="সালমা খাতুন" data-batch="2020"
                    data-area="ward-1">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">সালমা খাতুন</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০২০</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>মানবিক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>ছাতার পাইয়া কেন্দ্র</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            B-
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 6 -->
                <div class="alumni-card show_more group hidden" data-name="রফিকুল ইসলাম" data-batch="2016"
                    data-area="cumilla">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">রফিকুল ইসলাম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৬</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>বিজ্ঞান</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>কুমিল্লা সদর</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            O-
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 7 -->
                <div class="alumni-card show_more group hidden" data-name="ফাতেমা বেগম" data-batch="2022"
                    data-area="ward-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">ফাতেমা বেগম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০২২</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>ব্যবসায়িক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>পূর্ব ছাতার পাইয়া</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            AB-
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 8 -->
                <div class="alumni-card show_more group hidden" data-name="মাহবুব আলম" data-batch="2015"
                    data-area="rajshahi">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">মাহবুব আলম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৫</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>মানবিক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>রাজশাহী</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            A-
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 1 -->
                <div class="alumni-card show_more group" data-name="আমিনুর রহমান" data-batch="2017" data-area="dhaka">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">আমিনুর রহমান</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৭</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>বিজ্ঞান</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>ঢাকা, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            B+
                        </span>
                    </div>
                </div>
                <!-- Alumni Card 2 -->
                <div class="alumni-card show_more group" data-name="আব্দুর রহিম" data-batch="2021" data-area="sylhet">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">আব্দুর রহিম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০২১</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>মানবিক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>সিলেট, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            A+
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 3 -->
                <div class="alumni-card show_more group" data-name="তানভীর আহমেদ" data-batch="2019" data-area="dhaka">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">তানভীর আহমেদ</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৯</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>ব্যবসায়িক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>ঢাকা, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            O+
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 4 -->
                <div class="alumni-card show_more group" data-name="নাদিম রহমান" data-batch="2018"
                    data-area="chittagong">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-purple-500 to-violet-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">নাদিম রহমান</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৮</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>বিজ্ঞান</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>চট্টগ্রাম, বাংলাদেশ</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            AB+
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 5 -->
                <div class="alumni-card show_more group hidden" data-name="সালমা খাতুন" data-batch="2020"
                    data-area="ward-1">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">সালমা খাতুন</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০২০</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>মানবিক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>ছাতার পাইয়া কেন্দ্র</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            B-
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 6 -->
                <div class="alumni-card show_more group hidden" data-name="রফিকুল ইসলাম" data-batch="2016"
                    data-area="cumilla">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">রফিকুল ইসলাম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৬</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>বিজ্ঞান</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>কুমিল্লা সদর</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            O-
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 7 -->
                <div class="alumni-card show_more group hidden" data-name="ফাতেমা বেগম" data-batch="2022"
                    data-area="ward-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">ফাতেমা বেগম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০২২</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>ব্যবসায়িক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>পূর্ব ছাতার পাইয়া</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            AB-
                        </span>
                    </div>
                </div>

                <!-- Alumni Card 8 -->
                <div class="alumni-card show_more group hidden" data-name="মাহবুব আলম" data-batch="2015"
                    data-area="rajshahi">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                        <i
                            class="fas fa-user text-white text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">মাহবুব আলম</h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            <span>ব্যাচ: ২০১৫</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            <span>মানবিক</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-red-500 mr-2"></i>
                            <span>রাজশাহী</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mb-4">
                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                            <i class="fas fa-tint mr-1"></i>
                            A-
                        </span>
                    </div>
                </div>
            </div>
            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button id="loadMoreBtn" onclick="loadMoreAlumni()"
                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-10 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1">
                    <i class="fas fa-plus-circle mr-2"></i>
                    আরও দেখুন
                </button>
            </div>
        </div>
    </section>
@endsection
