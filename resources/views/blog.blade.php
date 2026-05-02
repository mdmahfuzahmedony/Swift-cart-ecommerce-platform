@extends('layouts.frontend')

@section('content')

<!-- ১. হেডার সেকশন (About পেজের মতো ক্লিন ডিজাইন) -->
<div class=" py-16 text-center border-b border-white/5">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-black uppercase logo-text tracking-tighter text-black">
            Latest <span class="text-yellow-400">Blogs</span>
        </h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] uppercase font-black tracking-[0.4em] text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-yellow-400 transition-colors">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Insights & Stories</span>
        </div>
    </div>
</div>

<!-- ২. মেইন ব্লগ সেকশন -->
<div class="container mx-auto px-6 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <!-- বাম পাশের সাইডবার (Search & Categories) -->
        <div class="w-full lg:w-1/4 space-y-10 order-2 lg:order-1">
            
            <!-- সার্চ বার -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="text-sm font-black uppercase tracking-widest mb-4">Search Blog</h3>
                <div class="relative flex items-center bg-gray-50 border border-gray-200 rounded-lg overflow-hidden">
                    <input type="text" placeholder="Type here..." class="bg-transparent flex-1 px-4 py-3 text-xs outline-none border-none focus:ring-0">
                    <button class="px-4 text-gray-400 hover:text-yellow-600">🔍</button>
                </div>
            </div>

            <!-- ক্যাটাগরি লিস্ট -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="text-sm font-black uppercase tracking-widest mb-4 border-b border-yellow-400 pb-2">Categories</h3>
                <ul class="space-y-3">
                    @foreach(['Fashion Trends', 'Lifestyle', 'E-commerce Tips', 'New Arrivals', 'Success Stories'] as $category)
                    <li>
                        <a href="#" class="flex justify-between items-center text-xs font-bold text-gray-600 hover:text-yellow-600 transition-all">
                            <span>{{ $category }}</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-[9px]">{{ rand(5, 20) }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- জনপ্রিয় ট্যাগ (অতিরিক্ত আইডিয়া) -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="text-sm font-black uppercase tracking-widest mb-4">Popular Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="bg-gray-100 px-3 py-1.5 rounded text-[10px] font-bold hover:bg-yellow-400 transition-all">#DRESS</a>
                    <a href="#" class="bg-gray-100 px-3 py-1.5 rounded text-[10px] font-bold hover:bg-yellow-400 transition-all">#SHOES</a>
                    <a href="#" class="bg-gray-100 px-3 py-1.5 rounded text-[10px] font-bold hover:bg-yellow-400 transition-all">#SALE</a>
                </div>
            </div>
        </div>

        <!-- ডান পাশের ব্লগ লিস্ট (Grid) -->
        <div class="w-full lg:w-3/4 order-1 lg:order-2">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- ডামি ডেটা লুপ (৬টি ব্লগের জন্য) -->
                @for($i=1; $i<=6; $i++)
                <article class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 overflow-hidden group">
                    <!-- ব্লগ ইমেজ -->
                    <div class="h-60 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=800" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700" alt="Blog Image">
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-400 text-black px-3 py-1 rounded-full text-[9px] font-black uppercase tracking-tighter shadow-lg">Fashion</span>
                        </div>
                    </div>

                    <!-- ব্লগ কন্টেন্ট -->
                    <div class="p-8 space-y-4">
                        <div class="flex items-center gap-4 text-[10px] text-gray-400 font-bold uppercase">
                            <span>📅 April 28, 2024</span>
                            <span>👤 By Admin</span>
                        </div>
                        <h3 class="text-xl font-black text-gray-900 leading-tight group-hover:text-yellow-600 transition-colors">
                            The Secret to Picking the Perfect Summer Dress
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
                            Discover the latest trends in summer fashion. We talk about materials, colors, and styles that will keep you cool and stylish...
                        </p>
                        <div class="pt-2">
                            <a href="#" class="text-xs font-black uppercase border-b-2 border-yellow-400 pb-1 hover:text-yellow-600 transition-all inline-block tracking-widest">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>
                @endfor
            </div>

            <!-- ৩. পেজিনেশন (Pagination) -->
            <div class="mt-16 flex justify-center items-center gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-yellow-400 hover:text-black transition-all">«</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-yellow-400 text-black font-bold shadow-lg shadow-yellow-400/20">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-yellow-400 hover:text-black transition-all">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-yellow-400 hover:text-black transition-all">3</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-yellow-400 hover:text-black transition-all">»</a>
            </div>
        </div>

    </div>
</div>

@endsection