@extends('layouts.frontend')

@section('content')

<!-- ১. প্রিমিয়াম হেডার (Consistent with other pages) -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-3xl font-black uppercase logo-text">
    {{ $category_name ?? 'Our' }} <span class="text-yellow-400">Collection</span>
</h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] md:text-xs uppercase font-black tracking-[0.4em] opacity-60">
            <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Shop All</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <!-- ২. সাইডবার ফিল্টার (বাম পাশে) -->
        <div class="w-full lg:w-1/4 space-y-10">
            
            <!-- Categories -->
            <div class="bg-white p-8 rounded-[30px] shadow-sm border border-gray-100">
                <h3 class="text-sm font-black uppercase tracking-widest mb-6 border-b-2 border-yellow-400 pb-2 inline-block">Categories</h3>
                <div class="space-y-3">
                    @foreach(['Men\'s Wear', 'Women\'s Wear', 'Kids Collection', 'Shoes & Bags', 'Accessories'] as $cat)
                    <label class="flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <input type="checkbox" class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-500">
                            <span class="text-xs font-bold text-gray-600 group-hover:text-yellow-600">{{ $cat }}</span>
                        </div>
                        <span class="text-[10px] text-gray-400">({{ rand(10, 50) }})</span>
                    </label>
                    @endforeach
                </div>
            </div>

            <!-- Size Filter -->
            <div class="bg-white p-8 rounded-[30px] shadow-sm border border-gray-100">
                <h3 class="text-sm font-black uppercase tracking-widest mb-6">Select Size</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(['S', 'M', 'L', 'XL', '38', '40', '42', '44'] as $size)
                        <button class="w-10 h-10 rounded-lg border border-gray-100 flex items-center justify-center text-[10px] font-black hover:bg-yellow-400 hover:border-yellow-400 transition-all">
                            {{ $size }}
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Color Filter -->
            <div class="bg-white p-8 rounded-[30px] shadow-sm border border-gray-100">
                <h3 class="text-sm font-black uppercase tracking-widest mb-6">Select Color</h3>
                <div class="flex flex-wrap gap-3">
                    <button class="w-6 h-6 rounded-full bg-black ring-offset-2 hover:ring-2 ring-black"></button>
                    <button class="w-6 h-6 rounded-full bg-red-600 ring-offset-2 hover:ring-2 ring-red-600"></button>
                    <button class="w-6 h-6 rounded-full bg-blue-600 ring-offset-2 hover:ring-2 ring-blue-600"></button>
                    <button class="w-6 h-6 rounded-full bg-yellow-500 ring-offset-2 hover:ring-2 ring-yellow-500"></button>
                    <button class="w-6 h-6 rounded-full bg-white border border-gray-200 ring-offset-2 hover:ring-2 ring-gray-200"></button>
                </div>
            </div>
        </div>

        <!-- ৩. প্রোডাক্ট গ্রিড (ডান পাশে) -->
        <div class="w-full lg:w-3/4">
            <!-- Sort & Results Info -->
            <div class="flex justify-between items-center mb-10 px-2">
                <p class="text-xs text-gray-500 font-bold uppercase tracking-widest">Showing 1-9 of 45 Results</p>
                <select class="bg-transparent border-none text-xs font-black uppercase tracking-widest focus:ring-0 cursor-pointer">
                    <option>Default Sorting</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                </select>
            </div>

            <div class="grid grid-cols-2 xl:grid-cols-3 gap-8">
                @for($i=1; $i<=9; $i++)
                <div class="bg-white rounded-[35px] shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-50 overflow-hidden group relative">
                    <!-- Product Image Area -->
                    <div class="h-80 bg-gray-100 relative overflow-hidden flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                        
                        <!-- Badges -->
                        <div class="absolute top-5 left-5 space-y-2">
                            <span class="block bg-red-600 text-white text-[9px] font-black px-2 py-1 rounded-full uppercase">-25% OFF</span>
                        </div>

                        <!-- Hover Actions -->
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center gap-3">
                            <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 hover:bg-yellow-400 transition-all"><i class="fa-regular fa-heart"></i></button>
                            <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 hover:bg-yellow-400 transition-all"><i class="fa-solid fa-cart-plus"></i></button>
                            <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 hover:bg-yellow-400 transition-all"><i class="fa-solid fa-eye"></i></button>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6 text-center">
                        <p class="text-[10px] text-yellow-600 font-black uppercase tracking-widest mb-1">Fashion</p>
                        <h4 class="font-black text-gray-900 text-sm uppercase group-hover:text-yellow-600 transition-colors">Premium Summer Outfit</h4>
                        <div class="flex justify-center items-center gap-3 mt-2">
                            <span class="text-lg font-black text-gray-900">$120.00</span>
                            <span class="text-xs text-gray-400 line-through">$160.00</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- ৪. পেজিনেশন -->
            <div class="mt-16 flex justify-center items-center gap-3">
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center hover:bg-yellow-400 transition-all italic">Prev</button>
                <button class="w-10 h-10 rounded-xl bg-yellow-400 font-black text-xs">1</button>
                <button class="w-10 h-10 rounded-xl border border-gray-200 font-black text-xs hover:bg-yellow-400 transition-all">2</button>
                <button class="w-10 h-10 rounded-xl border border-gray-200 font-black text-xs hover:bg-yellow-400 transition-all">3</button>
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center hover:bg-yellow-400 transition-all italic">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- ৫. নিচের বড় প্রমোশনাল ব্যানার (Visionary Style) -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[450px] rounded-[50px] overflow-hidden shadow-2xl group">
        <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628] via-[#0a1628]/40 to-transparent flex flex-col justify-end p-12 md:p-20 text-white text-left">
            <div class="max-w-2xl space-y-6">
                <span class="bg-yellow-400 text-black px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest italic">New Arrival</span>
                <h2 class="text-5xl md:text-6xl font-black uppercase leading-none logo-text">Luxury <br> <span class="text-yellow-400">Streetwear.</span></h2>
                <p class="text-sm opacity-70 leading-loose max-w-sm">
                    Discover the latest trends in our premium streetwear collection. Quality materials meet modern design.
                </p>
                <div class="pt-4">
                    <button class="gold-gradient text-black px-10 py-4 rounded-full font-black uppercase text-xs">Explore More</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection