@extends('front.layouts.app')
@section('post_details')
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital"> Post Details </h1>
            <div class="services_section_2">
                <div class="row">
                        <div style="text-align: center" class="col-md-12">
                            <div><img style="padding: 20px" src="{{asset($post->image)}}" class="services_img"></div>
                            <h4>{{$post->title}}</h4>
                            <h4>{{$post->description}}</h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
