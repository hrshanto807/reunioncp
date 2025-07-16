<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">
    <title>ছাতার পাইয়া বহুমুখী উচ্চ বিদ্যালয় - পুনর্মিলনী ২০২৬</title>
    <!-- DataTables CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/datatables/datatables.css')}}">
    <link rel=" stylesheet" href="{{asset('assets/css/datatables/buttons.css')}}">
    <link rel=" stylesheet" href="{{asset('assets/css/datatables/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Chart.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <aside class="main-sidebar">
            @include('layouts.sidebar')
        </aside>
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.topbar')
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/buttons.print.min.js') }}"></script>   
    <script src="{{ asset('assets/js/alpine-3.x.x.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine-2.x.x.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine-2.x.x.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('assets/js/charts-pie.js') }}" defer></script>
</body>

</html>