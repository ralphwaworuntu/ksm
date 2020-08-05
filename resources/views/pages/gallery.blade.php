@extends('layouts.app')

@section('title')
    KSM - Gaming Solution | Gallery    
@endsection

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
        <div class="auto-container">
            <h1>Galeri</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Beranda</a></li>
                <li>Galeri</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Galeri</span>
                <h2>Galeri Turnamen</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/6.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

				<!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

            </div>

			<!--Styled Pagination-->
			<ul class="styled-pagination text-center">
				<li><a href="#">1</a></li>
				<li><a href="#" class="active">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#"><span class="icon fa fa-angle-right"></span></a></li>
			</ul>
			<!--End Styled Pagination-->

        </div>
    </section>
    <!--End Gallery Section -->

    
@endsection