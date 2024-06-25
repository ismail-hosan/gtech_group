@extends('frontant_with_extra_path.layouts.master')

@section('main-title')
Overview
@endsection

@section('header-banner')
{{asset('public/frontant/images/blog-4.jpg')}}
@endsection


@section('page-intro')
<li><a href="{{route('menu.aboutus')}}">About Us</a></li>
<li><a class="active">Overview</a></li>
@endsection
<style>
    .overlay-container img{
        height: 60px;
    }
    .article h3 {
    font-size: 42px;
    color: #10245a;
    }
    
    .article p {
    font-size: 26px;
    text-align: justify;
    }
    
    .article {
    margin-top: 60px;
    }
</style>

@section('main-content')

<!-- section start -->
<!-- ================ -->

{{-- <div class="section gray-bg clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
            <h1 class="page-title">Our Testimunials</h1>
            <div class="separator-2"></div>
        </div>
    </div>
    <div class="owl-carousel content-slider">
        @if(!$testimunials->isEmpty())
        @foreach($testimunials as $value)
        <div class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial-image">

                            <img src="{{asset('public/backend/testimonial/'.$value->image)}}"
alt="{{ $value->alt ?? 'IT Way BD' }}" class="img-circle fixed-dimention bordered">

</div>
<div class="testimonial-body">
    <div>{!! $value->message ?? "N/A" !!}</div>
    <div class="testimonial-info-1">- {{$value->customer->name}}</div>
</div>
</div>
</div>
</div>
</div>
@endforeach
@endif
</div>
</div> --}}

<div class="section clearfix">
    <div class="container sec-padding">
        <div class="row sec-padding">
            <div class="main col-md-12">
        
                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">{{$aboutpage->title??"N/A"}}</h1>
                <div class="separator-2"></div>
        
                @if ($aboutpage->tagline)
                <p>{{$aboutpage->tagline}}</p>
                @endif
                <hr>
                <!-- page-title end -->
                <div class="row">
                    <div class="{{$aboutpage->image ? 'col-md-6' : 'col-md-9'}}">
                        {!! $aboutpage->description !!}
                    </div>
                    <!-- sidebar start -->
        
                    @if($aboutpage->image)
                    <aside class="sidebar col-md-6">
                        <img class="img-responsive col-xs-12" src="{{asset('public/backend/aboutus/'. $aboutpage->image)}}"
                            width="900px" height="auto" alt="{{ $aboutpage->alt ?? 'IT Way BD' }}">
                    </aside>
                    @endif
                    <!-- sidebar end -->
                </div>
        
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="overview-item">
                    <div class="article">
                        <h3>OUR Mission</h3>
                        <p>Our mission is to achieve customer satisfaction. For that, we provide time tested, secure, reliable &
                            cost- effective
                            management level business solutions to our customers.</p>    
                    </div>    
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('/public/frontant/images/vision.jpg')}}" alt="">
            </div>
        </div>
        <div class="row" style="margin-top: 26px;">
            <div class="col-lg-6">
                <img src="{{ asset('/public/frontant/images/vision.jpg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="overview-item">
                    <div class="article">
                        <h3>OUR Vision</h3>
                        <p>Our vision is to be trusted & respected everywhere as a leading software company & our industry to
                            delivering &
                            developing innovative solutions for our customers to improve their day to day business growth.</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row" style="margin-top: 26px;">
            <div class="col-lg-6">
                <div class="overview-item">
                    <div class="article">
                        <h3>Ensure Top Quality</h3>
                        <p>Quality is most important to IT WAY BD. IT WAY BD has emphasized on quality management practices from the very
                        beginning, IT WAY BD practices world class quality management tools to ensure consistent quality of its products.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('/public/frontant/images/vision.jpg')}}" alt="">
            </div>
        </div>  
        <div class="row" style="margin-top: 26px;">
            <div class="col-lg-6">
                <img src="{{ asset('/public/frontant/images/vision.jpg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="overview-item">
                    <div class="article">
                        <h3>Our Strength</h3>
                        <p>Experienced team of young energetic & senior professionals, whose dedication & creativity on various projects improve
                        our company strength gradually.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
</div>


<!-- section end -->

@endsection