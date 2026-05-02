@extends('layouts.admin')

@section('content')
<div class="max-w-6xl mx-auto pb-20">
    <!-- ১. হেডার সেকশন -->
    <div class="flex justify-between items-center mb-10">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Store Settings</h2>
            <p class="text-slate-500 font-medium text-sm">Configure your brand, shipping, and store-wide preferences.</p>
        </div>
        <div class="flex items-center gap-4 bg-white p-2 rounded-2xl border border-slate-100 shadow-sm">
            <span class="text-[10px] font-black uppercase tracking-widest ml-2 text-slate-400">Maintenance Mode</span>
            <!-- Maintenance Mode Toggle -->
            <label class="relative inline-flex items-center cursor-pointer mr-2">
                <input type="checkbox" class="sr-only peer">
                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-500"></div>
            </label>
        </div>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        
        <!-- বাম পাশ: জেনারেল এবং ব্র্যান্ডিং সেটিংস -->
        <div class="lg:col-span-2 space-y-8">
            
            <!-- ২. জেনারেল ইনফরমেশন -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-store text-[#FF7E3A]"></i> General Information
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2">Store Name *</label>
                        <input type="text" name="store_name" value="SwiftCart Store" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2">Support Email *</label>
                        <input type="email" name="support_email" value="support@swiftcart.com" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2">Currency</label>
                        <select name="currency" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                            <option value="BDT">BDT (৳) - Bangladeshi Taka</option>
                            <option value="USD">USD ($) - US Dollar</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2">Store Contact Phone</label>
                        <input type="text" name="phone" value="+880 17XXXXXXXX" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>
                </div>
                <div>
                    <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2">Store Address</label>
                    <textarea name="address" rows="2" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">House 12, Road 5, Block-C, Dhanmondi, Dhaka</textarea>
                </div>
            </div>

            <!-- ৩. শিপিং এবং ট্যাক্স সেটিংস -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-truck text-[#FF7E3A]"></i> Shipping & Taxation
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Inside Dhaka (৳)</label>
                        <input type="number" name="shipping_inside" value="60" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Outside Dhaka (৳)</label>
                        <input type="number" name="shipping_outside" value="120" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Tax/VAT (%)</label>
                        <input type="number" name="tax_percent" value="5" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
                    </div>
                </div>
            </div>

            <!-- ৪. সোশ্যাল মিডিয়া লিঙ্কস -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-share-alt text-[#FF7E3A]"></i> Social Media Presence
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative">
                        <i class="fab fa-facebook absolute left-5 top-1/2 -translate-y-1/2 text-blue-600"></i>
                        <input type="text" name="fb_link" placeholder="Facebook URL" class="w-full bg-slate-50 border-none rounded-2xl py-4 pl-12 pr-6 text-sm font-bold">
                    </div>
                    <div class="relative">
                        <i class="fab fa-instagram absolute left-5 top-1/2 -translate-y-1/2 text-pink-600"></i>
                        <input type="text" name="insta_link" placeholder="Instagram URL" class="w-full bg-slate-50 border-none rounded-2xl py-4 pl-12 pr-6 text-sm font-bold">
                    </div>
                </div>
            </div>
        </div>

        <!-- ডান পাশ: লোগো আপলোড এবং সেভ বাটন -->
        <div class="space-y-8">
            
            <!-- ৫. ব্র্যান্ডিং (লোগো এবং ফেভিকন) -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6 text-center">
                <h3 class="font-bold text-slate-800 flex items-center gap-2 justify-center mb-4">
                    <i class="fas fa-image text-[#FF7E3A]"></i> Store Branding
                </h3>
                
                <!-- লোগো আপলোড -->
                <div class="space-y-4">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Main Store Logo</p>
                    <div class="w-32 h-32 bg-slate-50 rounded-[25px] border-2 border-dashed border-slate-100 mx-auto flex items-center justify-center relative overflow-hidden group">
                        <i class="fas fa-plus text-slate-300 group-hover:text-[#FF7E3A] transition"></i>
                        <input type="file" name="logo" class="absolute inset-0 opacity-0 cursor-pointer">
                    </div>
                </div>

                <hr class="border-slate-50">

                <!-- ফেভিকন আপলোড -->
                <div class="space-y-4">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Site Favicon (32x32)</p>
                    <div class="w-16 h-16 bg-slate-50 rounded-2xl border-2 border-dashed border-slate-100 mx-auto flex items-center justify-center relative overflow-hidden group">
                        <i class="fas fa-plus text-xs text-slate-300 group-hover:text-[#FF7E3A] transition"></i>
                        <input type="file" name="favicon" class="absolute inset-0 opacity-0 cursor-pointer">
                    </div>
                </div>
            </div>

            <!-- ৬. অ্যাকশন কার্ড -->
            <div class="bg-slate-900 p-8 rounded-[35px] text-white shadow-xl shadow-slate-200">
                <p class="text-xs text-slate-400 leading-relaxed mb-6">
                    Updating these settings will affect your store's public appearance and billing calculations.
                </p>
                <button type="submit" class="w-full bg-[#FF7E3A] text-white py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] shadow-lg shadow-orange-900/20 hover:bg-white hover:text-slate-900 transition-all transform hover:-translate-y-1">
                    Save Configuration
                </button>
            </div>
        </div>
    </form>
</div>
@endsection