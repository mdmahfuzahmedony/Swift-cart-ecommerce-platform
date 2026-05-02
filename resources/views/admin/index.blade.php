@extends('layouts.admin')

@section('content')
<div class="space-y-8 pb-10">

    <!-- ROW 1: Top Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Sales -->
        <div class="bg-[#FFF4ED] p-7 rounded-[32px] relative overflow-hidden">
            <p class="text-gray-500 font-semibold text-sm">Total Sales</p>
            <h2 class="text-4xl font-extrabold text-[#1E293B] mt-2">$983,410</h2>
            <div class="flex items-center gap-1 mt-3">
                <span class="text-[#22C55E] font-bold text-sm">+3.34%</span>
                <span class="text-gray-400 text-xs">vs last week</span>
            </div>
            <div class="absolute top-7 right-7 w-12 h-12 bg-[#FF7E3A] rounded-2xl flex items-center justify-center text-white text-xl shadow-lg shadow-orange-200">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="bg-white p-7 rounded-[32px] border border-gray-50 shadow-sm relative">
            <p class="text-gray-400 font-semibold text-sm">Total Orders</p>
            <h2 class="text-4xl font-extrabold text-[#1E293B] mt-2">58,375</h2>
            <div class="flex items-center gap-1 mt-3">
                <span class="text-[#EF4444] font-bold text-sm">-2.89%</span>
                <span class="text-gray-300 text-xs">vs last week</span>
            </div>
            <div class="absolute top-7 right-7 w-12 h-12 bg-gray-50 rounded-2xl flex items-center justify-center text-gray-400 text-xl border border-gray-100">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>

        <!-- Total Visitors -->
        <div class="bg-white p-7 rounded-[32px] border border-gray-50 shadow-sm relative">
            <p class="text-gray-400 font-semibold text-sm">Total Visitors</p>
            <h2 class="text-4xl font-extrabold text-[#1E293B] mt-2">237,782</h2>
            <div class="flex items-center gap-1 mt-3">
                <span class="text-[#22C55E] font-bold text-sm">+8.02%</span>
                <span class="text-gray-300 text-xs">vs last week</span>
            </div>
            <div class="absolute top-7 right-7 w-12 h-12 bg-gray-50 rounded-2xl flex items-center justify-center text-gray-400 text-xl border border-gray-100">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <!-- ROW 2: Analytics, Monthly Target & Top Categories -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Revenue Analytics (7 columns) -->
        <div class="lg:col-span-5 bg-white p-8 rounded-[35px] border border-gray-50 shadow-sm">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-xl font-bold text-[#1E293B]">Revenue Analytics</h3>
                <select class="bg-[#FF7E3A] text-white text-xs font-bold px-4 py-2 rounded-xl outline-none border-none cursor-pointer">
                    <option>Last 8 Days</option>
                </select>
            </div>
            <div id="revenueLineChart"></div>
        </div>

        <!-- Monthly Target (3 columns) -->
        <div class="lg:col-span-3 bg-white p-8 rounded-[35px] border border-gray-50 shadow-sm flex flex-col items-center">
            <div class="w-full flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-[#1E293B]">Monthly Target</h3>
                <i class="fas fa-ellipsis-h text-gray-300"></i>
            </div>
            <div id="targetGaugeChart" class="mt-4"></div>
            <div class="text-center mt-[-20px]">
                <h4 class="font-bold text-[#1E293B]">Great Progress! 🎉</h4>
                <p class="text-[11px] text-gray-400 mt-1 px-4 leading-relaxed">Our achievement increased by <span class="text-orange-500 font-bold">$200,000</span>; let's reach 100% next month.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 w-full mt-8 pt-6 border-t border-gray-50">
                <div class="bg-[#FFF4ED] p-3 rounded-2xl text-center">
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Target</p>
                    <p class="font-bold text-[#1E293B] text-sm mt-1">$600,000</p>
                </div>
                <div class="bg-[#FFF4ED] p-3 rounded-2xl text-center">
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Revenue</p>
                    <p class="font-bold text-[#1E293B] text-sm mt-1">$510,000</p>
                </div>
            </div>
        </div>

        <!-- Top Categories (4 columns) -->
        <div class="lg:col-span-4 bg-white p-8 rounded-[35px] border border-gray-50 shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-[#1E293B]">Top Categories</h3>
                <a href="#" class="text-gray-400 text-xs font-bold hover:text-orange-500 transition">See All</a>
            </div>
            <div id="categoryDonutChart"></div>
            <div class="space-y-4 mt-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-[#FF7E3A]"></div><span class="text-sm font-medium text-gray-500">Electronics</span></div>
                    <span class="font-bold text-[#1E293B]">$1,200,000</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-[#FFB186]"></div><span class="text-sm font-medium text-gray-500">Fashion</span></div>
                    <span class="font-bold text-[#1E293B]">$950,000</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-[#FFE2D1]"></div><span class="text-sm font-medium text-gray-500">Home & Kitchen</span></div>
                    <span class="font-bold text-[#1E293B]">$750,000</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ROW 3: Active User & Conversion Rate -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <!-- Active User -->
        <div class="lg:col-span-3 bg-white p-8 rounded-[35px] border border-gray-50 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold text-[#1E293B]">Active User</h3>
                <i class="fas fa-ellipsis-h text-gray-300"></i>
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-[#1E293B]">2,758</h2>
                <p class="text-[11px] text-[#22C55E] font-bold mt-1">+8.02% <span class="text-gray-300 font-medium">from last month</span></p>
            </div>
            <div class="mt-8 space-y-5">
                <div class="space-y-2">
                    <div class="flex justify-between text-xs font-bold"><span class="text-gray-400">United States</span><span class="text-[#1E293B]">36%</span></div>
                    <div class="w-full bg-gray-50 h-2 rounded-full overflow-hidden"><div class="bg-orange-500 h-full rounded-full" style="width: 36%"></div></div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-xs font-bold"><span class="text-gray-400">United Kingdom</span><span class="text-[#1E293B]">24%</span></div>
                    <div class="w-full bg-gray-50 h-2 rounded-full overflow-hidden"><div class="bg-orange-300 h-full rounded-full" style="width: 24%"></div></div>
                </div>
            </div>
        </div>

        <!-- Conversion Rate ( Funnel/Bar ) -->
        <div class="lg:col-span-6 bg-white p-8 rounded-[35px] border border-gray-50 shadow-sm">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-lg font-bold text-[#1E293B]">Conversion Rate</h3>
                <select class="bg-[#FF7E3A] text-white text-[10px] font-bold px-3 py-1.5 rounded-lg outline-none"><option>This Week</option></select>
            </div>
            <div id="conversionChart"></div>
        </div>

        <!-- Traffic Sources -->
        <div class="lg:col-span-3 bg-white p-8 rounded-[35px] border border-gray-50 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold text-[#1E293B]">Traffic Sources</h3>
                <i class="fas fa-ellipsis-h text-gray-300"></i>
            </div>
            <div class="h-10 w-full flex gap-1 mb-8">
                <div class="h-full bg-orange-100 rounded-md" style="width: 40%"></div>
                <div class="h-full bg-orange-200 rounded-md" style="width: 30%"></div>
                <div class="h-full bg-orange-300 rounded-md" style="width: 15%"></div>
                <div class="h-full bg-orange-400 rounded-md" style="width: 10%"></div>
                <div class="h-full bg-orange-500 rounded-md" style="width: 5%"></div>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between items-center text-xs">
                    <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-orange-100"></div><span class="text-gray-400 font-medium">Direct Traffic</span></div>
                    <span class="font-bold text-[#1E293B]">40%</span>
                </div>
                <div class="flex justify-between items-center text-xs">
                    <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-orange-200"></div><span class="text-gray-400 font-medium">Organic Search</span></div>
                    <span class="font-bold text-[#1E293B]">30%</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts for Charts -->
<script>
    // 1. Revenue Analytics Chart
    new ApexCharts(document.querySelector("#revenueLineChart"), {
        series: [
            { name: 'Revenue', data: [8000, 9500, 8500, 11000, 14521, 10000, 12500, 11500] },
            { name: 'Order', data: [5000, 4000, 6000, 5500, 9000, 4500, 7000, 5000] }
        ],
        chart: { type: 'line', height: 300, toolbar: {show: false} },
        colors: ['#FF7E3A', '#FFB186'],
        stroke: { curve: 'smooth', width: [4, 2], dashArray: [0, 8] },
        xaxis: { categories: ['12 Aug', '13 Aug', '14 Aug', '15 Aug', '16 Aug', '17 Aug', '18 Aug', '19 Aug'] },
        markers: { size: 0, hover: {size: 7} },
        legend: { position: 'top', horizontalAlign: 'left' }
    }).render();

    // 2. Monthly Target Chart (Radial Bar)
    new ApexCharts(document.querySelector("#targetGaugeChart"), {
        series: [85],
        chart: { type: 'radialBar', height: 250, sparkline: {enabled: true} },
        plotOptions: {
            radialBar: {
                startAngle: -90, endAngle: 90,
                track: { background: "#FFF4ED", strokeWidth: '97%' },
                dataLabels: { name: {show: false}, value: {offsetY: -10, fontSize: '30px', fontWeight: 'bold', formatter: val => val + '%'} }
            }
        },
        colors: ['#FF7E3A']
    }).render();

    // 3. Top Categories Chart
    new ApexCharts(document.querySelector("#categoryDonutChart"), {
        series: [1200000, 950000, 750000, 500000],
        chart: { type: 'donut', height: 280 },
        colors: ['#FF7E3A', '#FFB186', '#FFE2D1', '#FFF4ED'],
        labels: ['Electronics', 'Fashion', 'Home', 'Beauty'],
        legend: { show: false },
        stroke: { show: false },
        plotOptions: { pie: { donut: { size: '80%', labels: { show: true, total: {show: true, label: 'Total Sales', formatter: () => '$3,400,000'} } } } }
    }).render();

    // 4. Conversion Rate Chart
    new ApexCharts(document.querySelector("#conversionChart"), {
        series: [{ name: 'Rate', data: [25000, 12000, 8500, 6200, 3000] }],
        chart: { type: 'bar', height: 250, toolbar: {show: false} },
        plotOptions: { bar: { borderRadius: 10, columnWidth: '50%', distributed: true } },
        colors: ['#FFE2D1', '#FFE2D1', '#FFE2D1', '#FFE2D1', '#FF7E3A'],
        xaxis: { categories: ['Product Views', 'Add to Cart', 'Checkout', 'Completed', 'Abandoned'] },
        legend: { show: false },
        dataLabels: { enabled: true, offsetY: -20, style: { colors: ['#1E293B'] } }
    }).render();
</script>
@endsection