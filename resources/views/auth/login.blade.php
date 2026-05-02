@extends('layouts.frontend')

@section('content')
<!-- হেডার সেকশন -->
<div class="page-header-bg py-16 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-black uppercase logo-text tracking-tighter">
            Welcome <span class="text-yellow-400">Back</span>
        </h1>
        <p class="text-[10px] mt-2 opacity-60 uppercase tracking-widest font-bold">Login to your account</p>
    </div>
</div>

<div class="container mx-auto px-6 py-20 flex justify-center">
    <div class="w-full max-w-md bg-[#0a1628] p-10 rounded-[35px] shadow-2xl border border-white/5">
        
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus 
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Password -->
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Password</label>
                    @if (Route::has('password.request'))
                        <a class="text-[9px] text-yellow-400 font-bold uppercase hover:underline" href="{{ route('password.request') }}">Forgot?</a>
                    @endif
                </div>
                <input type="password" name="password" required 
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
            </div>

            <!-- Login Button -->
            <button class="gold-gradient text-black font-black py-4 w-full rounded-2xl uppercase text-xs tracking-widest hover:scale-[1.02] transition-all shadow-lg shadow-yellow-400/10">
                Sign In
            </button>

            <!-- গুগল লগইন বাটন (Socialite) -->
            <div class="relative flex py-4 items-center">
                <div class="flex-grow border-t border-white/5"></div>
                <span class="flex-shrink mx-4 text-gray-500 text-[10px] font-bold uppercase">Or continue with</span>
                <div class="flex-grow border-t border-white/5"></div>
            </div>

            <a href="{{ url('auth/google') }}" class="flex items-center justify-center gap-3 w-full bg-white text-black font-black py-4 rounded-2xl uppercase text-xs tracking-widest hover:bg-gray-200 transition-all shadow-lg">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google Logo">
                Login with Google
            </a>

            <p class="text-center text-[10px] text-gray-500 font-bold uppercase mt-6">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-yellow-400 hover:underline">Register Now</a>
            </p>
        </form>
    </div>
</div>
@endsection