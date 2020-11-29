<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Menu;
use App\Models\SubMenu;

class MenuManagement extends Controller
{
    public function index()
    {

        $menu = Menu::get();

        $submenu = SubMenu::join('menus','sub_menus.menu_group_id','menus.id')->paginate(5);

        return view('app.admin.setting.index', ['menu' => $menu, 'submenu'=> $submenu]);
    }

    public function add()
    {

        return view('app.admin.setting.add');
    }

    public function addSubmenu()
    {
        $menu = Menu::where('status','=','Y')->get();
        return view('app.admin.setting.add-submenu',['menu' => $menu]);
    }

    public function store(Request $request)
    {
     
        $menu = Menu::create([
            'menu_name' => $request->name,
            'status' => 'Y',
        ]);
     

        return redirect()->route('setting.menu');
    }

    public function storeSubmenu(Request $request)
    {
 
        $menu = SubMenu::create([
            'submenu_name' => $request->sub_name,
            'menu_group_id' => $request->menu_id,
            'status' => 'Y',
        ]);
        $menu = Menu::get();
        $submenu = SubMenu::join('menus','sub_menus.menu_group_id','menus.id')->get();

        return redirect()->route('setting.menu');
    }
}
