@extends('layouts.app')

@section('content')
<div class="py-20 bg-[#FAFAFA] min-h-screen" x-data="checkoutData()">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-extrabold text-slate-900 tracking-tighter mb-12 italic text-center md:text-left">
            Check<span class="text-[#FF7E3A]">out</span>
        </h1>

        <form class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- বাম পাশ: শিপিং ও পেমেন্ট ইনফরমেশন -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- ১. শিপিং ইনফরমেশন কার্ড -->
                <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm">
                    <h3 class="font-black text-slate-900 uppercase text-sm tracking-widest border-b pb-6 mb-8 flex items-center gap-3">
                        <i class="fas fa-truck text-[#FF7E3A]"></i> Shipping Information
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase text-slate-400 ml-2">Full Name *</label>
                            <input type="text" required class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase text-slate-400 ml-2">Phone Number *</label>
                            <input type="tel" placeholder="01XXXXXXXXX" required class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase text-slate-400 ml-2">Division (বিভাগ) *</label>
                            <select x-model="selectedDivision" @change="updateDistricts" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                                <option value="">Select Division</option>
                                <template x-for="division in divisions" :key="division">
                                    <option :value="division" x-text="division"></option>
                                </template>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase text-slate-400 ml-2">District (জেলা) *</label>
                            <select x-model="selectedDistrict" @change="updateUpazilas" :disabled="!selectedDivision" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] disabled:opacity-50">
                                <option value="">Select District</option>
                                <template x-for="district in filteredDistricts" :key="district">
                                    <option :value="district" x-text="district"></option>
                                </template>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase text-slate-400 ml-2">Upazila/Paurashava *</label>
                            <select x-model="selectedUpazila" :disabled="!selectedDistrict" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A] disabled:opacity-50">
                                <option value="">Select Upazila</option>
                                <template x-for="upazila in filteredUpazilas" :key="upazila">
                                    <option :value="upazila" x-text="upazila"></option>
                                </template>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[11px] font-black uppercase text-slate-400 ml-2">Union/Ward/Village *</label>
                            <input type="text" placeholder="গ্রাম বা এলাকা" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold focus:ring-2 focus:ring-[#FF7E3A]">
                        </div>
                    </div>
                </div>

                <!-- ২. পেমেন্ট মেথড কার্ড (bkash, Nagad, Rocket) -->
                <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm">
                    <h3 class="font-black text-slate-900 uppercase text-sm tracking-widest border-b pb-6 mb-8 flex items-center gap-3">
                        <i class="fas fa-credit-card text-[#FF7E3A]"></i> Payment Method
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Cash on Delivery -->
                        <label class="relative flex items-center p-6 border-2 rounded-[2rem] cursor-pointer transition-all" 
                               :class="paymentMethod === 'cod' ? 'border-[#FF7E3A] bg-orange-50/30' : 'border-slate-50 hover:border-slate-200'">
                            <input type="radio" x-model="paymentMethod" value="cod" name="payment" class="hidden">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-600 text-xl">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <div>
                                    <p class="font-black text-slate-900 text-sm uppercase">Cash on Delivery</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase">Pay when you receive</p>
                                </div>
                            </div>
                            <div x-show="paymentMethod === 'cod'" class="absolute top-4 right-4 text-[#FF7E3A]"><i class="fas fa-check-circle"></i></div>
                        </label>

                        <!-- Mobile Banking (Online) -->
                        <label class="relative flex items-center p-6 border-2 rounded-[2rem] cursor-pointer transition-all"
                               :class="paymentMethod === 'online' ? 'border-[#FF7E3A] bg-orange-50/30' : 'border-slate-50 hover:border-slate-200'">
                            <input type="radio" x-model="paymentMethod" value="online" name="payment" class="hidden">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 text-xl">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div>
                                    <p class="font-black text-slate-900 text-sm uppercase">Online Payment</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase">bkash, Nagad, Cards</p>
                                </div>
                            </div>
                            <div x-show="paymentMethod === 'online'" class="absolute top-4 right-4 text-[#FF7E3A]"><i class="fas fa-check-circle"></i></div>
                        </label>
                    </div>

                    <!-- অনলাইন পেমেন্ট সিলেক্ট করলে নিচের লোগোগুলো দেখাবে -->
                    <div x-show="paymentMethod === 'online'" x-transition class="mt-8 p-6 bg-slate-50 rounded-[2rem] border border-slate-100">
                        <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-4 text-center">Supported Payment Apps</p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <img src="https://itmusbd.com/wp-content/uploads/2023/12/bkash-logo.png" class="h-10 grayscale hover:grayscale-0 transition-all cursor-pointer" alt="bkash">
                            <img src="https://itmusbd.com/wp-content/uploads/2023/12/nagad-logo.png" class="h-10 grayscale hover:grayscale-0 transition-all cursor-pointer" alt="nagad">
                            <img src="https://itmusbd.com/wp-content/uploads/2023/12/rocket-logo.png" class="h-10 grayscale hover:grayscale-0 transition-all cursor-pointer" alt="rocket">
                            <img src="https://itmusbd.com/wp-content/uploads/2023/12/visa-mastercard-logo.png" class="h-10 grayscale hover:grayscale-0 transition-all cursor-pointer" alt="cards">
                        </div>
                        <p class="text-[10px] text-slate-400 mt-6 text-center font-bold italic uppercase leading-relaxed">
                           Note: You will be redirected to the secure payment gateway to complete your transaction.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ডান পাশ: অর্ডার সামারি -->
            <div class="space-y-6">
                <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm space-y-6 sticky top-24">
                    <h3 class="font-black text-slate-900 uppercase text-sm tracking-widest border-b pb-4">Order Summary</h3>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between text-sm font-bold text-slate-500"><span>Subtotal</span> <span class="text-slate-900">$120.00</span></div>
                        <div class="flex justify-between text-sm font-bold text-slate-500"><span>Shipping</span> <span class="text-[#22C55E]">FREE</span></div>
                        <div class="pt-4 border-t border-slate-50 flex justify-between">
                            <span class="font-black text-slate-900 uppercase text-sm">Payable Amount</span>
                            <span class="text-2xl font-black text-[#FF7E3A]">$120.00</span>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full bg-slate-900 text-white py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] hover:bg-[#FF7E3A] transition-all shadow-xl shadow-orange-100 flex items-center justify-center gap-3">
                            Confirm Order <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>

                    <div class="flex items-center justify-center gap-2 pt-4">
                        <i class="fas fa-shield-alt text-slate-300 text-xs"></i>
                        <span class="text-[9px] font-black text-slate-400 uppercase tracking-widest">100% Secure Checkout</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function checkoutData() {
    return {
        paymentMethod: 'cod',
        selectedDivision: '',
        selectedDistrict: '',
        selectedUpazila: '',
        divisions: ['Dhaka', 'Chittagong', 'Khulna', 'Rajshahi', 'Barisal', 'Sylhet', 'Rangpur', 'Mymensingh'],
        districts: {
            'Khulna': ['Khulna', 'Jessore', 'Bagerhat', 'Satkhira', 'Kushtia', 'Jhenaidah'],
            'Dhaka': ['Dhaka', 'Gazipur', 'Narayanganj', 'Tangail'],
            'Chittagong': ['Chittagong', 'Coxs Bazar', 'Comilla']
        },
        upazilas: {
            'Jessore': ['Jessore Sadar', 'Jhikargacha', 'Abhaynagar', 'Bagherpara', 'Chaugacha', 'Keshabpur', 'Manirampur', 'Sharsha'],
            'Dhaka': ['Dhanmondi', 'Gulshan', 'Mirpur', 'Uttara', 'Savar']
        },
        filteredDistricts: [],
        filteredUpazilas: [],

        updateDistricts() {
            this.filteredDistricts = this.districts[this.selectedDivision] || [];
            this.selectedDistrict = '';
            this.filteredUpazilas = [];
        },
        updateUpazilas() {
            this.filteredUpazilas = this.upazilas[this.selectedDistrict] || [];
            this.selectedUpazila = '';
        }
    }
}
</script>
@endsection