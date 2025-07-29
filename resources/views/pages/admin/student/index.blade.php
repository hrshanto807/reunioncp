@extends('layouts.apps')

@section('content')
    <section class="py-16 bg-gradient-to-br from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-xl font-bold text-green-600 mb-6 flex items-center">
                    <i class="fas fa-users mr-2"></i> Registrations
                </h2>

                <div class="overflow-x-auto">
                    <table id="datatable" class="display nowrap w-full border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">ক্রমিক</th>
                                <th class="border border-gray-300 px-4 py-2">নাম</th>
                                <th class="border border-gray-300 px-4 py-2">টোকেন নম্বর</th>
                                <th class="border border-gray-300 px-4 py-2">ব্যাচ</th>
                                <th class="border border-gray-300 px-4 py-2">বিকাশ নম্বর</th>
                                <th class="border border-gray-300 px-4 py-2">ট্রান্সেকশন আইডি</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">স্ট্যাটাস</th>
                                <th class="border border-gray-300 px-4 py-2 text-right"> এমাউন্ট(৳)</th>
                                <th class="border border-gray-300 px-4 py-2 text-right">পেমেন্ট (৳)</th>
                                <th class="border border-gray-300 px-4 py-2 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $index => $item)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $registrations->firstItem() + $index }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ substr(md5($item->id), 0, 8) }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->batch }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->bkash_num }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->bkash_trans_id }}</td>
                                    <td class="border border-gray-300 px-4 py-2 text-center">
                                        @if (strtolower($item->status) == 'approved')
                                            <span class="bg-green-600 text-white text-xs px-3 py-1 rounded">Approved</span>
                                        @elseif (strtolower($item->status) == 'cancel')
                                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded">Cancel</span>
                                        @else
                                            <span class="bg-yellow-500 text-white text-xs px-3 py-1 rounded">Pending</span>
                                        @endif
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-right text-green-600 font-semibold">
                                        {{ banglaNumber(number_format($item->amount, 0, '.', ',')) }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-right text-green-600 font-semibold">
                                        {{ banglaNumber(number_format($item->amount, 0, '.', ',')) }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 flex items-center justify-start gap-2">
                                        <form action="{{ route('registration.updateStatus', $item->id) }}" method="POST"
                                            onsubmit="return confirm('আপনি কি এই স্ট্যাটাস পরিবর্তন করতে চান?')">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" onchange="this.form.submit()"
                                                class="text-xs px-2 py-1 border rounded">
                                                <option value="">Select</option>
                                                <option value="Approved"
                                                    {{ strtolower($item->status) == 'approved' ? 'selected' : '' }}>Approved
                                                </option>
                                                <option value="Cancel"
                                                    {{ strtolower($item->status) == 'cancel' ? 'selected' : '' }}>Cancel
                                                </option>
                                                <option value="pending"
                                                    {{ strtolower($item->status) == 'pending' ? 'selected' : '' }}>Pending
                                                </option>
                                            </select>
                                        </form>

                                        <a href="{{ route('registration.edit', $item->id) }}"
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded">✏️ Edit</a>

                                        @if (strtolower($item->status) == 'approved')
                                            <button onclick="openTokenModal({{ $item->id }})"
                                                class="bg-purple-600 hover:bg-purple-700 text-white px-3 py-1 rounded">
                                                🔍 Verify
                                            </button>
                                        @endif
                                    </td>
                                </tr>

                                <!-- Larger Modal for tokens -->
                                <div id="tokenModal-{{ $item->id }}"
                                    class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
                                    <div
                                        class="bg-white rounded-lg shadow-xl w-11/12 max-w-4xl max-h-[80vh] overflow-y-auto p-6 relative">
                                        <!-- Close button -->
                                        <button onclick="closeTokenModal({{ $item->id }})"
                                            class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-3xl font-bold leading-none"
                                            aria-label="Close modal">&times;</button>

                                        <h2 class="text-2xl font-semibold text-green-600 mb-6">Token Verification List</h2>

                                        <div id="tokenListContainer-{{ $item->id }}" class="space-y-2">
                                            <p class="text-gray-600">Loading tokens...</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

    <script>
        function openTokenModal(registrationId) {
            const modal = document.getElementById(`tokenModal-${registrationId}`);
            const container = document.getElementById(`tokenListContainer-${registrationId}`);

            modal.classList.remove("hidden");
            container.innerHTML = '<p class="text-gray-600">Loading tokens...</p>';

            fetch(`/tokens/by-registration/${registrationId}`)
                .then(res => res.json())
                .then(data => {
                    if (!data.tokens || data.tokens.length === 0) {
                        container.innerHTML = '<p class="text-red-500"> No tokens found.</p>';
                        return;
                    }

                    let html = `
    <table class="min-w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left">Code</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Type</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Owner Name</th>
                <th class="border border-gray-300 px-4 py-2 text-center">Guest?</th>
                <th class="border border-gray-300 px-4 py-2 text-center">Change Status</th>
                <th class="border border-gray-300 px-4 py-2 text-center">Current Status</th> <!-- NEW column -->
            </tr>
        </thead>
        <tbody>
`;

                    data.tokens.forEach(token => {
                        // Determine initial select bg color class based on status
                        let selectBgClass = 'bg-yellow-100'; // default pending
                        if (token.status === 'accepted') selectBgClass = 'bg-green-100';
                        else if (token.status === 'cancelled') selectBgClass = 'bg-red-100';

                        // Status badge color for new column
                        let statusBadge = renderStatusBadge(token.status);

                        html += `
        <tr id="token-row-${token.code}">
            <td class="border border-gray-300 px-4 py-2">${token.code}</td>
            <td class="border border-gray-300 px-4 py-2">${token.type}</td>
            <td class="border border-gray-300 px-4 py-2">${token.owner_name}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">${token.is_guest ? 'Yes' : 'No'}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">
                <select data-token="${token.code}" onchange="updateTokenStatus('${token.code}', this.value)" class="border rounded px-2 py-1 ${selectBgClass}">
                    <option value="pending" ${token.status === 'pending' ? 'selected' : ''}>Pending</option>
                    <option value="accepted" ${token.status === 'accepted' ? 'selected' : ''}>Accept</option>
                    <option value="cancelled" ${token.status === 'cancelled' ? 'selected' : ''}>Cancel</option>
                </select>
            </td>
            <td class="border border-gray-300 px-4 py-2 text-center" id="status-badge-${token.code}">
                ${statusBadge}
            </td>
        </tr>
    `;
                    });

                    html += `</tbody></table>`;
                    container.innerHTML = html;
                })
                .catch(() => {
                    container.innerHTML = '<p class="text-red-500"> Failed to fetch tokens.</p>';
                });
        }

        function renderStatusBadge(status) {
            let color = 'yellow';
            let label = status.charAt(0).toUpperCase() + status.slice(1); // Capitalize first letter

            if (status === 'accepted') {
                color = 'green';
            } else if (status === 'cancelled') {
                color = 'red';
            }

            return `<span class="inline-block px-2 py-1 text-xs font-semibold rounded-full bg-${color}-100 text-${color}-800">${label}</span>`;
        }

        function updateTokenStatus(tokenCode, status) {
            fetch(`/tokens/update-status/${tokenCode}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        status
                    }),
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        // Update the select element background color
                        const select = document.querySelector(`select[data-token="${tokenCode}"]`);
                        if (select) {
                            select.classList.remove('bg-yellow-100', 'bg-green-100', 'bg-red-100');
                            if (status === 'accepted') select.classList.add('bg-green-100');
                            else if (status === 'cancelled') select.classList.add('bg-red-100');
                            else select.classList.add('bg-yellow-100');
                        }

                        // Update the Current Status badge column
                        const badgeTd = document.getElementById(`status-badge-${tokenCode}`);
                        if (badgeTd) {
                            badgeTd.innerHTML = renderStatusBadge(status);
                        }

                        alert(`Token status updated to ${data.status}`);
                    } else {
                        alert('Failed to update status');
                    }
                })
                .catch(() => {
                    alert('Error while updating token status.');
                });
        }


        function closeTokenModal(id) {
            document.getElementById(`tokenModal-${id}`).classList.add("hidden");
        }
    </script>
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
    </script>
@endsection
