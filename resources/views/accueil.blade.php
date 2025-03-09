@extends("layouts.layout")
  <!-- ======= Hero Section ======= -->
  @section("title","MENASYS - Accueil")
  @section("content")
  <section id="hero" class="d-flex align-items-center">
    <canvas id="canvas1"></canvas>

    <div class="container-fluid" data-aos="fade-up">
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="11000">
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 class="animate__animated animate__fadeInDown animate__delay-1s">SiteWeb Vitrine À seulement 2000 DH HT</h1>
                <h2 class="animate__animated animate__fadeInDown animate__delay-2s">Notre agence de communication vous accompagne lors de vos premiers pas dans le monde numérique.</h2>
                <div class="animate__animated animate__fadeInDown animate__delay-3s"><a href="#about" class="btn-get-started btn-slice scrollto"><div class="top"><span>Voir Plus</span></div><div class="bottom"><span>Voir Plus</span></div></a></div>
              </div>
              <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img animate__animated animate__zoomIn animate__delay-4s" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('/img/hero-img.png ') }}" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 class="animate__animated animate__fadeInDown animate__delay-1s">SiteWeb Vitrine À seulement 2000 DH HT</h1>
                <h2 class="animate__animated animate__fadeInDown animate__delay-2s">Notre agence de communication vous accompagne lors de vos premiers pas dans le monde numérique.</h2>
                <div class="animate__animated animate__fadeInDown animate__delay-3s"><a href="#about" class="btn-get-started btn-slice scrollto"><div class="top"><span>Voir Plus</span></div><div class="bottom"><span>Voir Plus</span></div></a></div>
              </div>
              <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img animate__animated animate__zoomIn animate__delay-4s" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('/img/122.png ') }}" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>       
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->









    <section id="coSecvice" class="commonSection coSecvice">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  
                  <h1 data-aos="zoom-in" data-aos-delay="150" class="titile-intro ">MENASYS<br> Votre partenaire de réussite</h1>

