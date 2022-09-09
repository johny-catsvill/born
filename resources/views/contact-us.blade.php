

@extends('mainl')
@section('extracss')
<style>
#map {
    height: 100%;
    width: 100%;
}
</style>
<script>
function initMap() {
// The location of Uluru
const uluru = { lat: 43.193852, lng: -71.572395 };
// The map, centered at Uluru
const map = new google.maps.Map(document.getElementById("map"), {
zoom: 7,
center: uluru,
});
// The marker, positioned at Uluru
const marker = new google.maps.Marker({
position: uluru,
map: map,
});
}

window.initMap = initMap;
</script>
{!! RecaptchaV3::initJs() !!}
@stop
@section('content')
<div id="wrapper">
  <header id="header" class="blog-header ">

  </header>
  <section id="single-page" class="section contact-us" style="padding-bottom:0px; ">
         <div class="row single-page-heading ">
            <div class="header-overlay  darkend" style="background-image:url('/images/contactus.jpg')"></div>
            <div class="container">
                <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Born to Move" href="https://www.goborntomove.com" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem">
                            <span property="item" typeof="WebPage" title="Go to Pricing Plans." class="post post-page current-item">
                                <span property="name">Contact us</span>
                            </span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
                <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">Contact us</h1>
            </div>
         </div>
         <div class="container fullwidth">
             <div class="row single-page-content">
                 <div class="vc_row wpb_row vc_row-fluid container vc_custom_1498484470696 vc_row-has-fill">
                     <div class="wpb_column vc_column_container vc_col-sm-6">
                         <div class="vc_column-inner vc_custom_1498484091839">
                             <div class="wpb_wrapper">
                                 <h2 style="font-size: 24px;line-height: 1;text-align: left" class="vc_custom_heading section-heading vc_custom_1498483872503">How to find us</h2>
                                 <p style="font-size: 16px;line-height: 1.6;text-align: left" class="vc_custom_heading vc_custom_1498484880859">These are all the ways you can find and contact us.</p>
                                 <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1498484977578">
                                     <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12">
                                         <div class="vc_column-inner vc_custom_1499421817237">
                                             <div class="wpb_wrapper">
                                                 <div class="key-icon-box icon-default icon-left cont-left  " style="background-color: ;">
                                                     <div class="ib-wrapper" style="padding:10px; font-size:16px;"><i class="fa fa-phone fa-lg" style=" "></i>
                                                         <a href="tel:6179032609">(617) 903-2609</a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1498484977578">
                                     <div class="wpb_column vc_column_container vc_col-sm-12">
                                         <div class="vc_column-inner vc_custom_1498485327683">
                                             <div class="wpb_wrapper">
                                                 <div class="key-icon-box icon-default icon-left cont-left  " style="background-color: ;">
                                                     <div class="ib-wrapper" style="padding:10px; font-size:16px;"><i class="fa fa-envelope fa-lg" style=" "></i>
                                                         <a href="mailto:info@goborntomove.com">info@goborntomove.com</a></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1498484977578">
                                     <div class="wpb_column vc_column_container vc_col-sm-12">
                                         <div class="vc_column-inner vc_custom_1498485333427">
                                             <div class="wpb_wrapper">
                                                 <div class="key-icon-box icon-default icon-left cont-left  " style="background-color: ;">
                                                    <div class="ib-wrapper" style="padding:10px; font-size:16px;"><i class="fa fa-map-marker fa-lg" style=" "></i>
                                                        <p>Main Office - 229 Watertown St apt 2, Watertown, MA 02472</p>
                                                    </div>
                                                    <div class="ib-wrapper" style="padding:10px; font-size:16px;"><i class="fa fa-map-marker fa-lg" style=" "></i>
                                                        <p>New Hampshire - 10 Strawberry Bank Rd APT 14, Nashua, NH 03062</p>
                                                    </div>
                                                    <div class="ib-wrapper" style="padding:10px; font-size:16px;"><i class="fa fa-map-marker fa-lg" style=" "></i>
                                                        <p>Providence - 18 Kimball Ave, Pawtucket, RI 02860</p>
                                                    </div>
                                                    <div class="ib-wrapper" style="padding:10px; font-size:16px;"><i class="fa fa-map-marker fa-lg" style=" "></i>
                                                        <p>New York - 315 Avenue P #1D, Brooklyn, NY 11204</p>
                                                    </div>
                                                    <div class="ib-wrapper" style="padding:10px; font-size:16px;"><i class="fa fa-map-marker fa-lg" style=" "></i>
                                                        <p>Los Angeles - 1131 E Washington Blvd Apt 101, Los Angeles, CA 90021</p>
                                                    </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-6">
                         <div class="vc_column-inner vc_custom_1498484096064">
                             <div class="wpb_wrapper">
                                 <h2 style="font-size: 24px;line-height: 1;text-align: left" class="vc_custom_heading section-heading vc_custom_1498483886730">Leave us a message</h2>
                                 <p style="font-size: 16px;line-height: 1.6;text-align: left" class="vc_custom_heading vc_custom_1498484888412">You can leave us a message and with your questions and we will get back to you asap.</p>
                                 <form action="{{ url('contact-us') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="First and Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your Phone</label>
                                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="(555) 555-5555">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea class="form-control" name="body" id="message" rows="3"></textarea>
                                    </div>
                                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            {!! RecaptchaV3::field('register') !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="submit-btn">Submit</button>
                                </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="vc_row wpb_row vc_row-fluid">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                         <div class="vc_column-inner ">

                                 <div class="contact-map-container left_info_panel" style="height: 500px;">
                                     <div class="business-info-wrapper">
                                         <div class="business-info-header">
                                             <h4>CONTACT DETAILS</h4><address><span class="business-address-row"><i class="fa fa-map-marker"></i>
                                               <span class="address-overflow">229 Watertown St apt 2 , Watertown, MA 02472</span></span>
                                               <span class="business-phone-row"><i class="fa fa-phone"></i>(617) 903-2609</span>
                                               <span class="business-email-row"><i class="fa fa-envelope"></i><a href="mailto:info@goborntomove.com">info@goborntomove.com</a></span></address></div>
                                         <div class="business-info-schedule">
                                             <h4>Opening hours</h4>
                                             <div class="business-info-day"><span class="business-info-day-name">Monday-Friday</span><span class="business-info-day-hours">8am - 7pm</span></div>
                                             <div class="business-info-day"><span class="business-info-day-name">Saturday</span><span class="business-info-day-hours">10am - 4pm</span></div>
                                             <div class="business-info-day"><span class="business-info-day-name">Sunday</span><span class="business-info-day-hours">10am - 4pm</span></div>
                                         </div>
                                     </div>
                                     <div class="wpb_wrapper">
                             <div id="map"></div>
                            <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqUX8qzpVDzMxy_NDCP6wIYBHC3Kv7lHA&callback=initMap&v=weekly"
                            defer
                            ></script>
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
@section('customjs')

@stop
