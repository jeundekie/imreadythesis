<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- site metas -->
<title>Homepage</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style>
        #evacuationLegend {
          background: #fdfdfd;
          color :#000;
          padding: 0 10px 0 10px;
          margin: 10px;
          font-weight: bold;
        
          border: 2px solid #000;
        }
        #evacuationLegend div {
          height: 40px;
          line-height: 25px;
          font-size: 1.2em;
        }
        #evacuationLegend div img {
          float: left;
          margin-right: 10px;
        }
        #evacuationLegend img {
          width:  30px;
          height: 30px;
        }
        #evacuationLegend h5 {
          text-align: center
        }
        #reliefLegend {
          background: #fdfdfd;
          color :#000;
          padding: 0 10px 0 10px;
          margin: 10px;
          font-weight: bold;
          border: 2px solid #000;
        }
        #reliefLegend div {
          height: 40px;
          line-height: 25px;
          font-size: 1.2em;
        }
        #reliefLegend div img {
          float: left;
          margin-right: 10px;
        }
        #reliefLegend img {
          width:  30px;
          height: 30px;
        }
        #reliefLegend h5 {
          text-align: center
        }
        #mapLegend h5 {
          text-align: center
        }
        #mapLegend img {
          width:  40px;
          height: 40px;
        }
        #mapLegend div {
          height: 50px;
          line-height: 25px;
          font-size: 1.2em;
        }
        #mapLegend div img {
          float: right;
          margin-right: 10px;
        }
        #mapLegend {
          padding: 0 10px 0 10px;
          margin: 10px;
          font-weight: bold;
    
         
        }
        </style>
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->

<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
               <!-- <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Resiliency Building, Barangay Tunasan (Hall of Justice)</span> </li> -->
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:muntinlupacvd19lsi.desk@gmail.com">muntinlupacvd19lsi.desk@gmail.com</a></span> </li>
                <li> <span class="topbar-label"><i class="fa fa-phone"></i></span> <span class="topbar-hightlight"><a href="tel:09772405218">+63-9772405218</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-right">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/MCDRRMO" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
         <!-- <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="#">Make Appointment</a> </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class=""> <a href="#"><img src="images/logos/plan.png" height="120px" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="#">Home</a>
                </li>
                <li><a href="#">About Us</a></li>
                <li> <a href="#">Service</a>
                  <ul>
                    <li><a href="#">Emergency</a></li>
                    <li><a href="#">Accidents</a></li>
                  </ul>
                </li>
                <li> <a href="#">Blog</a>
                </li>
                <li> <a href="#">Pages</a>
                  <ul>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </li>
                <li> <a href="it_contact.html">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<!-- section -->
