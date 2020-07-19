<?php

namespace App;

use DB;

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
}
