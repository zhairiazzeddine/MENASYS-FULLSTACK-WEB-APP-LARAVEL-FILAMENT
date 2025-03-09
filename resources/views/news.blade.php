
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

      <div class="containercards">

        <div class="container section-title" data-aos="fade-up">
          <h2>NOS ACTUALITÉS</h2>
          <p>Necessitatibus eius consequatur ex aecessitatibus eius consequatur ex aecessitatibus eius consequatur ex aecessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->


        <form class="form-inline mb-5 mt-2">
          <input class="form-control mr-sm-2 inpt" id="filterv" type="search" placeholder="Recherche" aria-label="Recherche" autocomplete="off">
        </form>

        <div class="card-content" id="mycard" style="display :none;" >

          @foreach($dataN as $row)
                <div class="col-12 col-lg-4 cardx">
                  <article>
                    <div class="card border-0">
                      <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                        <a href="{{ url('actualitesDetails/'.$row->id) }}">
                          <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="{{ asset('storage/'.$row->ImageActualité) }}" alt="Nutrition">
                        </a>
                        <figcaption>
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInDown" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                          </svg>
                          <h4 class="h6 text-white bsb-hover-fadeInUp mt-2">Read More</h4>
                        </figcaption>
                      </figure>
                      <div class="card-body border bg-white p-4">
                        <div class="entry-header mb-3">
                          <ul class="entry-meta list-unstyled d-flex mb-2">
                            <li>
                              <a class="link-primary linkCard text-decoration-none" href="#!">{{ $row->tag }}</a>
                            </li>
                            <li>
                              @if($row->Dernière == "1") <a class="link-danger linkCard2 text-decoration-none" ><i class="bi bi-clock-history"></i> Nouvelle</a> @else @endif
                            </li>
                          </ul>
                          <h2 class="card-title entry-title h4 mb-0">
                            <a target="_blank" class="link-dark text-decoration-none" href="{{ url('actualitesDetails/'.$row->id) }}">{{ $row->TitreActualité }}</a>
                          </h2>
                        </div>
                        <p class="card-text entry-summary text-secondary">
                          {{ \Illuminate\Support\Str::limit($row->DescriptionActualité ?? '',100,' ...') }}
                        </p>
                      </div>
                      <div class="card-footer border border-top-2 bg-white p-4">
                        <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                          <li>
                            <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                              </svg>
                              <span class="ms-2 fs-7">{{ $row->DatePublication }}</span>
                            </a>
                          </li>
                          <li>
                            <span class="px-3">&bull;</span>
                          </li>
                          <li>
                            <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                              </svg>
                              <span class="ms-2 fs-7">39</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
            @endforeach


          </div>

          <div class="pagination">
            <li class="page-item previous-page disableNum"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item current-page activeNum"><a class="page-link" href="#">1</a></li>
            <li class="page-item dots"><a class="page-link" href="#">...</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
            <li class="page-item dots"><a class="page-link" href="#">...</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
            <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
         </div>
        </div>
            

     
  
    </section>

    
  
  </main><!-- End #main -->
  @endsection