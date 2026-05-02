@extends('layouts.admin')

@section('content')
<div class="flex flex-col gap-8 pb-10">
    <!-- ১. হেডার সেকশন -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Discounts & Coupons</h2>
            <p class="text-slate-500 font-medium text-sm">Create and manage promotional offers for your store.</p>
        </div>
  

      <a href="{{ route('admin.discounts.create') }}" class="bg-[#FF7E3A] text-white px-6 py-3 rounded-2xl hover:bg-slate-900 transition font-bold text-sm shadow-lg shadow-orange-100 flex items-center gap-2">
                <i class="fas fa-plus text-xs"></i> Create New Coupon
            </a>
    </div>

    <!-- ২. কুইক স্ট্যাটস (Coupon Performance) -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-[10px] uppercase font-black tracking-widest">Active Coupons</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">12</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-green-500 text-[10px] uppercase font-black tracking-widest">Total Savings Given</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">$12,450</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-orange-500 text-[10px] uppercase font-black tracking-widest">Used Today</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">84 Times</h3>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm">
            <p class="text-red-500 text-[10px] uppercase font-black tracking-widest">Expired Soon</p>
            <h3 class="text-2xl font-bold text-slate-800 mt-1">03</h3>
        </div>
    </div>

    <!-- ৩. মেইন টেবিল সেকশন -->
    <div class="bg-white rounded-[35px] border border-gray-100 shadow-sm overflow-hidden">
        <!-- ফিল্টার এবং সার্চ বার -->
        <div class="p-8 border-b border-gray-50 flex justify-between items-center bg-white">
            <div class="relative w-96">
                <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-300"></i>
                <input type="text" placeholder="Search by Coupon Code..." class="w-full bg-gray-50 border-none rounded-2xl pl-12 pr-4 py-4 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] transition">
            </div>
            <div class="flex gap-3">
                <select class="bg-gray-50 border-none text-slate-500 px-5 py-3 rounded-2xl text-xs font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Expired</option>
                    <option>Scheduled</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-400 uppercase text-[10px] font-black tracking-[0.15em] bg-gray-50/50">
                        <th class="py-5 px-8">Coupon Code & Type</th>
                        <th class="py-5 px-8">Rules & Category</th>
                        <th class="py-5 px-8">Usage Limit</th>
                        <th class="py-5 px-8">Expiry Date</th>
                        <th class="py-5 px-8">Savings Impact</th>
                        <th class="py-5 px-8">Status</th>
                        <th class="py-5 px-8 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <!-- Row 1: Percentage Discount -->
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="py-6 px-8">
                            <div class="flex flex-col">
                                <span class="text-lg font-black text-slate-800 tracking-tight">WINTER20</span>
                                <span class="text-[10px] font-bold text-[#FF7E3A] uppercase">20% Percentage Off</span>
                            </div>
                        </td>
                        <td class="py-6 px-8">
                            <div class="flex flex-col gap-1">
                                <span class="text-xs font-bold text-slate-600">Min Spend: $50.00</span>
                                <span class="bg-blue-50 text-blue-500 px-2 py-0.5 rounded text-[9px] font-black w-max uppercase">All Categories</span>
                            </div>
                        </td>
                        <td class="py-6 px-8">
                            <div class="w-32">
                                <div class="flex justify-between mb-1">
                                    <span class="text-[10px] font-bold text-slate-400">145 / 200</span>
                                </div>
                                <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-[#FF7E3A] h-full" style="width: 72%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="py-6 px-8">
                            <p class="text-sm font-bold text-slate-500">Dec 31, 2024</p>
                        </td>
                        <td class="py-6 px-8">
                            <p class="text-sm font-black text-green-500">$4,250.00</p>
                        </td>
                        <td class="py-6 px-8">
                            <!-- Quick Toggle Switch -->
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#FF7E3A]"></div>
                            </label>
                        </td>
                        <td class="py-6 px-8 text-center">
                            <div class="flex justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button title="Edit" class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-slate-900 hover:text-white transition-all"><i class="fas fa-edit text-xs"></i></button>
                                <button title="Duplicate" class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-blue-500 hover:text-white transition-all"><i class="fas fa-copy text-xs"></i></button>
                                <button title="Delete" class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-red-500 hover:text-white transition-all"><i class="fas fa-trash-alt text-xs"></i></button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2: Free Shipping Coupon -->
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="py-6 px-8">
                            <div class="flex flex-col">
                                <span class="text-lg font-black text-slate-800 tracking-tight">FREESHIP</span>
                                <span class="text-[10px] font-bold text-blue-500 uppercase">Free Shipping</span>
                            </div>
                        </td>
                        <td class="py-6 px-8">
                            <div class="flex flex-col gap-1">
                                <span class="text-xs font-bold text-slate-600">Min Spend: $20.00</span>
                                <span class="bg-orange-50 text-orange-500 px-2 py-0.5 rounded text-[9px] font-black w-max uppercase">Men's Wear Only</span>
                            </div>
                        </td>
                        <td class="py-6 px-8">
                            <div class="w-32">
                                <div class="flex justify-between mb-1">
                                    <span class="text-[10px] font-bold text-slate-400">89 / ∞</span>
                                </div>
                                <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-blue-500 h-full" style="width: 40%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="py-6 px-8">
                            <p class="text-sm font-bold text-slate-500">No Expiry</p>
                        </td>
                        <td class="py-6 px-8">
                            <p class="text-sm font-black text-green-500">$1,120.00</p>
                        </td>
                        <td class="py-6 px-8">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#FF7E3A]"></div>
                            </label>
                        </td>
                        <td class="py-6 px-8 text-center">
                            <div class="flex justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-slate-900 hover:text-white transition-all"><i class="fas fa-edit text-xs"></i></button>
                                <button class="w-9 h-9 flex items-center justify-center bg-slate-50 text-slate-400 rounded-lg hover:bg-blue-500 hover:text-white transition-all"><i class="fas fa-copy text-xs"></i></button>
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