<div x-data="{ 
    shopOpen: false, 
    isSticky: false, 
    langOpen: false, 
    profileOpen: false, 
    searchOpen: false 
}" 
@scroll.window="isSticky = (window.scrollY > 80) ? true : false" 
class="relative font-sans text-slate-900">

    <!-- ১. টপ নোটিফিকেশন বার (কালো বার উইথ স্ক্রলিং টেক্সট) -->
    <div x-show="!isSticky" class="bg-black py-3 text-[10px] text-white/90 hidden lg:block overflow-hidden">
        <div class="container mx-auto  flex justify-between items-center">
            <!-- বামে: কন্টাক্ট ইনফো -->
            <div class="flex gap-5 shrink-0">
                <span class="flex items-center gap-1.5"><i class="fas fa-envelope text-[#FF7E3A]"></i> info@swiftcart.com</span>
                <span class="flex items-center gap-1.5"><i class="fas fa-phone text-[#FF7E3A]"></i> +880 123 456 789</span>
            </div>

            <!-- মাঝখানে: স্ক্রলিং নোটিশ (Marquee Effect) -->
            <div class="flex-1 max-w-2xl mx-10 overflow-hidden relative h-4">
                <div class="animate-marquee whitespace-nowrap absolute font-black text-[#FF7E3A] uppercase tracking-widest">
                    🔥 SPECIAL OFFER: GET 20% OFF ON YOUR FIRST ORDER! USE CODE: SWIFT20 | 📦 FREE SHIPPING ON ORDERS OVER $150 | ⚡ BIG SEASON SALE IS LIVE NOW!
                </div>
            </div>

            <!-- ডানে: ট্র্যাক অর্ডার -->
            <div class="shrink-0 font-black uppercase tracking-widest">
                <a href="#" class="hover:text-[#FF7E3A] transition-all">Track Order <i class="fas fa-truck-fast ml-1"></i></a>
            </div>
        </div>
    </div>

    <!-- ২. মেইন হেডার (Sticky & Clean) -->
    <header :class="isSticky ? 'fixed top-0 left-0 w-full bg-white shadow-sm z-[100] py-3' : 'relative bg-white py-5'" 
            class="transition-all duration-300  border-b border-slate-100">
        
        <div class="container mx-auto flex items-center justify-between">
            
            <!-- (A) লোগো (বামে) -->
            <div class="w-1/4 shrink-0 flex items-center gap-2">
               
                <a href="{{ route('home') }}" class="logo-text text-3xl font-black text-slate-900 tracking-tighter">
                    SwiftCart
                </a>
            </div>

            <!-- (B) মেনু নেভিগেশন (মাঝখানে) -->
            <nav class="flex-1 flex justify-center items-center gap-10 font-bold text-[12px] text-slate-800 uppercase tracking-widest">
                
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-[#FF7E3A]' : '' }} hover:text-[#FF7E3A] transition-all">Home</a>

                <!-- SHOP MEGA MENU -->
                <div class="relative group" @mouseenter="shopOpen = true" @mouseleave="shopOpen = false">
                    <a href="{{ route('shop') }}" class="{{ request()->routeIs('shop') ? 'text-[#FF7E3A]' : '' }} hover:text-[#FF7E3A] flex items-center gap-1 py-2">
                        Shop <i class="fas fa-chevron-down text-[9px] opacity-50 transition-transform group-hover:rotate-180"></i>
                    </a>
                    
                    <!-- মেগা মেনু ডিজাইন -->
                    <div x-show="shopOpen" x-cloak 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         class="absolute top-full left-1/2 -translate-x-1/2 w-[1100px] bg-white shadow-2xl rounded-b-3xl p-10 z-[200] border-t-2 border-[#FF7E3A] mt-0 flex gap-10 text-left normal-case">
                        
                        <div class="grid grid-cols-4 gap-8 flex-1">
                            <div>
                                <h3 class="font-black text-slate-900 mb-5 uppercase text-[11px] tracking-widest border-b pb-2">Dining & Kitchen</h3>
                                <ul class="space-y-3 text-slate-500 text-[12px] font-medium">
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Dining Tables</a></li>
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Sideboards</a></li>
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Kitchen Textiles</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-black text-slate-900 mb-5 uppercase text-[11px] tracking-widest border-b pb-2">Living Room</h3>
                                <ul class="space-y-3 text-slate-500 text-[12px] font-medium">
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Coffee Tables</a></li>
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Decoration</a></li>
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Lighting</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-black text-slate-900 mb-5 uppercase text-[11px] tracking-widest border-b pb-2">Home Office</h3>
                                <ul class="space-y-3 text-slate-500 text-[12px] font-medium">
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Desks</a></li>
                                    <li><a href="#" class="hover:text-[#FF7E3A]">Table Lamps</a></li>
                                </ul>
                            </div>
                            <!-- মেগা মেনু ইমেজ ব্যানার -->
                            <div class="relative rounded-2xl overflow-hidden group/img bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=400" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-black/20 flex flex-col justify-end p-6">
                                    <p class="text-white font-black text-lg">Modern Furniture</p>
                                    <a href="#" class="text-white text-[10px] font-bold underline mt-1 uppercase">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-[#FF7E3A]' : '' }} hover:text-[#FF7E3A] transition-all">About</a>
                <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'text-[#FF7E3A]' : '' }} hover:text-[#FF7E3A] transition-all">Blog</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-[#FF7E3A]' : '' }} hover:text-[#FF7E3A] transition-all">Contact</a>
            </nav>

            <!-- (C) আইকনসমূহ (ডানে) -->
            <div class="w-1/4 flex items-center justify-end gap-6 text-slate-700">
                
                <!-- ল্যাঙ্গুয়েজ/কারেন্সি -->
                <div class="relative hidden sm:block">
                    <button @click="langOpen = !langOpen" class="text-[11px] font-black flex items-center gap-1.5 hover:text-[#FF7E3A] uppercase tracking-tighter">
                        <img src="https://flagcdn.com/w20/gb.png" class="w-4 rounded-sm"> GBP £ <i class="fas fa-chevron-down text-[8px]"></i>
                    </button>
                    <div x-show="langOpen" @click.away="langOpen = false" x-cloak class="absolute top-full right-0 mt-3 w-32 bg-white shadow-xl rounded-xl py-3 border z-[200]">
                        <a href="#" class="block px-4 py-2 text-[10px] font-black hover:bg-slate-50 uppercase tracking-tighter">USD ($)</a>
                    </div>
                </div>

                <!-- সার্চ আইকন -->
                <button @click="searchOpen = !searchOpen" class="hover:text-[#FF7E3A]"><i class="fas fa-search text-lg"></i></button>

                <!-- প্রোফাইল -->
                <div class="relative" x-data="{ profileOpen: false }">
                    <button @click="profileOpen = !profileOpen" @click.away="profileOpen = false" 
                            class="w-9 h-9 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center overflow-hidden hover:border-[#FF7E3A] transition-all">
                        @auth
                            @php $avatar = Auth::user()->avatar ?? Auth::user()->profile_photo_url; @endphp
                            @if($avatar)
                                <img src="{{ $avatar }}" class="w-full h-full object-cover">
                            @else
                                <span class="text-[11px] font-black text-slate-700 uppercase">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            @endif
                        @else
                            <i class="far fa-user text-sm text-slate-400"></i>
                        @endauth
                    </button>
                    <!-- প্রোফাইল ড্রপডাউন -->
                    <div x-show="profileOpen" x-cloak class="absolute top-full right-0 mt-4 w-52 bg-white shadow-2xl rounded-2xl py-5 border z-[200]">
                        @auth
                            <div class="px-6 pb-3 border-b mb-3">
                                <p class="text-[9px] font-black text-[#FF7E3A] uppercase tracking-widest">{{ Auth::user()->role === 'admin' ? 'Administrator' : 'Customer' }}</p>
                                <p class="text-[11px] font-extrabold truncate text-slate-800">{{ Auth::user()->name }}</p>
                            </div>
                            <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('profile.edit') }}" class="block px-6 py-2 text-[10px] font-black text-slate-500 hover:text-[#FF7E3A] uppercase tracking-widest transition-all">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-6 py-2 text-[10px] font-black text-red-400 hover:text-red-600 uppercase tracking-widest transition-all mt-2">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="block px-6 py-2 text-[10px] font-black text-slate-500 hover:text-[#FF7E3A] uppercase tracking-widest transition-all">Login</a>
                        @endauth
                    </div>
                </div>

                <!-- কার্ট -->
                <button class="relative hover:text-[#FF7E3A]">
                    <i class="fas fa-shopping-bag text-xl"></i>
                    <span class="absolute -top-2.5 -right-2.5 bg-black text-white text-[8px] font-black w-4 h-4 rounded-full flex items-center justify-center border-2 border-white">0</span>
                </button>

            </div>
        </div>
    </header>

    <!-- ৩. সার্চ ড্রপডাউন বার -->
    <div x-show="searchOpen" x-cloak 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         class="absolute top-full left-0 w-full bg-white shadow-lg border-b z-[90] py-6 px-10">
        <div class="container mx-auto relative">
            <input type="text" placeholder="Search for furniture, lighting, accessories..." 
                   class="w-full border-none bg-slate-50 rounded-2xl px-8 py-5 text-lg font-medium focus:ring-2 focus:ring-[#FF7E3A]">
            <button @click="searchOpen = false" class="absolute right-8 top-1/2 -translate-y-1/2 text-slate-400 hover:text-black">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
    </div>

</div>

<style>
    [x-cloak] { display: none !important; }
    .logo-text { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; letter-spacing: -0.05em; }
    
    /* Marquee Animation */
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    .animate-marquee {
        display: inline-block;
        animation: marquee 20s linear infinite;
    }
</style>