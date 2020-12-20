<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banners;

class ScreenSetUpController extends Controller
{
    public function index()
    {

    }

    public function homeIndex()
    {

        return view('app.admin.screens.homebanner');
    }

    public function slidesIndex()
    {

        $data = banners::paginate(5);;

        return view('app.admin.screens.slide-banner.index' , ['data' => $data]);
    }

    public function slidesCreate()
    {

        return view('app.admin.screens.slide-banner.add');
    }

    public function storeSlides(Request $request)
    {

        $request->validate([

            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('banner_img'), $imageName);

            banners::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'banner_photo_path' => $imageName
            ]);
    
            return redirect()->route('list-slides')->with('alert', 'Slide Uploaded Successfully!');
            ;
    }

    public function shopGridIndex()
    {
        return view('app.admin.screens.shopgridsetting'); 
    }
}
