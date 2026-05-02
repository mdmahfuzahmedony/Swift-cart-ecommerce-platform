<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- সেকশন হেডার -->
        <div class="mb-12">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tighter">Explore our <span class="text-[#FF7E3A] ">Collections</span></h2>
        </div>

        <!-- ক্যাটাগরি গ্রিড -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
            @php 
                $categories = [
                    [
                        'name' => 'Fashion & Dress', 
                        'slug' => 'fashion', 
                        'img' => 'https://images.unsplash.com/photo-1539008835154-333310065a3c?q=80&w=400'
                    ],
                    [
                        'name' => 'Premium Perfumes', 
                        'slug' => 'perfumes', 
                        'img' => 'https://images.unsplash.com/photo-1541643600914-78b084683601?q=80&w=400'
                    ],
                    [
                        'name' => 'Luxury Sunglasses', 
                        'slug' => 'sunglasses', 
                        'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?q=80&w=400'
                    ],
                    [
                        'name' => 'Smart Watches', 
                        'slug' => 'watches', 
                        'img' => 'https://images.unsplash.com/photo-1524592094714-0f0654e20314?q=80&w=400'
                    ],
                    [
                        'name' => 'Beauty Cosmetics', 
                        'slug' => 'cosmetics', 
                        'img' => 'https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=400'
                    ],
                ]; 
            @endphp

            @foreach($categories as $cat)
            <div class="group cursor-pointer">
                <!-- ইমেজ বক্স -->
                <div class="relative bg-[#F3F3F3]  p-6 mb-4 overflow-hidden aspect-square flex items-center justify-center transition-all group-hover:bg-orange-50 group-hover:shadow-xl group-hover:shadow-orange-100">
                    
                    <!-- মেইন ইমেজ -->
                    <img src="{{ $cat['img'] }}" 
                         alt="{{ $cat['name'] }}" 
                         class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-500">
                    
                    <!-- হোভার লিংক/বাটন -->
                    <div class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-all duration-300 backdrop-blur-[2px]">
                        <a href="{{ route('shop.category', $cat['slug']) }}" 
                           class="bg-white text-slate-900 px-5 py-2.5 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-6 group-hover:translate-y-0 transition-all duration-500 hover:bg-[#FF7E3A] hover:text-white border border-[#FF7E3A]/20">
                            View Products
                        </a>
                    </div>
                </div>

                <!-- নাম -->
                <h4 class="font-black text-slate-800 uppercase text-[11px] tracking-widest group-hover:text-[#FF7E3A] transition-colors">
                    {{ $cat['name'] }}
                </h4>
            </div>
            @endforeach
        </div>
    </div>
</section>