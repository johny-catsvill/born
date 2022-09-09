<html lang="en-US">
<head>
    @include('partials._head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vue-select/4.0.0-beta.5/vue-select.css">
</head>
<body class="home page-template-default page page-id-4 page-parent wpb-js-composer js-comp-ver-5.5.2 vc_responsive"
      itemscope itemtype="https://schema.org/MovingCompany">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4NB5K"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
@include('partials._nav')
<div id="wrapper">
    @yield('content')
</div>
@include('partials._footer')
</div>
@if(View::hasSection('phone'))
    <a href="tel:@yield('phone')" id="phonehide" class="btn-call"><i class="fa fa-phone fa-pc"></i></a>
@else
    <a href="tel:6179032609" id="phonehide" class="btn-call"><i class="fa fa-phone fa-pc"></i></a>
@endif
<div class="bottom-box">
    <div class="container">
        <div class="col-md-3">
            <div class="bottom-box-adt">
                Are you ready<br> for a <span style="color: #ff515e; font-weight:600;">move?</span>
            </div>
        </div>
        <div class="col-md-9">
            <div class="bottom-box-phone">
                Call Now <a href="tel:6179032609">(617) 903-2609</a> Or <a href="{{ url('get-a-quote') }}">Get a Quote
                    Online</a>
            </div>
            <div class="bottom-box-phone">

            </div>
        </div>
    </div>
</div>
@include('partials/js-land')
@yield('customjs')
</body>
</html>
