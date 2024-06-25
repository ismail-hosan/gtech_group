@extends('frontant_with_extra_path.layouts.master')


@section('main-content')

@include('frontant_with_extra_path.layouts.partials.slider')
<style>
    .testimonial-item {
        background: #10245a;
        box-shadow: 5px 10px 5px #0e0d0d;
        padding: 30px;
        max-width: 700px;
        width: 100%;
        z-index: 11;
        height: auto;
        text-align: center;
        margin: 0 auto !important;
    }

    .testimonial-item p {
        color: #fff;
    }

    .owl-carousel .owl-item>div {
        margin: 10px 20px;
    }

    .image-box.object-non-visible .overlay-container img {
        height: 100px;
        width: 100%;
        max-width: 293px;
    }

    .testimonial-item img {
        margin: 0 auto;
        border-radius: 50%;
        border: 5px solid #eeeeee;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .testimonial-item p {
        margin: 20px auto;
        max-width: 600px;
    }

    .about-box-item {
        padding: 15px;
        border: solid 1px #e6e6e6;
        margin-bottom: 15px;
        text-align: center;
        border: 1px solid #d8e3f6;
        display: block;
        border-radius: 4px;
        box-shadow: 5px 10px 5px #f2f2f2;
        -webkit-transition: all 0.4s ease-in;
        transition: all 0.4s ease-in;
        min-height: 180px;
    }

    .about-box-item img {
        width: 60px;
        height: 60px;
        margin: 0 auto;
    }

    .tab-content:after {
        display: none;
    }

    .about-section-text p {
        margin-right: 50px;
    }

    .achieve-item {
        box-shadow: 5px 10px 5px #f1f1f1;
        padding: 8px;
        border: 1px solid #d8e3f6;
        margin: 10px 0px;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }

    .achieve-item img {
        height: 75px;
        margin: 0 auto;
    }

    .client-bg {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        background-image: url('public/frontant/images/cltech2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
        width: 100%;
        opacity: 2.0;
        height: 100%;
    }
    @media (max-width: 767px) {
                .realstate {

                    font-size: 11px;

                   

 }
}
</style>
<!-- section start -->
<!-- ================ -->
<div class="section clearfix">
    <!--<h1 class="d-none">Best website and top software development company in Dhaka Bangladesh</h1>-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <h2 class="text-center">About Us</h2> --}}
                {{-- <h2 class="text-center"><span --}}
                <h2 class="text-center realstate"><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:16px 27px;font-family: 'Sintony', sans-serif;">About Us</span>
                    <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Us</span> -->

                    {{-- <div class="separator"></div> --}}
                    <div class="row" style="margin-top:50px;">
                        <div class="col-md-6">
                            <!--<h2 class="title" style="margin-right: 10px;font-size:21px;">{{$aboutus->title}}</h2>-->
                            <div class="row">
                                <div class="col-md-12 about-section-text">

                                    <p style="font-size:18px !important;">{!! \Illuminate\Support\str::limit(strip_tags($aboutus->description), 530) !!}</p>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="r-btn">
                                    <a href="{{route('menu.aboutus')}}" class="btn btn-white">Explore About Us</a>
                                </div>
                            </div>
                            <div class="space hidden-md hidden-lg"></div>
                        </div>
                        <div class="col-md-6 about-section-img">
                            <img class="img" src="{{ asset('public/backend/aboutus/'.$aboutus->image) }}" alt="{{$aboutus->alt}}" style="border-radius:16px;">

                        </div>
                    </div>
                    <br>
            </div>
        </div>
    </div>
</div>
<!-- section end -->


@include('frontant_with_extra_path.layouts.partials.whychooseus')

@include('frontant_with_extra_path.layouts.partials.work')




