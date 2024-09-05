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
        height: 150px;
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

    .title1 {
        background: #f21a25;
        color: #fff;
        border-radius: 15px 0px;
        padding: 9px 25px;
        font-weight: 600;
    }

    .title2 {
        background: #159f59;
        color: #fff;
        border-radius: 15px 0px;
        padding: 9px 25px;
        font-weight: 600;
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
                <!-- <h2 class="text-center realstate"><span style="background-image: linear-gradient(to right, #f073ab 0%, #1dbff0 51%, #f073ab 100%);color:#fff;border-radius:39px 0px;padding:16px 27px;font-family: 'Sintony', sans-serif;">About Us</span></h2> -->
                <h2 class="text-center"><span
                        class="title1">About</span>
                    <span class="title2">Us</span>
                </h2>
                <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Us</span> -->

                {{-- <div class="separator"></div> --}}
                <div class="row" style="margin-top:50px;">
                    <div class="col-md-6">
                        <!--<h2 class="title" style="margin-right: 10px;font-size:21px;">{{$aboutus->title}}</h2>-->
                        <div class="row">
                            <div class="col-md-12 about-section-text">

                                <p style="font-size:17px !important;">{!! \Illuminate\Support\str::limit(strip_tags($aboutus->description), 530) !!}</p>

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


<style>
    .sectionmd {
        background-color: #28a745;
        color: white;
        padding: 77px 0;
        margin-bottom: 60px;
    }

    .quote {
        margin-top: 20px;
    }

    .quote-author {
        font-weight: bold;
    }

    .md-image {
        margin-left: 88px;
    }

    @media (max-width: 767px) {
        .md-image {

            margin-left: 28px;


        }
    }
</style>


<!-- start md section -->
<section class="sectionmd text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4 md-image">
                <img src="{{asset('public/frontant/images/WhatsApp Image 2024-08-31 at 16.png')}}" alt="Prof. Muhammad Yunus" class="img-fluid" style="border:1px solid rgb(255, 255, 255)">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center" style="margin-top: 21px;">
                <p style="font-size: 17px;">Mr. Mostafa Al Mahmud, an accomplished leader with a Master’s degree from the University of Dhaka, is a seasoned and visionary businessman with expertise in international trade. Engaged in various sectors such as garments, food, and agro industries, he is a prominent entrepreneur in the country.</p>
                <p class="quote">“Making money is happiness. Making other people happy is super-happiness”</p>
                <p class="quote-author">-- Honorable Chairman Mr. Mostafa Al Mahmud</p>
            </div>
        </div>
    </div>
</section>
<!-- end md section -->


@include('frontant_with_extra_path.layouts.partials.whychooseus')

@include('frontant_with_extra_path.layouts.partials.work')




<style>
    #portfolio {
        padding: 40px;
        margin: 0 auto;
    }

    .gallery-title {
        font-size: 36px;
        color: #db584e;
        text-align: center;
        font-weight: 700;
        padding: 40px 20px 60px;
    }

    .filter-button {
        font-size: 18px;
        /*border: 1px solid #ffffff;*/
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        /*margin-bottom: 30px;*/
        background-color: #159f59;
        font-family: 'Sintony', sans-serif;

    }

    .filter-button:hover {
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: #3ee311;

    }


    .filter-button.active {
        background-color: #3ee311;
        color: #ffffff;
    }

    .port-image {
        width: 100%;
    }

    .gallery_product {
        margin-bottom: 30px;
    }

    .btn {
        padding: 6px 0px;
    }
</style>



@if(!$projects->isEmpty())
<h2 class="text-center" style="margin-top:60px">
    <span class="title1">Our</span>
    <span class="title2">Projects</span>
</h2>
<section id="portfolio">

    <div class="container">
        <div class="text-center">
            <button class="btn filter-button active" data-filter="all">All</button>
            <button class="btn filter-button" data-filter="complited">complited</button>
            <button class="btn filter-button" data-filter="ongoing">ongoing</button>
        </div>
        <div class="row">
            @if($images)
            @foreach($images as $image)
            <a href="#" class="gallery_product col-md-3 filter center {{$image->project_id}}">
                <img src="{{ asset('public/'.$image->image) }}" style="height:200px;border-radius:10px;">
                <p class="text-center" style="font-weight: bold;color: black;margin: 16px 0px;">{{$image->title}}</p>
            </a>
            @endforeach
            @endif


        </div>
    </div>
</section>
@endif



