
@extends('main')

@section('extracss')
    <style>
        figure img {
            width: 270px;
            height: 270px;
            object-fit: cover;
        }

        #feed {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        figure {
            position: relative;
            margin-top: 30px;
        }

        figcaption {
            z-index: 40;
            position: absolute;
            width: 270px;
            height: 270px;
            top: 0;
            left: 0;
            text-align: center;
            background-color: var(--pic-color);
            transition: .5s ease;
            opacity: 0;
        }

        figcaption:hover {
            opacity: 1;
        }

        figcaption p {
            padding: 25px;
            font-family: "Source Sans Pro", "Arial", sans-serif;
            line-height: 1.5;
            font-size: 14px;
            color: var(--font-color);
        }

        figcaption img {
            width: 21px;
            height: 21px;
            height: auto;
            opacity: 1;

            background: url('images/mainmob.jpg') no-repeat;
            background-size: cover;
            transition: 1s opacity;
        }

        @media only screen and (max-width: 760px) {
            .banner-video-controls {
                display: none;
            }

            .mobno {
                display: none;
            }

            .video {
                display: none;
            }
        }

        @media only screen and (min-width: 760px) {
            .banner-video-controls {
                position: absolute;
                left: 50%;
                -webkit-transform: translate(-50%, 0);
                transform: translate(-50%, 0);
                bottom: 80px;
            }

            .banner-video-controls button {
                background: none;
                display: inline-block;
                text-align: center;
                border: none;
                padding: 10px 20px;
                color: white;
                text-shadow: 0 0 2px #222;
                opacity: 0.8;
                cursor: pointer;
                border-radius: 22px;
                -webkit-transition: all .3s ease;
                transition: all .3s ease;
            }

            .banner-video-controls button:hover, .hero .banner-video-controls button:focus {
                opacity: 1;
                outline: none;
                background: rgba(34, 34, 34, 0.9);
            }

            .hide-button {
                display: none !important;
            }
        }

        @media only screen and (max-width: 760px) {
            .mobcalc {
                position: absolute;
                z-index: 1000;
                width: 100%;
                height: 780px !important;
            }
        }

    </style>
