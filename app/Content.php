<?php

namespace App;

use DB, Session;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    static public function getAll($menu_url){
        return DB::table('contents as c')
        ->join('menus as m', 'm.id', '=', 'c.menu_id')
        ->where('m.url', '=', $menu_url)
        ->select('m.title', 'c.ctitle', 'c.carticle')
        ->get();
    }

    static public function saveNew($request){
        $content = new self();
        $content->menu_id = $request['menu'];
        $content->ctitle = $request['title'];
        $content->carticle = $request['article'];
        $content->save();
        Session::flash('sm', 'Content has been saved!');
    }

    static public function updateItem($request, $id){
        $content = self::find($id);
        $content->menu_id = $request['menu'];
        $content->ctitle = $request['title'];
        $content->carticle = $request['article'];
        $content->save();
        Session::flash('sm', 'Content has been updated!');
    }
}
