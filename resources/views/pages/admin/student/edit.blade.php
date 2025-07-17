@extends('layouts.apps')

@section('content')
<section class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
        <form action="{{ route('registration.update', $registration->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Participation --}}
            <div class="mb-8">
                <div class="space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-3">
                            আপনি কি একাই রেজিস্ট্রেশন করতে চান? <span class="text-red-500">*</span>
                        </label>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-2">
                            <label for="radioSingle" class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors space-x-3">
                                <input type="radio" name="registration_type" value="single" id="radioSingle" class="w-5 h-5 text-blue-600"
                                    {{ old('registration_type', $registration->registration_type) == 'single' ? 'checked' : '' }}>
                                <div>
                                    <span class="font-semibold">👤 হ্যাঁ, একাই</span>
                                    <p class="text-sm text-gray-500">শুধুমাত্র আমার নিবন্ধন</p>
                                </div>
                            </label>

                            <label for="radioGroup" class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors space-x-3">
                                <input type="radio" name="registration_type" value="group" id="radioGroup" class="w-5 h-5 text-blue-600"
                                    {{ old('registration_type', $registration->registration_type) == 'group' ? 'checked' : '' }}>
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

                    <div id="groupSelectWrapper" class="mb-6 {{ old('registration_type', $registration->registration_type) == 'group' ? '' : 'hidden' }}">
                        <label class="block text-gray-700 font-semibold mb-2">আপনি সহ কতজন অংশগ্রহণ করতে চান? <span class="text-red-500">*</span></label>
                        <select id="participantCount" name="participant_count" class="form-input">
                            <option value="">অংশগ্রহণকারী সংখ্যা নির্বাচন করুন</option>
                            @for ($i = 2; $i <= 6; $i++)
                                <option value="{{ $i }}" {{ old('participant_count', $registration->participant_count) == $i ? 'selected' : '' }}>
                                    {{ $i }} জন (আমি + {{ $i - 1 }} জন)
                                </option>
                            @endfor
                        </select>
                        @error('participant_count')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Payment Info --}}
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 mb-6 p-6 rounded-xl border border-green-200">
                <h3 class="text-xl font-bold text-green-800 mb-6 flex items-center">
                    <i class="fas fa-credit-card text-green-600 mr-3"></i> পেমেন্ট তথ্য
                </h3>
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">পেমেন্ট পদ্ধতি <span class="text-red-500">*</span></label>
                        <select name="payment_method" class="form-input">
                            <option value="">পেমেন্ট মাধ্যম নির্বাচন করুন</option>
                            <option value="bkash Agent" {{ old('payment_method', $registration->payment_method) == 'bkash Agent' ? 'selected' : '' }}>
                                🟣 বিকাশ (Agent)
                            </option>
                            <option value="bkash personal" {{ old('payment_method', $registration->payment_method) == 'bkash personal' ? 'selected' : '' }}>
                                🟣 বিকাশ (Personal)
                            </option>
                        </select>
                        @error('payment_method')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">মোট পেমেন্ট (টাকা) <span class="text-red-500">*</span></label>
                        <input type="text" id="totalAmount" name="amount" class="form-input bg-gray-100" value="{{ old('amount', $registration->amount ?? '০') }}" readonly>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">যে নম্বর থেকে পেমেন্ট করেছেন <span class="text-red-500">*</span></label>
                        <input type="tel" name="bkash_num" value="{{ old('bkash_num', $registration->bkash_num) }}" class="form-input" placeholder="০১৭xxxxxxxx">
                        @error('bkash_num')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Transaction ID <span class="text-red-500">*</span></label>
                        <input type="text" class="form-input" name="bkash_trans_id" value="{{ old('bkash_trans_id', $registration->bkash_trans_id) }}" placeholder="যেমন: BKH123ABC789">
                        @error('bkash_trans_id')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                    <h4 class="font-semibold text-blue-800 mb-2 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i> পেমেন্ট নির্দেশনা
                    </h4>
                    <p class="text-sm text-blue-700 space-y-1">• বিকাশ: <strong>+৮৮০ ১৭০০০০০০</strong> (Personal)</p>
                </div>
            </div>

            {{-- Personal Info --}}
            <div class="mb-8">
                <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-user text-blue-600 mr-3"></i> ব্যক্তিগত তথ্য
                </h3>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">পূর্ণ নাম <span class="text-red-500">*</span></label>
                        <input type="text" name="name" class="form-input" value="{{ old('name', $registration->name) }}" placeholder="যেমন: মোহাম্মদ আব্দুল করিম">
                        @error('name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">ব্যাচ/পাশের বছর <span class="text-red-500">*</span></label>
                        <select name="batch" class="form-input">
                            <option value="">বছর নির্বাচন করুন</option>
                            @for ($year = 2025; $year >= 1964; $year--)
                                <option value="{{ $year }}" {{ old('batch', $registration->batch) == $year ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endfor
                        </select>
                        @error('batch')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">পিতার নাম <span class="text-red-500">*</span></label>
                        <input type="text" name="father_name" class="form-input" value="{{ old('father_name', $registration->father_name) }}">
                        @error('father_name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">রক্তের গ্রুপ <span class="text-red-500">*</span></label>
                        <select name="blood" class="form-input">
                            <option value="">রক্তের গ্রুপ নির্বাচন করুন</option>
                            @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $group)
                                <option value="{{ $group }}" {{ old('blood', $registration->blood) == $group ? 'selected' : '' }}>
                                    🩸 {{ $group }}
                                </option>
                            @endforeach
                        </select>
                        @error('blood')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Image preview --}}
                <div class="grid md:grid-cols-1 gap-6 mt-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">ছবি আপলোড <span class="text-red-500">*</span></label>
                        <input type="file" name="photo" class="form-input">
                        @error('photo')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror

                        @if ($registration->photo)
                            <div class="mt-4">
                                <p class="font-semibold mb-1">বর্তমান ছবি:</p>
                                <img src="{{ asset($registration->photo ?? 'images/default.jpg') }}" alt="Uploaded Photo" class="w-20 h-20 rounded-lg border border-gray-300">
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-gray-700 font-semibold mb-2">টিশার্ট সাইজ <span class="text-red-500">*</span></label>
                    <div class="grid grid-cols-2 md:grid-cols-6 gap-3">
                        @foreach (['S', 'M', 'L', 'XL', 'XXL', 'XXXL'] as $size)
                            <label class="flex items-center justify-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors">
                                <input type="radio" name="tshirt" value="{{ $size }}" class="sr-only" {{ old('tshirt', $registration->tshirt) == $size ? 'checked' : '' }}>
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
                        <label class="block text-gray-700 font-semibold mb-2">মোবাইল নম্বর <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" class="form-input" value="{{ old('phone', $registration->phone) }}">
                        @error('phone')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">ইমেইল ঠিকানা</label>
                        <input type="email" name="email" class="form-input" value="{{ old('email', $registration->email) }}">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-gray-700 font-semibold mb-2">পেশা</label>
                    <input type="text" name="profession" class="form-input" value="{{ old('profession', $registration->profession) }}">
                </div>
            </div>

            {{-- Address --}}
            <div class="mb-8">
                <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-map-marker-alt text-red-600 mr-3"></i> ঠিকানার তথ্য
                </h3>

                <div class="space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">বর্তমান ঠিকানা <span class="text-red-500">*</span></label>
                        <textarea name="present_address" class="form-input h-20">{{ old('present_address', $registration->present_address) }}</textarea>
                        @error('present_address')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">স্থায়ী ঠিকানা <span class="text-red-500">*</span></label>
                        <textarea name="permanent_address" class="form-input h-20">{{ old('permanent_address', $registration->permanent_address) }}</textarea>
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
                    <label class="block text-gray-700 font-semibold mb-2">প্রতিনিধির নাম (যদি আপনি আসতে না পারেন)</label>
                    <input type="text" name="representative_name" class="form-input" value="{{ old('representative_name', $registration->representative_name) }}">
                </div>
            </div>

            {{-- Terms --}}
            <div class="flex items-start space-x-3 p-4 bg-gray-50 rounded-lg">
                <input type="checkbox" id="terms" name="terms_agreed" class="w-5 h-5 mt-1 text-blue-600" {{ old('terms_agreed', $registration->terms_agreed) ? 'checked' : '' }}>
                <label for="terms" class="text-gray-700 leading-relaxed cursor-pointer">
                    আমি <span class="text-red-500">*</span>
                    <strong>
                        <span class="underline text-blue-600 cursor-pointer" onclick="event.stopPropagation(); openRulesModal();">
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
            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <i class="fas fa-check-circle mr-2"></i>
                নিবন্ধন সম্পন্ন করুন
            </button>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const radioSingle = document.getElementById('radioSingle');
        const radioGroup = document.getElementById('radioGroup');
        const groupSelectWrapper = document.getElementById('groupSelectWrapper');
        const participantSelect = document.getElementById('participantCount');
        const totalAmountField = document.getElementById('totalAmount');

        const baseAmount = 1000;
        const extraPerPerson = 500;

        // Convert number to Bangla digits
        function toBanglaNumber(number) {
            const banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
            return number.toString().split('').map(d => {
                return /\d/.test(d) ? banglaDigits[parseInt(d)] : d;
            }).join('');
        }

        function updateAmount() {
            if (radioSingle.checked) {
                totalAmountField.value = toBanglaNumber(baseAmount);
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

        // Initialize on load
        updateAmount();

        // Event listeners
        radioSingle.addEventListener('change', function () {
            if (this.checked) {
                groupSelectWrapper.classList.add('hidden');
                participantSelect.value = "";
                updateAmount();
            }
        });

        radioGroup.addEventListener('change', function () {
            if (this.checked) {
                groupSelectWrapper.classList.remove('hidden');
                updateAmount();
            }
        });

        participantSelect.addEventListener('change', updateAmount);
    });

    // Placeholder function for rules modal
    function openRulesModal() {
        alert("পুনর্মিলনী নিয়মাবলী দেখানোর জন্য এখানে কোড লিখুন।");
    }
</script>
@endpush
