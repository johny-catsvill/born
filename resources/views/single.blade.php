
@section('seo')
    @include('blocks.seo', ['seo' => $page])
@endsection

@extends('mainl')
@section('extracss')

<style>
.bg-image {
    background-image:url('{{ asset('storage/'.$page->image) }}');
  }
@media only screen and (max-width: 600px) {
  .bg-image {
    background-image:url('{{ asset('storage/', $page->mobile_image) }}');
  }
}
</style>
@stop
@section('content')
<div id="wrapper" class="">
    <header id="header" class="blog-header">

    </header>
    <section id="single-page" class="section corporate-moving" style="">
        <div class="row single-page-heading ">
        <div class="header-overlay bg-image darkend" ></div>
            <div class="container">
                        <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <div class="container">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Home" href="/" class="home">
                        <span property="name">Home</span>
                    </a>
                    <meta property="position" content="1">
                </span>
                 @if($page->tomlink != 'regular')
                 <span class="fa fa-angle-right"></span>
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="{{ $page->categoryId->name }}" href="{{ $page->categoryId->slug }}" class="post post-page">
                        <span property="name">{{ $page->categoryId->name }}</span>
                    </a>
                    <meta property="position" content="2">
                </span>
                @endif
                @if($page->boslink)
                <span class="fa fa-angle-right"></span>
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="{{ $page->bosname }}" href="/boston-movers"  class="post post-page">
                        <span property="name">{{ $page->bosname }}</span>
                    </a>
                <meta property="position" content="3">
                </span>
                @endif
                <span class="fa fa-angle-right"></span>
                <span property="itemListElement" typeof="ListItem">
                <span property="item" typeof="WebPage" title="Go to {{ $page->categoryId->name }} Moving." class="post post-page current-item">
                  <span property="name">{{ $page->categoryId->name }}</span>
                </span>
                <meta property="position" @if($page->boslink) content="4" @else content="3" @endif>
              </span>
            </div>
        </div>
                <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{ $page->h1 }}</h1></div>
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
                                                                {!! $page->top_text !!}
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
                                        <div class="vc_column-inner vc_custom_1499437272363">
                                            <div class="wpb_wrapper">
                                                <h3 style="text-align: left" class="vc_custom_heading vc_custom_1498388172144">{{ $page->h3 }}</h3>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            {!! $page->middle_text !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                @if($page->image_1)
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <div class="swiper gallery">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset('storage/'.$page->image_1) }}" width="260px" height="200" alt="">
                                                                </div>
                                                                @if($page->image_2)
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset('storage/'.$page->image_2) }}" width="260px" height="200" alt="">
                                                                </div>
                                                                @endif
                                                                @if($page->image_3)
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset('storage/'.$page->image_3) }}" width="260px" height="200" alt="">
                                                                </div>
                                                                @endif
                                                                @if($page->image_4)
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset('storage/'.$page->image_4) }}" width="260px" height="200" alt="">
                                                                </div>
                                                                @endif

                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <h3 style="text-align: left" class="vc_custom_heading vc_custom_1498388172144">{{ $page->h3_2 }}</h3>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                                {!! $page->bottom_text !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                @if($page->categoryId->name == 'Boston to Chicago')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="parent" onclick="location.href='/boston-chicago-moving/boston-evanston-moving';" style="height:150px;">
                                                            <div class="child " style="background-image: url(/images/long/evanston.jpg);">
                                                                <a href="/boston-chicago-moving/boston-evanston-moving" style="font-size: 28px;">Evanston
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="parent" onclick="location.href='/boston-chicago-moving/boston-oak-park-moving';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/images/long/oak.jpg);">
                                                                <a href="/boston-chicago-moving/boston-oak-park-moving" style="font-size: 28px;">Oak Park Chicago
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @elseif($page->categoryId->name == 'Boston to Washington DC')
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="parent" onclick="location.href='/boston-alexandria-moving';" style="height:150px;">
                                                            <div class="child " style="background-image: url(/storage/images/pages/desk/1614193743.jpg);">
                                                                <a href="/boston-alexandria-moving" style="font-size: 28px;">Alexandria
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="parent" onclick="location.href='/boston-arlington-va-moving';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/storage/images/pages/desk/1614194113.jpg);">
                                                                <a href="/boston-arlington-va-moving" style="font-size: 28px;">Arlington VA
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="parent" onclick="location.href='/boston-silver-spring-moving';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/storage/images/pages/desk/1614195164.jpg);">
                                                                <a href="/boston-silver-spring-moving" style="font-size: 28px;">Silver Spring
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="parent" onclick="location.href='/boston-bethesda-moving';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/storage/images/pages/desk/1614195462.jpg);">
                                                                <a href="/boston-bethesda-moving" style="font-size: 28px;">Bethesda
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @elseif($page->categoryId->name == 'Boston to Philadelphia')
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="parent" onclick="location.href='/boston-to-philadelphia-moving/west-philadelphia';" style="height:150px;">
                                                            <div class="child " style="background-image: url(/images/long/westphil.jpg);">
                                                                <a href="/boston-to-philadelphia-moving/west-philadelphia" style="font-size: 28px;">West Philadelphia
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="parent" onclick="location.href='/boston-to-philadelphia-moving/south-philadelphia';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/images/long/southphil.jpg);">
                                                                <a href="/boston-to-philadelphia-moving/south-philadelphia" style="font-size: 28px;">South Philadelphia
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="parent" onclick="location.href='/boston-to-philadelphia-moving/north-philadelphia';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/images/long/northphil.jpg);">
                                                                <a href="/boston-to-philadelphia-moving/north-philadelphia" style="font-size: 28px;">North Philadelphia
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else

                                                @endif
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                      <p>Our
                                                          @if($page->categoryId->parentId->name == 'Local Moving')
                                                            hourly
                                                            @else
                                                            flat
                                                            @endif
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
                                                            @if($page->categoryId->parentId->name == 'Local Moving')
                                                            <h3>{{ $page->distance }} Moving</h3>
                                                            @else
                                                            <h3>{{ $page->categoryId->name }} Moving</h3>
                                                            @endif
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
    <section class="section" style="background-color:#f7f7f7;">
        <div class="container">
            <h2 style="font-size: 24px;line-height: 1;text-align: center" class="vc_custom_heading section-heading vc_custom_1498398971266">FAQ about moving
            @if($page->categoryId->parentId->name == 'Local Moving')
            in {{ $page->distance }}
            @else
            from {{ $page->categoryId->name }}
            @endif
            </h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" itemscope itemtype="https://schema.org/FAQPage">
                        @include('blocks.faq')

                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials/_testipart')
</div>
@stop
