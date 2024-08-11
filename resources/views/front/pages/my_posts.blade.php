@extends('front.layouts.app')
@section('posts')
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Blog Posts </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration</p>
            <div class="services_section_2">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-3">
                            <img style="margin-bottom: 20px; height: 200px; width: 350px" src="{{asset($post->image)}}" class="services_img">
                            <h4>{{$post->title}}</h4>
                            <p>{{$post->description}}</p>
                            <a href="{{route('home.deletePost',$post->id)}}" class="btn btn-danger">Delete</a>
                            <a href="{{route('home.editPost',$post->id)}}" class="btn btn-primary">Update</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
