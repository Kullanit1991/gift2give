<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserManagement extends Controller
{
    public function index()
    {

        $user = User::paginate(5);

        return view('app.admin.manage-user.index', ['user' => $user]);
    }


    public function store(Request $request)
    {

       
        // return view('app.admin.manage-user.index', ['user' => $user]);
    }


    public function edit(Request $request)
    {
        return view('app.admin.manage-user.edit');
    }
}
