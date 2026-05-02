<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Cart - eCommerce</title>
    
    <!-- Font Awesome (এটি না থাকলে আইকন দেখা যাবে না) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-50" x-data="{ quickViewOpen: false }"> {{-- এখানে x-data যোগ করলাম --}}

    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    {{-- কুইক ভিউ মোডালটি এখানে ইনক্লুড করুন --}}
    @include('sections.home._quickview')

</body>
</html>