
@extends("layouts.layout")
  <!-- ======= Hero Section ======= -->
  @section("title","MENASYS - Actualités")
  @section("content")
  <main id="main">

    <!-- ======= about-page ======= -->
    <section class="about-page">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="about-title">Actualités</h2>
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Actualités</li>
          </ol>
        </div>
      </div>
    </section><!-- End about-page -->

    <section class="inner-page">
      
      @foreach($dataNDetais as $row)
      <div id="main-content" class="blog-page">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="cardab single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="{{ asset('storage/'.$row->ImageActualité) }}" alt="First slide">
                            </div>
                            <p><u>Date : {{ $row->DatePublication }} ({{ $row->HeurePublication }})</u></p><br><br>
                            <h3><a href="blog-details.html">{{ $row->TitreActualité }}</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>                        
                    </div>
                    <div class="cardab">
                            <div class="header">
                                <h2>Comments (3)</h2>
                            </div>
                            <div class="body">
                                <ul class="comment-reply list-unstyled">
                                    <li class="row clearfix">
                                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image"></div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="m-b-0">Gigi Hadid </h5>
                                            <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">Mar 09 2018</a></li>
                                                <li><a href="javascript:void(0);">Reply</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="row clearfix">
                                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Awesome Image"></div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="m-b-0">Christian Louboutin</h5>
                                            <p>Great tutorial but few issues with it? If i try open post i get following errors. Please can you help me?</p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">Mar 12 2018</a></li>
                                                <li><a href="javascript:void(0);">Reply</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="row clearfix">
                                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Awesome Image"></div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="m-b-0">Kendall Jenner</h5>
                                            <p>Very nice and informative article. In all the years I've done small and side-projects as a freelancer, I've ran into a few problems here and there.</p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">Mar 20 2018</a></li>
                                                <li><a href="javascript:void(0);">Reply</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>                                        
                            </div>
                        </div>
                        <div class="cardab">
                            <div class="header">
                                <h2>Leave a Reply</h2>
                            </div>
                            <div class="container">
                              <div class="row justify-content-lg-center">
                                <div class="col-12 col-lg-12">
                                  <div class="bg-white overflow-hidden">
                          
                                    <form action="#!">
                                      <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                        <div class="col-12 col-md-4">
                                          <label for="fullname" class="form-label">Name <span class="text-danger">*</span></label>
                                          <div class="input-group">
                                            <span class="input-group-text">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                              </svg>
                                            </span>
                                            <input type="text" class="form-control" id="fullname" value="" required>
                                          </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                          <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                          <div class="input-group">
                                            <span class="input-group-text">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                              </svg>
                                            </span>
                                            <input type="email" class="form-control" id="email" value="" required>
                                          </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                          <label for="website" class="form-label">Website</label>
                                          <div class="input-group">
                                            <span class="input-group-text">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                                              </svg>
                                            </span>
                                            <input type="url" class="form-control" id="website" value="">
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <label for="comment" class="form-label">Comment <span class="text-danger">*</span></label>
                                          <textarea class="form-control" id="comment" rows="3" required></textarea>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-check-input" type="checkbox" value="" id="savecheck">
                                          <label class="form-check-label" for="savecheck">
                                            Save my data in this browser for the next time I comment.
                                          </label>
                                        </div>
                                        <div class="col-12">
                                          <div class="d-grid">
                                            <button class="btn btn-outline-dark" type="submit">Post Comment</button>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                          
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="cardab">
                        <div class="body search">
                            <div class="input-group m-b-0">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recherche" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-dark" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                              </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="cardab">
                        <div class="header">
                            <h2>Categories Clouds</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled categories-clouds m-b-0">
                                <li><a href="javascript:void(0);">eCommerce</a></li>
                                <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                                <li><a href="javascript:void(0);">Creative UX</a></li>
                                <li><a href="javascript:void(0);">Wordpress</a></li>
                                <li><a href="javascript:void(0);">Angular JS</a></li>
                                <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                                <li><a href="javascript:void(0);">Website Design</a></li>
                                <li><a href="javascript:void(0);">HTML5</a></li>
                                <li><a href="javascript:void(0);">Infographics</a></li>
                                <li><a href="javascript:void(0);">Wordpress Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cardab">
                      <div class="header">
                          <h2>MENASYS on Facebook</h2>
                      </div>
                      <div class="body widget">
                        <div class="fb-page" data-href="https://www.facebook.com/SEMYIZ?locale=fr_FR" data-tabs="timeline" data-width="400" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SEMYIZ?locale=fr_FR" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SEMYIZ?locale=fr_FR">SEM Yacouba Isaac ZIDA</a></blockquote></div>                      </div>
                  </div>
                    
                   
                </div>
            </div>

        </div>
    </div>
    @endforeach

       
  
    </section>

    
  
  </main><!-- End #main -->
  @endsection