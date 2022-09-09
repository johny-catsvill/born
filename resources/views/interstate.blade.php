

@extends('mainl')
@section('extracss')


<style>
.red {
    fill: #ff515e !important;
    background-color: #ff515e !important;
    color: #ff515e !important;
    opacity:1;
}
.red2 {
    fill: #FF8089 !important;
    background-color: #FF8089 !important;
    color: #FF8089 !important;
    opacity:1;
}
.red3 {
    fill: #FFCFD3 !important;
    background-color: #FFCFD3 !important;
    color: #FFCFD3 !important;
    opacity:1;
}
svg path:hover {
    opacity: 0.5;
}
</style>
<!-- <link rel="stylesheet" type="text/css" href="/css/tooltipster.bundle.min.css"/>
<link rel="stylesheet" type="text/css" href="/css/tooltipster-sideTip-punk.min.css"/> -->
@stop
@section('content')
<div id="wrapper" class="">
     <header id="header" class="blog-header ">

     </header>
     <section id="single-page" class="section pricing" style="padding-bottom:0px; ">
         <div class="row single-page-heading ">
             <div class="header-overlay darkend" style="background-image:url('/images/interstate.jpg')"></div>
             <div class="container">
                <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Born to Move" href="https://www.goborntomove.com" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><span property="item" typeof="WebPage" title="Long Distance Moving" class="post post-page current-item"><span property="name">Interstate Moving</span></span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
                 <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{ $seo->h1 }}</h1></div>
         </div>
         <div class="container">
           <div class="row">
             <div class="col-md-6">
    					<div class="parent" onclick="location.href='/boston-new-york-moving-prices';">
    						<div class="child bg-one">
    							<a href="{{ url('boston-new-york-moving-prices') }}"
                                   style="line-height: 30px;">Boston to New York<br/> Moving
    								<p style="font-size:16px;">view more</p>
    							</a>
    						</div>
    					</div>
            </div>
            <div class="col-md-6">
    					<div class="parent" onclick="location.href='/boston-chicago-moving';">
    						<div class="child" style="background-image: url(/images/chicago.jpg);">
    							<a href="/boston-chicago-moving" style="line-height: 30px;">Boston to Chicago<br/> Moving
    								<p style="font-size:16px;">view more</p>
    							</a>
    						</div>
    					</div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-4">
    					<div class="parent" onclick="location.href='/boston-to-philadelphia-moving';">
    						<div class="child " style="background-image: url(/images/phil1.jpg);">
    							<a href="/boston-to-philadelphia-moving" style="font-size: 28px;">Boston to Philadelphia<br/> Moving
    								<p style="font-size:15px;">view more</p>
    							</a>
    						</div>
    					</div>
            </div>
            <div class="col-md-4">
    					<div class="parent" onclick="location.href='/boston-losangeles-moving';">
    						<div class="child bg-four">
    							<a href="/boston-losangeles-moving" style="font-size: 28px;">Boston to Los Angeles<br/> Moving
    								<p style="font-size:15px;">view more</p>
    							</a>
    						</div>
    					</div>
            </div>
            <div class="col-md-4">
                <div class="parent" onclick="location.href='/boston-miami-moving';">
                    <div class="child" style="background-image: url(/images/miami1.jpg);">
                        <a href="/boston-miami-moving" style="font-size: 28px;">Boston to Miami<br/> Moving
                            <p style="font-size:15px;">view more</p>
                        </a>
                    </div>
                </div>
            </div>
           </div>

          <h2 style="text-align: center" class="vc_custom_heading vc_custom_1498388172144">All Long Distance Moving destinations from Boston</h2>
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-new-hampshire-moving">
                        <img src="/images/cityicons/nh.png" width="70px" height="auto" alt="New Jersey"/>
                        <br>
                        <h4>New Hampshire</h4>
                        <a href="/boston-nashua-moving">Movers From Boston to Nashua</a><br/>
                        <a href="/boston-concord-moving">Movers From Boston to Concord</a><br/>
                        <a href="/boston-manchester-moving">Movers From Boston to Manchester</a><br/>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-maine-moving">
                        <img src="/images/cityicons/maine.png" width="70px" height="auto" alt="Maine"/>
                        <br>
                        <h4>Maine</h4>
                        <a href="/boston-bangor-moving">Movers From Boston to Bangor</a><br/>
                        <a href="/boston-portland-maine-moving">Movers from Boston to Portland</a>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/ri.png" width="70px" height="auto" alt="Florida"/>
                    <br>
                    <h4>Rhode Island</h4>
                    <a href="/boston-providence-moving">Movers From Boston to Providence</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-vermont-moving">
                        <img src="/images/cityicons/vermont.png" width="70px" height="auto" alt="Vermont"/>
                        <br>
                        <h4>Vermont</h4>
                    </a>
                    <a href="/boston-burlington-moving">Movers From Boston to Burlington</a>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-connecticut-moving">
                        <img src="/images/cityicons/connecticut.png" width="70px" height="auto" alt="Connecticut"/>
                        <br>
                        <h4>Connecticut</h4>
                    </a>
                    <a href="/boston-hartford-moving">Movers From Boston to Hartford</a><br/>
                    <a href="/boston-new-haven-moving">Movers From Boston to New Haven</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/ny.png" width="70px" height="auto" alt="New York"/>
                    <br>
                    <h4>New York</h4>
                    <a href="/Boston-New-York-Moving-Prices">Movers From Boston to New York</a><br/>
                    <a href="/boston-buffalo-moving">Movers from Boston to Buffalo</a><br/>
                    <a href="/boston-albany-moving">Movers from Boston to Albany</a><br/>
                    <a href="/boston-syracuse-moving">Movers from Boston to Syracuse</a><br/>
                    <a href="/boston-rochester-moving">Movers from Boston to Rochester</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-new-jersey-moving">
                        <img src="/images/cityicons/nj.png" width="70px" height="auto" alt="New Jersey"/>
                    </a>
                    <br>
                    <h4>New Jersey</h4>
                    <a href="/boston-jersey-city-moving">Movers From Boston to Jersey City</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-pennsylvania-moving">
                        <img src="/images/cityicons/pa.png" width="70px" height="auto" alt="Pennsylvania"/>
                    </a>
                    <br>
                    <h4>Pennsylvania</h4>
                    <a href="/boston-to-philadelphia-moving">Movers From Boston to Philadelphia</a>
                    <a href="/boston-pittsburgh-moving">Movers From Boston to Pittsburgh</a>
                </div>

            </div>
            <br/>
             <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-to-ohio-moving">
                        <img src="/images/cityicons/ohio.png" width="70px" height="auto" alt="Ohio"/>
                        <br>
                        <h4>Ohio</h4>
                    </a>
                    <a href="/boston-columbus-moving">Movers From Boston to Columbus</a><br/>
                    <a href="/boston-cleveland-moving">Movers From Boston to Cleveland</a><br/>
                    <a href="/boston-cincinnati-moving">Movers From Boston to Cincinnati</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-illinois-moving">
                        <img src="/images/cityicons/illinois.png" width="70px" height="auto" alt="Illinois"/>
                    </a>
                    <br>
                    <h4>Illinois</h4>
                    <a href="/boston-chicago-moving">Movers From Boston to Chicago</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/indiana.png" width="70px" height="auto" alt="Indiana"/>
                    <br>
                    <h4>Indiana</h4>
                    <a href="/boston-indianapolis-moving">Movers From Boston to Indianapolis</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/minnesota.png" width="70px" height="auto" alt="Minnesota"/>
                    <br>
                    <h4>Minnesota</h4>
                    <a href="/boston-minneapolis-moving">Movers From Boston to Minneapolis</a><br/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/maryland.png" width="70px" height="auto" alt="Maryland"/>
                    <br>
                    <h4>Maryland</h4>
                    <a href="/boston-baltimore-moving">Movers From Boston to Baltimore</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/virginia.png" width="70px" height="auto" alt="Virginia"/>
                    <br>
                    <h4>Virginia</h4>
                    <a href="/boston-richmond-moving">Movers From Boston to Richmond</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-delaware-moving">
                        <img src="/images/cityicons/delawere.png" width="70px" height="auto" alt="Delaware"/>
                        <br>
                        <h4>Delaware</h4>
                    </a>
                    <!-- <a href="/">Movers From Boston to </a><br/> -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-north-carolina-moving">
                        <img src="/images/cityicons/nc.png" width="70px" height="auto" alt="North Carolina"/>
                        <br>
                        <h4>North Carolina</h4>
                    </a>
                    <a href="/boston-charlotte-moving">Movers From Boston to Charlotte</a><br/>
                    <a href="/boston-raleigh-moving">Movers From Boston to Raleigh</a><br/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/tennessee.png" width="70px" height="auto" alt="Tennessee"/>
                    <br>
                    <h4>Tennessee</h4>
                    <a href="/boston-nashville-moving">Movers From Boston to Nashville</a><br/>
                    <a href="/boston-memphis-moving">Movers From Boston to Memphis</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/georgia.png" width="70px" height="auto" alt="Georgia"/>
                    <br>
                    <h4>Georgia</h4>
                    <a href="/boston-atlanta-moving">Movers From Boston to Atlanta</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-to-florida-moving">
                        <img src="/images/cityicons/florida.png" width="70px" height="auto" alt="Florida"/>
                        <br>
                        <h4>Florida</h4>
                    </a>
                    <a href="/boston-orlando-moving">Movers From Boston to Orlando</a><br/>
                    <a href="/boston-miami-moving">Movers From Boston to Miami</a><br/>
                    <a href="/boston-tampa-moving">Movers From Boston to Tampa</a><br/>
                    <a href="/boston-jacksonville-moving">Movers From Boston to Jacksonville</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-to-missouri-moving">
                    <img src="/images/cityicons/missouri.png" width="70px" height="auto" alt="Missouri"/>
                    <br>
                    <h4>Missouri</h4>
                    </a>
                    <a href="/boston-kansas-city-moving">Movers From Boston to Kansas City</a><br/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-michigan-moving">
                        <img src="/images/cityicons/michigan.png" width="70px" height="auto" alt="Michigan"/>
                    <br>
                    <h4>Michigan</h4>
                    </a>
                    <a href="/boston-detroit-moving">Movers From Boston to Detroit</a><br/>
                    <a href="/boston-grand-rapids-moving">Movers From Boston to Grand Rapids</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-texas-moving">
                        <img src="/images/cityicons/texas.png" width="70px" height="auto" alt="Texas"/>
                    </a>
                    <br>
                    <h4>Texas</h4>
                    <a href="/boston-houston-moving">Movers From Boston to Houston</a><br/>
                    <a href="/boston-dallas-moving">Movers From Boston to Dallas</a><br/>
                    <a href="/boston-austin-moving">Movers From Boston to Austin</a><br/>
                    <a href="/boston-san-antonio-moving">Movers From Boston to San Antonio</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-colorado-moving">
                        <img src="/images/cityicons/colorado.png" width="70px" height="auto" alt="Colorado"/>
                    </a>
                    <br>
                    <h4>Colorado</h4>
                    <a href="/boston-denver-moving">Movers From Boston to Denver</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/utah.png" width="70px" height="auto" alt="Utah"/>
                    <br>
                    <h4>Utah</h4>
                    <a href="/boston-salt-lake-city-moving">Movers From Boston to Salt Lake City</a><br/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/arizona.png" width="70px" height="auto" alt="Arizona"/>
                    <br>
                    <h4>Arizona</h4>
                    <a href="/boston-phoenix-moving">Movers From Boston to Phoenix</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/washingtonst.png" width="70px" height="auto" alt="Washington"/>
                    <br>
                    <h4>Washington</h4>
                    <a href="/boston-seattle-moving">Movers From Boston to Seattle</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/oregon.png" width="70px" height="auto" alt="Oregon"/>
                    <br>
                    <h4>Oregon</h4>
                    <a href="/boston-portland-moving">Movers From Boston to Portland</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <img src="/images/cityicons/nevada.png" width="70px" height="auto" alt="Nevada"/>
                    <br>
                    <h4>Nevada</h4>
                    <a href="/boston-las-vegas-moving">Movers From Boston to Las Vegas</a><br/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    <a href="/boston-california-moving">
                        <img src="/images/cityicons/cali.png" width="70px" height="auto" alt="California"/>
                        <br>
                        <h4>California</h4>
                    </a>
                    <a href="/boston-losangeles-moving">Movers From Boston to Los Angeles</a><br/>
                    <a href="/boston-san-francisco-moving">Movers From Boston to San Francisco</a><br/>
                    <a href="/boston-sacramento-moving">Movers From Boston to Sacramento</a><br/>
                    <a href="/boston-san-diego-moving">Movers From Boston to San Diego</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-alabama-moving">
                        <img src="/images/cityicons/alabama.png" width="70px" height="auto" alt="Alabama"/>
                        <br>
                        <h4>Alabama</h4>
                    </a>
                </div>
               <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-south-carolina-moving">
                        <img src="/images/cityicons/nevada.png" width="70px" height="auto" alt="Nevada"/>
                        <br>
                        <h4>South Carolina</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <img src="/images/cityicons/nevada.png" width="70px" height="auto" alt="Nevada"/>
                    <br>
                    <h4>New Mexico</h4>
                    <a href="/boston-albuquerque-moving">Movers From Boston to Albuquerque</a><br/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" style="margin-bottom:20px;">
                    {{-- <a href="/boston-california-moving"> --}}
                        <img src="/images/cityicons/cali.png" width="70px" height="auto" alt="Louisiana"/>
                        <br>
                        <h4>Louisiana</h4>
                    {{-- </a> --}}
                    <a href="/boston-new-orleans-moving">Movers From Boston to New Orleans</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <img src="/images/cityicons/dc.png" width="70px" height="auto" alt="DC"/>
                    <br>
                    <h4>Washington DC</h4>
                    <a href="/boston-to-washington-dc-moving">Movers From Boston to Washington DC</a><br/>
                </div>
               <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <img src="/images/cityicons/ma.png" width="70px" height="auto" alt="Massachusets"/>
                    <br>
                    <h4>Massachusets</h4>
                    <a href="/boston-springfield-moving">Movers From Boston to Springfield MA</a><br/>
                    <a href="/boston-cape-cod-moving">Movers From Boston to Cape Cod MA</a><br/>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-idaho-moving">
                        <img src="/images/cityicons/idaho.png" width="70px" height="auto" alt="Idaho"/>
                        <br>
                        <h4>Idaho</h4>
                    </a>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-kentucky-moving">
                        <img src="/images/cityicons/kentucky.png" width="70px" height="auto" alt="Kentucky"/>
                        <br>
                        <h4>Kentucky</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-west-virginia-moving">
                        <img src="/images/cityicons/westvirginia.png" width="70px" height="auto" alt="West Virginia"/>
                        <br>
                        <h4>West Virginia</h4>
                    </a>
                </div>
               <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-wyoming-moving">
                        <img src="/images/cityicons/wyoming.png" width="70px" height="auto" alt="Wyoming"/>
                        <br>
                        <h4>Wyoming</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-montana-moving">
                        <img src="/images/cityicons/montana.png" width="70px" height="auto" alt="Montana"/>
                        <br>
                        <h4>Montana</h4>
                    </a>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-oklahoma-moving">
                        <img src="/images/cityicons/oklahoma.png" width="70px" height="auto" alt="Oklahoma"/>
                        <br>
                        <h4>Oklahoma</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-south-dakota-moving">
                        <img src="/images/cityicons/southdakota.png" width="70px" height="auto" alt="South Dakota"/>
                        <br>
                        <h4>South Dakota</h4>
                    </a>
                </div>
               <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-north-dakota-moving">
                        <img src="/images/cityicons/northdakota.png" width="70px" height="auto" alt="North Dakota"/>
                        <br>
                        <h4>North Dakota</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-mississippi-moving">
                        <img src="/images/cityicons/mississippi.png" width="70px" height="auto" alt="Mississippi"/>
                        <br>
                        <h4>Mississippi</h4>
                    </a>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-arkansas-moving">
                        <img src="/images/cityicons/arkansas.png" width="70px" height="auto" alt="Arkansas"/>
                        <br>
                        <h4>Arkansas</h4>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <a href="/boston-to-iowa-moving">
                        <img src="/images/cityicons/iowa.png" width="70px" height="auto" alt="Iowa"/>
                        <br>
                        <h4>Iowa</h4>
                    </a>
                </div>
            </div>
          </div>
          <br>
          <div class="wpb_wrapper"  style="margin: 0 30px;">
              <h2 style="text-align: center" class="vc_custom_heading vc_custom_1498388172144">Express routes and timing</h2>
              <br>
              <div class="wpb_text_column wpb_content_element ">
                  <div class="wpb_wrapper">
                      <div class="row">
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Route</th>
                                        <th>Delivery</th>
                                    </tr>
                                    <tr>
                                        <td>
                                        Boston ⇄ New York
                                        </td>
                                        <td>Next day</td>
                                    </tr>
                                    <tr>
                                        <td>Boston ⇄ Philadelphia</td>
                                        <td>Next day</td>
                                    </tr>
                                    <tr>
                                        <td>Boston ⇄ Washington, DC</td>
                                        <td>Next day</td>
                                    </tr>
                                    <tr>
                                        <td>Boston ⇄ North Carolina</td>
                                        <td>2 days</td>
                                    </tr>
                                    <tr>
                                        <td>Boston ⇄ Chicago</td>
                                        <td>2 days</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Boston ⇄ Miami
                                        </td>
                                        <td>2-3 days</td>
                                    </tr>
                                    <tr>
                                        <td>Boston ⇄ Los Angeles</td>
                                        <td>5 days</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 913.4 572.6">
                                <path id="AL" class="red tooltip" title="AL" d="M614.5,460l.6.2,1.3-2.7,1.5-4.4,2.3.6,3.1,6v1l-2.7,1.9,2.7.3,5.2-2.5-.3-7.6-2.5-1.8-2-2,.4-4,10.5-1.5,25.7-2.9,6.7-.6,5.6.1-.5-2.2-1.5-.8-.9-1.1,1-2.6-.4-5.2-1.6-4.5.8-5.1,1.7-4.8-.2-1.7-1.8-.7-.5-3.6-2.7-3.4-2-6.5-1.4-6.7-1.8-5-3.8-16-3.5-7.9-.8-5.6.1-2.2-9,.8-23.4,2.2-12.2.8-.2,6.4.2,16.7-.7,31-.3,14.1,2.8,18.8,1.6,14.7Z"></path>
                                <path id="AR" class="red tooltip" title="AR" d="M573.3,339.7l-6.4-.7.9-3.1,3.1-2.6.6-2.3-1.8-2.9-31.9,1.2-23.3.7-23.6.3,1.5,6.9.1,8.5,1.4,10.9.3,38.2,2.1,1.6,3-1.2,2.9,1.2.4,10.1,25.2-.2,26.8-.8.9-1.9-.3-3.8-1.7-3.1,1.5-1.4-1.4-2.2.7-2.4,1.1-5.9,2.7-2.3-.8-2.2,4-5.6,2.5-1.1-.1-1.7-.5-1.7,2.9-5.8,2.5-1.1.2-3.3,2.1-1.4.9-4.1-1.4-4,4.2-2.4.3-2.1,1.2-4.2.9-3.1Z"></path>
                                <path id="AZ" class="red tooltip" title="AZ" d="M121.1,383.3l-.3,1.5.5,1,18.9,10.7,12.1,7.6,14.7,8.6,16.8,10,12.3,2.4,25.4,2.7,6-39.6,7-53.1,4.4-31-24.6-3.6-60.7-11-.2,1.1-2.6,16.5-2.1,3.8-2.8-.2-1.2-2.6-2.6-.4-1.2-1.1-1.1.1-2.1,1.7-.3,6.8-.3,1.5-.5,12.5-1.5,2.4-.4,3.3,2.8,5,1.1,5.5.7,1.1,1.1.9-.4,2.4-1.7,1.2-3.4,1.6-1.6,1.8-1.6,3.6-.5,4.9-3,2.9-1.9.9-.1,5.8-.6,1.6.5.8,3.9.4-.9,3-1.7,2.4-3.7.4Z"></path>
                                <path id="CA" class="red tooltip" title="CA" d="M108.7,379.5,89,376.8l-10-1.5-.5-1.8v-9.4l-.3-3.2-2.6-4.2-.8-2.3-3.9-4.2L68,345.5l-2.7-.2-3.2-.8-.3-1,1.5-.6-.6-3.2-1.5-2.1-4.8-.8-3.9-2.1-1.1-2.3-2.6-4.8-2.9-3.1H43l-3.9-2.1-4.5-1.8-4.2-.5L28,317.4l.5-1.9,1.8-7.1.8-1.9v-2.4l-1.6-1-.5-2.9-1.5-2.6-3.4-5.8-1.3-3.1L21.3,284l-1.6-5.3-3.2-4.4-.5-2.9.8-3.9h1.1l2.1-1.6,1.1-3.6-1-2.7-2.7-.5-1.9-2.6-2.1-3.7-.2-8.2.6-1.9.6-2.3.5-2.4-5.7-6.3v-2.1l.3-.5.3-3.2-1.3-4-2.3-4.8-2.7-4.5-1.8-3.9,1-3.7.6-5.8,1.8-3.1.3-6.5L4.3,186l-1.6-4.2L0,177.6l.8-3.2,1.5-4.2,1.8-.8.3-1.1,3.1-2.6,5.2-11.8.2-7.4,1.69-4.9,38.69,11.8,25.6,6.6-8,31.3-8.67,33.1,12.63,19.2L117,305.9,134.1,332l-.4,3.1,2.8,5.2,1.1,5.4,1,1.5.7.6-.2,1.4-1.4,1-3.4,1.6-1.9,2.1-1.7,3.9-.5,4.7-2.6,2.5-2.3,1.1-.1,6.2-.6,1.9,1,1.7,3,.3-.4,1.6-1.4,2-3.9.6ZM34.8,330.6l1.3,1.5-.2,1.3-3.2-.1-.6-1.2-.6-1.5Zm1.9,0,1.2-.6,3.6,2.1,3.1,1.2-.9.6-4.5-.2-1.6-1.6Zm20.7,19.8,1.8,2.3.8,1,1.5.6.6-1.5-1-1.8-2.7-2-1.1.2v1.2ZM56,359.1l1.8,3.2,1.2,1.9-1.5.2-1.3-1.2a9.84,9.84,0,0,1-.7-1.9v-2.2Z"></path>
                                <path id="CO" class="red tooltip" title="CO" d="M366.2,229.1l-36-3.5L251.1,217l-2.2,22.1-7,50.4L240,303.2l34,3.9,37.5,4.4,34.7,3,14.3.6Z"></path>
                                <path id="CT" class="red3 tooltip" title="CT" d="M838,184.5l3.6-3.2,1.9-2.1.8.6,2.7-1.5,5.2-1.1,7-3.5-.6-4.2-.8-4.4-1.6-6-4.3,1.1-21.8,4.7.6,3.1,1.5,7.3v8.3l-.9,2.1,1.7,2.2Z"></path>
                                <path id="DE" class="red3 tooltip" title="DE" d="M820.4,240.8l-1,.5-3.6-2.4-1.8-4.7-1.9-3.6-2.3-1-2.1-3.6.5-2,.5-2.3.1-1.1-.6.1-1.7,1-2,1.7-.2.3,1.4,4.1,2.3,5.6,3.7,16.1,5-.3,6-1.1Z"></path>
                                <path id="FL" class="red2 tooltip" title="FL" d="M736.2,438.8l-5.2-.7-.7.8,1.5,4.4-.4,5.2-4.1-1-.2-2.8H723l-5.3.7-32.4,1.9-8.2-.3-1.7-1.7-2.5-4.2H667l-6.6.5L625,445.8l-.3,2.8,1.6,1.6,2.9,2,.3,8.4,3.3-.6,6-2.1,6-.5,4.4-.6,7.6,1.8,8.1,3.9,1.6,1.5,2.9,1.1L671,467l.3,2.7,3.2-1.3h3.9l3.6-1.9,3.7-3.6,3.1.2.5-1.1-.8-1,.2-1.9,4-.8h2.6l2.9,1.5,4.2,1.5,2.4,3.7,2.7,1,1.1,3.4L712,471l1.6,2.6,1.9.6,5.2,1.3,1.3,3.1,3,3.7v9.5l-1.5,4.7.3,2.7,1.3,4.8,1.8,4,.8-.5,1.5-4.5-2.6-1-.3-.6,1.6-.6,4.5,1,.2,1.6-3.2,5.5-2.1,2.4,3.6,3.7,2.6,3.1,2.9,5.3,2.9,3.9,2.1,5,1.8.3,1.6-2.1,1.8,1.1,2.6,4,.6,3.6,3.1,4.4.8-1.3,3.9.3,3.6,2.3,3.4,5.2.8,3.4.3,2.9,1.1,1,1.3.5,2.4-1,1.5-1.6,3.9-.2,3.1-1.5,2.7-3.2-.5-1.9-.3-2.4.6-1.9-.3-1.9,2.4-1.3.3-3.4-.6-1.8-.5-12-1.3-7.6L777,508l-3.6-5.8-2.6-5.3-2.9-2.9-2.9-7.4.7-1.4,1.1-1.3-1.6-2.9-4-3.7-4.8-5.5-3.7-6.3-5.3-9.4-3.7-9.7-2.3-7.3Zm17.7,132.7,2.4-.6,1.3-.2,1.5-2.3,2.3-1.6,1.3.5,1.7.3.4,1.1-3.5,1.2-4.2,1.5-2.3,1.2Zm13.5-5,1.2,1.1,2.7-2.1,5.3-4.2,3.7-3.9,2.5-6.6,1-1.7.2-3.4-.7.5-1,2.8-1.5,4.6-3.2,5.3-4.4,4.2-3.4,1.9Z"></path>
                                <path id="GA" class="red2 tooltip" title="GA" d="M736.2,437.8l-5.6-.7-1.4,1.6,1.6,4.7-.3,3.9-2.2-.6-.2-3h-5.2l-5.3.7-32.3,1.9-7.7-.3-1.4-1.2-2.5-4.3-.8-3.3-1.6-.9-.5-.5.9-2.2-.4-5.5-1.6-4.5.8-4.9,1.7-4.8-.2-2.5-1.9-.7-.4-3.2-2.8-3.5-1.9-6.2-1.5-7-1.7-4.8L658,370l-3.5-8-.8-5.3.1-2.3,3.3-.3,13.6-1.6,18.6-2,6.3-1.1.5,1.4-2.2.9-.9,2.2.4,2,1.4,1.6,4.3,2.7,3.2-.1,3.2,4.7.6,1.6,2.3,2.8.5,1.7,4.7,1.8,3,2.2,2.3,3,2.3,1.3,2,1.8,1.4,2.7,2.1,1.9,4.1,1.8,2.7,6,1.7,5.1,2.8.7,2.1,1.9,2,5.7,2.9,1.6,1.7-.8.4,1.2-3.3,6.2.5,2.6-1.5,4.2-2.3,10,.8,6.3Z"></path>
                                <path id="IA" class="red tooltip" title="IA" d="M542.8,177.2l2.1,2.1.3.7-2,3,.3,4,2.6,4.1,3.1,1.6,2.4.3.9,1.8.2,2.4,2.5,1,.9,1.1.5,1.6,3.8,3.3.6,1.9-.7,3-1.7,3.7-.6,2.4-2.1,1.6-1.6.5-5.7,1.5-1.6,4.8.8,1.8,1.7,1.5-.2,3.5-1.9,1.4-.7,1.8V236l-1.4.4-1.7,1.4-.5,1.7.4,1.7-1.3,1-2.3-2.7-1.4-2.8-8.3.8-10,.6L471,239.3l-1.6-4.3-.4-6.7-1.4-4.2-.7-5.2-2.2-3.7-1-4.6-2.7-7.8-1.1-5.6-1.4-1.9-1.3-2.9,1.7-3.8,1.2-6.1-2.7-2.2-.3-2.4.7-2.4,1.8-.3,61.1-.6,21.2-.7Z"></path>
                                <path id="ID" class="red tooltip" title="ID" d="M161.3,21.23,156.5,38.6,152,59.5l-3.4,16.22-.4,9.67,1.2,4.44,3.5,2.66-.2,3.91-3.9,4.4-4.5,6.6-.9,2.9-1.2,1.1-1.8.8-4.3,5.3-.4,3.1-.4,1.1.6,1,2.6-.1,1.1,2.3-2.4,5.8-1.2,4.2-8.8,35.3,20.7,4.5,39.5,7.9,34.8,6.1,4.9-29.2,3.8-24.1-2.7-2.4-.4-2.6-.8-1.1-2.1,1-.7,2.6-3.2.5-3.9-1.6-3.8.1-2.5.7-3.4-1.5-2.4.2-2.4,2-2-1.1-.7-4,.7-2.9-2.5-2.9-3.3-2.6-2.7-13.1L192,102l-.3-.1-.2.4-5.1,3.5-1.7-.2-2.9-3.4-.2-3.1,7-17.13-.4-2-3.4-1.15-.6-1.18-2.6-3.46L177,64l-3.2-1.53-2-4.95,1.3-4.63-3.2-7.58,4.4-21.52Z"></path>
                                <path id="IL" class="red tooltip" title="IL" d="M604.7,207.9l-.8-2.6-1.3-3.7-1.6-1.8-1.5-2.6-.4-5.5-15.9,1.8-17.4,1H553.5l.2,2.1,2.2.9,1.1,1.4.4,1.4,3.9,3.4.7,2.4-.7,3.3-1.7,3.7-.8,2.7-2.4,1.9-1.9.6-5.2,1.3-1.3,4.1.6,1.1,1.9,1.8-.2,4.3-2.1,1.6-.5,1.3v2.8l-1.8.6-1.4,1.2-.4,1.2.4,2-1.6,1.3-.9,2.8.3,3.9,2.3,7,7,7.6,5.7,3.7v4.4l.7,1.2,6.6.6,2.7,1.4-.7,3.5-2.2,6.2-.8,3,2,3.7,6.4,5.3,4.8.8,2.2,5.1,2,3.4-.9,2.8,1.5,3.8,1.7,2.1,1.6-.3,1-2.2,2.4-1.7,2.8-1,6.1,2.5.5-.2v-1.1l-1.2-2.7.4-2.8,2.4-1.6,3.4-1.2-.5-1.3-.8-2,1.2-1.3,1-2.7v-4l.4-4.9,2.5-3,1.8-3.8,2.5-4-.5-5.3-1.8-3.2-.3-3.3.8-5.3-.7-7.2-1.1-15.8-1.4-15.3-.9-11.7Z"></path>
                                <path id="IN" class="red2 tooltip" title="IN" d="M608.9,209.7l1.5,1,1.1-.3,2.1-1.9,2.5-1.8,14.3-1.1,18.4-1.8,1.6,15.5,4.9,42.6-.6,2.9,1.3,1.6.2,1.3-2.3,1.6-3.6,1.7-3.2.4-.5,4.8-4.7,3.6-2.9,4,.2,2.4-.5,1.4h-3.5l-1.4-1.7-5.2,3,.2,3.1-.9.2-.5-.9-2.4-1.7-3.6,1.5L620,294l-1.2-.6-1.6-1.8-4.4.5-5.7,1-2.5,1.3v-2.6l.4-4.7,2.3-2.9,1.8-3.9,2.7-4.2-.5-5.8-1.8-3.1-.3-3.2.8-5.3-.7-7.1-.9-12.6-2.5-30.1Z"></path>
                                <path id="KS" class="red tooltip" title="KS" d="M471.9,253.1l-43.8-.6-40.6-1.2-21.7-.9-4.3,64.8,24.3,1,44.7,2.1,46.3.6,12.6-.3.7-35-1.2-11.1-2.5-2-2.4-3-2.3-3.6.6-3,1.7-1.4v-2.1l-.8-.7-2.6-.2-3.5-3.4Z"></path>
                                <path id="KY" class="red2 tooltip" title="KY" d="M593.2,325.4l12.6-.7.1-4.1h4.3l30.4-3.2,45.1-4.3,5.6-3.6,3.9-2.1.1-1.9,6-7.8,4.1-3.6,2.1-2.4-3.3-2-2.5-2.7-3-3.8-.5-2.2-2.6-1.4-.9-1.9-.2-6.1-2.6-2-1.9-1.1-.5-2.3-1.3.2-2,1.2-2.5,2.7-1.9-1.7-2.5-.5-2.4,1.4h-2.3l-1.8-2-5.6-.1-1.8-4.5-2.9-1.5-2.1.8-4.2.2-.5,2.1,1.2,1.5.3,2.1-2.8,2-3.8,1.8-2.6.4-.5,4.5-4.9,3.6-2.6,3.7.2,2.2-.9,2.3-4.5-.1-1.3-1.3-3.9,2.2.2,3.3-2.4.6-.8-1.4-1.7-1.2-2.7,1.1-1.8,3.5-2.2-1-1.4-1.6-3.7.4-5.6,1-2.8,1.3-1.2,3.4-1,1,1.5,3.7-4.2,1.4-1.9,1.4-.4,2.2,1.2,2.4v2.2l-1.6.4L591,311l-2.3.9-2,1.4-.8,1.8,1.7,2.4-.9,1.8-.1,3.3-2.4,1.3-2.1,1.7Z"></path>
                                <path id="LA" class="red tooltip" title="LA" d="M512.9,479.5l8.1-.3,10.3,3.6,6.5,1.1,3.7-1.5,3.2,1.1,3.2,1,.8-2.1-3.2-1.1-2.6.5-2.7-1.6.8-1.5,3.1-1,1.8,1.5,1.8-1,3.2.6,1.5,2.4.3,2.3,4.5.3,1.8,1.8-.8,1.6-1.3.8,1.6,1.6,8.4,3.6,3.6-1.3,1-2.4,2.6-.6,1.8-1.5,1.3,1,.8,2.9-2.3.8.6.6,3.4-1.3L582,488l.8-.5-2.1-.3.8-1.6-.2-1.5,2.1-.5,1.1-1.3.6.8.6,3.1,4.2.6,4,1.9,1,1.5h2.9l1.1,1,2.3-3.1v-1.5h-1.3l-3.4-2.7-5.8-.8-3.2-2.3,1.1-2.7,2.3.3.2-.6-1.8-1v-.5h3.2l1.8-3.1-1.3-1.9-.3-2.7-1.5.2-1.9,2.1-.6,2.6-3.1-.6-1-1.8,1.8-1.9,1.9-1.7-2.2-6.5-3.4-3.4,1-7.3-.2-.5-1.3.2-33.1,1.4-.8-2.4.8-8.5,8.6-14.8-.9-2.6,1.4-.4.4-2-2.2-2,.1-1.9-2-4.5-.4-5.1.1-.7-26.4.8-25.2.1.4,9.7.7,9.5.5,3.7,2.6,4.5.9,4.4,4.3,6,.3,3.1.6.8-.7,8.3-2.8,4.6,1.2,2.4-.5,2.6-.8,7.3-1.3,3,.2,3.7Z"></path>
                                <path id="MA" class="red3 tooltip" title="MA" d="M873.5,166.1l-.5-2.3.8-1.5,2.9-1.5.8,3.1-.5,1.8-2.4,1.5v1l1.9-1.5,3.9-4.5,3.9-1.9,4.2-1.5-.3-2.4-1-2.9-1.9-2.4-1.8-.8-2.1.2-.5.5,1,1.3,1.5-.8,2.1,1.6.8,2.7-1.8,1.8-2.3,1-3.6-.5-3.9-6-2.3-2.6h-1.8l-1.1.8-1.9-2.6.3-1.5,2.4-5.2-2.9-4.4-3.7,1.8-1.8,2.9L843.6,146l-13.8,2.5-.6,10.6.7,4.9,22-4.8,11.2-2.8,2,1.6,3.4,4.3,2.9,4.7Zm12.5,1.4,2.2-.7.5-1.7,1,.1,1,2.3-1.3.5-3.9.1Zm-9.4.8,2.3-2.6h1.6l1.8,1.5-2.4,1-2.2,1Z"></path>
                                <path id="MD" class="red3 tooltip" title="MD" d="M820.8,257.7l1.7-3.8.5-4.8-6.3,1.1-5.8.3-3.8-16.8-2.3-5.5-1.5-4.6-22.2,4.3-37.6,7.6,2,10.4,4.8-4.9,2.5-.7,1.4-1.5,1.8-2.7,1.6.7,2.6-.2,2.6-2.1,2-1.5,2.1-.6,1.5,1.1,2.7,1.4,1.9,1.8,1.3,1.4,4.8,1.6-.6,2.9,5.8,2.1,2.1-2.6,3.7,2.5-2.1,3.3-.7,3.3-1.8,2.6v2.1l.3.8,2,1.3,3.4,1.1,4.3-.1,3.1,1,2.1.3,1-2.1-1.5-2.1v-1.8l-2.4-2.1-2.1-5.5,1.3-5.3-.2-2.1-1.3-1.3s1.5-1.6,1.5-2.3a10.71,10.71,0,0,1,.5-2.1l1.9-1.3,1.9-1.6.5,1-1.5,1.6L799,237l.3,1.1,1.8.3.5,5.5-2.1,1,.3,3.6.5-.2,1.1-1.9,1.6,1.8-1.6,1.3-.3,3.4,2.6,3.4,3.9.5,1.6-.8,3.2,4.2,1,.4Zm-14.5.2,1.1,2.5.2,1.8,1.1,1.9s.9-.9.9-1.2-.7-3.1-.7-3.1l-.7-2.3Z"></path>
                                <path id="ME" class="red3 tooltip" title="ME" d="M851.8,85.5l1.5.4V83.3l.8-5.5,2.6-4.7,1.5-4-1.9-2.4v-6l.8-1,.8-2.7-.2-1.5-.2-4.8,1.8-4.8,2.9-8.9,2.1-4.2h1.3l1.3.2v1.1l1.3,2.3,2.7.6.8-.8v-1l4-2.9,1.8-1.8,1.5.2,6,2.4,1.9,1L896,64h6l.8,1.9.2,4.8,2.9,2.3h.8l.2-.5-.5-1.1,2.8-.5,1.9,2.1,2.3,3.7v1.9l-2.1,4.7-1.9.6L906,87l-4.8,5.5h-1.3c-.6,0-1-2.1-1-2.1l-1.8.2-1,1.5-2.4,1.5-1,1.5,1.6,1.5-.5.6-.5,2.7-1.9-.2V98.1l-.3-1.3-1.5.3-1.8-3.2-2.1,1.3,1.3,1.5.3,1.1-.8,1.3.3,3.1.2,1.6-1.6,2.6-2.9.5-.3,2.9-5.3,3.1-1.3.5-1.6-1.5-3.1,3.6,1,3.2-1.5,1.3-.2,4.4-1.1,6.3-2.2-.9-.5-3.1-4-1.1-.2-2.5L850.5,85.67Zm36.5,15.6,1.5-1.5,1.4,1.1.6,2.4-1.7.9Zm6.7-5.9,1.8,1.9s1.3.1,1.3-.2.2-2,.2-2l.9-.8-.8-1.8-2,.7Z"></path>
                                <path id="MI" class="red2 tooltip" title="MI" d="M630.5,204.6l19.1-1.9.2,1.1,9.9-1.5,12-1.7.1-.6.2-1.5,2.1-3.7,2-1.7-.2-5.1,1.6-1.6,1.1-.3.2-3.6,1.5-3,1.1.6.2.6.8.2,1.9-1-.4-9.1-3.2-8.2-2.3-9.1-2.4-3.2-2.6-1.8-1.6,1.1-3.9,1.8-1.9,5-2.7,3.7-1.1.6-1.5-.6s-2.6-1.5-2.4-2.1.5-5,.5-5l3.4-1.3.8-3.4.6-2.6,2.4-1.6-.3-10-1.6-2.3-1.3-.8-.8-2.1.8-.8,1.6.3.2-1.6-2.6-2.2-1.3-2.6h-2.6l-4.5-1.5-5.5-3.4h-2.7l-.6.6-1-.5-3.1-2.3-2.9,1.8-2.9,2.3.3,3.6,1,.3,2.1.5.5.8-2.6.8-2.6.3-1.5,1.8-.3,2.1.3,1.6.3,5.5-3.6,2.1-.6-.2V134l1.3-2.4.6-2.4-.8-.8-1.9.8-1,4.2-2.7,1.1-1.8,1.9-.2,1,.6.8-.6,2.6-2.3.5v1.1l.8,2.4-1.1,6.1-1.6,4,.6,4.7.5,1.1-.8,2.4-.3.8-.3,2.7,3.6,6,2.9,6.5,1.5,4.8-.8,4.7-1,6-2.4,5.2-.3,2.7-3.2,3.1Zm-33.3-72.4-1.3-1.1-1.8-10.4-3.7-1.3-1.7-2.3-12.6-2.8-2.8-1.1-8.1-2.2-7.8-1-3.9-5.3.7-.5,2.7-.8,3.6-2.3v-1l.6-.6,6-1,2.4-1.9,4.4-2.1.2-1.3,1.9-2.9,1.8-.8,1.3-1.8,2.3-2.3,4.4-2.4,4.7-.5,1.1,1.1-.3,1-3.7,1-1.5,3.1-2.3.8-.5,2.4-2.4,3.2-.3,2.6.8.5,1-1.1,3.6-2.9,1.3,1.3h2.3l3.2,1,1.5,1.1,1.5,3.1,2.7,2.7,3.9-.2,1.5-1,1.6,1.3,1.6.5,1.3-.8h1.1l1.6-1,4-3.6,3.4-1.1,6.6-.3,4.5-1.9,2.6-1.3,1.5.2v5.7l.5.3,2.9.8,1.9-.5,6.1-1.6,1.1-1.1,1.5.5v7l3.2,3.1,1.3.6,1.3,1-1.3.3-.8-.3-3.7-.5-2.1.6-2.3-.2-3.2,1.5h-1.8l-5.8-1.3-5.2.2-1.9,2.6-7,.6-2.4.8-1.1,3.1-1.3,1.1-.5-.2-1.5-1.6-4.5,2.4h-.6l-1.1-1.6-.8.2-1.9,4.4-1,4-3.2,6.9ZM567.6,75.7l1.8-2.1,2.2-.8,5.4-3.9,2.3-.6.5.5-5.1,5.1-3.3,1.9-2.1.9Zm86.2,32.1.6,2.5,3.2.2,1.3-1.2s-.1-1.5-.4-1.6a19.37,19.37,0,0,1-1.6-1.9l-2.2.2-1.6.2-.3,1.1Z"></path>
                                <path id="MN" class="red tooltip" title="MN" d="M450.6,60.39,450,64.3V74.6l1.6,5,1.9,3.32.5,9.93,1.8,13.45,1.8,7.3.4,6.4v5.3l-1.6,1.8-1.8,1.3v1.5l.9,1.7,4.1,3.5.7,3.2v35.9l60.3-.6,21.2-.7-.5-6-1.8-2.1-7.2-4.6-3.6-5.3-3.4-.9-2-2.8h-3.2l-3.5-3.8-.5-7,.1-3.9,1.5-3-.7-2.7-2.8-3.1,2.2-6.1,5.4-4,1.2-1.4-.2-8,.2-3,2.6-3,3.8-2.9,1.3-.2,4.5-5,1.8-.8,2.3-3.9,2.4-3.6,3.1-2.6,4.8-2,9.2-4.1,3.9-1.8.6-2.3-4.4.4-.7,1.1h-.6l-1.8-3.1-8.9.3-1,.8h-1l-.5-1.3-.8-1.8-2.6.5-3.2,3.2-1.6.8h-3.1l-2.6-1V70.8l-1.3-.2-.5.5-2.6-1.3-.5-2.9-1.5.5-.5,1-2.4-.5-5.3-2.4L512,62.9h-2.9l-1.3-1-2.3.6-1.1,1.1-.3,1.3h-4.8V62.8l-6.3-.3-.3-1.5h-4.8l-1.6-1.6-1.5-6.1-.8-5.5-1.9-.8-2.3-.5-.6.2-.3,8.2H448.8Z"></path>
                                <path id="MO" class="red tooltip" title="MO" d="M579.1,332.3l.5-5.9,4.2-3.4,1.9-1v-2.9l.7-1.6-1.1-1.6-2.4.3-2.1-2.5-1.7-4.5.9-2.6-2-3.2-1.8-4.6-4.6-.7-6.8-5.6-2.2-4.2.8-3.3,2.2-6,.6-3-1.9-1-6.9-.6-1.1-1.9v-4.1l-5.3-3.5-7.2-7.8-2.3-7.3-.5-4.2.7-2.4-2.6-3.1-1.2-2.4-7.7.8-10,.6-48.8,1.2,1.3,2.6-.1,2.2,2.3,3.6,3,3.9,3.1,3,2.6.2,1.4,1.1v2.9l-1.8,1.6-.5,2.3,2.1,3.2,2.4,3,2.6,2.1,1.3,11.6-.8,40,.5,5.7,23.7-.2,23.3-.7,32.5-1.3,2.2,3.7-.8,3.1-3.1,2.5-.5,1.8,5.2.5,4.1-1.1Z"></path>
                                <path id="MS" class="red tooltip" title="MS" d="M590.3,466.1l2.6-4.2,1.8.8,6.8-1.9,2.1.3,1.5.8h5.2l.4-1.6L609,445.5l-2.8-19,1-45.1-.2-16.7.2-6.3-4.8.3-19.6,1.6-13,.4-.2,3.2-2.8,1.3-2.6,5.1.5,1.6.1,2.4-2.9,1.1-3.5,5.1.8,2.3-3,2.5-1,5.7-.6,1.9,1.6,2.5-1.5,1.4,1.5,2.8.3,4.2-1.2,2.5-.2.9.4,5,2,4.5-.1,1.7,2.3,2-.7,3.1-.9.3.6,1.9-8.6,15-.8,8.2.5,1.5,24.2-.7,8.2-.7,1.9-.3.6,1.4-1,7.1,3.3,3.3,2.2,6.4Z"></path>
                                <path id="MT" class="red tooltip" title="MT" d="M347.1,64.37l-5.3,57.13-1.3,15.2-59.1-6.6-49-7.1L231,134.2l-1.9-1.7-.4-2.5-1.3-1.9-3.3,1.5-.7,2.5-2.3.3-3.8-1.6-4.1.1-2.4.7-3.2-1.5-3,.2-2.1,1.9-.9-.6-.7-3.4.7-3.2-2.7-3.2-3.3-2.5-2.5-12.6-.1-5.3-1.6-.8-.6,1-4.5,3.2-1.2-.1-2.3-2.8-.2-2.8,7-17.15-.6-2.67-3.5-1.12-.4-.91-2.7-3.5-4.6-10.41-3.2-1.58-1.8-4.26,1.3-4.63-3.2-7.57L175.3,24,208,30.9l18.4,3.4,32.3,5.3,29.3,4,29.2,3.5L348,50.17Z"></path>
                                <path id="NC" class="red2 tooltip" title="NC" d="M772.7,351.3,760,343.6l-3.1-.8-16.6,2.1-1.6-3-2.8-2.2-16.7.5-7.4.9-9.2,4.5-6.8,2.7-6.5,1.2-13.4,1.4.1-4.1,1.7-1.3,2.7-.7.7-3.8,3.9-2.5,3.9-1.5,4.5-3.7,4.4-2.3.7-3.2,4.1-3.8.7,1,2.5.2,2.4-3.6,1.7-.4,2.6.3,1.8-4,2.5-2.4.5-1.8.1-3.5,4.4.1,38.5-5.6L817.8,292l2,4.8,3.6,6.5,2.4,2.4.6,2.3-2.4.2.8.6-.3,4.2-2.6,1.3-.6,2.1-1.3,2.9-3.7,1.6-2.4-.3-1.5-.2-1.6-1.3.3,1.3v1H813l.8,1.3-1.9,6.3h4.2l.6,1.6,2.3-2.3,1.3-.5-1.9,3.6-3.1,4.8H814l-1.1-.5-2.7.6-5.2,2.4-6.5,5.3-3.4,4.7-1.9,6.5-.5,2.4-4.7.5-5.1,1.5ZM822,325.1l2.6-2.5,3.2-2.6,1.5-.6.2-2-.6-6.1-1.5-2.3-.6-1.9.7-.2,2.7,5.5.4,4.4-.2,3.4-3.4,1.5-2.8,2.4-1.1,1.2Z"></path>
                                <path id="ND" class="red tooltip" title="ND" d="M457,120l-.4-6.2-1.8-7.3L453,92.89l-.5-9.7L450.6,80,449,74.69V64.28l.6-3.85-1.8-5.54-28.6-.59-18.6-.6-26.5-1.3-25.2-2.16L348,64.66l-4.7,50.94,56.8,3.9,56.9,1.7Z"></path>
                                <path id="NE" class="red tooltip" title="NE" d="M456.3,197.9l-1-2.3-.5-1.6-2.9-1.6-4.8-1.5-2.2-1.2-2.6.1-3.7.4-4.2,1.2-6-4.1-2.2-2-10.7.6L374,183.5l-35.6-2.2L334.1,225l33.1,3.3-1.4,21.1,21.7,1,40.6,1.2,43.8.6h4.5l-2.2-3-2.6-3.9.1-2.3-1.4-2.7-1.9-5.2-.4-6.7-1.4-4.1-.5-5-2.3-3.7-1-4.7L460,203l-1-5.3Z"></path>
                                <path id="NH" class="red3 tooltip" title="NH" d="M867.7,134.9l1.1-3.2-2.7-1.2-.5-3.1-4.1-1.1-.3-3L849.5,85.82l-.7.08-.6,1.6-.6-.5-1-1-1.5,1.9-.2,2.29.5,8.41,1.9,2.8v4.3l-3.9,4.8-2.4.9v.7l1.1,1.9v8.6l-.8,9.2-.2,4.7,1,1.4-.2,4.7-.5,1.5,1,1.1,5.1-1.2,13.8-3.5,1.7-2.9,4-1.9Z"></path>
                                <path id="NJ" class="red3 tooltip" title="NJ" d="M809.7,221.9l.1-1.5,2.7-1.3,1.7-2.8,1.7-2.4,3.3-3.2v-1.2l-6.1-4.1-1-2.7-2.7-.3-.1-.9-.7-2.2,2.2-1.1.2-2.9-1.3-1.3.2-1.2,1.9-3.1v-3.1l2.5-3.1,5.6,2.5,6.4,1.9,2.5,1.2.1,1.8-.5,2.7.4,4.5-2.1,1.9-1.1,1,.5.5,2.7-.3,1.1-.8,1.6,3.4.2,9.4.6,1.1-1.1,5.5-3.1,6.5-2.7,4-.8,4.8-2.1,2.4h-.8l-.3-2.7.8-1-.2-1.5-4-.6-4.8-2.3-3.2-2.9-1-2Z"></path>
                                <path id="NM" class="red tooltip" title="NM" d="M256.2,423l-16.7-2.6-1.2,9.6-15.8-2,6-39.7,7-53.2,4.4-30.9,34,3.9,37.4,4.4,32,2.8-.3,10.8-1.4-.1-7.4,97.7-28.4-1.8-38.1-3.7.7,6.3Z"></path>
                                <path id="NV" class="red tooltip" title="NV" d="M109.1,167.2l38.7,8.5,26,5.2L163.2,234l-5.4,29.8-3.3,15.5-2.1,11.1-2.6,16.4-1.7,3.1-1.6-.1-1.2-2.6-2.8-.5-1.3-1.1-1.8.1-.9.8-1.8,1.3-.3,7.3-.3,1.5-.5,12.4-1.1,1.8-16.7-25.5L75.7,243.2l-12.43-19,8.55-32.6,8-31.3Z"></path>
                                <path id="NY" class="red3 tooltip" title="NY" d="M829.4,193.6l.5-2.7-.2-2.4-3-1.5-6.5-2-6-2.6-.6-.4-2.7-.3-2-1.5-2.1-5.9-3.3-.5-2.4-2.4-38.4,8.1-31.6,6-.5-6.5,1.6-1.2,1.3-1.1,1-1.6,1.8-1.1,1.9-1.8.5-1.6,2.1-2.7,1.1-1-.2-1-1.3-3.1-1.8-.2-1.9-6.1,2.9-1.8,4.4-1.5,4-1.3,3.2-.5,6.3-.2,1.9,1.3,1.6.2,2.1-1.3,2.6-1.1,5.2-.5L773,148l1.8-3.2,1.6-1.9h2.1l1.9-1.1.2-2.3-1.5-2.1-.3-1.5,1.1-2.1v-1.5h-1.8l-1.8-.8-.8-1.1-.2-2.6,5.8-5.5.6-.8,1.5-2.9,2.9-4.5,2.7-3.7,2.1-2.4,2.4-1.8,3.1-1.2,5.5-1.3,3.2.2,4.5-1.5,7.4-2.2.7,4.9,2.4,6.5.8,5-1,4.2,2.6,4.5.8,2-.9,3.2,3.7,1.7,2.7,10.2v5.8l-.6,10.9.8,5.4.7,3.6,1.5,7.3v8.1l-1.1,2.3,2.1,2.7.5.9-1.9,1.8.3,1.3,1.3-.3,1.5-1.3,2.3-2.6,1.1-.6,1.6.6,2.3.2,7.9-3.9,2.9-2.7,1.3-1.5,4.2,1.6-3.4,3.6-3.9,2.9-7.1,5.3-2.6,1-5.8,1.9-4,1.1-1-.4Z"></path>
                                <path id="OH" class="red2 tooltip" title="OH" d="M649.8,204.8l1.7,15.5,4.8,41.1,3.9-.2,2.3-.8,3.6,1.8,1.7,4.2,5.4.1,1.8,2h1.7l2.4-1.4,3.1.5,1.5,1.3,1.8-2,2.3-1.4,2.4-.4.6,2.7,1.6,1,2.6,2,.8.2,2-.1,1.2-.6v-2.1l1.7-1.5.1-4.8,1.1-4.2,1.9-1.3,1,.7,1,1.1.7.2.4-.4-.9-2.7v-2.2l1.1-1.4,2.5-3.6,1.3-1.5,2.2.5,2.1-1.5,3-3.3,2.2-3.7.2-5.4.5-5v-4.6l-1.2-3.2,1.2-1.8,1.3-1.2-.6-2.8L717.5,189l-6.2,3.7-3.9,2.3-3.4,3.7-4,3.9-3.2.8-2.9.5-5.5,2.6-2.1.2-3.4-3.1-5.2.6-2.6-1.5-2.2-1.3Z"></path>
                                <path id="OK" class="red tooltip" title="OK" d="M397.9,328.5l-1.8,24.3-.9,18,.2,1.6,4,3.6,1.7.9h.9l.9-2.1,1.5,1.9,1.6.1.3-.2.2-1.1,2.8,1.4-.4,3.5,3.8.5,2.5,1,4.2.6,2.3,1.6,2.5-1.7,3.5.7,2.2,3.1,1.2.1v2.3l2.1.7,2.5-2.1,1.8.6,2.7.1.7,2.3,4.4,1.8,1.7-.3,1.9-4.2h1.3l1.1,2.1,4.2.8,3.4,1.3,3,.8,1.6-.7.7-2.7h4.5l1.9.9,2.7-1.9h1.4l.6,1.4h3.6l2-1.8,2.3.6,1.7,2.2,3,1.7,3.4.9,1.9,1.2-.3-37.6-1.4-10.9-.1-8.6-1.5-6.6-.6-6.8.1-4.3-12.6.3-46.3-.5-44.7-2.1-41.5-1.8-.4,10.7Z"></path>
                                <path id="OR" class="red tooltip" title="OR" d="M53.44,152.5l28.24,7.2,27.52,6.5,17,3.7,8.8-35.1,1.2-4.4,2.4-5.5-.7-1.3-2.5.1-1.3-1.8.6-1.5.4-3.3,4.7-5.7,1.9-.9.9-.8.7-2.7.8-1.1,3.9-5.7,3.7-4,.2-3.26-3.4-2.49-1.2-4.55-13.1-3.83L118.9,78.6l-14.8.4L103,77.66,97.9,79.5,93.4,79,91,77.44,89.7,78,85,77.69l-2-1.43-4.84-1.77-1.1-.07-4.45-1.27-1.76,1.52-6.26-.24L59.34,70.6l.21-9.28-2-3.5-4.1-.6-.7-2.5-2.4-.5-5.8,2.1-2.3,6.5L39,72.8l-3.2,6.5-5,14.1L24.3,107l-8.1,12.6-1.9,2.9-.8,8.6-1.3,6,2.71,3.5Z"></path>
                                <path id="PA" class="red3 tooltip" title="PA" d="M722.6,185.8l1.3-.5,5.7-5.5.7,6.9,33.5-6.5,36.9-7.8,2.3,2.3,3.1.4,2,5.6,2.4,1.9,2.8.4.1.1-2.6,3.2v3.1l-1.9,3.1-.2,1.9,1.3,1.3-.2,1.9-2.4,1.1,1,3.4.2,1.1,2.8.3.9,2.5,5.9,3.9v.4l-3.1,3-1.5,2.2-1.7,2.8-2.7,1.2-1.4.3-2.1,1.3-1.6,1.4-22.4,4.3L743,234.6,731.7,236l-3.9.7-5.1-22.4-4.3-25.9Z"></path>
                                <path id="RI" class="red3 tooltip" title="RI" d="M859.6,169.3l-.8-4.4-1.6-6,5.7-1.5,1.5,1.3,3.4,4.3,2.8,4.4-2.8,1.4-1.3-.2-1.1,1.8-2.4,1.9-2.8,1.1Z"></path>
                                <path id="SC" class="red2 tooltip" title="SC" d="M745,407.2l-2.1-1-1.9-5.6-2.5-2.3-2.5-.5-1.5-4.6-3-6.5-4.2-1.8-1.9-1.8-1.2-2.6-2.4-2-2.3-1.3-2.2-2.9-3.2-2.4-4.4-1.7-.4-1.4L707,366l-.5-1.5-3.8-5.4-3.4.1-3.9-2.5-1.2-1.2-.2-1.4.6-1.6,2.7-1.3-.8-2,6.4-2.7,9.2-4.5,7.1-.9,16.4-.5,2.3,1.9,1.8,3.5,4.6-.8,12.6-1.5,2.7.8,12.5,7.4,10.1,8.3-5.3,5.4-2.6,6.1-.5,6.3-1.6.8-1.1,2.7-2.4.6-2.1,3.6-2.7,2.7-2.3,3.4-1.6.8-3.6,3.4-2.9.2,1,3.2-5,5.3-2.3,1.6Z"></path>
                                <path id="SD" class="red tooltip" title="SD" d="M457,174.7l-.9,3.2.4,3,2.6,2-1.2,5.4-1.8,4.1,1.5,3.3.7,1.1-1.3.1-.7-1.6-.6-2-3.3-1.8-4.8-1.5-2.5-1.3-2.9.1-3.9.4-3.8,1.2-5.3-3.8-2.7-2.4-10.9.8-41.5-2.4-35.6-2.2,1.5-24.8,2.8-34,.4-5,56.9,3.9,56.9,1.7v2.7l-1.3,1.5-2,1.5-.1,2.2,1.1,2.2,4.1,3.4.5,2.7v35.9Z"></path>
                                <path id="TN" class="red2 tooltip" title="TN" d="M656.8,353.2l-13.1,1.2-23.3,2.2-37.6,2.7-11.8.4.9-.6.9-4.5-1.2-3.6,3.9-2.3.4-2.5,1.2-4.3,3-9.5.5-5.6.3-.2,12.3-.2,13.6-.8.1-3.9,3.5-.1,30.4-3.3,54-5.2,10.3-1.5,7.6-.2,2.4-1.9,1.3.3-.1,3.3-.4,1.6-2.4,2.2-1.6,3.6-2-.4-2.4.9-2.2,3.3-1.4-.2-.8-1.2-1.1.4-4.3,4-.8,3.1-4.2,2.2-4.3,3.6-3.8,1.5-4.4,2.8-.6,3.6-2.5.5-2,1.7-.2,4.8Z"></path>
                                <path id="TX" class="red tooltip" title="TX" d="M268.8,419.2l37,3.6,29.3,1.9,7.4-97.7,54.4,2.4-1.7,23.3-1,18,.2,2,4.4,4.1,2,1.1h1.8l.5-1.2.7.9,2.4.2,1.1-.6V377l1,.5-.4,3.7,4.5.7,2.4.9,4.2.7,2.6,1.8,2.8-1.9,2.7.6,2.2,3.1.8.1v2.1l3.3,1.1,2.5-2.1,1.5.5,2.1.1.6,2.1,5.2,2,2.3-.5,1.9-4h.1l1.1,1.9,4.6.9,3.4,1.3,3.2,1,2.4-1.2.7-2.3h3.6l2.1,1,3-2h.4l.5,1.4h4.7l1.9-1.8,1.3.4,1.7,2.1,3.3,1.9,3.4,1,2.5,1.4,2.7,2,3.1-1.2,2.1.8.7,20,.7,9.5.6,4.1,2.6,4.4.9,4.5,4.2,5.9.3,3.1.6.8-.7,7.7-2.9,4.8,1.3,2.6-.5,2.4-.8,7.2-1.3,3,.3,4.2-5.6,1.6-9.9,4.5-1,1.9-2.6,1.9-2.1,1.5-1.3.8-5.7,5.3-2.7,2.1-5.3,3.2-5.7,2.4-6.3,3.4-1.8,1.5-5.8,3.6-3.4.6-3.9,5.5-4,.3-1,1.9,2.3,1.9-1.5,5.5-1.3,4.5-1.1,3.9-.8,4.5.8,2.4,1.8,7,1,6.1,1.8,2.7-1,1.5-3.1,1.9-5.7-3.9-5.5-1.1-1.3.5-3.2-.6-4.2-3.1-5.2-1.1-7.6-3.4-2.1-3.9-1.3-6.5-3.2-1.9-.6-2.3.6-.6.3-3.4-1.3-.6-.6-1,1.3-4.4-1.6-2.3-3.2-1.3-3.4-4.4-3.6-6.6-4.2-2.6.2-1.9-5.3-12.3-.8-4.2-1.8-1.9-.2-1.5-6-5.3-2.6-3.1v-1.1l-2.6-2.1-6.8-1.1-7.4-.6-3.1-2.3-4.5,1.8-3.6,1.5-2.3,3.2-1,3.7-4.4,6.1-2.4,2.4-2.6-1-1.8-1.1-1.9-.6-3.9-2.3v-.6l-1.8-1.9-5.2-2.1-7.4-7.8-2.3-4.7v-8.1l-3.2-6.5-.5-2.7-1.6-1-1.1-2.1-5-2.1-1.3-1.6-7.1-7.9-1.3-3.2-4.7-2.3-1.5-4.4-2.6-2.9-1.7-.5ZM443.2,560.9l-.6-7.1-2.7-7.2-.6-7,1.5-8.2,3.3-6.9,3.5-5.4,3.2-3.6.6.2-4.8,6.6-4.4,6.5-2,6.6-.3,5.2.9,6.1,2.6,7.2.5,5.2.2,1.5Z"></path>
                                <path id="UT" class="red tooltip" title="UT" d="M214.4,299.5l24.6,3.6,1.9-13.7,7-50.5,2.3-22L218,213.4l2.2-13.1,1.8-10.6-34.7-6.1-12.5-2.5L164.2,234l-5.4,30-3.3,15.4-1.7,9.2Z"></path>
                                <path id="VA" class="red2 tooltip" title="VA" d="M820.7,258.8l-.2,2.8-2.9,3.8-.4,4.6.5,3.4-1.8,5-2.2,1.9-1.5-4.6.4-5.4,1.6-4.2.7-3.3-.1-1.7Zm-60.3,44.6L721.8,309l-4.8-.1-2.2-.3-2.5,1.9-7.3.1-10.3,1.6-6.7.6,4.1-2.6,4.1-2.3v-2.1l5.7-7.3,4.1-3.7,2.2-2.5,3.6,4.3,3.8.9,2.7-1,2-1.5,2.4,1.2,4.6-1.3,1.7-4.4,2.4.7,3.2-2.3,1.6.4,2.8-3.2.2-2.7-.8-1.2,4.8-10.5,1.8-5.2.5-4.7.7-.2,1.1,1.7,1.5,1.2,3.9-.2,1.7-8.1,3-.6.8-2.6,2.8-2.2,1.1-2.1,1.8-4.3.1-4.6,3.6,1.4,6.6,3.1.3-5.2,3.4,1.2-.6,2.9,8.6,3.1,1.4,1.8-.8,3.3-1.3,1.3-.5,1.7.5,2.4,2,1.3,3.9,1.4,2.9,1,4.9.9,2.2,2.1,3.2.4.9,1.2-.4,4.7,1.4,1.1-.5,1.9,1.2.8-.2,1.4-2.7-.1.1,1.6,2.3,1.5.1,1.4,1.8,1.8.5,2.5-2.6,1.4,1.6,1.5,5.8-1.7,3.7,6.2Z"></path>
                                <path id="VT" class="red3 tooltip" title="VT" d="M818.7,104.9l2.4,6.5.8,5.3-1,3.9,2.5,4.4.9,2.3-.7,2.6,3.3,1.5,2.9,10.8v5.3l11.5-2.1-1-1.1.6-1.9.2-4.3-1-1.4.2-4.7.8-9.3v-8.5l-1.1-1.8v-1.6l2.8-1.1,3.5-4.4v-3.6L844.4,99l-.3-5.79L818,100Z"></path>
                                <path id="WA" class="red tooltip" title="WA" d="M60.5,61.3,58.2,57l-4.1-.7-.4-2.4-2.5-.6-2.9-.5-1.8,1-2.3-2.9.3-2.9,2.7-.3,1.6-4-2.6-1.1.2-3.7,4.4-.6-2.7-2.7-1.5-7.1.6-2.9V17.7l-1.8-3.2,2.3-9.4,2.1.5,2.4,2.9,2.7,2.6L58.1,13l4.5,2.1,3.1.6,2.9,1.5,3.4,1,2.3-.2V15.6l1.3-1.1,2.1-1.3.3,1.1.3,1.8-2.3.5-.3,2.1,1.8,1.5,1.1,2.4.6,1.9,1.5-.2.2-1.3-1-1.3-.5-3.2.8-1.8-.6-1.5V12.6L81.4,9,80.3,6.4,77.9,1.6l.3-.8L79.6,0,84,1.5l9.7,2.7,8.6,1.9,20,5.7,23,5.7,15,3.49L155.5,38.6,151,59.38,147.6,75.6l-.4,9.18-12.9-3.72L119,77.6l-14.5.32-1.1-1.53-5.7,2.09-3.9-.42-2.6-1.79-1.7.65-4.15-.25-1.72-1.32L78.47,73.6l-1.18-.16-4.8-1.39L70.57,73.7l-5.65-.25L60.31,70.1ZM70.1,5.9l2-.2.5,1.4,1.5-1.6h2.3L77.2,7,75.7,8.7l.6.8-.7,2-1.4.4s-.9.1-.9-.2a21.64,21.64,0,0,1,1.5-2.6l-1.7-.6L72.8,10l-.7.6L70.6,8.3Z"></path>
                                <path id="WI" class="red tooltip" title="WI" d="M527.4,103.5l2.9.5,2.9-.6,7.4-3.2,2.9-1.9,2.1-.8,1.9,1.5-1.1,1.1-1.9,3.1-.6,1.9,1,.6,1.8-1,1.1-.2,2.7.8.6,1.1,1.1.2.6-1.1,4,5.3L565,112l8.2,2.2,2.6,1.1,12.3,2.6,1.6,2.3,3.6,1.2,1.7,10.2,1.6,1.4,1.5.9-1.1,2.3-1.8,1.6-2.1,4.7-1.3,2.4.2,1.8,1.5.3,1.1-1.9,1.5-.8.8-2.3,1.9-1.8,2.7-4,4.2-6.3.8-.5.3,1-.2,2.3-2.9,6.8-2.7,5.7-.5,3.2-.6,2.6.8,1.3-.2,2.7-1.9,2.4-.5,1.8.6,3.6.6,3.4-1.5,2.6-.8,2.9-1,3.1,1.1,2.4.6,6.1,1.6,4.5-.2,3-15.9,1.8-17.5,1H553l-.7-1.5-2.9-.4-2.6-1.3-2.3-3.7-.3-3.6,2-2.9-.5-1.4-2.1-2.2-.8-3.3-.6-6.8-2.1-2.5-7-4.5-3.8-5.4-3.4-1-2.2-2.8h-3.2l-2.9-3.3-.5-6.5.1-3.8,1.5-3.1-.8-3.2-2.5-2.8,1.8-5.4,5.2-3.8,1.6-1.9-.2-8.1.2-2.8,2.4-2.8Z"></path>
                                <path id="WV" class="red2 tooltip" title=WV d="M744.9,247.9l5.8-6,2.6-.8,1.6-1.5,1.5-2.2,1.1.3,3.1-.2,4.6-3.6,1.5-.5,1.3,1,2.6,1.2,3,3-.4,4.3-5.4-2.6-4.8-1.8-.1,5.9-2.6,5.7-2.9,2.4-.8,2.3-3,.5-1.7,8.1-2.8.2-1.1-1-1.2-2-2.2.5-.5,5.1-1.8,5.1-5,11,.9,1.4-.1,2-2.2,2.5-1.6-.4-3.1,2.3-2.8-.8-1.8,4.9-3.8,1-2.5-1.3-2.5,1.9-2.3.7-3.2-.8-3.8-4.5L705,289l-2.5-2.5-2.9-3.7-.5-2.3-2.8-1.7-.6-1.3-.2-5.6.3.1,2.4-.2,1.8-1v-2.2l1.7-1.5.1-5.2.9-3.6,1.1-.7.4.3,1,1.1,1.7.5,1.1-1.3-1-3.1v-1.6l3.1-4.6,1.2-1.3,2,.5,2.6-1.8,3.1-3.4,2.4-4.1.2-5.6.5-4.8v-4.9l-1.1-3,.9-1.3.8-.7,4.3,19.3,4.3-.8,11.2-1.3Z"></path>
                                <path id="WY" class="red tooltip" title="WY" d="M339,155.5l-1.5,25.4-4.4,44-2.7-.3-83.3-9.1-27.9-3,2-12,6.9-41,3.8-24.2,1.3-11.2,48.2,7,59.1,6.5Z"></path>
                                <g id="DC">
                                    <path id="DC1" class="red2" d="M787.8,247.4l-1.1-1.6-1-.8,1.1-1.6,2.2,1.5Z"></path>
                                    <circle id="DC2" class="red2" cx="787.3" cy="245.4" r="5"></circle>
                                </g>
                                </svg>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        <br>
          <div class="wpb_wrapper">
              <div class="vc_row wpb_row vc_inner vc_row-fluid">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner vc_custom_1498318207858">
                          <div class="wpb_wrapper">
                              <div class="container">
                                  <h2 style="text-align: center" class="vc_custom_heading vc_custom_1498322486044">Interstate Moving</h2>
                                    <p>
                                        <strong>Long Distance Moving</strong> can be a real pain! You have to <strong>move across the country</strong> and your items have to be <strong>safe and Insured</strong>. You probably saw different videos on youtube and some TV programs about terrible Interstate moving experience people had. Here you can learn what Born to Move moving company suggests you avoid all this.
                                    </p>
                                    <p>
                                        First of all, you need to learn about other customers' experiences. Reviews are one of the most important aspects of any service company in our days. What about Born to Move? We have <a href="https://www.yelp.com/biz/born-to-move-brighton" rel="nofollow">great reviews</a> all over the internet on different websites like Yelp and Homeadvisor. After you learn about other people's experiences about Born to Move Long Distance Moving Company you probably want to know how experienced are they? Born to Move moving company is one of the most popular moving companies for <a href="https://www.goborntomove.com/Boston-New-York-Moving-Prices">moving from Boston to New York</a> and <a href="https://www.goborntomove.com/boston-chicago-moving">moving from Boston to Chicago</a>. Our other popular destinations are all east coast up to <a href="https://www.goborntomove.com/boston-to-florida-moving">Florida</a>.
                                    </p>
                                    <h2>Your long-distance moving company</h2>
                                    <p>
                                        Are you actively searching on the internet for affordable long distance movers? Born to move can move you <strong>from Boston to anywhere in the United States</strong>. Born to Move movers offer not only a <strong>great service</strong> but also <a href="https://www.goborntomove.com/prices">affordable prices</a>, with our moving company all your belongings will make it safe to your new home at the destination. Our company <strong>Fully Licensed Insured</strong>! We offer Flat Rate and we wont charge you extra dollars because we keep our promises on a professional moving level. We will take your inventory list and based on that we will give you a <strong>FLAT RATE</strong> which won't change for your move. If you are moving cross country to <a href="https://www.goborntomove.com/boston-california-moving">California, Los Angeles</a> or to New York we will go the extra mile for you to deliver your belongings at your desired point.
                                    </p>
                                    <p>
                                        Born to Move is a <strong>professional long distance</strong> team family <strong>movers</strong>. We know what we are doing, because you can give us not just your furniture but your memories. Movers know how to get in every City and a state or US. We are <strong>fully prepared</strong> for any challenges the road will throw at us such as snow storms or sunny days in a desert. We are ready to make your next move stress free and efficient.
                                    </p>
                                    <h2>Never been more pleasant with our company</h2>
                                    <p>
                                        No job for us too small or too big we will move you anywhere in our lovely country.
