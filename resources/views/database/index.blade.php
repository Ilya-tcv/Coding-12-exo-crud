<!DOCTYPE html>
<html lang="en" style="height:100%">

<head>
  <meta charset="utf-8">
  <title>Database Changer</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/animate-css/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body style="background-color:#1b2631;min-height: 100%;position:relative;padding-bottom:10em">
    {{-- <div id="preloader"></div> --}}

    <header id="header">
        <div class="container">
    
          <div id="logo" class="pull-left">
            {{-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> --}}
            <!-- Uncomment below if you prefer to use a text image -->
            <h1><a href="/11 - Exo-Crud/public/database">DATABASE CHANGER</a></h1>
          </div>
    
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="/11 - Exo-Crud/public/">Main Site</a></li>
                <li><a href="/11 - Exo-Crud/public/database/about">About Us</a></li>
              <li><a href="/11 - Exo-Crud/public/database/services">Services</a></li>
              <li><a href="/11 - Exo-Crud/public/database/portfolio">Portfolio</a></li>
              <li><a href="/11 - Exo-Crud/public/database/testimonials">Testimonials</a></li>
              <li><a href="/11 - Exo-Crud/public/database/team">Team</a></li>
              <li><a href="/11 - Exo-Crud/public/database/messages">Messages</a></li>
            </ul>
          </nav>
          <!-- #nav-menu-container -->
        </div>
      </header>
      <!-- #header -->
    
    @yield('content')  
    
    
    <footer id="footer" style="position: absolute;bottom:0;width:100%">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright">
                &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
              </div>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- #footer -->
    
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
</body>
</html>