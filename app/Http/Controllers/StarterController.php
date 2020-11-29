<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\TopSale;
use App\Models\TopSaleType;

class StarterController extends Controller
{
    public function index()
    {

        $menu = Menu::get();
        $response = [];
        foreach($menu as $key => $item){
            $response[$key] = $item;
            $submenu = SubMenu::where('menu_group_id','=',$item->id)->get();
       
            $response[$key]['submenu'] = $submenu;
           
        }

        $topsale = TopSaleType::get();
        $response2 = [];
        foreach($topsale as $key => $item){
            $response2[$key] = $item;
            $topsales = TopSale::where('top_sale_type_id','=',$item->id)->get();
       
            $response2[$key]['topsales'] = $topsales;
           
        }



        return view('app.home',['response'=> $response,'topsale'=> $response2]);
    }


}
