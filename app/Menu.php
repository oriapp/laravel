<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Session;

class Menu extends Model
{
    static public function saveNew($request){
        $menu = new self;
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'Menu Has Been Saved!');
    }

    static public function updateItem($request, $id){
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'Menu Has Been Updated!');
    }
}
