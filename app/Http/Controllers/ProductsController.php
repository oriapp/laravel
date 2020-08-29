<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use Session, Exception;
use App\Product;

use App\Categorie;

class ProductsController extends MainController
{
    public function index()
    {   
        // make a paginate
        self::$dtv['products'] = Product::all();
        return view('cms.products_index', self::$dtv);
    }

    public function create()
    {   
        // products
        self::$dtv['caregories'] = Categorie::all();
        return view('cms.products_create', self::$dtv);
    }

    public function store(ProductRequest $request)
    {
        //dd(($request->colors));
        Product::saveNew($request);
        
        return redirect('cms/products');
    }

    public function show($id)
    {
        self::$dtv['item_id'] = $id;
        return view('cms.product_delete', self::$dtv);
    }

    public function edit($id)
    {
        self::$dtv['item'] = Product::find($id);
        self::$dtv['caregories'] = Categorie::all();
        return view('cms.products_edit', self::$dtv);
    }

    public function update(ProductRequest $request, $id)
    {
        Product::updateItem($request, $id);
        return redirect('cms/products');
    }

    public function destroy($id)
    {
        try {
            Product::destroy($id);
            Session::flash('sm', "Item $id has been deleted");
        } catch (Exception $ex){
            Session::flash('em', 'Item can not be deleted!');
        }

        return redirect('cms/products');
    }
}
