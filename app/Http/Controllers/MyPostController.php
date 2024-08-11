<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Traits\UploadImage;
class MyPostController extends Controller
{use UploadImage;
    public function show(){
        $user= Auth()->user();
        $posts= Post::query()->where('user_id',$user->id)->get();
        return view('front/pages/my_posts',compact('posts'));
    }
    public function destroy(string $id){
        Post::query()->where('id',$id)->delete();
        return redirect()->back();
    }
    public function edit(string $id){
        $post= Post::query()->where('id',$id)->first();
        return view('front/pages/update_post',compact('post'));
    }
public function update(PostRequest $request,string $id){
Post::query()->where('id',$id)->update([
    'title'=>$request->title,
    'description'=>$request->description,
    'image' =>$this->upload($request,'blog')
]);
return redirect()->back();}
}
