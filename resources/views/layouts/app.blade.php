<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Go violin 𝄞</title>
   
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-5.5/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" >
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/199447.png">

  </head>
  <body>    
    <!-- Hero section -->
    <section id="hero" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a href="{{ route ('home') }}" class="navbar-brand">Go violin 𝄞</a>
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="{{ route ('home') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="{{ route ('scale') }}">Scales And Arpeggios</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="{{ route ('duets') }}">Duets</a>
              </li>                    
            </ul>
          </div>        
        </div>
      </nav>
      
@yield('content')


</div>
    
</body>
</html>
