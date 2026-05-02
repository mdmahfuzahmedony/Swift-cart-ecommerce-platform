@extends('layouts.frontend')

@section('content')
<div class="page-header-bg py-16 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-black uppercase logo-text tracking-tighter">
            Reset <span class="text-yellow-400">Password</span>
        </h1>
        <p class="text-[10px] mt-2 opacity-60 uppercase tracking-widest font-bold">Create your new security key</p>
    </div>
</div>

<div class="container mx-auto px-6 py-20 flex justify-center">
    <div class="w-full max-w-md bg-[#0a1628] p-10 rounded-[35px] shadow-2xl border border-white/5">
        
        <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Email Address</label>
                <input type="email" name="email" value="{{ old('email', $request->email) }}" required readonly
                       class="w-full bg-[#162136]/50 border border-white/10 rounded-2xl py-4 px-5 text-gray-400 focus:ring-0 outline-none text-sm">
            </div>

            <!-- New Password -->
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">New Password</label>
                <input type="password" name="password" required autofocus
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
            </div>

            <!-- Confirm Password -->
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
            </div>

            <button class="gold-gradient text-black font-black py-4 w-full rounded-2xl uppercase text-xs tracking-widest hover:scale-[1.02] transition-all shadow-lg shadow-yellow-400/10 mt-4">
                Reset Password
            </button>
        </form>
    </div>
</div>
@endsection