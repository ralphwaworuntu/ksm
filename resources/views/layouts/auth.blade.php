<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>

        {{--style--}}
        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

        <!--[if lt IE 9
            ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
        ><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            @include('includes.preloader')
            <!-- Header span -->
            @include('includes.navbar-authenticated')


            <!-- Main Header-->
            @yield('content')
            <!--End Main Header -->

            

            <!-- Main Footer -->
            @include('includes.footer')
            <!-- End Footer -->

        </div>
        <!--End pagewrapper-->

        <!-- Color Palate / Color Switcher -->
        <div class="color-palate">
            <div class="color-trigger">
                <i class="fa fa-cog"></i>
            </div>
            <div class="color-palate-head">
                <h6>Choose Your Demo</h6>
            </div>
            <ul class="box-version option-box">
                <li>Full width</li>
                <li class="box">Boxed</li>
            </ul>
            <ul class="rtl-version option-box">
                <li>LTR Version</li>
                <li class="rtl">RTL Version</li>
            </ul>
            <div class="palate-foo">
                <span
                    >You will find much more options for colors and styling in
                    admin panel. This color picker is used only for demonstation
                    purposes.</span
                >
            </div>
            <a href="#" class="purchase-btn">Purchase now</a>
        </div>
        <!-- End Color Switcher -->

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn">
                <span class="fas fa-window-close"></span>
            </div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input
                                    type="search"
                                    class="form-control"
                                    name="search-input"
                                    value=""
                                    placeholder="Cari Turnamen"
                                    required
                                />
                                <input
                                    type="submit"
                                    value="Cari Sekarang!!!"
                                    class="theme-btn"
                                />
                            </fieldset>
                        </div>
                    </form>

                    <br />
                    <h3>Paling Sering Dicari</h3>
                    <ul class="recent-searches">
                        <li><a href="#">PUBG</a></li>
                        <li><a href="#">Mobile Legends</a></li>
                        <li><a href="#">Free Fire</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-double-up"></span>
        </div>
        
        {{--script--}}
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')
    </body>
</html>
