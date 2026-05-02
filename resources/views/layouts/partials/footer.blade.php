<footer class="bg-white text-gray-600 pt-20 font-sans border-t border-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            
            <!-- Column 1: Logo & Contact Info -->
            <div class="space-y-6">
                <div class="logo-text text-4xl text-gray-900 font-black tracking-tighter">
                    SwiftCart<span class="text-[#FF7E3A]">.</span>
                </div>
                <p class="text-sm leading-relaxed text-gray-500 font-medium">
                    We provide the best quality products for our customers. Your satisfaction is our main goal. Experience the best shopping journey with us.
                </p>
                <div class="space-y-4 pt-2">
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center text-[#FF7E3A] group-hover:bg-[#FF7E3A] group-hover:text-white transition-all">
                            <i class="fa-solid fa-location-dot text-xs"></i>
                        </div>
                        <span class="text-sm font-bold text-gray-700">Jessore Sadar, Bangladesh</span>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center text-[#FF7E3A] group-hover:bg-[#FF7E3A] group-hover:text-white transition-all">
                            <i class="fa-solid fa-envelope text-xs"></i>
                        </div>
                        <span class="text-sm font-bold text-gray-700">info@swiftcart.com</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-gray-900 font-black text-sm uppercase tracking-widest mb-8">Quick Links</h3>
                <ul class="space-y-4 text-[13px] font-bold">
                    <li><a href="{{ route('home') }}" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">About Us</a></li>
                    <li><a href="{{ route('shop') }}" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">Shop Products</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Information -->
            <div>
                <h3 class="text-gray-900 font-black text-sm uppercase tracking-widest mb-8">Information</h3>
                <ul class="space-y-4 text-[13px] font-bold">
                    <li><a href="#" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">Terms & Conditions</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">Return Policy</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#FF7E3A] transition-colors uppercase tracking-tight">Support Center</a></li>
                </ul>
            </div>

            <!-- Column 4: Newsletter -->
            <div>
                <h3 class="text-gray-900 font-black text-sm uppercase tracking-widest mb-8">Newsletter</h3>
                <p class="text-sm mb-6 text-gray-500 font-medium">Subscribe to get latest updates and offers directly in your inbox.</p>
                <form class="relative group">
                    <input type="email" placeholder="Your Email" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-5 text-gray-800 placeholder-gray-400 focus:ring-2 focus:ring-[#FF7E3A] transition-all text-sm font-bold">
                    <button type="submit" class="mt-3 w-full bg-[#FF7E3A] text-white font-black py-4 rounded-2xl hover:bg-orange-600 transition-all text-[10px] uppercase tracking-[0.2em] shadow-lg shadow-orange-100">
                        Subscribe Now
                    </button>
                </form>
                
                <div class="mt-8 flex gap-3">
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-gray-400 hover:bg-[#FF7E3A] hover:text-white transition-all shadow-sm">
                        <i class="fa-brands fa-facebook-f text-xs"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-gray-400 hover:bg-[#FF7E3A] hover:text-white transition-all shadow-sm">
                        <i class="fa-brands fa-instagram text-xs"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-gray-400 hover:bg-[#FF7E3A] hover:text-white transition-all shadow-sm">
                        <i class="fa-brands fa-twitter text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- App Store Promo (ক্লিন কার্ড) -->
        <div class="bg-[#FAFAFA] rounded-[2.5rem] p-8 flex flex-wrap justify-between items-center gap-6 mb-12 border border-slate-50">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-[#FF7E3A] rounded-2xl flex items-center justify-center text-white text-xl">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <div>
                    <h4 class="text-gray-900 font-black text-lg italic uppercase leading-none">SwiftCart Mobile App</h4>
                    <p class="text-gray-500 text-[10px] font-bold uppercase mt-1 tracking-widest">Available on iOS and Android</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" class="h-10 cursor-pointer hover:scale-105 transition-transform" alt="App Store">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" class="h-10 cursor-pointer hover:scale-105 transition-transform" alt="Play Store">
            </div>
        </div>
    </div>

    <!-- ৫. ব্ল্যাক বটম বার (Copyright & Payments) -->
    <div class="bg-[#0a0a0a] py-8">
        <div class="container mx-auto px-10 flex flex-col md:flex-row justify-between items-center gap-6 text-center md:text-left">
            <!-- Copyright Text (বাম পাশে) -->
            <div class="text-gray-400 text-[11px] font-black uppercase tracking-[0.2em]">
                © 2026 SWIFTCART. ALL RIGHTS RESERVED. DESIGNED BY <span class="text-white">MAHFUZ AHMED</span>
            </div>

            <!-- Payment Icons (ডান পাশে) -->
            <div class="flex items-center gap-8 text-gray-400">
                <i class="fa-brands fa-cc-visa text-3xl hover:text-white transition-colors cursor-pointer"></i>
                <i class="fa-brands fa-cc-mastercard text-3xl hover:text-white transition-colors cursor-pointer"></i>
                <i class="fa-brands fa-cc-paypal text-3xl hover:text-white transition-colors cursor-pointer"></i>
                <div class="flex items-center gap-2 border-l border-white/10 pl-8 ml-2">
                    <i class="fa-solid fa-truck-fast text-lg"></i>
                    <span class="text-[9px] font-black uppercase tracking-widest text-white">Cash on Delivery</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-8 right-8 w-12 h-12 bg-[#FF7E3A] rounded-2xl flex items-center justify-center text-white font-bold shadow-2xl shadow-orange-500/40 hover:bg-slate-900 transition-all z-50 group border-2 border-white">
        <i class="fa-solid fa-arrow-up text-sm group-hover:-translate-y-1 transition-transform"></i>
    </button>
</footer>

<style>
    .logo-text { font-family: 'Plus Jakarta Sans', sans-serif; }
</style>