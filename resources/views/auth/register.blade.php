@extends('layouts.frontend')

@section('content')
<!-- হেডার সেকশন -->
<div class="page-header-bg py-16 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-black uppercase logo-text tracking-tighter">
            Join <span class="text-yellow-400">SwiftCart</span>
        </h1>
        <p class="text-[10px] mt-2 opacity-60 uppercase tracking-widest font-bold">Create your shopping account</p>
    </div>
</div>



<div class="container mx-auto px-6 py-20 flex justify-center">
    <div class="w-full max-w-lg bg-[#0a1628] p-10 rounded-[35px] shadow-2xl border border-white/5">
        
        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Full Name -->
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Full Name</label>
                <input type="text" name="name" :value="old('name')" required autofocus
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
            </div>

            <!-- Email Address -->
            <div class="space-y-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Email Address</label>
                <input type="email" name="email" :value="old('email')" required 
                       class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
            </div>

            <!-- Password & Confirm -->
            <div class="grid md:grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Password</label>
                    <input type="password" name="password" required 
                           class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Confirm</label>
                    <input type="password" name="password_confirmation" required 
                           class="w-full bg-[#162136] border border-white/10 rounded-2xl py-4 px-5 text-white focus:border-yellow-400 focus:ring-0 outline-none transition-all text-sm">
                </div>
            </div>

            <!-- Register Button -->
            <button class="gold-gradient text-black font-black py-4 w-full rounded-2xl uppercase text-xs tracking-widest hover:scale-[1.02] transition-all shadow-lg shadow-yellow-400/10 mt-4">
                Create Account
            </button>

            <!-- Social Divider -->
            <div class="relative flex py-4 items-center">
                <div class="flex-grow border-t border-white/5"></div>
                <span class="flex-shrink mx-4 text-gray-500 text-[10px] font-bold uppercase">Or use social</span>
                <div class="flex-grow border-t border-white/5"></div>
            </div>

            <!-- Google Button -->
            <a href="{{ url('auth/google') }}" class="flex items-center justify-center gap-3 w-full bg-white text-black font-black py-4 rounded-2xl uppercase text-xs tracking-widest hover:bg-gray-200 transition-all">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google Logo">
                Sign up with Google
            </a>

            <!-- এই অংশটি নতুন যোগ করা হয়েছে: Login Link -->
            <p class="text-center text-[10px] text-gray-500 font-bold uppercase mt-8 border-t border-white/5 pt-6">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-yellow-400 hover:underline ml-1">Login here</a>
            </p>
        </form>
    </div>
</div>
@endsection