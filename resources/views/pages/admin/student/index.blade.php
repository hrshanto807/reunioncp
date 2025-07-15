@extends('layouts.apps')
@section('content')
    <!-- Alumni Directory Section -->
    <section class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-xl font-bold text-green-600 mb-6 flex items-center">
                    <i class="fas fa-users mr-2"></i> অংশগ্রহণকারীদের পেমেন্ট তালিকা
                </h2>

                <!-- Scrollable Table Wrapper -->
                <div class="w-full overflow-x-auto block">
                    <table id="datatable" class="display nowrap" style="width:100%">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ক্রমিক</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">নাম</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">ব্যাচ</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">মোবাইল নম্বর</th>
                                <th class="py-3 px-4 border border-gray-300 whitespace-nowrap">বর্তমান ঠিকানা</th>
                                <th class="py-3 px-4 border border-gray-300 text-right whitespace-nowrap">পেমেন্ট (৳)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $index => $item)
                                <tr>
                                    <td class="py-3 px-4 border border-gray-300">{{ $registrations->firstItem() + $index }}
                                    </td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->name }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->batch }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->phone }}</td>
                                    <td class="py-3 px-4 border border-gray-300">{{ $item->present_address }}</td>
                                    <td class="py-3 px-4 border border-gray-300 text-green-600  font-semibold">
                                        {{ banglaNumber(number_format($item->amount, 0, '.', ',')) }}
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
        $(document).ready(function() {
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
