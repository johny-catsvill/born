@section('title', "About us - Born to Move Moving Company")
@section('dscr', "")
@section('keywords', '')
@section('h1', "About us")

@extends('mainl')
@section('extracss')
<link rel="canonical" href="{{ route('about-us') }}" />
@stop
@section('content')
<div id="wrapper" class="">
    <header id="header" class="blog-header ">

    </header>
    <section id="single-page" class="section corporate-moving" style="">
        <div class="row single-page-heading ">
            <div class="header-overlay  darkend" style="background-image:url('/images/aboutus.jpg')"></div>
            <div class="container">
                        <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Home" href="https://www.goborntomove.com/" class="home"><span property="name">Home</span></a>
                <meta property="position" content="1">
              </span>
              <span class="fa fa-angle-right"></span>
              <span property="itemListElement" typeof="ListItem">
                  <span property="item" typeof="WebPage" title="Go to About us page." href="https://www.goborntomove.com/about-us/" class="post post-page">
                    <span property="name">About us</span>
                  </span>
                <meta property="position" content="2">
              </span>
            </div>
        </div>
                <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">About us</h1></div>
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
                                                        <p><strong>Born to Move LLC</strong> is a full-service moving company serving the Greater Boston Area. We are based in Newton MA and have been performing professional Moving Service since 2013 for All types of moving - Residential and Commercial, Interstate. We as well provide full packing and unpacking services along with Pod, rental truck or container loading & unloading.</p>
                                                        <p>We know that moving can be one of the most stressful times in your life. We want to make sure that you will get stress-free experience with us and we will help you with all your needs for moving.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('partials._icons')
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1498396190746">
                                    <div>
                                        <div class="vc_column-inner vc_custom_1499437272363">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: left" class="vc_custom_heading vc_custom_1498388172144">Gallery</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                      <div class="row">
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="{{ asset('images/gallery/1.jpg') }}" class="img-responsive lazyload">
                                                        </div>
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/2.jpg" class="img-responsive lazyload">
                                                        </div>
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/3.jpg" class="img-responsive lazyload">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/4.jpg" class="img-responsive lazyload">
                                                        </div>
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/5.jpg" class="img-responsive lazyload">
                                                        </div>
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/6.jpg" class="img-responsive lazyload">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/7.jpg" class="img-responsive lazyload">
                                                        </div>
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/8.jpg" class="img-responsive lazyload">
                                                        </div>
                                                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                            <img src="/images/gallery/9.jpg" class="img-responsive lazyload">
                                                        </div>
                                                      </div>
                                                        <div class="row">
                                                          <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                              <img src="/images/gallery/10.jpg" class="img-responsive lazyload">
                                                          </div>
                                                          <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                              <img src="/images/gallery/11.jpg" class="img-responsive lazyload">
                                                          </div>
                                                          <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                                                              <img src="/images/gallery/12.jpg" class="img-responsive lazyload">
                                                          </div>
                                                      </div>
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
                                                <div class="kd-calltoaction icon_browser " style="border: 2px solid #ff515e">
                                                    <div class="container">
                                                        <div class="cta-icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                                                        <div class="cta-text">
                                                            <h3>Born to Move Movers</h3>
                                                            <p>Our Moving Company is fully licensed and insured!</p>
                                                        </div>
                                                        <div class="cta-btncontainer"> <a href="{{ url('get-a-quote') }}"  title="" class="tt_button    zoomIn" data-animation-delay="200">Get a Quote</a></div>
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
                                <div class="vc_wp_custommenu wpb_content_element">
                                    <div class="widget widget_nav_menu">
                                        <div class="widgettitle">Local Moving</div>
                                        <div class="menu-services-container">
                                            <ul id="menu-services" class="menu">
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link"><a href="/local-moving">Local Moving</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2740 one-page-link"><a href="/interstate-moving">Interstate Moving</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2741 one-page-link"><a href="/packing-solution">Packing</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link"><a href="/moving-and-storage">Moving & Storage</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page page-item-2482 one-page-link"><a href="/special-services">Special Services</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_wp_text wpb_content_element">
                                    <div class="widget widget_text">
                                        <div class="widgettitle">Get a quote</div>
                                        <div class="textwidget">
                                            <p>To Get a Free Online Quote you have to go through few simple steps. For more accurate estimate contact us.</p>
                                            <p><a class="tt_button pull-left tt_secondary_button mt2" href="{{ url('get-a-quote') }}">Get Quote</a></p>
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
