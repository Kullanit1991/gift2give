<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserManagement extends Controller
{
    public function index()
    {

        $user = DB::table('users')->get();

        return view('app.admin.manage-user.index', ['user' => $user]);
    }
}
