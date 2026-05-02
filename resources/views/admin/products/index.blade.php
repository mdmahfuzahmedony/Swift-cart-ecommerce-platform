@extends('layouts.admin')

@section('content')
<div class="flex flex-col gap-8">
    <!-- Header Section -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Products Inventory</h2>
            <p class="text-gray-500 text-sm">Manage your stock, prices, and product details.</p>
        </div>
        <div class="flex gap-3">
            <button class="bg-white border border-gray-200 text-gray-600 px-5 py-2.5 rounded-xl hover:bg-gray-50 transition font-medium flex items-center gap-2">
                <i class="fas fa-filter"></i> Filter
            </button>
          <a href="{{ route('admin.products.create') }}" class="bg-[#FF7E3A] text-white px-5 py-2.5 rounded-xl hover:bg-orange-600 transition font-medium shadow-sm shadow-orange-200 flex items-center gap-2">
    <i class="fas fa-plus"></i> Add New Product
</a>
        </div>
    </div>

    <!-- Inventory Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center text-xl">
                <i class="fas fa-box"></i>
            </div>
            <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Total Products</p>
                <h3 class="text-2xl font-bold text-gray-800">4,520</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center text-xl">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Low Stock</p>
                <h3 class="text-2xl font-bold text-gray-800">12</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-[25px] border border-gray-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 bg-green-50 text-green-500 rounded-full flex items-center justify-center text-xl">
                <i class="fas fa-check-circle"></i>
            </div>
            <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Active Items</p>
                <h3 class="text-2xl font-bold text-gray-800">4,380</h3>
            </div>
        </div>
    </div>

    <!-- Product Table -->
    <div class="bg-white rounded-[30px] border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-50 flex justify-between items-center">
            <div class="relative w-80">
                <i class="fas fa-search absolute left-4 top-3.5 text-gray-400 text-sm"></i>
                <input type="text" placeholder="Search by name, SKU..." class="w-full bg-gray-50 border-none rounded-xl pl-11 pr-4 py-3 text-sm focus:ring-2 focus:ring-orange-500 transition">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50">
                    <tr class="text-gray-400 uppercase text-[11px] font-bold tracking-widest">
                        <th class="py-4 px-6">Product</th>
                        <th class="py-4 px-6">Category</th>
                        <th class="py-4 px-6">Price</th>
                        <th class="py-4 px-6">Stock</th>
                        <th class="py-4 px-6">Status</th>
                        <th class="py-4 px-6 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/50" class="w-12 h-12 rounded-xl object-cover border border-gray-100 shadow-sm">
                                <div>
                                    <p class="text-sm font-bold text-gray-800">iPhone 15 Pro Max</p>
                                    <p class="text-[11px] text-gray-400 font-mono uppercase">SKU: APPLE-15PM-BLK</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-500">Electronics</td>
                        <td class="py-4 px-6 text-sm font-bold text-gray-800">$1,199.00</td>
                        <td class="py-4 px-6 text-sm text-gray-500">45 in stock</td>
                        <td class="py-4 px-6">
                            <span class="bg-green-100 text-green-600 px-3 py-1.5 rounded-lg text-[10px] font-bold uppercase tracking-wider">In Stock</span>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex justify-center gap-2">
                                <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition"><i class="far fa-edit"></i></button>
                                <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/50" class="w-12 h-12 rounded-xl object-cover border border-gray-100 shadow-sm">
                                <div>
                                    <p class="text-sm font-bold text-gray-800">Nike Air Force 1</p>
                                    <p class="text-[11px] text-gray-400 font-mono uppercase">SKU: NIKE-AF1-WHT</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-500">Footwear</td>
                        <td class="py-4 px-6 text-sm font-bold text-gray-800">$120.00</td>
                        <td class="py-4 px-6 text-sm text-gray-500">5 in stock</td>
                        <td class="py-4 px-6">
                            <span class="bg-orange-100 text-orange-600 px-3 py-1.5 rounded-lg text-[10px] font-bold uppercase tracking-wider">Low Stock</span>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex justify-center gap-2">
                                <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition"><i class="far fa-edit"></i></button>
                                <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection