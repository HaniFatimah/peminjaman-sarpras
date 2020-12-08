<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Landing Page</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    {{-- <!-- Favicon  -->
    <link rel="icon" href="{{ asset('image/landingPage/favicon.png') }}"> --}}
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="#"><img
                src="{{ asset('image/landingPage/shipping.svg') }}" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#testimonial">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">About</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">SIPPS</span></h1>
                            <h3>Will Provide The Best Service</h3>
                            <p class="p-large">Use Evolo free landing page template to promote your business startup and
                                generate leads for the offered services</p>
                            @if(Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a class="btn-solid-lg page-scroll mr-3 text-center" style="width: 150px;"
                                            href="{{ route('home') }}">Home</a>
                                    @else
                                        <a class="btn-solid-lg page-scroll mr-3 text-center" style="width: 150px;"
                                            href="{{ route('login') }}">Login</a>
                                        @if(Route::has('register'))
                                            <a class="btn-solid-lg page-scroll text-center" style="width: 150px;"
                                                href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('image/landingPage/header-teamwork.svg') }}"
                                alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Admin</h2>
                        <p class="text-justify">Pada Aplikasi ini admin dapat mengelola peminjaman barang maupun
                            pengelolaan kunci ruangan. Untuk pengelolaannya sendiri dibilang mudah karena admin hanya
                            menunggu pengambilan barang dan kunci saja setelah selesai dipinjam barang akan dikembalikan
                            oleh peminjam disini admin dapat memencet tombol dikembalikan dan status peminjaman pun akan
                            diupdate menjadi dikembalikan</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">DETAIL</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('image/landingPage/admin/admin.png') }}"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('image/landingPage/siswa/siswa.png') }}"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Siswa</h2>
                        <p class="text-justify">Pada Aplikasi ini siswa dapat meminjam barang ataupun kunci dengan
                            sangat mudah tanpa harus menunggu siswa lain mengisi form peminjaman di sarpras. Di
                            aplikasi ini siswa dapat mengisi form tanpa harus mengantri, setelah mengisi form siswa
                            dapat mengambil barang atau kunci yang ingin dipinjam langsung ke sarpras.</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">DETAIL</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Details 3 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Guru</h2>
                        <p class="text-justify">Pada Aplikasi ini guru dapat meminjam barang ataupun kunci dengan sangat
                            mudah tanpa harus menunggu guru lain mengisi form peminjaman di sarpras. Di aplikasi ini
                            guru dapat mengisi form tanpa harus mengantri, setelah mengisi form guru dapat mengambil
                            barang atau kunci yang ingin dipinjam langsung ke sarpras.</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">DETAIL</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('image/landingPage/guru/guru.png') }}"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 3 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-innerc">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/admin/1.png') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/admin/2.png') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/admin/3.png') }}"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/admin/4.png') }}"
                                alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/admin/5.png') }}"
                                alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/admin/6.png') }}"
                                alt="Sixth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
    <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/siswa/16.png') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/siswa/17.png') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/siswa/18.png') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->

    <!-- Details Lightbox 3 -->
    <div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/guru/19.png') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/guru/20.png') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image/landingPage/guru/21.png') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 3 -->

    <!-- Video -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Check Out The Video</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=LDm9yzAIVPM"
                                data-effect="fadeIn">
                                <img class="img-fluid" src="{{ asset('image/landingPage/video-frame.svg') }}"
                                    alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <p>This video will show you a case study for one of our <strong>Major Customers</strong> and will
                        help you understand why your startup needs Evolo in this highly competitive market</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-2" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid"
                            src="{{ asset('image/landingPage/testimonials-2-men-talking.svg') }}"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Testimonials</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="{{ asset('image/landingPage/testimonial-1.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Dengan Adanya Aplikasi ini dapat mempermudah laporan peminjaman barang dan pengelolaan kunci ruangan</p>
                                            <p class="testimonial-author">Tety Suryany, S.Pd - Penjab Inventaris Sarpras</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="{{ asset('image/landingPage/testimonial-3.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Dengan Adanya Aplikasi ini dapat mempermudah peminjaman barang dan pengelolaan kunci ruangan bagi saya sendiri, karena tidak perlu antri lagi untuk mengisi form peminjamannya</p>
                                            <p class="testimonial-author">Eraldo Daniel - Guru</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="{{ asset('image/landingPage/testimonial-3.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Dengan Adanya Aplikasi ini dapat mempermudah peminjaman barang dan pengelolaan kunci ruangan bagi saya sendiri, karena tidak perlu antri lagi untuk mengisi form peminjamannya</p>
                                            <p class="testimonial-author">Afung - Siswa</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About The Team</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which
                        will help you research new products and launch them in new emerging markets</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row justify-content-center">
                <!-- <div class="col-lg-12"> -->

                <!-- Team Member -->
                <div class="team-member col-md-1">
                    <div class="image-wrapper">
                        <img src="{{ asset('image/upload/avatar/users.png') }}" style="width: 100px;"
                            alt="alternative">
                    </div> <!-- end of image-wrapper -->
                    <p class="p-large"><strong>Siti Sundari, S,Pd</strong></p>
                    <p class="job-title">WAKA. Bidang Sarpras</p>
                    <span class="social-icons">
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/siti.sundari.54379/">
                                <i class="fas fa-circle fa-stack-2x instagram"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://twitter.com/raissrywn/">
                                <i class="fas fa-circle fa-stack-2x twitter"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member col-md-1">
                    <div class="image-wrapper">
                        <img src="{{ asset('image/upload/avatar/users.png') }}" style="width: 100px;"
                            alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p class="p-large"><strong>Ana Susilowati, S.Pd</strong></p>
                    <p class="job-title">Sekretaris Pokja Sarpras</p>
                    <span class="social-icons">
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/ana_susilowati_tb/">
                                <i class="fas fa-circle fa-stack-2x instagram"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x twitter"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member col-md-1">
                    <div class="image-wrapper">
                        <img src="{{ asset('image/upload/avatar/users.png') }}" style="width: 100px;"
                            alt="alternative">
                    </div> <!-- end of image-wrapper -->
                    <p class="p-large"><strong>Tety Suryany, S.Pd </strong></p>
                    <p class="job-title">Penjab Inventaris Sarpras</p>
                    <span class="social-icons">
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/tettysry/">
                                <i class="fas fa-circle fa-stack-2x instagram"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x twitter"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member col-md-1">
                    <div class="image-wrapper">
                        <img src="{{ asset('image/upload/avatar/users.png') }}" style="width: 100px;"
                            alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p class="p-large"><strong>Abdul Fatah, SE</strong></p>
                    <p class="job-title">Penjab Pertamanan dan Keindahan Lingkungan Sekolah</p>
                    <span class="social-icons">
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/abdulbabe/">
                                <i class="fas fa-circle fa-stack-2x instagram"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x twitter"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member col-md-1">
                    <div class="image-wrapper">
                        <img src="{{ asset('image/upload/avatar/users.png') }}" style="width: 100px;"
                            alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p class="p-large"><strong>Bayu</strong></p>
                    <p class="job-title">Toolman Sarpras</p>
                    <span class="social-icons">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x instagram"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x twitter"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of about -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About SIPPS</h4>
                        <p class="text-justify">We're passionate about offering some of the best business growth
                            services for startups</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our partners <a class="turquoise"
                                        href="https://www.dicoding.com/">Dicoding.com</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/smktarunabhaktidepok">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://twitter.com/smktarunabhakti">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/starbhak.official/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.youtube.com/channel/UCkFAuOBK55jPiEOzdjqp5qA">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <p class="p-small">Copyright © {{Date('Y')}} <a href="https://smktarunabhakti.net/">Taruna Bhakti</a> - All
                        rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/') }}"></script>
    <script type="text/javascript" src="{{ asset('js/') }}"></script>
    <script type="text/javascript" src="{{ asset('js/') }}"></script>

    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
</body>

</html>
