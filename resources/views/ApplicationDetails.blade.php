
@extends("layouts.layout")
  <!-- ======= Hero Section ======= -->
  @section("title","MENASYS - Détails Appliaction")
  @section("content")
  <main id="main">

    <!-- ======= about-page ======= -->
    <section class="about-page">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="about-title">Détails Appliaction</h2>
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Détails Appliaction</li>
          </ol>
        </div>
      </div>
    </section><!-- End about-page -->

    <!-- Features Section -->
    <section id="featuresAPP" class="featuresAPP section">

      <div class="container section-title" data-aos="fade-up">
        <h2>GESTION MER</h2>
        <p>Necessitatibus eius consequatur ex aecessitatibus eius consequatur ex aecessitatibus eius consequatur ex aecessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->
      <br><br>
      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#featuresAPP-tab-1">
              <i class="bi bi-info-circle"></i>
              <h4 class="d-none d-lg-block">DESCRIPTION</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#featuresAPP-tab-2">
              
              <i class="bi bi-code-square"></i>
              <h4 class="d-none d-lg-block">FICHE TECHNIQUE</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#featuresAPP-tab-3">
              <i class="bi bi-window-fullscreen"></i>
              <h4 class="d-none d-lg-block">CAPTURES</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#featuresAPP-tab-4">
              <i class="bi bi-file-earmark-text"></i>
              <h4 class="d-none d-lg-block">DEVIS</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="featuresAPP-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="featuresAPP-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <button type="button" class="btn4 green"><i class="bi bi-arrow-down-circle"></i>  Télécharger</button>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="featuresAPP-tab-3">
            <div class="row">
              <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3 class="d-flex justify-content-center">Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3><br>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="crslItem" src="https://c4.wallpaperflare.com/wallpaper/145/198/400/tree-4k-full-hd-desktop-download-wallpaper-preview.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                      <img class="crslItem" src="https://c4.wallpaperflare.com/wallpaper/808/79/717/tree-4k-download-for-desktop-wallpaper-preview.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                      <img class="crslItem" src="https://c4.wallpaperflare.com/wallpaper/808/79/717/tree-4k-download-for-desktop-wallpaper-preview.jpg" class="d-block w-100" alt="https://c4.wallpaperflare.com/wallpaper/808/79/717/tree-4k-download-for-desktop-wallpaper-preview.jpg">
                    </div>
                  </div>
                  <button class="carousel-control-prev icn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next icn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>


                



              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="featuresAPP-tab-4">
            <div class="row">
              <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                

                <label for="">Remplissez le formulaire ci-dessous et un conseiller clientèle traitera votre demande dans les plus brefs délais.</label>   
                <br><br>             



                <form id="captcha-form" action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">
    

                    <div class="col-md-6 inputBox">
                      <input type="text" name="NomEntreprise" class="form-control" required>
                      <span>Nom de l'entreprise</span>
                    </div>
                    <div class="col-md-6 inputBox">
                      <input type="text" name="Activite" class="form-control" required>
                      <span>Activité</span>
                    </div>

                    <div class="col-md-6 inputBox">
                      <input type="text" name="NomPrenom" class="form-control" required>
                      <span>Nom et Prénom</span>
                    </div>

                    <div class="col-md-6 inputBox">
                      <input type="text" name="Fonction" class="form-control" required>
                      <span>Fonction</span>
                    </div>

                    <div class="col-md-6 inputBox">
                      <input type="email" name="adremail" class="form-control" required>
                      <span>Email</span>
                    </div>

                    <div class="col-md-6 inputBox">
                      <input type="text" name="Téléphone" class="form-control" required>
                      <span>Téléphone</span>
                    </div>

                    <div class="col-md-6 inputBox">
                      <input type="text" name="Adresse" class="form-control" required>
                      <span>Adresse</span>
                    </div>

                    <div class="col-md-6 inputBox">
                      <input type="text" name="Ville" class="form-control" required>
                      <span>Ville</span>
                      <span class="form-control-clear glyphicon glyphicon-remove form-control-feedback hidden"></span>
                    </div>

    
        
                    <div class="col-md-12">
                      <select class="form-select" aria-label="Default select example" required>
                        <option disabled selected value="">Budget Mensuel Estimé</option>
                        <option value="1">500 MAD - 1000 MAD</option>
                        <option value="2">1000 MAD - 1500 MAD</option>
                        <option value="3">3000 MAD - 3500 MAD</option>
                        <option value="3">5000 MAD - 7000 MAD</option>
                        <option value="3">10000 MAD - 15000 MAD</option>
                        <option value="3">500000 MAD - 800000 MAD</option>
                      </select>                
                    </div>
    
                    


                    <div class="col-md-6 ">
                      
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="CI">
                        <label class="form-check-label" for="CI">
                          Conseil informatique
                        </label>
                      </div>


                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="DSP">
                        <label class="form-check-label" for="DSP">
                          Développement spécifique
                        </label>
                      </div>


                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="DM">
                        <label class="form-check-label" for="DM">
                          Développement mobile
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="DVW">
                        <label class="form-check-label" for="DVW">
                          Développement WebApp
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="DAC">
                        <label class="form-check-label" for="DAC">
                          Développement d'applications Cloud
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="DW">
                        <label class="form-check-label" for="DW">
                          Développement WinApp
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="DDAPI">
                        <label class="form-check-label" for="DDAPI">
                          Développement et documentation d'API
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ABD">
                        <label class="form-check-label" for="ABD">
                          Administration de Base de données
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="MD">
                        <label class="form-check-label" for="MD">
                          Migration de données
                        </label>
                      </div>


                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="MR">
                        <label class="form-check-label" for="MR">
                          Référencement/Maintenance
                        </label>
                      </div>

                      


                    </div>


                    <div class="col-md-6 ">

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="CG">
                        <label class="form-check-label" for="CG">
                          Création Graphique
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="UXUI">
                        <label class="form-check-label" for="UXUI">
                          UI/UX Design
                        </label>
                      </div>


                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="3D">
                        <label class="form-check-label" for="3D">
                          Conception 3D
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="VFX">
                        <label class="form-check-label" for="VFX">
                          Motion Graphic/VFX
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="CEM">
                        <label class="form-check-label" for="CEM">
                          Conception d'emballage
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="MPCI">
                        <label class="form-check-label" for="MPCI">
                          Mise en page et conception d'impression
                        </label>
                      </div>
                      
                    </div>


                    <div class="col-md-12">
                      <select class="form-select" aria-label="Default select example" required>
                        <option disabled selected value="">Comment avez-vous connu MENASYS ?</option>
                        <option value="1">Publicité</option>
                        <option value="2">Sur intarnet</option>
                        <option value="3">Je suis déjà un client régulier</option>
                        <option value="3">Bonch à oreille</option>
                        <option value="3">Facebook</option>
                        <option value="3">Réception d'un e-mail publicitaire</option>
                        <option value="3">Autre</option>
                      </select>                
                    </div>



    
                    <div class="col-12 inputBox">
                      <textarea class="form-control " name="messagedevis" rows="6" required></textarea>
                      <span>Décrivez vos besoins en détail</span>
                    </div>

                    <div class="col-md-6 inputBox">
                      <div class="mb-3 d-flex align-items-center">
                        <canvas id="captcha" width="200" height="80"></canvas>
                        <button type="button" class="btn btn-secondary" id="refresh-captcha">
                          <i class="fa fa-refresh"></i>
                        </button>
                      </div>
                    </div>
                    <div class="col-md-6 inputBox"></div>
                    <div class="col-md-3 inputBox">
                      <input type="text" id="captcha-input" name="captcha-input" class="form-control" required>
                      <span>Entrez le Captcha</span>
                    </div>


                    <div class="col-12">
                      </div>
                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
    
                      <button type="submit" class="btn4 green">SOUMETTRE</button>
                    </div>
    
                  </div>
                </form>



              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->



    <section id="servicesAPP" class="servicesAPP section-bg">

      <div class="container section-title" data-aos="fade-up">
        <h2>GESTION MER</h2>
        <p>PRINCIPALES FONCTIONNALITES</p>
      </div><!-- End Section Title -->
      <br><br>
      <div class="container">

        
        <div class="content" data-aos="fade-up">
          <div class="container">
            <div class="row g-0">
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">01</span>
                  <div class="service-item-icon">
                    <i class="bi bi-windows"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Planting</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">02</span>
                  <div class="service-item-icon">
                    <i class="bi bi-pc-display"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Mulching</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">03</span>
                  <div class="service-item-icon">
                    <i class="bi bi-ubuntu"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Plowing</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">04</span>
                  <div class="service-item-icon">
                    <i class="bi bi-ubuntu"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Mowing</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">05</span>
                  <div class="service-item-icon">
                    <i class="bi bi-database"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Seeding</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">06</span>
                  <div class="service-item-icon">
                    <i class="bi bi-filetype-sql"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Fresh Vegetables</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">07</span>
                  <div class="service-item-icon">
                    <i class="bi bi-code-slash"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Watering</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="service-item">
                  <span class="number">08</span>
                  <div class="service-item-icon">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="service-item-content">
                    <h3 class="service-heading">Vegetable selling</h3>
                    <p>
                      Gravida sodales condimentum pellen tesq accumsan orci quam
                      sagittis sapie
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        

      </div>

    </section><!-- /Features Section -->
    
  
  </main><!-- End #main -->
  @endsection