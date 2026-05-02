<!-- ৬. রিড আওয়ার স্টোরিজ (Blog Section) -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        
        <!-- সেকশন হেডার -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
            <div class="space-y-2">
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tighter ">Read our <span class="text-[#FF7E3A]">Stories</span></h2>
            </div>
            
            <!-- ভিউ অল বাটন (উপরে ডান পাশে) -->
            <a href="{{ route('blog') }}" class="group flex items-center gap-3 bg-slate-50 border border-slate-100 px-6 py-3 rounded-2xl hover:bg-slate-900 hover:text-white transition-all duration-500">
                <span class="text-[11px] font-black uppercase tracking-widest">View all Stories</span>
                <div class="w-8 h-8 bg-white group-hover:bg-[#FF7E3A] rounded-xl flex items-center justify-center shadow-sm transition-all duration-500">
                    <i class="fas fa-chevron-right text-[10px] text-slate-400 group-hover:text-white transition-all"></i>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            
            @php 
                $blogs = [
                    [
                        'title' => 'The Summer Edit: Top Trends for 2024',
                        'desc' => 'Discover the most anticipated fashion trends this season, from bold prints to minimalist silk silhouettes.',
                        'cat' => 'Fashion & Style',
                        'cat_bg' => 'bg-[#00AEEF]',
                        'date' => 'Jun 29, 2024',
                        'img' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=600'
                    ],
                    [
                        'title' => 'Skincare Secrets for a Glowy Finish',
                        'desc' => 'Our experts break down the essential steps for a healthy morning routine that keeps your skin radiant all day.',
                        'cat' => 'Beauty & Care',
                        'cat_bg' => 'bg-[#FFBB38]',
                        'date' => 'Jun 25, 2024',
                        'img' => 'https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=600'
                    ],
                    [
                        'title' => 'The Accessory Guide: Watches and Shades',
                        'desc' => 'How to pair your luxury accessories perfectly with any outfit to create a powerful and lasting impression.',
                        'cat' => 'Accessories',
                        'cat_bg' => 'bg-[#22C55E]',
                        'date' => 'Jun 20, 2024',
                        'img' => 'https://images.unsplash.com/photo-1523170335258-f5ed11844a49?q=80&w=600'
                    ]
                ];
            @endphp

            @foreach($blogs as $blog)
            <div class="group cursor-pointer">
                <!-- ইমেজ কন্টেইনার -->
                <div class="rounded-[2.5rem] overflow-hidden mb-8 relative aspect-[16/11] border border-slate-50 shadow-sm transition-all duration-500 group-hover:shadow-2xl group-hover:shadow-orange-100 group-hover:-translate-y-2">
                    <img src="{{ $blog['img'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                    
                    <!-- ক্যাটাগরি ব্যাজ -->
                    <span class="absolute bottom-6 left-6 {{ $blog['cat_bg'] }} text-white text-[9px] font-black px-4 py-2 rounded-xl uppercase tracking-widest shadow-xl">
                        {{ $blog['cat'] }}
                    </span>
                    
                    <!-- হোভার ওভারলে -->
                    <div class="absolute inset-0 bg-orange-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                
                <div class="space-y-4 px-2">
                    <!-- টাইটেল -->
                    <h3 class="text-2xl font-extrabold text-slate-800 leading-tight group-hover:text-[#FF7E3A] transition-colors duration-300">
                        {{ $blog['title'] }}
                    </h3>
                    
                    <!-- ডেসক্রিপশন -->
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">
                        {{ $blog['desc'] }}
                    </p>
                    
                    <!-- মেটা ইনফো (তারিখ ও রিড টাইম) -->
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                        <span class="flex items-center gap-2">
                            <i class="far fa-calendar text-[#FF7E3A]"></i> {{ $blog['date'] }}
                        </span>
                        <span class="flex items-center gap-2 group-hover:text-[#FF7E3A] transition-all">
                            Read Story <i class="fas fa-arrow-right text-[9px] transition-transform group-hover:translate-x-1"></i>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>