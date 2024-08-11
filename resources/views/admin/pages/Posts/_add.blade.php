@extends('admin.layout.app')
@section('post')
    <div class="content-wrapper">
        <div class="wrapper">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Add Post</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{route('admin.store')}}" method="post" class=" g-3 needs-validation " style="text-align: center" novalidate="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="">
                                        <label for="validationCustom01" class="form-label">Post Title</label>
                                        <input style="width: 100%" type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="validationCustom01" placeholder="Enter Post Title" required="">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                 </span>
                                        @enderror

                                    </div>
                                    <div class="">
                                        <label for="validationCustom01" class="form-label">Post Description</label>
                                        <input style="width: 100%" type="text" name="description" class="form-control  @error('description') is-invalid @enderror" id="validationCustom01" placeholder="Enter Post Description" required="">
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                 </span>
                                        @enderror
                                    </div>
                                    <div>

                                        <div class="card radius-15">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h4 class="mb-0">Upload Image For The Post</h4>
                                                </div>
                                                <hr/>
                                                <input  class="form-control @error('image') is-invalid @enderror" type="file" name="image"  >
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-3" type="submit" style="width: fit-content;
                                        display: inline-block; text-align: center ">Press To Add</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
