@extends('layouts.frontend')

@section('content')

<!-- ১. প্রিমিয়াম হেডার -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-black uppercase logo-text tracking-tighter">
            Support <span class="text-yellow-400">Center</span>
        </h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] md:text-xs uppercase font-black tracking-[0.4em] opacity-60">
            <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Help Desk</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 py-20">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- কন্টাক্ট ইনফরমেশন -->
        <div class="space-y-10">
            <div class="space-y-4">
                <h4 class="text-yellow-600 font-black uppercase text-xs tracking-[0.3em]">Customer Care</h4>
                <h2 class="text-4xl font-black text-gray-900 uppercase">Get in touch <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-orange-500">With Our Team.</span></h2>
            </div>

            <div class="grid gap-6">
                <!-- Email -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex items-center gap-6 group hover:border-yellow-400 transition-all">
                    <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0 text-2xl">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h3 class="font-black uppercase text-sm">Send us an Email</h3>
                        <p class="text-gray-500 text-xs mt-1">mdmahfuzahmedony@gmail.com</p>
                    </div>
                </div>
                <!-- Location -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex items-center gap-6 group hover:border-yellow-400 transition-all">
                    <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0 text-2xl">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h3 class="font-black uppercase text-sm">Visit Our Office</h3>
                        <p class="text-gray-500 text-xs mt-1">Jessore Sadar, Bangladesh</p>
                    </div>
                </div>
                <!-- Hours -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex items-center gap-6 group hover:border-yellow-400 transition-all">
                    <div class="w-16 h-16 bg-[#0a1628] rounded-2xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0 text-2xl">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div>
                        <h3 class="font-black uppercase text-sm">Business Hours</h3>
                        <p class="text-gray-500 text-xs mt-1">9:00 AM - 8:00 PM (Sat - Thu)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- সাপোর্ট ইমেজ -->
        <div class="relative group">
            <div class="absolute -inset-4 bg-yellow-400/20 rounded-[50px] blur-3xl"></div>
            <div class="relative h-[550px] rounded-[40px] overflow-hidden shadow-2xl border-8 border-white">
                <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</div>

<!-- ৪. নিচের বড় ইমেজ ব্যানার -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[450px] rounded-[50px] overflow-hidden shadow-2xl group">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628] via-[#0a1628]/40 to-transparent flex flex-col justify-end p-12 md:p-20 text-white">
            <h2 class="text-4xl md:text-5xl font-black uppercase logo-text">We're Always <br> <span class="text-yellow-400">By Your Side.</span></h2>
            <p class="text-sm mt-4 opacity-70 max-w-md">Our support center is dedicated to solving your problems. Feel free to reach out anytime you need help.</p>
        </div>
    </div>
</div>

@endsection