<?php

namespace App\Http\Controllers; // নেমস্পেস সবসময় ফোল্ডার পাথের সাথে মিলতে হয়

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function create()
    {
        // নিশ্চিত করুন যে resources/views/admin/discounts/create.blade.php ফাইলটি আছে
        return view('admin.discounts.create');
    }
}