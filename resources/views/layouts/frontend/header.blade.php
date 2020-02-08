<a class="skip-main" href="javascript:scrollToAnchor('main');">Skip to main content</a>
<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
    <div class="top-bar">

        <div class="container">

            <a id="accesslink" href="#accesibility-option" dropdown-toggle data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img id="accessicon" src="{{ asset('assets/frontend/templates/saga/images/accessibility3.png')}}" width="30" alt="accessibility options" style="margin-top:2px; margin-bottom:3px; float:left; cursor: pointer;"></a>
            <div class="dropdown-menu" style="top: 28px; left: 10px; position: absolute;">
                <table id="accessibility" width="100%" border="0">
                    <tr>
                        <td align="center"><a href="javascript:increaseFontSize();">Increase font size</a></td>
                        <td align="center"><a href="javascript:decreaseFontSize();">Decrease font size</a></td>
                    </tr>
                    <tr>
                        <td align="center"><a id="apHighlight" href="javascript:highlightLinks();">Highlight links</a></td>
                        <td align="center"><a id="apUnderline" href="javascript:underlineLinks();">Underline links</a></td>
                    </tr>
                    <tr>
                        <td align="center"><a id="apInvert" href="javascript:invertImages();">Invert images</a></td>
                        <td align="center"><a id="apGrayscale" href="javascript:grayscaleImages();">Greyscale images</a></td>
                    </tr>
                    <tr>
                        <td align="center"><a href="javascript:resetAP();">Go to standard site</a></td>
                        <td align="center"><a href="#">Download screen reader</a></td>
                    </tr>
                </table>
            </div>

            <ul class="top-nav">
                <li><a href="#">Apply Now</a></li>
                <li><a href="#">News & Events</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="navbar-logo">
                    <a class="navbar-logo-wrap" href="{{route('home')}}">
                        <img class="navbar-logo-img" src="{{ asset('assets/frontend/templates/img/logo.png')}}" alt="WillWorth Logo" style="width: 128px;height: 80px;">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse" id="smoothNavbar">
                <div class="menu-container">

                    <form class="navbar-form navbar-nav-right" action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search...">
                            <div class="input-group-btn">
                                <button name="Search" class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- <a href="#" class="btn btn-will bttn navbar-btn navbar-nav-right">Donate</a> -->
                    <ul class="nav navbar-nav navbar-nav-right" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
                        <li class="nav-item dropdown"><a class="nav-item-child" href="#">About<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a href="#">Overview </a>
                                    <ul class="dropdown-menu2">
                                        <li><a href="#">Context</a></li>
                                        <li><a href="#">Mission, Vision, Values</a></li>
                                        <li><a href="#">Working Together</a></li>
                                        <li><a href="#">Purpose &amp; Beliefs</a></li>
                                    </ul>

                                </li>
                                <li class="dropdown">
                                    <a href="#">About Willworth</a>
                                    <ul class="dropdown-menu2">
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Founder’s View</a></li>
                                        <li><a href="#">An Interview With Willworth</a></li>
                                        <li><a href="#">Brief Of willworth</a></li>
                                    </ul>

                                </li>
                                <li><a href="#">Welcome Message</a></li>
                                <li><a href="#">Corporate Governance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-item-child" href="#">PRODUCT & SERVICES<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tour to willworth video</a></li>
                                <li><a href="#">Financial Services</a></li>
                                <li><a href="#">ধন্যবাদ</a></li>
                                <li><a href="#">Home Appliances</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-item-child" href="#">Program & Projects<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tour to willworth video</a></li>
                                <li><a href="#">Financial Services</a></li>
                                <li><a href="#">ধন্যবাদ</a></li>
                                <li><a href="#">Home Appliances</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-item-child" href="#">ধন্যবাদ<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tour to willworth video</a></li>
                                <li><a href="#">Financial Services</a></li>
                                <li><a href="#">ধন্যবাদ</a></li>
                                <li><a href="#">Home Appliances</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-item-child" href="#">News<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('press')}}">Press</a></li>
                                <li><a href="{{route('news')}}">News</a></li>
                                <li><a href="{{route('single-news')}}">Single news</a></li>
                                <li><a href="{{route('single-page')}}">Single page</a></li>
                                <li><a href="{{route('single-page-one')}}">Single page one</a></li>
                                <li><a href="{{route('single-page-two')}}">Single page two</a></li>
                                <li><a href="{{route('mission-vission')}}">Mission Vission</a></li>
                                <li><a href="{{route('who-we-are')}}">Who we are</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('single-blog')}}">Single Blog</a></li>
                                <li><a href="{{route('terms-conditions')}}">Treams & condition</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-item-child" href="#">Location<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tour to willworth video</a></li>
                                <li><a href="#">Financial Services</a></li>
                                <li><a href="#">ধন্যবাদ</a></li>
                                <li><a href="#">Home Appliances</a></li>
                            </ul>
                        </li>
                        <!--<li class="nav-item dropdown">
							     <a class="nav-item-child" href="#">Location<span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="#">Tour to willworth video</a></li>
								  <li><a href="#">Financial Services</a></li>
								  <li><a href="#">ধন্যবাদ</a></li>
								  <li><a href="#">Home Appliances</a></li>
								</ul>
						</li> -->
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
<!--========== END HEADER ==========-->