@extends('layouts.frontend')

@section('content')

<!-- ১. স্টাইলিশ হেডার (Consistent with About & Contact) -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-black uppercase logo-text tracking-tighter">
            Privacy <span class="text-yellow-400">Policy</span>
        </h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] md:text-xs uppercase font-black tracking-[0.4em] opacity-60">
            <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Security & Trust</span>
        </div>
    </div>
</div>

<!-- ২. কন্টেন্ট এরিয়া -->
<div class="container mx-auto px-6 py-20 max-w-5xl">
    <div class="bg-white p-8 md:p-16 rounded-[40px] shadow-2xl border border-gray-50">
        
        <div class="space-y-12">
            <!-- Introduction -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-yellow-400 rounded-full"></div>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-gray-900">Introduction</h2>
                </div>
                <p class="text-gray-600 leading-loose text-sm md:text-base">
                    Welcome to SwiftCart. We value your privacy and are committed to protecting your personal data. This policy explains how we collect, use, and protect your information when you visit our website or make a purchase.
                </p>
            </section>

            <!-- Data Collection -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-yellow-400 rounded-full"></div>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-gray-900">Data Collection</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-2">What we collect?</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">We collect your name, email, phone number, and shipping address to ensure your orders reach you safely.</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-2">Cookies</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">We use cookies to improve your browsing experience and remember your preferences for future visits.</p>
                    </div>
                </div>
            </section>

            <!-- How We Use Data -->
            <section class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-8 bg-yellow-400 rounded-full"></div>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-gray-900">Usage of Data</h2>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                        <span class="text-sm text-gray-600">To process and deliver your orders efficiently.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                        <span class="text-sm text-gray-600">To provide 24/7 customer support and handle returns.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                        <span class="text-sm text-gray-600">To send you personalized offers and updates about new arrivals.</span>
                    </li>
                </ul>
            </section>

            <!-- Security -->
            <section class="space-y-4 p-8 bg-[#0a1628] rounded-3xl text-white">
                <h2 class="text-2xl font-black uppercase tracking-tight text-yellow-400">Security Commitment</h2>
                <p class="text-sm opacity-80 leading-loose">
                    We use industry-standard SSL encryption to protect your data during transactions. Your payment information (Credit Card/Bkash/Rocket) is processed through secure gateways and is never stored on our servers.
                </p>
            </section>
        </div>

    </div>
</div>

<!-- ৩. নিচের বড় ইমেজ ব্যান্তর (Security Theme) -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[450px] rounded-[50px] overflow-hidden shadow-2xl group">
        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628] via-[#0a1628]/40 to-transparent flex flex-col justify-end p-12 md:p-20 text-white">
            <div class="max-w-2xl space-y-6">
                <h2 class="text-4xl md:text-5xl font-black uppercase logo-text leading-none">Your Trust, Our <span class="text-yellow-400">Responsibility.</span></h2>
                <p class="text-sm opacity-70 leading-loose max-w-md">
                    We ensure that your data is handled with the highest level of security. Shop with confidence at SwiftCart.
                </p>
                <div class="pt-4">
                    <button class="gold-gradient text-black px-10 py-4 rounded-full font-black uppercase text-xs">Learn More About Security</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection