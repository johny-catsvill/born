<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="/images/favicon.ico" rel="icon">


<link type="text/css" media="all" href="{{ mix('assets/css/app.css') }}" rel="stylesheet" />
<link rel="preload" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></noscript>

<title>@yield('title')</title>
<meta name="description" content="@yield('dscr')">
<meta name="keywords" content="@yield('keywords')">
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('dscr')" />

<meta name="csrf-token" content="{{ csrf_token() }}">
@yield('extracss')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4NB5K');</script>
<!-- End Google Tag Manager -->
{{-- <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77906103-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77906103-1');
</script> --}}


<!-- Hotjar Tracking Code for http://goborntomove.com -->
  {{-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:243880,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> --}}
<style>
@media only screen and (max-width: 960px) {
  .bottom-box {
    display: none;
  }
}
.bottom-box {
  position: fixed; 
  bottom:0;  
  width: 100%; 
  height: 60px; 
  background-color: #fff;
  z-index: 100;
  -moz-box-shadow: 0 -1px 0 rgba(0,0,0,.07);
    -webkit-box-shadow: 0 -1px 0 rgba(0,0,0,.07);
    box-shadow: 0 -1px 0 rgba(0,0,0,.07);
  display: none;
  -webkit-transition:all 1s ease-in-out;
    -moz-transition:all 1s ease-in-out;
    -o-transition:all 1s ease-in-out;
    transition:all 1s ease-in-out;
}
.bottom-box-adt {
  margin-top:6px;
  font-size:24px;
  color: #111;
}
.bottom-box-phone {
  float: right;
  margin-top:18px;
  font-size:24px;
  font-weight:600;
  color: #111;
}
.navbar-shrink {
  margin-top: -134px !important;
}
@media only screen and (min-width: 960px) {
  .displayes {
    display: block !important;
    -webkit-transition:all 1s ease-in-out;
    -moz-transition:all 1s ease-in-out;
    -o-transition:all 1s ease-in-out;
    transition:all 1s ease-in-out;
  }
}
</style>
    <script type="application/ld+json">
{
"@context":"http://schema.org",
"@type":"Product",
"name":"@yield('h1')",
"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "5",
"ratingCount": "1150"
},
"offers": {
"@type":"AggregateOffer",
"lowPrice":"360",
"priceCurrency":"USD"
}
}
</script>
<link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>

      .swiper {
        width: 100%;
        height: 300px;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

    </style>