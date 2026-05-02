<!-- ১. ইনভেন্টরি সেকশন (আগের মতোই থাকবে) -->
<div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6">
    <h3 class="font-bold text-slate-800 flex items-center gap-2">
        <i class="fas fa-tag text-[#FF7E3A]"></i> Inventory
    </h3>
    <div class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Price ($)</label>
                <input type="number" name="price" step="0.01" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-5 text-sm font-bold">
            </div>
            <div>
                <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Stock</label>
                <input type="number" name="stock" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-5 text-sm font-bold">
            </div>
        </div>
        <div>
            <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">SKU Code</label>
            <input type="text" name="sku" placeholder="PROD-12345" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-5 text-sm font-bold">
        </div>
    </div>
</div>

<!-- ২. মাল্টি-মিডিয়া সেকশন (আপডেট করা হয়েছে) -->
<div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm space-y-6" x-data="{ images: [] }">
    <h3 class="font-bold text-slate-800 flex items-center gap-2">
        <i class="fas fa-images text-[#FF7E3A]"></i> Product Gallery
    </h3>
    
    <!-- ড্রপজোন বা আপলোড এরিয়া -->
    <div class="relative border-2 border-dashed border-slate-100 rounded-[25px] p-8 text-center group hover:border-[#FF7E3A] transition-all cursor-pointer bg-slate-50/50">
        <i class="fas fa-cloud-upload-alt text-3xl text-slate-300 group-hover:text-[#FF7E3A]"></i>
        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mt-2">Upload Multiple Images</p>
        
        <!-- Input field with 'multiple' and name as an array 'images[]' -->
        <input type="file" name="images[]" multiple accept="image/*" 
            @change="images = Array.from($event.target.files).map(file => URL.createObjectURL(file))"
            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
    </div>

    <!-- ইমেজ প্রিভিউ গ্রিড (ছবি সিলেক্ট করলে এখানে দেখা যাবে) -->
    <div class="grid grid-cols-3 gap-3" x-show="images.length > 0">
        <template x-for="(image, index) in images" :key="index">
            <div class="relative aspect-square rounded-2xl overflow-hidden border border-slate-100 shadow-sm bg-white">
                <img :src="image" class="w-full h-full object-cover">
                <!-- রিমুভ বাটন (ঐচ্ছিক) -->
                <div class="absolute inset-0 bg-black/20 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fas fa-check text-white text-lg"></i>
                </div>
            </div>
        </template>
    </div>

    <p class="text-[9px] text-slate-400 font-medium leading-relaxed">
        * You can select up to 5 images. <br>
        * First image will be used as the main thumbnail.
    </p>
</div>

<!-- ৩. সাবমিট বাটন -->
<button type="submit" class="w-full bg-[#FF7E3A] text-white py-5 rounded-[25px] font-black uppercase text-[11px] tracking-[0.2em] shadow-xl shadow-orange-100 hover:bg-slate-900 transition-all transform hover:-translate-y-1">
    Save Product & Publish
</button>