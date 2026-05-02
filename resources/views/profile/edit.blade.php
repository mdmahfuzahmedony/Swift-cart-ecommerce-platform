@extends('layouts.frontend')

@section('content')
<!-- ১. পেজ হেডার (আপনার ব্রান্ড কালার অনুযায়ী হালকা ডিজাইন) -->
<div class=" py-16 text-center text-black">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-black uppercase tracking-tighter">My <span class="text-yellow-400">Profile</span></h1>
        <p class="text-xs mt-2 opacity-60 uppercase tracking-widest">Manage your orders and profile</p>
    </div>
</div>

<div class="container mx-auto px-6 py-12">
    <div class="max-w-6xl mx-auto space-y-8">
        
        <!-- ২. স্ট্যাটিসটিকস কার্ডস (Light Mode Style) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-between group hover:border-yellow-400 transition-all">
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase">Total Orders</p>
                    <h3 class="text-2xl font-black text-gray-900 mt-1">08</h3>
                </div>
                <div class="text-3xl bg-gray-50 w-12 h-12 rounded-2xl flex items-center justify-center">📦</div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-between group hover:border-yellow-400 transition-all">
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase">Total Spent</p>
                    <h3 class="text-2xl font-black text-gray-900 mt-1">$1,450</h3>
                </div>
                <div class="text-3xl bg-gray-50 w-12 h-12 rounded-2xl flex items-center justify-center">💰</div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-between group hover:border-yellow-400 transition-all">
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase">Wishlist</p>
                    <h3 class="text-2xl font-black text-gray-900 mt-1">12</h3>
                </div>
                <div class="text-3xl bg-gray-50 w-12 h-12 rounded-2xl flex items-center justify-center">❤️</div>
            </div>
        </div>

        <!-- ৩. প্রোফাইল এডিট সেকশন -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- বাম পাশে ফর্মসমূহ -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Profile Info Form -->
                <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-yellow-400 rounded-xl flex items-center justify-center text-black font-black">U</div>
                        <h2 class="text-lg font-black text-gray-900 uppercase">Personal Information</h2>
                    </div>
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Update Password Form -->
                <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center text-yellow-400 font-black">P</div>
                        <h2 class="text-lg font-black text-gray-900 uppercase">Update Password</h2>
                    </div>
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- ডান পাশে হেল্প এবং ডিলিট অপশন -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Support Card -->
                <div class="bg-yellow-400 p-8 rounded-[2rem] text-black">
                    <h3 class="font-black uppercase text-sm mb-2">Need help?</h3>
                    <p class="text-xs font-bold opacity-70 mb-4 leading-relaxed">Our support team is ready to help you with any issues.</p>
                    <a href="{{ route('contact') }}" class="inline-block bg-black text-white px-6 py-2 rounded-full text-[10px] font-black uppercase">Contact Support</a>
                </div>

                <!-- Delete Account -->
                <div class="bg-red-50 p-8 rounded-[2rem] border border-red-100">
                    <h3 class="text-red-600 font-black uppercase text-[10px] tracking-widest mb-4">Danger Zone</h3>
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection