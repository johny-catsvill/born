<footer id="footer" class="fixed">
   <div class="upper-footer">
      <div class="container">
         <div class="footer-business-info">
            <div class="container footer-business-wrapper">
               <span class="footer-business-address">
                  <i class="fa fa-map-marker fa-2x"></i>
                  <span class="footer-business-title">Address</span>

                  <span class="footer-business-content" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                     @if(View::hasSection('addressschema'))
                           @yield('addressschema')
                           @else
                           <span itemprop="streetAddress">229 Watertown St apt 2</span>
                              ,
                              <span itemprop="addressLocality">Watertown</span>,
                              <span itemprop="addressRegion">MA</span>
                              <span itemprop="postalCode">02472</span> (Office)
                           </span>
                     @endif 
                    
                  </span>
                <span class="footer-business-phone">
                  <i class="fa fa-phone fa-2x"></i>
                  <span class="footer-business-title">Phone</span>
                  <span class="footer-business-content">
                  @if(View::hasSection('phone'))
                           <a href="tel:@yield('phone')">@yield('phone')</a></span>
                        @else
                        <a href="tel:(617) 903-2609">(617) 903-2609</a></span>
                  @endif   
                  
                </span>
                <span class="footer-business-email">
                  <i class="fa fa-envelope fa-2x"></i>
                  <span class="footer-business-title">Email</span>
                  <span class="footer-business-content"><a href="mailto:info@goborntomove.com">info@goborntomove.com</a></span>
                </span>
              </div>
           </div>
           <div class="container">
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 first-widget-area">
                  <div class="footer_widget">
                     <div class="widget-title" itemprop="name"><span>Born to Move Moving Company</span></div>
                     <div class="textwidget">
                        <p>We are Boston based Moving Company with rich hostory and experience. We provide Local and Interstate Moving services. Fully Licensed and Insured Company ready to provide High Quality Service.</p>
                        <p>US DOT 2887241 <br>
                        MC 985934   
                     </p>
                     </div>
                  </div>
                    <div class="footer_widget">
                       <div class="socials-widget">
                         <a href="https://www.facebook.com/Born-to-Move-870755206385655/" target="_blank"><span class="fa fa-facebook"></span></a>
                         <a href="https://twitter.com/MoveBorn" target="_blank"><span class="fa fa-twitter"></span></a>
                         <a href="https://www.instagram.com/borntomovema/" target="_blank"><span class="fa fa-instagram"></span></a>
                         <a href="http://www.yelp.com/biz/born-to-move-boston" target="_blank"><span class="fa fa-yelp"></span></a>
                       </div>
                    </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                 <div class="footer_widget">
                     <div class="widget-title"><span>Working Hours</span></div>
                        <div>
                           Monday: 8am - 7pm
                        </div>
                        <div>
                           Tuesday: 8am - 7pm
                        </div>
                        <div>
                           Wednesday: 8am - 7pm
                        </div>
                        <div>
                           Thursday: 8am - 7pm
                        </div>
                        <div>
                           Friday: 8am - 7pm
                        </div>
                        <div>
                           Saturday: 8am - 7pm
                        </div>
                        <div>
                           Sunday: 8am - 7pm
                        </div>
                     </div>
                  </div>
                 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 second-widget-area">
                    <div class="footer_widget">
                       <div class="widget-title"><span>Additional links</span></div>
                       <div class="menu-additional-links-container">
                          <ul id="menu-additional-links">
                             <li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84"><a href="/about-us">About us</a></li>
                             <li id="menu-item-85" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-85"><a href="/get-a-quote">Get a Quote</a></li>
                             <li id="menu-item-86" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-86"><a href="/privacy-policy">Privacy policy</a></li>
                             <li id="menu-item-87" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-87"><a href="/blogs">Blog</a></li>
                             <li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88"><a href="/contact-us">Contact us</a></li>
                              <li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88"><a href="/scholarship">Scholarship</a></li>
                          </ul>
                       </div>
                    </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 third-widget-area">
                    <div class="footer_widget">
                       <div class="widget-title"><span>Services</span></div>
                       <div class="menu-services-container">
                          <ul id="menu-services">
                             <li id="menu-item-2739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739 one-page-link"><a href="/local-moving">Local moving</a></li>
                             <li id="menu-item-2740" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2740 one-page-link"><a href="/interstate-moving">Interstate Moving</a></li>
                             <li id="menu-item-2741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2741 one-page-link"><a href="/packing-solution">Packing Solution</a></li>
                             <li id="menu-item-2742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2742 one-page-link"><a href="/moving-and-storage">Moving and Storage</a></li>
                             <li id="menu-item-2743" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2743 one-page-link"><a href="/special-services">Special Services</a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 fourth-widget-area">
                    <div class="footer_widget">
                       <div class="widget-title"><span>Additional Services</span></div>
                       <ul>
                          <li> <a href="/white-glove-moving">White Glove Moving</a></li>
                          <li> <a href="/piano-moving">Piano Moving</a></li>
                          <li> <a href="/moving-donation">Moving Donation</a></li>
                          <li> <a href="/art-antique-movers">Art and Antique Movers</a></li>
                          <li> <a href="/eco-friendly-moving">Eco Friendly Moving</a></li>
                          <li> <a href="/boston-parking-permit">Boston Parking Permit</a></li>
                          <li> <a href="/flat-rate-movers">Flat Rate Moving</a></li>
                          <li> <a href="/appliance-movers-boston">Appliance Movers Boston</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 fourth-widget-area">
                     <div class="footer_widget">
                        <ul>
                           <li> <a href="/senior-moving">Senior Moving</a></li>
                           <li> <a href="/student-moving">Student Moving</a></li>
                           <li> <a href="/military-goverment-moving">Military and Goverment Moving</a></li>
                           <li> <a href="/international-relocation">International Relocation</a></li>
                           <li> <a href="/preparation-for-your-move">Preparation for your Move</a></li>
                           <li> <a href="/moving-safety">Moving Safety</a></li>
                           <li> <a href="/our-fleet">Our Fleet</a></li>
                        </ul>
                     </div>
                  </div>
              </div>
           </div>

        </div>
        
     </div>

     <div class="lower-footer">
        <div class="container">
           <div class="pull-left"> <span>Born to Move © <script>
		         document.write(new Date().getFullYear())
		       </script>. All rights reserved.</span></div>
           <div class="pull-right">
              <ul id="menu-footer-menu" class="nav navbar-footer">
                 <li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83" style="font-size:12px">by <a href="https://taraskim.com" style="display:inline; margin-left: 5px; font-size:12px;" target="_blank">Web Dev</a></li>
              </ul>
           </div>
        </div>
     </div>
  </footer>
