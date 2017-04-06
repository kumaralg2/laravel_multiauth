 @extends('_base');
 @section('content');
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
<!--                  <h1>Drop Us A Note</h1>-->
                  <h1>Contact Us Below</h1>
                  <p>Don’t just take our word for it. Check out some of our latest work.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <div class="row">
             {!! Form::open(array('url'=>'/contact','class' => 'form')) !!}
               @if(Session::has('flash_message'))
                  <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                @endif
              <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group">
                     {!! Form::text('user_name', null,  array('required','class'=>'form-control','placeholder'=>'Your name')) !!}
                    </div>
                    <div class="form-group">
                     {!! Form::text('user_email', null,  array('required','class'=>'form-control','placeholder'=>'Email Address')) !!}          
                    </div>
                    <div class="form-group">
                     {!! Form::text('user_subject', null,  array('required','class'=>'form-control','placeholder'=>'Subject')) !!}                  
                    </div>
                </div>

              </div>
              <div class="col-md-6 col-sm-12">
               
                <div class="block">
                    <div class="form-group-2">
                     {!! Form::textarea('user_message', null,  array('required','class'=>'form-control','rows'=>'3','placeholder'=>'Your Message')) !!}                                      
                    </div>
                   <div class="form-group">
                      {!! Form::submit('Send Message!', array('class'=>'btn btn-default')) !!}
                    </div>
                </div>
              </div>
             {!! Form::close() !!}                  
            </div>
            
            <div id="contact-box" class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Stop By For A visit</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-map-marker"></i>909, Ayyappa Society Rd, Mega Hills, Madhapur, Hyderabad, Telangana 500081
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>Email: contact@nxtsquare.com,jobs@nxtsquare.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Phone:+91 8634-142-119
                    </li>
                  </ul>
<!--

                  <ul class="social-icons">
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                  </ul>
-->
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>We Also Count In Google Map</h2>
                  <img src="dist/img/nxtsquare-location.png" alt="Img">
<!--
                    <div class="google-map">
                      <div id="map"></div>
                    </div>
-->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Call to action Start -->
        <section id="call-to-action">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h2We develop and design delightful digital experiences.</h2>
                  <p>We are a team of designers and usability experts, web developers, and real world marketers. We fuse together to design and build web, social, mobile apps for entrepreneurs, start-ups, mid-sized companies and enterprises across the world and then make it available to the world with a professional SEO outlook..</p>
                  <a class="btn btn-default btn-call-to-action" href="#" >Tell Us Your Story</a>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection