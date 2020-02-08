@extends('layouts.frontend.home-design') @section('styles')


<link rel="stylesheet" href="{{ asset('assets/frontend/blog/css/master.css')}}" />


@endsection 
@section('content') 

<div class="container">
        <div class="row">
          <div class="col-md-9">
            <main class="l-main-content">
              <div class="posts-group wrap-inl-bl">
                <div class="row">
                  <div class="col-md-6">
                    <section class="b-post b-post-2 clearfix">
                      <div class="entry-media"><a class="js-zoom-images" href="{{ asset('assets/frontend/templates/img/7.jpg')}}"><img class="img-responsive read more" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="Foto"></a>
                      </div>
                      <div class="entry-inner">
                        <div class="entry-date"><span class="entry-date__number">25</span><span class="entry-date__month">Apr</span></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>john sena</strong></a></span><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>web design</strong></a></span>
                            </div>
                            <h2 class="entry-title"><a href="blog-post.html">Dolor amet adipscud</a></h2>
                          </div>
                          <div class="entry-content">
                            <p>Adipisicing elit sed doas eiusmod ven temp dunts uet labore et dolore magna aliqua en ad minim veniam quis eiusmod tempor inc labore adipisicing elit sed.</p>
                          </div>
                          <div class="entry-footer"><a class="btn btn-will" href="blog-post.html">read more</a></div>
                        </div>
                      </div>
                    </section>
                    <!-- end .post-->
                  </div>
                  <div class="col-md-6">
                    <section class="b-post b-post-2 clearfix">
                      <div class="entry-media"><a class="js-zoom-images" href="{{ asset('assets/frontend/templates/img/7.jpg')}}"><img class="img-responsive read more" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="Foto"></a>
                      </div>
                      <div class="entry-inner">
                        <div class="entry-date"><span class="entry-date__number">08</span><span class="entry-date__month">Apr</span></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>john sena</strong></a></span><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>web design</strong></a></span>
                            </div>
                            <h2 class="entry-title"><a href="blog-post.html">Amet adipscud elit temp</a></h2>
                          </div>
                          <div class="entry-content">
                            <p>Adipisicing elit sed doas eiusmod ven temp dunts uet labore et dolore magna aliqua en ad minim veniam quis eiusmod tempor inc labore adipisicing elit sed.</p>
                          </div>
                          <div class="entry-footer"><a class="btn btn-will" href="blog-post.html">read more</a></div>
                        </div>
                      </div>
                    </section>
                    <!-- end .post-->
                  </div>

                  <div class="col-md-6">
                    <section class="b-post b-post-2 clearfix">
                      <div class="entry-media"><a class="js-zoom-images" href="{{ asset('assets/frontend/templates/img/7.jpg')}}"><img class="img-responsive read more" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="Foto"></a>
                      </div>
                      <div class="entry-inner">
                        <div class="entry-date"><span class="entry-date__number">08</span><span class="entry-date__month">Apr</span></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>john sena</strong></a></span><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>web design</strong></a></span>
                            </div>
                            <h2 class="entry-title"><a href="blog-post.html">Amet adipscud elit temp</a></h2>
                          </div>
                          <div class="entry-content">
                            <p>Adipisicing elit sed doas eiusmod ven temp dunts uet labore et dolore magna aliqua en ad minim veniam quis eiusmod tempor inc labore adipisicing elit sed.</p>
                          </div>
                          <div class="entry-footer"><a class="btn btn-will" href="blog-post.html">read more</a></div>
                        </div>
                      </div>
                    </section>
                    <!-- end .post-->
                  </div>
                  <div class="col-md-6">
                    <section class="b-post b-post-2 clearfix">
                      <div class="entry-media"><a class="js-zoom-images" href="{{ asset('assets/frontend/templates/img/7.jpg')}}"><img class="img-responsive read more" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="Foto"></a>
                      </div>
                      <div class="entry-inner">
                        <div class="entry-date"><span class="entry-date__number">08</span><span class="entry-date__month">Apr</span></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>john sena</strong></a></span><span class="entry-meta__item"><a class="entry-meta__link text-primary" href="blog-main.html"><strong>web design</strong></a></span>
                            </div>
                            <h2 class="entry-title"><a href="blog-post.html">Amet adipscud elit temp</a></h2>
                          </div>
                          <div class="entry-content">
                            <p>Adipisicing elit sed doas eiusmod ven temp dunts uet labore et dolore magna aliqua en ad minim veniam quis eiusmod tempor inc labore adipisicing elit sed.</p>
                          </div>
                          <div class="entry-footer"><a class="btn btn-will" href="blog-post.html">read more</a></div>
                        </div>
                      </div>
                    </section>
                    <!-- end .post-->
                  </div>
                </div>
                <ul class="pagination pagination_post text-center">
                  <li><a href="#"></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"></a></li>
                </ul>
              </div>
            </main>
          </div>
          <div class="col-md-3">
            <aside class="l-sidebar">
              <div class="widget widget-searce section-sidebar">
                <form class="form-sidebar" id="search-global-form" _lpchecked="1">
                  <input class="form-sidebar__input form-control" type="text" placeholder="search blog">
                  <button class="form-sidebar__btn"><i class="icon fa fa-search"></i></button>
                </form>
              </div>
              <!-- end .widget-->
              <section class="widget section-sidebar">
                <h3 class="widget-title ui-title-type-1">categories</h3>
                <div class="widget-content">
                  <ul class="widget-list list list-mark-5">
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">Business</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">World Travelling</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">Web Development</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">Photography</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">Technology</a></li>
                  </ul>
                </div>
              </section>
              <!-- end .widget-->
              <section class="widget section-sidebar">
                <h3 class="widget-title ui-title-type-1">recent posts</h3>
                <div class="widget-content">
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="foto"></a>
                    <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="blog-post.html">Dolor sit amet consec acing elit eiusmod</a>
                      <div class="post-widget__author">john sena</div>
                    </div>
                    <!-- end .widget-post-->
                  </div>
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="foto"></a>
                    <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="blog-post.html">Min veniam quis nost exercit gion ulla</a>
                      <div class="post-widget__author">john sena</div>
                    </div>
                    <!-- end .widget-post-->
                  </div>
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="foto"></a>
                    <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="blog-post.html">Dolor sit amet consec acing elit eiusmod</a>
                      <div class="post-widget__author">john sena</div>
                    </div>
                    <!-- end .widget-post-->
                  </div>
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="foto"></a>
                    <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="blog-post.html">Min veniam quis nost exercit gion ulla</a>
                      <div class="post-widget__author">john sena</div>
                    </div>
                    <!-- end .widget-post-->
                  </div>
                </div>
              </section>
              <!-- end .widget-->
              <section class="widget section-sidebar">
                <h3 class="widget-title ui-title-type-1">Archives</h3>
                <div class="widget-content">
                  <ul class="widget-list list list-mark-5">
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">March 2017</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">February 2017</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">January 2017</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">December 2016</a></li>
                    <li class="widget-list__item"><a class="widget-list__link" href="blog-post.html">November 2016</a></li>
                  </ul>
                </div>
              </section>
              <section class="widget section-sidebar">
                <h3 class="widget-title ui-title-type-1">the tags</h3>
                <div class="widget-content">
                  <ul class="list-tags list-unstyled">
                    <li class="list-tags__item"><a class="list-tags__link btn btn-default" href="blog-main.html">designing</a></li>
                    <li class="list-tags__item"><a class="list-tags__link btn btn-default" href="blog-main.html">seo services</a></li>
                    <li class="list-tags__item"><a class="list-tags__link btn btn-default" href="blog-main.html">photography</a></li>
                    <li class="list-tags__item"><a class="list-tags__link btn btn-default" href="blog-main.html">webdesign</a></li>
                    <li class="list-tags__item"><a class="list-tags__link btn btn-default" href="blog-main.html">all works</a></li>
                    <li class="list-tags__item"><a class="list-tags__link btn btn-default" href="blog-main.html">psd template</a></li>
                  </ul>
                </div>
              </section>
              <!-- end .widget-->
            </aside>
            <!-- end .sidebar-->
          </div>
        </div>
      </div>
