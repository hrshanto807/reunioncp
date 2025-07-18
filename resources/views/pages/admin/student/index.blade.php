@extends('layouts.apps')
@section('content')
    <!-- Alumni Directory Section -->
    <section class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-xl font-bold text-green-600 mb-6 flex items-center">
                    <i class="fas fa-users mr-2"></i> অংশগ্রহণকারীদের পেমেন্ট তালিকা
                </h2>
                @if(session('success'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                        class="bg-green-100 text-green-800 p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                <!-- Scrollable Table Wrapper -->
                <div class="overflow-x-auto">
                    <table id="datatable" class="display nowrap w-full" style="width:100%">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ক্রমিক</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">নাম</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">টোকেন নম্বর</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ব্যাচ</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">বিকাশ নম্বর</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ট্রান্সেকশন আইডি </th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap text-center">স্ট্যাটাস</th>
                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap"> এমাউন্ট(৳)
                                </th>
                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap">পেমেন্ট (৳)
                                </th>

                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $index => $item)
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">{{ $registrations->firstItem() + $index }}
                                    </td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->name }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ substr(md5($item->id), 0, 8) }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->batch }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->bkash_num }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->bkash_trans_id }}</td>
                                    <td class="py-3 px-4 border border-gray-300 text-center">
                                        @if ($item->status == 'Approved')
                                            <button class="bg-green-600 text-white text-xs px-3 py-1 rounded hover:bg-green-700">
                                                Approved
                                            </button>
                                        @elseif ($item->status == 'Cancel')
                                            <button class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">
                                                Cancel
                                            </button>
                                        @elseif ($item->status == 'painding')
                                            <button class="bg-yellow-500 text-white text-xs px-3 py-1 rounded hover:bg-yellow-600">
                                                Pending
                                            </button>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 border border-gray-300 text-green-600  font-semibold">
                                        {{ banglaNumber(number_format($item->amount, 0, '.', ',')) }}
                                    </td>
                                    <td class="py-3 px-4 border border-gray-300 text-green-600  font-semibold">
                                        {{ banglaNumber(number_format($item->amount, 0, '.', ',')) }}
                                    </td>
                                    <td
                                        class="py-3 px-4 border border-gray-300 space-y-2 flex items-center justify-center gap-2">
                                        <form action="{{ route('registration.updateStatus', $item->id) }}" method="POST"
                                            onsubmit="return confirm('আপনি কি এই স্ট্যাটাস পরিবর্তন করতে চান?')">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" onchange="this.form.submit()"
                                                class="text-xs px-3 py-1 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-300">
                                                <option>Select</option>
                                                <option value="Approved" {{ $item->status == 'Approved' ? 'selected' : '' }}>
                                                    Approved</option>

                                                <option value="Cancel" {{ $item->status == 'Cancel' ? 'selected' : '' }}>Cancel
                                                </option>
                                                <option value="Pending" {{ $item->status == 'Pending' ? 'selected' : '' }}>Pending
                                                </option>
                                            </select>
                                        </form>

                                        <a href="{{ route('registration.edit', $item->id) }}"
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                                            ✏️ Edit
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- DataTables Core JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Extensions -->
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <!-- Export dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script>
        $(document).ready(function () {
            if (!$.fn.DataTable.isDataTable('#datatable')) {
                $('#datatable').DataTable({
                    responsive: true,
                    scrollX: true,
                    dom: 'Bfrtip',
                    buttons: ['copy', 'excel', 'pdf', 'print'],
                    language: {
                        search: "",
                        searchPlaceholder: "Search...",
                        lengthMenu: "প্রতি পৃষ্ঠায় _MENU_ রেকর্ড",
                        info: "_TOTAL_ রেকর্ডের মধ্যে _START_ থেকে _END_ প্রদর্শিত হচ্ছে",
                        paginate: {
                            next: "পরবর্তী",
                            previous: "পূর্ববর্তী"
                        },
                        zeroRecords: "কোনো মিল খুঁজে পাওয়া যায়নি"
                    }
                });
            }
        });
    </script>
@endsection