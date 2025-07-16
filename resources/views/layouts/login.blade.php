<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Reunion Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <!-- Image section -->
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full" src="{{ asset('assets/banner.webp') }}"
                        alt="Login Banner" />
                </div>
                <!-- Form section -->
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700">Login</h1>

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <label class="block text-sm">
                                <span class="text-gray-700">Email</span>
                                <input name="email" type="email" value="{{ old('email') }}" required class="block w-full mt-1 text-sm
                         focus:border-purple-400 focus:outline-none focus:shadow-outline-purple
                         form-input
                         @error('email') border-red-500 @enderror" placeholder="you@example.com" />
                                @error('email')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </label>

                            <!-- Password -->
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700">Password</span>
                                <input name="password" type="password" required class="block w-full mt-1 text-sm
                         focus:border-purple-400 focus:outline-none focus:shadow-outline-purple
                         form-input
                         @error('password') border-red-500 @enderror" placeholder="••••••••••••" />
                                @error('password')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </label>

                            <!-- Submit Button -->
                            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white
                       transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg
                       active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Log in
                            </button>

                            <!-- Errors -->
                            @if ($errors->has('email') || $errors->has('password'))
                                <div class="mt-4 text-sm text-red-600">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                        </form>

                        <hr class="my-8" />
                        <div class="flex items-center justify-center space-x-4">
                            <span
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white bg-purple-600 border border-transparent rounded-md hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Eamil:: info@reunion.com
                            </span>
                            <span
                                class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white bg-purple-600 border border-transparent rounded-md hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                pass:: Reunion@
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>