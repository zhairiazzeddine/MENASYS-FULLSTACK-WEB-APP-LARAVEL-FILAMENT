
@extends("layouts.layout")
  <!-- ======= Hero Section ======= -->
  @section("title","MENASYS - Devis")
  @section("content")
  <main id="main">

    <!-- ======= about-page ======= -->
    <section class="about-page">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="about-title">Demande de devis</h2>
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Demande de devis</li>
          </ol>
        </div>
      </div>
    </section><!-- End about-page -->

    <!-- Features Section -->
    <section id="featuresAPP" class="featuresAPP section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Demander un devis</h2>
        <p>Remplissez le formulaire ci-dessous et un conseiller clientèle traitera votre demande dans les plus brefs délais.</p>
      </div><!-- End Section Title -->
      <br><br>
      <div class="container">

       

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">


            <div class="row">
              <div class="col-lg-12 order-2 order-lg-1 mt-lg-0">
               
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


        </div>

      </div>

    </section><!-- /Features Section -->



    
    
  
  </main><!-- End #main -->
  @endsection