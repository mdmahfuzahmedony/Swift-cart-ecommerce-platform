<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SwiftCart - Admin Dashboard</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .active-link { background-color: #FF7E3A; color: white; box-shadow: 0 10px 15px -3px rgba(255, 126, 58, 0.2); }
        [x-cloak] { display: none !important; }
    </style>
    
    @stack('styles')
</head>
<body class="bg-[#F5F1ED] antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR (সাইডবার) -->
        <aside class="w-72 bg-white border-r border-gray-100 flex flex-col">
            
            <!-- Logo Section (গ্যাপ কমানো হয়েছে) -->
            <div class="pt-8 px-8 pb-4">
                <a href="{{ url('/') }}" class="flex items-center gap-3 hover:opacity-80 transition-all duration-300">
                    <div class="w-10 h-10 bg-[#FF7E3A] rounded-xl flex items-center justify-center text-white text-xl shrink-0">
                        <i class="fas fa-store"></i>
                    </div>
                    <h1 class="text-2xl font-extrabold text-[#1E293B]">SwiftCart.</h1>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 px-6 space-y-1 overflow-y-auto">
                
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-th-large w-5"></i>
                    <span class="font-semibold">Dashboard</span>
                </a>

                <a href="{{ route('admin.orders') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.orders') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-shopping-basket w-5"></i>
                    <span class="font-semibold">Orders</span>
                </a>

                <a href="{{ route('admin.products') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.products') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-box-open w-5"></i>
                    <span class="font-semibold">Products</span>
                </a>

                <a href="{{ route('admin.customers') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.customers') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-user-friends w-5"></i>
                    <span class="font-semibold">Customers</span>
                </a>

                <a href="{{ route('admin.reports') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.reports') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-chart-line w-5"></i>
                    <span class="font-semibold">Reports</span>
                </a>

                <a href="{{ route('admin.discounts') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.discounts') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-percentage w-5"></i>
                    <span class="font-semibold">Discounts</span>
                </a>

                <!-- Divider (গ্যাপ কমিয়ে শুধু একটি হালকা বর্ডার দেওয়া হয়েছে) -->
                <div class="my-2 border-t border-gray-50"></div>

                <a href="{{ route('admin.integrations') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.integrations') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-plug w-5"></i>
                    <span class="font-semibold">Integrations</span>
                </a>        

                <a href="{{ route('admin.settings') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.settings') ? 'active-link' : 'text-[#64748B] hover:bg-gray-50' }}">
                    <i class="fas fa-cog w-5"></i>
                    <span class="font-semibold">Settings</span>
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT WRAPPER -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <!-- TOP NAVBAR -->
            <header class="h-24 bg-[#F5F1ED] px-10 flex items-center justify-between flex-shrink-0">
                <div class="relative w-96">
                    <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search stock, order, etc" class="w-full bg-white border-none rounded-2xl py-3.5 pl-14 pr-6 text-sm focus:ring-2 focus:ring-[#FF7E3A] transition shadow-sm">
                </div>

                <div class="flex items-center gap-6">
                    <button class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-gray-400 hover:text-[#FF7E3A] transition shadow-sm">
                        <i class="far fa-bell text-xl"></i>
                    </button>
                    
                    <div class="flex items-center gap-4 pl-4 border-l border-gray-200">
                        <div class="text-right">
                            <p class="text-sm font-bold text-[#1E293B]">{{ Auth::user()->name ?? 'Admin User' }}</p>
                            <p class="text-xs text-[#64748B] font-medium uppercase tracking-wider">Administrator</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name ?? 'A' }}&background=FF7E3A&color=fff" class="w-12 h-12 rounded-2xl shadow-sm border-2 border-white">
                    </div>
                </div>
            </header>

            <!-- PAGE CONTENT AREA -->
            <main class="flex-1 overflow-y-auto px-10 pb-10">
                @yield('content')
            </main>
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>