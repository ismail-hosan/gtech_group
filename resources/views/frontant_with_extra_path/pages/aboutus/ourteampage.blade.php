@extends('frontant_with_extra_path.layouts.master')

@section('main-title')
Our Team
@endsection

@section('page-intro')
<li><a href="{{ route('menu.aboutus') }}">About Us</a></li>
<li><a class="active">Our Team</a></li>
@endsection

@section('main-content')
<style>
.banner {
    display: none;
}

.border {
    border: 1px solid rgb(222, 222, 222);
    border-radius: 2px;
    transition: all 0.20s ease-in-out;
    padding: 8px;
    position: relative; 
    overflow: hidden; 
    height: 375px;
}

.ceo-section {
    display: flex;
    justify-content: center;
    margin-top: -15rem; 
    position: relative;
}

.ceo-section:hover .border {
    height: auto; 
}

.additional-text {
    opacity: 0;
    transition: opacity 0.20s ease-in-out;
    width: 100%; 
    color: black;  
    margin-top: 20px; 
    box-sizing: border-box;
    background-color: #c3cdc3;
    padding: 2px; 
}

.ceo-section:hover .additional-text {
    opacity: 2;
}
</style>

<div class="container" style="margin-bottom: 35px;">
    <div style="background: rgb(248, 248, 248);width: 100%;height: 20rem;margin-top:29px;"></div>
    <div class="row" style="display: flex;justify-content: center;margin-bottom: 44px;">
        @if($ceo)
        <div class="col-md-4 ceo-section">
            <div class="border">
                <img src="{{ asset('public/backend/team/'.$ceo->image) }}" alt="{{ $ceo->alt ?? 'gtech' }}" class="img-fluid" style="height: 290px;">
                <h5 class="text-center">{{ $ceo->name }}</h5>
                <p class="text-center" style="margin-bottom: 0px;">{{ $ceo->designation_id }}</p>
                @if($ceo->s_degination)
                <div class="additional-text">
                    {!! $ceo->s_degination  !!}
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>

    <div class="row">
        @if ($teamMembers)
        @foreach($teamMembers as $value)
        <div class="col-md-4 ceo-section">
            <div class="border">
                <img src="{{ asset('public/backend/team/'.$value->image) }}" alt="{{ $value->alt ?? 'gtech' }}" style="height: 200px;" class="img-fluid">
                <h5 class="text-center">{{ $value->name }}</h5>
                <p class="text-center" style="margin-bottom: 0px;">{{ $value->designation_id }}</p>
                <div class="additional-text">
                    {!! $ceo->s_degination  !!}
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection
