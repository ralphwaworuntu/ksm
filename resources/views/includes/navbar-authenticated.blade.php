<!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header header-style-two">
        <div class="main-box">
            <div class="auto-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{route('home-auth')}}"><img src="images/KSM LOGOO.png" alt="" title="" width="50px"></a><span style="padding-left: 30px; font-weight: bolder; font-size: 15px;">KUPANG SQUAD MASTERS</span></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('home-auth')}}">Beranda</a>
                                </li>
                                <li class="dropdown"><a href="{{route('gallery')}}">Galeri</a>
                                    
                                </li>
                                <li><a href="{{route('contact')}}">Hubungi Kami</a></li>
                                <li><a href="{{route('home-dashboard')}}">Hi, Ralph</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer box -->
                    <div class="outer-box">
                        

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="{{route('createevent')}}" class="theme-btn btn-style-one"><span class="btn-title">Buat Turnamen</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('home-auth')}}"><img src="images/KSM LOGOO.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript-->
                <div class="btn-box mt-3 ml-3">
                            <a href="{{route('createevent')}}" class="theme-btn btn-style-one"><span class="btn-title">Buat Turnamen</span></a>
                </div><hr>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->