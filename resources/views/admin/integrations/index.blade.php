@extends('layouts.admin')

@section('content')
<div class="flex flex-col gap-10 pb-10">
    <!-- ১. হেডার সেকশন -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Integrations</h2>
            <p class="text-slate-500 font-medium text-sm">Connect and manage third-party services for your store.</p>
        </div>
        <button class="bg-[#FF7E3A] text-white px-6 py-3 rounded-2xl hover:bg-slate-900 transition font-bold text-sm shadow-lg shadow-orange-100 flex items-center gap-2">
            <i class="fas fa-plus-circle text-xs"></i> Add More Integrations
        </button>
    </div>

    <!-- ২. পেমেন্ট গেটওয়ে (Payment Gateways) -->
    <div class="space-y-6">
        <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] ml-2">Payment Gateways</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Stripe -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex flex-col items-center text-center group hover:border-[#FF7E3A] transition-all">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 text-3xl mb-4">
                    <i class="fab fa-stripe"></i>
                </div>
                <h4 class="font-bold text-slate-800">Stripe Payments</h4>
                <p class="text-slate-400 text-[11px] mt-2 mb-6">International credit and debit card processing.</p>
                <div class="w-full flex items-center justify-between bg-slate-50 px-4 py-2 rounded-xl mb-4">
                    <span class="text-[10px] font-black uppercase text-green-500">Connected</span>
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                </div>
                <button class="w-full bg-slate-900 text-white py-3 rounded-xl text-xs font-bold hover:bg-red-500 transition-colors">Disconnect</button>
            </div>

            <!-- bKash -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex flex-col items-center text-center group hover:border-[#FF7E3A] transition-all">
                <div class="w-16 h-16 bg-pink-50 rounded-2xl flex items-center justify-center text-pink-600 text-3xl mb-4 font-black">
                    ৳
                </div>
                <h4 class="font-bold text-slate-800">bKash (Checkout)</h4>
                <p class="text-slate-400 text-[11px] mt-2 mb-6">Accept payments via bKash mobile banking.</p>
                <button class="w-full bg-[#FF7E3A] text-white py-3 rounded-xl text-xs font-bold shadow-lg shadow-orange-100">Connect Gateway</button>
            </div>

            <!-- SSLCommerz -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex flex-col items-center text-center group hover:border-[#FF7E3A] transition-all">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-800 text-3xl mb-4">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4 class="font-bold text-slate-800">SSLCommerz</h4>
                <p class="text-slate-400 text-[11px] mt-2 mb-6">Local cards and mobile banking aggregator.</p>
                <button class="w-full bg-slate-100 text-slate-400 py-3 rounded-xl text-xs font-bold">Connect Now</button>
            </div>
        </div>
    </div>

    <!-- ৩. শিপিং ও কুরিয়ার (Logistics) -->
    <div class="space-y-6">
        <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] ml-2">Logistics & Shipping</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Pathao -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex items-center gap-6 group hover:border-[#FF7E3A] transition-all">
                <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center text-red-600 text-2xl shrink-0">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-slate-800 text-sm">Pathao Courier</h4>
                    <p class="text-slate-400 text-[10px] mt-1">Automatic delivery request.</p>
                </div>
                <button class="p-3 bg-slate-50 text-slate-400 rounded-xl hover:bg-[#FF7E3A] hover:text-white transition"><i class="fas fa-link text-xs"></i></button>
            </div>

            <!-- Steadfast -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex items-center gap-6 group hover:border-[#FF7E3A] transition-all">
                <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 text-2xl shrink-0">
                    <i class="fas fa-truck-fast"></i>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-slate-800 text-sm">Steadfast</h4>
                    <p class="text-slate-400 text-[10px] mt-1">Cash on Delivery sync.</p>
                </div>
                <button class="p-3 bg-slate-50 text-slate-400 rounded-xl hover:bg-[#FF7E3A] hover:text-white transition"><i class="fas fa-link text-xs"></i></button>
            </div>
        </div>
    </div>

    <!-- ৪. মার্কেটিং ও কমিউনিকেশন (Marketing) -->
    <div class="space-y-6">
        <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] ml-2">Marketing & Social</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Mailchimp -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex flex-col items-center text-center group hover:border-[#FF7E3A] transition-all">
                <div class="w-16 h-16 bg-yellow-50 rounded-2xl flex items-center justify-center text-yellow-600 text-3xl mb-4">
                    <i class="fab fa-mailchimp"></i>
                </div>
                <h4 class="font-bold text-slate-800">Mailchimp</h4>
                <p class="text-slate-400 text-[11px] mt-2 mb-6">Automate email campaigns & newsletters.</p>
                <button class="w-full bg-slate-100 text-slate-600 py-3 rounded-xl text-xs font-bold">Configure</button>
            </div>

            <!-- WhatsApp -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex flex-col items-center text-center group hover:border-[#FF7E3A] transition-all">
                <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center text-green-500 text-3xl mb-4">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h4 class="font-bold text-slate-800">WhatsApp Chat</h4>
                <p class="text-slate-400 text-[11px] mt-2 mb-6">Direct communication with customers.</p>
                <div class="w-full flex items-center justify-between bg-green-50 px-4 py-2 rounded-xl">
                    <span class="text-[10px] font-black uppercase text-green-600">Active</span>
                    <i class="fas fa-check-circle text-green-600 text-xs"></i>
                </div>
            </div>

            <!-- Google Analytics -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm flex flex-col items-center text-center group hover:border-[#FF7E3A] transition-all">
                <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center text-orange-500 text-3xl mb-4">
                    <i class="fab fa-google"></i>
                </div>
                <h4 class="font-bold text-slate-800">GA4 Analytics</h4>
                <p class="text-slate-400 text-[11px] mt-2 mb-6">Track visitor behavior & conversions.</p>
                <button class="w-full bg-slate-100 text-slate-600 py-3 rounded-xl text-xs font-bold">Connect</button>
            </div>
        </div>
    </div>
</div>
@endsection