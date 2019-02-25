@extends('userpages.master')
@section('content')
<section id="hero"><!---------------------**********  start video Slider ************--------------------------->
  <div class="hero-container">
    <h1>Welcome to B+</h1>
    <br>
    <h2>If you can't do great things, do small things in a great way</h2>
    <a href="#blood-type" class="btn-get-started">Get Started</a>
  </div>
  <div class="scroll"><!-- Start change scroll bar of screen --->
    <div class="mouse"></div>
    {{-- <div class="scroll-arrow"></div> --}}
  </div><!--End change scroll bar of screen ---> 
  <div class="bg_video"><!-- start video -->
    <video autoplay muted loop>
      <source src="{{asset('sitecss/videos/bg_video.mp4')}}" type="video/mp4">
    </video><!-- End video -->
  </div>
</section><!------------------------------************** End  video slider ******************-------------------------------->
<main id="main"> <!---------------------------************ Start Main for all sections *********------------------------------>
  <section id="blood-type"><!------------************ Blood Type Section ***************------------>
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Donors</h3>
        <p class="section-description">All users who are available to donate
          <br>
          <small>(Choose the blood type you need)</small>
        </p>
      </div>
      <div class="row"><!-- start filter Blood Type --->
        <div class="col-lg-12">
          <ul id="blood-type-flters">
            <li data-filter=".filter-O-Pos, .filter-O-Neg, .filter-A-Pos, .filter-A-Neg, .filter-B-Pos,.filter-B-Neg,.filter-AB-Pos,.filter-AB-Neg" class="filter-active">All</li>
            <li data-filter=".filter-O-Pos">O+</li>
            <li data-filter=".filter-O-Neg">O-</li>
            <li data-filter=".filter-A-Pos">A+</li>
            <li data-filter=".filter-A-Neg">A-</li>
            <li data-filter=".filter-B-Pos">B+</li>
            <li data-filter=".filter-B-Neg">B-</li>
            <li data-filter=".filter-AB-Pos">AB+</li>
            <li data-filter=".filter-AB-Neg">AB-</li>
          </ul>
        </div>
      </div><!-- End filter Blood Type --->
      <br>
      <div class="row" id="blood-type-wrapper"><!-- start profile of Donors users in blood filter --->
        @foreach ($users as $user)
        @if ($user->blood_type=="O+")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-O-Pos">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
                <form action="/connect/{{Auth::user()->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach

               @foreach ($users as $user)
        @if ($user->blood_type=="O-")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-O-Neg">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
                <form action="/connect/{{Auth::user()->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach
        
        @foreach ($users as $user)
        @if ($user->blood_type=="A+")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-A-Pos">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
              <form action="/connect/{{Auth::user()->id}}/{{$user->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach

        @foreach ($users as $user)
        @if ($user->blood_type=="A-")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-A-Neg">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
                <form action="/connect/{{Auth::user()->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach

        @foreach ($users as $user)
        @if ($user->blood_type=="B+")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-B-Pos">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
                <form action="/connect/{{Auth::user()->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach

        @foreach ($users as $user)
        @if ($user->blood_type=="B-")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-B-Neg">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
                <form action="/connect/{{Auth::user()->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach

                @foreach ($users as $user)
        @if ($user->blood_type=="AB+")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-AB-Pos">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
                <form action="/connect/{{Auth::user()->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach

        @foreach ($users as $user)
        @if ($user->blood_type=="AB-")  
        <div class="col-lg-4 col-md-6 blood-type-item filter-AB-Neg">
            <figure class="snip0016">
              <img src="{{ asset("storage/users/$user->img") }}" alt="sample41"/>
              <figcaption>
                <h4><b>{{$user->name}}</b></h4>
                <p>
                  From: {{$user->city}}
                  <br>
                  Blood Type: {{$user->blood_type}}
                </p>
                <br>
                @if(Auth::guest())
                <a href="/register"><button class="btn btn-sm"> Connect </button></a>
                @else
                <form action="/connect/{{Auth::user()->id}}" method="post">
                  {{ csrf_field() }}
                  <a><button type="submit" class="btn btn-sm"> Connect </button></a>
                </form>
                @endif
                {{-- <a href="/connect"><button class="btn btn-sm"> Connect </button></a> --}}
              </figcaption>	
            </figure>
          </div>
        @endif
        @endforeach
      </div><!-- End profile of Donors users in blood filter --->
      {{ $users->links() }}
    </div>  
  </section><!--------------------------****************** End Blood Type section ***************---------------->
  <section id="facts"><!----------------******** start fact section ********------------->
    <div class="container wow fadeIn">
      <div class="section-header">
        <h3 class="section-title">Facts</h3>
        <p class="section-description">Global statiscs about blood donation in <small>per year</small></p>
      </div>
      <div class="row counters">
        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">123 </span>
          <p>Collected Blood</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">215</span>
          <p>People Need</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">150</span>
          <p>children</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">9,155</span>
          <p>Deaths</p>
        </div>
      </div>
    </div>
  </section><!--------------------********* End facts  section **********----------------------------->
  <section id="charities"><!--------------------******** start charities section ********---------------------------->
    <div class="section-header">
        <h3 class="section-title">Collaborators</h3>
        <br><br>
    </div>
    <div class="container wow fadeIn">
      <div class="customer-logos slider">
        <div class="slide"><img src="{{asset('sitecss/img/Charities/0120.png')}}"></div>
        <div class="slide"><img src="{{asset('sitecss/img/Charities/referans-5.png')}}"></div>
        <div class="slide"><img src="{{asset('sitecss/img/Charities/referans-4.png')}}"></div>
        <div class="slide"><img src="{{asset('sitecss/img/Charities/referans-3.png')}}"></div>
        <div class="slide"><img src="{{asset('sitecss/img/Charities/referans-2.png')}}"></div>
        <div class="slide"><img src="{{asset('sitecss/img/Charities/0120.png')}}"></div>
        <div class="slide"><img src="{{asset('sitecss/img/Charities/referans-5.png')}}"></div>
      </div>
    </div>
  </section><!------------------********* End charities section ***********-------------------------->
  <section id="team"><!------------------********* Start Team section *********-------------------------->
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Our Talented Team</h3>
        <p class="section-description"></p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6"><!--member one in the team --->
          <div class="member">
            <div class="pic">
              <img src="{{asset('sitecss/img/avatar.png')}}" alt="">
            </div>
            <h4>Ahmed Alaa</h4>
            <div class="border"></div>
            <span>Front-end developer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-github"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6"><!--member two in the team --->
          <div class="member">
            <div class="pic"><img src="{{asset('sitecss/img/avatar.png')}}" alt=""></div>
            <h4>Mohammed Salah</h4>
            <div class="border"></div>
            <span>Fullstack Web Developer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-github"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6"><!--member three in the team --->
          <div class="member">
            <div class="pic"><img src="{{asset('sitecss/img/avatar.png')}}" class="img-fluid" alt=""></div>
            <h4>Momen Adel</h4>
            <div class="border"></div>
            <span>Back-end Developer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-github"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6"><!--member Four in the team --->
          <div class="member">
            <div class="pic"><img src="{{asset('sitecss/img/avatar.png')}}" alt=""></div>
            <h4>Mohammed Essa</h4>
            <div class="border"></div>
            <span>Front-end developer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-github"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-------------------------********** End Team section********--------------------------->
  <section id="contact"><!-------------------------*********** start Contact us section ***********--------------------------->
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Contact</h3>
        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
    </div>
              <!-------  start Google Map --------->
    <iframe  
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5019.143013720076!2d31.171614250924147!3d27.185534716103376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450bfcc66b0f27%3A0x5c93b0105928bd21!2sInformation+Technology+Institute+-+ITI!5e0!3m2!1sen!2seg!4v1550179544936"
      width="100%" height="380" frameborder="0" style="border:0" allowfullscreen>
    </iframe> <!-------  end Google Map --------->
   
    <div class="container wow fadeInUp mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4"><!---- Start contact us info ----->
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>
            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>
            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>
          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="github"><i class="fa fa-github"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>
         
        </div><!---- End contact us info ----->
        <br>
        
        <div class="col-lg-5 col-md-6"><!---- start contact us form ---->
          @include('inc.messages')
          <form method="POST" action="/contact" role="form" class="contactForm">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" onclick="alert('Message sent'); reset();">Send Message</button></div>
          </form>
          
        </div><!---- End contact us form ----> 
  </section><!-------------------------*********** start Contact us section ***********--------------------------->
</main> <!-----------------------------------*********** End Main Of All Sections **********------------------------------------->
 @endsection