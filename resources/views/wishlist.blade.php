@extends('layouts.app')

@section('content')
<div class="py-20 bg-[#FAFAFA] min-h-screen">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-extrabold text-slate-900 tracking-tighter mb-4 italic">My <span class="text-[#FF7E3A]">Wishlist</span></h1>
        <p class="text-slate-400 text-sm font-bold uppercase tracking-widest mb-16">Saved items for later</p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- উইশলিস্ট আইটেম ১ -->
            <div class="group bg-white p-6 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 relative">
                <button class="absolute top-6 right-6 text-slate-200 hover:text-red-500 transition-all"><i class="fas fa-times"></i></button>
                <div class="bg-[#F3F3F3] aspect-square rounded-[2rem] p-6 mb-6 overflow-hidden">
                    <img src="https://via.placeholder.com/300" class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700">
                </div>
                <h3 class="font-black text-slate-800 text-sm uppercase tracking-tight">Luxury Gold Watch</h3>
                <p class="text-[#FF7E3A] font-black text-lg mt-1">$250.00</p>
                <button class="w-full mt-6 bg-slate-50 text-slate-900 py-4 rounded-2xl font-black uppercase text-[10px] tracking-widest hover:bg-[#FF7E3A] hover:text-white transition-all border border-slate-100">Move to Cart</button>
            </div>
        </div>
    </div>
</div>
@endsection