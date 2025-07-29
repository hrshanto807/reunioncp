@extends('layouts.apps')

@section('content')
    <section class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-xl font-bold text-green-600 mb-6 flex items-center">
                    <i class="fas fa-users mr-2"></i> অংশগ্রহণকারীদের পেমেন্ট তালিকা
                </h2>

                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                        class="bg-green-100 text-green-800 p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table id="datatable" class="display nowrap w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left">Code</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Type</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Owner Name</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Guest?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tokens as $token)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $token->code }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $token->type }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $token->owner_name }}</td>
                                    <td class="border border-gray-300 px-4 py-2 text-center">
                                        {{ $token->is_guest ? 'Yes' : 'No' }}</td>
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
    <!-- DataTables and dependencies -->
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
        });

        // Fetch tokens and populate the modal content dynamically
        @foreach ($registrations as $item)
            document.querySelector(
                "button[onclick=\"document.getElementById('tokenModal-{{ $item->id }}').classList.remove('hidden')\"]"
            ).addEventListener('click', function() {
                const container = document.getElementById('tokenListContainer-{{ $item->id }}');
                container.innerHTML = '<p class="text-gray-600">Loading tokens...</p>';

                fetch("/tokens/by-registration/{{ $item->id }}")
                    .then(res => res.json())
                    .then(data => {
                        if (!data.tokens || data.tokens.length === 0) {
                            container.innerHTML = '<p class="text-red-500">⚠️ No tokens found.</p>';
                            return;
                        }

                        let html = '<ul class="divide-y border rounded">';
                        data.tokens.forEach((token, index) => {
                            html += `
                                <li class="py-3 px-4 flex justify-between items-center">
                                    <div>
                                        <strong>${index + 1}. ${token.owner_name}</strong>
                                        ${token.is_guest ? '<span class="text-xs text-gray-500 ml-2">(Guest)</span>' : ''}
                                    </div>
                                    <code class="bg-gray-100 text-sm px-3 py-1 rounded">${token.code}</code>
                                </li>
                            `;
                        });
                        html += '</ul>';
                        container.innerHTML = html;
                    })
                    .catch(() => {
                        container.innerHTML = '<p class="text-red-500">⚠️ Failed to fetch tokens.</p>';
                    });
            });
        @endforeach
    </script>
@endsection
