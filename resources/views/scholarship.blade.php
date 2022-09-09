
@extends('mainl')
@section('extracss')

<style>
  .list {
    list-style-type: none;
  }
  .list li:before {
    font-family: 'FontAwesome';
    content: '\f00c';
    margin:0 5px 0 -15px;
    color: #f00;
}
</style>
@stop
@section('content')
<div id="wrapper" class="">
     <header id="header" class="blog-header ">

     </header>
     <section id="single-page" class="section pricing" style="padding-bottom:0px; ">
         <div class="row single-page-heading ">
             <div class="header-overlay  darkend" style="background-image:url('/images/scholarship.jpg')"></div>
             <div class="container">
               <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Born to Move" href="https://www.goborntomove.com" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                      </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><span property="item" typeof="WebPage" title="Born to Move Scholarship" class="post post-page current-item"><span property="name">Scholarship</span></span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
                 <h1 class="section-heading" style=" color:#fff;text-align:left;margin:0;">{{ $seo->h1 }}</h1></div>
         </div>

          <div class="wpb_wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2" style="font-size:16px;">
                    <p>
                      <strong>Born to Move</strong> is a Boston based moving company that offering all types of moving services in Boston and surrounding areas.
                      Our <a href="{{ url('boston-movers') }}">Boston Movers</a> are experienced professionals that help anyone move locally and long-distance.<br/>
                      We are looking to do more for it's community then just moving.
                      Every year we want to provide an opportunity to students to particapate in our scholarship program.
                    </p>
                    <p>
                      We are offering a <strong>2021/22 scholarship program</strong> in the amount of <strong>$1500</strong> for any financially deserving student going into either Freshman or Sophomore year!
                    </p>
                    <h4>
                      Eligibility Criteria:
                    </h4>
                    <p>
                      <ul class="list">
                        <li>
                          Be enrolled in college/university within the United States
                        </li>
                        <li>
                          Be in a good academic standing and have a cumulative GPA of 3.0 or higher
                        </li>
                      </ul>
                    </p>
                    <h4>
                      Requirements:
                    </h4>
                    <p>
                      <ul class="list">
                        <li>
                          An essay of 1000-1500 words in which you explain why you picked
                          that specific degree and what you intend to do when you complete your education.
                        </li>
                        <li>
                          Proof of college/university enrollement
                        </li>
                        <li>
                          Fill out an application form
                        </li>
                      </ul>
                    </p>
                    <h4>
                      Instructions
                    </h4>
                    <p>
                      To apply to a scholarship program you have to fill out <a href="https://forms.gle/dqE9XifZmXhxdo249" target="_blank">this form</a> mand attached all requried documents. Contact us if you have any questions.
                    </p>
                  </div>
                </div>
                {{-- <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                  <h4>Leave us a message</h4>
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
                    <button type="submit" class="submit-btn">Submit</button>
                  </form>
                  </div>
                </div> --}}
              </div>
         </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p style="font-size: 30px;">
              <a href="https://forms.gle/dqE9XifZmXhxdo249" target="_blank">Click here</a> to apply.
            </p>
          </div>
        </div>
      </div>
    </section>
@include('partials/_testipart')
 </div>
@stop
