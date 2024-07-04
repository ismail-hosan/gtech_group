@extends('frontant_with_extra_path.layouts.master')


@section('header-banner')
{{asset('public/frontant/images/blog-4.jpg')}}
@endsection


@section('page-intro')
<li><a href="{{route('menu.aboutus')}}">About Us</a></li>
<li class="active">Our Client</li>
@endsection


@section('main-content')
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-md-12">
                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Our Client</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->

                <!-- portfolio items start -->
                <div class="row">
                    @foreach($ourclient as $value)
                    <div class="col-md-2 col-sm-12 isotope-item">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{asset('public/'.$value->logo)}}" alt="{{ $value->alt ?? 'IT Way BD' }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- portfolio items end -->
            </div>
        </div>
    </div>
</section>
@endsection