<div id="slider" class="section main_slider">
  <div class="container-fuild">
    <div class="row">
      <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
          <ul>
            <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/it_service/ahead.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Computer Services" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/it_service/ahead.jpg"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                              id="slide-270-layer-1012" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                              data-width="full"
                              data-height="full"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                              data-transform_out="s:300;s:300;" 
                              data-start="750" 
                              data-basealign="slide" 
                              data-responsive_offset="on" 
                              data-responsive="off"
                              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-912" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                              data-width="500"
                              data-height="140"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:0px;" 
                              data-mask_out="x:inherit;y:inherit;" 
                              data-start="2000" 
                              data-responsive_offset="on" 
                              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-112" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                              data-fontsize="['70','70','70','35']"
                              data-lineheight="['70','70','70','50']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                              data-start="1000" 
                              data-splitin="chars" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              data-elementdelay="0.05" 
                              style="z-index: 6; white-space: nowrap;">PLANNING </div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-412" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                              data-start="1500" 
                              data-splitin="none" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              style="z-index: 7; white-space: nowrap;">Will Help You To Survive </div>
            </li>
            <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/it_service/slide.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Easy To Use & Customize" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/it_service/slide.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                              id="slide-270-layer-101" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                              data-width="full"
                              data-height="full"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                              data-transform_out="s:300;s:300;" 
                              data-start="750" 
                              data-basealign="slide" 
                              data-responsive_offset="on" 
                              data-responsive="off"
                              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-91" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                              data-width="500"
                              data-height="140"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:0px;" 
                              data-mask_out="x:inherit;y:inherit;" 
                              data-start="2000" 
                              data-responsive_offset="on" 
                              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-11" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                              data-fontsize="['70','70','70','35']"
                              data-lineheight="['70','70','70','50']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                              data-start="1000" 
                              data-splitin="chars" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              data-elementdelay="0.05" 
                              style="z-index: 6; white-space: nowrap;">MCDRRMO TEAM </div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-41" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                              data-start="1500" 
                              data-splitin="none" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              style="z-index: 7; white-space: nowrap;">One Call Away In Times of Emergency </div>
            </li>
            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/it_service/drrmo.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Perfectly Responsive" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/it_service/drrmo.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                              id="slide-270-layer-10" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                              data-width="full"
                              data-height="full"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                              data-transform_out="s:300;s:300;" 
                              data-start="750" 
                              data-basealign="slide" 
                              data-responsive_offset="on" 
                              data-responsive="off"
                              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-9" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                              data-width="500"
                              data-height="140"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:0px;" 
                              data-mask_out="x:inherit;y:inherit;" 
                              data-start="2000" 
                              data-responsive_offset="on" 
                              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-1" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                              data-fontsize="['70','70','70','35']"
                              data-lineheight="['70','70','70','50']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                              data-start="1000" 
                              data-splitin="chars" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              data-elementdelay="0.05" 
                              style="z-index: 6; white-space: nowrap;">Give us a Call </div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                              id="slide-18-layer-4" 
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                              data-start="1500" 
                              data-splitin="none" 
                              data-splitout="none" 
                              data-responsive_offset="on" 
                              style="z-index: 7; white-space: nowrap;">In Times you need Help </div>
            </li>
          </ul>
          <div class="tp-static-layers"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section --> 
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Information Area</h2>
            <button type="button" class="btn btn-success btn-lg btn-block">COVID-19 Support & Information</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <a href="#"><img src="images/it_service/mega.png" alt="#" /></a> </div>
          </div>
          <h4 class="theme_color">Announcement</h4>
          <p><em>updated 1 day ago</em></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"><a href="#"> <img src="images/it_service/cloud.png" alt="#" /></a> </div>
          </div>
          <h4 class="theme_color">Weather Warnings</h4>
          <p><em>updated 1 day ago</em></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"><a href="#"> <img src="images/it_service/road.png" alt="#" /></a> </div>
          </div>
          <h4 class="theme_color">Road Conditions</h4>
          <p><em>updated 1 day ago</em></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30 margin_0">
          <div class="center">
            <div class="icon"><a href="#"> <img src="images/it_service/mega.png" alt="#" /></a> </div>
          </div>
          <h4 class="theme_color">Soon</h4>
          <p><em>stay updated</em></p>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top: 30px">
        <div class="row">
          <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-lg btn-block">Emergency Contacts</button>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-lg btn-block">Get Ready Muntinlupa</button>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-lg btn-block">Social Media Feeds</button>
          </div>
        </div>
    </div>
    <div class="container" style="margin-top: 30px">
        <div class="row">
          <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg btn-block">Pets/Animals</button>
          </div>
          <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#evacuation">Active Evacuation Center</button>
          </div>
    </div>
   
<!-- Map Section --> 
 <div class="container" style="margin-top: 40px">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="mapcenter-tab" data-toggle="tab" href="#mapcenter" role="tab" aria-controls="mapcenter" aria-selected="true" style="color: black"><strong>Evacuation MAP</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"  style="color: black"><strong>Relief Map</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Soon</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="mapcenter" role="tabpanel" aria-labelledby="mapcenter-tab">
             
                <div id="goomap" style="height: 600px; width: 100%"></div>
                
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
             
              <div id="reliefmap" style="height: 600px; width: 100%"></div>

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...
                
            </div>
          </div>
      
      </div>
    </div>
  </div>  
<!-- end section -->
<!-- section -->


