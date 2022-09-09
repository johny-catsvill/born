
@section('phone', "(351) 229-1170")
@section('address', "10 Strawberry Bank Rd APT 14, Nashua, NH 03062")
@section('addressschema')
<span itemprop="streetAddress">10 Strawberry Bank Rd APT 14</span>
  ,
  <span itemprop="addressLocality">Nashua</span>,
  <span itemprop="addressRegion">NH</span>
  <span itemprop="postalCode">03062</span> (Office)
</span>
@stop
@extends('mainl')
@section('extracss')

<style>
  #map {
    height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  }
</style>
<script>
  /**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 43.193852, lng: -71.572395 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 7,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
</script>
@stop
@section('content')
<div id="wrapper">
  <header id="header" class="blog-header">
  </header>
  <section id="single-page" class="section pricing" style="padding-bottom:0px; ">
    <div class="row single-page-heading header-new">
      <div class="header-overlay  darkend" style="background-image:url('/images/newhampshire.jpg')"></div>
      <div class="container">
          <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
              <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Born to Move" href="https://www.goborntomove.com" class="home"><span property="name">Home</span></a>
                  <meta property="position" content="1">
                </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><span property="item" typeof="WebPage" title="New Hampshire Moving" href="https://www.goborntomove.com/new-hampshire-moving" class="post post-page current-item"><span property="name">New Hampshire Moving</span></span>
                  <meta property="position" content="2">
                  </span>
              </div>
          </div>
          <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{$seo->h1}}</h1>
      </div>
    </div>
    <div class="header-action">
      <div class="container">
        <div class="row" style="margin-bottom: 15px;">
          <div class="div col-md-6 text-left">
            <h2>Need Movers in New Hampshire?</h2>
            <p>Our Moving Company is fully licensed & insured</p>
          </div>
          <div class="div col-md-6 ">
            <a href="/get-a-quote" title="" class="tt_button header-button" >Request Your Move Online</a>
          </div>
        </div>
      </div>
    </div>
    <div class="icons-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4" style="text-align: center;">
            <div class="row" style="margin-bottom: 20px;">
              <div class="col-md-4" style="margin-bottom: 10px;">
                <i class="fa fa-truck land-icons" aria-hidden="true"></i>
              </div>
              <div class="col-md-8 desc-text-left">
                <div class="icons-header">2 or more<br/>
                  <span>Movers & Truck<br/> with Equipment</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="text-align: center;">
            <div class="row" style="margin-bottom: 20px;">
              <div class="col-md-4" style="margin-bottom: 10px;">
              <i class="fa fa-calculator land-icons" aria-hidden="true"></i>
              </div>
              <div class="col-md-8 desc-text-left">
                <div class="icons-header">2 Minutes<br/>
                  <span>To Get<br/> a Free Estimate</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="text-align: center;">
            <div class="row" style="margin-bottom: 20px;">
              <div class="col-md-4" style="margin-bottom: 10px;">
                <i class="fa fa-archive land-icons" aria-hidden="true"></i>
              </div>
              <div class="col-md-8 desc-text-left">
                <div class="icons-header">3700<br/>
                  <span>Boxes <br/> Delivered</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row single-page-content">
        <div class="col-md-8">
          <p>
            Born to move moving company specializes in: <strong>Commercial moving, Local moving, Long distance moving and  packing services</strong> locally here in <strong>New Hampshire</strong>.
            If you were trying to find a Movers in New Hampshire and searching for  the guys who are able to
            handle this with dignity and respect. You have found the right place to be.Our moving company
            has all necessary licenses, insurances and we have all the good movers in
            NH who can help you relocate you Locally here in the state of New Hampshire or
            anywhere <strong>out of state</strong>. If you were looking to get an exact price and a
            good service we’re charging hourly rates for our local moves and flat price for our
            long-distance moves. Feel free to book a move online or give us a call <strong>617-903-2609</strong>
            to find out your exact price for your future move with our moving company.
          </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 text-center">
            <img src="/images/nhsquare.jpg" alt=" New Hampshire" style="border-radius:100%;" height="250px" width="250px">
        </div>
      </div>
      <br/>
      <br/>
      <div class="row">
        <div class="col-md-6">
            <div class="parent" onclick="location.href='/local-moving-new-hampshire';">
              <div class="child" style="background-image: url('/images/newhampshire.jpg')">
                <a href="/local-moving-new-hampshire">Local Moving<br/>
                  <br/>New Hampshire
                  <br>
                  <p style="font-size:15px; margin-top:10px;">view more</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
          <div class="parent" onclick="location.href='/long-distance-moving-new-hampshire';">
            <div class="child" style="background-image: url('/images/newhampshirelong.jpg')">
              <a href="/long-distance-moving-new-hampshire">Long Distance Moving<br/><br/>New Hampshire
                <br>
                <p style="font-size:16px; margin-top:10px;">view more</p>
              </a>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col-md-6">
          <div class="parent" onclick="location.href='/movers-packers-new-hampshire';">
            <div class="child" style="background-image: url('/images/connecticutpacking.jpg')">
              <a href="/movers-packers-new-hampshire">Movers and Packers
                <br>
                <p style="font-size:15px; margin-top:10px;">view more</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="parent" onclick="location.href='/commercial-moving-new-hampshire';">
              <div class="child" style="background-image: url('/images/connecticutcom.jpg')">
                <a href="/commercial-moving-new-hampshire">Commercial Moving<br/><br/>New Hampshire
                  <br>
                  <p style="font-size:16px; margin-top:10px;">view more</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="wpb_text_column wpb_content_element ">
            <h2>Why Born to Move?</h2>
            <div class="wpb_wrapper">
              <p>Our
                rates include all other charges:</p>
                <ul class="col-md-4">
                  <li>Labor & Equipment</li>
                  <li>Floor Protection</li>
                  <li>Wrapped Furniture</li>
                </ul>
                <ul class="col-md-4">
                  <li>Tolls</li>
                  <li>Taxes</li>
                  <li>No Additional Fees</li>
                </ul>
                <ul class="col-md-4">
                  <li>Fuel Charge</li>
                  <li>Safe Delivery</li>
                  <li>Guaranteed Price</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top:30px; padding-bottom:50px;">
        <div class="col-md-3">
          <div class="land-box">
            <div class="land-box-header">
              Delicate handling<br/> of your belongings
            </div>
            <div class="land-box-body wpb_text_column">
              Using our moving service in New Hampshire you get a smooth move:
              <br/>
              <br/>
              <ul style="text-align:left;">
                <li>Clean Moving Trucks</li>
                <li>Safe loading & unloading</li>
                <li>Efficient movers</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="land-box">
            <div class="land-box-header">
              Same-day<br/>Move
            </div>
            <div class="land-box-body wpb_text_column">
              Fast and well-coordinated work of professional movers in New Hampshire
              <br/>
              <br/>
              <ul style="text-align:left;">
                <li>Dissembly & reassembly</li>
                <li>Logistics to avoid traffic</li>
                <li>Competitive rates</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
        <div class="land-box">
            <div class="land-box-header">
              Hassle Free<br/> Moving
            </div>
            <div class="land-box-body wpb_text_column">
              We will handle all the details making your move in New Hampshire smooth
              <br/>
              <br/>
              <ul style="text-align:left;">
                <li>Years of Experience</li>
                <li>Certified and Insured</li>
                <li>Live GPS Tracking</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="land-box">
            <div class="land-box-header">
              Additional<br/> Services
            </div>
            <div class="land-box-body wpb_text_column">
              We also provide additional services to make your move even easier
              <br/>
              <br/>
              <ul style="text-align:left;">
                <li>Packing</li>
                <li>Storage</li>
                <li>Hoisting</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="wpb_wrapper">
          <div class="kd-calltoaction no_icon " style="background-color: #ff515e;">
            <div class="container">
                <div class="cta-text">
                  <p style="color: #ffffff;font-size:22px;font-weight:600;">REQUEST A QUICK QUOTE!</p>
                  <p style="color: #ffffff;">Let us help you prepare for a smooth and successful move.</p>
                </div>
                <div class="cta-btncontainer"> <a href="/get-a-quote" title="" class="tt_button  btn_secondary_color  zoomIn" data-animation-delay="200">Get a Quote</a></div>
            </div>
          </div>
      </div>
  </div>
</div>
<!-- <section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="border-text">
          <h2 style="text-align: left;">Headers</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="border-text">
          <h2 style="text-align: left;">Headers</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top:20px;">
      <div class="col-md-12">
        <div class="border-text">
          <h2 style="text-align: left;">Headers</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
  </div>
</section> -->
@include('partials/_testipart')

<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="" style="color:#111;background:#fff;">
                        <div class="business-info-header">
                            <h3>Born to Move New Hampshire</h3><address><span class="business-address-row"><i class="fa fa-map-marker"></i>
                              <span class="address-overflow">10 Strawberry Bank Rd APT 14, Nashua, NH 03062</span></span>
                              <span class="business-phone-row"><i class="fa fa-phone"></i><a href="tel:3512291170">(351) 229-1170</a></span>
                              <span class="business-email-row"><i class="fa fa-envelope"></i><a href="mailto:info@goborntomove.com">info@goborntomove.com</a></span></address></div>
                          <div>
                            <div>
                              <p>Main Office:<br/>
                              229 Watertown st. apt 2,<br/>
                              Watertown, MA 02472
                                </p>
                            </span></div>

                          </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div id="map"></div>
                      <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqUX8qzpVDzMxy_NDCP6wIYBHC3Kv7lHA&callback=initMap&v=weekly"
                        defer
                      ></script>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="wpb_wrapper">
          <div class="kd-calltoaction no_icon " style="background-color: #ff515e;">
            <div class="container">
                <div class="cta-text">
                  <p style="color: #ffffff;font-size:22px;font-weight:600;">REQUEST YOUR MOVE ONLINE</p>
                  <p style="color: #ffffff;">See your Quote in Two Easy Steps</p>
                </div>
                <div class="cta-btncontainer"> <a href="/get-a-quote" title="" class="tt_button  btn_secondary_color  zoomIn" data-animation-delay="200">Get a Quote</a></div>
            </div>
          </div>
      </div>
  </div>
</div>
<section>
  <div class="container">
    <div class="row">
      <h2>New Hampshire Serving Areas</h2>
      <h3 style="font-size:30px;">Cities We Serve:</h3>
      <div class="row text-center">
        <div class="col-md-4">
          <a href="" style="font-size:20px;font-weight:600;">Concord</a>
        </div>
        <div class="col-md-4">
          <a href="" style="font-size:20px;font-weight:600;">Manchester</a>
        </div>
        <div class="col-md-4">
          <a href="" style="font-size:20px;font-weight:600;">Nashua</a>
        </div>
      </div>
      <h3 style="font-size:30px;">Long-Distance Moving</h3>
          <div class="col-md-3">
          <strong style="font-size:26px;">From Concord to:</strong>
          <br/>
          <br/>
            @foreach($pagesconcord as $pageconcord)
            <p class="text-left" style="font-size:20px;font-weight:600; padding-left:15px;">
              <a href="/{{$pageconcord->destlink}}">{{$pageconcord->dest}}</a><br/>
              </p>
            @endforeach
          </div>
          <div class="col-md-3">
          <strong style="font-size:26px;">From Manchester to:</strong>
          <br/>
          <br/>
            @foreach($pagesmanchester as $pagemanchester)
            <p class="text-left" style="font-size:20px;font-weight:600; padding-left:15px;">
              <a href="/{{$pagemanchester->destlink}}">{{$pagemanchester->dest}}</a><br/>
              </p>
            @endforeach
          </div>
          <div class="col-md-3">
          <strong style="font-size:26px;">From Nashua to:</strong>
          <br/>
          <br/>
            @foreach($pagesnashua as $pagenashua)
            <p class="text-left" style="font-size:20px;font-weight:600; padding-left:15px;">
              <a href="/{{$pagenashua->destlink}}">{{$pagenashua->dest}}</a><br/>
              </p>
            @endforeach
          </div>
          <div class="col-md-3">
          <strong style="font-size:26px;">From NH to:</strong>
          <br/>
          <br/>
            @foreach($pagesnh as $pagenh)
            <p class="text-left" style="font-size:20px;font-weight:600; padding-left:15px;">
              <a href="/{{$pagenh->destlink}}">{{$pagenh->dest}}</a><br/>
              </p>
            @endforeach
          </div>
      </div>
  </div>
</section>
<section>
   <div class="container">
   <h3 style="font-size: 24px;line-height: 1;text-align: center" class="vc_custom_heading section-heading vc_custom_1498398971266">Latest Posts About Moving</h3>
      <br>
      <div class="row">
         @foreach ($posts as $post)
         <div class="col-md-4" style="padding-bottom: 20px">
            <div class="card__blog radius shadowDepth1">
               <div class="card__image border-tlr-radius">
                  <div style="background:url({{ asset('storage/'.$post->image) }})" alt="image" class="image border-tlr-radius"></div>
            </div>
               <div class="card__content card__padding">
                  <article class="card__article">
                  <div style="height: 75px; text-align: left; font-size: 25px; line-height: 25px; margin-bottom: 25px;margin-top: 25px;">
                  <a href="/blogs/{{$post->slug}}">
                  {{\Illuminate\Support\Str::limit($post->title, 57) }}</a></div>
                           <div class="description">
                     {{\Illuminate\Support\Str::limit($post->excerpt, 130) }}
                  </div>
               </article>
               </div>

               <div class="card__action">

                  <div class="card__author" style="padding-bottom:10px;">
                     <a class="tt_button  zoomIn" href="/blogs/{{$post->slug}}">Read more</a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
@stop