<style>
    #projects {
        text-align: center;
        margin: 20px;
    }

    .tabs {
        margin-bottom: 20px;
    }

    .tab-link {
        background-color: #f1f1f1;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        font-size: 15px;
        font-weight: bold;
        font-family: 'Sintony', sans-serif;
    }

    .tab-link.actives {
        background-color: #4CAF50;
        color: white;
    }

    .tab-content {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .project {
        margin: 10px;
        border: 1px solid #ddd;
        width: 286px;
        height: 282px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        /* Hide the overflow of .hello */
    }

    .project img {
        height: 335px;
        width: 300px;
    }

    .hello {
        background: rgb(82 82 82 / 38%);
        position: absolute;
        bottom: -100%;
        /* Initially hide .hello below the project */
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        /* Use flexbox */
        justify-content: center;
        /* Center horizontally */
        align-items: center;
        /* Center vertically */
        transition: bottom 0.8s ease;
        /* Add transition to bottom property */
    }

    .hello p {
        color: white;
    }

    .project:hover .hello {
        bottom: 0;
        /* Show .hello by moving it to the top */
    }
</style>

<!-- ================ -->
@if(!$products->isEmpty())

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"><span class="bottom-line" style="background: #003166;color:#fff;border-radius:39px 0px;padding:16px 60px;">Our Products</span> </h2>
                {{-- {{ \Illuminate\Support\str::limit(strip_tags($value->title), 20) }} --}}
                {{-- <div class="separator-2"></div> --}}
                <div class="row">
                    @foreach($products as $value)
                    @if(!$value->url)
                    <div class="col-md-4">
                        <div class="product_service">
                            <div class="product_service_div">
                                <h3 style="min-height: 54px;">
                                    {!! $value->title !!}
                                </h3>

                                <p>{!! \Illuminate\Support\str::limit(strip_tags($value->description), 100) !!}</p>
                            </div>
                            <div class="bottom-btn">
                                <a href="{{route('pages.product',['slug'=>$value->slug])}}" class="btn-white  btn">Read More</a>
                            </div>
                            
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
        </div>
</div>
@endif

@if(!$projects->isEmpty())
<section id="projects">
    <div class="container">

        <h2><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:16px 60px;">Our Projects</span>
            <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Choose Us ?</span></h2> -->
        </h2>
    </div><br>
    <div class="tabs">
        @foreach($projects as $key=>$project)
        <button class="tab-link @if($key == 0) actives @endif" onclick="openTab(event, '{{$project->id}}')">{{$project->name}}</button>
        <!-- <button class="tab-link" onclick="openTab(event, 'Upcoming')">Upcoming</button>
        <button class="tab-link" onclick="openTab(event, 'Completed')">Completed</button> -->
        @endforeach
    </div>
    @foreach($projects as $key=>$project1)
    <div id="{{$project1->id}}" class="tab-content" @if($key != 0) style="display:none" @endif>
        @php
            $results = App\Helpers\Helper::getProject($project1->id);
        @endphp
       
        @foreach($results as $result)
            <div class="project">
                <img src="{{ asset('public/'.$result->image) }}" alt="Project 1">
                <div class="hello">
                    <p>{{$result->desc}}</p>
                </div>
            </div> 
        @endforeach
    </div>
    @endforeach
    <!-- More projects -->
    </div>
    <!-- More tab contents -->
</section>
@endif



<!-- section end -->

<!-- section start -->
<!-- ================ -->
@if(!$ourclient->isEmpty())
<div class="section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                {{-- <h2>Our Respected Client</h2> --}}
                <h2><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:15px 60px;">Affiliations & Suppliers</span>
            <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Choose Us ?</span></h2> -->
            </h2><br>
                {{-- <div class="separator-2"></div> --}}
                <div class="owl-carousel carousel">
                    @foreach($ourclient as $value)
                    <div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
                        <div class="overlay-container">
                            <img src="{{asset('public/'.$value->logo)}}" alt="{{ $value->alt ?? 'IT Way BD' }}">
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endif
<!-- section end -->

<!-- Testimunials -->
<!-- ================ -->
@if($testimunials->isNotEmpty())
<div class="section clearfix client-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-25px">
                {{-- <h2 class="title text-center text-Uppercase animate-charcter">CLIENTS FEEDBACK</h2> --}}
                <h2 class="text-center"><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:15px 60px;">Customer Review</span>
                    <!--<span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">FEEDBACK</span>-->
                </h2>
            </div>
        </div>
    </div>
    <div class="owl-carousel content-slider">
        @foreach($testimunials as $value)
        <div class="testimonial-item">

            <img src="{{asset('public/backend/testimonial/'.$value->image)}}" alt="{{ $value->alt ?? 'IT Way BD' }}" class="img-circle fixed-dimention bordered">


            <p>{!!$value->message!!}</p>
            <div class="testimonial-info-1" style="color: #e84c3d"><b>- {{$value->customer->name ?? 'N/A'}}</b></div>

        </div>
        @endforeach
    </div>
</div>
@endif

@if($expertise->isNotEmpty())
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-md-12">
                <h2 class="page-title animate-charcter">Our Expertise</h2>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <div class="row grid-space-20">
                    @foreach ($expertise as $value )
                    <div class="col-md-3 col-sm-6">
                        <div class="box-style-1 gray-bg team-member">
                            <div class="overlay-container">
                                <img src="{{asset('public/backend/Expertise/'.$value->image)}}" alt="{{ $value->alt ?? '' }}">
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>
@endif
<!-- End Testimunials -->

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tab-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" actives", "");
        }

        document.getElementById(tabName).style.display = "flex";
        evt.currentTarget.className += " actives";
    }
</script>

<script src="script.js"></script>


@endsection