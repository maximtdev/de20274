<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {

        /* $products = Product::all(); */

        $startDayLastMonth = Carbon::now()->subMonth()->startOfMonth();
        $endDayLastMonth = Carbon::now()->subMonth()->endOfMonth();

        $products = Product::with('category', 'stocks')->withExists(['stocks as ordered_last_month'=>
            function ($query) use ($startDayLastMonth, $endDayLastMonth) {
            $query->whereHas('items.order', function ($q) use ($startDayLastMonth, $endDayLastMonth) {
                $q->whereBetween('date', [$startDayLastMonth, $endDayLastMonth]);
            });
        }])->get();

        return view('product.index', ['products' => $products]);
    }
}
