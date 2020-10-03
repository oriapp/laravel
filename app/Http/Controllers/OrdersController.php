<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\OrderRequest;

use Session, Exception;
use App\Order;
use App\Product;

use App\Categorie;

class OrdersController extends MainController
{
    public function index()
    {   
        self::$dtv['orders'] = Order::getAll();
        return view('cms.orders_index', self::$dtv);
    }

    public function create()
    {   
        // products
        self::$dtv['caregories'] = Categorie::all();
        return view('cms.products_create', self::$dtv);
    }

    public function store(OrderRequest $request)
    {
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
        self::$dtv['item'] = Order::find($id);
        self::$dtv['order'] = Order::getAllId($id);
        return view('cms.order_edit', self::$dtv);
    }

    public function update(OrderRequest $request, $id)
    {
        Order::updateOrder($request, $id);
        return redirect('cms/orders');
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
