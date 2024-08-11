@extends('front.layouts.app')
@section('content')
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Services </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration</p>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div><img src="images/img-1.png" class="services_img"></div>
                        <div class="btn_main"><a href="#">Rafting</a></div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="images/img-2.png" class="services_img"></div>
                        <div class="btn_main active"><a href="#">Hiking</a></div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="images/img-3.png" class="services_img"></div>
                        <div class="btn_main"><a href="#">Camping</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <h1 class="about_taital">About Us</h1>
                        <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or randomised words which
                            don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                            to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-md-6 padding_right_0">
                    <div><img src="images/about-img.png" class="about_img"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose_section layout_padding">
        <div class="container">
            <h1 class="choose_taital">Why Choose Us</h1>
            <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                embarrassing hidden in the middle of text. All </p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
            <div class="newsletter_box">
                <h1 class="let_text">Let Start Talk with Us</h1>
                <div class="getquote_bt"><a href="#">Get A Quote</a></div>
            </div>
        </div>
    </div>
@endsection
