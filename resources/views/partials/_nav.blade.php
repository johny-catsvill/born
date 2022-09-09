<nav class="navbar navbar-default navbar-fixed-top with-topbar" >
   <!-- <div class="topbar first-template">
      <div class="container">
         <div class="topbar-contact"> <span class="topbar-phone"><i class="fa fa-phone" style="color: #fff"></i> <a href="tel:(617) 903-2609"><span itemprop="telephone">(617) 903-2609</span></a></span> <span class="topbar-email"><i class="fa fa-envelope" style="color: #fff"></i> <a href="mailto:info@goborntomove.com">info@goborntomove.com</a></span></div>
         <div class="topbar-socials">
           <a href="https://www.facebook.com/Born-to-Move-870755206385655/" target="_blank"><span class="fa fa-facebook"></span></a>
           <a href="https://twitter.com/MoveBorn" target="_blank"><span class="fa fa-twitter"></span></a>
           <a href="https://www.instagram.com/borntomovema/" target="_blank"><span class="fa fa-instagram"></span></a>
           <a href="http://www.yelp.com/biz/born-to-move-boston" target="_blank"><span class="fa fa-yelp"></span></a></div>
      </div>
   </div> -->
   <div class="container">
      <div id="logo"> <a  class="logo" href="{{ route('home') }}">
              <img itemprop="image" src="{{ asset('images/logo.png') }}" style="margin-top:13.5px;" alt="Born to Move logo"/></a></div>
      <div class="navbar-header page-scroll">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="main-menu" class="collapse navbar-collapse navbar-right">
         <ul id="menu-main-menu" class="nav navbar-nav">
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Contact" href="{{ route('home') }}">Home</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
               <a title="Services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/local-moving">Local Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/interstate-moving">Interstate Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/packing-solution">Packing Solution</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/moving-and-storage">Moving and Storage</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/special-services">Special Services</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/commercial-moving">Commercial Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/Boston-New-York-Moving-Prices">Movers from Boston to New York</a></li>
               </ul>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="About us" href="{{ route('prices') }}">Prices</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="About us" href="{{ route('about-us') }}">About us</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="About us" href="{{ route('blogs') }}">Blog</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
               <a title="Services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Locations <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="New Hampshire Moving" href="{{ url('new-hampshire-moving') }}">New Hampshire Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/connecticut-moving">Connecticut Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/rhode-island-moving">Rhode Island Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" target="_blank" href="https://borntomovenyc.com">New York Moving</a></li>
               </ul>
            </li>
            {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
               <a title="Locations" >Locations </a>
               <ul class="dropdown-menu">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page dropdown-item"><a title="Service List" href="/new-hampshire-moving">New Hampshire Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/connecticut-moving">Connecticut Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" href="/rhode-island-moving">Rhode Island Moving</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Service List" target="_blank" href="https://borntomovenyc.com/">New York Moving</a></li>
               </ul>
            </li> --}}
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Contact" href="{{ route('faq') }}">FAQ</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page">
               <a title="Contact" href="https://secure.goborntomove.com/account/">

               </a>
               </li>
         </ul>
         <a class="modal-menu-item menu-item hover-non" href="https://secure.goborntomove.com/account/" target="_blank" style="font-size: 20px; color: #ff515e; border: 0;"><i class="fa fa-user-o"></i></a>

         @if(View::hasSection('phone'))
                         <a href="tel:@yield('phone')" class="modal-menu-item menu-item" style="font-size: 20px; color: #ff515e; border: 0;">@yield('phone')</a>
                        @else
                        <a href="tel:(617) 903-2609" class="modal-menu-item menu-item" style="font-size: 20px; color: #ff515e; border: 0;">(617) 903-2609</a>
                  @endif

         <a class="modal-menu-item menu-item" href="{{ url('get-a-quote') }}">Book a Move</a>


      </div>
   </div>
</nav>