@endsection @section('scripts')
  <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    {{-- <script src="{{ asset('assets/frontend/blog/libs/jquery-1.12.4.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/blog/libs/jquery-migrate-1.2.1.js')}}"></script> --}}
    <script src="{{ asset('assets/frontend/blog/libs/modernizr.custom.js')}}"></script>
    <!-- Bootstrap-->
    {{-- <script src="{{ asset('assets/frontend/blog/libs/bootstrap/bootstrap.min.js')}}"></script> --}}
    <!-- Slider-->
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/owl-carousel/owl.carousel.min.js')}}"></script> --}}
    <!-- Pop-up window-->
    <script src="{{ asset('assets/frontend/blog/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- Headers scripts-->
    <script src="{{ asset('assets/frontend/blog/plugins/headers/jquery.dlmenu.js')}}"></script>
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/headers/slidebar.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/headers/header.js')}}"></script> --}}
    <!-- Mail scripts-->
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/jqBootstrapValidation.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/contact_me.js')}}"></script> --}}
    <!-- Filter and sorting images-->
    <script src="{{ asset('assets/frontend/blog/plugins/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/blog/plugins/isotope/imagesLoaded.js')}}"></script>
    <!-- Progress numbers-->
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js')}}"></script> --}}
    <script src="{{ asset('assets/frontend/blog/plugins/rendro-easy-pie-chart/waypoints.min.js')}}"></script>
    <!-- Animations-->
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/scrollreveal/scrollreveal.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/revealer/js/scrollMonitor.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/revealer/js/main.js')}}"></script> --}}
    <script src="{{ asset('assets/frontend/blog/plugins/TiltHoverEffects/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/blog/plugins/TiltHoverEffects/js/anime.min.js')}}"></script>
    {{-- <script src="{{ asset('assets/frontend/blog/plugins/TiltHoverEffects/js/main.js')}}"></script> --}}
    <script src="{{ asset('assets/frontend/blog/plugins/animate/wow.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/blog/plugins/animate/jquery.shuffleLetters.js')}}"></script>
    <script src="{{ asset('assets/frontend/blog/plugins/animate/jquery.sticky-kit.js')}}"></script>
    <script src="{{ asset('assets/frontend/blog/plugins/animate/typed.js')}}"></script>
    <!-- User customization-->
    {{-- <script src="{{ asset('assets/frontend/blog/js/custom.js')}}"></script> --}}


@endsection