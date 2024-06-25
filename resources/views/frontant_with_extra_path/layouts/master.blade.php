<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

  @if (isset($meta) && $meta)
  {!! $meta !!}
  @endif

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{--
  <link rel="canonical" href="{{env('APP_URL', 'https://itwaybd.com/')}}"> --}}
  <meta name='robots' content='index,follow' />
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  @include('frontant_with_extra_path.layouts.partials.styles')
  @yield('styles')

  <style>
    .achivement-extra-style {
      display: flex;
      font-size: 36px;
      font-weight: 700;
      justify-content: center;
    }

    .pb-25px {
      padding-bottom: 25px !important;
    }

    .extra-legend {
      width: 80% !important;
    }

    .development_technology strong {
      color: #fff;
    }

    .development_technology ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }
    .development_technology ul li{
        margin:0 !important;
        padding-bottom:8px;
    }

    .development_technology ul li,
    .development_technology ul li strong,
    .development_technology ul li p,
    .development_technology ul li span
    {
      color: #fff;
      font-size: 14px !important;

    }
    .d-none{display:none;}
    .fixed-dimention {
        width:100px;
        height:100px;
    }
    .header{
        min-height: 77px;
    }
    .modal-header b{
   color:#fff;    
    }
    .bordered{
        border:1px solid #ddd;
    }
    .max-width-200{max-width:129px;}
    .block-center{
        display:block !important;
        margin:0 auto;
        
    }
    
    .about-section-text p{
        line-height: 2 !important;
        text-align: justify;
    }
    .about-section-img .img{
        max-height: 520px !important;
        margin: 0 auto;
        transform: translateY(-20px);
    }
    .gallery-img
    {
        margin:0 0 20px 0;
        border:1px solid #000;
    }
.post-share{display:flex;align-items:center;}

    .post-share #social-links ul{
      display:flex !important;
      list-style-type: none;
      margin:0;
    }
    .post-share #social-links ul li a{
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ddd;
      text-decoration: none;
      font-size: 20px;
      margin: 0 2px;
    }

    .facebook:hover{
      background: #1877f2 !important;
      border: 1px solid #1877f2;
      color: white;
    }
    .twitter:hover{
      background: #1d9bf0 !important;
      border: 1px solid #1d9bf0;
      color: white;
    }
    .linkedin:hover{
      background: #0077b5 !important;
      border: 1px solid #0077b5;
      color: white;
    }
    .whatsapp:hover{
      background: #28d347 !important;
      border: 1px solid #28d347;
      color: white;
    }
    .reddit:hover{
      background: orangered !important;
      border: 1px solid orangered;
      color: white;
    }
    .telegram:hover{
      background: #2ca4d8 !important;
      border: 1px solid #2ca4d8;
      color: white;
    }

  </style>
</head>

<body class="front no-trans">
    
    
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104770244635042");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
  <!-- scrollToTop -->
  <!-- ================ -->
  <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

  <!-- page wrapper start -->
  <!-- ================ -->
  <div class="page-wrapper">

    <!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
    <!-- ================ -->
    @include('frontant_with_extra_path.layouts.partials.topbar')
    <!-- header-top end -->

    <!-- header start classes:
				fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
				 dark: dark header version e.g. <header class="header dark clearfix">
			================ -->
    @include('frontant_with_extra_path.layouts.partials.header')
    @if(Request::url() !== URL::to('/'))
    <!-- header end -->
    <div class="banner">
      <div class="fixed-image" style="background-image:url(@yield('header-banner'))"></div>
    </div>

    {{-- <div class="page-intro">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home pr-10"></i><a href="{{'/'}}">Home</a></li>
              @yield('page-intro')
            </ol>
          </div>
        </div>
      </div>
    </div> --}}
    @endif

    @yield('main-content')

    

    <!-- footer start (Add "light" class to #footer in order to enable light footer) -->
    <!-- ================ -->
    @include('frontant_with_extra_path.layouts.partials.footer')
    <!-- footer end -->

  </div>
  <!-- page-wrapper end -->
  <!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
  <!-- Jquery and Bootstap core js files -->
  @include('frontant_with_extra_path.layouts.partials.scripts')
  <!-- Jquery and Bootstap core js end -->
    <script>
    $(document).ready(function() {
    	var ulitems = $('.development_technology ul li');
    	ulitems.each(function(index, item) {
    		var content = $(item).html();
    		content = content.replace(/&nbsp;/g, ' ');
    		$(item).html(content);
    	})
    });
    </script>
</body>

</html>