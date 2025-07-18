<header class="z-10 py-4 bg-white shadow-md relative">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600">
        <!-- Left: Mobile Hamburger (can be left as-is) -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden" aria-label="Menu">
            <!-- Hamburger Icon -->
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <!-- Center: Search -->
        <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6">
                <input
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple"
                    type="text" placeholder="Search for projects" aria-label="Search" />
            </div>
        </div>

        <!-- Right: Icons -->
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Profile menu -->
            <li class="relative flex items-center justify-center gap-4">
                <a href="{{ route('home') }}" class="flex items-center justify-center text-purple-600 text-3xl" title="visit Website" target="_blank"> <i class="fa-solid fa-globe"></i></a>
                <button id="profileToggleBtn" class="align-middle rounded-full focus:outline-none" aria-label="Account"
                    aria-haspopup="true">
                    <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('assets/logo.png') }}" alt="Profile" />
                </button>

                <!-- Dropdown -->
                <ul id="profileDropdown"
                    class="absolute right-0 hidden w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md z-20"
                    aria-label="submenu">
                    <li class="flex">
                        <a href="#"
                            class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li class="flex">
                        <a href="#"
                            class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Settings
                        </a>
                    </li>
                    <li class="flex">
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit"
                                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                Log out
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- JS to toggle dropdown -->
    <script>
        const toggleBtn = document.getElementById('profileToggleBtn');
        const dropdown = document.getElementById('profileDropdown');

        toggleBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</header>