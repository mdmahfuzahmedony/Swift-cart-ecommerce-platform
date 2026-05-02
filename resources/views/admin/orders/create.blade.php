@extends('layouts.admin')

@section('content')
<!-- Alpine.js দিয়ে সম্পূর্ণ অর্ডার এবং অ্যাড্রেস সিস্টেম ম্যানেজ করা হচ্ছে -->
<div class="max-w-7xl mx-auto pb-20" x-data="fullOrderSystem()">
    
    <!-- Header -->
    <div class="flex justify-between items-center mb-10">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Create New Order</h2>
            <p class="text-slate-500 font-medium text-sm">Fill in product and customer details to place an order.</p>
        </div>
        <a href="{{ route('admin.orders') }}" class="px-6 py-3 bg-white border border-slate-200 rounded-2xl text-slate-600 font-bold text-sm hover:bg-slate-50 transition-all flex items-center gap-2 shadow-sm">
            <i class="fas fa-arrow-left text-xs"></i> Back to Orders
        </a>
    </div>

    <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        
        <!-- বাম পাশ: প্রোডাক্ট এবং আইটেম লিস্ট -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- ১. প্রোডাক্ট সিলেকশন কার্ড -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-shopping-basket text-[#FF7E3A]"></i> Select Products
                </h3>

                <div class="relative">
                    <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-slate-300"></i>
                    <input type="text" placeholder="Search products by name or SKU..." 
                           class="w-full bg-slate-50 border-none rounded-2xl py-4 pl-14 pr-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                </div>

                <!-- আইটেম টেবিল -->
                <div class="overflow-x-auto pt-4">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-[11px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-50">
                                <th class="pb-4 pl-2">Product</th>
                                <th class="pb-4">Price</th>
                                <th class="pb-4">Quantity</th>
                                <th class="pb-4 text-right pr-2">Total</th>
                                <th class="pb-4"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <template x-for="(item, index) in items" :key="index">
                                <tr>
                                    <td class="py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-12 h-12 bg-slate-100 rounded-xl overflow-hidden">
                                                <img :src="item.image" class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold text-slate-800" x-text="item.name"></p>
                                                <p class="text-[10px] font-bold text-slate-400" x-text="'SKU: ' + item.sku"></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 font-bold text-slate-700" x-text="'$' + item.price"></td>
                                    <td class="py-4">
                                        <div class="flex items-center gap-2">
                                            <button type="button" @click="item.qty > 1 ? item.qty-- : null" class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 hover:bg-[#FF7E3A] hover:text-white transition-colors">-</button>
                                            <input type="number" x-model="item.qty" class="w-12 text-center bg-transparent border-none font-bold text-sm">
                                            <button type="button" @click="item.qty++" class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 hover:bg-[#FF7E3A] hover:text-white transition-colors">+</button>
                                        </div>
                                    </td>
                                    <td class="py-4 text-right font-black text-slate-800 pr-2" x-text="'$' + (item.price * item.qty).toFixed(2)"></td>
                                    <td class="py-4 text-right">
                                        <button type="button" @click="removeItem(index)" class="text-slate-300 hover:text-red-500 transition-colors">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ২. কাস্টমার অ্যাড্রেস সেকশন (বিভাগ, জেলা, উপজেলা) -->
            <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <i class="fas fa-map-marker-alt text-[#FF7E3A]"></i> Shipping Address
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- কাস্টমার নাম ও ফোন -->
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Customer Name *</label>
                        <input type="text" name="customer_name" required class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Phone Number *</label>
                        <input type="text" name="phone" required placeholder="017XXXXXXXX" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>

                    <!-- বিভাগ -->
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Division (বিভাগ) *</label>
                        <select x-model="selectedDivision" @change="updateDistricts" name="division" required class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                            <option value="">Select Division</option>
                            <template x-for="division in divisions" :key="division">
                                <option :value="division" x-text="division"></option>
                            </template>
                        </select>
                    </div>

                    <!-- জেলা -->
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">District (জেলা) *</label>
                        <select x-model="selectedDistrict" @change="updateUpazilas" name="district" required :disabled="!selectedDivision" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] disabled:opacity-50">
                            <option value="">Select District</option>
                            <template x-for="district in filteredDistricts" :key="district">
                                <option :value="district" x-text="district"></option>
                            </template>
                        </select>
                    </div>

                    <!-- উপজেলা -->
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Upazila/Thana (উপজেলা) *</label>
                        <select x-model="selectedUpazila" name="upazila" required :disabled="!selectedDistrict" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] disabled:opacity-50">
                            <option value="">Select Upazila</option>
                            <template x-for="upazila in filteredUpazilas" :key="upazila">
                                <option :value="upazila" x-text="upazila"></option>
                            </template>
                        </select>
                    </div>

                    <!-- এলাকা বা ওয়ার্ড -->
                    <div>
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">Area / Ward No.</label>
                        <input type="text" name="area" placeholder="e.g. Ward 04, Sector 07" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                    </div>

                    <!-- বিস্তারিত ঠিকানা -->
                    <div class="md:col-span-2">
                        <label class="block text-[11px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-2">House / Road / Specific Address *</label>
                        <textarea name="address" rows="2" required placeholder="House #12, Road #05, Block-C" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- ডান পাশ: অর্ডার সামারি -->
        <div class="space-y-8">
            <div class="bg-slate-900 p-8 rounded-[35px] text-white space-y-6 shadow-xl shadow-slate-200">
                <h3 class="font-bold flex items-center gap-2 text-[#FF7E3A]">
                    <i class="fas fa-receipt"></i> Order Summary
                </h3>
                
                <div class="space-y-3 text-sm border-b border-slate-800 pb-5">
                    <div class="flex justify-between text-slate-400 font-medium">
                        <span>Items Subtotal</span>
                        <span class="text-white" x-text="'$' + calculateSubtotal()"></span>
                    </div>
                    <div class="flex justify-between text-slate-400 font-medium">
                        <span>Shipping Cost</span>
                        <span class="text-white">$5.00</span>
                    </div>
                </div>

                <div class="flex justify-between items-end">
                    <span class="text-xs text-slate-400 uppercase font-black tracking-widest">Total Payable</span>
                    <span class="text-3xl font-black text-[#FF7E3A]" x-text="'$' + (parseFloat(calculateSubtotal()) + 5).toFixed(2)"></span>
                </div>

                <div class="pt-4 space-y-5">
                    <div>
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-2 ml-2">Payment Method</label>
                        <select name="payment_method" class="w-full bg-slate-800 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                            <option value="cod">Cash on Delivery</option>
                            <option value="bkash">bKash / Nagad</option>
                            <option value="bank">Bank Transfer</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full bg-[#FF7E3A] text-white py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] shadow-lg shadow-orange-900/20 hover:bg-white hover:text-slate-900 transition-all transform hover:-translate-y-1">
                        Confirm & Create Order
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Alpine.js Logic -->
<script>
    function fullOrderSystem() {
        return {
            // আইটেম লিস্ট
            items: [
                { name: 'Premium Silk Panjabi', sku: 'P-9854', price: 450.00, qty: 1, image: 'https://images.unsplash.com/photo-1597983073493-88cd35cf93b0?q=80&w=100&auto=format&fit=crop' },
                { name: 'Luxury Watch Series 7', sku: 'W-2210', price: 1200.50, qty: 1, image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=100&auto=format&fit=crop' }
            ],
            
            // অ্যাড্রেস ডাটা
            divisions: ['Dhaka', 'Chittagong', 'Sylhet', 'Rajshahi', 'Khulna', 'Barishal', 'Rangpur', 'Mymensingh'],
            allDistricts: {
                'Dhaka': ['Dhaka City', 'Gazipur', 'Narayanganj', 'Tangail'],
                'Chittagong': ['Chittagong City', 'Cox\'s Bazar', 'Cumilla', 'Feni'],
                'Sylhet': ['Sylhet City', 'Moulvibazar', 'Habiganj', 'Sunamganj'],
                // আপনি এখানে আরও জেলা যোগ করতে পারেন...
            },
            allUpazilas: {
                'Dhaka City': ['Uttara', 'Dhanmondi', 'Gulshan', 'Mirpur', 'Badda'],
                'Gazipur': ['Sreepur', 'Kaliakair', 'Tongi'],
                'Chittagong City': ['Pahartali', 'Kotwali', 'Halishahar'],
                'Cox\'s Bazar': ['Chakaria', 'Teknaf', 'Ukhia'],
                // আপনি এখানে আরও উপজেলা যোগ করতে পারেন...
            },

            selectedDivision: '',
            selectedDistrict: '',
            selectedUpazila: '',
            filteredDistricts: [],
            filteredUpazilas: [],

            // মেথডস
            removeItem(index) {
                this.items.splice(index, 1);
            },
            calculateSubtotal() {
                return this.items.reduce((total, item) => total + (item.price * item.qty), 0).toFixed(2);
            },
            updateDistricts() {
                this.filteredDistricts = this.allDistricts[this.selectedDivision] || [];
                this.selectedDistrict = '';
                this.filteredUpazilas = [];
            },
            updateUpazilas() {
                this.filteredUpazilas = this.allUpazilas[this.selectedDistrict] || [];
                this.selectedUpazila = '';
            }
        }
    }
</script>

<style>
    [x-cloak] { display: none !important; }
</style>
@endsection