</h2>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div data-aos="fade-up" data-aos-delay="350" class="col-xl-3 col-lg-6 col-md-6">
                  <div class="singleService boxTop text-center clearfix">
                    <div class="box0">
                      <i class="aprova-lightbsulb"></i>
                  </div>
                      <h3 class="titile">PASSION</h3>
                      <p class="desc">Nous nous investissons à fond dans chaque projet entrepris afin de vous faire profiter de notre expertise à son meilleur</p>
                  </div>
              </div>
              <div data-aos="fade-up" data-aos-delay="450" class="col-xl-3 col-lg-6 col-md-6">
                  <div class="singleService boxTop second_color text-center">
                      <div class="box1">
                          <i class="aprova-lightbsulb"></i>
                      </div>
                      <h3 class="titile">CRÉATIVITÉ</h3>
                      <p class="desc">Nous travaillons à développer des conceptions intelligents et créatifs</p>
                  </div>
              </div>
              <div data-aos="fade-up" data-aos-delay="550" class="col-xl-3 col-lg-6 col-md-6">
                  <div class="singleService boxTop third_color text-center">
                    <div class="box2">
                      <i class="aprova-startsup"></i>
                  </div>
                      <h3 class="titile">POLYVALENCE</h3>
                      <p class="desc">Notre équipe multidisciplinaire est en mesure de réaliser votre projet de qualité de A à Z</p>
                     
                     
                  </div>
              </div>
              <div data-aos="fade-up" data-aos-delay="650" class="col-xl-3 col-lg-6 col-md-6">
                  <div class="singleService boxTop four_color text-center">
                     
                      <div class="box3">
                          <i class="aprova-objesctive"></i>
                      </div>
                      <h3 class="titile">Excellentes solutions</h3>
                      <p class="desc">Notre équipe multidisciplinaire est en mesure de réaliser votre projet de qualité de A à Z</p>

                  </div>
              </div>
          </div>
      </div>
  </section>














    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{ asset('/img/about.jpg ') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <a href="#" class="read-more btn4 green">Read More <i class="bi bi-arrow-right-short"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div data-aos="zoom-in" data-aos-delay="250"class="row counters ">
          <div class="owl-carousel owl-theme ">

            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p class="d-flex justify-content-center"><img src="{{ asset('/img/Technology/1.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/2.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p class="d-flex justify-content-center"><img src="{{ asset('/img/Technology/3.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p class="d-flex justify-content-center"><img src="{{ asset('/img/Technology/4.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p class="d-flex justify-content-center"><img src="{{ asset('/img/Technology/5.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p class="d-flex justify-content-center"><img src="{{ asset('/img/Technology/6.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/7.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/8.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/9.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/10.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/11.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/12.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/13.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/14.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/15.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/16.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/17.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/18.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/19.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/20.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/21.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/22.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/23.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/24.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/25.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/26.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/27.png') }}" alt=""></p>
              </div>
            </div>
            <div class="item">
              <div class="col-lg-3 col-6 text-center">
                <p><img src="{{ asset('/img/Technology/28.png') }}" alt=""></p>
              </div>
            </div>
            

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="container">

          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item item-indigo position-relative">
                <i class="bi bi-calendar4-week icon"></i>
                <h3>Velit Doloremque.</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item item-indigo position-relative">
                <i class="bi bi-calendar4-week icon"></i>
                <h3>Velit Doloremque.</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item item-indigo position-relative">
                <i class="bi bi-calendar4-week icon"></i>
                <h3>Velit Doloremque.</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item item-indigo position-relative">
                <i class="bi bi-calendar4-week icon"></i>
                <h3>Velit Doloremque.</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item item-indigo position-relative">
                <i class="bi bi-calendar4-week icon"></i>
                <h3>Velit Doloremque.</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item item-indigo position-relative">
                <i class="bi bi-calendar4-week icon"></i>
                <h3>Velit Doloremque.</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
          </div>
  
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="featuresf" class="featuresf">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4 justify-content-between">
          <div class="features-image col-lg-5 order-lg-2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100"><img src="{{ asset('/img/features2.svg') }}" class="img-fluid" alt=""></div>
          <div class="col-lg-6 d-flex flex-column justify-content-center">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-archive flex-shrink-0"></i>
              <div>
                <h4>Est labore ad</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-basket flex-shrink-0"></i>
              <div>
                <h4>Harum esse qui</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-broadcast flex-shrink-0"></i>
              <div>
                <h4>Aut occaecati</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-camera-reels flex-shrink-0"></i>
              <div>
                <h4>Beatae veritatis</h4>
                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
              </div>
            </div><!-- End Features Item-->

          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla Fugiat enim eram quae cillum dolore dolor amet nulla culpa muFugiat enim eram quae cillum dolore dolor amet nulla culpa muFugiat enim eram quae cillum dolore dolor amet nulla culpa muFugiat enim eram quae cillum dolore dolor amet nulla culpa muFugiatlore dolor amet nulla culpa mu culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->






      <!-- ======= equipe Section ======= -->
    
    <section id="team" class="testimonials section team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Notre équipe</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>



        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="https://discoverymood.com/wp-content/uploads/2020/04/Mental-Strong-Women-min.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="https://discoverymood.com/wp-content/uploads/2020/04/Mental-Strong-Women-min.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="https://discoverymood.com/wp-content/uploads/2020/04/Mental-Strong-Women-min.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="https://discoverymood.com/wp-content/uploads/2020/04/Mental-Strong-Women-min.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>


      </div>
    </section><!-- End equipe Section -->








    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos partenaires</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        

        <div class="row portfolio-container mbpar">

         
          <div class="slider">
            <div class="slide-track">
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="{{ asset('/img/partenaires/2.png') }}" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
              </div>
            </div>
          </div> 

          
        </div><br><br><br>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <h4>29 MAD<span> / mois</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

   

  </main><!-- End #main -->
@endsection