<!--Modal For Relief Map -->
<!-- Relief Modal -->
<div class="modal fade left" id="modalright" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full-height modal-left" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <table id="classTable" class="table table-bordered">

                <thead>
                </thead>
                <tbody>
                 
                      <tr>
                      <th style="text-align: left; color: black;"><strong>Address</strong></th>
                       <td id="add" style="color: black;"></td>
                      </tr>
                       <tr>
                      <th style="text-align: left; color: black;"><strong>Needed</strong></th>
                       <td id="cate" style="color: black;"></td>
                      </tr>
                       <tr>
                      <th style="text-align: left; color: black;"><strong>Request</strong></th>
                       <td id="req" style="color: black;"></td>
                      </tr>
                      <tr>
                        <th style="text-align: left; color: black;"><strong>Contact Person</strong></th>
                         <td id="con" style="color: black;"></td>
                       </tr>
                      <tr>
                      <th style="text-align: left; color: black;"><strong>Phone Number</strong></th>
                       <td id="num" style="color: black;"></td>
                      </tr>
                      <tr>
                        <th style="text-align: left; color: black;"><strong>Last Request Made</strong></th>
                         <td id="last" style="color: black;"></td>
                        </tr>
                        <tr>
                          <th style="text-align: left; color: black;"><strong>Time</strong></th>
                           <td id="timeupda" style="color: black;"></td>
                          </tr>
                </tbody>
           </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade right" id="reliefcenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="title" id="exampleModalLabel">Marker of Relief Goods</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
          <table id="classTable" class="table table-bordered">

                <thead>
                </thead>
                <tbody>
                  @foreach($reli as $result)
                            <tr>
                      <th style="text-align: center; color: #000000;">{{$result->reliefcategory}}</th>
                    <td id="from"><img src="{{$result->iconpic}}" style="width:40px;height:40px;"></td>
                            </tr>
                  @endforeach
      
                </tbody>
           </table>     
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- End Modal -->
<!-- End-->


<!-- Modal Section for Maps -->
<div class="modal fade left" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      </div>
      <div class="modal-body">
            <table id="classTable" class="table table-bordered">

                <thead>
                </thead>
                <tbody>
                 
                      <tr>
                         <th style="text-align: left; color: #000000;"><strong>Address</strong></th>
                         <td id="address" style="color: #000000;"></td>
                         <th style="text-align: center; color: #000000;"><strong>Facilities</strong></th>
                           <td id="info" style="text-align: left; color: #000000;"></td>
                      </tr>
                       <tr>
                         <th style="text-align: center; color: #000000;"><strong>Capacity</strong></th>
                         <td id="capa" style="text-align: left; color: #000000;"></td>
                         <th style="text-align: center; color: #000000;"><strong>Evacuees Count</strong></th>
                         <td id="count" style="text-align: left; color: #000000;"></td>
                      </tr>
                      <tr>
                        <th style="text-align: center; color: #160101;"><strong>Contact Person</strong></th>
                         <td id="person" style="text-align: left; color: #000000;"></td>
                         <th style="text-align: center; color: #000000;"><strong>Phone Number</strong></th>
                         <td id="phone" style="text-align: left; color: #000000;"></td>
                      </tr>
                      <tr>
                        <th style="text-align: center; color: #000000;"><strong>Last Update</strong></th>
                        <td id="huling" style="text-align: left; color: #000000;"></td>
                        <th style="text-align: center; color: #000000;"><strong>Time Update</strong></th>
                        <td id="lastime" style="text-align: left; color: #000000;"></td>
                      </tr>
                      <tr>
                          <th style="text-align: center; color: #000000;"><strong>No. PWD</strong></th>
                          <td id="pwd" style="text-align: left; color: #000000;"></td>
                          <th style="text-align: center; color: #000000;"><strong>No. Pregnant</strong></th>
                          <td id="pregnant" style="text-align: left; color: #000000;"></td>
                      </tr>
                      <tr>
                        <th style="text-align: center; color: #000000;"><strong>No. Senior</strong></th>
                        <td id="senior" style="text-align: left; color: #000000;"></td>
                        <th style="text-align: center; color: #000000;"><strong>No. With Medical Cond.</strong></th>
                        <td id="medcon" style="text-align: left; color: #000000;"></td>
                      </tr>
                      <tr>
                        <th style="text-align: center; color: #000000;"><strong>No. Female</strong></th>
                        <td id="female" style="text-align: left; color: #000000;"></td>
                        <th style="text-align: center; color: #000000;"><strong>No. Male</strong></th>
                        <td id="male" style="text-align: left; color: #000000;"></td>
                      </tr>
                      <tr>
                        <th style="text-align: center; color: #000000;"><strong>No. Children</strong></th>
                        <td id="children" style="text-align: left; color: #000000;"></td>
                        <th style="text-align: center; color: #000000;"><strong>No. Family</strong></th>
                        <td id="family" style="text-align: left; color: #000000;"></td>
                      </tr>
                 
                </tbody>
           </table>
               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-primary">Relief Status</a>
      </div>
    </div>
  </div>
