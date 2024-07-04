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

    .title1 {
        background: #10245a;
        color: #fff;
        border-radius: 10px 0px;
        padding: 3px 22px;
        font-weight: 600;
    }

    .title2 {
        background: #3ed381;
        color: #fff;
        border-radius: 10px 0px;
        padding: 3px 22px;
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
                <h2 class="text-center"><span class="title1">About</span>
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
		background: rgb(0 0 0 / 38%);
		position: absolute;
		bottom: -80%;
		left: 0;
		width: 100%;
		height: 100%;
		align-items: center;
		transition: all .4s ease-in-out;
		font-size: 14px;
		overflow: hidden;
		text-decoration: none;
		/* overflow-y: scroll; */
	}


	.hello h3 {
		padding-top: 7px;
		font-size: 19px;
		font-weight: 600;
		color: #fff;
		margin-bottom: 5px;
		margin-top: 0px;
	}

	.success {
		color: #416df8;
		text-decoration: none;
		font-weight: 600;
	}

	.success:hover {
		color: #ff0000;
		/* Change this to the color you want on hover */
	}

	.project:hover .hello {
		bottom: 0;
		width: 100%;
		height: 100%;
		padding-top: 100px;
		text-decoration: none;
		/* display: flex; */
		justify-content: center;
	}
</style>

<!-- ================ -->
@if(!$products->isEmpty())

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- <h2 class="text-center"><span class="bottom-line" style="background: #003166;color:#fff;border-radius:39px 0px;padding:16px 60px;">Our Products</span> </h2> -->
            <h2 class="text-center">
                <span class="title1">Our</span>
                <span class="title2">Products</span>
            </h2>
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

        <!-- <h2><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:16px 60px;">Our Projects</span> -->
        <h2 class="text-center">
            <span class="title1">Our</span>
            <span class="title2">Projects</span>
        </h2>
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
    <div id="{{$project1->id}}" class="tab-content" @if($key !=0) style="display:none" @endif>
        @php
        $results = App\Helpers\Helper::getProject($project1->id);
        @endphp

        @foreach($results as $result)
        <div class="project">
            <img src="{{ asset('public/'.$result->image) }}" alt="Project 1">
            <a href="" class="hello" style="color:#ffffff">
				<h3>{{$result->title??''}}</h3>

				<p><i class="fa fa-map-marker" aria-hidden="true" style="color:red;font-size: 21px;"></i> {{$result->location ??''}},Dhaka</p>
				<p>Ditails <i class="fa fa-angle-right" aria-hidden="true"></i></p>

			</a>
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
                <!-- <h2><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:15px 60px;">OUR  PARTNERS</span> -->
                <h2 class="text-center">
                    <span class="title1">Our</span>
                    <span class="title2">Partners</span>
                </h2>
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
                <!-- <h2 class="text-center"><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:15px 60px;">Customer Review</span> -->
                <h2 class="text-center">
                    <span class="title1">Customer</span>
                    <span class="title2">Review</span>
                </h2>
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

