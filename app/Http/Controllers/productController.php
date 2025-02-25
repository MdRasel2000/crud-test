<?php

namespace App\Http\Controllers;

use App\Models\product_table;
use Illuminate\Http\Request;

class productController extends Controller
{


    public function index()
    {
        $products = product_table::get();

        return view('index', compact('products'));
    }

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $products = new product_table();

        $products->name = $request->name;
        $products->price = $request->price;
        $products->sku_code = $request->sku_code;
        $products->description = $request->description;


        $imageName = null;
        if (isset($request->image)) {
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move('images', $imageName);
        }

        $products->image =  $imageName;

        $products->save();
        return redirect()->back();
    }


    public function edit($id)
    {
        $products = product_table::find($id);
        return view('edit', compact('products'));
    }


    public function update(Request $request, $id)
    {

        $products = product_table::find($id);

        $products->name  = $request->name;
        $products->sku_code  = $request->sku_code;
        $products->price  = $request->price;
        $products->description  = $request->description;
        $products->name  = $request->name;


        if (isset($request->image)) {
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move('images', $imageName);

            $products->image =  $imageName;
        }

        $products->save();


        return redirect('/');
    }

    public function delete($id)
    {

        $products = product_table::find($id);

        $products->delete();

        return redirect()->back();
    }
}
