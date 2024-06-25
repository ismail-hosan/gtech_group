<!-- <div class="gray-bg section">
    <div class="container">
        {{-- <h2>Why Choose Us ?</h2> --}}
        <h2><span style="background: #10245a;color:#fff;border-radius:10px 0px;padding: 11px 24px;margin-left: 43rem;">Why to choose us</span> 
        <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Choose Us ?</span></h2> -->
<!-- <div class="separator-2" style="color:white;"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">ok</div>
 
                   
  
                </div>
            </div>
        </div>
        <br>
        
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-3 col-md-3 infobox">
                        <div class="info-box-style ">
                            <h4 class="white-h">Company Info</h4>
                            <hr>
                            <div class="row infodetails">
                                <p style="margin-top: -20px;"><i style="padding:10px" class="fa fa-phone"></i>

                                    {{$company->phone ?? ''}}
                                </p>
                                <p style="margin-top: -25px;"><i style="padding:10px" class="fa fa-envelope"></i>

                                    {{$company->email ?? ''}}
                                </p>
                            </div>
                        </div>
                    </div>

                    @if($company->sale_phone || $company->sale_email)
                    <div class="col-sm-3 col-md-3  infobox">
                        <div class="info-box-style ">
                            <h4 class="white-h">Sales Info</h4>
                            <hr>
                            <div class="row infodetails">
                                <p style="margin-top: -20px;"><i style="padding:10px" class="fa fa-phone"></i>

                                    {{$company->sale_phone ?? ''}}
                                </p>
                                <p style="margin-top: -25px;"><i style="padding:10px" class="fa fa-envelope"></i>

                                    {{$company->sale_email ?? ''}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($company->hr_phone || $company->hr_email)
                    <div class="col-sm-3 col-md-3  infobox">
                        <div class="info-box-style ">
                            <h4 class="white-h">Accounts Info</h4>
                            <hr>
                            <div class="row infodetails">
                                <p style="margin-top: -20px;"><i style="padding:10px" class="fa fa-phone"></i>

                                    {{$company->hr_phone ?? ''}}
                                </p>
                                <p style="margin-top: -25px;"><i style="padding:10px" class="fa fa-envelope"></i>

                                    {{$company->hr_email ?? ''}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($company->support_phone || $company->support_email)
                    <div class="col-sm-3 col-md-3  infobox">
                        <div class="info-box-style ">
                            <h4 class="white-h">Support Info</h4>
                            <hr>
                            <div class="row infodetails">
                                <p style="margin-top: -20px;"><i style="padding:10px" class="fa fa-phone"></i>

                                    {{$company->support_phone ?? ''}}
                                </p>
                                <p style="margin-top: -25px;"><i style="padding:10px" class="fa fa-envelope"></i>

                                    {{$company->support_email ?? ''}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div> -->
<!-- </div>
</div>  -->

<style>
@media (max-width: 767px) {
    .text {
        display: flex;
    }
}
</style>
<div class="container text-center ">
    {{-- <h2>Why Choose Us ?</h2> --}}
    <h2 class=""><span class="realstates" style="background: #003166;color:#fff;border-radius:39px 0px;padding:16px 27px;margin-: 43rem;font-family: 'Sintony', sans-serif;">Why to choose us</span>
        <!-- <span style="background: #ef622b;border-radius:10px 0px;padding:0px 5px;color:#fff;">Choose Us ?</span></h2> -->
</div> <br>

<style>
    .highlights {
        background-color: #d2e603;
    }

    .feature-boxs {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        margin: 10px 0;
        background-color: #adacac;
        padding: 71px;
    }

    .backgrounds {
        background-image: url('public/frontant/images/myimage.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }

    .overlays {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 50px;
    }


    .feature-boxs {
        font-family: 'Sintony', sans-serif;
    }
    .feature-boxs:hover
    {
        background-color: #d2e603;
    }

    .btn:hover
    {
        fill: #fff;
    }
</style>



<div class="container-fluid backgrounds highlights ">

    <div class="overlays">
        <div class="row justify-content-center text-center">
            <div class="col-md-6" style="font-family: 'Sintony', sans-serif;">
                <div class="text-center" style="margin-top: 109px;">
                    <p class="text">bel aims to provide you with an unparalleled experience of fine living, wrapped in comfort. Our commitment and quality distinguish us from others.</p>
                    <button class="btn btn-outline-primary" style="line-height: 2.428571;font-size: 17px; color: #F6F6F6; background-color: #02010100; border-style: solid; border-width: 3px 3px 3px 3px; border-color: #ffffff; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5); padding: 6px 29px 8px 49px;">Explore</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <div class="feature-boxs bg-light">
                    better locations
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-boxs bg-light">
                        comprehensive team
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-boxs bg-light">
                        quality materials
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-boxs bg-light">
                        safety first
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-boxs bg-light">
                        timely handover
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-boxs bg-light">
                        customer centric
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- <div class="section clearfix client-bg" style="padding: 112px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <p style="color:white;font-size:20px;">bel aims to provide you with an unparalleled experience of fine living, wrapped in comfort. Our commitment and quality distinguishe us from others.</p>
               <a href="" class="btn btn-outline-success" id="btn" style="font-size: 17px; color: #F6F6F6; background-color: #02010100; border-style: solid; border-width: 3px 3px 3px 3px; border-color: #ffffff; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5); padding: 15px 40px 15px 40px; margin-left: 160px;">Explore</a>
            </div>
            <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="..." alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
            </div>
        </div>
    </div>   
</div> -->