</div>

<!-- Flood Map -->
<div class="modal fade left" id="evacuation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Evacuation Center Specialty Flood</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
          
      </div>
      
    </div>
  </div>
</div>
<!-- End Modal -->



<!-- Flood Map -->
<div class="modal fade left" id="floodcenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Evacuation Center Specialty Flood</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
            <div id="mapflood" style="height: 500px; width: 100%"></div>
      </div>
      
    </div>
  </div>
</div>
<!-- End Modal -->


<!-- Earthquake Map -->
<div class="modal fade left" id="earthcenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Evacuation Center Specialty Earthquake</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
            <div id="earthmap" style="height: 500px; width: 100%"></div>
      </div>
     
    </div>
  </div>
</div>
<!-- End Modal -->


<!-- Fire Modal -->
<div class="modal fade left" id="firecenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Evacuation Center Specialty Fire</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
            <div id="firemap" style="height: 500px; width: 100%"></div>
      </div>
     
    </div>
  </div>
</div>
<!-- End Modal -->
 
<!-- Modal Barangay Icon -->
<div class="modal fade right" id="center" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="title" id="exampleModalLabel">Marker Based on Barangay</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
          <table id="classTable" class="table table-bordered" style="padding: 0ch">

  
                <tbody>   
                  @foreach($results as $result)
                            <tr>
                      <th style="text-align: center; color: #000000;">{{$result->brgyname}}</th>
                    <td id="from"><img src="{{$result->iconpic}}" style="width:30px;height:30px;"></td>
                            </tr>
                  @endforeach
      
                </tbody>
           </table>     
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- End Section -->

<!-- end section -->

                <div id="mapLegend">
                  <h5>Center Guide</h5>
                </div>
                <div id="mapLegends"></div>
                <div id="evacuationLegend">
                  <h5>Icon Guide</h5>
                </div>
                <div id="reliefLegend">
                  <h5>Icon Guide</h5>
                </div>
<!-- footer -->
<footer class="footer_style_2" style="margin-top: 40px">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        <div id="map"></div>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>MCDRRMO</h2>
            </div>
            <p>Muntinlupa City Disaster Risk Reduction Management Office handles every Emergency problems in muntinlupacvd19lsi</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="/login"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> News</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>Resiliency Building, Barangay Tunasan<br>
                (Hall of Justice)<br>
              <span style="font-size:18px;"><a href="tel:09772405218">+63-977 240 5218/a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p> © Copyrights 2020 Tup Taguig Student with Help of IT Next Html Desgin</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->

<!-- Google key -->
<script async defer type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTKEdDB4WG-1lMiD6qmBOqYZ9fB2gLKrE&callback=initMap">
</script>

