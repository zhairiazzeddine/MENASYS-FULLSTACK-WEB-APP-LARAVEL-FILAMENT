
@extends("layouts.layout")
  <!-- ======= Hero Section ======= -->
  @section("title","MENASYS - Contact")
  @section("content")
  <main id="main">

    <!-- ======= about-page ======= -->
    <section class="about-page">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="about-title">Contact</h2>
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </div>
    </section><!-- End about-page -->

      <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contactez nous</h2>
        <p>Réserver un appel ou remplissez le formulaire ci-dessous et nous vous contacterons
          dès que nous aurons traité votre demande.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-12">
                <div id="map">
              </div>
              </div><!-- End Info Item -->
              

            </div>

          </div>

          <div class="col-lg-6">
            <form id="captcha-form" action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6 inputBox">
                  <input type="text" name="Nom" class="form-control" required>
                  <span>Nom</span>
                </div>

                <div class="col-md-6 inputBox">
                  <input type="text" name="Prenom" class="form-control" required>
                  <span>Prénom</span>
                </div>

                <div class="col-md-6 inputBox">
                  <input type="email" name="Email" class="form-control" required>
                  <span>Email</span>
                </div>

                <div class="col-md-6 inputBox">
                  <input type="text" name="Tele" class="form-control" required>
                  <span>Téléphone</span>
                </div>

                <div class="col-12 inputBox">
                  <textarea class="form-control " name="messagedevis" rows="6" required></textarea>
                  <span>Décrivez vos besoins en détail</span>
                </div>


                <div class="col-12">
                  <label for="">Remplissez le formulaire ci-dessous et un conseiller clientèle traitera votre demande dans les plus brefs délais.</label>                
                  </div>

                  <div class="d-flex ">
                  <div class="col-md-6 inputBox">
                    <div class="mb-4 d-flex align-items-center">
                      <canvas id="captcha" width="200" height="80"></canvas>
                      <button type="button" class="btn btn-secondary" id="refresh-captcha">
                        <i class="fa fa-refresh"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-md-6 inputBox mmbb">
                    <input type="text" id="captcha-input" name="captcha-input" class="form-control" required>
                    <span>Captcha</span>
                  </div>
                </div>



                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button class="btn4 green" type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
  <!-- leafletjs JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js" integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet-src.js" integrity="sha512-x4B5AXtD8SqDqEpzOFXxCE0OOUhQ0Fep3Qka6WtUa3tw7z4fC7eOI4Vjm191HB63//4Y554Zxydbt2Hi8b+bVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet-src.min.js" integrity="sha512-3/WyQrhTdqSVmSifQS62akgtNBhZha2lS44TnoN9Jk3J01FvsKK4suVmz6t5FtccGb5iJw58GoFhBjPE5EPc8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js" integrity="sha512-puJW3E/qXDqYp9IfhAI54BJEaWIfloJ7JWs7OeD5i6ruC9JZL1gERT1wjtwXFlh7CjE7ZJ+/vcRZRkIYIb6p4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  // Creating map options
// Creating map options
var mapOptions = {
  center: [34.305450, -6.301709],
  zoom: 17
}

// Creating a map object
var map = new L.map('map', mapOptions);

// Creating a Layer object
var layer = L.tileLayer('https://tiles.stadiamaps.com/tiles/stamen_toner/{z}/{x}/{y}{r}.{ext}', {
	minZoom: 0,
	maxZoom: 15,
  attribution: '&copy; <a href="https://www.arcgis.com/home/webmap/viewer.html" target="_blank">MENASYS ArcGIS</a>',
	ext: 'png'
});

var marker = L.marker([34.305450, -6.301709]).addTo(map);
marker._icon.classList.add("huechange");
marker.bindPopup("<center><b>MENASYS</b></center>").openPopup();

// Adding layer to the map
map.addLayer(layer);

</script>
  </main><!-- End #main -->
  @endsection