@extends('layouts.admin')

@section('content')
<!-- Alpine.js দিয়ে ডাইনামিক ফিল্ড ম্যানেজ করা হচ্ছে -->
<div class="max-w-5xl mx-auto pb-20" x-data="{ discountType: 'percentage' }">
    
    <!-- Header -->
    <div class="flex justify-between items-center mb-10">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Create New Coupon</h2>
            <p class="text-slate-500 font-medium text-sm">Set up a new discount offer for your customers.</p>
        </div>
        <a href="{{ route('admin.discounts') }}" class="px-6 py-3 bg-white border border-slate-200 rounded-2xl text-slate-600 font-bold text-sm hover:bg-slate-50 transition-all flex items-center gap-2 shadow-sm">
            <i class="fas fa-arrow-left text-xs"></i> Back to List
        </a>
    </div>

    <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        
        <!-- বাম পাশ: কুপন কনফিগারেশন -->
        <div class="lg:col-span-2 space-y-8">
            
            <!-- ১. কুপন বেসিক ইনফো -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-ticket-alt text-[#FF7E3A]"></i> Coupon Identity
                </h3>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2">Coupon Code *</label>
                        <input type="text" name="code" required placeholder="e.g. WINTER2024" 
                               class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-lg font-black tracking-widest text-[#FF7E3A] focus:ring-2 focus:ring-[#FF7E3A] uppercase">
                        <p class="text-[10px] text-slate-400 mt-2 ml-2">Customers will enter this at checkout.</p>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2">Discount Type</label>
                            <select x-model="discountType" name="type" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                                <option value="percentage">Percentage (%) Off</option>
                                <option value="fixed">Fixed Amount ($) Off</option>
                                <option value="shipping">Free Shipping</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest ml-2 mb-2" 
                                   x-text="discountType === 'percentage' ? 'Discount Percentage (%)' : (discountType === 'fixed' ? 'Discount Amount ($)' : 'Shipping Discount')"></label>
                            <input type="number" name="value" :disabled="discountType === 'shipping'" :placeholder="discountType === 'shipping' ? '0.00' : '20'"
                                   class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] disabled:opacity-50">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ২. কুপন রেস্ট্রিকশন (শর্তাবলী) -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-tasks text-[#FF7E3A]"></i> Usage Rules
                </h3>
                
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Minimum Purchase ($)</label>
                        <input type="number" name="min_spend" placeholder="500" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Category Selection</label>
                        <select name="category" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                            <option value="all">All Categories</option>
                            <option value="men">Men's Wear</option>
                            <option value="women">Women's Wear</option>
                            <option value="kids">Kids' Wear</option>
                            <option value="shoes">Shoes</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- ডান পাশ: লিমিট এবং সেভ বাটন -->
        <div class="space-y-8">
            
            <!-- ৩. লিমিট এবং তারিখ -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-history text-[#FF7E3A]"></i> Limits & Expiry
                </h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Total Usage Limit</label>
                        <input type="number" name="limit" placeholder="e.g. 500 times" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Expiry Date</label>
                        <input type="date" name="expiry_date" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>
                </div>
            </div>

            <!-- ৪. পাবলিশ কার্ড -->
            <div class="bg-slate-900 p-8 rounded-[35px] text-white shadow-xl shadow-slate-200">
                <div class="flex items-center justify-between mb-6">
                    <span class="text-xs font-black uppercase tracking-widest text-slate-400">Coupon Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-slate-700 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#FF7E3A]"></div>
                    </label>
                </div>
                
                <p class="text-xs text-slate-400 leading-relaxed mb-6">
                    By publishing, this coupon will be active immediately unless an expiry date is set.
                </p>

                <button type="submit" class="w-full bg-[#FF7E3A] text-white py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] shadow-lg shadow-orange-900/20 hover:bg-white hover:text-slate-900 transition-all transform hover:-translate-y-1">
                    Activate Coupon
                </button>
            </div>
        </div>
    </form>
</div>
@endsection