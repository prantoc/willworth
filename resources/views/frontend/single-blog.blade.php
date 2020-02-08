@extends('layouts.frontend.home-design') @section('styles')


<link rel="stylesheet" href="{{ asset('assets/frontend/blog/css/master.css')}}" />


@endsection 
@section('content') 

<div class="container">
        <div class="row">
          <div class="col-md-9">
            <main class="l-main-content">
              <div class="posts-group posts-group_pdg-right_lg">
                <article class="b-post b-post-full clearfix">
                  <div class="entry-date"><span class="entry-date__number">29</span><span class="entry-date__month">Apr</span></div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">john sena</a></span><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">web design</a></span></div>
                      <h2 class="entry-title">Dolor amet adipscud elit tempor incidunt sed ipsum</h2>
                    </div>
                    <div class="entry-content">
                      <p>Elit sed doas eiusmod ven tempor dunts uet labore et dolore magna aliqua enim ad minim veniam qus eiusmod tempor incididlabore adipisicing elit sed do eiusmod ut tem incididunt uaelt labore et dolore magna aliqua ad minim veniam quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ut quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quaeb.</p>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="b-post__group"><img class="b-post__img_minus-left img-responsive" src="{{ asset('assets/frontend/templates/img/1.jpg')}}" alt="foto">
                            <div class="b-post__block-text">
                              <p>Adipisicing elit sed doas eiusmod ven tempor dunts uet labore et dolore magna aliqua enim ad minim veniam quis eiusmod tempor incidid labore adipisicing elit sed do eiusmod ut tem incididunt uaelt labore et dolore magna aliqua ad minim veniam quis nostrud.</p>
                              <p>Lorem ipsum dolor sit ametadipisicing elit sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliqu ex ea commodo consequat.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Elit sed doas eiusmod ven tempor dunts uet labore et dolore magna aliqua enim ad minim veniam qus eiusmod tempor incididlabore adipisicing elit sed do eiusmod ut tem incididunt uaelt labore et dolore magna aliqua ad minim veniam quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="entry-footer">
                      <div class="entry-footer__group">
                        <div class="entry-footer__title">tags:</div><a class="entry-footer__link" href="blog-post.html">Design,</a><a class="entry-footer__link" href="blog-post.html"> Photoshop,</a><a class="entry-footer__link" href="blog-post.html"> Mockups</a>
                      </div>
                      <div class="entry-footer__group">
                           <div id="share-buttons">
                        <div class="entry-footer__title">Share</div>

                        <!-- Facebook -->
                        <a href="#" target="_blank">
                            <img src="{{ asset('assets/frontend/templates/img/facebook.png')}}" alt="Facebook">
                        </a>

                        <!-- Google+ -->
                        <a href="#" target="_blank">
                            <img src="{{ asset('assets/frontend/templates/img/google.png')}}" alt="Google">
                        </a>

                        <!-- Twitter -->
                        <a href="#" target="_blank">
                            <img src="{{ asset('assets/frontend/templates/img/twitter.png')}}" alt="Twitter">
                        </a>

                    </div>
                        <!-- end .social-list-->
                      </div>
                    </div>
                  </div>
                </article>
                <!-- end .post-->
                <section class="section-comment">
                  <h2 class="ui-title-type-1">the comments (2)</h2>
                  <ul class="comments-list list-unstyled">
                    <li>
                      <article class="comment clearfix">
                        <div class="comment-face"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/2.jpg')}}" alt="face"></div>
                        <div class="comment-inner">
                          <header class="comment-header">
                            <cite class="comment-author">tom brad</cite>
                            <time class="comment-datetime" datetime="2012-10-27">march 2, 2017</time><a class="comment-btn" href="blog-post.html"><i class="icon fa fa-mail-reply"></i>reply</a>
                          </header>
                          <div class="comment-body">
                            <p>Dunts uet labore et dolore magna aliqua enim ad minim veniam quis eiusmod tempor incididlab adipisicing elit sed do eiusmod ut tem incididunt uaelt labore et dolore.</p>
                          </div>
                        </div>
                      </article>
                      <ul class="children list-unstyled">
                        <li>
                          <article class="comment clearfix">
                            <div class="comment-face"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/3.jpg')}}" alt="face"></div>
                            <div class="comment-inner">
                              <header class="comment-header">
                                <cite class="comment-author">stefan lewis</cite>
                                <time class="comment-datetime" datetime="2012-10-27">march 2, 2017</time><a class="comment-btn" href="blog-post.html"><i class="icon fa fa-mail-reply"></i>reply</a>
                              </header>
                              <div class="comment-body">
                                <p>Dunts uet labore et dolore magna aliqua enim ad minim veniam quis eiusmod temp incididlab adipisicing elit sed do eiusmod incididunt.</p>
                              </div>
                            </div>
                          </article>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <article class="comment clearfix">
                        <div class="comment-face"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/2.jpg')}}" alt="face"></div>
                        <div class="comment-inner">
                          <header class="comment-header">
                            <cite class="comment-author">eliza brad</cite>
                            <time class="comment-datetime" datetime="2012-10-27">about 5 hours ago</time><a class="comment-btn" href="blog-post.html"><i class="icon fa fa-mail-reply"></i>reply</a>
                          </header>
                          <div class="comment-body">
                            <p>Dunts uet labore et dolore magna aliqua enim ad minim veniam quis eiusmod tempor incididlab adipisicing elit sed do eiusmod ut tem incididunt uaelt labore et dolore.</p>
                          </div>
                        </div>
                      </article>
                    </li>
                  </ul>
                </section>
                <!-- end .section-comment-->
                <section class="section-reply-form" id="section-reply-form">
                  <h2 class="ui-title-type-1">post a comment</h2>
                  <form class="form-reply ui-form ui-form_input-white bg-primary" action="#" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="name" class="form-control margin-b-10" name="signup-email" id="signup-email" value="" placeholder="Your name" required>
                      </div>
                      <div class="col-md-6">
                        <input type="email" class="form-control margin-b-10" name="signup-email" id="signup-email" value="" placeholder="Your email address" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12">
                        <textarea class="form-control margin-b-10" rows="5" placeholder="message"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12">
                        <button class=" btn btn-will">send message</button>
                      </div>
                    </div>
                  </form>
                </section>
                <!-- end .section-reply-form-->
              </div>
            </main>
          </div>
          <div class="col-md-3">
            <aside class="l-sidebar">
              <div class="widget widget-searce section-sidebar">
                <form class="form-sidebar" id="search-global-form">
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
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/1.jpg')}}" alt="foto"></a>
                    <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="blog-post.html">Dolor sit amet consec acing elit eiusmod</a>
                      <div class="post-widget__author">john sena</div>
                    </div>
                    <!-- end .widget-post-->
                  </div>
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/1.jpg')}}" alt="foto"></a>
                    <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="blog-post.html">Min veniam quis nost exercit gion ulla</a>
                      <div class="post-widget__author">john sena</div>
                    </div>
                    <!-- end .widget-post-->
                  </div>
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/1.jpg')}}" alt="foto"></a>
                    <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="blog-post.html">Dolor sit amet consec acing elit eiusmod</a>
                      <div class="post-widget__author">john sena</div>
                    </div>
                    <!-- end .widget-post-->
                  </div>
                  <div class="post-widget border-b_prim clearfix"><a class="post-widget__media" href="blog-post.html"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/1.jpg')}}" alt="foto"></a>
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