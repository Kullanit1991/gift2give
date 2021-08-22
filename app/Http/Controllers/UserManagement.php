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

       
        $request->validate([
            'profile' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=1280,max_height=1024',
            'name'=> 'required',
            'address'=> 'required'
            ]);

            $imageName = time().'.'.$request->profile->extension();  
            $request->profile->move(public_path('user_profile'), $imageName);

            if ($request->id) {
                $user = User::find($request->id);
                $user->home_address = $request->address;
                $user->name = $request->name;
                $user->profile_photo_path =  $imageName;
                $user->save();
            } else {

            }


            $userList = User::paginate(5);
       
         return view('app.admin.manage-user.index', ['user' => $userList]);
    }


    public function edit($id)
    {
        
        $user = User::find($id);

        return view('app.admin.manage-user.edit', ['user' => $user]);
    }

    public function view($id)
    {
        
        $user = User::find($id);

        return view('app.admin.manage-user.view', ['user' => $user]);
    }
}
