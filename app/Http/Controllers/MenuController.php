<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MenuRequest;

use App\Menu;
use Session;

class MenuController extends MainController
{
    public function index()
    {
        return view('cms.menu_index', self::$dtv);
    }

    public function create()
    {
        return view('cms.menu_create', self::$dtv);
    }

    public function store(MenuRequest $request)
    {
        Menu::saveNew($request);
        return redirect('cms/menu');
    }

    public function show($id)
    {
        self::$dtv['item_id'] = $id;
        return view('cms.menu_delete', self::$dtv);
    }

    public function edit($id)
    {
        self::$dtv['item'] = Menu::find($id);
        return view('cms.menu_edit', self::$dtv);
    }

    public function update(MenuRequest $request, $id)
    {
        Menu::updateItem($request, $id);
        return redirect('cms/menu');
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        Session::flash('sm', "Item $id has been deleted");
        return redirect('cms/menu');
    }
}
