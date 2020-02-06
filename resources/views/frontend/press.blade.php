@extends('layouts.frontend.home-design') 
@section('content')
<!-- News -->
<div class="content container content-border-bottom">
    <div class="row">
        <div class="col-md-12 page-head" style="padding: 0;">
            <h2 class="text-center text-uppercase">News</h2>
            <div class="row margin-b-20">
                                    <div class="col-md-4 pl-15 pr-15">
                        <a class="news-wrapper" href="#">
                            <div class="news-img-wrapper"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="" /></div>
                            <div class="news-content text-center">
                                <p class="news-date">25 January 2020</p>
                                <p class="news-title">Women behind the wheel for road safety</p>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-4 pl-15 pr-15">
                        <a class="news-wrapper" href="#">
                            <div class="news-img-wrapper"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="" /></div>
                            <div class="news-content text-center">
                                <p class="news-date">23 January 2020</p>
                                <p class="news-title">Dr Charles Chen Yidan, Founder of Yidan Prize, presents the prestigious award to Sir Fazle's family in Dhaka, Bangladesh</p>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-4 pl-15 pr-15">
                        <a class="news-wrapper" href="#">
                            <div class="news-img-wrapper"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="" /></div>
                            <div class="news-content text-center">
                                <p class="news-date">15 January 2020</p>
                                <p class="news-title">BRAC and KfW jointly launch the 'Climate Bridge Fund'</p>
                            </div>
                        </a>
                    </div>
                            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-xs-12 text-center">
                <a href="#" class="btn btn-will">More...</a>
            </div>
        </div>
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End News -->

<!-- Video -->
<div class="content container">
    <div class="row">
        <div class="col-md-12 page-head" style="padding: 0;">
            <h2 class="text-center text-uppercase">Videos</h2>
            <div class="row margin-b-20">
                <div class="col-md-4 pl-15 pr-15">
                    <a class="news-wrapper" href="#">
                        <div class="news-img-wrapper"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="Image" /></div>
                        <div class="news-content text-center">
                            <p class="news-date">February 10, 2019</p>
                            <p class="news-title">#NotJustAnyJob | Erum Mariam, Executive Director of BRAC IED</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pl-15 pr-15">
                    <a class="news-wrapper" href="#">
                        <div class="news-img-wrapper"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="Image" /></div>
                        <div class="news-content text-center">
                            <p class="news-date">January 03, 2019</p>
                            <p class="news-title">BRAC Play Lab Project in Uganda</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 pl-15 pr-15">
                    <a class="news-wrapper" href="#">
                        <div class="news-img-wrapper"><img class="img-responsive" src="{{ asset('assets/frontend/templates/img/7.jpg')}}" alt="Image" /></div>
                        <div class="news-content text-center">
                            <p class="news-date">November 22, 2018</p>
                            <p class="news-title">Cox's Bazar's first classroom in the sky</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-xs-12 text-center">
                <a href="#" class="btn btn-will">More...</a>
            </div>
        </div>
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Video -->

@endsection