<!-- section end -->
<style>
    .overlay-container img {
        width: 100%;
        opacity: 1;
        animation: bounce 2s infinite alternate, zoom 2s infinite alternate;
        transition: opacity 0.3s ease-in-out;
    }


    @keyframes bounce {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-10px);
        }
    }


    @keyframes zoom {
        0% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1);
        }
    }


    .overlay-container:hover img {
        opacity: 0.7;
        animation: bounce 2s infinite alternate, zoom 2s infinite alternate reverse;
    }
</style>
<!-- section start -->
<!-- ================ -->
@if(!$ourclient->isEmpty())
<div class="section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                {{-- <h2>Our Respected Client</h2> --}}
                <!-- <h2><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:15px 60px;">OUR  PARTNERS</span> -->
                <h2 class="text-center">
                    <span class="title1">Our</span>
                    <span class="title2">Partners</span>
                </h2>
                <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Choose Us ?</span></h2> -->
                </h2><br>
                {{-- <div class="separator-2"></div> --}}
                @foreach($ourclient as $value)
                <div class="col-md-2">
                    <div class="card" style="border: none;box-shadow:none;">
                        <div class="overlay-container">
                            <img src="{{asset('public/'.$value->logo)}}" class="card-img-top" alt="{{ $value->alt ?? 'IT Way BD' }}" style="height: 145px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$value->name ?? ''}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endif
<!-- section end -->

<!-- Testimunials -->


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

<style>
    .hero-section {
        /* background-image: url('public/frontant/images/new.jpg'); */
        background-color: #28a745;
        background-size: cover;
        background-position: cover;
        color: white;
        text-align: center;
        padding: 100px 0;
    }

    .hero-section h1 {
        margin-bottom: 20px;
        font-size: 2.5rem;
    }

    .benefit {
        margin: 20px 0;
    }

    .benefit-icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    h3 {
        color: white
    }
</style>

<section class="hero-section">
    <div class="container">
        <h1 style="color:#fcfcfc;">Why Going Solar Is the Best Decision You'll Ever Make</h1>
        <p>If you own a commercial property, you should consider switching to solar energy. This is a cost-effective decision because:</p>
        <div class="row">
            <div class="col-md-4 benefit">
                <div class="benefit-icon">
                    <img src="https://www.thesolarcompany.com/wp-content/uploads/2022/04/icon-taxsavings.svg" alt="" style="height: 77px;width:363px;">
                </div>
                <h3 style="color:#f1f1f1">Tax Incentives</h3>
                <p>Government offers a variety of great financial benefits for going solar.</p>
            </div>
            <div class="col-md-4 benefit">
                <div class="benefit-icon">
                    <img src="https://www.thesolarcompany.com/wp-content/uploads/2022/04/icon-dollar-arrows.svg" alt="" style="height: 77px;width:363px;">
                </div>
                <h3>Lower Utility Bill</h3>
                <p>Solar reduces monthly energy bills and avoids peak electricity rates.</p>
            </div>
            <div class="col-md-4 benefit">
                <div class="benefit-icon">
                    <img src="https://www.thesolarcompany.com/wp-content/uploads/2022/04/icon-sun.svg" alt="" style="height: 77px;width:363px;">
                </div>
                <h3>Business Savvy</h3>
                <p>Enhance your business's eco-friendly reputation and attract customers who care about sustainability.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 benefit text-center">
                <div class="benefit-icon">
                    <img src="https://www.thesolarcompany.com/wp-content/uploads/2022/04/icon-thefinger.svg" alt="" style="height: 77px;width:363px;">
                </div>
                <h3>Greener Impact</h3>
                <p>Decrease your carbon footprint and contribute to a cleaner planet.</p>
            </div>
            <div class="col-md-4 benefit">
                <div class="benefit-icon">
                    <img src="https://www.thesolarcompany.com/wp-content/uploads/2022/04/icon-money-trail.svg" alt="" style="height: 77px;width:363px;">
                </div>
                <h3>It's Easy</h3>
                <p>We handle everything for you, from planning to installation and maintenance.</p>
            </div>
            <div class="col-md-4 benefit">
                <div class="benefit-icon">
                    <img src="https://www.thesolarcompany.com/wp-content/uploads/2022/04/icon-thefinger.svg" alt="" style="height: 77px;width:363px;">
                </div>
                <h3>It's Easy</h3>
                <p>We handle everything for you, from planning to installation and maintenance.</p>
            </div>
        </div>
    </div>
</section>




<script>
    $(document).ready(function() {
        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                $('.filter').show('1000');
            } else {
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');
            }

            $(".filter-button").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>

<script src="script.js"></script>


@endsection