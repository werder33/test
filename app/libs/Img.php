<?php
namespace App\libs;
use Illuminate\Support\Facades\Auth;
use Image;
class Img{
    public function url($path = null, $directory = null, $name = null){

        if ($path != null){
            $dir = public_path().$directory;
            if (!file_exists($dir)){
                mkdir($dir,0777,true);
            }
            if (!$name){
                $name = time();
            }
            $file_name = $name.".jpg";
            $image = Image::make($path);
            $image -> resize(990,null,function ($constraint) {
                $constraint->aspectRatio();
            });
            $image -> save($dir."/".$file_name);
            $image -> resize(200,null,function ($constraint) {
                $constraint->aspectRatio();
            });
            $image -> save($dir."/s_".$file_name);
            return $file_name;
        }
        else {
            return false;
        }
    }
}