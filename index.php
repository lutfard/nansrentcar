<?php  
    include "data.php";
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Nans Rent Car</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><a href="https://www.google.com/maps/place/1%C2%B030'13.3%22N+124%C2%B053'30.1%22E/@1.5037,124.8891251,17z/data=!3m1!4b1!4m4!3m3!8m2!3d1.5037!4d124.8917?entry=ttu" target="_blank"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Manado, Sulawesi Utara</small>
                        <!-- <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>Email@Example.com</small> -->
                    </div>
                    <!-- <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your Business</small></div> -->
                    <div class="top-link">
                        <!-- <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a> -->
                        <a href="https://www.tiktok.com/@nansrentalmanado?_t=8h2ycfxuWTo&_r=1" class="bg-light nav-fill btn btn-sm-square rounded-circle" target="_blank"><i class="fa-brands fa-tiktok text-primary"></i></a>
                        <a href="https://instagram.com/nansrentcarmanado?igshid=OGQ5ZDc2ODk2ZA==" class="bg-light nav-fill btn btn-sm-square rounded-circle" target="_blank"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="https://wa.me/6281342480731" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0" target="_blank"><i class="fa-brands fa-whatsapp text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="." class="navbar-brand">
                        <h1 translate="no" class="text-white fw-bold d-block">Nans<span class="text-secondary">RentCar</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="" class="nav-item nav-link active text-secondary">Home</a>
                            <a href="#about" class="nav-item nav-link">About</a>
                            <a href="#pricelist" class="nav-item nav-link">Pricelist</a>
                            <!-- <a href="#services" class="nav-item nav-link">Services</a> -->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded">
                                    <a href="blog.html" class="dropdown-item">Our Blog</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="https://wa.me/6282226050541" class="position-relative animated tada infinite" target="_blank">
                                <i class="fa-solid fa-phone text-white fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4">
                            <span class="text-white-50">Hubungi Kami</span>
                            <span class="text-secondary">+62 822 2605 0541</span>
                        </div>
                        <!-- <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol> -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/rentcarslider.jpg" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Selamat Datang di</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">Nans Rent Car</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Solusi Rental Mobil Terpercaya! Memenuhi kebutuhan perjalanan Anda.</p>
                                <a href="https://wa.me/6282226050541?text=Halo%20Nans%20Rent%20Car,%20saya%20mau%20sewa%20mobil" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 my-1 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Hubungi Kami</button></a>
                                <a href="#pricelist" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 my-1 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Daftar Harga</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Fact Start -->
        <!-- <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">50</h1>
                            <h5 class="text-white mt-1">Stock mobil tersedia</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">25</h1>
                            <h5 class="text-white mt-1">Thousands of successful business</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Fact End -->


        <!-- About Start -->
        <section id="about">
        <div class="container-fluid py-5 my-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="img/pagoda.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="img/bunaken.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <h5 class="text-primary">Tentang Kami</h5>
                        <h1 translate="no" class="mb-4">Nans Rent Car</h1>
                        <p>Selamat datang di Nans Rent Car. Solusi Rental Mobil Terpercaya!</p>
                        <p class="mb-4">Kami menyediakan armada mobil terbaru dengan layanan penyewaan yang mudah dan terjangkau. Kemudahan akses dan pilihan mobil berkualitas, itulah yang kami tawarkan kepada Anda. Kami menjembatani perjalanan Anda menuju kenyamanan dengan mobil berkualitas dan harga bersaing. Pilih dari berbagai jenis mobil, mulai dari ekonomis hingga mewah, untuk memenuhi kebutuhan perjalanan Anda. Tingkatkan pengalaman perjalanan Anda dengan layanan unggulan dari kami.</p>
                        <!-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">BOOKING!</a> -->
                        <a href="https://wa.me/6282226050541?text=Halo%20Nans%20Rent%20Car,%20saya%20mau%20sewa%20mobil" target="_blank" class="btn-yellow mt-5 px-5 py-3 text-white">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- About End -->


        <!-- Services Start -->
        <section id="pricelist">
        <div class="container-fluid services py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <!-- <h5 class="text-primary">Our Services</h5> -->
                    <h1>Stock Kendaraan Kami</h1>
                </div>
                <div class="row g-2 g-lg-3 services-inner">
                    <?php for($i = 0; $i < count($carList); $i++) :?>
                        <?php $img = $carList[$i][3];?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6 wow fadeIn" data-wow-delay=".2s">
                            <div class="services-item bg-light">
                                <div class="p-3 text-center services-content">
                                    <div class="services-content-icon text-center">
                                        <!-- <i class="fa fa-code fa-7x mb-4 text-primary"></i> -->
                                        <img src="img/<?= $img; ?>" style="width:100%; max-width 300px; height:100%; min-height:99px; max-height: 200px; margin-bottom: 1em;" alt="">
                                        <h4 translate="no" class="mb-3"><?= $carList[$i][0]; ?></h4>
                                        <p class="text-red mb-2"><b>Rp. <?= $carList[$i][1]; ?> / hari</b> (lepas kunci)</p>
                                        <p class="text-red mb-4"><b>Rp. <?= $carList[$i][2]; ?> / hari</b> (include driver + BBM)</p>
                                        <!-- <a href="https://wa.me/6282113537637?Text=Halo%20Nans%20Rent%20Car,%20saya%20ingin%20booking%20mobil%20 <?= $carList[$i][0]; ?>" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Pesan Sekarang</a> -->
                                        <!-- <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 my-1 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Hubungi Kami</button></a> -->
                                        <a href="https://wa.me/6282226050541?Text=Halo%20Nans%20Rent%20Car,%20saya%20ingin%20booking%20mobil%20 <?= $carList[$i][0]; ?>" class="btn-yellow mt-5 px-4 py-2 text-white" target="_blank">Booking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6 wow fadeIn" data-wow-delay=".2s">
                            <div class="services-item bg-light">
                                <div class="p-3 text-center services-content">
                                    <div class="services-content-icon text-center">
                                        <!-- <i class="fa fa-code fa-7x mb-4 text-primary"></i> -->
                                        <img src="img/bus.jpg" style="width:100%; max-width 300px; height:100%; min-height:99px; max-height: 200px; margin-bottom: 1em;" alt="">
                                        <h4 translate="no" class="mb-3">Bus Pariwisata</h4>
                                        <p class="text-red mb-2"><b>Rp. 2.500.000 / 12 jam</b></p>
                                        <p class="text-red mb-2">(dalam kota)</p><br><br>
                                        <!-- <a href="https://wa.me/6282113537637?Text=Halo%20Nans%20Rent%20Car,%20saya%20ingin%20booking%20mobil%20 <?= $carList[$i][0]; ?>" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Pesan Sekarang</a> -->
                                        <!-- <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 my-1 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Hubungi Kami</button></a> -->
                                        <a href="https://wa.me/6282226050541?Text=Halo%20Nans%20Rent%20Car,%20saya%20ingin%20booking%20bus%20pariwisata" class="btn-yellow mt-5 px-4 py-2 text-white" target="_blank">Booking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                        
            </div>
        </div>
        </section>
        <!-- Services End -->


        <!-- Project Start -->
        <!-- <div class="container-fluid project py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Project</h5>
                    <h1>Our Recently Completed Projects</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-1.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Web design</h4>
                                        <p class="m-0 text-white">Web Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-2.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Cyber Security</h4>
                                        <p class="m-0 text-white">Cyber Security Core</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-3.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Mobile Info</h4>
                                        <p class="m-0 text-white">Upcomming Phone</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-4.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Web Development</h4>
                                        <p class="m-0 text-white">Web Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-5.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Digital Marketing</h4>
                                        <p class="m-0 text-white">Marketing Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="img/project-6.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">keyword Research</h4>
                                        <p class="m-0 text-white">keyword Analysis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Project End -->
        
        <!-- <section id="services">
        <div class="container-fluid services py-5 mb-5">
            <div class="container">
                <div class="row g-5 services-inner justify-content-center">
                    <div class="col-md-6 col-lg-10 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <h1>Syarat dan Ketentuan</h1>
                                    <br>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <ul type="none" style="text-align: start;">
                                                <li>1. Harga khusus Manado dan sekitarnya</li>
                                                <li>2. Lokasi antar jemput dalam cakupan area 3km</li>
                                                <li>3. Harga dapat berubah sewaktu-waktu</li>
                                                <li>....................</li>
                                                <li>....................</li>
                                                <li>....................</li>
                                                <li>....................</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section> -->
        

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Testimoni Kami</h5>
                    <h1>Ucapan para Klien</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                    <?php for($i=0; $i < count($testimoni); $i++) :?>
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="img/icon-profile.png" alt="" style="height: 100px; width:100px;">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary"><?= $testimoni[$i][0]; ?></h4>
                                <p class="m-0 pb-3"><?= $testimoni[$i][1]; ?></p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0"><?= $testimoni[$i][2]; ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <!-- <div class="contact-detail position-relative p-5"> -->
                    <!-- <div class="row g-5 mb-5 justify-content-center">
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Address</h4>
                                    <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">23 rank Str, NY</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Call Us</h4>
                                    <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Email Us</h4>
                                    <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row g-5">
                        <div class="col-lg-12 wow fadeIn" data-wow-delay=".3s">
                            <div class="p-5 h-100 rounded contact-map">
                                <div class="row">
                                    <div class="col-lg-5">
                                    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=Kairagi%20Dua,%20Kec.%20Mapanget,%20Kota%20Manado,%20Sulawesi%20Utara&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width:100%; height: 200px;"></iframe><style>.mapouter{position:relative;height:200px;width:100%;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooketjoin</a><style>.gmap_canvas{overflow:hidden;height:200px;width:100%}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                                    </div>
                                    <div class="col-lg">
                                        <br>
                                        <h2 style="color: #f0c75e;">Nans Rent Car</h2>
                                        <h4 style="color: white;">Kairagi Dua, Kec. Mapanget, Kota Manado, Sulawesi Utara</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="p-5 rounded contact-form">
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Project">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div> -->
                    </div>
                <!-- </div> -->
            </div> 
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
         <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href=".">
                            <h1 class="text-white fw-bold d-block">Nans<span class="text-secondary">RentCar</span> </h1>
                        </a>
                        <p class="mt-4 text-light">Rental mobil terpercaya dengan berbagai pilihan mobil tersedia. Kami hadir untuk memenuhi kebutuhan Anda dalam bepergian. Kepuasan Anda adalah prioritas kami.</p>
                        <div class="d-flex hightech-link">
                            <!-- <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a> -->
                            <a href="https://www.tiktok.com/@nansrentalmanado?_t=8h2ycfxuWTo&_r=1" class="btn-light nav-fill btn btn-square rounded-circle me-2" target="_blank"><i class="fa-brands fa-tiktok text-primary"></i></a>
                            <a href="https://instagram.com/nansrentcarmanado?igshid=OGQ5ZDc2ODk2ZA==" class="btn-light nav-fill btn btn-square rounded-circle me-2" target="_blank"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="https://wa.me/6281342480731" class="btn-light nav-fill btn btn-square rounded-circle me-0" target="_blank"><i class="fa-brands fa-whatsapp text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- <a href="#" class="h3 text-secondary">Short Link</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Projects</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Latest Blog</a>
                        </div> -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- <a href="#" class="h3 text-secondary">Help Link</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                        </div> -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Kontak Kami</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="https://www.google.com/maps/place/1%C2%B030'13.3%22N+124%C2%B053'30.1%22E/@1.5037,124.8891251,17z/data=!3m1!4b1!4m4!3m3!8m2!3d1.5037!4d124.8917?entry=ttu" class="pb-3 text-light border-bottom border-primary" target="_blank"><i class="fas fa-map-marker-alt text-secondary me-2"></i>Manado, Sulawesi Utara</a>
                            <a href="https://wa.me/6282226050541" class="py-3 text-light border-bottom border-primary" target="_blank"><i class="fas fa-phone-alt text-secondary me-2"></i>+62 822 2605 0541</a>
                            <!-- <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> info@exmple.com</a> -->
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>nansrentcar.com</a>, Created by <a href="https://linkedin.com/in/lutfi-ardiansyah-300798" style="color:white;" target="_blank"><b> Lutfi Ardiansyah,</b> </a> All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
    </body>

</html>



<!-- "Selamat datang di [Nama Perusahaan] - Solusi Rental Mobil Terpercaya!"
"Kami menyediakan armada mobil terbaru dengan layanan penyewaan yang mudah dan terjangkau."
"Kemudahan akses dan pilihan mobil berkualitas, itulah yang kami tawarkan kepada Anda."
"Perjalanan Anda, Prioritas Kami - Layanan Rental Mobil Profesional dan Ramah Pelanggan."
"Kami menjembatani perjalanan Anda menuju kenyamanan dengan mobil berkualitas dan harga bersaing."
"Pilih dari berbagai jenis mobil, mulai dari ekonomis hingga mewah, untuk memenuhi kebutuhan perjalanan Anda."
"Kemudahan reservasi online 24/7 - Sewa mobil dengan beberapa klik mudah."
"Staf kami yang berpengalaman akan membantu Anda memilih mobil yang sesuai dengan kebutuhan dan anggaran Anda."
"Kualitas, Keandalan, dan Kenyamanan - Itulah yang kami tawarkan dalam setiap perjalanan Anda."
"Tingkatkan pengalaman perjalanan Anda dengan layanan unggulan dari [Nama Perusahaan]." -->

