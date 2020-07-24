<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use FileManager, Session;

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
}