<style>
    .hero-section {
        background-image: url('public/frontant/images/new.jpg');
        /* background-color: #505f80; */
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
        <h1 style="color:white;">Why Going Solar Is the Best Decision You'll Ever Make</h1>
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
            <div class="col-md-4 benefit">
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
        </div>
    </div>
</section>

<style>
    .meet {
        display: grid;
        grid-template-columns: 2fr 3fr;
        column-gap: 1rem;
        width: 100%;
        margin: 1.5%;
        padding: 1.875rem;
        border: 2px solid rgb(222, 222, 222);
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
    }

    .eqciXs {
        display: flex;
        flex-direction: column;
    }

    .jmnuuj {
        width: 100%;
        height: auto;
    }

    .jTjBRp {
        display: flex;
        flex-direction: column;
    }

    .byXqdW {
        font-size: 2rem;
        font-weight: 500;
        line-height: 1.75rem;
        text-align: left;
        color: rgb(60, 60, 60);
        margin: 0px;
    }

    .bivEmn {
        font-size: 1.4rem;
        line-height: 1rem;
        color: rgb(39, 174, 96);
    }

    .dzsLup {
        display: -webkit-box;
        -webkit-line-clamp: 6;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 16px;
        line-height: 24px;
    }

    .dneckc {
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.375rem;
        text-align: left;
        color: rgb(60, 60, 60);
        margin: 0px;
    }

    .jEaFky {
        height: 1.25rem;
        width: 1.25rem;
    }

    .hNOjpB {
        color: rgb(39, 174, 96);
        transition: color 250ms ease 0s;
    }
</style>

<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12 pb-25px">
            {{-- <h2 class="title text-center text-Uppercase animate-charcter">CLIENTS FEEDBACK</h2> --}}
            <!-- <h2 class="text-center"><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:15px 60px;">Customer Review</span> -->
            <h2 class="text-center">
                <span class="title1">Meet</span>
                <span class="title2">The Team</span>
            </h2>
            <!--<span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">FEEDBACK</span>-->
            </h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="meet">
                <img src="{{asset('public/frontant/images/new.jpg')}}" style="height:206px">
                <div class="jTjBRp">
                    <h3 style="color:black" class="byXqdW">Sohel Rana</h3>
                    <div class="jEaFky"></div>
                    <p class="bivEmn">Managing Director</p>
                    <div class="jEaFky"></div>
                    <p class="dneckc dzsLup">
                    <p><strong>Sohel Ahmed</strong> is currently working as the Managing Director of Grameen Shakti, looking after overall activities from policy to operational level. Grameen Shakti is one of the most successful organizations founded by.......</p>
                    <div class="hNOjpB"><svg width="8.25rem" height="2rem" viewBox="0 0 100 15" fill="none" cursor="pointer">
                            <path d="M5.00293 9.06934H2.52441V14H0.300781V1.20312H4.80078C6.27734 1.20312 7.41699 1.53418 8.21973 2.19629C9.02246 2.8584 9.42383 3.81641 9.42383 5.07031C9.42383 5.92578 9.21582 6.64355 8.7998 7.22363C8.38965 7.79785 7.81543 8.24023 7.07715 8.55078L9.95117 13.8857V14H7.56934L5.00293 9.06934ZM2.52441 7.28516H4.80957C5.55957 7.28516 6.14551 7.09766 6.56738 6.72266C6.98926 6.3418 7.2002 5.82324 7.2002 5.16699C7.2002 4.48145 7.00391 3.95117 6.61133 3.57617C6.22461 3.20117 5.64453 3.00781 4.87109 2.99609H2.52441V7.28516ZM15.5146 14.1758C14.1611 14.1758 13.0625 13.751 12.2188 12.9014C11.3809 12.0459 10.9619 10.9092 10.9619 9.49121V9.22754C10.9619 8.27832 11.1436 7.43164 11.5068 6.6875C11.876 5.9375 12.3916 5.35449 13.0537 4.93848C13.7158 4.52246 14.4541 4.31445 15.2686 4.31445C16.5635 4.31445 17.5625 4.72754 18.2656 5.55371C18.9746 6.37988 19.3291 7.54883 19.3291 9.06055V9.92188H13.1152C13.1797 10.707 13.4404 11.3281 13.8975 11.7852C14.3604 12.2422 14.9404 12.4707 15.6377 12.4707C16.6162 12.4707 17.4131 12.0752 18.0283 11.2842L19.1797 12.3828C18.7988 12.9512 18.2891 13.3936 17.6504 13.71C17.0176 14.0205 16.3057 14.1758 15.5146 14.1758ZM15.2598 6.02832C14.6738 6.02832 14.1992 6.2334 13.8359 6.64355C13.4785 7.05371 13.25 7.625 13.1504 8.35742H17.2197V8.19922C17.1729 7.48438 16.9824 6.94531 16.6484 6.58203C16.3145 6.21289 15.8516 6.02832 15.2598 6.02832ZM26.6768 14C26.583 13.8184 26.501 13.5225 26.4307 13.1123C25.751 13.8213 24.9189 14.1758 23.9346 14.1758C22.9795 14.1758 22.2002 13.9033 21.5967 13.3584C20.9932 12.8135 20.6914 12.1396 20.6914 11.3369C20.6914 10.3232 21.0664 9.54688 21.8164 9.00781C22.5723 8.46289 23.6504 8.19043 25.0508 8.19043H26.3604V7.56641C26.3604 7.07422 26.2227 6.68164 25.9473 6.38867C25.6719 6.08984 25.2529 5.94043 24.6904 5.94043C24.2041 5.94043 23.8057 6.06348 23.4951 6.30957C23.1846 6.5498 23.0293 6.85742 23.0293 7.23242H20.8936C20.8936 6.71094 21.0664 6.22461 21.4121 5.77344C21.7578 5.31641 22.2266 4.95898 22.8184 4.70117C23.416 4.44336 24.0811 4.31445 24.8135 4.31445C25.9268 4.31445 26.8145 4.5957 27.4766 5.1582C28.1387 5.71484 28.4785 6.5 28.4961 7.51367V11.8027C28.4961 12.6582 28.6162 13.3408 28.8564 13.8506V14H26.6768ZM24.3301 12.4619C24.752 12.4619 25.1475 12.3594 25.5166 12.1543C25.8916 11.9492 26.1729 11.6738 26.3604 11.3281V9.53516H25.209C24.418 9.53516 23.8232 9.67285 23.4248 9.94824C23.0264 10.2236 22.8271 10.6133 22.8271 11.1172C22.8271 11.5273 22.9619 11.8555 23.2314 12.1016C23.5068 12.3418 23.873 12.4619 24.3301 12.4619ZM30.333 9.1748C30.333 7.70996 30.6729 6.53516 31.3525 5.65039C32.0322 4.75977 32.9434 4.31445 34.0859 4.31445C35.0938 4.31445 35.9082 4.66602 36.5293 5.36914V0.5H38.665V14H36.7314L36.626 13.0156C35.9873 13.7891 35.1348 14.1758 34.0684 14.1758C32.9551 14.1758 32.0527 13.7275 31.3613 12.8311C30.6758 11.9346 30.333 10.7158 30.333 9.1748ZM32.4688 9.35938C32.4688 10.3262 32.6533 11.082 33.0225 11.627C33.3975 12.166 33.9277 12.4355 34.6133 12.4355C35.4863 12.4355 36.125 12.0459 36.5293 11.2666V7.20605C36.1367 6.44434 35.5039 6.06348 34.6309 6.06348C33.9395 6.06348 33.4062 6.33887 33.0312 6.88965C32.6562 7.43457 32.4688 8.25781 32.4688 9.35938ZM48.4648 1.20312L52.1562 11.0117L55.8389 1.20312H58.7129V14H56.498V9.78125L56.7178 4.13867L52.9385 14H51.3477L47.5771 4.14746L47.7969 9.78125V14H45.582V1.20312H48.4648ZM60.7432 9.15723C60.7432 8.22559 60.9277 7.3877 61.2969 6.64355C61.666 5.89355 62.1846 5.31934 62.8525 4.9209C63.5205 4.5166 64.2881 4.31445 65.1553 4.31445C66.4385 4.31445 67.4785 4.72754 68.2754 5.55371C69.0781 6.37988 69.5117 7.47559 69.5762 8.84082L69.585 9.3418C69.585 10.2793 69.4033 11.1172 69.04 11.8555C68.6826 12.5938 68.167 13.165 67.4932 13.5693C66.8252 13.9736 66.0518 14.1758 65.1729 14.1758C63.8311 14.1758 62.7559 13.7305 61.9473 12.8398C61.1445 11.9434 60.7432 10.751 60.7432 9.2627V9.15723ZM62.8789 9.3418C62.8789 10.3203 63.0811 11.0879 63.4854 11.6445C63.8896 12.1953 64.4521 12.4707 65.1729 12.4707C65.8936 12.4707 66.4531 12.1895 66.8516 11.627C67.2559 11.0645 67.458 10.2412 67.458 9.15723C67.458 8.19629 67.25 7.43457 66.834 6.87207C66.4238 6.30957 65.8643 6.02832 65.1553 6.02832C64.458 6.02832 63.9043 6.30664 63.4941 6.86328C63.084 7.41406 62.8789 8.24023 62.8789 9.3418ZM76.3701 6.44141C76.0889 6.39453 75.7988 6.37109 75.5 6.37109C74.5215 6.37109 73.8623 6.74609 73.5225 7.49609V14H71.3867V4.49023H73.4258L73.4785 5.55371C73.9941 4.72754 74.709 4.31445 75.623 4.31445C75.9277 4.31445 76.1797 4.35547 76.3789 4.4375L76.3701 6.44141ZM81.7314 14.1758C80.3779 14.1758 79.2793 13.751 78.4355 12.9014C77.5977 12.0459 77.1787 10.9092 77.1787 9.49121V9.22754C77.1787 8.27832 77.3604 7.43164 77.7236 6.6875C78.0928 5.9375 78.6084 5.35449 79.2705 4.93848C79.9326 4.52246 80.6709 4.31445 81.4854 4.31445C82.7803 4.31445 83.7793 4.72754 84.4824 5.55371C85.1914 6.37988 85.5459 7.54883 85.5459 9.06055V9.92188H79.332C79.3965 10.707 79.6572 11.3281 80.1143 11.7852C80.5771 12.2422 81.1572 12.4707 81.8545 12.4707C82.833 12.4707 83.6299 12.0752 84.2451 11.2842L85.3965 12.3828C85.0156 12.9512 84.5059 13.3936 83.8672 13.71C83.2344 14.0205 82.5225 14.1758 81.7314 14.1758ZM81.4766 6.02832C80.8906 6.02832 80.416 6.2334 80.0527 6.64355C79.6953 7.05371 79.4668 7.625 79.3672 8.35742H83.4365V8.19922C83.3896 7.48438 83.1992 6.94531 82.8652 6.58203C82.5312 6.21289 82.0684 6.02832 81.4766 6.02832ZM96.5586 8.21429C96.5586 8.13393 96.5184 8.04353 96.4581 7.98326L91.7773 3.30245C91.7171 3.24219 91.6267 3.20201 91.5463 3.20201C91.466 3.20201 91.3756 3.24219 91.3153 3.30245L90.8131 3.80469C90.7528 3.86495 90.7126 3.95536 90.7126 4.03571C90.7126 4.11607 90.7528 4.20647 90.8131 4.26674L94.7606 8.21429L90.8131 12.1618C90.7528 12.2221 90.7126 12.3125 90.7126 12.3929C90.7126 12.4732 90.7528 12.5636 90.8131 12.6239L91.3153 13.1261C91.3756 13.1864 91.466 13.2266 91.5463 13.2266C91.6267 13.2266 91.7171 13.1864 91.7773 13.1261L96.4581 8.44531C96.5184 8.38504 96.5586 8.29464 96.5586 8.21429ZM100.416 8.21429C100.416 8.13393 100.376 8.04353 100.315 7.98326L95.6345 3.30245C95.5742 3.24219 95.4838 3.20201 95.4035 3.20201C95.3231 3.20201 95.2327 3.24219 95.1724 3.30245L94.6702 3.80469C94.6099 3.86495 94.5698 3.95536 94.5698 4.03571C94.5698 4.11607 94.6099 4.20647 94.6702 4.26674L98.6177 8.21429L94.6702 12.1618C94.6099 12.2221 94.5698 12.3125 94.5698 12.3929C94.5698 12.4732 94.6099 12.5636 94.6702 12.6239L95.1724 13.1261C95.2327 13.1864 95.3231 13.2266 95.4035 13.2266C95.4838 13.2266 95.5742 13.1864 95.6345 13.1261L100.315 8.44531C100.376 8.38504 100.416 8.29464 100.416 8.21429Z" fill="currentColor"></path>
                        </svg></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="meet">
                <img src="{{asset('public/frontant/images/new.jpg')}}" style="height:206px">
                <div class="jTjBRp">
                    <h3 style="color:black" class="byXqdW">Sohel Rana</h3>
                    <div class="jEaFky"></div>
                    <p class="bivEmn">Managing Director</p>
                    <div class="jEaFky"></div>
                    <p class="dneckc dzsLup">
                    <p><strong>Sohel Ahmed</strong> is currently working as the Managing Director of Grameen Shakti, looking after overall activities from policy to operational level. Grameen Shakti is one of the most successful organizations founded by.......</p>
                    <div class="hNOjpB"><svg width="8.25rem" height="2rem" viewBox="0 0 100 15" fill="none" cursor="pointer">
                            <path d="M5.00293 9.06934H2.52441V14H0.300781V1.20312H4.80078C6.27734 1.20312 7.41699 1.53418 8.21973 2.19629C9.02246 2.8584 9.42383 3.81641 9.42383 5.07031C9.42383 5.92578 9.21582 6.64355 8.7998 7.22363C8.38965 7.79785 7.81543 8.24023 7.07715 8.55078L9.95117 13.8857V14H7.56934L5.00293 9.06934ZM2.52441 7.28516H4.80957C5.55957 7.28516 6.14551 7.09766 6.56738 6.72266C6.98926 6.3418 7.2002 5.82324 7.2002 5.16699C7.2002 4.48145 7.00391 3.95117 6.61133 3.57617C6.22461 3.20117 5.64453 3.00781 4.87109 2.99609H2.52441V7.28516ZM15.5146 14.1758C14.1611 14.1758 13.0625 13.751 12.2188 12.9014C11.3809 12.0459 10.9619 10.9092 10.9619 9.49121V9.22754C10.9619 8.27832 11.1436 7.43164 11.5068 6.6875C11.876 5.9375 12.3916 5.35449 13.0537 4.93848C13.7158 4.52246 14.4541 4.31445 15.2686 4.31445C16.5635 4.31445 17.5625 4.72754 18.2656 5.55371C18.9746 6.37988 19.3291 7.54883 19.3291 9.06055V9.92188H13.1152C13.1797 10.707 13.4404 11.3281 13.8975 11.7852C14.3604 12.2422 14.9404 12.4707 15.6377 12.4707C16.6162 12.4707 17.4131 12.0752 18.0283 11.2842L19.1797 12.3828C18.7988 12.9512 18.2891 13.3936 17.6504 13.71C17.0176 14.0205 16.3057 14.1758 15.5146 14.1758ZM15.2598 6.02832C14.6738 6.02832 14.1992 6.2334 13.8359 6.64355C13.4785 7.05371 13.25 7.625 13.1504 8.35742H17.2197V8.19922C17.1729 7.48438 16.9824 6.94531 16.6484 6.58203C16.3145 6.21289 15.8516 6.02832 15.2598 6.02832ZM26.6768 14C26.583 13.8184 26.501 13.5225 26.4307 13.1123C25.751 13.8213 24.9189 14.1758 23.9346 14.1758C22.9795 14.1758 22.2002 13.9033 21.5967 13.3584C20.9932 12.8135 20.6914 12.1396 20.6914 11.3369C20.6914 10.3232 21.0664 9.54688 21.8164 9.00781C22.5723 8.46289 23.6504 8.19043 25.0508 8.19043H26.3604V7.56641C26.3604 7.07422 26.2227 6.68164 25.9473 6.38867C25.6719 6.08984 25.2529 5.94043 24.6904 5.94043C24.2041 5.94043 23.8057 6.06348 23.4951 6.30957C23.1846 6.5498 23.0293 6.85742 23.0293 7.23242H20.8936C20.8936 6.71094 21.0664 6.22461 21.4121 5.77344C21.7578 5.31641 22.2266 4.95898 22.8184 4.70117C23.416 4.44336 24.0811 4.31445 24.8135 4.31445C25.9268 4.31445 26.8145 4.5957 27.4766 5.1582C28.1387 5.71484 28.4785 6.5 28.4961 7.51367V11.8027C28.4961 12.6582 28.6162 13.3408 28.8564 13.8506V14H26.6768ZM24.3301 12.4619C24.752 12.4619 25.1475 12.3594 25.5166 12.1543C25.8916 11.9492 26.1729 11.6738 26.3604 11.3281V9.53516H25.209C24.418 9.53516 23.8232 9.67285 23.4248 9.94824C23.0264 10.2236 22.8271 10.6133 22.8271 11.1172C22.8271 11.5273 22.9619 11.8555 23.2314 12.1016C23.5068 12.3418 23.873 12.4619 24.3301 12.4619ZM30.333 9.1748C30.333 7.70996 30.6729 6.53516 31.3525 5.65039C32.0322 4.75977 32.9434 4.31445 34.0859 4.31445C35.0938 4.31445 35.9082 4.66602 36.5293 5.36914V0.5H38.665V14H36.7314L36.626 13.0156C35.9873 13.7891 35.1348 14.1758 34.0684 14.1758C32.9551 14.1758 32.0527 13.7275 31.3613 12.8311C30.6758 11.9346 30.333 10.7158 30.333 9.1748ZM32.4688 9.35938C32.4688 10.3262 32.6533 11.082 33.0225 11.627C33.3975 12.166 33.9277 12.4355 34.6133 12.4355C35.4863 12.4355 36.125 12.0459 36.5293 11.2666V7.20605C36.1367 6.44434 35.5039 6.06348 34.6309 6.06348C33.9395 6.06348 33.4062 6.33887 33.0312 6.88965C32.6562 7.43457 32.4688 8.25781 32.4688 9.35938ZM48.4648 1.20312L52.1562 11.0117L55.8389 1.20312H58.7129V14H56.498V9.78125L56.7178 4.13867L52.9385 14H51.3477L47.5771 4.14746L47.7969 9.78125V14H45.582V1.20312H48.4648ZM60.7432 9.15723C60.7432 8.22559 60.9277 7.3877 61.2969 6.64355C61.666 5.89355 62.1846 5.31934 62.8525 4.9209C63.5205 4.5166 64.2881 4.31445 65.1553 4.31445C66.4385 4.31445 67.4785 4.72754 68.2754 5.55371C69.0781 6.37988 69.5117 7.47559 69.5762 8.84082L69.585 9.3418C69.585 10.2793 69.4033 11.1172 69.04 11.8555C68.6826 12.5938 68.167 13.165 67.4932 13.5693C66.8252 13.9736 66.0518 14.1758 65.1729 14.1758C63.8311 14.1758 62.7559 13.7305 61.9473 12.8398C61.1445 11.9434 60.7432 10.751 60.7432 9.2627V9.15723ZM62.8789 9.3418C62.8789 10.3203 63.0811 11.0879 63.4854 11.6445C63.8896 12.1953 64.4521 12.4707 65.1729 12.4707C65.8936 12.4707 66.4531 12.1895 66.8516 11.627C67.2559 11.0645 67.458 10.2412 67.458 9.15723C67.458 8.19629 67.25 7.43457 66.834 6.87207C66.4238 6.30957 65.8643 6.02832 65.1553 6.02832C64.458 6.02832 63.9043 6.30664 63.4941 6.86328C63.084 7.41406 62.8789 8.24023 62.8789 9.3418ZM76.3701 6.44141C76.0889 6.39453 75.7988 6.37109 75.5 6.37109C74.5215 6.37109 73.8623 6.74609 73.5225 7.49609V14H71.3867V4.49023H73.4258L73.4785 5.55371C73.9941 4.72754 74.709 4.31445 75.623 4.31445C75.9277 4.31445 76.1797 4.35547 76.3789 4.4375L76.3701 6.44141ZM81.7314 14.1758C80.3779 14.1758 79.2793 13.751 78.4355 12.9014C77.5977 12.0459 77.1787 10.9092 77.1787 9.49121V9.22754C77.1787 8.27832 77.3604 7.43164 77.7236 6.6875C78.0928 5.9375 78.6084 5.35449 79.2705 4.93848C79.9326 4.52246 80.6709 4.31445 81.4854 4.31445C82.7803 4.31445 83.7793 4.72754 84.4824 5.55371C85.1914 6.37988 85.5459 7.54883 85.5459 9.06055V9.92188H79.332C79.3965 10.707 79.6572 11.3281 80.1143 11.7852C80.5771 12.2422 81.1572 12.4707 81.8545 12.4707C82.833 12.4707 83.6299 12.0752 84.2451 11.2842L85.3965 12.3828C85.0156 12.9512 84.5059 13.3936 83.8672 13.71C83.2344 14.0205 82.5225 14.1758 81.7314 14.1758ZM81.4766 6.02832C80.8906 6.02832 80.416 6.2334 80.0527 6.64355C79.6953 7.05371 79.4668 7.625 79.3672 8.35742H83.4365V8.19922C83.3896 7.48438 83.1992 6.94531 82.8652 6.58203C82.5312 6.21289 82.0684 6.02832 81.4766 6.02832ZM96.5586 8.21429C96.5586 8.13393 96.5184 8.04353 96.4581 7.98326L91.7773 3.30245C91.7171 3.24219 91.6267 3.20201 91.5463 3.20201C91.466 3.20201 91.3756 3.24219 91.3153 3.30245L90.8131 3.80469C90.7528 3.86495 90.7126 3.95536 90.7126 4.03571C90.7126 4.11607 90.7528 4.20647 90.8131 4.26674L94.7606 8.21429L90.8131 12.1618C90.7528 12.2221 90.7126 12.3125 90.7126 12.3929C90.7126 12.4732 90.7528 12.5636 90.8131 12.6239L91.3153 13.1261C91.3756 13.1864 91.466 13.2266 91.5463 13.2266C91.6267 13.2266 91.7171 13.1864 91.7773 13.1261L96.4581 8.44531C96.5184 8.38504 96.5586 8.29464 96.5586 8.21429ZM100.416 8.21429C100.416 8.13393 100.376 8.04353 100.315 7.98326L95.6345 3.30245C95.5742 3.24219 95.4838 3.20201 95.4035 3.20201C95.3231 3.20201 95.2327 3.24219 95.1724 3.30245L94.6702 3.80469C94.6099 3.86495 94.5698 3.95536 94.5698 4.03571C94.5698 4.11607 94.6099 4.20647 94.6702 4.26674L98.6177 8.21429L94.6702 12.1618C94.6099 12.2221 94.5698 12.3125 94.5698 12.3929C94.5698 12.4732 94.6099 12.5636 94.6702 12.6239L95.1724 13.1261C95.2327 13.1864 95.3231 13.2266 95.4035 13.2266C95.4838 13.2266 95.5742 13.1864 95.6345 13.1261L100.315 8.44531C100.376 8.38504 100.416 8.29464 100.416 8.21429Z" fill="currentColor"></path>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
</div>
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