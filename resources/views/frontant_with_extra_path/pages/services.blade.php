@extends('frontant_with_extra_path.layouts.master')

@section('main-title')
{{$data->title ?? 'Services'}}
@endsection

@section('header-banner')
{{asset('public/frontant/images/blog-4.jpg')}}
@endsection

 @section('page-intro')
<li><a href="{{route('menu.aboutus')}}">Home</a></li>
<li class="active">{{$data->title ?? 'Services'}}</li>
@endsection 


@section('main-content')
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="main col-md-12">
                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">{!! $data->title ?? 'Services' !!}</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->

                <!-- portfolio items start -->
                <div class="row">
                    
                    @if($data->image && !in_array(strtolower($data->title), $ignore_image))
                    <div class="col-md-12">
                        <img style="width: 100%;" src="{{ asset('public/backend/service/'.$data->image) }}"
                            alt="{{ $data->alt ?? 'IT Way BD' }}">
                    </div>
                    <div
                        class="col-md-12">
                        {!! $data->details !!}
                    </div>
                    @endif
                </div>
                <!-- portfolio items end -->

            </div>
        </div>
    </div>

    @if($data->products->isNotEmpty())
    <div class="product_cat">
        <div class="container">
            <div class="main col-md-12">
                <!-- page-title start -->
                <!-- ================ -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title">
                            <h4 class="product_cat_h4"> Website Development Services </h4>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($data->products as $value)
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        <div class="subcategory_box">
                            <a href="{{ route('pages.product', ['slug'=> $value->slug]) }}">
                                <div class="subcategory_title">
                                    <h4>{{$value->title}}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- portfolio items end -->
        </div>
    </div>
    @endif


    @if ($data->packages->isNotEmpty())
    <section class="main-container">
        <div class="container">
            <div class="row">

                @foreach($data->packages as $value)
                <!-- pricing table start -->
                <div class="col-sm-3 col-md-3 ">
                    <div class="plan stripped package">
                        <div class="header">
                            <h3>{{$value->name}}</h3>

                        </div>
                        <div class="default-bg">
                            <h4>{{$value->onetime_amount}}</h4>
                        </div>
                        <div class="header">
                            <h4>{{$value->monthly_amount}}</h4>
                        </div>
                        @foreach($value->details as $details)
                        <ul>
                            <li>{{$details->name}}</li>
                        </ul>
                        @endforeach
                        <ul>
                            <li>
                                <button type="button" class="btn btn-default">Order Now</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- pricing table end -->
                @endforeach
            </div>
        </div>
    </section>
    @endif

</section>
@endsection