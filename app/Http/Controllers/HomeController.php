<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Traits\UploadImage;
class HomeController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->with('user')->get();
        return view('front/pages/posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front/pages/create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::query()->where('id',$id)->first();
        return view('front/pages/post_details',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
