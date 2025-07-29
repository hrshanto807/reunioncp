@extends('layouts.apps')

@section('content')
    <section class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-xl font-bold text-green-600 mb-6 flex items-center">
                    <i class="fas fa-hand-holding-usd mr-2"></i> ডোনেশন তালিকা
                </h2>

                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                        class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow z-50">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table id="datatable" class="display nowrap w-full" style="width:100%">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 border">ক্রমিক</th>
                                <th class="py-3 px-4 border">নাম</th>
                                <th class="py-3 px-4 border">মোবাইল</th>
                                <th class="py-3 px-4 border">বিকাশ নম্বর</th>
                                <th class="py-3 px-4 border">ট্রান্সেকশন আইডি</th>
                                <th class="py-3 px-4 border">পেমেন্ট মাধ্যম</th>
                                <th class="py-3 px-4 border">স্ট্যাটাস</th>
                                <th class="py-3 px-4 border text-right">পরিমাণ (৳)</th>
                                <th class="py-3 px-4 border text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $index => $item)
                                <tr>
                                    <td class="py-3 px-4 border">{{ $loop->index +1}}</td>
                                    <td class="py-3 px-4 border">{{ $item->name }}</td>
                                    <td class="py-3 px-4 border">{{ $item->mobile }}</td>
                                    <td class="py-3 px-4 border">{{ $item->bkash_num }}</td>
                                    <td class="py-3 px-4 border">{{ $item->bkash_trans_id }}</td>
                                    <td class="py-3 px-4 border">{{ $item->payment_method }}</td>
                                    <td class="py-3 px-4 border text-center">
                                        @if ($item->status == 'Approved')
                                            <span class="bg-green-600 text-white text-xs px-3 py-1 rounded">Approved</span>
                                        @elseif ($item->status == 'Cancel')
                                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">Cancel</span>
                                        @elseif ($item->status == 'pending')
                                            <span class="bg-yellow-500 text-white text-xs px-3 py-1 rounded">Pending</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 border text-right text-green-700 font-bold">
                                        {{ banglaNumber(number_format($item->amount, 0)) }}
                                    </td>
                                    <td
                                        class="py-3 px-4 border border-gray-300 space-y-2 flex items-center justify-center gap-2">
                                        <form action="{{ route('donations.updateStatus', $item->id) }}" method="POST"
                                            onsubmit="return confirm('আপনি কি এই স্ট্যাটাস পরিবর্তন করতে চান?')">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" onchange="this.form.submit()"
                                                class="text-xs px-3 py-1 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-300">
                                                <option>Select</option>
                                                <option value="Approved"
                                                    {{ $item->status == 'Approved' ? 'selected' : '' }}>
                                                    Approved</option>

                                                <option value="Cancel" {{ $item->status == 'Cancel' ? 'selected' : '' }}>
                                                    Cancel
                                                </option>
                                                <option value="Pending" {{ $item->status == 'Pending' ? 'selected' : '' }}>
                                                    Pending
                                                </option>
                                            </select>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Pagination (optional) --}}
                    <div class="mt-6">
                        {{ $donations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- DataTables Scripts -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                responsive: true,
                scrollX: true,
                dom: 'Bfrtip',
                buttons: ['copy', 'excel', 'pdf', 'print'],
                language: {
                    search: "",
                    searchPlaceholder: "খুঁজুন...",
                    lengthMenu: "প্রতি পৃষ্ঠায় _MENU_ রেকর্ড",
                    info: "_TOTAL_ টি ডেটার মধ্যে _START_ থেকে _END_ প্রদর্শিত হচ্ছে",
                    paginate: {
                        next: "পরবর্তী",
                        previous: "পূর্ববর্তী"
                    },
                    zeroRecords: "কোনো মিল খুঁজে পাওয়া যায়নি"
                }
            });
        });
    </script>
@endsection
