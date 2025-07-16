@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-bg size-auto pt-32 flex justify-center items-center">
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-gradient">প্রাক্তন ছাত্রছাত্রীদের তালিকা</h2>
        <p class="text-xl text-white">আমাদের বিদ্যালয়ের গর্বিত প্রাক্তন শিক্ষার্থীদের খোঁজ দিন</p>
        <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto mt-4 rounded-full"></div>
    </div>
</section>

<!-- Alumni Directory Section -->
<section id="alumni" class="py-16 bg-gradient-to-br from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Search Filters -->
        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <div>
                <label class="block text-gray-700 font-semibold mb-2 flex items-center">
                    <i class="fas fa-search text-blue-600 mr-2"></i> নাম দিয়ে খুঁজুন
                </label>
                <input type="text" id="nameSearch" class="form-input w-full" placeholder="যেমন: মোহাম্মদ আব্দুল করিম">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2 flex items-center">
                    <i class="fas fa-graduation-cap text-green-600 mr-2"></i> ব্যাচ/সাল
                </label>
                <select name="batch" class="form-input w-full">
                    <option value="">বছর নির্বাচন করুন</option>
                    @for ($year = 2025; $year >= 1964; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <!-- Alumni Cards -->
        <div id="alumniContainer" class="grid md:grid-cols-4 gap-6">
            @foreach($alumni as $student)
            <div class="alumni-card group" data-name="{{ $student->name }}" data-batch="{{ $student->batch }}">
                <div class="w-20 h-20 rounded-2xl overflow-hidden mx-auto mb-4 shadow-lg group-hover:scale-110 transition-all duration-300">
                    <img src="{{ asset($student->photo ?? 'images/default.jpg') }}" alt="{{ $student->name }}" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-gray-900 mb-3 text-lg text-center">{{ $student->name }}</h3>
                <div class="space-y-2 mb-4 text-sm text-gray-600 text-center">
                    <div><i class="fas fa-graduation-cap text-blue-500 mr-1"></i> ব্যাচ: {{ $student->batch }}</div>
                    <div><i class="fas fa-book text-green-500 mr-1"></i> {{ $student->profession ?? 'অজানা' }}</div>
                    <div><i class="fas fa-map-marker-alt text-red-500 mr-1"></i> {{ $student->present_address ?? 'ঠিকানা নেই' }}</div>
                </div>
                <div class="flex justify-center">
                    <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full">
                        <i class="fas fa-tint mr-1"></i> {{ $student->blood }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="text-center mt-12">
            {{ $alumni->links('pagination::tailwind') }}
        </div>
    </div>
</section>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
    const nameInput = document.getElementById('nameSearch');
    const batchSelect = document.querySelector('select[name="batch"]');
    const alumniCards = document.querySelectorAll('.alumni-card');

    function filterAlumni() {
        const searchName = nameInput.value.toLowerCase().trim();
        const selectedBatch = batchSelect.value;

        alumniCards.forEach(card => {
            const cardName = card.getAttribute('data-name').toLowerCase();
            const cardBatch = card.getAttribute('data-batch');
            const nameMatch = cardName.includes(searchName);
            const batchMatch = !selectedBatch || cardBatch === selectedBatch;
            card.classList.toggle('hidden', !(nameMatch && batchMatch));
        });
    }

    nameInput.addEventListener('input', filterAlumni);
    batchSelect.addEventListener('change', filterAlumni);
});
</script>
