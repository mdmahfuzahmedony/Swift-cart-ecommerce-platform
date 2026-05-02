<!-- Alpine.js স্কোপ: ৩টি স্লাইড এবং অটো-প্লে লজিক -->
<section class="relative bg-[#FAFAFA] py-16 lg:py-24 overflow-hidden" 
    x-data="{ 
        activeSlide: 1, 
        totalSlides: 3,
        autoPlay() {
            setInterval(() => { this.next() }, 8000);
        },
        next() { this.activeSlide = this.activeSlide === this.totalSlides ? 1 : this.activeSlide + 1 },
        prev() { this.activeSlide = this.activeSlide === 1 ? this.totalSlides : this.activeSlide - 1 }
    }" x-init="autoPlay()">

    <!-- ব্যাকগ্রাউন্ড ডেকোরেশন এলিমেন্ট -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-[#FF7E3A]/5 -skew-x-12 transform translate-x-32 hidden lg:block"></div>
    <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-slate-200/50 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            
            <!-- বাম পাশ: কন্টেন্ট সেকশন -->
            <div class="lg:w-1/2 space-y-8 z-30">
                
                <!-- স্লাইড ১ কন্টেন্ট -->
                <div x-show="activeSlide === 1" 
                     x-transition:enter="transition ease-out duration-700" 
                     x-transition:enter-start="opacity-0 translate-y-12" 
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <span class="text-[#FF7E3A] font-black text-xs uppercase tracking-[0.3em]">New Arrival 2024</span>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mt-4 tracking-tighter">
                        Modern Comfort <br> <span class="text-[#FF7E3A]">Elevated.</span>
                    </h1>
                    <p class="text-slate-500 text-lg max-w-lg mt-6 leading-relaxed">Experience the perfect blend of premium aesthetics and cozy living with our latest lounge collection.</p>
                </div>

                <!-- স্লাইড ২ কন্টেন্ট -->
                <div x-show="activeSlide === 2" x-cloak
                     x-transition:enter="transition ease-out duration-700" 
                     x-transition:enter-start="opacity-0 translate-y-12" 
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <span class="text-[#FF7E3A] font-black text-xs uppercase tracking-[0.3em]">Luxury Collection</span>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mt-4 tracking-tighter">
                        Minimalist Style <br> <span class="text-[#FF7E3A]">Redefined.</span>
                    </h1>
                    <p class="text-slate-500 text-lg max-w-lg mt-6 leading-relaxed">Clean lines and sophisticated textures designed to bring peace and harmony to your urban home.</p>
                </div>

                <!-- স্লাইড ৩ কন্টেন্ট -->
                <div x-show="activeSlide === 3" x-cloak
                     x-transition:enter="transition ease-out duration-700" 
                     x-transition:enter-start="opacity-0 translate-y-12" 
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <span class="text-[#FF7E3A] font-black text-xs uppercase tracking-[0.3em]">Special Edition</span>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mt-4 tracking-tighter">
                        Urban Spaces <br> <span class="text-[#FF7E3A]">Timeless.</span>
                    </h1>
                    <p class="text-slate-500 text-lg max-w-lg mt-6 leading-relaxed">Transform your workspace into a creative studio with our handcrafted wooden office furniture.</p>
                </div>

                <!-- অ্যাকশন বাটন এবং ইউনিক অ্যারো কন্ট্রোল -->
                <div class="flex flex-wrap items-center gap-8 pt-4">
                    <a href="#" class="inline-block bg-slate-900 text-white px-10 py-5 rounded-2xl font-bold hover:bg-[#FF7E3A] transition-all shadow-2xl hover:-translate-y-1 active:scale-95">
                        Discover More
                    </a>
                    
                    <!-- স্লাইডার অ্যারো (Hover করলে রঙিন হবে) -->
                    <div class="flex gap-4">
                        <button @click="prev()" class="w-14 h-14 rounded-full border-2 border-slate-200 flex items-center justify-center transition-all group hover:border-[#FF7E3A] hover:bg-white hover:shadow-xl active:scale-90">
                            <i class="fas fa-arrow-left text-slate-400 group-hover:text-[#FF7E3A] transition-colors"></i>
                        </button>
                        <button @click="next()" class="w-14 h-14 rounded-full border-2 border-slate-200 flex items-center justify-center transition-all group hover:border-[#FF7E3A] hover:bg-white hover:shadow-xl active:scale-90">
                            <i class="fas fa-arrow-right text-slate-400 group-hover:text-[#FF7E3A] transition-colors"></i>
                        </button>
                    </div>
                </div>

                <!-- স্লাইড প্রগ্রেস ইন্ডিকেটর -->
                <div class="flex gap-3 pt-6">
                    <template x-for="i in totalSlides">
                        <button @click="activeSlide = i" 
                             class="h-1.5 transition-all duration-500 rounded-full" 
                             :class="activeSlide === i ? 'w-12 bg-[#FF7E3A]' : 'w-4 bg-slate-200 hover:bg-slate-300'"></button>
                    </template>
                </div>
            </div>

            <!-- ডান পাশ: ইউনিক ডাবল ইমেজ ওভারল্যাপ লেআউট -->
            <div class="lg:w-1/2 relative h-[500px] lg:h-[650px] w-full flex items-center justify-center">
                
                <!-- স্লাইড ১ এর ইমেজ জোড়া -->
                <div x-show="activeSlide === 1" class="absolute inset-0">
                    <div class="absolute top-0 right-0 w-[80%] h-[400px] lg:h-[480px] z-10 overflow-hidden rounded-[60px] shadow-2xl border-[12px] border-white transform"
                         x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 scale-90 translate-x-20">
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=1000" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-0 w-[60%] h-[280px] lg:h-[350px] z-20 overflow-hidden rounded-[40px] shadow-2xl border-[10px] border-white transform"
                         x-transition:enter="transition ease-out duration-1000 delay-200" x-transition:enter-start="opacity-0 scale-75 -translate-x-20">
                        <img src="https://images.unsplash.com/photo-1583847268964-b28dc2f51ac9?q=80&w=1000" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- স্লাইড ২ এর ইমেজ জোড়া -->
                <div x-show="activeSlide === 2" x-cloak class="absolute inset-0">
                    <div class="absolute top-0 right-0 w-[80%] h-[400px] lg:h-[480px] z-10 overflow-hidden rounded-[60px] shadow-2xl border-[12px] border-white transform"
                         x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 scale-90 translate-x-20">
                        <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=1000" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-0 w-[60%] h-[280px] lg:h-[350px] z-20 overflow-hidden rounded-[40px] shadow-2xl border-[10px] border-white transform"
                         x-transition:enter="transition ease-out duration-1000 delay-200" x-transition:enter-start="opacity-0 scale-75 -translate-x-20">
                        <img src="https://images.unsplash.com/photo-1505693314120-0d443867891c?q=80&w=1000" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- স্লাইড ৩ এর ইমেজ জোড়া -->
                <div x-show="activeSlide === 3" x-cloak class="absolute inset-0">
                    <div class="absolute top-0 right-0 w-[80%] h-[400px] lg:h-[480px] z-10 overflow-hidden rounded-[60px] shadow-2xl border-[12px] border-white transform"
                         x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 scale-90 translate-x-20">
                        <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?q=80&w=1000" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-4 left-0 w-[60%] h-[280px] lg:h-[350px] z-20 overflow-hidden rounded-[40px] shadow-2xl border-[10px] border-white transform"
                         x-transition:enter="transition ease-out duration-1000 delay-200" x-transition:enter-start="opacity-0 scale-75 -translate-x-20">
                        <img src="https://images.unsplash.com/photo-1616489953149-7551745ca695?q=80&w=1000" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- প্রটেক্ট flickering -->
<style>
    [x-cloak] { display: none !important; }
</style>