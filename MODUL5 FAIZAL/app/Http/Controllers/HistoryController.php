<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function data()
    {
        $orders = \DB::table('orders')->get();;
        return view('history.data', compact('orders'));
    }
}
