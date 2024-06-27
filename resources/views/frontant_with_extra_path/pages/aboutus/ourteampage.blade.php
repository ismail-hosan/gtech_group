@extends('frontant_with_extra_path.layouts.master')

@section('main-title')
Our Team
@endsection




@section('page-intro')
<li><a href="{{route('menu.aboutus')}}">About Us</a></li>
<li><a class="active">Our Team</a></li>

@endsection

@section('main-content')

<!-- <div class="section gray-bg clearfix">
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
</div> -->
<style>
    .banner {
        display: none;
    }

    .border {
        border: 1px solid rgb(222, 222, 222);
        border-radius: 2px;
        transition: all 0.5s ease-in 0s;
        padding: 8px;
    }
</style>

<div class="container" style="margin-bottom: 35px;">
    <div style="background: rgb(248, 248, 248);width: 100%;height: 20rem;margin-top:29px;"></div>
    <div class="row" style="display: flex;justify-content: center;margin-bottom: 44px;">
        @if($ceo)
        <div class="col-md-4" style="display: flex;justify-content: center;margin-top: -15rem;">
            <div class="border">
                <img src="{{asset('public/backend/team/'.$ceo->image)}}" alt="{{ $ceo->alt ?? 'gtech' }}" class="img-fluid" style="height:290px">
                <h5 class="text-center">{{$ceo->name}}</h5>
                <p class="text-center" style="margin-bottom: 0px;">{{$ceo->designation_id}}</p>
            </div>

        </div>
        @endif
    </div>

    @if ($teamMembers)

    <div class="row">
        @foreach($teamMembers as $value)
        <div class="col-md-4">
            <div class="border">
                <img src="{{asset('public/backend/team/'.$value->image)}}"" alt=" {{ $value->alt ?? 'gtech' }}" style="height:200px" class="img-fluid">
                <h5 class="text-center">{{$value->name}}</h5>
                <p class="text-center" style="margin-bottom: 0px;">{{$value->designation_id}}</p>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <div class="row">
    @if ($teamMembers)
    @foreach($teamMembers as $value)
        <div class="col-md-4">
            <div class="border">
                <img src="{{ asset('public/backend/team/'.$value->image) }}" alt="{{ $value->alt ?? 'gtech' }}" class="img-fluid">
                <h5 class="text-center">{{ $value->name }}</h5>
                <p class="text-center" style="margin-bottom: 0px;">{{ $value->designation_id }}</p>
            </div>
        </div>
    @endforeach
    @endif
</div>
    
</div>



<!-- <div class="section gray-bg clearfix">
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
</div> -->

@endsection