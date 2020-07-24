<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;

use Session, Exception;

use App\Categorie;

class CategoriesController extends MainController
{
    public function index()
    {   
        self::$dtv['categories'] = Categorie::all();
        return view('cms.categories_index', self::$dtv);
    }

    public function create()
    {   
        // categories
        return view('cms.categories_create', self::$dtv);
    }

    public function store(CategoryRequest $request)
    {
        Categorie::saveNew($request);
        return redirect('cms/categories');
    }

    public function show($id)
    {
        self::$dtv['item_id'] = $id;
        return view('cms.categories_delete', self::$dtv);
    }

    public function edit($id)
    {
        self::$dtv['item'] = Categorie::find($id);
        return view('cms.categories_edit', self::$dtv);
    }

    public function update(CategoryRequest $request, $id)
    {
        Categorie::updateItem($request, $id);
        return redirect('cms/categories');
    }

    public function destroy($id)
    {
        try {
            Categorie::destroy($id);
            Session::flash('sm', "Item $id has been deleted");
        } catch (Exception $ex){
            Session::flash('em', 'Item can not be deleted!');
        }

        return redirect('cms/categories');
    }
}
