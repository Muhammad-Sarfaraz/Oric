<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Home</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="frontend/assets/img/favicon.ico" type="image/x-icon">

  <!-- Font awesome -->
  <link href="{{asset('/')}}frontend/assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{asset('/')}}frontend/assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/slick.css">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Theme color -->
  <link id="switcher" href="{{asset('/')}}frontend/assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="{{asset('/')}}frontend/assets/css/style.css" rel="stylesheet">


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  @yield('style')
</head>

<body>

  <!--START SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    @forelse(\App\website::get() as $website)
                    <span>{{$website->email}}</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>{{$website->phone}}</span>
                  </div>
                  @empty

                  @endforelse
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">

                      @forelse(\App\website::get() as $website)

                      <li><a href="{{$website->facebook}}"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="{{$website->twitter}}"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="{{$website->youtube}}"><span class="fa fa-youtube"></span></a></li>
                      @empty
                      @endforelse
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          @forelse(\App\website::get() as $website)
          <a class="navbar-brand" href="{{route('/')}}"><i> <img border="0" alt="{{$website->name}}" src="{{ Storage::url(''.$website->wlogo) }}" width="50" height="50"> </i><span>{{$website->name}}</span></a>
          @empty
          @endforelse
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="{{url("/")}}">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="blog-archive.html">Primary Section</a></li>
                <li><a href="blog-archive.html">High School</a></li>
                <li><a href="blog-archive.html">How to Apply</a></li>

            </li>
          </ul>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{URL::route('how.to.apply')}}">How to Apply</a></li>
              <li><a href="{{URL::route('age.requirement')}}">Age Requirements</a></li>
              <li><a href="{{URL::route('tution.and.fees')}}">Tutions and Fees</a></li>
              <li><a href="{{url('/faq')}}">FAQ</a></li>
            </ul>
          </li>
          <li><a href="{{url('/activities')}}">Activitis</a></li>
          <li><a href="{{url('/gallery')}}">Gallery</a></li>
          <li><a href="{{('notice')}}">Notice</a></li>

          <li><a href="{{url('/contact_us')}}">Contact Us</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->

  @yield('contentExtra')

  @yield('content')




  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  @forelse(\App\website::get() as $website)
                  <p>{{$website->adress}}</p>
                  <p>Phone: {{$website->phone}} </p>

                  <p> Website: @php echo $host = request()->getHost(); @endphp</p>


                  <p>Email: {{$website->email}}</p>
                  @empty
                  @endforelse
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          @forelse(\App\website::get() as $website)

          <p>&copy; All Right Reserved By {{$website->name}}. Designed by Sarfaraz</a></p>
          @empty

          @endforelse
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->




  <!-- jQuery library -->
  <script src="{{asset('/')}}frontend/assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('/')}}frontend/assets/js/bootstrap.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="{{asset('/')}}frontend/assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{asset('/')}}frontend/assets/js/waypoints.js"></script>
  <script type="text/javascript" src="{{asset('/')}}frontend/assets/js/jquery.counterup.js"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="{{asset('/')}}frontend/assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{asset('/')}}frontend/assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="{{asset('/')}}frontend/assets/js/custom.js"></script>

</body>

</html>