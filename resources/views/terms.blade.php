@extends('layouts.frontend')

@section('content')

<!-- ১. স্টাইলিশ হেডার (About ও Privacy পেজের মতো) -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-black uppercase logo-text tracking-tighter text-shadow-premium">
            Terms & <span class="text-yellow-400">Conditions</span>
        </h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] md:text-xs uppercase font-black tracking-[0.4em] opacity-60">
            <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Rules & Regulations</span>
        </div>
    </div>
</div>

<!-- ২. কন্টেন্ট এরিয়া -->
<div class="container mx-auto px-6 py-20 max-w-5xl">
    <div class="bg-white p-8 md:p-16 rounded-[40px] shadow-2xl border border-gray-50">
        
        <div class="space-y-12">
            
            <!-- Section 1: General -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-yellow-400 rounded-full shadow-[0_0_15px_rgba(250,204,21,0.5)]"></div>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-gray-900">1. General Terms</h2>
                </div>
                <p class="text-gray-600 leading-loose text-sm md:text-base">
                    By accessing and placing an order with SwiftCart, you confirm that you are in agreement with and bound by the terms of service contained in the Terms & Conditions outlined below. These terms apply to the entire website and any email or other type of communication between you and SwiftCart.
                </p>
            </section>

            <!-- Section 2: Products & Accuracy -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-yellow-400 rounded-full shadow-[0_0_15px_rgba(250,204,21,0.5)]"></div>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-gray-900">2. Product Accuracy</h2>
                </div>
                <div class="p-6 bg-gray-50 rounded-2xl border-l-4 border-yellow-400 italic">
                    <p class="text-sm text-gray-600 leading-relaxed">
                        We strive to display our products as accurately as possible. However, actual colors may vary depending on your monitor settings. We cannot guarantee that your monitor's display of any color will be accurate.
                    </p>
                </div>
            </section>

            <!-- Section 3: Payments & Security -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-yellow-400 rounded-full shadow-[0_0_15px_rgba(250,204,21,0.5)]"></div>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-gray-900">3. Payment & Security</h2>
                </div>
                <p class="text-gray-600 leading-loose text-sm md:text-base">
                    All payments are processed through secure third-party gateways (bKash, Rocket, Cards). SwiftCart does not store your financial details. We reserve the right to cancel any order if we suspect fraudulent activity.
                </p>
                <div class="flex flex-wrap gap-4 pt-2 grayscale opacity-50">
                    <i class="fa-brands fa-cc-visa text-3xl"></i>
                    <i class="fa-brands fa-cc-mastercard text-3xl"></i>
                    <i class="fa-brands fa-cc-paypal text-3xl"></i>
                </div>
            </section>

            <!-- Section 4: Shipping & Delivery -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-yellow-400 rounded-full shadow-[0_0_15px_rgba(250,204,21,0.5)]"></div>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-gray-900">4. Shipping Policy</h2>
                </div>
                <p class="text-gray-600 leading-loose text-sm md:text-base">
                    Orders are processed within 24-48 hours. Shipping times vary based on your location in Bangladesh. SwiftCart is not responsible for delays caused by the courier service or unforeseen circumstances.
                </p>
            </section>

        </div>

    </div>
</div>

<!-- ৩. নিচের বড় ইমেজ ব্যানার (Legal/Trust Theme) -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[450px] rounded-[50px] overflow-hidden shadow-2xl group">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
        
        <!-- Blue Overlay & Content -->
        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628] via-[#0a1628]/40 to-transparent flex flex-col justify-end p-12 md:p-20 text-white">
            <div class="max-w-2xl space-y-6">
                <span class="bg-yellow-400 text-black px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest italic">Legal Agreement</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase logo-text leading-none">Transparency <br> <span class="text-yellow-400">& Trust.</span></h2>
                <p class="text-sm opacity-70 leading-loose max-w-md">
                    We believe in clear and honest communication with our customers. Our terms are designed to protect both our brand and your shopping rights.
                </p>
                <div class="pt-4">
                    <a href="{{ route('contact') }}" class="gold-gradient text-black px-10 py-4 rounded-full font-black uppercase text-xs inline-block hover:scale-105 transition-all">Any Questions?</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection