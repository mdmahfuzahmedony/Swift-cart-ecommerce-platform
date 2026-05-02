@extends('layouts.admin')

@section('content')
<div class="flex flex-col gap-8">
    <!-- Header Section -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">Orders Management</h2>
            <p class="text-gray-500 font-medium">Manage and track all customer orders from here.</p>
        </div>
        <div class="flex gap-3">
            <button class="bg-white border border-gray-200 text-gray-600 px-6 py-3 rounded-2xl hover:bg-gray-50 transition font-bold text-sm flex items-center gap-2 shadow-sm">
                <i class="fas fa-download text-xs"></i> Export
            </button>
            
            <!-- বাটনটিকে লিঙ্কে পরিবর্তন করা হয়েছে -->
            <a href="{{ route('admin.orders.create') }}" class="bg-[#FF7E3A] text-white px-6 py-3 rounded-2xl hover:bg-slate-900 transition font-bold text-sm shadow-lg shadow-orange-100 flex items-center gap-2">
                <i class="fas fa-plus text-xs"></i> Create New Order
            </a>
        </div>
    </div>

    <!-- Stats Cards (আগের মতোই, শুধু একটু সুন্দর করা হয়েছে) -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-[10px] uppercase font-black tracking-widest">All Orders</p>
            <h3 class="text-2xl font-bold text-gray-800 mt-1">1,254</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-orange-500 text-[10px] uppercase font-black tracking-widest">Pending</p>
            <h3 class="text-2xl font-bold text-gray-800 mt-1">45</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-green-500 text-[10px] uppercase font-black tracking-widest">Completed</p>
            <h3 class="text-2xl font-bold text-gray-800 mt-1">1,180</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-red-500 text-[10px] uppercase font-black tracking-widest">Cancelled</p>
            <h3 class="text-2xl font-bold text-gray-800 mt-1">29</h3>
        </div>
    </div>

    <!-- Table Section -->
    <div class="bg-white rounded-[35px] border border-gray-100 shadow-sm overflow-hidden">
        <!-- Search & Filter Bar -->
        <div class="p-8 border-b border-gray-50 flex justify-between items-center">
            <div class="relative w-80">
                <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-300"></i>
                <input type="text" placeholder="Search orders by ID, name..." class="w-full bg-gray-50 border-none rounded-2xl pl-12 pr-4 py-3.5 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] transition">
            </div>
            <div class="flex gap-3">
                <button class="w-12 h-12 flex items-center justify-center text-gray-400 bg-gray-50 rounded-xl hover:bg-gray-100 transition"><i class="fas fa-filter"></i></button>
                <button class="w-12 h-12 flex items-center justify-center text-gray-400 bg-gray-50 rounded-xl hover:bg-gray-100 transition"><i class="fas fa-ellipsis-h"></i></button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-400 uppercase text-[10px] font-black tracking-[0.15em] bg-gray-50/50">
                        <th class="py-5 px-8">Order ID</th>
                        <th class="py-5 px-8">Customer</th>
                        <th class="py-5 px-8">Order Date</th>
                        <th class="py-5 px-8">Total Amount</th>
                        <th class="py-5 px-8">Status</th>
                        <th class="py-5 px-8 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="py-6 px-8 text-sm font-bold text-gray-400">#9854</td>
                        <td class="py-6 px-8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-[#FF7E3A] rounded-xl flex items-center justify-center text-white font-bold text-xs shadow-md shadow-orange-100">JD</div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">John Doe</p>
                                    <p class="text-[11px] font-medium text-gray-400">john@example.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-6 px-8 text-sm font-bold text-gray-500">Aug 24, 2023</td>
                        <td class="py-6 px-8 text-sm font-black text-gray-800">$450.00</td>
                        <td class="py-6 px-8">
                            <span class="bg-green-50 text-green-600 px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest border border-green-100">Completed</span>
                        </td>
                        <td class="py-6 px-8 text-center">
                            <div class="flex justify-center gap-2">
                                <button class="w-9 h-9 flex items-center justify-center bg-gray-50 text-gray-400 rounded-lg hover:bg-slate-900 hover:text-white transition-all"><i class="far fa-eye text-sm"></i></button>
                                <button class="w-9 h-9 flex items-center justify-center bg-gray-50 text-gray-400 rounded-lg hover:bg-[#FF7E3A] hover:text-white transition-all"><i class="far fa-edit text-sm"></i></button>
                            </div>
                        </td>
                    </tr>
                    <!-- আরও ডাটা এখানে আসবে... -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection