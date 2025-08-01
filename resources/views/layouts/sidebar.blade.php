<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
        <div>
            <a href="{{ route('dashboard') }}" class="flex items-center pl-4">
                <img class="h-20 w-20 rounded-full"
                    src="{{ $setting && $setting->logo ? asset($setting->logo) : asset('assets/logo.png') }}"
                    alt="">
            </a>
        </div>
        {{-- dashboard --}}
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @if (Request::is('dashboard'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 
        {{ Request::is('dashboard') ? 'text-gray-800' : 'text-gray-500' }} hover:text-gray-800"
                    href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>

            {{-- news --}}
            <li class="relative px-6 py-3">
                @if (Request::is('blogs*') || Request::is('news_categories*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif

                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 
        {{ Request::is('blogs*') || Request::is('news_categories*') ? 'text-gray-800' : 'text-gray-500' }} hover:text-gray-800"
                    @click="toggleNewsMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="ml-4">News</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <template
                    x-if="isNewsMenuOpen || {{ Request::is('blogs*') || Request::is('news_categories*') ? 'true' : 'false' }}">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="{{ route('blogs.index') }}">News List</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="{{ route('news_categories.index') }}">Category List</a>
                        </li>
                    </ul>
                </template>
            </li>

            {{-- sutdents --}}
            <li class="relative px-6 py-3">
                @if (Request::is('studentList') || Request::is('students*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 
        {{ Request::is('studentList') || Request::is('students*') ? 'text-gray-800' : 'text-gray-500' }} hover:text-gray-800"
                    href="{{ route('students') }}">
                    <i class="fa-solid fa-user-nurse"></i>
                    <span class="ml-4">Students</span>
                </a>
            </li>

            {{-- accounts --}}
            {{-- Accounts --}}
            <li class="relative px-6 py-3">
                @if (Request::is('donations*') || Request::is('account*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 
    {{ Request::is('donations*') || Request::is('account*') ? 'text-gray-800' : 'text-gray-500' }} hover:text-gray-800"
                    @click="toggleAccountMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        <span class="ml-4">Accounts</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template
                    x-if="isAccountsMenuOpen || {{ Request::is('donations*') || Request::is('account*') ? 'true' : 'false' }}">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="#">Account List</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="{{ route('donate.index') }}">Donation List</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/category-list.html">Sponser List</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/category-list.html">Registration List</a>
                        </li>
                    </ul>
                </template>
            </li>
            {{-- Expenses --}}
            <li class="relative px-6 py-3">
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    @click="toggleExpenseMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-money-check"></i>
                        <span class="ml-4">Expenses</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isExpenseMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/news-list.html">Expense List</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/category-list.html">Category List</a>
                        </li>
                    </ul>
                </template>
            </li>
            {{-- reports --}}
            <li class="relative px-6 py-3">
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    @click="toggleReportMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <i class="fa-solid fa-file-invoice"></i>
                        <span class="ml-4">Reports</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isReportMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/category-list.html">Expence</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/category-list.html">Account</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/category-list.html">sutdents</a>
                        </li>
                    </ul>
                </template>
            </li>
            {{-- cms --}}
            {{-- CMS --}}
            <li class="relative px-6 py-3">
                @if (Request::is('hero-section*') || Request::is('sponsors*') || Request::is('pages*'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150
        {{ Request::is('hero-section*') || Request::is('sponsors*') || Request::is('pages*') ? 'text-gray-800' : 'text-gray-500' }} hover:text-gray-800"
                    @click="toggleCMSMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                        <span class="ml-4">CMS</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template
                    x-if="isCMSMenuOpen || {{ Request::is('hero-section*') || Request::is('sponsors*') || Request::is('pages*') ? 'true' : 'false' }}">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="{{ route('hero-section.edit') }}">Hero Section</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="{{ route('sponsors.index') }}">Sponsors</a>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/contact-us.html">Contact Us</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/footer.html">Footer</a>
                        </li>
                    </ul>
                </template>
            </li>
            {{-- Setting --}}
            <li class="relative px-6 py-3">
                @if (Request::is('site-settings.edit'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 
        {{ Request::is('site-settings.edit') ? 'text-gray-800' : 'text-gray-500' }} hover:text-gray-800"
                    href="{{ route('site-settings.edit') }}">
                    <i class="fa-solid fa-gear"></i>
                    <span class="ml-4">Setting</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            Windmill
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="index.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    href="forms.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                    <span class="ml-4">Forms</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    href="cards.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    <span class="ml-4">Cards</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    href="charts.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    <span class="ml-4">Charts</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    href="buttons.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                        </path>
                    </svg>
                    <span class="ml-4">Buttons</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    href="modals.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span class="ml-4">Modals</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    href="tables.html">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Tables</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                    @click="togglePagesMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                        <span class="ml-4">Pages</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/login.html">Login</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/create-account.html">
                                Create account
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/forgot-password.html">
                                Forgot password
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/404.html">404</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                            <a class="w-full" href="pages/blank.html">Blank</a>
                        </li>
                    </ul>
                </template>
            </li>
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>
    </div>
</aside>
