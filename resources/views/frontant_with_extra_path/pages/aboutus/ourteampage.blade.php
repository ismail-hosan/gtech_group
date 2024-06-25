@extends('frontant_with_extra_path.layouts.master')

@section('main-title')
Our Team
@endsection

@section('header-banner')
{{asset('public/frontant/images/blog-4.jpg')}}
@endsection


@section('page-intro')
<li><a href="{{route('menu.aboutus')}}">About Us</a></li>
<li><a class="active">Our Team</a></li>

@endsection

@section('main-content')

{{-- <div class="section gray-bg clearfix">
    @if ($ceo)
    <div class="col-md-3 col-sm-6 ">
        <div class="box-style-1 white-bg team-member">
            <div class="overlay-container">
                <img class="avatar" src="{{asset('public/backend/team/'.$ceo->image)}}"
                    alt="{{ $ceo->alt ?? 'IT Way BD' }}">
            </div>
            <h4>{{$ceo->name}}</h4>
            {{$ceo->designation_id}}
        </div>
    </div>
    @endif
</div> --}}

<style>
    .avatar {
        border-radius: 50%;
    }
  .box-style-1.white-bg.team-member img {
    border-radius: 50%;
    border: solid 1px #000;
    width: 100%;
    height: 250px;
    
  }
  
  .box-style-1 {
    width: 100%;
    height: 350px;
  }
</style>

<div class="section gray-bg clearfix">
    @if ($teamMembers)

    @foreach($teamMembers as $value)
    <div class="col-md-3 ">
        <div class="box-style-1 white-bg team-member">
            <div class="overlay-container">
                <img class="avatar" src="{{asset('public/backend/team/'.$value->image)}}"
                    alt="{{ $value->alt ?? 'IT Way BD' }}">
            </div>
            <h4>{{$value->name}}</h4>
            {{$value->designation_id}}
        </div>
    </div>
    @endforeach

    @endif
</div>

@endsection