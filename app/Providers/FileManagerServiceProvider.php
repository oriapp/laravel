<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Str, Image;

class FileManagerServiceProvider extends ServiceProvider
{
    const DEFAULT_IMAGE_NAME = "no-image.png";
    const ALLOWED_IMAGES = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];

    public function register()
    {
        //
    }

    public function boot()
    {
        //
    }

    static public function loadImage($request, $default_name = false){
        $image_name = $default_name ? $default_name : self::DEFAULT_IMAGE_NAME;
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            if(in_array(strtolower($file->getClientOriginalExtension()), self::ALLOWED_IMAGES)){
                $image_name = self::generateRandomFileName($file->getClientOriginalName());
                $request->file('image')->move(public_path() . '/images', $image_name); 
                $img = Image::make(public_path() . '/images/' . $image_name);
                $img->resize(null, 550, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save();

            }
        }

        return $image_name;
    }

    static private function generateRandomFileName($original_name){
        return date('Y.m.d.H.i.s') . '-' . Str::random(5) . '-' . $original_name;
    }
}



/*

SERVERRRRRRR

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Str, Image;

class FileManagerServiceProvider extends ServiceProvider
{
    const DEFAULT_IMAGE_NAME = "no-image.png";
    const ALLOWED_IMAGES = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];

    public function register()
    {
        //
    }

    public function boot()
    {
        //
    }

    static public function loadImage($request, $default_name = false){
        $image_name = $default_name ? $default_name : self::DEFAULT_IMAGE_NAME;
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            if(in_array(strtolower($file->getClientOriginalExtension()), self::ALLOWED_IMAGES)){
                $image_name = self::generateRandomFileName($file->getClientOriginalName());
                $request->file('image')->move('/home/idfgxyyn/public_html/images/', $image_name); 
                $img = Image::make('/home/idfgxyyn/public_html/images/' . $image_name);
                $img->resize(null, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save();

            }
        }

        return $image_name;
    }

    static private function generateRandomFileName($original_name){
        return date('Y.m.d.H.i.s') . '-' . Str::random(5) . '-' . $original_name;
    }
}


*/