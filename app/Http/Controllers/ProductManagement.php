<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductManagement extends Controller
{
    public function index()
    {

        $goods = DB::table('products')->get();

        return view('app.admin.manage-products.index', ['goods' => $goods]);
    }
}
