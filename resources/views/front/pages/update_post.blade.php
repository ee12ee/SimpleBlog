@extends('front.layouts.app')
@section('create_post')
    <div class="p-4 border rounded">
        <form action="{{route('home.updatePost',$post->id)}}" method="post" class=" g-3 needs-validation " style="text-align: center" novalidate="" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="validationCustom01" class="form-label">Post Title</label>
                <input style="width: 100%" type="text" name="title" value={{$post->title}} class="form-control  @error('title') is-invalid @enderror" id="validationCustom01" placeholder="Enter Post Title" required="">
                @error('title')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="">
                <label for="validationCustom01" class="form-label">Post Description</label>
                <textarea style="width: 100%" type="text" name="description" class="form-control  @error('description') is-invalid @enderror" id="validationCustom01"  required="">{{$post->description}}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">change the current image</h4>
                        </div>
                        <hr/>
                        <div><img style="padding: 20px; width: 200px; height: 200px" src="{{asset($post->image)}}" class="services_img"></div>
                        <input  class="form-control @error('image') is-invalid @enderror" type="file" name="image"  >
                        @error('image')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit" style="width: fit-content;display: inline-block; text-align: center ">Update</button>
        </form>
    </div>
@endsection
