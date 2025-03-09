
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/img/favicon.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Michroma&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->

  <link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Animate Css CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css" integrity="sha512-gFn7XRm5v3GlgOwAQ80SXDT8pyg6uaV9JbW2OkNx5Im2jR8zx2X/3DbHymcZnUraU+klZjRJqNfNkFN7SyR3fg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css" integrity="sha512-b42SanD3pNHoihKwgABd18JUZ2g9j423/frxIP5/gtYgfBz/0nDHGdY/3hi+3JwhSckM3JLklQ/T6tJmV7mZEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- leafletjs Css CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" integrity="sha512-Zcn6bjR/8RZbLEpLIeOwNtzREBAJnUKESxces60Mpoj+2okopSAcSUIUOseddDm0cxnGQzxIR7vJgsLZbdLE3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" integrity="sha512-h9FcoyWjHcOcmEVkxOfTLnmZFWIH0iZhZT1H2TbOq55xssQGEJHEaIm+PgoUaZbRvQTNTluNOEfb1ZRy6D3BOw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  


  <!-- owl carousel Css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css" integrity="sha512-riTSV+/RKaiReucjeDW+Id3WlRLVZlTKAJJOHejihLiYHdGaHV7lxWaCfAvUR0ErLYvxTePZpuKZbrTbwpyG9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- flat-ui Css CDN -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-3/assets/css/blog-3.css">
  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">


</head>

<body>


  <!-- ======= Header ======= -->

       <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a href="{{ url('/') }}"><img src="{{ asset('/img/LOGO-MENASYS.png') }}" class="navbar-brand me-auto" href="#"></a>
          
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <a href="{{ url('/') }}"><img src="{{ asset('/img/LOGO-MENASYS.png') }}" class="navbar-brand me-auto"></a>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                 
                <li class="nav-item">
                  <a class="nav-link  scrollto mx-lg-2 {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{ url('/') }}"> <span class="navspace">Accueil</span></a>
                </li>
                

                <li class="nav-item">
                 <a class="nav-link scrollto mx-lg-2 {{ request()->is('apropos') ? 'active' : ''}} " aria-current="page" href="{{ url('/apropos') }}"><span class="navspace">A Propos</span></a>
               </li>
               <li class="nav-item">
                <a class="nav-link scrollto mx-lg-2 {{ request()->is('actualites') ? 'active' : ''}} " aria-current="page" href="{{ url('/actualites') }}"><span class="navspace">Actualités</span></a>
              </li>
              <li class="nav-item mx-lg-2 dropdown {{ request()->is('applications') ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="navspace">Applications</span>
                </a>
                <ul class="dropdown-menu">
                  
                  <li><a class="dropdown-item" href="{{ url('/DetailsApplication') }}"><span class="navspace">Point de Vente</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Controle de rondes</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Systéme du pointage</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Serveur & Réseau</span></a></li>
                  
                </ul>
              </li>
              

              <li class="nav-item mx-lg-2 dropdown {{ request()->is('matériels') ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="navspace">Matériels</span>
                </a>
                <ul class="dropdown-menu">
                  
                  <li><a class="dropdown-item" href="{{ url('/DetailsMateriel') }}"><span class="navspace">Point de Vente</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Controle de rondes</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Systéme du pointage</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Serveur & Réseau</span></a></li>
                  
                </ul>
              </li>


              <li class="nav-item mx-lg-2 dropdown {{ request()->is('services') ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="navspace">Services</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('/DetailsService') }}"><span class="navspace">Développement APPS Cloud</span></a></li>
                  <li><a class="dropdown-item" href="{{ url('/DetailsService') }}"><span class="navspace">Développement Spécifique</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Développement Mobile</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Migration de Données</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Conception 3D</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">UI/UX Design</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="navspace">Formation</span></a></li>
                  
                </ul>
              </li>
               <li class="nav-item">
                 <a class="nav-link scrollto mx-lg-2 {{ request()->is('contact') ? 'active' : ''}}" aria-current="page" href="{{ url('/contact') }}"><span class="navspace">Contact</span></a>
               </li>
                
               
                
                <li class="social-links-master">
                  <i class="bi bi-twitter-x"></i>&nbsp;&nbsp;
                  <i class="bi bi-facebook"></i>&nbsp;&nbsp;
                  <i class="bi bi-github"></i>
                </li>

                <li> 
                  <div class="searchBox">
                    <input class="searchInput"type="text" name="" placeholder="Recherche">
                    <button class="searchButton" href="#">
                      <i class="bi bi-search icon-search"></i>
                    </button>
                  </div></li>
              </ul>
              
              
            </div>
          </div>
          <a href="{{ url('/DemanderDevis') }}" class="login-button">Devis Gratuit</a>
          <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
        </div>
      </nav>

