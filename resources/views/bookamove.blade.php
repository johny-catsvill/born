
@extends('main')
@section('extracss')

<!-- Hotjar Tracking Code for http://goborntomove.com -->
  <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:243880,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
@stop

@section('content')
<div>
  <section id="app" class="section corporate-moving" style="">
        <div class="row single-page-content padding-top hide-on-mob" >
          <estimate-full-cmp></estimate-full-cmp>
        </div>
        <div class="row single-page-content hide-on-desc padding-topsm">
        <estimate-cmp></estimate-cmp>
        </div>
  </section>
@include('partials/_testipart')
</div>
@stop
