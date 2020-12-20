<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\SubMenu;
use App\Models\TopSale;
use App\Models\TopSaleType;

class TopSaleController extends Controller
{
    public function index()
    {

        $types = TopSaleType::get();

        $goods = TopSale::join('top_sale_types','top_sales.top_sale_type_id','top_sale_types.id')
                ->select('top_sales.*','top_sale_types.name as type_name')
                ->paginate(5);

        return view('app.admin.top-sale.index', ['type' =>  $types ,'goods' => $goods]);
    }

    public function create()
    {
        $submenu = TopSaleType::get();
        return view('app.admin.top-sale.add',['submenu'=>  $submenu]);
    }

    public function createType()
    {
       
        return view('app.admin.top-sale.add-type');
    }

    public function editType($id)
    {
        $data = TopSaleType::find($id);
        return view('app.admin.top-sale.edit-type', ['data' => $data]);
    }

    public function deleteType($id)
    {
    
       $data = TopSaleType::find($id);
       $data2 = TopSaleType::where('top_sale_type_id','=',$id)->delete();
       $data->delete();
       return redirect()->route('top-sale');
    }

    public function storeType(Request $request)
    {
  
        $menu = TopSaleType::create([
            'name' => $request->name,
            'status' => 'Y',
        ]);
     

        return redirect()->route('top-sale');
    }

    public function storeEditType(Request $request)
    {
     
        dd($request);
        $menu = TopSaleType::find($request->id)->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);
     

        return redirect()->route('top-sale');
    }

    public function store(Request $request)
    {
     

      $request->validate([

        'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->picture->extension();  
        $request->picture->move(public_path('product_img'), $imageName);

        TopSale::create([
            'name' => $request->name,
            'description' => $request->description,
            'sale_price' => $request->sale_price,
            'price' => $request->price,
            'product_photo_path' => $imageName,
            'top_sale_type_id' => $request->topsale_id,
            'status' => 'Y'
        ]);

        return redirect()->route('top-sale');
    }
}
