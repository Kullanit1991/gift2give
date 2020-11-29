<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopSaleController extends Controller
{
    public function index()
    {

        $goods = DB::table('top_sales')->get();

        return view('app.admin.top-sale.index', ['goods' => $goods]);
    }
}
