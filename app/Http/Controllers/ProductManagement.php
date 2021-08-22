<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Menu;
use App\Models\SubMenu;

class ProductManagement extends Controller
{
    public function index()
    {

        $goods = Product::paginate(5);

        return view('app.admin.manage-products.index', ['goods' => $goods]);
    }

    public function create()
    {

        $submenu = SubMenu::join('menus','sub_menus.menu_group_id','menus.id')
                   ->select('sub_menus.*', 'menus.menu_name')
                   ->get();
        return view('app.admin.manage-products.add',['submenu'=>  $submenu]);
    }

    public function store(Request $request)
    {

      $request->validate([

        'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->picture->extension();  
        $request->picture->move(public_path('product_img'), $imageName);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'sale_price' => $request->sale_price,
            'price' => $request->price,
            'product_photo_path' => $imageName,
            'menu_product_id' => $request->menu_id,
            'is_souvenir' => ($request->inlineRadioOptions == "Souvenir" )? 1 : 0,
            'is_gift' => ($request->inlineRadioOptions == "Gift" )? 1 : 0,
            'status' => 'Y'
        ]);

        return redirect()->route('product');
    }
}
