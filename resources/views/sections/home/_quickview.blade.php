<!-- Quick View Modal Overlay -->
<div x-show="quickViewOpen" 
     class="fixed inset-0 z-[500] flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm"
     x-cloak x-transition>
    
    <div @click.away="quickViewOpen = false" 
         class="bg-white w-full max-w-5xl rounded-[2.5rem] overflow-hidden shadow-2xl relative max-h-[90vh] overflow-y-auto">
        
        <!-- Close Button -->
        <button @click="quickViewOpen = false" class="absolute top-6 right-6 w-10 h-10 bg-slate-50 rounded-full flex items-center justify-center text-slate-400 hover:text-black transition-all z-10">
            <i class="fas fa-times"></i>
        </button>

        <div class="p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- বাম পাশ: ইনফরমেশন -->
                <div class="space-y-6">
                    <div>
                        <span class="bg-[#00AEEF] text-white text-[9px] font-black px-3 py-1 rounded-md uppercase tracking-widest">New</span>
                        <h2 class="text-4xl font-extrabold text-slate-900 mt-4 leading-tight">Premium Silk Dress</h2>
                        <p class="text-slate-400 text-sm font-bold mt-1">( Brand Name ) <span class="ml-4 text-[#22C55E] flex items-center gap-1 inline-flex"><i class="fas fa-check-circle"></i> In Stock</span></p>
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="text-3xl font-black text-[#FF7E3A] tracking-tighter">$120.00</span>
                        <span class="text-slate-300 line-through font-bold">$150.00</span>
                        <span class="bg-red-500 text-white text-[10px] font-black px-3 py-1 rounded-lg">Save $30.00</span>
                        <div class="ml-auto flex items-center gap-1">
                            <span class="font-black text-slate-700">4.5</span>
                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                        </div>
                    </div>

                    <hr class="border-slate-100">

                    <!-- কালার সিলেক্টর -->
                    <div class="space-y-3">
                        <p class="text-[11px] font-black text-slate-900 uppercase tracking-widest">Color: <span class="text-slate-400">Midnight Blue</span></p>
                        <div class="flex gap-2">
                            <div class="w-6 h-6 rounded-full bg-blue-900 ring-2 ring-offset-2 ring-slate-900 cursor-pointer"></div>
                            <div class="w-6 h-6 rounded-full bg-red-500 cursor-pointer"></div>
                            <div class="w-6 h-6 rounded-full bg-slate-300 cursor-pointer"></div>
                        </div>
                    </div>

                    <!-- কোয়ান্টিটি -->
                    <div class="flex items-center gap-6 pt-4">
                        <p class="text-[11px] font-black text-slate-900 uppercase tracking-widest">Quantity:</p>
                        <div class="flex items-center border border-slate-100 rounded-xl px-4 py-2 gap-6 bg-slate-50">
                            <button class="text-slate-400 hover:text-black">-</button>
                            <span class="font-black text-sm">1</span>
                            <button class="text-slate-400 hover:text-black">+</button>
                        </div>
                    </div>

                    <!-- বাটনসমূহ -->
                    <div class="flex gap-4 pt-6">
                        <button class="flex-1 bg-slate-900 text-white py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] hover:bg-[#FF7E3A] transition-all shadow-xl shadow-slate-100">Add to Cart</button>
                        <button class="flex-1 border-2 border-slate-100 py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] flex items-center justify-center gap-2 hover:bg-slate-50 transition-all text-slate-600">
                            <i class="far fa-heart"></i> Add to Wishlist
                        </button>
                    </div>
                </div>

                <!-- ডান পাশ: ইমেজ গ্যালারি -->
                <div class="space-y-4">
                    <div class="bg-[#F3F3F3] rounded-[2.5rem] aspect-square overflow-hidden flex items-center justify-center p-12">
                        <img src="https://images.unsplash.com/photo-1539008835154-333310065a3c?q=80&w=600" class="w-full h-full object-contain mix-blend-multiply">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div class="bg-[#F3F3F3] border-2 border-slate-900 rounded-2xl p-2 aspect-square"><img src="https://images.unsplash.com/photo-1539008835154-333310065a3c?q=80&w=200" class="w-full h-full object-contain mix-blend-multiply"></div>
                        <div class="bg-[#F3F3F3] border-2 border-transparent rounded-2xl p-2 aspect-square opacity-50"><img src="https://via.placeholder.com/200" class="w-full h-full object-contain mix-blend-multiply"></div>
                    </div>
                </div>
            </div>

            <!-- রিভিউ সেকশন (Tabs) -->
            <div class="mt-16 border-t border-slate-100 pt-10">
                <div class="flex gap-10 mb-8 border-b border-slate-50">
                    <button class="pb-4 border-b-2 border-[#FF7E3A] text-slate-900 font-black text-xs uppercase tracking-widest">Reviews (4)</button>
                    <button class="pb-4 text-slate-300 font-black text-xs uppercase tracking-widest hover:text-slate-500">Description</button>
                </div>
                
                <div class="space-y-8">
                    <!-- সিঙ্গেল রিভিউ -->
                    <div class="flex gap-6">
                        <img src="https://ui-avatars.com/api/?name=John+Doe" class="w-12 h-12 rounded-2xl">
                        <div class="space-y-1 flex-1">
                            <div class="flex justify-between">
                                <h4 class="font-black text-slate-800 text-sm">John Doe</h4>
                                <span class="text-[10px] font-bold text-slate-300">2 Days ago</span>
                            </div>
                            <div class="text-yellow-400 text-[8px] mb-2 flex gap-0.5 italic">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-slate-500 text-sm leading-relaxed">The quality of the fabric is outstanding! Exactly what I was looking for. Fast delivery too.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>