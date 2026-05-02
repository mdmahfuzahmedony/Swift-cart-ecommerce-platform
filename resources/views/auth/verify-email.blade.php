@extends('layouts.frontend')

@section('content')
<div class="page-header-bg py-16 text-center text-black border-b border-yellow-400/20">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-black uppercase logo-text tracking-tighter">
            Verify <span class="text-yellow-400">Email</span>
        </h1>
        <p class="text-[10px] mt-2 opacity-60 uppercase tracking-widest font-bold">Please check your inbox</p>
    </div>
</div>

<div class="container mx-auto px-6 py-20 flex justify-center">
    <div class="w-full max-w-md bg-[#0a1628] p-10 rounded-[35px] shadow-2xl border border-white/5 text-center">
        
        <div class="mb-8 text-[11px] text-gray-400 leading-relaxed uppercase tracking-wide">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-6 font-bold text-xs text-yellow-400 bg-yellow-400/10 p-3 rounded-xl border border-yellow-400/20">
                A new verification link has been sent to your email.
            </div>
        @endif

        <div class="flex flex-col gap-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button class="gold-gradient text-black font-black py-4 w-full rounded-2xl uppercase text-xs tracking-widest hover:scale-[1.02] transition-all">
                    Resend Email
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-[10px] font-black text-gray-500 hover:text-red-400 uppercase tracking-widest transition-all">
                    Logout Account
                </button>
            </form>
        </div>
    </div>
</div>
@endsection