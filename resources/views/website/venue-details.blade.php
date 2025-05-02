@extends('website.layouts.master')

@section('title')
    White Palace | @parent
@stop

@section('content')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area blog_banner_two">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle f_48">White Palace Hotel</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{  route('home') }}">Home</a></li>
                        <li class="active">Venue Details</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="{{ asset('website/image/blog/feature-img1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4>Starting At</h4>
                                <ul class="list_style cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Plate</p>
                                            <p>599 BDT</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Hall</p>
                                            <p>60,000 BDT</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
                                </div>
                                <div class="form-group">
                                    Mobile Number
                                    <input type="text" class="form-control" placeholder="Enter mobile number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter mobile number'">
                                </div>
                                <div class="form-group">
                                    <label for="">Details</label>
                                    <textarea class="form-control" placeholder="Details of Requirements" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Details of Requirements'"></textarea>
                                </div>

                                <button class="book_now_btn button_hover info">Drop your details & get a call</button>

                            </aside>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a href="#">Food,</a>
                                <a href="#">Technology,</a>
                                <a href="#">Politics,</a>
                                <a href="#">Lifestyle</a>
                            </div>
                            <ul class="blog_meta list_style">
                                <li><a href="#">4.5/5<i class="lnr lnr-star"></i></a></li>
                                <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2>Astronomy Binoculars A Great Alternative | About Us</h2>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Facilities</h2>
                    <p>Go green, book clean — your eco event starts here.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-dinner"></i>
                            <h4 class="sec_h4">Location</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-bicycle"></i>
                            <h4 class="sec_h4">Venue Type</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-shirt"></i>
                            <h4 class="sec_h4">Max. Seating Capacity</h4>
                            <p>Usage of the Internet is becoming more common due.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-car"></i>
                            <h4 class="sec_h4">Outside Caterer</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-car"></i>
                            <h4 class="sec_h4">Outside Decoration</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-construction"></i>
                            <h4 class="sec_h4">Parking Size</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-coffee-cup"></i>
                            <h4 class="sec_h4">Booking Method</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facilities_item">
                            <i class="lnr lnr-coffee-cup"></i>
                            <h4 class="sec_h4">Timing</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->


        <!--================ Ratings Area  =================-->
            @include('website.partials.venue-ratings')
        <!--================ Ratings Area  =================-->

        <!--================ Upcoming Events Area  =================-->

        <!--================ Upcoming Events Area  =================-->

        <!--================ Similar Venus Area  =================-->
            @include('website.partials.similar-venus')
        <!--================ Similar Venus Area  =================-->
@endsection
