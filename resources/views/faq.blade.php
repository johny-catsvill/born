@extends('mainl')
@section('extracss')

@stop
@section('content')
    <div id="wrapper">
        <header id="header" class="blog-header ">
            <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item"
                                                                                              typeof="WebPage"
                                                                                              title="Born to Move"
                                                                                              href="https://www.goborntomove.com"
                                                                                              class="home"><span
                                property="name">Home</span></a>
              <meta property="position" content="1">
            </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><span
                            property="item" typeof="WebPage" title="Go to Pricing Plans."
                            href="https://www.goborntomove.com/faq" class="post post-page current-item"><span
                                property="name">FAQ</span></span>
              <meta property="position" content="2">
              </span>
                </div>
            </div>
        </header>
        <section id="single-page" class="section contact-us" style="padding-bottom:0px; ">
            <div class="row single-page-heading ">
                <div class="header-overlay  darkend" style="background-image:url('/images/faq.jpg')"></div>
                <div class="container">
                    <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item"
                                                                                                      typeof="WebPage"
                                                                                                      title="Born to Move"
                                                                                                      href="https://goborntomove.com"
                                                                                                      class="home"><span
                                        property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span><span class="fa fa-angle-right"></span><span property="itemListElement"
                                                                            typeof="ListItem"><a property="item"
                                                                                                 typeof="WebPage"
                                                                                                 title="Go to Pricing Plans."
                                                                                                 href="https://goborntomove.com/faq"
                                                                                                 class="post post-page current-item"><span
                                        property="name">FAQ</span></a>
                        <meta property="position" content="2">
                        </span>
                        </div>
                    </div>
                    <h1 class="section-heading" style=" color:#FFF;text-align:left;margin:0;">FAQ</h1>
                </div>
            </div>

            <div class="container ">
                <div class="row single-page-content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-9 vc_col-lg-9 vc_col-md-6 vc_col-xs-12">
                            <div class="vc_column-inner vc_custom_1499429691559">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1499429223018">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="accordion" itemscope
                                                         itemtype="https://schema.org/FAQPage">
                                            @include('blocks.faq')
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_wp_custommenu wpb_content_element">
                                        <div class="widget widget_nav_menu">
                                            <div class="widgettitle">Local Moving</div>
                                            <div class="menu-services-container">
                                                <ul id="menu-services" class="menu">
                                                    <li id="menu-item-2739"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link">
                                                        <a href="{{ url('local-moving') }}">Local Moving</a></li>
                                                    <li id="menu-item-2740"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2740 one-page-link">
                                                        <a href="{{ url('interstate-moving') }}">Interstate Moving</a>
                                                    </li>
                                                    <li id="menu-item-2741"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2741 one-page-link">
                                                        <a href="{{ url('packing-solution') }}">Packing Solution</a>
                                                    </li>
                                                    <li id="menu-item-2742"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2742 one-page-link">
                                                        <a href="{{ url('moving-and-storage') }}">Moving and Storage</a>
                                                    </li>
                                                    <li id="menu-item-2743"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2743 one-page-link">
                                                        <a href="{{ url('special-services') }}">Special Services</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_wp_text wpb_content_element">
                                        <div class="widget widget_text">
                                            <div class="widgettitle">Get a quote</div>
                                            <div class="textwidget">
                                                <p>To Get a Free Online Quote you have to go through few simple steps.
                                                    For more accurate estimate contact us.</p>
                                                <p><a href="{{ url('get-a-quote') }}"
                                                      class="tt_button pull-left tt_secondary_button mt2">Get a
                                                        Quote</a></p>
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
    </div>
@stop
