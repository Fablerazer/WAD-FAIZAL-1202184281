<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function data()
    {
        $orders = \DB::table('orders')->get();;
        return view('order.data', compact('orders'));
    }
}
