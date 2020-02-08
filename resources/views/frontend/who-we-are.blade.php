@extends('layouts.frontend.home-design') @section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/components/com_k2/css/k2.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/templates/saga/stylesheets/compile.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/templates/saga/stylesheets/magnific-popup.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/templates/saga/stylesheets/animate.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/templates/saga/stylesheets/story-lab4c79.css?1580577964')}}" type="text/css" />
 {{--  <link rel="stylesheet" href="{{ asset('assets/frontend/templates/saga/stylesheets/main4c79.css?1580577964')}}" type="text/css" /> --}}


@endsection @section('content')

<!-- page-section : starts -->


<section class="about page-section waypoint-in">
    <!-- inner-section : starts -->
    <section class="inner-section page-head">
        <!-- container : starts -->
        <section class="container">
            <div class="row">
                <article class="col-md-12">
                    <h2 class="text-center text-uppercase"><br>Who we are</h2></article>
            </div>
        </section>
    </section>
</section>
<section id="here-at-willworth" class="app-brief here-at-willworth">
    <div class="color-overlay">
        <!-- CONTAINER -->
        <div class="container">
            <div class="row">
                <!-- IMAGE -->
                <div class="col-md-12 wow fadeInDown animated txt-who-we-are" data-wow-offset="200" data-wow-duration="1.5s">
                    <h4 class="main-color">If you were to describe this world to a child, which one of the following would you pick?</h4>
                    <p>It is home to magic, art, beauty, and tens of thousands of years of human talent. Or you would, even though it may be true, that our world is where we live, but it is a place that doesn’t work for everyone?</p>
                    <h4 class="main-color">Our world is our playground, a platform for the creativity of all seven billion of us.</h4>
                    <p>Sometimes it’s hard to believe that a world that works for all of us can be possible. But the opportunities are all around us. While we all hope for a better future for our world, many of us are building it. If you are a builder, we are betting on you.</p>
                    <h4 class="main-color">The changemaker. The activist. The hero. The mentor.</h4>
                    <p>45 years ago, we started building a world we all want to live in.</p>
                    <h4 class="main-color">We started in Bangladesh.</h4>
                    <p>We listened and learnt, failed and got up again.</p>
                    <h4 class="main-color">We never stopped trying. And we never will.</h4>
                    <p>We trust in people, and we take on the impossible, every day. Fighting poverty, building platforms for tolerance, equality and inclusion, saying no to violence against women and children.</p>
                    <h4 class="main-color">We pilot, perfect and scale. Our DNA is to build.</h4>
                    <p>As the sun rose this morning, hundreds of thousands of builders rose with it. <strong>Teachers across eight countries </strong>opened the colourful doors of the world’s biggest secular private education system. <strong>65,000</strong> <strong>artisans </strong>picked up their needles and stated weaving traditional art into beautiful clothing. Credit officers in one of the world’s largest microfinance institutions sat down with women in the <strong>remotest corners of seven countries.</strong></p>
                    <h4 class="main-color">Whoever you are, whatever you are.</h4>
                    <p>Doing good is everyone’s business.</p>
                    <p>We have never faced bigger challenges but we have never been more ready.</p>
                </div>
             {{--    <div class="col-md-12 wow fadeInUp animated" data-wow-offset="200" data-wow-duration="1.5s">
                    <div class="phone-image"><img usemap="#here-at-willworth-map" src="{{ asset('assets/frontend/templates/img/here-at-willworth.png')}}" alt="" data-mce-src="{{ asset('assets/frontend/templates/img/here-at-willworth.png')}}">
                        <map name="here-at-willworth-map">
                            <area shape="circle" coords="360,295,110" href="http://enterprises.willworth.net/" alt="social enterprise" data-mce-href="http://enterprises.willworth.net/">
                            <area shape="circle" coords="764,295,110" href="what-we-do/index.html" alt="non-government organisation" data-mce-href="what-we-do/">
                            <area shape="circle" coords="1170,295,110" href="http://facebook.com/willworthworld" target="_blank" alt="public forum" data-mce-href="http://facebook.com/willworthworld">
                            <area shape="circle" coords="1573,295,110" href="http://research.willworth.net/" target="_blank" alt="knowledge hub" data-mce-href="http://research.willworth.net/">
                            <area shape="circle" coords="580,630,110" href="investment.html" alt="social investors" data-mce-href="investment">
                            <area shape="circle" coords="985,630,110" href="search/item/176-good-managment-practices.html" alt="policy advocates" data-mce-href="search/item/176-good-managment-practices">
                            <area shape="circle" coords="1389,630,110" href="http://www.willworthu.ac.bd/" target="_blank" alt="university" data-mce-href="http://www.willworthu.ac.bd/">
                            <area shape="circle" coords="360,1322,110" href="http://iamwillworth.com/en/#portfolio" target="_blank" alt="changemakers" data-mce-href="http://iamwillworth.com/en/#portfolio">
                            <area shape="circle" coords="764,1322,110" href="http://iamwillworth.com/en/#portfolio" target="_blank" alt="activists" data-mce-href="http://iamwillworth.com/en/#portfolio">
                            <area shape="circle" coords="1170,1322,110" href="http://iamwillworth.com/en/#portfolio" target="_blank" alt="heroes" data-mce-href="http://iamwillworth.com/en/#portfolio">
                            <area shape="circle" coords="1573,1322,110" href="http://iamwillworth.com/en/#portfolio" target="_blank" alt="mentors" data-mce-href="http://iamwillworth.com/en/#portfolio">
                            <area shape="circle" coords="232,2239,125" href="http://facebook.com/willworthworld" target="_blank" alt="share the idea" data-mce-href="http://facebook.com/willworthworld">
                            <area shape="circle" coords="718,2239,125" href="http://twitter.com/willworthworld" target="_blank" alt="follow the best minds" data-mce-href="http://twitter.com/willworthworld">
                            <area shape="circle" coords="1202,2239,125" href="http://response.willworth.net/" target="_blank" alt="take action" data-mce-href="http://response.willworth.net/">
                            <area shape="circle" coords="1687,2239,125" href="net/donate/index.html" target="_blank" alt="support us" data-mce-href="net/donate"> </map>
                    </div>
                </div> --}}
                <!-- /END IMAGE -->
            </div>
            <!-- /END ROW -->
        </div>
        <!-- /END CONTAINER -->
    </div>
    <!-- /END COLOR OVERLAY -->
