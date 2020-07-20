<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContentRequest;

use App\Menu;
use Session;
use App\Content;

class ContentController extends MainController
{
    public function index()
    {
        self::$dtv['content'] = Content::all();
        return view('cms.content_index', self::$dtv);
    }

    public function create()
    {
        return view('cms.content_create', self::$dtv);
    }

    public function store(ContentRequest $request)
    {
        Content::saveNew($request);
        return redirect('cms/menu');
    }

    public function show($id)
    {
        self::$dtv['item_id'] = $id;
        return view('cms.content_delete', self::$dtv);
    }

    public function edit($id)
    {
        self::$dtv['item'] = Content::find($id);
        return view('cms.content_edit', self::$dtv);
    }

    public function update(ContentRequest $request, $id)
    {
        Content::updateItem($request, $id);
        return redirect('cms/content');
    }

    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('sm', "Item $id has been deleted");
        return redirect('cms/content');
    }
}
