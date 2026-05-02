@extends('layouts.admin')

@section('content')
<div class="flex flex-col gap-8">
    <!-- ১. টপ সেকশন: টাইটেল এবং স্ট্যাটস (Segmentation) -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Customer Database</h2>
            <p class="text-slate-500 font-medium">Manage segments, order history, and reviews.</p>
        </div>
        <div class="flex gap-4">
            <button class="bg-white border border-slate-200 text-slate-600 px-6 py-3 rounded-2xl hover:bg-slate-50 transition font-bold text-sm flex items-center gap-2 shadow-sm">
                <i class="fas fa-filter text-xs"></i> Filter Segments
            </button>
            <button class="bg-[#FF7E3A] text-white px-6 py-3 rounded-2xl hover:bg-slate-900 transition font-bold text-sm shadow-lg shadow-orange-100 flex items-center gap-2">
                <i class="fas fa-user-plus text-xs"></i> Add New Customer
            </button>
        </div>
    </div>

    <!-- ২. কাস্টমার সেগমেন্টেশন স্ট্যাটস (Quick Insights) -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-[10px] uppercase font-black tracking-widest">Total Customers</p>
            <h3 class="text-2xl font-bold text-gray-800 mt-1">8,432</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-orange-500 text-[10px] uppercase font-black tracking-widest">VIP Customers</p>
            <div class="flex items-center gap-2">
                <h3 class="text-2xl font-bold text-gray-800 mt-1">1,204</h3>
                <span class="bg-orange-100 text-orange-600 text-[9px] font-bold px-2 py-0.5 rounded-full">+12%</span>
            </div>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-blue-500 text-[10px] uppercase font-black tracking-widest">New Joined (30d)</p>
            <h3 class="text-2xl font-bold text-gray-800 mt-1">430</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-green-500 text-[10px] uppercase font-black tracking-widest">Active Now</p>
            <h3 class="text-2xl font-bold text-gray-800 mt-1">124</h3>
        </div>
    </div>

    <!-- ৩. মেইন টেবিল সেকশন -->
    <div class="bg-white rounded-[35px] border border-gray-100 shadow-sm overflow-hidden">
        <!-- সার্চ এবং অ্যাকশন বার -->
        <div class="p-8 border-b border-gray-50 flex justify-between items-center">
            <div class="relative w-96">
                <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-300"></i>
                <input type="text" placeholder="Search by name, email or phone..." class="w-full bg-gray-50 border-none rounded-2xl pl-12 pr-4 py-4 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] transition">
            </div>
            <div class="flex gap-3">
                <button class="p-3 text-slate-400 hover:text-[#FF7E3A] transition"><i class="fas fa-file-export"></i></button>
                <button class="p-3 text-slate-400 hover:text-[#FF7E3A] transition"><i class="fas fa-cog"></i></button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-400 uppercase text-[10px] font-black tracking-[0.15em] bg-gray-50/50">
                        <th class="py-5 px-8">Customer Details</th>
                        <th class="py-5 px-8 text-center">Segmentation</th>
                        <th class="py-5 px-8">Total Orders</th>
                        <th class="py-5 px-8">Joined Date</th>
                        <th class="py-5 px-8 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <!-- Row 1 (VIP Customer Example) -->
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="py-6 px-8">
                            <div class="flex items-center gap-4">
                                <img src="https://ui-avatars.com/api/?name=Marcus+George&background=FF7E3A&color=fff" class="w-11 h-11 rounded-xl shadow-sm">
                                <div>
                                    <p class="text-sm font-black text-slate-800">Marcus George</p>
                                    <p class="text-[11px] font-medium text-slate-400">marcus@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-6 px-8 text-center">
                            <span class="bg-orange-50 text-orange-600 px-4 py-1.5 rounded-full text-[9px] font-black uppercase tracking-widest border border-orange-100">
                                <i class="fas fa-crown text-[8px] mr-1"></i> VIP Member
                            </span>
                        </td>
                        <td class="py-6 px-8">
                            <div class="flex flex-col">
                                <span class="text-sm font-black text-slate-800">12 Orders</span>
                                <span class="text-[10px] font-bold text-green-500">Total Spent: $4,250</span>
                            </div>
                        </td>
                        <td class="py-6 px-8 text-sm font-bold text-slate-500">Oct 12, 2023</td>
                        <td class="py-6 px-8 text-center">
                            <div class="flex justify-center gap-2">
                                <!-- Order History Button -->
                                <button title="View History" class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-slate-900 hover:text-white transition-all">
                                    <i class="fas fa-history text-xs"></i>
                                </button>
                                <!-- Reviews Button -->
                                <button title="Manage Reviews" class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-blue-500 hover:text-white transition-all">
                                    <i class="fas fa-star text-xs"></i>
                                </button>
                                <!-- Contact Button -->
                                <button title="Message" class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-green-500 hover:text-white transition-all">
                                    <i class="fas fa-envelope text-xs"></i>
                                </button>
                                <!-- Delete Button -->
                                <button title="Delete" class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-red-500 hover:text-white transition-all">
                                    <i class="fas fa-trash-alt text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 (Regular Customer Example) -->
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="py-6 px-8">
                            <div class="flex items-center gap-4">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Ali&background=E2E8F0&color=475569" class="w-11 h-11 rounded-xl shadow-sm">
                                <div>
                                    <p class="text-sm font-black text-slate-800">Sarah Ali</p>
                                    <p class="text-[11px] font-medium text-slate-400">sarah@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-6 px-8 text-center">
                            <span class="bg-slate-50 text-slate-400 px-4 py-1.5 rounded-full text-[9px] font-black uppercase tracking-widest border border-slate-100">
                                Regular
                            </span>
                        </td>
                        <td class="py-6 px-8">
                            <div class="flex flex-col">
                                <span class="text-sm font-black text-slate-800">02 Orders</span>
                                <span class="text-[10px] font-bold text-slate-400">Total Spent: $180</span>
                            </div>
                        </td>
                        <td class="py-6 px-8 text-sm font-bold text-slate-500">Jan 05, 2024</td>
                        <td class="py-6 px-8 text-center">
                            <div class="flex justify-center gap-2">
                                <button class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-slate-900 hover:text-white transition-all"><i class="fas fa-history text-xs"></i></button>
                                <button class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-blue-500 hover:text-white transition-all"><i class="fas fa-star text-xs"></i></button>
                                <button class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-green-500 hover:text-white transition-all"><i class="fas fa-envelope text-xs"></i></button>
                                <button class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-red-500 hover:text-white transition-all"><i class="fas fa-trash-alt text-xs"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection