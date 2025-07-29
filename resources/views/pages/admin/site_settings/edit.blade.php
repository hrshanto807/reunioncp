@extends('layouts.apps')

@section('content')
    <div class="container mx-auto p-6">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Site Settings
        </h2>

        @if (session('success'))
            <div class="bg-green-200 p-3 rounded mb-4 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('site-settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="meta_title" class="block font-semibold">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title"
                    value="{{ old('meta_title', $setting->meta_title ?? '') }}" class="border p-2 w-full" />
                @error('meta_title')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="meta_description" class="block font-semibold">Meta Description</label>
                <textarea name="meta_description" id="meta_description" rows="3" class="border p-2 w-full">{{ old('meta_description', $setting->meta_description ?? '') }}</textarea>
                @error('meta_description')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="favicon" class="block font-semibold">Favicon (PNG, ICO)</label>
                <input type="file" name="favicon" id="favicon" accept=".png,.ico" />
                @error('favicon')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror

                @if (!empty($setting->favicon))
                    <img src="{{ asset($setting->favicon) }}" alt="Favicon" class="w-12 h-12 mt-2" />
                @endif
            </div>

            <div>
                <label for="logo" class="block font-semibold">Logo (PNG, JPG)</label>
                <input type="file" name="logo" id="logo" accept=".png,.jpg,.jpeg" />
                @error('logo')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror

                @if (!empty($setting->logo))
                    <img src="{{ asset($setting->logo) }}" alt="Logo" class="w-32 h-32 mt-2 rounded shadow" />
                @endif
            </div>

            <div>
                <label for="qr_video_url" class="block font-semibold">Payment Tutorial Video Url</label>
                <input type="text" name="qr_video_url" id="qr_video_url"
                    value="{{ old('qr_video_url', $setting->qr_video_url ?? '') }}" class="border p-2 w-full" />
                @error('qr_video_url')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Changes</button>
        </form>
    </div>
@endsection
