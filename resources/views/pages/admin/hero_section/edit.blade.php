@extends('layouts.apps')

@section('content')
    <div class="container mx-auto p-6">
        <h3 class="text-xl font-bold mt-10 mb-4">Hero Section Content</h3>

        @if (session('success'))
            <div class="p-3 mb-4 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('hero-section.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block font-semibold">Hero Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $hero->title ?? '') }}"
                    class="border p-2 w-full" />
                @error('title')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="subtitle" class="block font-semibold">Hero Subtitle</label>
                <textarea name="subtitle" id="subtitle" rows="2" class="border p-2 w-full">{{ old('subtitle', $hero->subtitle ?? '') }}</textarea>
                @error('subtitle')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="highlight" class="block font-semibold">Hero Highlight</label>
                <input type="text" name="highlight" id="highlight" value="{{ old('highlight', $hero->highlight ?? '') }}"
                    class="border p-2 w-full" />
                @error('highlight')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div>
                    <label for="register_button_text" class="block font-semibold">Register Button Text</label>
                    <input type="text" name="register_button_text" id="register_button_text"
                        value="{{ old('register_button_text', $hero->register_button_text ?? '') }}"
                        class="border p-2 w-full" />
                    @error('register_button_text')
                        <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="register_button_url" class="block font-semibold">Register Button URL</label>
                    <input type="text" name="register_button_url" id="register_button_url"
                        value="{{ old('register_button_url', $hero->register_button_url ?? '') }}"
                        class="border p-2 w-full" />
                    @error('register_button_url')
                        <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="announcement_button_text" class="block font-semibold">Announcement Button Text</label>
                    <input type="text" name="announcement_button_text" id="announcement_button_text"
                        value="{{ old('announcement_button_text', $hero->announcement_button_text ?? '') }}"
                        class="border p-2 w-full" />
                    @error('announcement_button_text')
                        <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="announcement_button_url" class="block font-semibold">Announcement Button URL</label>
                    <input type="text" name="announcement_button_url" id="announcement_button_url"
                        value="{{ old('announcement_button_url', $hero->announcement_button_url ?? '') }}"
                        class="border p-2 w-full" />
                    @error('announcement_button_url')
                        <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-6">
                <label for="background_image" class="block font-semibold">Hero Background Image</label>
                <input type="file" name="background_image" id="background_image" class="border p-2 w-full" />
                @error('background_image')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror

                @if (!empty($hero->background_image))
                    <div class="mt-2">
                        <img src="{{ asset($hero->background_image) }}" class="w-32 rounded shadow"
                            alt="Hero Background" />
                    </div>
                @endif
            </div>
            <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Save Changes</button>
        </form>
    </div>
@endsection
