<style>
    .min-hight {
        min-height: 150px;
        margin-top: 20px;
        text-align: center
    }

    .bottom-btn {
        max-width: 150px;
        margin: 0 auto;
    }
</style>

<br>
<!-- section start -->
<!-- ================ -->
<div class="section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container text-center">
                    {{-- <h2>Why Choose Us ?</h2> --}}
                    <h2><span style="background: #003166;color:#fff;border-radius:39px 0px;padding:16px 27px;font-family: 'Sintony', sans-serif;">Our Services</span>
                        <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Choose Us ?</span></h2> -->
                </div><br>
                <div class="row">
                    @foreach($services as $value)
                    {{-- @if($value->url) --}}
                    <div class="col-md-3 col-sm-6">
                        <div class="service_style">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top" src="{{ asset('public/backend/service/'.$value->image) }}" alt="Card image cap" style="height: 20rem;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{!! $value->title !!}</h5>
                                    <!-- <p class="card-text text-center"><i class="fa fa-map-marker" aria-hidden="true" style="color:green;font-size: 21px;"></i> Gulsan</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section end -->