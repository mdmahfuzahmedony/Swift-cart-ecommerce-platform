<div class="space-y-8">
    <h3 class="font-bold text-slate-800 flex items-center gap-2">
        <i class="fas fa-cut text-[#FF7E3A]"></i> Dress Specifications
    </h3>
    
    <!-- সাব-ক্যাটাগরি সিলেকশন বাটনস -->
    <div class="flex gap-4 p-2 bg-orange-50 rounded-2xl border border-orange-100">
        <label class="flex-1 cursor-pointer">
            <input type="radio" x-model="subCategory" value="men" class="hidden peer">
            <div class="py-3 text-center rounded-xl bg-white border border-transparent peer-checked:bg-[#FF7E3A] peer-checked:text-white transition-all font-bold text-sm">Men</div>
        </label>
        <label class="flex-1 cursor-pointer">
            <input type="radio" x-model="subCategory" value="women" class="hidden peer">
            <div class="py-3 text-center rounded-xl bg-white border border-transparent peer-checked:bg-[#FF7E3A] peer-checked:text-white transition-all font-bold text-sm">Women</div>
        </label>
        <label class="flex-1 cursor-pointer">
            <input type="radio" x-model="subCategory" value="kids" class="hidden peer">
            <div class="py-3 text-center rounded-xl bg-white border border-transparent peer-checked:bg-[#FF7E3A] peer-checked:text-white transition-all font-bold text-sm">Kids</div>
        </label>
    </div>

    <!-- সাব-ক্যাটাগরি অনুযায়ী ফিল্ডস (শুরুতে এগুলোও লুকানো থাকবে) -->
    
    <!-- Men Fields -->
   <!-- Men Fields -->
<div x-show="subCategory === 'men'" x-cloak x-transition class="grid grid-cols-2 gap-6 pt-4">
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Fit Type</label>
        <select name="men_fit" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>Slim Fit</option>
            <option>Regular Fit</option>
            <option>Relaxed Fit</option>
        </select>
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Sleeve</label>
        <select name="men_sleeve" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>Full Sleeve</option>
            <option>Half Sleeve</option>
            <option>Sleeveless</option>
        </select>
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Collar / Neck Type</label>
        <input type="text" name="men_collar" placeholder="Formal, Mandarin, Panjabi Collar" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Fabric Details</label>
        <input type="text" name="fabric" placeholder="100% Cotton, Linen, Oxford" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Occasion</label>
        <select name="occasion" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>Casual</option>
            <option>Formal</option>
            <option>Festive / Panjabi</option>
            <option>Sports</option>
        </select>
    </div>
</div>

    <!-- Women Fields -->
    <!-- Women Fields -->
<div x-show="subCategory === 'women'" x-cloak x-transition class="grid grid-cols-2 gap-6 pt-4">
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Work / Design Type</label>
        <input type="text" name="women_work" placeholder="Embroidery, Digital Print, Block Print" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Dress Type</label>
        <select name="women_dress_type" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>3-Piece (Kamiz, Salwar, Dupatta)</option>
            <option>2-Piece (Kamiz, Salwar/Dupatta)</option>
            <option>Single Kurti / Tops</option>
            <option>Saree</option>
        </select>
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Kamiz Length (Inches)</label>
        <input type="number" name="women_length" placeholder="e.g. 42, 44, 46" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Fabric / Material</label>
        <input type="text" name="women_fabric" placeholder="Cotton, Silk, Georgette, Linen" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Dupatta Details</label>
        <input type="text" name="women_dupatta" placeholder="Chiffon, Cotton, or Organza" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Bottom / Salwar Type</label>
        <input type="text" name="women_bottom" placeholder="Ready-made Pant, Plazo, or Unstitched" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
</div>

    <!-- Kids Fields -->
   <!-- Kids Fields -->
<div x-show="subCategory === 'kids'" x-cloak x-transition class="grid grid-cols-2 gap-6 pt-4">
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Age Group</label>
        <select name="kids_age" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>0-6 Months</option>
            <option>6-12 Months</option>
            <option>1-2 Years</option>
            <option>3-5 Years</option>
            <option>6-10 Years</option>
            <option>11-14 Years</option>
        </select>
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Gender</label>
        <select name="kids_gender" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>Baby Boy</option>
            <option>Baby Girl</option>
            <option>Unisex</option>
        </select>
    </div>
    <div class="col-span-2">
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Material Softness & Safety</label>
        <input type="text" name="kids_safety" placeholder="শিশুদের ত্বকের জন্য উপযোগী নরম সুতি কাপড়" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Closure Type</label>
        <select name="kids_closure" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>Buttons (সামনে বাটন)</option>
            <option>Zipper (পিছনে চেইন)</option>
            <option>Elastic (ইলাস্টিক)</option>
            <option>Snap Buttons (নিচে বাটন)</option>
        </select>
    </div>
    <div>
        <label class="block text-[11px] font-black text-slate-400 uppercase mb-2">Season</label>
        <select name="kids_season" class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold">
            <option>Summer (গরমের উপযোগী)</option>
            <option>Winter (শীতের উপযোগী)</option>
            <option>All Season</option>
        </select>
    </div>
</div>
</div>