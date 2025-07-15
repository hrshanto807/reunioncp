@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section id="" class="hero-bg h-screen flex justify-center items-end">
        <div class="text-center">
            <div class="max-w-6xl mx-auto px-3">
                <h1 class="text-6xl md:text-8xl lg:text-8xl font-black mb-8 leading-none text-white">
                    স্বাগতম পুনর্মিলনী ২০২৬
                </h1>

                <div class="mb-12">
                    <p class="text-xl md:text-2xl lg:text-3xl font-light text-white/90 mb-4">
                        ছাতার পাইয়া বহুমুখী উচ্চ বিদ্যালয়ের সকল প্রাক্তন ও বর্তমান
                    </p>
                    <p class="text-lg md:text-xl text-orange-300 font-medium">
                        শিক্ষার্থীদের জন্য
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-20">
                    <a href="#registration"
                        class="bg-gradient-to-r from-orange-500 via-red-500 to-pink-600 hover:from-orange-600 hover:via-red-600 hover:to-pink-700 text-white px-12 py-4 rounded-full text-lg font-bold transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-user-plus mr-3"></i>
                        এখনই নিবন্ধন করুন
                    </a>
                    <button
                        class="border-2 border-white text-white px-12 py-4 rounded-full text-lg font-bold transition-all duration-300 transform hover:scale-105 hover:bg-white hover:text-gray-900">
                        <i class="fas fa-bullhorn mr-3"></i>
                        সর্বশেষ খোষণা
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Alumni Directory Section -->
    <section id="alumni" class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 text-gradient">প্রাক্তন ছাত্রছাত্রীদের
                    তালিকা</h2>
                <p class="text-xl text-gray-600">আমাদের বিদ্যালয়ের গর্বিত প্রাক্তন শিক্ষার্থীদের খোঁজ দিন</p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>
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
                <div class="alumni-card group" data-name="আমিনুর রহমান" data-batch="2017" data-area="dhaka">
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
                <div class="alumni-card group" data-name="আব্দুর রহিম" data-batch="2021" data-area="sylhet">
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
                <div class="alumni-card group" data-name="তানভীর আহমেদ" data-batch="2019" data-area="dhaka">
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
                <div class="alumni-card group" data-name="নাদিম রহমান" data-batch="2018" data-area="chittagong">
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
                <div class="alumni-card group hidden" data-name="সালমা খাতুন" data-batch="2020" data-area="ward-1">
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
                <div class="alumni-card group hidden" data-name="রফিকুল ইসলাম" data-batch="2016" data-area="cumilla">
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
                <div class="alumni-card group hidden" data-name="ফাতেমা বেগম" data-batch="2022" data-area="ward-2">
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
                <div class="alumni-card group hidden" data-name="মাহবুব আলম" data-batch="2015" data-area="rajshahi">
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
            <!-- Button -->
            <div class="text-center mt-12">
                <a href="{{ route('student') }}" target="_blank"
                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-10 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1">
                    <i class="fas fa-plus-circle mr-2"></i>
                    আরো দেখুন
                </a>
            </div>
        </div>
    </section>
    <!-- Statistics Section -->
    <section id="stats" class="py-8 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-8">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-3 text-gradient">পরিসংখ্যান</h2>
                <p class="text-xl text-gray-600">পুনর্মিলনী সংক্রান্ত সকল গুরুত্বপূর্ণ তথ্য এবং আপডেট</p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <!-- Card 1 -->
                <div class="stats-card group">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg group-hover:shadow-blue-500/30">
                        <i
                            class="fas fa-user text-3xl text-white group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <div class="counter text-5xl font-black text-blue-600 mb-3" data-target="0">0</div>
                    <div class="text-gray-700 font-semibold text-lg">নিবন্ধিত</div>
                    <div class="mt-3 w-full bg-blue-100 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full transition-all duration-1000 ease-out"
                            style="width: 0%"></div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="stats-card group">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg group-hover:shadow-green-500/30">
                        <i
                            class="fas fa-graduation-cap text-3xl text-white group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <div class="counter text-5xl font-black text-green-600 mb-3" data-target="16">0</div>
                    <div class="text-gray-700 font-semibold text-lg">প্রাক্তন ছাত্র</div>
                    <div class="mt-3 w-full bg-green-100 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 h-2 rounded-full transition-all duration-1000 ease-out"
                            style="width: 16%"></div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="stats-card group">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg group-hover:shadow-yellow-500/30">
                        <i
                            class="fas fa-calendar text-3xl text-white group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <div class="counter text-5xl font-black text-orange-600 mb-3" data-target="7">0</div>
                    <div class="text-gray-700 font-semibold text-lg">কার্যক্রম</div>
                    <div class="mt-3 w-full bg-orange-100 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-yellow-500 to-orange-500 h-2 rounded-full transition-all duration-1000 ease-out"
                            style="width: 70%"></div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="stats-card group">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg group-hover:shadow-red-500/30">
                        <i
                            class="fas fa-clock text-3xl text-white group-hover:rotate-12 transition-transform duration-300"></i>
                    </div>
                    <div class="counter text-5xl font-black text-red-600 mb-3" data-target="202">0</div>
                    <div class="text-gray-700 font-semibold text-lg">দিন বাকি</div>
                    <div class="mt-3 w-full bg-red-100 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-red-500 to-pink-600 h-2 rounded-full transition-all duration-1000 ease-out"
                            style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News Section -->
    <section id="news" class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 text-gradient">সর্বশেষ খবর</h2>
                <p class="text-xl text-gray-600">পুনর্মিলনী সংক্রান্ত সকল গুরুত্বপূর্ণ তথ্য এবং আপডেট</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-4 rounded-full"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="news-card group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-pink-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-exclamation text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-red-100 text-red-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">গুরুত্বপূর্ণ</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-600 transition-colors duration-300">
                        নিবন্ধনের শেষ তারিখ বর্ধিত</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">পুনর্মিলনী নিবন্ধনের শেষ তারিখ ১৫ ডিসেম্বর
                        পর্যন্ত বৃদ্ধি করা হয়েছে। আগ্রহী সকলেই এই সুযোগের সদ্ব্যবহার করুন।</p>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('newsDetails1') }}" target="_blank"
                            class="inline-flex items-center text-red-600 font-semibold text-sm hover:text-red-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
                <!-- News Card 2 -->
                <div class="news-card group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-info text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-blue-100 text-blue-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">তথ্য</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                        কার্যক্রমের সময়সূচী প্রকাশ</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">পুনর্মিলনী কার্যক্রমের বিস্তারিত সময়সূচী
                        প্রকাশিত হয়েছে। সকাল ৯টা থেকে রাত ১০টা পর্যন্ত বিভিন্ন কার্যক্রম থাকবে।</p>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('newsDetails2') }}" target="_blank"
                            class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
                <!-- News Card 3 -->
                <div class="news-card group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-500"></div>

                    <div class="flex items-start space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <i
                                class="fas fa-map-marker-alt text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="flex-1">
                            <span
                                class="inline-block bg-green-100 text-green-700 font-semibold text-xs px-3 py-1 rounded-full mb-1">স্থান</span>
                            <div class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                ১ দিন আগে
                            </div>
                        </div>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">
                        অনুষ্ঠানের স্থান নির্ধারণ</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">মূল অনুষ্ঠান মূল প্রাঙ্গনে এবং সাংস্কৃতিক
                        অনুষ্ঠান স্বাধীন কমিউনিটি সেন্টারে অনুষ্ঠিত হবে।</p>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('newsDetails3') }}" target="_blank"
                            class="inline-flex items-center text-green-600 font-semibold text-sm hover:text-green-700 transition-colors group-hover:translate-x-2 transition-transform duration-300">
                            বিস্তারিত পড়ুন
                            <i
                                class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <button class="hover:text-red-500 transition-colors"><i class="fas fa-heart"></i></button>
                            <button class="hover:text-blue-500 transition-colors"><i class="fas fa-share"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('news') }}" target="_blank"
                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-10 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1">
                    <i class="fas fa-newspaper mr-2"></i> সব খবর দেখুন </a>
            </div>
        </div>
    </section>
    <!-- Registration Section -->
    <section id="registration" class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 text-gradient">পুনর্মিলনীর জন্য নিবন্ধন
                </h2>
                <p class="text-xl text-gray-600">আমাদের সাথে আপনার বিবরণ পূরণ করুন এবং পুনর্মিলনীতে অংশগ্রহণ নিশ্চিত
                    করুন</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mt-4 rounded-full"></div>
            </div>
            @if (session('success'))
                <div class="mb-4 text-center p-4 bg-green-100 text-green-800 rounded">
                    <h3> {{ session('success') }}</h3>
                </div>
            @endif

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="text-center mb-8">
                    <h4 class="text-xl font-bold text-red-500 mb-4">
                        আপনার বিবরণ পূরণ করার পুর্বে বিকাশ থেকে সেন্ড মানি/ক্যাশ আউট নিশ্চিত করুন
                    </h4>
                </div>
                <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Participation --}}
                    <div class="mb-8">
                        {{-- <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                                <i class="fas fa-users text-orange-600 mr-3"></i> অংশগ্রহণের তথ্য
                            </h3> --}}
                        <div class="space-y-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-3">আপনি কি একাই রেজিস্ট্রেশন
                                    করতে চান?
                                    <span class="text-red-500">*</span></label>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-2">
                                    <label for="radioSingle"
                                        class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors space-x-3">
                                        <input type="radio" name="registration_type" value="single" id="radioSingle"
                                            class="w-5 h-5 text-blue-600"
                                            {{ old('registration_type') == 'single' ? 'checked' : '' }}>
                                        <div>
                                            <span class="font-semibold">👤 হ্যাঁ, একাই</span>
                                            <p class="text-sm text-gray-500">শুধুমাত্র আমার নিবন্ধন</p>
                                        </div>
                                    </label>

                                    <label for="radioGroup"
                                        class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors space-x-3">
                                        <input type="radio" name="registration_type" value="group" id="radioGroup"
                                            class="w-5 h-5 text-blue-600"
                                            {{ old('registration_type') == 'group' ? 'checked' : '' }}>
                                        <div>
                                            <span class="font-semibold">👥 না, সবার জন্য</span>
                                            <p class="text-sm text-gray-500">পরিবার/বন্ধুদের সাথে</p>
                                        </div>
                                    </label>
                                </div>
                                @error('registration_type')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="groupSelectWrapper"
                                class="mb-6 {{ old('registration_type') == 'group' ? '' : 'hidden' }}">
                                <label class="block text-gray-700 font-semibold mb-2">আপনি সহ কতজন অংশগ্রহণ করতে
                                    চান? <span class="text-red-500">*</span></label>
                                <select id="participantCount" name="participant_count" class="form-input">
                                    <option value="">অংশগ্রহণকারী সংখ্যা নির্বাচন করুন</option>
                                    @for ($i = 2; $i <= 6; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('participant_count') == $i ? 'selected' : '' }}>
                                            {{ $i }} জন
                                            (আমি + {{ $i - 1 }} জন)</option>
                                    @endfor
                                </select>
                                @error('participant_count')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- Payment Info --}}
                    <div
                        class="bg-gradient-to-br from-green-50 to-emerald-50  mb-6 p-6 rounded-xl border border-green-200">
                        <h3 class="text-xl font-bold text-green-800 mb-6 flex items-center">
                            <i class="fas fa-credit-card text-green-600 mr-3"></i> পেমেন্ট তথ্য
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">পেমেন্ট পদ্ধতি <span
                                        class="text-red-500">*</span></label>
                                <select name="payment_method" class="form-input">
                                    <option value="">পেমেন্ট মাধ্যম নির্বাচন করুন</option>
                                    <option value="bkash Agent"
                                        {{ old('payment_method') == 'bkash Agent' ? 'selected' : '' }}>
                                        🟣 বিকাশ (Agent)
                                    </option>
                                    <option value="bkash personal"
                                        {{ old('payment_method') == 'bkash personal' ? 'selected' : '' }}>
                                        🟣 বিকাশ (Personal)
                                    </option>
                                </select>
                                @error('payment_method')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">মোট পেমেন্ট (টাকা) <span
                                        class="text-red-500">*</span></label>
                                <input type="text" id="totalAmount" name="amount" class="form-input bg-gray-100"
                                    value="{{ old('amount', '০') }}" readonly>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    যে নম্বর থেকে পেমেন্ট করেছেন <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" name ="bkash_num" value="{{ old('bkash_num') }}"
                                    class="form-input" placeholder="০১৭xxxxxxxx">
                                @error('bkash_num')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    Transaction ID <span class="text-red-500">*</span>
                                </label>
                                <input type="text" class="form-input" name="bkash_trans_id"
                                    value="{{ old('bkash_trans_id') }}" placeholder="যেমন: BKH123ABC789">
                                @error('bkash_trans_id')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                            <h4 class="font-semibold text-blue-800 mb-2 flex items-center">
                                <i class="fas fa-info-circle mr-2"></i> পেমেন্ট নির্দেশনা
                            </h4>
                            <p class="text-sm text-blue-700 space-y-1">• বিকাশ: <strong>+৮৮০ ১৭০০০০০০</strong>
                                (Personal)</p>
                        </div>
                    </div>
                    {{-- Personal Info --}}
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-user text-blue-600 mr-3"></i> ব্যক্তিগত তথ্য
                        </h3>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">পূর্ণ নাম <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="name" class="form-input" value="{{ old('name') }}"
                                    placeholder="যেমন: মোহাম্মদ আব্দুল করিম">
                                @error('name')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">ব্যাচ/পাশের বছর <span
                                        class="text-red-500">*</span></label>
                                <select name="batch" class="form-input">
                                    <option value="">বছর নির্বাচন করুন</option>
                                    @for ($year = 2025; $year >= 1964; $year--)
                                        <option value="{{ $year }}"
                                            {{ old('batch') == $year ? 'selected' : '' }}>
                                            {{ $year }}</option>
                                    @endfor
                                </select>
                                @error('batch')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">পিতার নাম <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="father_name" class="form-input"
                                    value="{{ old('father_name') }}">
                                @error('father_name')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">রক্তের গ্রুপ <span
                                        class="text-red-500">*</span></label>
                                <select name="blood" class="form-input">
                                    <option value="">রক্তের গ্রুপ নির্বাচন করুন</option>
                                    @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $group)
                                        <option value="{{ $group }}"
                                            {{ old('blood') == $group ? 'selected' : '' }}>🩸 {{ $group }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('blood')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="grid md:grid-cols-1 gap-6 mt-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">ছবি আপলোড <span
                                        class="text-red-500">*</span></label>
                                <input type="file" name="photo" class="form-input">
                                @error('photo')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label class="block text-gray-700 font-semibold mb-2">টিশার্ট সাইজ <span
                                    class="text-red-500">*</span></label>
                            <div class="grid grid-cols-2 md:grid-cols-6 gap-3">
                                @foreach (['S', 'M', 'L', 'XL', 'XXL', 'XXXL'] as $size)
                                    <label
                                        class="flex items-center justify-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors">
                                        <input type="radio" name="tshirt" value="{{ $size }}"
                                            class="sr-only" {{ old('tshirt') == $size ? 'checked' : '' }}>
                                        <span class="font-semibold">👕 {{ $size }}</span>
                                    </label>
                                @endforeach
                            </div>
                            @error('tshirt')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- Contact Info --}}
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-phone text-purple-600 mr-3"></i> যোগাযোগের তথ্য
                        </h3>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">মোবাইল নম্বর <span
                                        class="text-red-500">*</span></label>
                                <input type="tel" name="phone" class="form-input" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">ইমেইল ঠিকানা</label>
                                <input type="email" name="email" class="form-input" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="mt-6">
                            <label class="block text-gray-700 font-semibold mb-2">পেশা</label>
                            <input type="text" name="profession" class="form-input" value="{{ old('profession') }}">
                        </div>
                    </div>
                    {{-- Address --}}
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-map-marker-alt text-red-600 mr-3"></i> ঠিকানার তথ্য
                        </h3>

                        <div class="space-y-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">বর্তমান ঠিকানা <span
                                        class="text-red-500">*</span></label>
                                <textarea name="present_address" class="form-input h-20">{{ old('present_address') }}</textarea>
                                @error('present_address')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">স্থায়ী ঠিকানা <span
                                        class="text-red-500">*</span></label>
                                <textarea name="permanent_address" class="form-input h-20">{{ old('permanent_address') }}</textarea>
                                @error('permanent_address')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- Representative --}}
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-user-friends text-green-600 mr-3"></i> প্রতিনিধি তথ্য
                        </h3>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">প্রতিনিধির নাম (যদি আপনি আসতে না
                                পারেন)</label>
                            <input type="text" name="representative_name" class="form-input"
                                value="{{ old('representative_name') }}">
                        </div>
                    </div>
                    {{-- Terms --}}
                    <div class="flex items-start space-x-3 p-4 bg-gray-50 rounded-lg">
                        <input type="checkbox" id="terms" name="terms_agreed" class="w-5 h-5 mt-1 text-blue-600">
                        <label for="terms" class="text-gray-700 leading-relaxed cursor-pointer">
                            আমি <span class="text-red-500">*</span>
                            <strong>
                                <span class="underline text-blue-600 cursor-pointer"
                                    onclick="event.stopPropagation(); openRulesModal();">
                                    পুনর্মিলনী নিয়মাবলী
                                </span>
                            </strong>
                            পড়েছি এবং সম্মত হয়েছি। আমি নিশ্চিত করছি যে প্রদত্ত সকল তথ্য সঠিক এবং সত্য।
                        </label>
                    </div>
                    @error('terms_agreed')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <i class="fas fa-check-circle mr-2"></i>
                        নিবন্ধন সম্পন্ন করুন
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- Events Schedule Section -->
    <section id="events" class="py-16 bg-purple-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">কার্যক্রমের সময়সূচী</h2>
                <p class="text-xl text-gray-600">পুনর্মিলনী দিনের প্রতিটি মুহূর্তের বিস্তারিত তথ্য</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="schedule-item">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-sm text-purple-600 font-semibold">০৮.০০ AM</span>
                                <h3 class="text-lg font-bold text-gray-900">নিবন্ধন ও অভ্যর্থনা</h3>
                            </div>
                            <span class="text-xs text-gray-500">০৯.০০ AM</span>
                        </div>
                        <p class="text-gray-600 text-sm">অতিথি বারণ্ডাসহ সকালের চা ও নাস্তা পরিবেশন</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="schedule-item">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-sm text-purple-600 font-semibold">১০.০০ AM</span>
                                <h3 class="text-lg font-bold text-gray-900">উদ্বোধনী অনুষ্ঠান</h3>
                            </div>
                            <span class="text-xs text-gray-500">১১.৩০ AM</span>
                        </div>
                        <p class="text-gray-600 text-sm">প্রধান অতিথি বক্তব্য ও পুরনো স্মৃতির আলোচনা</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="schedule-item">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-sm text-purple-600 font-semibold">১২.০০ PM</span>
                                <h3 class="text-lg font-bold text-gray-900">দুপুরের খাবার</h3>
                            </div>
                            <span class="text-xs text-gray-500">০২.০০ PM</span>
                        </div>
                        <p class="text-gray-600 text-sm">ঐতিহ্যবাহী দুপুরের খাবার ও আড্ডার আয়োজন</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="schedule-item">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-sm text-purple-600 font-semibold">০৩.০০ PM</span>
                                <h3 class="text-lg font-bold text-gray-900">সাংস্কৃতিক অনুষ্ঠান</h3>
                            </div>
                            <span class="text-xs text-gray-500">০৬.০০ PM</span>
                        </div>
                        <p class="text-gray-600 text-sm">গান, কবিতা, নাটক ও বিনোদনমূলক পরিবেশনা</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="schedule-item">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-sm text-purple-600 font-semibold">০৮.০০ PM</span>
                                <h3 class="text-lg font-bold text-gray-900">সন্ধ্যা নাস্তা</h3>
                            </div>
                            <span class="text-xs text-gray-500">০৯.০০ PM</span>
                        </div>
                        <p class="text-gray-600 text-sm">হালকা নাস্তা ও পানীয় পরিবেশন</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="schedule-item">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-sm text-purple-600 font-semibold">১০.০০ PM</span>
                                <h3 class="text-lg font-bold text-gray-900">সমাপনী অনুষ্ঠান</h3>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm">বিদায়ী বক্তব্য ও পরবর্তী পুনর্মিলনীর ঘোষণা</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <p class="text-gray-600 italic">সময়সূচী পরিবর্তনের অধিকার আয়োজক কর্তৃপক্ষ সংরক্ষণ করেন</p>
            </div>
        </div>
    </section>
    <!-- Financial Summary Section -->
    <section id="financial" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">আর্থিক অবস্থা</h2>
                <p class="text-xl text-gray-600">পুনর্মিলনী আয়োজনের আর্থিক হিসাব ও তথ্য</p>
            </div>
            <!-- Summary Cards -->
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-green-50 p-8 rounded-2xl text-center border border-green-200">
                    <div class="text-sm text-green-600 mb-2">মোট আয়</div>
                    <div class="text-4xl font-bold text-green-600 mb-2">১,৬০,০০০</div>
                    <div class="text-sm text-green-600">টাকা</div>
                </div>

                <div class="bg-red-50 p-8 rounded-2xl text-center border border-red-200">
                    <div class="text-sm text-red-600 mb-2">মোট ব্যয়</div>
                    <div class="text-4xl font-bold text-red-600 mb-2">১,৩৫,৩০০</div>
                    <div class="text-sm text-red-600">টাকা</div>
                </div>

                <div class="bg-blue-50 p-8 rounded-2xl text-center border border-blue-200">
                    <div class="text-sm text-blue-600 mb-2">উদ্বৃত্ত</div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">৫৭০০</div>
                    <div class="text-sm text-blue-600">টাকা</div>
                </div>
            </div>
            <!-- Toggle Button -->
            <div class="text-center mb-8">
                <a href="{{ route('account') }}" target="_blank"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    <i class="fas fa-chart-bar mr-2"></i>
                    বিস্তারিত দেখুন
                </a>
            </div>

        </div>
    </section>
    <!-- images carusel -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">অনুষ্ঠানের স্পনসর</h2>
                <p class="text-xl text-gray-600">
                    আমাদের পুনর্মিলনীতে যারা স্পনসর হিসেবে যুক্ত হয়েছে, সেইসব প্রতিষ্ঠানকে আন্তরিক ধন্যবাদ
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mt-4 rounded-full"></div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper mt-12">
                <div class="swiper-wrapper h-32">
                    <!-- Repeat a few times for smooth loop -->
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center"><img class="rounded-2xl"
                            src="{{ asset('assets/images/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-purple-900 to-blue-900 text-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">যোগাযোগ করুন</h2>
                <p class="text-xl text-purple-100">প্রয়োজনে আমাদের সাথে যোগাযোগ করুন এবং দ্রুত সহায়তা পান</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="contact-card bg-white/10 backdrop-blur-lg border border-white/20">
                        <div class="contact-icon bg-gradient-to-br from-blue-500 to-purple-600">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">প্রধান যোগাযোগ</h3>
                        <p class="text-purple-100">+৮৮০ ১৭০০০০০০</p>
                    </div>

                    <div class="contact-card bg-white/10 backdrop-blur-lg border border-white/20">
                        <div class="contact-icon bg-gradient-to-br from-green-500 to-teal-600">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">ইমেইল ঠিকানা</h3>
                        <p class="text-purple-100">info@reunion.com</p>
                    </div>

                    <div class="contact-card bg-white/10 backdrop-blur-lg border border-white/20">
                        <div class="contact-icon bg-gradient-to-br from-orange-500 to-red-600">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">বিদ্যালয়ের ঠিকানা</h3>
                        <p class="text-purple-100">ছাতারপাইয়া, সেনবাগ, নোয়াখালী, বাংলাদেশ সদর, কুমিল্লা</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">বার্তা পাঠান</h3>
                    <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                        @csrf
                        <div>
                            <input name="contact_name" type="text"
                                class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-purple-200"
                                placeholder="আপনার নাম" value="{{ old('contact_name') }}">
                            @error('contact_name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input name="contact_email" type="email"
                                class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-purple-200"
                                placeholder="ইমেইল ঠিকানা" value="{{ old('contact_email') }}">
                            @error('contact_email')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input name="contact_phone" type="tel"
                                class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-purple-200"
                                placeholder="মোবাইল নম্বর" value="{{ old('contact_phone') }}">
                            @error('contact_phone')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <textarea name="contact_message"
                                class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-purple-200 h-32"
                                placeholder="আপনার বার্তা লিখুন">{{ old('contact_message') }}</textarea>
                            @error('contact_message')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white py-3 rounded-lg font-bold transition-all duration-300">
                            <i class="fas fa-paper-plane mr-2"></i>
                            বার্তা পাঠান
                        </button>
                    </form>
                    @if (session('success'))
                        <div class="mb-4 text-center p-4 bg-green-100 text-green-800 rounded">
                            <h3> {{ session('success') }}</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if ($errors->any())
            const el = document.querySelector("#registration");
            if (el) {
                el.scrollIntoView({
                    behavior: "smooth"
                });
            }
        @endif
    });
    document.addEventListener("DOMContentLoaded", function() {
        @if ($errors->any())
            const el = document.querySelector("#contact");
            if (el) {
                el.scrollIntoView({
                    behavior: "smooth"
                });
            }
        @endif
    });
</script>
