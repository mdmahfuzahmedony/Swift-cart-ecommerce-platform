@extends('layouts.frontend')

@section('content')
<div class="container mx-auto px-6 py-20 flex justify-center">
    <div class="w-full max-w-md bg-[#0a1628] p-10 rounded-[35px] shadow-2xl border border-white/5">
        <h2 class="text-black font-black uppercase text-center mb-6 tracking-widest">Confirm Password</h2>
        <div class="mb-6 text-[10px] text-gray-500 uppercase tracking-widest text-center">
            This is a secure area. Please confirm your password before continuing.
        </div>

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Password</label>
                <input type="password" name="password" required 
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 outline-none transition-all text-sm">
            </div>
            <button class="gold-gradient text-black font-black py-4 w-full rounded-2xl uppercase text-xs tracking-widest">
                Confirm
            </button>
        </form>
    </div>
</div>
@endsection