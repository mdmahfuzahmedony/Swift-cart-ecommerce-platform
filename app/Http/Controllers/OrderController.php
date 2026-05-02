<?php

namespace App\Http\Controllers; // এই লাইনটি ঠিক আছে কি না দেখুন

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('admin.orders.create');
    }
}