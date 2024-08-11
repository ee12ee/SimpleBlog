<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait  UploadImage
{
    // one image

    public function upload($request,$destination):string
    {
        if ($file = $request->file('image')) {
            $ext = $file->getClientOriginalExtension();
            $image_name = md5(rand(1000, 10000));
            $image_fullname = $image_name . '.' . $ext;
            $image_url = $destination . '/' . $image_fullname;
            $file->move($destination, $image_fullname);
            return $image_url;
        }
    }




}
