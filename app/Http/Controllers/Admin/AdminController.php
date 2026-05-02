<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() { return view('admin.index'); }
    public function orders() { return view('admin.orders.index'); }
    public function products() { return view('admin.products.index'); }
    public function customers() { return view('admin.customers.index'); }
    public function reports() { return view('admin.reports.index'); }
    public function discounts() { return view('admin.discounts.index'); }
    public function integrations() { return view('admin.integrations.index'); }
    public function help() { return view('admin.help.index'); }
    public function settings() { return view('admin.settings.index'); }
    public function createProduct() {
    return view('admin.products.create');
}
}