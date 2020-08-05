@extends('layouts.auth')

@section('title')
    KSM - Gaming Solution | Buat Turnamen    
@endsection

@section('content')

<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
        <div class="auto-container">
            <h1>BUAT TURNAMEN</h1>
            <ul class="bread-crumb clearfix">
            <li><a href="{{route('home-auth')}}">Beranda</a></li>
                <li>Buat Turneman</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Buy Ticket  -->
    <section class="buy-ticket">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12 order-2">
                    <div class="inner-column text-center">
                        <h2>Syarat dan Ketentuan</h2> <span><b>(Wajib Dibaca & Dipatuhi)</b></span>
                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in repre hen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat eaque ipsa quae illo proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis</p>
                        <p>derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat eaque ipsa quae illo proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudant rem aperiam eaque ipsa quae ab illo inventore veritatis quasi architecto.</p>
                    </div><br>
                        
                        <h3>Persyaratan yang harus dipenuhi</h3>
                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
                        <ul class="list-style-one">
                            <li>Multiple Announcements during the event.</li>
                            <li>Logo & company details on the WordCamp.</li>
                            <li>Dedicated blog post thanking each Gold.</li>
                            <li>Acknowledgment and opening and closing.</li>
                        </ul>
                        <h3>Keuntungan yang diperoleh</h3>
                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
                        <ul class="list-style-one">
                            <li>Multiple Announcements during the event.</li>
                            <li>Logo & company details on the WordCamp.</li>
                            <li>Dedicated blog post thanking each Gold.</li>
                            <li>Acknowledgment and opening and closing.</li>
                        </ul>
                    </div>
                </div>
                        <div class="btn-box text-right">
                            <a href="{{route('home-dashboard')}}" class="theme-btn btn-style-one"><span class="btn-title">Buat Turnamen >>></span></a>
                        </div>

                <!-- Form Column -->
                
            </div>
        </div>
    </section>
    <!-- End B

@endsection