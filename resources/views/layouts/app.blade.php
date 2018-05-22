<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
    
        <title>TUBES P3L</title>
    
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        
        <script src="assets/js/modernizr.js"></script>
      </head>
      <body>
            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ url('/') }}">P3L.</a>
                </div>
                <div class="navbar-collapse collapse navbar-right">
                  <ul class="nav navbar-nav">
                   <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
                   
             
            <!-- *****************************************************************************************************************
             TAMPILAN DEPAN P3L YG UDAH ADA(BANNER)
             ***************************************************************************************************************** -->
            <p>
             <div class="container mtb">
                 <div class="row">
                <!-- COPAS KODING BANNER DISINI-->
                    <main class="py-4">
                        @yield('content')
                    </main>
                 </div><! --/row -->
             </div><! --/container -->
             </p>
        
            <!-- *****************************************************************************************************************
             FOOTER
             ***************************************************************************************************************** -->
             <div id="footerwrap">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-4">
                             <h4>About</h4>
                             <div class="hline-w"></div>
                             <p>Untuk Memenuhi Salah Satu Tugas Besar Mata Kuliah Proyek Pengembangan Perangkat Lunak</p>
                         </div>
                         <div class="col-lg-4">
                             <h4>Social Links</h4>
                             <div class="hline-w"></div>
                             <p>
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-tumblr"></i></a>
                             </p>
                         </div>
                         <div class="col-lg-4">
                             <h4>Our Bunker</h4>
                             <div class="hline-w"></div>
                             <p>
                                 Universitas Jendral Achmad Yani, Kampus Cimahi<br/>
                                 Indonesia.<br/>
                             </p>
                         </div>
                     
                     </div><! --/row -->
                 </div><! --/container -->
             </div><! --/footerwrap -->
             
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/retina-1.1.0.js"></script>
            <script src="assets/js/jquery.hoverdir.js"></script>
            <script src="assets/js/jquery.hoverex.min.js"></script>
            <script src="assets/js/jquery.prettyPhoto.js"></script>
              <script src="assets/js/jquery.isotope.min.js"></script>
              <script src="assets/js/custom.js"></script>
        
        
          </body>
        </html>