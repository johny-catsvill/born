
@extends('mainl')

@section('content')
<div id="wrapper" class="">
    <header id="header" class="blog-header ">

    </header>
    <section id="single-page" class="section corporate-moving" style="">
        <div class="row single-page-heading ">
            <div class="header-overlay  darkend" style="background-image:url('/images/pages/cities/dc.jpg') "></div>
            <div class="container">
                        <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Home page" href="https://goborntomove.com/" class="home"><span property="name">Home</span></a>
                            <meta property="position" content="1">
                        </span>
                        <span class="fa fa-angle-right"></span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Washington DC Moving Company" href="https://goborntomove.com/movers-washington-dc" class="post post-page current-item">
                                <span property="name">Washington DC Moving Company</span>
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
                                                           Experienced and reliable <strong>Washington DC Movers</strong> are ready to move you across United States.
                                                           Born to Move Washington DC Moving Company is <strong>Fully licensed and Insured</strong> to provide long distance and local
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
                                                            <h3>Washington DC Moving Company</h3>
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
                                                    {{ Request::is('washington-dc-to-new-york-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/washington-dc-to-new-york-moving">Washington DC to New York Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2740
                                                    {{ Request::is('washington-dc-to-philadelphia-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/washington-dc-to-philadelphia-moving">Washington DC to Philadelphia Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2741
                                                    {{ Request::is('washington-dc-to-atlanta-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/washington-dc-to-atlanta-moving">Washington DC to Atlanta Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482
                                                    {{ Request::is('washington-dc-to-nashville-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/washington-dc-to-nashville-moving">Washington DC to Nashville Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482
                                                    {{ Request::is('washington-dc-to-miami-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/washington-dc-to-miami-moving">Washington DC to Miami Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482
                                                    {{ Request::is('washington-dc-to-chicago-moving') ?"current-menu-item" : ""}} one-page-link">
                                                    <a href="/washington-dc-to-chicago-moving">Washington DC to Chicago Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('washington-dc-to-baltimore-moving') ?"active" : ""}}">
                                                    <a href="/washington-dc-to-baltimore-moving">Washington DC to Baltimore Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('washington-dc-to-kansas-city-moving') ?"active" : ""}}">
                                                    <a href="/washington-dc-to-kansas-city-moving">Washington DC to Kansas City Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('washington-dc-to-san-francisco-moving') ?"active" : ""}}">
                                                    <a href="/washington-dc-to-san-francisco-moving">Washington DC to San Francisco Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('washington-dc-to-los-angeles-moving') ?"active" : ""}}">
                                                    <a href="/washington-dc-to-los-angeles-moving">Washington DC to Los Angeles Movers</a>
                                                </li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link
                                                    {{ Request::is('washington-dc-to-seattle-moving') ?"active" : ""}}">
                                                    <a href="/washington-dc-to-seattle-moving">Washington DC to Seattle Movers</a>
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
