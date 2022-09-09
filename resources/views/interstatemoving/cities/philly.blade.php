
@extends('mainl')

@section('content')
<div id="wrapper" class="">
    <header id="header" class="blog-header ">

    </header>
    <section id="single-page" class="section corporate-moving" style="">
        <div class="row single-page-heading ">
            <div class="header-overlay  darkend" style="background-image:url('/images/pages/cities/philly.jpg') "></div>
            <div class="container">
                       <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Home page" href="https://goborntomove.com/" class="home"><span property="name">Home</span></a>
                    <meta property="position" content="1">
                </span>
                <span class="fa fa-angle-right"></span>
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Philadelphia Moving Company" href="https://goborntomove.com/movers-philadelphia" class="post post-page current-item">
                        <span property="name">Philadelphia Moving Company</span>
                    </a>
                    <meta property="position" content="2">
                </span>
            </div>
        </div>
                <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{ $seo->h1 }}</h1>
            </div>
        </div>
        <div class="container ">
            <div class="row single-page-content">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-9 vc_col-lg-9 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner vc_custom_1499437250775">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1498318207858">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                           Experienced and reliable <strong>Philadelphia Movers</strong> are ready to move you across United States.
                                                           Born to Move Philadelphia Moving Company is <strong>Fully licensed and Insured</strong> to provide long distance and local
                                                           moving services.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('partials._icons')
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1498396190746">
                                    <div>
                                        <br>
                                        <div class="vc_column-inner vc_custom_1499437272363">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Aditionally our <strong>Born to Move Moving Company</strong> provides <a href="/packing-solution">Packing</a>
                                                            and <a href="/moving-and-storage">Storage</a> services. Contact us to get a Free Moving Quote.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>Our Rates include all other charges:</p>
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
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1499437231476" id="contactlan">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="kd-calltoaction no_icon " style="background-color: #f7f7f7;">
                                                    <div class="container">
                                                        <div class="cta-text">
                                                            <h3>Philadelphia Moving Company</h3>
                                                            <p>Have Questions? Contact us to get your Answers.</p>
                                                        </div>
                                                        <div class="cta-btncontainer"> <a href="/get-a-quote" title="" class="tt_button  " data-animation-delay="200">Contact us</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_wp_custommenu wpb_content_element" id="interstatehide">
                                    <div class="widget widget_nav_menu">
                                        <div class="widgettitle">Interstate Moving</div>
                                        <div class="menu-services-container">
                                            <ul id="menu-services" class="menu">
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739
                                                    {{ Request::is('/philadelphia-to-new-york-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/philadelphia-to-new-york-moving">Philadelphia to New York Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2740
                                                    {{ Request::is('/philadelphia-to-atlanta-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/philadelphia-to-atlanta-moving">Philadelphia to Atlanta Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2741
                                                    {{ Request::is('/philadelphia-to-washington-dc-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/philadelphia-to-washington-dc-moving">Philadelphia to Washington DC Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482
                                                    {{ Request::is('/philadelphia-to-nashville-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/philadelphia-to-nashville-moving">Philadelphia to Nashville Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482
                                                    {{ Request::is('/philadelphia-to-miami-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/philadelphia-to-miami-moving">Philadelphia to Miami Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482
                                                    {{ Request::is('/philadelphia-to-chicago-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/philadelphia-to-chicago-moving">Philadelphia to Chicago Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('/philadelphia-to-baltimore-moving') ?"active" : ""}}">
                                                    <a href="/philadelphia-to-baltimore-moving">Philadelphia to Baltimore Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('/philadelphia-to-kansas-city-moving') ?"active" : ""}}">
                                                    <a href="/philadelphia-to-kansas-city-moving">Philadelphia to Kansas City Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('/philadelphia-to-san-francisco-moving') ?"active" : ""}}">
                                                    <a href="/philadelphia-to-san-francisco-moving">Philadelphia to San Francisco Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('/philadelphia-to-los-angeles-moving') ?"active" : ""}}">
                                                    <a href="/philadelphia-to-los-angeles-moving">Philadelphia to Los Angeles Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('/philadelphia-to-seattle-moving') ?"active" : ""}}">
                                                    <a href="/philadelphia-to-seattle-moving">Philadelphia to Seattle Movers</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_wp_text wpb_content_element">
                                    <div class="widget widget_text">
                                        <div class="widgettitle">Get a quote</div>
                                        <div class="textwidget">
                                            <p>To Get a Free Online Quote you have to go through few simple steps. For more accurate estimate contact us.</p>
                                            <p><a href="/get-a-quote" class="tt_button pull-left tt_secondary_button mt2">Get a Quote</a></p>
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
    @include('partials/_testipart')
</div>
@stop
