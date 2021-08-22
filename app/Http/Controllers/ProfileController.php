<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
    }

    public function saveProfile(Request $request)
    {

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=1280,max_height=1024'
            ]);

            $imageName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('user_profile'), $imageName);

            if ($request->id) {
                $user = User::find($request->id);
                if(file_exists(public_path('user_profile/' .  $user->profile_photo_path))) {
                    unlink(public_path('user_profile/' .  $user->profile_photo_path));
                }
                $user->profile_photo_path =  $imageName;
                $user->save();
            }

        return response('Save Sucessfully!!', 200)
        ->header('Content-Type', 'text/plain');
    }
}
