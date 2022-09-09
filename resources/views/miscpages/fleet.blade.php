
@extends('mainl')

@section('extracss')
<style>
    .truck-image {
        max-height: 170px !important;
        width:auto !important;
        padding: 20px;
    }
    .truck {
        padding-top:10px !important;
    }
    .truck ul {
        margin-bottom:0px !important;
    }
    .truck li {
        margin-bottom:0px !important;
    }
</style>
@stop

@section('content')
<div id="wrapper" class="">
    <header id="header" class="blog-header ">

    </header>
    <section id="single-page" class="section corporate-moving" style="">
        <div class="row single-page-heading ">
            <div class="header-overlay parallax-overlay darkend" style="height: 350px !important;background-image:url('/images/slider4.jpg')"></div>
            <div class="container">
                <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Etalon Moving." href="https://www.goborntomove.com/" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><span property="item" typeof="WebPage" title="Go to Services." class="post post-page"><span property="name">Our Fleet</span></span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
                <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{ $seo->h1 }}</h1>

                <div >
                <a href="/get-a-quote" style="margin-left:15px; margin-top:10px;" class="tt_button  " data-animation-delay="200">Get a Quote</a>
                </div>
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
                                                         Our Trcuks will serve you well in your upcoming moving needs. Fully inspected, clean and in great condition trucks of variouse sizes will guaranty you delivery to any state or local moving with Born to Move Moving Company.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('partials._icons')
                                <div id="mobimg">
                                    <img data-src="/images/local3.jpg" class="lazyload" alt="Movers from boston to Miami" width="100%" height="auto" />
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1498396190746">
                                    <div>
                                        <div class="vc_column-inner vc_custom_1499437272363">
                                            <div class="wpb_wrapper">
                                                <br>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <div class="row" style="background-color: #f2f2f2; margin-bottom: 20px;">
                                                            <div class="col-md-5 text-center">
                                                                <img src="/images/trucks/truck1.png" class="truck-image"/>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div  class="truck">
                                                                    <strong>Born to Move Truck - 16ft</strong>
                                                                    <ul>
                                                                        <li>Fits Studio/One Bedroom</li>
                                                                        <li>Great for Quick Deliveries</li>
                                                                        <li>Always Clean</li>
                                                                        <li>Fully Equiped</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="background-color: #f2f2f2; margin-bottom: 20px;">
                                                            <div class="col-md-5 text-center">
                                                                <img src="/images/trucks/truck2.png" class="truck-image"/>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div  class="truck">
                                                                    <strong>Born to Move Truck - 20ft</strong>
                                                                    <ul>
                                                                        <li>Fits Studio/One Bedroom</li>
                                                                        <li>Great for Quick Deliveries</li>
                                                                        <li>Always Clean</li>
                                                                        <li>Fully Equiped</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="background-color: #f2f2f2; margin-bottom: 20px;" >
                                                            <div class="col-md-5 text-center">
                                                                <img src="/images/trucks/truck3.png" class="truck-image"/>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div  class="truck">
                                                                    <strong>Born to Move Truck - 24ft</strong>
                                                                    <ul>
                                                                        <li>Fits Studio/One Bedroom</li>
                                                                        <li>Great for Quick Deliveries</li>
                                                                        <li>Always Clean</li>
                                                                        <li>Fully Equiped</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>Our hourly rates include all other charges:</p>
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
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1499437231476">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="kd-calltoaction icon_browser " style="border: 2px solid #ff515e">
                                                    <div class="container">
                                                        <div class="cta-icon"><i class="fa fa-truck" style="font-size: inherit;" aria-hidden="true"></i></div>
                                                        <div class="cta-text">
                                                            <h3>Our Fleet</h3>
                                                            <p>Our Moving Company is fully licensed and insured!</p>
                                                        </div>
                                                        <div class="cta-btncontainer"> <a href="/get-a-quote"  title="" class="tt_button    zoomIn" data-animation-delay="200">Get a Quote</a></div>
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
                                        <div class="widgettitle">Moving Services</div>
                                        <div class="menu-services-container">
                                            <ul id="menu-services" class="menu">
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link"><a href="/local-moving">Local Moving</a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link"><a href="/interstate-moving">Long Distance Moving</a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link"><a href="/packing-solution">Packing Solution</a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link"><a href="/moving-and-storage">Moving & Storage</a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link"><a href="/commercial-moving">Commercial Moving</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_wp_text wpb_content_element">
                                    <div class="widget widget_text">
                                        <div class="widgettitle">Get a quote</div>
                                        <div class="textwidget">
                                            <p>To Get a Free Online Quote you have to go through few simple steps. For more accurate estimate contact us.</p>
                                            <p><a  href="/get-a-quote" class="tt_button pull-left tt_secondary_button mt2">Get Quote</a></p>
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
