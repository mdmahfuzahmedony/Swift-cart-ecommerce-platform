@extends('layouts.admin')

@section('content')
<!-- Alpine.js Initialization -->
 <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<div class="max-w-6xl mx-auto pb-20" x-data="{ category: '', subCategory: '' }">
    
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-extrabold text-slate-800">Add New Product</h2>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        
        <div class="lg:col-span-2 space-y-8">
            <!-- বেসিক ডিটেইলস -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Product Title *</label>
                        <input type="text" name="title" required class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Main Category *</label>
                        <select x-model="category" @change="subCategory = ''" name="category" required class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                            <option value="">Choose Category</option>
                            <option value="dress">Dress & Apparel</option>
                            <option value="shoes">Shoes & Footwear</option>
                            <option value="watch">Luxury Watches</option>
                            <option value="perfume">Premium Perfumes</option>
                            <option value="sunglasses">Sunglasses</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- ডায়নামিক সেকশন: শুধুমাত্র ক্যাটাগরি সিলেক্ট করলে এটি আসবে -->
            <div x-show="category !== ''" x-cloak x-transition:enter="transition ease-out duration-300" class="bg-white p-8 rounded-[35px] border border-orange-100 shadow-sm min-h-[100px]">
                
                <!-- ড্রেস সেকশন -->
                <div x-show="category === 'dress'">
                    @include('admin.products.partials.dress')
                </div>

                <!-- জুতা সেকশন -->
                <div x-show="category === 'shoes'">
                    @include('admin.products.partials.shoes')
                </div>

                <!-- ঘড়ি সেকশন -->
                <div x-show="category === 'watch'">
                    @include('admin.products.partials.watch')
                </div>

                <!-- পারফিউম সেকশন -->
                <div x-show="category === 'perfume'">
                    @include('admin.products.partials.perfume')
                </div>

                <!-- চশমা সেকশন -->
                <div x-show="category === 'sunglasses'">
                    @include('admin.products.partials.sunglasses')
                </div>
            </div>
        </div>

        <!-- রাইট সাইডবার -->
        <div class="space-y-8">
            @include('admin.products.partials.inventory-media')
        </div>
    </form>
</div>

<!-- CSS যাতে শুরুতে কিছু লাফালাফি না করে (Flickering prevent) -->
<style>
    [x-cloak] { display: none !important; }
</style>
@endsection