@stop
@section('content')

    <video autoplay loop muted src="{{ asset('images/btmv.mp4') }}" id="banner-video" poster="{{ asset('/images/mainmob.jpg') }}"
           style="background-image: url('/images/slider1.jpg'); min-height: 950px;"></video>
    <header class="viewport-header" style="min-height:950px;">
   <div class="container-fluid">
    <div class="row mobcalc">
        <div class="col-md-6" style="justify-content: center;">
            <div id="app" class=" text-left" style="margin-left:10px;margin-right:auto;margin-top: 180px;">
                <estimate-cmp></estimate-cmp>
            </div>
        </div>
        <div class="col-md-6 mobno">
            <div style="margin-top: 400px;text-align:center;">
                <div style="color: #fff;font-size:36px;letter-spacing: -.7px;font-weight: 700;margin-top: 20px;
                  margin-bottom: 10px;line-height: 1.1;">Great choice for your next Move
                </div>
                <div style="">
                    <div style="font-size:16px;">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    &nbsp;
                    <span style="font-size:20px; color:#fff;">Rated 4.9/5.0 based on 1150 reviews</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    </header>
    <!-- <section class="section" style="background-color:#2f2f2f;">
       <div class="container">
          <div class="card__blog radius shadowDepth1" style="background-color:#fff;">
             <div style="padding: 20px;" class="text-center">
                <div style="color:#ff515e; font-size: 30px;"><img src="/images/who.png" height="40px">&nbsp;  How we respond to COVID-19</div><br>
                <p>In the wake of the COVID-19 virus, our highest priority is to do our part to help ensure the health and safety of our employees and customers while meeting our service commitments. We make sure our equipment clean, trucks are sanitized after each move. We make sure our workers are healthy.</p>
                <p style="color:#ff515e; font-size: 18px;">We are open and operate at usual times. Request crew with additional protection if needed.</p>
             </div>
          </div>
       </div>
    </section> -->
    <section class="section" style="background-color:#2f2f2f; padding-bottom:277px; position:static;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-right margintop100">
                    <img src="{{ asset('images/ukraine.jpg') }}" width="150px" alt="ukraine">
                </div>
                <div class="col-md-6">
                    <h1 class="section-heading" style=" color:#ffffff; text-align: center !important;">Born to Move
                        Moving Company</h1>
                    <p class="section-subheading" style=" color:#ffffff;"><span
                            style="color:#ff515e;font-size:20px;font-weight:500;">#1</span> Rated Boston Moving Company
                        for your next move!</p>
                </div>
                <div class="col-md-3 text-left hide-on-mob">
                    <img src="{{ asset('images/ukraine.jpg') }}" width="150px" alt="ukraine">
                </div>
            </div>
        </div>
    </section>
    <section id="intro" class="section" style="background-color:#f7f7f7;padding-top:0px; padding-bottom:35px; ">
        <div class="container">
            <div class="row">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1496397010657">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="parent" onclick="location.href='/local-moving';">
                                <div class="child lazy"
                                     style="background-image: url(/images/local2.jpg); background-position:center;">
                                    <a href="{{ url('local-moving') }}"><h2 style="color: #fff;margin-top: -20px;">Local Moving</h2>
                                        <p style="font-size:14px; font-height:16px; padding:10px 32px;">Born to Move
                                            Movers is a perfect soultion for your move<br/> in Boston and surrounding
                                            area move.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="parent" onclick="location.href='/interstate-moving';">
                                <div class="child lazy"
                                     style="background-image: url(/images/longopt.jpg); background-position:center;">
                                    <a href="{{ url('interstate-moving') }}"><h2 style="color: #fff;margin-top: -20px;">Interstate
                                            Moving</h2>
                                        <p style="font-size:16px; padding:0 32px">Moving accross United States with Fuly
                                            Licensed<br> and Insured Moving Company.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="parent" onclick="location.href='/packing-solution';">
                                <div class="child lazy"
                                     style="background-image: url(/images/packing2.jpg); background-position:center;">
                                    <a href="{{ url('packing-solution') }}"><h2 style="color: #fff;margin-top: -20px;">Packing</h2>
                                        <p style="font-size:16px;  padding:0 40px">Moving Packing Solutions. Born to
                                            Move Moving Company provides all kind of boxes and carefully pack your
                                            stuff.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="parent" onclick="location.href='/moving-and-storage';">
                                <div class="child lazy"
                                     style="background-image: url(/images/storageopt.jpg); background-position:center;">
                                    <a href="{{ url('moving-and-storage') }}"><h2 style="color: #fff;margin-top: -20px;">Moving &
                                            Storage</h2>
                                        <p style="font-size:16px; padding:0 40px">All types of storages for your move
                                            with Born to Move Moving Company. Short and Long terms available.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="parent" onclick="location.href='/boston-new-york-moving-prices';">
                                <div class="child lazy"
                                     style="background-image: url(/images/boston-newyork.jpg); background-position:center;">
                                    <a href="{{ asset('boston-new-york-moving-prices') }}"><h2 style="color: #fff;margin-top: -20px;">
                                            Boston ⇄ New York</h2>
                                        <p style="font-size:16px; padding:0 40px">One and two days delivery to NYC
                                            avilable with professional and experienced Born to Move Moving Company.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-8">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="kd-calltoaction icon_browser " style="border: 2px solid #ff515e">
                            <div class="container">
                                <div class="cta-icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                                <div class="cta-text">
                                    <h3>Born to Move Boston Movers</h3>
                                    <p>Our Moving Company is fully licensed and insured!</p>
                                </div>
                                <div class="cta-btncontainer"><a href="{{ asset('get-a-quote') }}" title=""
                                                                 class="tt_button    zoomIn" data-animation-delay="200">Get
                                        a Quote</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="a-better-way-to-move" class="section" style="">
        <div class="container ">
            <div class="row"></div>
            <div class="row">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-5 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1496410679383">
                            <div class="wpb_wrapper">

                                <div class="kd_counter icon-left large-counter  ">
                                    <div class="kd_counter_icon">
                                        <div class="kd-counter-icon"><img src="{{ asset('images/calendar.png') }}" width="70px"
                                                                          height="auto" alt="days of work"></div>
                                    </div>
                                    <div class="kd_counter_content">
                                        <div class="kd_counter_number"><span
                                                class="kd_number_string kd-counterelem-5b82b17858fe5"
                                                style="color: #2f2f2f;">2000</span> <span class="kd_counter_units">Days of Work</span>
                                        </div>
                                        <div class="kd_counter_text"></div>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 25px"><span
                                        class="vc_empty_space_inner"></span></div>

                                <div class="kd_counter icon-left large-counter  ">
                                    <div class="kd_counter_icon">
                                        <div class="kd-counter-icon"><img src="{{ asset('images/rating.png') }}" width="70px"
                                                                          height="auto" alt=""></div>
                                    </div>
                                    <div class="kd_counter_content">
                                        <div class="kd_counter_number"><span
                                                class="kd_number_string kd-counterelem-5b82b178c6e14"
                                                style="color: #2f2f2f;">4000</span> <span class="kd_counter_units">Happy Clients</span>
                                        </div>
                                        <div class="kd_counter_text"></div>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 25px"><span
                                        class="vc_empty_space_inner"></span></div>

                                <div class="kd_counter icon-left large-counter  ">
                                    <div class="kd_counter_icon">
                                        <div class="kd-counter-icon"><img src="{{ asset('images/boxes.png') }}" width="70px"
                                                                          height="auto" alt=""></div>
                                    </div>
                                    <div class="kd_counter_content">
                                        <div class="kd_counter_number"><span
                                                class="kd_number_string kd-counterelem-5b82b178c6f0d"
                                                style="color: #2f2f2f;">3700</span> <span class="kd_counter_units">Boxes Delivered</span>
                                        </div>
                                        <div class="kd_counter_text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-1">
                        <div class="vc_column-inner vc_custom_1496409084335">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <h2 style="text-align: left"
                                    class="vc_custom_heading section-heading vc_custom_1498593506360">A better way<br/>
                                    to move</h2>
                                <p style="font-weight:600;font-size: 16px;line-height: 1.6;text-align: left"
                                   class="vc_custom_heading vc_custom_1498593612634">Ensuring that we deliver the best
                                    services to our clients is crucial for us. Let us help you prepare for a smooth and
                                    successful move.</p>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1496411087220">
                                    <div
                                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-12 vc_col-xs-12">
                                        <div class="vc_column-inner vc_custom_1499529916598">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li>Labor &amp; Equipment</li>
                                                            <li>Floor Protection</li>
                                                            <li>Wrapped Furniture</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-12 vc_col-xs-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li>Tolls</li>
                                                            <li>Taxes</li>
                                                            <li>No Additional Fees</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-12 vc_col-xs-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li>Fuel Charge</li>
                                                            <li>Safe Delivery</li>
                                                            <li>Guaranteed Price</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('about-us') }}" target="_self" title=""
                                   class="tt_button tt_secondary_button btn_secondary_color pull-left  zoomIn "
                                   data-animation-delay=200><span class="prim_text">Read more</span></a>
                                <a href="{{ url('get-a-quote') }}" target="_self" title="" class="tt_button   pull-left  zoomIn "
                                   data-animation-delay=200><span class="prim_text">Contact us</span><span
                                        class="fa fa-plus iconita"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-services" class="section parallax" style="background-image:url(/images/middle.jpg);  background-repeat: no-repeat;
  background-attachment: local;
  background-position: center;">
        <div class="darkend"></div>
        <div class="container ">
            <div class="row">
                <h2 class="section-heading" style=" color:#fff;">Born to Move Special Services</h2>
                <p class="section-subheading" style=" color:#fff;">Moving can be complicated, but with our dedicated
                    moving team and additional services we can solve any problem.</p>
            </div>
            <div class="row">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="text-center   fadeInUp " style=" padding-top: 10px;cursor: pointer;"
                                     onclick="location.href='/piano-moving';">
                                    <div class="ib-wrapper">
                                        <img src="/images/icons/piano.png" class="lazyload" alt="piano Boston Moving"
                                             style="width: 48px; color: #ff515e; margin-bottom: 5px;">
                                        <h3 class="service-heading" style="color: #ffffff;">Piano Moving</h3>
                                        <p style="color: #ffffff;">Our company is always ready to help you with Piano
                                            Moving.</p>
                                        <p class="ib-link"><a href="{{ url('special-services') }}" class="woop" target="_self"
                                                              title="">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="text-center   fadeInUp " style="padding-top: 10px; cursor: pointer;"
                                     onclick="location.href='/special-services';" data-animation-delay=200>
                                    <div class="ib-wrapper">
                                        <img src="{{ asset('images/icons/meter.png') }}" class="lazyload" alt="Boston Moving Permits"
                                             style="width: 48px; color: #ff515e; margin-bottom: 5px;">
                                        <h3 class="service-heading" style="color: #ffffff;">Parking Permits</h3>
                                        <p style="color: #ffffff;">We strictly recommend getting moving parking permits
                                            in Boston.</p>
                                        <p class="ib-link "><a href="{{ url('special-services') }}" target="_self"
                                                               title="" class="woop">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="text-center   fadeInUp " style="padding-top: 10px; cursor: pointer;"
                                     onclick="location.href='/special-services';" data-animation-delay=400>
                                    <div class="ib-wrapper">
                                        <img src="{{ asset('images/icons/hoisting.png') }}" class="lazyload"
                                             alt="Born to Move hoisting"
                                             style="width: 48px; color: #ff515e; margin-bottom: 5px;">
                                        <h3 class="service-heading" style="color: #ffffff;">Hoisting Services</h3>
                                        <p style="color: #ffffff;">Hand-hoisting should be attempted by a professional
                                            movers.</p>
                                        <p class="ib-link "><a href="{{ url('special-services') }}" target="_self" title=""
                                                               class="woop">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="text-center   fadeInUp " style="padding-top: 10px; cursor: pointer;"
                                     onclick="location.href='/commercial-moving';" data-animation-delay=600>
                                    <div class="ib-wrapper">
                                        <img src="{{ asset('images/icons/commercial.png') }}" class="lazyload"
                                             alt="Boston Commercial Moving"
                                             style="width: 48px; color: #ff515e; margin-bottom: 5px;">
                                        <h3 class="service-heading" style="color: #ffffff;">Commercial Moving</h3>
                                        <p style="color: #ffffff;">Moving Offices can be really difficult, but not with
                                            our team.</p>
                                        <p class="ib-link "><a href="{{ url('special-services') }}" target="_self" title=""
                                                               class="woop">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials/_testipart')
    <section class="section" style="background-color:#f7f7f7;">
        <div class="container ">
            <div class="prices-header">Hourly Rates</div>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('prices') }}" class="prices-box">
                        <div class="prices-text">2 movers & a truck</div>
                        <div class="prices-amount">from <span>$120</span> /hr</div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('prices') }}" class="prices-box">
                        <div class="prices-text">3 movers & a truck</div>
                        <div class="prices-amount">from <span>$170</span> /hr</div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('prices') }}" class="prices-box">
                        <div class="prices-text">4 movers & a truck</div>
                        <div class="prices-amount">from <span>$220</span> /hr</div>
                    </a>
                </div>
                {{-- <div class="col-md-3">
                   <div class="prices-box text-center">
                      <div>2 movers & a truck</div>
                      <div>from <span></span> /hr</div>
                   </div>
                </div> --}}
            </div>
            <div class="prices-header">Popular Long Distance Moving Destinations</div>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('boston-new-york-moving-prices') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ New York</div>
                        <div class="prices-amount">from <span>$1800</span></div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('boston-chicago-moving') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ Chicago</div>
                        <div class="prices-amount">from <span>$3500</span></div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('boston-to-philadelphia-moving') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ Philadelphia</div>
                        <div class="prices-amount">from <span>$2200</span></div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('boston-losangeles-moving') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ Los Angeles</div>
                        <div class="prices-amount">from <span>$10000</span></div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('boston-miami-moving') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ Miami</div>
                        <div class="prices-amount">from <span>$5500</span></div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('boston-to-washington-dc-moving') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ Washington, DC</div>
                        <div class="prices-amount">from <span>$3500</span></div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('boston-north-carolina-moving') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ N Carolina</div>
                        <div class="prices-amount">from <span>$4500</span></div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('boston-nashville-moving') }}" class="prices-box">
                        <div class="prices-text">Boston ⇄ Nashville</div>
                        <div class="prices-amount">from <span>$4500</span></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container ">
            <div class="border-box">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-md-2">
                        <img src="{{ asset('images/storageopt.jpg') }}" width="100%" alt="Born to Move Moving Company">
                    </div>
                    <div class="col-md-10">
                        Born to Move Moving Company is a great solition for any Moving needs you may have.<br/>
                        We are Fully Licensed Moving Company and provide with Local and Long Distance Moving Services,
                        Moving Packing Service, Packing Supplies, Storage, and more.
                    </div>
                </div>
            </div>
            <div class="border-box">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-md-10">
                        Our Moving crews with years of expierince do their job perfectly and on time.<br/>
                        We are fully Insured and can provide COI upon request. Born to Move Moving Company's Customer
                        Service is always ready to answer any of your questions.
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('images/longopt.jpg') }}" width="100%" alt="Born to Move Moving Company">
                    </div>
                </div>
            </div>
            <div class="border-box">
                <div class="row" style="display:flex;align-items:center;">
                    <div class="col-md-2">
                        <img src="{{ asset('images/local2.jpg') }}" width="100%" alt="Born to Move Moving Company">
                    </div>
                    <div class="col-md-10">
                        We have been one of the most most efficient moving companies in Boston Metro area since 2015 and
                        established good relations with thousand of customers.
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="call-to-action" class="section  " style="
   padding-top:0px;    padding-bottom:0px; ">
        <div class="container fullwidth">
            <div class="row"></div>
            <div class="row">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="kd-calltoaction no_icon " style="background-color: #ff515e;">
                                    <div class="container">
                                        <div class="cta-text">
                                            <p style="color: #ffffff;font-size:22px;font-weight:600;">REQUEST A QUICK
                                                QUOTE!</p>
                                            <p style="color: #ffffff;">Let us help you prepare for a smooth and
                                                successful move.</p>
                                        </div>
                                        <div class="cta-btncontainer"><a href="/get-a-quote" title=""
                                                                         class="tt_button  btn_secondary_color  zoomIn"
                                                                         data-animation-delay="200">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" itemscope itemtype="https://schema.org/FAQPage">
                        @include('blocks.faq')

                    </div>
                </div>
            </div>
            <div style="float:right;margin-top:15px;">
                <a href="{{ url('faq') }}">View all >></a>
            </div>
        </div>
    </section>
    <section style="background-color:#f7f7f7;">
        <div class="container">
            <h2 style="font-size: 24px;line-height: 1;text-align: center"
                class="vc_custom_heading section-heading vc_custom_1498398971266">Born to Move Massachusets Serving
                Areas</h2>
            <br>
            <div class="row text-center content-justify-center">
                <div class="col-md-8 text-center col-md-offset-2"
                     style="font-size: 20px; line-height: 34px; color: #111;">
                    <a href="{{ url('boston-movers') }}">Boston</a> |
                    @foreach($pages as $page)
                        <a href="{{url($page->categoryId->slug)}}">{{$page->categoryId->name}}</a> |
                    @endforeach
                    <a href="{{ url('waltham-moving') }}">Waltham</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3 style="font-size: 24px;line-height: 1;text-align: center"
                class="vc_custom_heading section-heading vc_custom_1498398971266">Latest Posts About Moving</h3>
            <br>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4" style="padding-bottom: 20px">
                        <div class="card__blog radius shadowDepth1">
                            <div class="card__image border-tlr-radius">
                                <div style="background:url({{ asset('storage/'.$post->image) }})" alt="image"
                                     class="image border-tlr-radius"></div>
                            </div>
                            <div class="card__content card__padding">
                                <article class="card__article">
                                    <div
                                        style="height: 75px; text-align: left; font-size: 25px; line-height: 25px; margin-bottom: 25px;margin-top: 25px;">
                                        <a href="{{ route('post', $post->slug) }}">
                                            {{\Illuminate\Support\Str::limit($post->title, 57) }}</a></div>
                                    <div class="description">
                                        {{\Illuminate\Support\Str::limit($post->excerpt, 130) }}
                                    </div>
                                </article>
                            </div>

                            <div class="card__action">

                                <div class="card__author" style="padding-bottom:10px;">
                                    <a class="tt_button  zoomIn" href="{{ route('post', $post->slug) }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
@section('video-play')
    <script>
        jQuery(window).scroll(function () {
            var scroll = jQuery(window).scrollTop();

            //>=, not <=
            if (scroll >= 50) {
                //clearHeader, not clearheader - caps H
                jQuery(".bottom-box").addClass("displayes");
            }
            if (scroll < 50) {
                jQuery(".bottom-box").removeClass("displayes");
            }
        })
    </script>
    <script>
        var vid = document.getElementById("banner-video");

        function playVid() {
            vid.play();
            jQuery("#play-button").addClass("hide-button");
            jQuery("#pause-button").removeClass("hide-button");
        }

        function pauseVid() {
            vid.pause();
            jQuery("#play-button").removeClass("hide-button");
            jQuery("#pause-button").addClass("hide-button");
        }
    </script>
@stop
