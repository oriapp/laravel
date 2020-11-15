<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use FileManager, Session, DB;

class Categorie extends Model
{

    static public function saveNew($request){
        $category = new self();
        $category->title = $request['title'];
        $category->description = $request['description'];
        $category->image = FileManager::loadImage($request);
        $category->url = $request['url'];
        $category->save();
        Session::flash('sm', 'Category Has Been Saved!');
    }

    static public function updateItem($request, $id){
        $category = self::find($id);
        $category->title = $request['title'];
        $category->description = $request['description'];
        $category->image = FileManager::loadImage($request, $category->image);
        $category->url = $request['url'];
        $category->save();
        Session::flash('sm', 'Category Has Been Edit!');
    }


    static public function getAll(){
        return DB::table('categories as c')
        ->select('c.title', 'c.url', 'c.id')
        ->get();
    }

}