</section>

@endsection @section('scripts')

<script src="{{ asset('assets/frontend/media/system/js/modal.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/media/jui/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/media/jui/js/jquery-noconflict.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/media/jui/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/components/com_k2/js/k232b9.js?v2.6.8&amp;sitepath=/')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/templates/saga/javascripts/index.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/templates/saga/bootstrap/js/jquery.js')}}" type="text/javascript"></script>
{{--
<script src="{{ asset('assets/frontend/templates/saga/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> --}}
<script src="{{ asset('assets/frontend/templates/saga/javascripts/compile.js')}}" type="text/javascript"></script>
{{--
<script src="{{ asset('assets/frontend/templates/saga/javascripts/wow.js')}}" type="text/javascript"></script> --}}
<script src="{{ asset('assets/frontend/templates/saga/javascripts/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/templates/saga/javascripts/jquery.rwdImageMaps.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/templates/saga/javascripts/main4337.js?1580626414')}}" type="text/javascript"></script>

<script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script> {{--
<script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script> --}} {{--
<script src="{{ asset('assets/frontend/templates/saga/home-template/js/components/bootstrap-dropdownhover.js')}}" type="text/javascript"></script> --}}

<!-- LESS JS engine-->
<script type="text/javascript">
    var rootUrl = "";
</script>
<script>
    (function() {
        var cx = '015034969127702732797:pde2s3dlxny';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();
</script>

@endsection