@extends('layouts.frontend.home-design') 
@section('content')

<a name="main"></a>
<!--========== PAGE LAYOUT ==========-->
<!-- Banner -->
<div class="full-width">
    <a href="#"><img src="{{ asset('assets/frontend/templates/img/6.jpg')}}" width="100%" height="auto" /></a>
</div>
<!-- End Banner -->

<!-- Who we are -->
<div id="who_we_are" class="content container content-border-bottom">
    <div class="row margin-b-40">
        <div class="col-sm-12 margin-b-20">
            <h2 class="text-center text-uppercase">Latest</h2>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--<ol class="carousel-indicators">
                      <li data-target="#my" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol> -->

                <div class="carousel-inner">
                    <div class="item active">
                        <!-- <img src="3.jpg')}}" style="width:100%" data-src="holder.js/900x500/auto/#7cbf00:#fff/text: " alt="First slide"> -->

                        <p class="text-center slider-p">Willworth corporation উদ্যোগে entrepreneurship development scheme এর আওতাধীন নিবন্ধিত beneficiaries দের নিত্য প্রয়োজনীয় পণ্য সামগ্রী সরবারহ, মজুতকরণ, mfs service ( Agent banking , mobile banking ) সহ বিভিন্ন ধরনের সমাজ উন্নয়ন ও সচেতনতামুলক কার্যক্রম বাস্তবায়নের লক্ষ্যে আর্থিক প্রতিষ্ঠান ( Bank, nbfi,Creative it এর সহযোগিতায় একটি সম্বলিত পদক্ষেপের মাধ্যমে ধন্যবাদ নামে দেশব্যাপী পাঁচ হাজার outlet কার্যক্রম বাস্তবায়ন করেছে।</p>
                        <p class="text-center"><a href="#">Learn more</a></p>

                    </div>
                    <div class="item">

                        <p class="text-center slider-p">Willworth corporation উদ্যোগে entrepreneurship development scheme এর আওতাধীন নিবন্ধিত beneficiaries দের নিত্য প্রয়োজনীয় পণ্য সামগ্রী সরবারহ, মজুতকরণ, mfs service ( Agent banking , mobile banking ) সহ বিভিন্ন ধরনের সমাজ উন্নয়ন ও সচেতনতামুলক কার্যক্রম বাস্তবায়নের লক্ষ্যে আর্থিক প্রতিষ্ঠান ( Bank, nbfi,Creative it এর সহযোগিতায় একটি সম্বলিত পদক্ষেপের মাধ্যমে ধন্যবাদ নামে দেশব্যাপী পাঁচ হাজার outlet কার্যক্রম বাস্তবায়ন করেছে।</p>
                        <p class="text-center"><a href="#">Learn more</a></p>

                    </div>
                    <div class="item">
                        <p class="text-center slider-p">Willworth corporation উদ্যোগে entrepreneurship development scheme এর আওতাধীন নিবন্ধিত beneficiaries দের নিত্য প্রয়োজনীয় পণ্য সামগ্রী সরবারহ, মজুতকরণ, mfs service ( Agent banking , mobile banking ) সহ বিভিন্ন ধরনের সমাজ উন্নয়ন ও সচেতনতামুলক কার্যক্রম বাস্তবায়নের লক্ষ্যে আর্থিক প্রতিষ্ঠান ( Bank, nbfi,Creative it এর সহযোগিতায় একটি সম্বলিত পদক্ষেপের মাধ্যমে ধন্যবাদ নামে দেশব্যাপী পাঁচ হাজার outlet কার্যক্রম বাস্তবায়ন করেছে।</p>
                        <p class="text-center"><a href="#">Learn more</a></p>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

        </div>

    </div>
    <div class="col-sm-12 center-block text-center text-uppercase">

        <a href="#" class="btn btn-will margin-r-20 md-margin-b-10 btn-big">Recognition</a>
        <a href="#" class="btn btn-will margin-r-20 md-margin-b-10 btn-big">Recognition</a>
        <a href="#" class="btn btn-will margin-r-20 md-margin-b-10 btn-big">At a glance</a>
        <a href="#" class="btn btn-will margin-r-20 md-margin-b-10 btn-big">Agency/</a>
        <a href="#" class="btn btn-will md-margin-b-10 btn-big">Partner</a>
    </div>
</div>
<!--// end row -->
</div>
<!-- End Who we are -->

<!-- What we do -->
<div id="what_we_do" class="bg-color-sky-light">
    <div class="content container content-border-bottom">
        <div class="row margin-b-40">
            <div class="col-sm-12 what-we-do-items">
                <h2 class="text-center text-uppercase">ধন্যবাদ OUTLET</h2>

                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/maxresdefault.jpg')}}" alt="Social Development" />
                            <div class="program-title">OUTLET VIDEO</div>
                            <!--<ul class="program-list">
									<li><a href="#">Social Development</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/10.jpg')}}" alt="Social Enterprises" />
                            <div class="program-title">E-COMMERCE/E-SHOP</div>
                            <!--<ul class="program-list">
									<li><a href="#">Social Enterprises</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/10.jpg')}}" alt="Investments" />
                            <div class="program-title">AGENT BANKING</div>
                            <!--<ul class="program-list">
									<li><a href="#">Investments</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="University" />
                            <div class="program-title">MFS/DFS</div>
                            <!--<ul class="program-list">
									<li><a href="#">University</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-sm-12 what-we-do-items">

                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/maxresdefault.jpg')}}" alt="Social Development" />
                            <div class="program-title">SME PRODUCT</div>
                            <!--<ul class="program-list">
									<li><a href="#">Social Development</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/10.jpg')}}" alt="Social Enterprises" />
                            <div class="program-title">RETAILS CONSUMER PRODUCT</div>
                            <!--<ul class="program-list">
									<li><a href="#">Social Enterprises</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/10.jpg')}}" alt="Investments" />
                            <div class="program-title">MICROCREDIT PRODUCT</div>
                            <!--<ul class="program-list">
									<li><a href="#">Investments</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 prog-cont margin-b-20 text-center">
                    <a href="#">
                        <div class="img-cont"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="University" />
                            <div class="program-title">GROUP POLICY INSURANCE</div>
                            <!--<ul class="program-list">
									<li><a href="#">University</a></li>
								</ul>-->
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End What we do -->

<!-- Whats new -->
<div id="news" class="content container">
    <div class="row margin-b-40">
        <div class="col-sm-12">
            <h2 class="text-center text-uppercase">Browse by theme</h2>

            <!-- Start Whats new row 1 -->
            <div id="blog-section">
                <div class="row margin-b-30">
                    <div class="sec-1">
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/wheat.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;">Agricuture</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/scrum.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;">Development</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/flood.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px; margin-left: 21px;">Disaster</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/growth.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 15px;">Economics</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/diploma.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 15px;">Education</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/clipboard.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 15px;">Evaluation</a>
                        </div>
                    </div>

                    <div class="sec-2">
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/growth.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;">Environment</a>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/money.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 21px;">Finance</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/gender.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 21px;">Gender</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/leader.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 7px;">Governance</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/care.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 21px;">Health</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/poor.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 21px;">Poverty</a>
                        </div>
                    </div>

                    <div class="sec-3">

                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/clean.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;margin-left: 9px;">Sanitation</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/shop.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;">Small Medium Business</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/woman.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;">Social Protection</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/water.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px; margin-left: 21px;">Water</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/team.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;">Development</a>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6" style="margin-top: 30px;">
                            <a href="#">
                                <img class="wwd-img img-responsive text-center" title="" alt="Partner with us" src="{{ asset('assets/frontend/templates/img/team.png')}}" style="height: 75px; width: 100px; margin-bottom: 13px;">
                            </a>
                            <a href="#" style="font-size: 18px;">Development</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Whats new row 1 -->
        </div>
        <!-- End Whats new row 3 -->
        <!-- 
		<div class="row" style="margin-top: 10px;">
			<div class="col-xs-12 text-center">
				<a href="#" class="btn btn-will">More...</a>
			</div>
		</div> -->
    </div>
</div>

</div>
<!--// end row -->
</div>
<!-- End Whats new -->

<!--========== END PAGE LAYOUT ==========-->
<section id="what_we_do" class="about page-section waypoint-in">
    <!-- inner-section : starts -->
    <section class="inner-section page-head twitter-head">
        <!-- container : starts -->
        <section class="container">
            <div class="row">
                <article class="col-md-6 text-left" style="opacity: 1;">
                    <h1 class="white">Our ventures</h1>
                </article>
                <article class="col-md-6 text-right" style="opacity: 1;">

                </article>
            </div>
        </section>
        <!-- container : ends -->
    </section>
    <!-- inner-section : ends -->
</section>

<section id="enterprises" class="app-brief enterprises">
    <div class="color-overlay">
        <!--  <h2 class="text-center text-uppercase" style="margin-top: 15px;">Our ventures</h2> -->
        <!-- CONTAINER -->
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="row">
                <!-- ENTERPRISE ITEMS -->
                <div class="enterprises-items">
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                    <div class="col-md-12 col-sm-12 left-align wow fadeInUp  animated" data-wow-offset="200" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <!-- ITEM 1 -->
                        <div class="shot row">
                            <div class="col-md-2 col-sm-4 col-xs-5">
                                <a href="#" target="_blank" data-mce-href=""><img src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth" style="width: 105px;height: 65px;" data-mce-src="{{ asset('assets/frontend/templates/img/logo.png')}}"></a>
                                <br data-mce-bogus="1">
                            </div>
                            <div class="col-md-10 col-sm-8 col-xs-7 pl-15">
                                <h4 class="main-color"><a href="#" target="_blank" data-mce-href="">Will Worth</a><br data-mce-bogus="1"></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->
                    </div>
                </div>
                <!-- END ENTERPRISE ITEMS -->
                <!-- /ENDBOTTOM -->
            </div>
            <!-- /END ROW -->
        </div>
        <!-- /END CONTAINER -->
    </div>
    <!-- /END COLOR OVERLAY -->
</section>
@endsection