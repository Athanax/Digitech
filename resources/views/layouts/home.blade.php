<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Industrie &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">  --}}
    <link rel="stylesheet" href="{{ asset('css/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap-datepicker.css')}}">
    
    
    <link rel="stylesheet" href="{{ asset('css/fonts/flaticon/font/flaticon.css')}}">
  
    <link rel="stylesheet" href="{{ asset('css/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap bg-white">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">youremail@domain.com</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 291 2830 302</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-navbar bg-light">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="index.html">Digitech</a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact us</a></li>

                    @guest
                    <li class="has-children">
                      <a>Account</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                      </ul>
                    </li>

                    
                    @else
                    <li class="has-children">
                      <a href="/home">{{ Auth::user()->name }} wambua</a>
                      <ul class="dropdown arrow-top">
                        <li><a onclick="
                        event.preventDefault(); document.getElementById('logout-form').submit();" 
                          href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                      </ul>
                    </li>
                    
                    @endguest
                    <li><a href="/blog">Blog</a></li>

                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      @yield('content')
    </div>
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-lg-7">
            <div class="row">
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Navigations</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Quick Menu</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row mb-5">
              <div class="col-md-12"><h3 class="footer-heading mb-4">Europe</h3></div>
              <div class="col-md-6">
                <p>London - 2398 <br> 10 Japson Street</p>    
              </div>
              <div class="col-md-6">
                Tel. + (123) 3240-345-9348 <br>
                Mail. europe@youdomain.com
              </div>
            </div>

            <div class="row">
              <div class="col-md-12"><h3 class="footer-heading mb-4">USA</h3></div>
              <div class="col-md-6">
                <p>New York - 2398 <br> 10 Hadson Carl Street</p>    
              </div>
              <div class="col-md-6">
                Tel. + (123) 3240-345-9348 <br>
                Mail. usa@youdomain.com
              </div>
            </div>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{ asset('js/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('js/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('js/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('js/js/popper.min.js')}}"></script>
  <script src="{{ asset('js/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('js/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('js/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('js/js/aos.js')}}"></script>

  <script src="{{ asset('js/js/main.js')}}"></script>
    
  </body>
</html>