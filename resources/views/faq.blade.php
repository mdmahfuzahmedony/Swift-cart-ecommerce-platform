@extends('layouts.frontend')

@section('content')

<!-- ১. প্রফেশনাল ডার্ক হেডার (Consistent with other pages) -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-black uppercase logo-text tracking-tighter">
            Help & <span class="text-yellow-400">Support</span>
        </h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] md:text-xs uppercase font-black tracking-[0.4em] opacity-60">
            <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Customer Care</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 py-20">
    <div class="flex flex-col lg:flex-row gap-16">
        
        <!-- ২. বাম পাশে সাপোর্ট কন্টাক্ট কার্ডস -->
        <div class="w-full lg:w-1/3 space-y-8">
            <div class="space-y-4">
                <h4 class="text-yellow-600 font-black uppercase text-xs tracking-[0.3em]">Support Center</h4>
                <h2 class="text-3xl font-black text-gray-900 uppercase leading-tight">How can we <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-orange-500">Help You today?</span></h2>
                <p class="text-sm text-gray-500 leading-relaxed">If you cannot find the answer in our FAQ, you can always contact our dedicated support team via email or phone.</p>
            </div>

            <div class="grid gap-4">
                <!-- Contact Method 1 -->
                <div class="p-6 bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center gap-5 group hover:border-yellow-400 transition-all">
                    <div class="w-12 h-12 bg-[#0a1628] rounded-xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0">
                        <i class="fa-solid fa-headset text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-xs uppercase">24/7 Live Chat</h3>
                        <p class="text-gray-400 text-[10px] mt-1 italic">Average response: 5 mins</p>
                    </div>
                </div>

                <!-- Contact Method 2 -->
                <div class="p-6 bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center gap-5 group hover:border-yellow-400 transition-all">
                    <div class="w-12 h-12 bg-[#0a1628] rounded-xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0">
                        <i class="fa-solid fa-envelope-open-text text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-xs uppercase">Email Support</h3>
                        <p class="text-gray-500 text-[10px] mt-1 italic">mdmahfuzahmedony@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ৩. ডান পাশে ডাইনামিক FAQ (Alpine.js Accordion) -->
        <div class="w-full lg:w-2/3" x-data="{ active: 1 }">
            <h3 class="text-sm font-black uppercase tracking-widest mb-8 border-b-2 border-yellow-400 pb-2 inline-block">Frequently Asked Questions</h3>
            
            <div class="space-y-4">
                @php 
                $faqs = [
                    1 => ['q' => 'How to place an order?', 'a' => 'Simply browse our products, add your desired items to the cart, and proceed to checkout. Fill in your delivery details and choose your preferred payment method to complete the order.'],
                    2 => ['q' => 'What is the average delivery time?', 'a' => 'For orders inside Jessore, we deliver within 24-48 hours. For other locations across Bangladesh, it usually takes 3-5 business days.'],
                    3 => ['q' => 'Do you have a return policy?', 'a' => 'Yes! We have a 7-day easy return policy. If the product is defective or doesn’t match the description, you can return it easily.'],
                    4 => ['q' => 'How can I track my order?', 'a' => 'Once your order is shipped, we will send you a tracking ID via SMS. You can use this ID on our "Track Order" page to see real-time updates.'],
                    5 => ['q' => 'Which payment methods do you accept?', 'a' => 'We accept bKash, Rocket, Nagad, Cash on Delivery, and all major Debit/Credit cards through our secure payment gateway.']
                ]; 
                @endphp

                @foreach($faqs as $id => $faq)
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden transition-all">
                    <button @click="active = (active === {{ $id }} ? null : {{ $id }})" 
                            class="w-full px-8 py-5 text-left flex justify-between items-center hover:bg-gray-50 transition-all">
                        <span class="font-bold text-gray-800 text-sm md:text-base tracking-tight" :class="active === {{ $id }} ? 'text-yellow-600' : ''">
                            {{ $faq['q'] }}
                        </span>
                        <span class="text-xl font-light transition-transform duration-300" :class="active === {{ $id }} ? 'rotate-45 text-yellow-600' : ''">+</span>
                    </button>
                    
                    <div x-show="active === {{ $id }}" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="px-8 pb-6 text-sm text-gray-500 leading-relaxed border-t border-gray-50 pt-4 bg-gray-50/50">
                        {{ $faq['a'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

<!-- ৪. নিচের বড় ইমেজ ব্যানার (Customer Support Theme) -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[450px] rounded-[50px] overflow-hidden shadow-2xl group">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
        
        <!-- Blue Overlay & Content -->
        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628] via-[#0a1628]/30 to-transparent flex flex-col justify-end p-12 md:p-20 text-white">
            <div class="max-w-xl space-y-6">
                <span class="bg-yellow-400 text-black px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest italic">Happy to Help</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase logo-text leading-none">Your Smiles <br> <span class="text-yellow-400">Our Motivation.</span></h2>
                <p class="text-sm opacity-70 leading-loose max-w-sm">
                    We are committed to providing you with the best shopping experience possible. If you need any assistance, our team is just one click away.
                </p>
                <div class="pt-4 flex gap-4">
                    <a href="{{ route('contact') }}" class="gold-gradient text-black px-8 py-3 rounded-full font-black uppercase text-[10px] shadow-xl">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection