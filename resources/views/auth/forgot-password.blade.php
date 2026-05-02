@extends('layouts.frontend')

@section('content')
<div class="page-header-bg py-16 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-black uppercase logo-text tracking-tighter">
            Forgot <span class="text-yellow-400">Password?</span>
        </h1>
        <p class="text-[10px] mt-2 opacity-60 uppercase tracking-widest font-bold">Recover your account access</p>
    </div>
</div>

<div class="container mx-auto px-6 py-20 flex justify-center">
    <div class="w-full max-w-md bg-[#0a1628] p-10 rounded-[35px] shadow-2xl border border-white/5">
        
        <div class="mb-6 text-[11px] text-gray-400 leading-relaxed text-center uppercase tracking-wide">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 font-bold text-xs text-green-500 bg-green-500/10 p-3 rounded-xl text-center border border-green-500/20">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Email Address</label>
                <input type="email" name="email" :value="old('email')" required autofocus 
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <button class="gold-gradient text-black font-black py-4 w-full rounded-2xl uppercase text-xs tracking-widest hover:scale-[1.02] transition-all shadow-lg shadow-yellow-400/10 mt-4">
                Email Reset Link
            </button>

            <p class="text-center text-[10px] text-gray-500 font-bold uppercase mt-6">
                <a href="{{ route('login') }}" class="text-yellow-400 hover:underline">Back to Login</a>
            </p>
        </form>
    </div>
</div>
@endsection