<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Cart - eCommerce</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vite (Tailwind CSS & JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js CDN (যদি Vite থেকে কাজ না করে তবে এটি ব্যাকআপ হিসেবে থাকবে) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Custom Styles -->
    <style>



        body { font-family: 'Work Sans', sans-serif; }
        .logo-text { font-family: 'Outfit', sans-serif; font-weight: 900; letter-spacing: -0.02em; }
        .header-gradient {
            background: linear-gradient(135deg, #0a1628 0%, #1a2742 100%);
            position: relative;
        }
        .gold-gradient {
            background: linear-gradient(135deg, #eab308 0%, #fbbf24 100%);
            box-shadow: 0 4px 12px rgba(234, 179, 8, 0.25);
        }
        .nav-link {
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            position: relative;
        }
        .nav-link::after {
            content: ''; position: absolute; bottom: -4px; left: 0; width: 0; height: 2px;
            background: linear-gradient(90deg, #eab308, #fbbf24); transition: width 0.3s ease;
        }
        .nav-link:hover::after { width: 100%; }
        .discount-badge {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }


        
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar Section -->
    @include('layouts.partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.partials.footer')

</body>
</html>