

@extends('mainl')

@section('content')
    <div id="wrapper" class="">
        <header id="header" class="blog-header ">

        </header>
        <section id="single-page" class="section corporate-moving" style="">
            <div class="row single-page-heading ">
                <div class="header-overlay parallax-overlay darkend" style="background-image:url('/images/blog.jpg')"></div>
                <div class="container">
                    <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Etalon Moving." href="https://goborntomove.com/" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Services." href="https://goborntomove.com/about-us/" class="post post-page"><span property="name">About us</span></a>
                        <meta property="position" content="2">
                    </span>
                        </div>
                    </div>
                    <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">Moving Blog</h1></div>
            </div>
            <div class="container ">
                <div class="row single-page-content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12">
                            <div class="vc_column-inner vc_custom_1499437250775">
                                <div class="wpb_wrapper">
                                    <div class="row">
                                        @foreach ($posts as $post)
                                            <div class="col-md-4" style="padding-bottom: 20px">
                                                <div class="card__blog radius shadowDepth1">
                                                    <div class="card__image border-tlr-radius">
                                                        <div style="background:url({{ asset('storage/'.$post->image) }})" alt="image" class="image border-tlr-radius"></div>
                                                    </div>
                                                    <div class="card__content card__padding">
                                                        <article class="card__article">
                                                            <h3 style="height: 75px;"><a href="{{ route('post', $post->slug) }}">
                                                                    {{ \Illuminate\Support\Str::limit($post->title, 57) }}</a></h3>
                                                            <div class="description">
                                                                {{ \Illuminate\Support\Str::limit($post->excerpt, 150) }}
                                                            </div>
                                                        </article>
                                                    </div>

                                                    <div class="card__action">

                                                        <div class="card__author" style="padding-bottom:10px;">
                                                            <a class="tt_button kd-animated zoomIn" href="{{ route('post', $post->slug) }}">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-md-12 text-center">{{$posts->links()}}</div>
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
