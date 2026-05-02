<section class="py-24 bg-[#FAFAFA]">
    <div class="container mx-auto px-6">
        
        <!-- সেকশন হেডার -->
        <div class="flex justify-between items-end mb-12">
            <div class="space-y-1">
                <h2 class="text-3xl font-extrabold text-black tracking-tight uppercase">New arrivals</h2>
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">Latest trends added recently</p>
            </div>
            <a href="{{ route('shop') }}" class="text-[11px] font-black uppercase tracking-widest text-slate-900 flex items-center gap-2 hover:text-[#FF7E3A] transition-all group">
                View all <i class="fas fa-arrow-right text-[9px] group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        <!-- প্রোডাক্ট গ্রিড -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10">
            
            @php 
                $products = [
                    ['brand' => 'FURNIXO', 'name' => 'Sofa with wood legs', 'price' => '34.00', 'tag' => 'New', 'tag_bg' => 'bg-black', 'img' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=400'],
                    ['brand' => 'ELEGANT', 'name' => 'Modern Floor Lamp', 'price' => '95.00', 'tag' => null, 'img' => 'https://images.unsplash.com/photo-1507473885765-e6ed657f9971?q=80&w=400'],
                    ['brand' => 'COMFORT', 'name' => 'Comfort Seat Chair', 'price' => '78.00', 'tag' => 'New', 'tag_bg' => 'bg-[#00AEEF]', 'img' => 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?q=80&w=400'],
                    ['brand' => 'LUXURY', 'name' => 'Luxury Armchair', 'price' => '75.00', 'old_price' => '95.00', 'tag' => 'Sale', 'tag_bg' => 'bg-red-500', 'img' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=400'],
                    // আরও প্রোডাক্ট একই ভাবে...
                ];
            @endphp

            @foreach($products as $product)
            <div class="group">
                <!-- ইমেজ বক্স (ছোট এবং ক্লিন সাইজ) -->
                <div class="relative bg-[#F3F3F3] mb-5 overflow-hidden aspect-square flex items-center justify-center p-12 transition-all duration-500">
                    
                    @if($product['tag'])
                    <span class="absolute top-4 left-4 {{ $product['tag_bg'] }} text-white text-[8px] font-black px-2 py-1 uppercase z-10">{{ $product['tag'] }}</span>
                    @endif

                    <!-- ছোট সাইজের ইমেজ -->
                    <img src="{{ $product['img'] }}" class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700">

                    <!-- হোভার ওভারলে -->
                    <div class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center gap-3">
                        
                        <!-- Quick View Button -->
                        <button @click.prevent="quickViewOpen = true" 
                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-slate-900 hover:bg-[#FF7E3A] hover:text-white transition-all shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300">
                            <i class="fa-regular fa-eye text-sm"></i>
                        </button>

                        <!-- Wishlist Button -->
                        <a href="{{ route('wishlist') }}" 
                           class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-slate-900 hover:bg-[#FF7E3A] hover:text-white transition-all shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-500">
                            <i class="fa-regular fa-heart text-sm"></i>
                        </a>

                        <!-- Quick Add বাটন (নিচ থেকে আসবে) -->
                        <a href="{{ route('cart') }}" 
                           class="absolute bottom-0 w-full bg-slate-900 text-white py-3.5 text-[10px] font-black uppercase tracking-widest translate-y-full group-hover:translate-y-0 transition-transform duration-300 text-center">
                            + Quick Add
                        </a>
                    </div>
                </div>

                <!-- ইনফরমেশন -->
                <div class="space-y-1">
                    <div class="flex justify-between items-center text-[9px] font-bold text-slate-400">
                        <span class="uppercase tracking-widest">{{ $product['brand'] }}</span>
                        <div class="flex items-center gap-1">
                            <span class="text-slate-400">4.5</span>
                            <i class="fas fa-star text-yellow-400 text-[7px]"></i>
                        </div>
                    </div>
                    <h4 class="text-slate-800 font-extrabold text-[13px] leading-tight hover:text-[#FF7E3A] transition-colors uppercase tracking-tighter">{{ $product['name'] }}</h4>
                    <div class="flex items-center gap-2">
                        <span class="text-slate-900 font-black text-sm">${{ $product['price'] }}</span>
                        @if(isset($product['old_price']))
                            <span class="text-slate-300 line-through text-[11px] font-bold">${{ $product['old_price'] }}</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- নাম্বার পেজিনেশন -->
        <div class="mt-16 flex justify-center items-center gap-2">
            <button class="w-10 h-10 rounded-full border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-[#FF7E3A] hover:text-white transition-all"><i class="fas fa-chevron-left text-[10px]"></i></button>
            <button class="w-10 h-10 rounded-full bg-black text-white font-black text-xs">1</button>
            <button class="w-10 h-10 rounded-full bg-white border border-slate-100 text-slate-500 font-black text-xs hover:border-[#FF7E3A]">2</button>
            <button class="w-10 h-10 rounded-full border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-[#FF7E3A] hover:text-white transition-all"><i class="fas fa-chevron-right text-[10px]"></i></button>
        </div>
        
    </div>
</section>