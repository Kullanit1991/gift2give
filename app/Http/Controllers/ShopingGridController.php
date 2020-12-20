<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\TopSale;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ShopingGridController extends Controller
{


    public function index($menu, $submenu, $id)
    {
       
        $data = Menu::get();
        $response = [];
        foreach($data as $key => $item){
            $response[$key] = $item;
            $data2 = SubMenu::where('menu_group_id','=',$item->id)->get();
       
            $response[$key]['submenu'] = $data2;
           
        }

        $product = Product::where('products.id','=',$id)
                   ->leftJoin('menus', 'menus.id','products.menu_product_id')
                   ->select('products.id',
                    'products.name',
                   'products.description',
                   'products.sale_price',
                   'products.price',
                   'product_photo_path',
                   'menus.menu_name',
                   'products.status',
                   'products.created_at',
                   'products.updated_at',
                   'products.is_souvenir',
                   'products.is_gift')
                   ->get();

        return view('app.shopgrid.index',['menu' => $menu, 'submenu' => $submenu ,'response'=> $response,'product'=> $product]);
    }

    public function shopViewIndex($productId,$productname)
    {
     
        $data = Menu::get();
        $response = [];
        foreach($data as $key => $item){
            $response[$key] = $item;
            $data2 = SubMenu::where('menu_group_id','=',$item->id)->get();
       
            $response[$key]['submenu'] = $data2;
           
        }

        $viewdetail = TopSale::where('id','=',$productId)->first();

        $features = TopSale::inRandomOrder()->limit(4)->get();

        

        return view('app.shopdetail.index',['productname' => $productname,'response'=> $response, 'features' =>  $features, 'viewdetail' => $viewdetail]);
    }
}
