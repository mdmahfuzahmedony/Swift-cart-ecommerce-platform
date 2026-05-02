@extends('layouts.admin')

@section('content')
<div class="flex flex-col gap-8 pb-10">
    <!-- ১. হেডার সেকশন -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Sales & Analytics Reports</h2>
            <p class="text-slate-500 font-medium text-sm">Detailed insights into your store's performance.</p>
        </div>
        <div class="flex gap-3">
            <select class="bg-white border border-slate-200 text-slate-600 px-5 py-3 rounded-2xl outline-none text-sm font-bold shadow-sm">
                <option>Last 30 Days</option>
                <option>Last 6 Months</option>
                <option>This Year</option>
            </select>
            <button class="bg-slate-900 text-white px-6 py-3 rounded-2xl hover:bg-[#FF7E3A] transition font-bold text-sm flex items-center gap-2 shadow-lg">
                <i class="fas fa-file-pdf"></i> Download PDF
            </button>
        </div>
    </div>

    <!-- ২. মেইন চার্ট সেকশন (Revenue & Order Status) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Revenue Growth Chart -->
        <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-black text-slate-800 uppercase tracking-wider text-[12px]">Revenue Growth</h3>
                <span class="text-green-500 font-bold text-sm">+14.5% ↑</span>
            </div>
            <div id="revenueGrowthChart"></div>
        </div>

        <!-- Order Status Summary -->
        <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm">
            <h3 class="text-lg font-black text-slate-800 uppercase tracking-wider text-[12px] mb-6">Order Status Summary</h3>
            <div id="orderStatusChart"></div>
        </div>
    </div>

    <!-- ৩. মিডল সেকশন (Top Products & Payment Analytics) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Top Selling Products (2/3 width) -->
        <div class="lg:col-span-2 bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm">
            <h3 class="text-lg font-black text-slate-800 uppercase tracking-wider text-[12px] mb-6">Top Selling Products (Last 30 Days)</h3>
            <div class="space-y-6">
                <!-- Product 1 -->
                <div class="flex items-center justify-between group cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1597983073493-88cd35cf93b0?q=80&w=100" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-black text-slate-800 text-sm">Premium Silk Panjabi</p>
                            <p class="text-[10px] font-bold text-slate-400">142 Sales this month</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-black text-slate-800 text-sm">$4,250.00</p>
                        <p class="text-[10px] font-bold text-green-500">Trending Up ↑</p>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="flex items-center justify-between group cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=100" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-black text-slate-800 text-sm">Luxury Watch Series 7</p>
                            <p class="text-[10px] font-bold text-slate-400">98 Sales this month</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-black text-slate-800 text-sm">$12,400.00</p>
                        <p class="text-[10px] font-bold text-slate-400">Steady →</p>
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-3 rounded-2xl bg-slate-50 text-slate-400 text-[10px] font-black uppercase tracking-widest hover:bg-slate-100 transition">View Full Inventory Report</button>
        </div>

        <!-- Payment Method Analytics (1/3 width) -->
        <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm">
            <h3 class="text-lg font-black text-slate-800 uppercase tracking-wider text-[12px] mb-6">Payment Analytics</h3>
            <div id="paymentMethodChart"></div>
            <div class="mt-6 space-y-3">
                <div class="flex justify-between text-xs font-bold">
                    <span class="text-slate-400">Cash on Delivery</span>
                    <span class="text-slate-800">55%</span>
                </div>
                <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                    <div class="bg-[#FF7E3A] h-full" style="width: 55%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ৪. নিচের সেকশন (Top Customers) -->
    <div class="bg-white p-8 rounded-[35px] border border-gray-100 shadow-sm">
        <h3 class="text-lg font-black text-slate-800 uppercase tracking-wider text-[12px] mb-6">Top Customers (Big Spenders)</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Customer 1 -->
            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-[25px] border border-slate-100">
                <img src="https://ui-avatars.com/api/?name=Mahfuz+Ahmed&background=FF7E3A&color=fff" class="w-12 h-12 rounded-xl">
                <div>
                    <p class="font-black text-slate-800 text-sm">Mahfuz Ahmed</p>
                    <p class="text-[10px] font-bold text-[#FF7E3A]">Spent: $24,500</p>
                </div>
            </div>
            <!-- Customer 2 -->
            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-[25px] border border-slate-100">
                <img src="https://ui-avatars.com/api/?name=Sarah+Ali&background=3B82F6&color=fff" class="w-12 h-12 rounded-xl">
                <div>
                    <p class="font-black text-slate-800 text-sm">Sarah Ali</p>
                    <p class="text-[10px] font-bold text-[#FF7E3A]">Spent: $18,200</p>
                </div>
            </div>
            <!-- Customer 3 -->
            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-[25px] border border-slate-100">
                <img src="https://ui-avatars.com/api/?name=John+Doe&background=22C55E&color=fff" class="w-12 h-12 rounded-xl">
                <div>
                    <p class="font-black text-slate-800 text-sm">John Doe</p>
                    <p class="text-[10px] font-bold text-[#FF7E3A]">Spent: $12,900</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // 1. Revenue Growth (Area Chart)
    var options1 = {
        series: [{ name: 'Net Revenue', data: [3100, 4000, 2800, 5100, 4200, 10900, 10000] }],
        chart: { height: 280, type: 'area', toolbar: {show: false}, zoom: {enabled: false} },
        colors: ['#FF7E3A'],
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth', width: 3 },
        fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0 } },
        xaxis: { categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"] },
        grid: { borderColor: '#f1f1f1' }
    };
    new ApexCharts(document.querySelector("#revenueGrowthChart"), options1).render();

    // 2. Order Status (Donut Chart)
    var options2 = {
        series: [70, 20, 10],
        chart: { type: 'donut', height: 280 },
        labels: ['Completed', 'Pending', 'Cancelled'],
        colors: ['#22C55E', '#FF7E3A', '#EF4444'],
        legend: { position: 'bottom', fontSecondaryColor: '#64748B' },
        plotOptions: { pie: { donut: { size: '75%' } } }
    };
    new ApexCharts(document.querySelector("#orderStatusChart"), options2).render();

    // 3. Payment Methods (Pie Chart)
    var options3 = {
        series: [55, 30, 15],
        chart: { type: 'pie', height: 250 },
        labels: ['Cash on Delivery', 'bKash/Nagad', 'Card'],
        colors: ['#FF7E3A', '#3B82F6', '#94A3B8'],
        legend: { show: false },
        dataLabels: { enabled: true }
    };
    new ApexCharts(document.querySelector("#paymentMethodChart"), options3).render();
</script>
@endsection