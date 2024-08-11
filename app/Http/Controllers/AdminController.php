<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Traits\UploadImage;

class AdminController extends Controller
{
    use UploadImage;
    public  function post_page()
    {
        return view('admin.pages.Posts._add');
    }
        public function store(PostRequest $request)
    {
        Post::query()->create(
            [
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>$request->user()->id,
            'image' =>$this->upload($request,'blog')
            ]);
        return redirect()->back();

    }
}
