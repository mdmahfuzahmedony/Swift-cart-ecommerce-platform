@extends('layouts.app')

@section('content')
<div class="py-20 bg-[#FAFAFA] min-h-screen">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-extrabold text-slate-900 tracking-tighter mb-12 italic">Shopping <span class="text-slate-400">Cart</span></h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- কার্ট আইটেম লিস্ট -->
            <div class="lg:col-span-2 space-y-4">
                <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm flex items-center gap-8">
                    <div class="w-24 h-24 bg-[#F3F3F3] rounded-2xl p-2 shrink-0">
                        <img src="https://images.unsplash.com/photo-1539008835154-333310065a3c?q=80&w=200" class="w-full h-full object-contain mix-blend-multiply">
                    </div>
                    <div class="flex-1">
                        <h3 class="font-black text-slate-800 uppercase tracking-tight">Premium Silk Dress</h3>
                        <p class="text-[10px] font-bold text-slate-400 mt-1 uppercase">Color: Midnight Blue | Size: M</p>
                        <p class="text-[#FF7E3A] font-black text-lg mt-2">$120.00</p>
                    </div>
                    <div class="flex items-center border border-slate-100 rounded-xl px-4 py-2 gap-4 bg-slate-50">
                        <button class="text-slate-400">-</button>
                        <span class="font-black text-sm">1</span>
                        <button class="text-slate-400">+</button>
                    </div>
                    <button class="text-slate-300 hover:text-red-500 transition-all text-xl"><i class="far fa-trash-alt"></i></button>
                </div>
            </div>

            <!-- সামারি সেকশন -->
           <!-- সামারি সেকশন -->
<div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm h-fit space-y-6">
    <h3 class="font-black text-slate-900 uppercase text-sm tracking-widest border-b pb-4">Order Summary</h3>
    <div class="space-y-4">
        <div class="flex justify-between text-sm font-bold text-slate-500"><span>Subtotal</span> <span class="text-slate-900">$120.00</span></div>
        <div class="flex justify-between text-sm font-bold text-slate-500"><span>Shipping</span> <span class="text-[#22C55E] font-bold">FREE</span></div>
        <div class="pt-4 border-t border-slate-100 flex justify-between">
            <span class="font-black text-slate-900 uppercase text-sm">Total</span>
            <span class="text-2xl font-black text-[#FF7E3A]">$120.00</span>
        </div>
    </div>

    <!-- লিঙ্ক করা বাটন (Proceed to Checkout) -->
    <a href="{{ route('checkout') }}" 
       class="w-full block text-center bg-slate-900 text-white py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] hover:bg-[#FF7E3A] transition-all shadow-xl shadow-orange-100">
        Proceed to Checkout
    </a>

    <!-- Continue Shopping লিঙ্ক -->
    <a href="{{ route('shop') }}" class="block text-center text-[10px] font-black text-slate-400 uppercase tracking-widest hover:text-slate-900 transition-all italic underline">
        Continue Shopping
    </a>
</div>
        </div>
    </div>
</div>
@endsection