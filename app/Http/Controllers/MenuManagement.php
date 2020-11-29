<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuManagement extends Controller
{
    public function index()
    {

        $menu = DB::table('menu')->get();

        return view('app.admin.setting.index', ['menu' => $menu]);
    }
}
