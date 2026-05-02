@extends('layouts.frontend')

@section('content')
<!-- Hero Section -->
@section('content')
<!-- Hero Section with Background Image -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-black uppercase logo-text tracking-tighter">
            About <span class="text-yellow-400">SwiftCart</span>
        </h1>
        
    </div>
</div>

<div class="container mx-auto px-6 py-20">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Main About Image -->
        <div class="relative group">
            <div class="absolute -inset-4 bg-yellow-400/20 rounded-[40px] blur-2xl group-hover:bg-yellow-400/30 transition-all"></div>
            <div class="relative h-[500px] rounded-[30px] overflow-hidden shadow-2xl border-8 border-white">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800" 
                     class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700" 
                     alt="Our Store">
            </div>
            <!-- Floating Badge -->
            <div class="absolute -bottom-6 -right-6 bg-yellow-400 text-black p-8 rounded-2xl shadow-2xl font-black text-center leading-none">
                <span class="text-4xl">10+</span><br>
                <span class="text-[10px] uppercase tracking-widest">Years Exp.</span>
            </div>
        </div>
        
        <!-- Content Side -->
        <div class="space-y-8">
            <div class="space-y-4">
                <h4 class="text-yellow-600 font-black uppercase text-xs tracking-[0.3em]">Our Mission</h4>
                <h2 class="text-4xl font-black text-gray-900 leading-tight">We provide best <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-orange-500">Shopping Experience</span></h2>
                <p class="text-gray-600 leading-relaxed text-sm">
                    SwiftCart started with a simple idea: to make premium fashion and electronics accessible to everyone in Bangladesh. Since 2024, we've grown into a community of thousands of happy shoppers.
                </p>
                <p class="text-gray-600 leading-relaxed text-sm italic border-l-4 border-yellow-400 pl-4">
                    "Our goal is not just to sell products, but to build a relationship based on trust and quality."
                </p>
            </div>
            
            <!-- Features Grid -->
            <div class="grid grid-cols-2 gap-6 pt-4">
                <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-yellow-400 transition-all">
                    <div class="w-12 h-12 bg-yellow-400/10 rounded-xl flex items-center justify-center text-yellow-600 text-xl">
                        <i class="fa-solid fa-gem"></i>
                    </div>
                    <span class="text-xs font-black uppercase">Top Quality</span>
                </div>
                <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-yellow-400 transition-all">
                    <div class="w-12 h-12 bg-yellow-400/10 rounded-xl flex items-center justify-center text-yellow-600 text-xl">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <span class="text-xs font-black uppercase">Fast Delivery</span>
                </div>
                <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-yellow-400 transition-all">
                    <div class="w-12 h-12 bg-yellow-400/10 rounded-xl flex items-center justify-center text-yellow-600 text-xl">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <span class="text-xs font-black uppercase">Expert Support</span>
                </div>
                <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-yellow-400 transition-all">
                    <div class="w-12 h-12 bg-yellow-400/10 rounded-xl flex items-center justify-center text-yellow-600 text-xl">
                        <i class="fa-solid fa-shield-heart"></i>
                    </div>
                    <span class="text-xs font-black uppercase">Secure Pay</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- আপনার চাওয়া অনুযায়ী নিচের বড় ইমেজ ব্যানার সেকশন -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[550px] rounded-[50px] overflow-hidden shadow-2xl group">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
        
        <!-- Overlay Content -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent flex flex-col justify-end p-12 md:p-20 text-white">
            <div class="max-w-2xl space-y-6">
                <span class="bg-yellow-400 text-black px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Our Vision</span>
                <h2 class="text-5xl md:text-6xl font-black uppercase leading-none logo-text">Redefining <br> <span class="text-yellow-400">Online Retail.</span></h2>
                <p class="text-sm md:text-base opacity-70 leading-loose">
                    We are expanding our stores across Jessore and all over Bangladesh. Our vision is to become the most customer-centric company where people can find and discover anything they want to buy online.
                </p>
                <div class="pt-4 flex gap-6">
                    <button class="gold-gradient text-black px-10 py-4 rounded-full font-black uppercase text-xs hover:scale-105 transition-all">Learn More</button>
                    <button class="border-2 border-white/30 text-white px-10 py-4 rounded-full font-black uppercase text-xs hover:bg-white hover:text-black transition-all">Our Team</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- পরিসংখ্যান সেকশন (Extra Info) -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 grid grid-cols-2 lg:grid-cols-4 gap-10 text-center">
        <div>
            <div class="text-4xl font-black text-gray-900 mb-2">50k+</div>
            <div class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">Happy Customers</div>
        </div>
        <div>
            <div class="text-4xl font-black text-gray-900 mb-2">120+</div>
            <div class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">Premium Brands</div>
        </div>
        <div>
            <div class="text-4xl font-black text-gray-900 mb-2">24h</div>
            <div class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">Fast Delivery</div>
        </div>
        <div>
            <div class="text-4xl font-black text-gray-900 mb-2">100%</div>
            <div class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">Secure Checkout</div>
        </div>
    </div>
</div>
@endsection