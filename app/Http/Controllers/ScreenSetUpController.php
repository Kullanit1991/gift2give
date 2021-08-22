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
            'title' => 'required',
            'subtitle' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=820,min_height=312,max_width=1680,max_height=700',
            ]);
    
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('banner_img'), $imageName);

            banners::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'banner_photo_path' => $imageName
            ]);
    
            return redirect()->route('list-slides')->with('alert', 'Slide Uploaded Successfully!');
           
    }

    public function removeSlides($id)
    {

       

            banners::find($id)->delete();
    
            return redirect()->route('list-slides')->with('alert', 'remove Successfully!');
            
    }

    public function shopGridIndex()
    {
        return view('app.admin.screens.shopgridsetting'); 
    }
}
