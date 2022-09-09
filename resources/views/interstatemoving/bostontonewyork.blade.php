
@extends('mainl')
@section('extracss')
<style>
.bg-image {
    background-image:url('/images/boston-newyork.jpg');
}
@media only screen and (max-width: 600px) {
.bg-image {
    background-image:url('/images/bostonnycmob.jpg');
}
}
.actions {
    background-image: url('/images/actions.png');
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    width: auto;
    height: 280px;
}
@media only screen and (max-width: 1100px) {
    .actions-all {
        display:none;
    }
}
@media only screen and (min-width: 1920px) {
.actions{
    height:400px;
}
}
@media only screen and (min-width: 2500px) {
.actions{
    height:500px;
}
}
</style>
@stop
@section('content')
<div id="wrapper">
    <header id="header" class="blog-header ">

    </header>
    <section id="single-page" class="section corporate-moving" style="">
        <div class="row single-page-heading ">
            <div class="header-overlay bg-image darkend" style="height: 350px !important; "></div>
            <div class="container">
                        <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Etalon Moving." href="https://goborntomove.com/" class="home"><span property="name">Born to Move</span></a>
                    <meta property="position" content="1">
                </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Services." href="https://goborntomove.com/interstate-moving/" class="post post-page"><span property="name">Interstate moving</span></a>
                    <meta property="position" content="2">
                </span><span class="fa fa-angle-right"></span>
                <span property="itemListElement" typeof="ListItem">
                    <span property="item" typeof="WebPage" title="Boston to NeIntew york Moving" class="post post-page current-item">
                        <span property="name">Boston to NYC Movers</span>
                    </span>
                    <meta property="position" content="3">
                </span>
            </div>
        </div>
                <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{ $seo->h1 }}</h1>
                <span itemprop="priceRange" style="margin-left: 15px; padding: 3px; font-size: 22px; color: rgba(255,81,94, 0.9); font-weight: 500;"><i>from $1100</i></span>
                <div><a href="/get-a-quote" style="margin-left:15px; margin-top:10px;" class="tt_button">Get a Quote</a></div>
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
                                                <h2 style="text-align: left" class="vc_custom_heading vc_custom_1498386870700">Movers from Boston to NYC</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Born to Move provide express <stron>professional moving service from Boston to New York</strong>.
                                                            Our company fully understands all of the nuances of
                                                            <a href="https://www.goborntomove.com/interstate-moving">long-distance moves</a>.
                                                            Boston to NYC movers  are always <strong>fully prepared and ready to go</strong>.
                                                            Each mover that works for our company has a huge will and responsibility.
                                                            We offer a <strong>one-day delivery</strong> option if needed, which will cost in about $300 more
                                                            than original price if you would like to deliver your possessions on a same day from
                                                            Boston to New York, but our typical process is as follows:
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
                                                <h3 style="text-align: left" class="vc_custom_heading vc_custom_1498388172144">Moving process from Boston to New York</h3>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Our best movers from Boston to New York will <strong>pick up</strong> all of your belongings <strong>the day
                                                            before</strong> the actual delivery and store it overnight in our secured parking lot in Newton MA.
                                                            In <strong>Boston</strong> we will schedule your <strong>loading at either 8 am or 1-3 pm</strong> based on your preference.
                                                            We also can deliver your belongings to any part of NYC such as :
                                                            <a href="https://www.goborntomove.com/boston-new-york-moving-prices/manhattan">Manhattan</a>,
                                                            <a href="https://www.goborntomove.com/boston-new-york-moving-prices/brooklyn">Brooklyn</a> or
                                                            <a href="https://www.goborntomove.com/boston-new-york-moving-prices/long-island">Long Island</a>.
                                                            Our moving service has great <a href="https://www.google.com/search?q=born+to+move&rlz=1C1SQJL_enUS800US800&oq=born+to+move&aqs=chrome..69i57j46i39i175i199j69i59j69i60l2j69i61j69i65l2.4110j0j7&sourceid=chrome&ie=UTF-8#lrd=0x89e383662a5a4c9d:0x2b688c43994bef7,1,,,">reviews online</a>.
                                                        </p>
                                                        <p>
                                                            On the <strong>very next day</strong>, Boston to New York movers  will deliver everything between <strong>7am - 9am</strong>,
                                                            depending on your availability  (and yes we start driving at night to avoid all the traffic)
                                                        </p>
                                                        <p>
                                                            Also important to know why we deliver your belongings this way,
                                                            because you need to reserve an elevator( if there is one) on the other end at NYC,
                                                            and better do it at least a week before your moving date.Concierge will give you a
                                                            specific time for the elevator and much better to <strong>start unloading at 9 AM</strong>.
                                                            Our Boston to NY movers fully comply with <a href="https://www.fmcsa.dot.gov/">Depart of transportation regulations</a>.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <div class="swiper gallery">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="/images/long/long-islandmob.jpg" width="260px" height="200" alt="Movers from Boston to New York">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="/images/long/long-islandmob.jpg" width="260px" height="200" alt="Movers from Boston to New York">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="/images/long/long-islandmob.jpg" width="260px" height="200" alt="Movers from Boston to New York">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="/images/long/long-islandmob.jpg" width="260px" height="200" alt="Movers from Boston to New York">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <h3 style="text-align: left" class="vc_custom_heading vc_custom_1498388172144">From New York to Boston Moving Company</h3>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                    <p>
                                                        When you are moving from New York, we offer same day <a href="https://bostontonewyorkmovers.com/">moving service from NYC to Boston</a>.
                                                        Movers come to your place in New York between <strong>7am and 9am</strong> and our New York to Boston
                                                        movers load all your belongings into the truck.
                                                        <strong>After loading</strong> our movers drive to the “Capital of Massachusetts” and <strong>unload everything in the same day</strong>
                                                        (also depends on the size of the move). Driving time between NYC and BOS is around 4 hours not including
                                                        the traffic.Please note that moving truck is going slower on a highway.
                                                    </p>
                                                    </div>
                                                    <div id="mobimg">
                                                        <img src="/images/other/ny.jpg" alt="Movers from Boston to New York" width="100%" style="padding:5px;" />
                                                    </div>
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Our moving company follows a goal to improve service from the “Walking City” to “Empire State”
                                                            because we understand this need. Our New York to Boston movers are driving a lot across
                                                            different states and we understand that NYC as a capital of the financial world and “Bean town”
                                                            as one of the best places for study need a connection between each other. People are moving
                                                            from both places, some of them even a few times during their lives. As an improvement for
                                                            the Boston <strong>to New York moving service</strong>, we try to save time and make your move from Boston to NYC
                                                            <strong>stress-free</strong>, that's why we start driving at night time to avoid all the traffic and take all
                                                            responsibility for your belongings. Our company is <strong>fully licensed, insured</strong> and ready to
                                                            provide <strong>COI upon request</strong>.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="parent" onclick="location.href='/boston-new-york-moving-prices/manhattan';" style="height:150px;">
                                                            <div class="child " style="background-image: url(/images/long/manhattanmob.jpg);">
                                                                <a href="/boston-new-york-moving-prices/manhattan" style="font-size: 28px;">Manhattan
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="parent" onclick="location.href='/boston-new-york-moving-prices/brooklyn';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/images/long/brooklynmob.jpg);">
                                                                <a href="/boston-new-york-moving-prices/brooklyn" style="font-size: 28px;">Brooklyn
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="parent" onclick="location.href='/boston-new-york-moving-prices/long-island';" style="height:150px;">
                                                            <div class="child" style="background-image: url(/images/long/long-islandmob.jpg);">
                                                                <a href="/boston-new-york-moving-prices/long-island" style="font-size: 28px;">Long Island
                                                                    <br />
                                                                    <p style="font-size:15px;">view more</p>
                                                                </a>
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
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1499437231476" id="contactlan">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="kd-calltoaction icon_browser " style="border: 2px solid #ff515e">
                                                    <div class="container">
                                                        <div class="cta-icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                                                        <div class="cta-text">
                                                            <h3>Boston to New York Movers</h3>
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
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 col-xs-12">
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
    <br/>
    <br/>
    <section class="actions-all" style="padding-top:0px;">
    <div class="container">
    <h3 style="text-align:left;">Moving Process</h3>
    </div>
        <div class="container-fluid">

            <a href="get-a-quote">
                <div class="actions">
                </div>
            </a>
            <div class="row text-center">
                <div class="col-md-3">
                    <h3>Call</h3>
                    <p>The Best way to Get a Quote or Book a move with us is simply call and talk about moving details.</p>
                </div>
                <div class="col-md-3">
                    <h3>Pickup</h3>
                    <p>Our team of professional movers cover all your items in blankets then simply load everything into the truck.</p>
                </div>
                <div class="col-md-3">
                    <h3>Driving</h3>
                    <p>While driving to your destination we make sure everything is safe. All the tolls and gas included into the rate</p>
                </div>
                <div class="col-md-3">
                    <h3>Delivery</h3>
                    <p>After we arriving to your destination we simply unloading all your staff and place all the items where you need them.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section" style="">
        <div class="container">
            <h2 style="font-size: 24px;line-height: 1;text-align: center" class="vc_custom_heading section-heading vc_custom_1498398971266">
            FAQ about moving from Boston to New York
            </h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" itemscope itemtype="https://schema.org/FAQPage">
                        @include('blocks.faq')
                    </div>
                </div>
            </div>
            <div style="float:right;margin-top:15px;">
                <a href="/faq">View all >></a>
            </div>
        </div>
    </section>
    {{-- <section class="section">
        <div class="container">
            <h2 style="font-size: 24px;line-height: 1;text-align: center" class="vc_custom_heading section-heading vc_custom_1498398971266">FAQ about moving from Boston to New York</h2>
            <div class="vc_row wpb_row vc_row-fluid container vc_custom_1498398871204 vc_row-has-fill row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1498398950527" itemscope itemtype="https://schema.org/FAQPage">
                        <div class="wpb_wrapper">
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455111-0cc2408f-96b7" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">When my items will be delivered from Boston to New York?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">Usually we will deliver on the same day or next day at 9 AM.
                                            We drive overnight to get your stuff from Boston to New York on the next day.
                                            Why?
                                            building in New York very strict when you reserve the elevator so we want to make sure we will be there at 9 AM.
                                        </p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465453596-eadb9024-1eec" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">Are you guys fully licensed and insured?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">Yes we are completely license and insurance we have all certificates to the building management need to reserve the elevator for your move we care all types of insurance so there’s gonna be no downturn on the day of the move their situation when movers couldn’t come into the building.</p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455758-f524ec86-fb98" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">Where where are you keeping a truck overnight?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">We park our truck on the secure parking lot in Newton. the truck will be locked and under 24 hour surveillance. nobody will be having access to your stuff unless it’s a crew members who well be driving the truck from Boston to New York.</p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455758-f524ec86-fb98" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">What’s included in my flat price?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">Everything is included no additional charges no hide and fees once you received a flat fee for your move that will be your price and there’s gonna be no additional charges of any kind.</p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455758-f524ec86-fb98" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">Can I ride in the truck from Boston to New York?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">Unfortunately you can not be in the truck while we transport your items ,because of the certain department of transportation regulations.
                                        </p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455758-f524ec86-fb98" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">Is delivery guaranteed?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">Yes, delivery is guaranteed and it usually will be on the next day at 9:00 am.</p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455758-f524ec86-fb98" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">Do you require a deposit?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">No we trust our customers and we don’t require a deposit in order to to reserve your spot.</p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455758-f524ec86-fb98" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">Can I get discounted price?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">Yes,you can if you are willing to share a truck. This option not always available.</p>
                                    </div>
                                </div>
                            </span>
                            <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div id="1486465455758-f524ec86-fb98" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                                    <div class="vc_toggle_title">
                                        <h4 itemprop="name">How we can reserve parking spot in NYC for a moving truck?</h4><i class="vc_toggle_icon"></i>
                                    </div>
                                    <div class="vc_toggle_content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text">Unfortunately we can’t reserve a spot or get a permit for moving van unless your building provides a loading dock.
                                            we have to do one of the following:<br>
                                            1. Double park <br>
                                            2. Find a close spot available and u load tour items<br>
                                            We also ask our customers to keep an eye on so we won’t get fine for a parking because customers response for ALL parking tickets.
                                        </p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section style="padding-bottom: 0px;">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1498398709686 vc_row-has-fill">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid container">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner vc_custom_1498393936323">
                                    <div class="wpb_wrapper">
                                        <div class="pricing-table   ">
                                            <div class="row pricing-title">
                                                <div class="row pricing-title-content">Room or Less<br>from</div>
                                            </div>
                                            <div class="row pricing">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="row">
                                                        <div class="pricing-img">
                                                            <div class="pricing-image"></div>
                                                        </div><span class="pricing-price"><span class="currency">&#36;</span>1100</span>
                                                    </div>
                                                </div>
                                                <div class="pricing-options-container">
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>One Moving Truck</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Tape/Shrink Wrap </span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Blankets/Floor Protection</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Gas/Tolls</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Insurance</span></span>
                                                    </div>
                                                </div><a href="/get-a-quote" class="tt_button">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner vc_custom_1498393940961">
                                    <div class="wpb_wrapper">
                                        <div class="pricing-table active  ">
                                            <div class="row pricing-title">
                                                <div class="row pricing-title-content">Studio / 1 Bedroom<br>from</div>
                                            </div>
                                            <div class="row pricing">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="row">
                                                        <div class="pricing-img">
                                                            <div class="pricing-image"></div>
                                                        </div><span class="pricing-price"><span class="currency">&#36;</span>1500</span>
                                                    </div>
                                                </div>
                                                <div class="pricing-options-container">
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>One Moving Truck</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Tape/Shrink Wrap </span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Blankets/Floor Protection</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Gas/Tolls</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Insurance</span></span>
                                                    </div>
                                                </div><a href="/get-a-quote" class="tt_button">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner vc_custom_1498393946103">
                                    <div class="wpb_wrapper">
                                        <div class="pricing-table   ">
                                            <div class="row pricing-title">
                                                <div class="row pricing-title-content">2 Bedrooms<br>from</div>
                                            </div>
                                            <div class="row pricing">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="row">
                                                        <div class="pricing-img">
                                                            <div class="pricing-image"></div>
                                                        </div><span class="pricing-price"><span class="currency">&#36;</span>1800</span>
                                                    </div>
                                                </div>
                                                <div class="pricing-options-container">
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>One Moving Truck</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Tape/Shrink Wrap </span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Blankets/Floor Protection</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Gas/Tolls</span></span>
                                                    </div>
                                                    <div class="pricing-row"><span class="pricing-value"><span class="pricing-option"><i class="fa fa-check"></i>Insurance</span></span>
                                                    </div>
                                                </div><a href="/get-a-quote" class="tt_button">Get Started</a>
                                            </div>
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
