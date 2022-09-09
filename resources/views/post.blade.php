

@section('seo')
    <title>{{ $post->title. '| Born to Move blog' }}</title>
    <meta name="description" content="{{ $post->meta_description }}">
@endsection

@extends('mainl')
@section('extracss')

    <style>
        .modal-title{
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            color: #fff;
            background-color: #ff515e;
        }
        .modal-close-button {
            position: relative;
            top: -16px;
            right:-16px;
        }
        .fade-scale {
            transform: scale(0);
            opacity: 0;
            -webkit-transition: all .25s linear;
            -o-transition: all .25s linear;
            transition: all .25s linear;
        }

        .fade-scale.in {
            opacity: 1;
            transform: scale(1);
        }
    </style>
@stop
@section('content')
    <div id="wrapper">
        <header id="header" class="blog-header ">

        </header>
        <section id="single-page" class="section corporate-moving" style="">
            <div class="row single-page-heading ">
                <div class="header-overlay parallax-overlay darkend" style="background-image:url('{{ asset('storage/'.$post->image) }}')"></div>
                <div class="container">
                    <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Etalon Moving." href="https://goborntomove.com/" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Services." href="https://goborntomove.com/blogs/" class="post post-page"><span property="name">Blog</span></a>
                        <meta property="position" content="2">
                    </span>
                            <span class="fa fa-angle-right"></span>
                            <span property="itemListElement" typeof="ListItem">
                        <span property="item" typeof="WebPage" title="Go to Corporate moving."  class="post post-page current-item">
                            <span property="name">{{$post->title}}</span>
                        </span>
                        <meta property="position" content="3">
                        </span>
                        </div>
                    </div>
                    <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{$post->title}}</h1></div>
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
                                                        <div class="wpb_wrapper" style="color:rgb(51,51,51);">
                                                            {!!$post->body!!}
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
                                            <div class="card__blog radius shadowDepth1">
                                                <div class="card__image border-tlr-radius">
                                                    <a href="{{ url('get-a-quote') }}"><img src="{{ asset('images/moving_can_be_easy.png') }}" alt="{{$post->h1}}" class="border-tlr-radius"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_wp_text wpb_content_element">
                                        <div class="widget widget_text">
                                            <div class="widgettitle">Get a quote</div>
                                            <div class="textwidget">
                                                <p>To Get a Free Online Quote you have to go through few simple steps. For more accurate estimate contact us.</p>
                                                <p><a href="{{ url('get-a-quote') }}" class="tt_button pull-left tt_secondary_button mt2">Get a Quote</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_wp_text wpb_content_element">
                                        <div class="widget widget_text">
                                            <div class="textwidget">
                                                <p><a class="tt_button pull-left tt_secondary_button mt2" href="{{ route('blogs') }}">All Posts</a></p>
                                            </div>
                                        </div>
                                    </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" style="top:200; z-index:1000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close-button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-header">
                    <h3 class="modal-title">Get 5% OFF</h3>
                </div>
                <div class="modal-body text-center" style="font-size:16px;font-weight:600;">
                    <p><strong>5%</strong> off your next move!
                        <br> Simply book a move online or<br>
                        call us (617) 903-2609
                    </p>
                    <br>
                    <a class="tt_button pull-left tt_secondary_button mt2" href="/get-a-quote">Book a Move</a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <h3 style="font-size: 24px;line-height: 1;text-align: center" class="vc_custom_heading section-heading vc_custom_1498398971266">More Posts</h3>
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
                                        <a href="{{ route('post', $post->slug) }}">
                                            {{\Illuminate\Support\Str::limit($post->title, 57) }}</a></div>
                                    <div class="description">
                                        {{\Illuminate\Support\Str::limit($post->excerpt, 150) }}
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
