@extends('layouts.frontend')

@section('content')

<!-- ১. প্রিমিয়াম হেডার -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-black uppercase logo-text tracking-tighter">
            Return <span class="text-yellow-400">& Exchange</span>
        </h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] md:text-xs uppercase font-black tracking-[0.4em] opacity-60">
            <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Easy Returns</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 py-20">
    <!-- ২. ৩টি সহজ স্টেপ (রিটার্ন প্রসেস) -->
    <div class="text-center mb-16 space-y-4">
        <h4 class="text-yellow-600 font-black uppercase text-xs tracking-[0.3em]">How it works</h4>
        <h2 class="text-3xl font-black text-gray-900 uppercase">3 Easy Steps to <span class="text-yellow-500">Return</span></h2>
    </div>

    <div class="grid md:grid-cols-3 gap-8 mb-20">
        <!-- Step 1 -->
        <div class="bg-white p-10 rounded-[30px] border border-gray-100 shadow-sm text-center group hover:border-yellow-400 transition-all">
            <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center text-yellow-400 mx-auto mb-6 text-2xl group-hover:bg-yellow-400 group-hover:text-black transition-all">
                <i class="fa-solid fa-box-open"></i>
            </div>
            <h3 class="font-black uppercase text-sm mb-3">1. Check Product</h3>
            <p class="text-gray-500 text-xs leading-loose">Make sure the tags are intact and the product is unused. Keep the original packaging ready.</p>
        </div>
        <!-- Step 2 -->
        <div class="bg-white p-10 rounded-[30px] border border-gray-100 shadow-sm text-center group hover:border-yellow-400 transition-all">
            <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center text-yellow-400 mx-auto mb-6 text-2xl group-hover:bg-yellow-400 group-hover:text-black transition-all">
                <i class="fa-solid fa-truck-fast"></i>
            </div>
            <h3 class="font-black uppercase text-sm mb-3">2. Request Return</h3>
            <p class="text-gray-500 text-xs leading-loose">Contact our support within 7 days. We will arrange a pickup or you can send it via courier.</p>
        </div>
        <!-- Step 3 -->
        <div class="bg-white p-10 rounded-[30px] border border-gray-100 shadow-sm text-center group hover:border-yellow-400 transition-all">
            <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center text-yellow-400 mx-auto mb-6 text-2xl group-hover:bg-yellow-400 group-hover:text-black transition-all">
                <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>
            <h3 class="font-black uppercase text-sm mb-3">3. Get Refund</h3>
            <p class="text-gray-500 text-xs leading-loose">Once we receive and verify the item, your refund will be processed within 3-5 business days.</p>
        </div>
    </div>

    <!-- ৩. ইমেজ এবং বিস্তারিত কন্ডিশন -->
    <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="rounded-[40px] overflow-hidden shadow-2xl h-[450px]">
            <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover">
        </div>
        <div class="space-y-6">
            <h2 class="text-3xl font-black text-gray-900 uppercase">Return <span class="text-yellow-500">Policy</span> Conditions</h2>
            <ul class="space-y-4">
                <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-2xl">
                    <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                    <p class="text-sm text-gray-600">The product must be in its original condition with tags and bill.</p>
                </li>
                <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-2xl">
                    <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                    <p class="text-sm text-gray-600">Items like innerwear or hygiene products are not eligible for return.</p>
                </li>
                <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-2xl">
                    <i class="fa-solid fa-circle-check text-yellow-500 mt-1"></i>
                    <p class="text-sm text-gray-600">Damaged or wrong products must be reported within 24 hours of delivery.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- ৪. নিচের বড় ব্যানার -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[400px] rounded-[50px] overflow-hidden shadow-2xl group">
        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628] via-[#0a1628]/60 to-transparent flex flex-col justify-center p-12 md:p-20 text-white">
            <h2 class="text-4xl md:text-5xl font-black uppercase logo-text leading-none">Shop with <br> <span class="text-yellow-400">Confidence.</span></h2>
            <p class="text-sm mt-4 opacity-70 max-w-md">Our easy return policy ensures that your shopping experience is risk-free and enjoyable. We are always here for you.</p>
        </div>
    </div>
</div>

@endsection