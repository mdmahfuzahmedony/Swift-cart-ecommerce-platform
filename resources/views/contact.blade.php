@extends('layouts.frontend')

@section('content')

<!-- ১. স্টাইলিশ হেডার (About পেজের মতো) -->
<div class="page-header-bg py-24 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-black uppercase logo-text tracking-tighter">
            Contact <span class="text-yellow-400">Us</span>
        </h1>
        <div class="flex justify-center items-center gap-3 mt-4 text-[10px] md:text-xs uppercase font-black tracking-[0.4em] opacity-60">
            <a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a>
            <span>/</span>
            <span class="text-yellow-400">Get In Touch</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 py-20">
    <div class="grid lg:grid-cols-3 gap-12">
        
        <!-- ২. কন্টাক্ট ইনফো কার্ডস (বাম পাশে) -->
        <div class="lg:col-span-1 space-y-6">
            <div class="space-y-4">
                <h4 class="text-yellow-600 font-black uppercase text-xs tracking-[0.3em]">Contact Info</h4>
                <h2 class="text-3xl font-black text-gray-900 uppercase leading-tight">We're here to <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-orange-500">Help You.</span></h2>
            </div>

            <!-- Location Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5 group hover:border-yellow-400 transition-all">
                <div class="w-14 h-14 bg-[#0a1628] rounded-xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0">
                    <i class="fa-solid fa-location-dot text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-black text-sm uppercase">Our Location</h3>
                    <p class="text-gray-500 text-xs mt-1">Jessore Sadar, Bangladesh</p>
                </div>
            </div>

            <!-- Email Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5 group hover:border-yellow-400 transition-all">
                <div class="w-14 h-14 bg-[#0a1628] rounded-xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0">
                    <i class="fa-solid fa-envelope text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-black text-sm uppercase">Email Us</h3>
                    <p class="text-gray-500 text-xs mt-1">mdmahfuzahmedony@gmail.com</p>
                </div>
            </div>

            <!-- Call Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5 group hover:border-yellow-400 transition-all">
                <div class="w-14 h-14 bg-[#0a1628] rounded-xl flex items-center justify-center text-yellow-400 group-hover:bg-yellow-400 group-hover:text-black transition-all shrink-0">
                    <i class="fa-solid fa-phone-volume text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-black text-sm uppercase">Call Anytime</h3>
                    <p class="text-gray-500 text-xs mt-1">+880 123 456 789</p>
                </div>
            </div>
        </div>

        <!-- ৩. কন্টাক্ট ফর্ম (ডান পাশে) -->
        <div class="lg:col-span-2">
            <form class="bg-white p-10 rounded-[30px] shadow-xl border border-gray-50 space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Full Name</label>
                        <input type="text" placeholder="Mahfuz Ahmed" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-4 px-5 focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Email Address</label>
                        <input type="email" placeholder="example@gmail.com" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-4 px-5 focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Subject</label>
                    <input type="text" placeholder="How can we help?" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-4 px-5 focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Message</label>
                    <textarea rows="5" placeholder="Write your message here..." class="w-full bg-gray-50 border border-gray-200 rounded-xl py-4 px-5 focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm"></textarea>
                </div>
                <button class="gold-gradient text-black font-black py-4 px-12 rounded-full uppercase text-xs tracking-[0.2em] hover:scale-105 transition-all shadow-lg shadow-yellow-400/20">
                    Send Message <i class="fa-solid fa-paper-plane ml-2"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<!-- ৪. গুগল ম্যাপ সেকশন (যশোর সদর) -->
<div class="container mx-auto px-6 mb-20">
    <div class="h-[450px] rounded-[40px] overflow-hidden shadow-2xl border-8 border-white relative">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58671.0711100366!2d89.17646608985161!3d23.164807494488346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff108d0526765b%3A0x197938bf002f5989!2sJessore!5e0!3m2!1sen!2sbd!4v1714290000000!5m2!1sen!2sbd" 
            class="w-full h-full grayscale hover:grayscale-0 transition-all duration-1000" 
            style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</div>

<!-- ৫. নিচের বড় ব্যানার ইমেজ (About পেজের মতো) -->
<div class="container mx-auto px-6 mb-24">
    <div class="relative h-[400px] rounded-[50px] overflow-hidden shadow-2xl group">
        <img src="https://images.unsplash.com/photo-1534536281715-e28d76689b4d?auto=format&fit=crop&q=80&w=1500" 
             class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628] via-[#0a1628]/60 to-transparent flex flex-col justify-center p-12 md:p-20 text-white">
            <h2 class="text-4xl md:text-5xl font-black uppercase logo-text leading-none">Need <span class="text-yellow-400">Custom Order?</span></h2>
            <p class="text-sm mt-4 opacity-70 max-w-md">Our support team is available 24/7 to answer your questions. Reach out to us for bulk orders or specialized requests.</p>
            <div class="mt-8 flex gap-4">
                <a href="mailto:mdmahfuzahmedony@gmail.com" class="gold-gradient text-black px-8 py-3 rounded-full font-black uppercase text-[10px]">Email Support</a>
            </div>
        </div>
    </div>
</div>

@endsection