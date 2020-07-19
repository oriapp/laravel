<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
