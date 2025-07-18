<!DOCTYPE html>
<html lang="en" :class="{ 'theme-dark': dark }">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png" />
    <title>@yield('title', 'ছাতার পাইয়া বহুমুখী উচ্চ বিদ্যালয় - পুনর্মিলনী ২০২৬')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/datatables/datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/datatables/buttons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/datatables/responsive.css') }}" />
    <!-- Other CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/Chart.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet" />

    <!-- Alpine.js x-cloak global style -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body>
    {{-- Main Alpine root wrapper --}}
    <div x-data="data()" class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">

        {{-- Sidebar --}}
        <aside class="main-sidebar">
            @include('layouts.sidebar')
        </aside>

        {{-- Main Content --}}
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.topbar')
            @yield('content')
        </div>
    </div>

    <!-- JS Libraries -->

    <!-- jQuery (required for Summernote) -->
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>

    <!-- FontAwesome -->
    <script src="{{ asset('assets/fontawesome/all.min.js') }}"></script>

    <!-- DataTables JS -->
    <script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/custom.js') }}"></script>

    <!-- Chart.js -->
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('assets/js/charts-pie.js') }}" defer></script>

    <!-- Summernote JS -->
    <script src="{{ asset('assets/js/summernote-lite.min.js') }}"></script>     
    <script src="{{ asset('assets/js/alpine.js') }}" defer></script>

    <!-- Your custom Alpine init -->
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
  

    @stack('scripts')
</body>

</html>