Any type of job we can accomodate depending on a distance we can deliver items to you at the same day or in 5 days such as Moving to  California.Born to Move is Fully licensed and insured and carries a <a href="https://www.fmcsa.dot.gov/" rel="nofollow">US department of transportation license</a>.
                                    </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
         </div>
         <br/>
         <div class="container">
             <h2>Born to Move provides moving services in other cities</h2>
             <br/>
            <div class="row text-center">
                <div class="col-md-2"><div style="font-size:22px;font-weight:600;border: 2px solid #ff515e;padding: 10px;border-radius: 50px;"><a href="/movers-new-york-city">New York City</a></div></div>
                <div class="col-md-2"><div style="font-size:22px;font-weight:600;border: 2px solid #ff515e;padding: 10px;border-radius: 50px;"><a href="/movers-washington-dc">Washington DC</a></div></div>
                <div class="col-md-2"><div style="font-size:22px;font-weight:600;border: 2px solid #ff515e;padding: 10px;border-radius: 50px;"><a href="/movers-philadelphia">Philadelphia</a></div></div>
                <div class="col-md-2"><div style="font-size:22px;font-weight:600;border: 2px solid #ff515e;padding: 10px;border-radius: 50px;"><a href="/movers-nashville">Nashville</a></div></div>
                <div class="col-md-2"><div style="font-size:22px;font-weight:600;border: 2px solid #ff515e;padding: 10px;border-radius: 50px;"><a href="/movers-atlanta">Atlanta</a></div></div>
                <div class="col-md-2"><div style="font-size:22px;font-weight:600;border: 2px solid #ff515e;padding: 10px;border-radius: 50px;"><a href="/movers-miami">Miami</a></div></div>
            </div>
         </div>
    </section>
    <br/>
    <br/>
    <section class="section" style="background-color:#f7f7f7;">
            <div class="container">
                <h2 style="font-size: 24px;line-height: 1;text-align: center" class="vc_custom_heading section-heading vc_custom_1498398971266">FAQ about Long Distance Moving
                </h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" itemscope itemtype="https://schema.org/FAQPage">
                            <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <button id="accordion-button-1" aria-expanded="false">
                                    <span class="accordion-title" itemprop="name">How much does the average long-ditance move cost?</span>
                                    <span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content" itemscope itemprop="acceptedAnswer"
                                            itemtype="https://schema.org/Answer">
                                    <p itemprop="text">
                                        Long Distance moving price depends on the distance you are moving.
                                        For example moving from Boston to New York with Born to Move movers is $1200 for a small move.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <button id="accordion-button-2" aria-expanded="false">
                                    <span class="accordion-title" itemprop="name">What is included in the rate?</span>
                                    <span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content" itemscope itemprop="acceptedAnswer"
                                            itemtype="https://schema.org/Answer">
                                    <p itemprop="text">
                                        Born to Move moving company provides a flat rate for your long-distance move.
                                        We include all the charges into the flat rate.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <button id="accordion-button-3" aria-expanded="false">
                                    <span class="accordion-title" itemprop="name">Should i hire movers to do packing for a Long Distance move?</span>
                                    <span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content" itemscope itemprop="acceptedAnswer"
                                            itemtype="https://schema.org/Answer">
                                    <p itemprop="text">
                                        Moving Long Distance requires extra care when packing your items into the boxes that's why
                                        hiring a moving company to <a href="/packing-solution">pack</a> your belongnings is always a great idea.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="float:right;margin-top:15px;">
                    <a href="/faq">View all >></a>
                </div>
            </div>
        </section>
    @include('partials/_testipart')
 </div>
@stop
@section('customjs')
<!-- <script type="text/javascript" src="/js/tooltipster.bundle.min.js"></script> -->
<!-- <script>
    jQuery(document).ready(function() {
        jQuery('.tooltip').tooltipster({
        theme: 'tooltipster-punk',
        contentAsHTML: true
        });
    });
</script> -->
@stop