<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->
  <script>
        //Located in Muntinlupa.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 14.408133, lng: 121.041466},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat:  14.408133, lng:  121.041466},
             map: map,
             icon: image
           });
         }
      </script>


 <!-- Map for Evacuation Center -->
  
  <script>
    function initMap() {
		var mapOptions = {
			zoom: 12,
			minZoom: 6,
			maxZoom: 17,
			zoomControl:true,
			zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			},
			center: new google.maps.LatLng({{ $latitude }}, {{ $longitude }}),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			panControl:false,
			mapTypeControl:false,
			scaleControl:false,
			overviewMapControl:false,
			rotateControl:false
	  	 }


        var map = new google.maps.Map(document.getElementById('goomap'), mapOptions);
        var warning = new google.maps.MarkerImage("images/lastna.png", null, null, null, new google.maps.Size(40,52));
        var safe = new google.maps.MarkerImage("images/green.png", null, null, null, new google.maps.Size(40,52));
        var start = new google.maps.MarkerImage("images/start.png", null, null, null, new google.maps.Size(40,52));
        var full = new google.maps.MarkerImage("images/puno.png", null, null, null, new google.maps.Size(40,52));
        var places = @json($ibon);
        var pla = @json($gana);

        for(place in places) 
        {
          for(count in pla)
          {
            count = pla[count];
          
            place = places[place];
            var safe = new google.maps.MarkerImage(place.iconpic, null, null, null, new google.maps.Size(40,52));
            var number = place.capacity;
            var percentoget = 75;
            var percentAsDecimal = (percentoget / 100);
            var percent = percentAsDecimal * number;

            if(place.latitude && place.longitude)
            {
                if(place.brgyid == 1 && place.numberofper >= place.capacity ) 
                {

                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon: full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        //infowindow.setContent(generateContent(place))
                        //infowindow.open(map, marker);
                        //$(".modal-body").html(place.centername + ' <br>' +  place.centeraddress + '<br>' + place.capacity );
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                         $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#contact').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                         $("#fullHeightModalRight").modal('show');
                    }
                    })(marker, place));

                }
                else if(place.brgyid == 1 && place.numberofper >= percent)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon: warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        //infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                         $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');
                    }
                    })(marker, place));

                }
                 else if(place.brgyid == 1 && place.numberofper > 0 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place));
                 }
                 else if(place.brgyid == 1 && place.numberofper == 0 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place));
                 }
                else if(place.brgyid == 2 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 2 && place.numberofper >= percent)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 2 && place.numberofper  > 0 )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 2 && place.numberofper == 0 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place));
                 }
                //Barangay Number 3
                  else if(place.brgyid == 3 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 3 && place.numberofper >= percent)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 3 && place.numberofper  > 0 )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 3 && place.numberofper == 0 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                         $('#pwd').html(count.sakit);
                         $('#pregnant').html(count.preggy);
                         $('#senior').html(count.tanda);
                         $('#medcon').html(count.galing);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place));
                 }
                //Barangay Number 4
                else if(place.brgyid == 4 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 4 && place.numberofper >= percent )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 4 && place.numberofper  > 0 )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 4 && place.numberofper == 0 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place));
                 }
                //Barangay number 5
                else if(place.brgyid == 5 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                 else if(place.brgyid == 5 && place.numberofper >= percent )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                 else if(place.brgyid == 5 && place.numberofper  > 0 )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 5 && place.numberofper == 0)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                //Barangay Number 6
                 else if(place.brgyid == 6 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                 else if(place.brgyid == 6 && place.numberofper >= percent )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                 else if(place.brgyid == 6 && place.numberofper  > 0)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 6 && place.numberofper == 0)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                //Barangay Number 7
                 else if(place.brgyid == 7 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 7 && place.numberofper >= percent )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 7 && place.numberofper  > 0)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 7 && place.numberofper == 0)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                //Barangay number 8 
                else if(place.brgyid == 8 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 8 && place.numberofper >= percent )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 8 && place.numberofper  > 0 )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 8 && place.numberofper == 0)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                //Barangay number 9
                else if(place.brgyid == 9 && place.numberofper >= place.capacity)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:full,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 9 && place.numberofper >= percent )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:warning,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 9 && place.numberofper  > 0 )
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:start,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
                else if(place.brgyid == 9 && place.numberofper == 0)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:safe,
                    map: map,
                    title: place.centername
                    });

                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       // infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                        map.panTo(this.getPosition());
                        map.setZoom(15);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#capa').html(place.capacity);
                         $('#info').html(place.info);
                         $('#person').html(place.contactperson);
                         $('#phone').html(place.phonenumber);
                         $('#count').html(place.numberofper);
                         $('#huling').html(place.dateadds);
                         $('#lastime').html(place.timedi);
                        $("#fullHeightModalRight").modal('show');

                    }
                    })(marker, place)); 
                }
          
              }
              
            }
        }
           /* Adding Map Legends */
    
           var legend = document.getElementById('mapLegend');
           var ledge = document.getElementById('evacuationLegend');
    
           /* div= document.createElement('div');
            div.innerHTML = '<span><img src="images/pin.png">Putatan</span> <br><br> <span><img src="images/pin.png">Putatan</span>';
            legend.appendChild(div); */

            var div = document.createElement('div');
            div.innerHTML = '<span><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#center">Barangay Icon</button></span> <br> <br> <img src="images/firebtn.png" data-toggle="modal" data-target="#firecenter"> <br> <br> <img src="images/flood.jpg" data-toggle="modal" data-target="#floodcenter" <br> <br> <br> <img src="images/earth.png" data-toggle="modal" data-target="#earthcenter">';
            legend.appendChild(div);

            div= document.createElement('div');
            div.innerHTML = '<span><img src="images/lastna.png">Warning/ Almost Full</span>';
            ledge.appendChild(div);

            var div = document.createElement('div');
            div.innerHTML = '<span><img src="images/puno.png" > Capacity Reached</span>';
            ledge.appendChild(div);

            var div = document.createElement('div');
            div.innerHTML = '<span><img src="images/start.png">Okay to Go</span>';
            ledge.appendChild(div);

            var div = document.createElement('div');
            div.innerHTML = '<span><img src="images/redschool.png">No Evacuues</span>';
            ledge.appendChild(div);

            /* Push Legend to Right Top */
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(ledge);
            map.controls[google.maps.ControlPosition.RIGHT_TOP].push(legend);



        //Relief Map 

        var reliefoptions = {
		  	zoom: 12,
			  minZoom: 6,
		  	maxZoom: 17,
			  zoomControl:true,
			  zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			  },
			  center: new google.maps.LatLng({{ $latitude }}, {{ $longitude }}),
			  mapTypeId: google.maps.MapTypeId.ROADMAP,
			  scrollwheel: false,
			  panControl:false,
			  mapTypeControl:false,
			  scaleControl:false,
			  overviewMapControl:false,
			  rotateControl:false
	  	  }

   
        
            var reliefmap = new google.maps.Map(document.getElementById('reliefmap'), reliefoptions);
            var pin = new google.maps.MarkerImage("images/pins.png", null, null, null, new google.maps.Size(40,52));
            var all = new google.maps.MarkerImage("images/all.png", null, null, null, new google.maps.Size(40,52));
            var medicine = new google.maps.MarkerImage("images/medicine.png", null, null, null, new google.maps.Size(40,52));
            var yellowneeds = new google.maps.MarkerImage("images/yellowneeds.png", null, null, null, new google.maps.Size(40,52));
            var clothes = new google.maps.MarkerImage("images/clothes.png", null, null, null, new google.maps.Size(40,52));
            var places = @json($relimap);

        for(place in places)
        {
            place = places[place];
          
         
            if(place.latitude && place.longitude)
            {
                if(place.reliefid == 5 ) 
                {

                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon: pin,
                    map: reliefmap,
                    title: place.centername
                    });

                    marker.setMap(reliefmap);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                      reliefmap.panTo(this.getPosition());
                      reliefmap.setZoom(20);
                         $(".modal-title").text(place.centername);
                         $('#add').html(place.centeraddress);
                         $('#cate').html(place.reliefcategory);
                         $('#req').html(place.reliefrequest);
                         $('#con').html(place.persontocon + place.timefrom + place.timeto);
                         $('#num').html(place.phonenumber);
                         $('#last').html( place.lastdate)
                         $('#timeupda').html(place.timedi)
                         $("#modalright").modal('show');
                    }
                    })(marker, place));

                }
                else if(place.reliefid == 4)
                {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon: all,
                    map: reliefmap,
                    title: place.centername
                    });

                    marker.setMap(reliefmap);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        //infowindow.setContent(generateContent(place))
                       // infowindow.open(map, marker);
                       reliefmap.panTo(this.getPosition());
                      reliefmap.setZoom(17);
                        $(".modal-title").text(place.centername);
                        $('#add').html(place.centeraddress);
                         $('#cate').html(place.reliefcategory);
                         $('#req').html(place.reliefrequest);
                         $('#con').html(place.persontocon + place.timefrom + place.timeto);
                         $('#num').html(place.phonenumber);
                         $('#last').html( place.lastdate)
                         $('#timeupda').html(place.timedi)
                         $("#modalright").modal('show');
                    }
                    })(marker, place));

                }
                 else if(place.reliefid == 3 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:medicine,
                    map: reliefmap,
                    title: place.centername
                    });

                    marker.setMap(reliefmap);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                      reliefmap.panTo(this.getPosition());
                      reliefmap.setZoom(17);
                        $(".modal-title").text(place.centername);
                        $('#add').html(place.centeraddress);
                         $('#cate').html(place.reliefcategory);
                         $('#req').html(place.reliefrequest);
                         $('#con').html(place.persontocon + place.timefrom + place.timeto);
                         $('#num').html(place.phonenumber);
                         $('#last').html(place.lastdate)
                         $('#timeupda').html(place.timedi)
                         $("#modalright").modal('show');

                    }
                    })(marker, place));
                 }
                 else if(place.reliefid == 2 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon: clothes,
                    map: reliefmap,
                    title: place.centername
                    });

                    marker.setMap(reliefmap);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                      reliefmap.panTo(this.getPosition());
                      reliefmap.setZoom(17);
                        $(".modal-title").text(place.centername);
                        $('#add').html(place.centeraddress);
                         $('#cate').html(place.reliefcategory);
                         $('#req').html(place.reliefrequest);
                         $('#con').html(place.persontocon + place.timefrom + place.timeto);
                         $('#num').html(place.phonenumber);
                         $('#last').html( place.lastdate)
                         $('#timeupda').html(place.timedi)
                         $("#modalright").modal('show');

                    }
                    })(marker, place));
                 }
                 else if(place.reliefid == 1 )
                 {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon: yellowneeds,
                    map: reliefmap,
                    title: place.centername
                    });

                    marker.setMap(reliefmap);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                      reliefmap.panTo(this.getPosition());
                      reliefmap.setZoom(17);
                        $(".modal-title").text(place.centername);
                        $('#address').html(place.centeraddress);
                         $('#cate').html(place.reliefcategory);
                         $('#req').html(place.reliefrequest);
                         $('#con').html(place.persontocon + place.timefrom + place.timeto);
                         $('#num').html(place.phonenumber);
                         $('#last').html( place.lastdate)
                         $('#timeupda').html(place.timedi)
                         $("#modalright").modal('show');

                    }
                    })(marker, place));
                 }
               
            }
        }

        /* Adding Map Legends  */
        var legends = document.getElementById('reliefLegend'); 
    
          /*
          var div = document.createElement('div');
          div.innerHTML = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reliefcenter"> Guide</button>';
          legends.appendChild(div); */

            div= document.createElement('div');
            div.innerHTML = '<span><img src="images/yellowneeds.png">Needs Foods</span>';
            legends.appendChild(div);

            var div = document.createElement('div');
            div.innerHTML = '<span><img src="images/medicine.png" >Needs Medicine</span>';
            legends.appendChild(div);

            var div = document.createElement('div');
            div.innerHTML = '<span><img src="images/clothes.png">Needs Clothes</span>';
            legends.appendChild(div);

            var div = document.createElement('div');
            div.innerHTML = '<span><img src="images/all.png">Needs All Foods, Clothes, Medicine</span>';
            legends.appendChild(div);

            var div = document.createElement('div');
            div.innerHTML = '<span><img src="images/pins.png">Display No Request</span>';
            legends.appendChild(div);
    

           /* Push Legend to Right Top   */ 
           reliefmap.controls[google.maps.ControlPosition.RIGHT_TOP].push(legends); 
    
            //Flood Map 

        var floodoptions = {
		  	zoom: 12,
			  minZoom: 6,
		  	maxZoom: 17,
			  zoomControl:true,
			  zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			  },
			  center: new google.maps.LatLng({{ $latitude }}, {{ $longitude }}),
			  mapTypeId: google.maps.MapTypeId.ROADMAP,
			  scrollwheel: false,
			  panControl:false,
			  mapTypeControl:false,
			  scaleControl:false,
			  overviewMapControl:false,
			  rotateControl:false
	  	  }

   
        
        var floodmap = new google.maps.Map(document.getElementById('mapflood'), floodoptions);
        var flood = new google.maps.MarkerImage("images/flood.jpg", null, null, null, new google.maps.Size(20,30));

          var places = @json($flood);

        for(place in places)
        {
            place = places[place];
          
         
            if(place.latitude && place.longitude)
            {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:flood,
                    map: floodmap,
                    title: place.centername
                    });

                    marker.setMap(floodmap);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       floodmap.panTo(this.getPosition());
                       floodmap.setZoom(20);
                        $(".modal-title").text(place.centername);
                      

                    }
                    })(marker, place)); 
            }

        }

        var firemapoptions = {
		  	zoom: 12,
			  minZoom: 6,
		  	maxZoom: 17,
			  zoomControl:true,
			  zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			  },
			  center: new google.maps.LatLng({{ $latitude }}, {{ $longitude }}),
			  mapTypeId: google.maps.MapTypeId.ROADMAP,
			  scrollwheel: false,
			  panControl:false,
			  mapTypeControl:false,
			  scaleControl:false,
			  overviewMapControl:false,
			  rotateControl:false
	  	  }

        var firemap = new google.maps.Map(document.getElementById('firemap'), firemapoptions);
        var fire = new google.maps.MarkerImage("images/firebtn.png", null, null, null, new google.maps.Size(20,30));
        
         var places = @json($fire);

        for(place in places)
        {
            place = places[place];
          
         
            if(place.latitude && place.longitude)
            {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:fire,
                    map: firemap,
                    title: place.centername
                    });

                    marker.setMap(firemap);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                       firemap.panTo(this.getPosition());
                       firemap.setZoom(20);
                        $(".modal-title").text(place.centername);
                      

                    }
                    })(marker, place)); 
            }

        }

        
        var earthquakeoptions = {
		  	zoom: 12,
			  minZoom: 6,
		  	maxZoom: 17,
			  zoomControl:true,
			  zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			  },
			  center: new google.maps.LatLng({{ $latitude }}, {{ $longitude }}),
			  mapTypeId: google.maps.MapTypeId.ROADMAP,
			  scrollwheel: false,
			  panControl:false,
			  mapTypeControl:false,
			  scaleControl:false,
			  overviewMapControl:false,
			  rotateControl:false
	  	  }

        var earthquake = new google.maps.Map(document.getElementById('earthmap'), earthquakeoptions);
        var ear = new google.maps.MarkerImage("images/earth.png", null, null, null, new google.maps.Size(20,30));

        var places = @json($earthquake);

        for(place in places)
        {
            place = places[place];
          
         
            if(place.latitude && place.longitude)
            {
                    var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:ear,
                    map: earthquake,
                    title: place.centername
                    });

                    marker.setMap(earthquake);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                      earthquake.panTo(this.getPosition());
                      earthquake.setZoom(20);
                        $(".modal-title").text(place.centername);
                      

                    }
                    })(marker, place)); 
            }

        }


  }
    google.maps.event.addDomListener(window, 'load', initMap);

  </script>


</body>
</html>
