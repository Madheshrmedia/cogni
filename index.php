<?php
include_once "./header.php";
?>

<!-- hader banner slider -->
<!-- Swiper -->
<style>
    .swiper {
        width: 100%;
        height: 100%;
        /* background: #000; */
    }

    .swiper-slide {
        font-size: 18px;
        /* color: #fff;
        -webkit-box-sizing: border-box;
        box-sizing: border-box; */
        /* padding: 40px 60px; */
    }

    .parallax-bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 130%;
        height: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;
    }

    .swiper-slide .title {
        font-size: 41px;
        font-weight: 300;
    }

    .swiper-slide .subtitle {
        font-size: 21px;
    }

    .swiper-slide .text {
        font-size: 14px;
        max-width: 400px;
        line-height: 1.3;
    }

    .about-top-img {
        width: 50px;
    }

    .about-head-img {
        width: 30px;
        padding-bottom: 20px;
    }

    h3 {
        font-size: 36px;
        font-weight: 400;
        color: #271605;
        line-height: 54px;
    }

    .about_overview {
        margin-top: 55px;
    }

    .about-overview-content {
        color: #757575;
        font-weight: 300;
    }

    .out-service-topimg {
        width: 190px;
        height: 190px;
        position: relative;
        margin-top: -50px;
        margin-left: -20px;
    }

    .ourservice-content {
        color: #162F33;
        font-weight: 200;
        font-size: 18px;
    }

    .card-body {
        display: flex;
        align-items: stretch;
        padding: 0;
    }

    .content {
        flex: 0 0 70%;
        padding: 40px 40px;
    }

    .card-img {
        flex: 0 0 30%;
        width: 30%;
        height: auto;
        object-fit: cover;
        object-position: right;
    }

    .our-service_card {
        background: #E9F5EA;
    }

    .card-title {
        font-size: 28px;
        line-height: 39px;
        margin-bottom: 10px;
    }

    .our-ser-button {
        background: #4E6845;
        color: white;
        text-decoration: none;
        padding: 10px 30px;
        border-radius: 2px;
    }

    .card-text {
        color: #757575;
        font-weight: 300;
        margin-bottom: 30px;
    }

    .card {
        border: none;
        border-radius: 0px;
    }

    .our-ser-link {
        color: black;
        text-decoration: none;
        border-bottom: 2px solid #C47A5E;
        font-size: 20px;
    }

    .aesthetic_services {
        overflow-x: hidden;
    }

    .aesthetic_slider-title {
        font-size: 18px;
        color: #271605;
    }

    .aesthetic_slider-text {
        font-size: 14px;
        color: #757575;
    }

    .aesthetic_slider-link {
        color: #D4AF37;
        text-decoration: none;
        font-size: 18px;
    }

    .aesthetic_slider-card-body {
        padding: 15px 10px;
        background: #FAFBF8;
    }

    .aesthetic_ser-leftcard {
        margin-top: 90px;
    }

    .aesthetic_heading {
        color: #302B30;
    }

    .aesthetic_content {
        color: #757575;
    }

    .affordable_price {
        overflow-x: hidden;
        background-image: url('./image/aff-price.png');
        background-size: contain;
        background-repeat: no-repeat;
    }

    .af_p-title {
        font-size: 18px;
        color: #271605;
    }

    .af_p-text {
        font-size: 14px;
        color: #757575;
    }

    .af_p-link {
        color: #D4AF37;
        text-decoration: none;
        font-size: 18px;
    }

    .af_p_slider {
        background: #FCFFFA;
    }

    .af_p-card-body {
        padding: 15px 10px;
        background: #FCFFFA;
    }

    .testimonial-subhead {
        font-size: 20px;
        color: #342D30;
    }
</style>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-2.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-1.png" class="img-fluid" alt="">
            </a>
        </div>

        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-3.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-4.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-5.png" class="img-fluid" alt="">
            </a>
        </div>
    </div>
</div>

<!-- about overview -->
<div class="about_overview mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./image/about-over.png" class="img-fluid about-top-img" alt="">

                        <div class="abt-cont py-5">
                            <h3 class="heading-site">
                                Welcome to Cogni <br>
                                Wellness Hub <span><img src="./image/about-head.png" class="about-head-img"
                                        alt=""></span>
                            </h3>
                            <p class="about-overview-content">
                                Experience the ultimate in wellness and beauty with our comprehensive range of services
                                designed to
                                rejuvenate and enhance your well-being.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="./image/about-overview.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our service -->

<img src="./image/orser-topimg.png" class="out-service-topimg" alt="">

<div class="ourservice">
    <div class="container">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <h3 class="text-center">Our Top Services</h3>
                <p class="ourservice-content text-center">
                    Discover the pinnacle of beauty and wellness with our expert treatments <br> and personalized care
                </p>

                <div class="row ">
                    <div class="col-md-6 mt-5">
                        <div class="card our-service_card">
                            <div class="card-body d-flex">
                                <div class="content">
                                    <h3 class="card-title">Salon</h3>
                                    <p class="card-text">Expert hair and beauty treatments tailored to you</p>
                                    <a href="./service.php" class="our-ser-button">Read More</a>
                                </div>
                                <img class="card-img" src="./image/ourser-1.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="card our-service_card">
                            <div class="card-body d-flex">
                                <div class="content">
                                    <h3 class="card-title">Our Kids Spa</h3>
                                    <p class="card-text">Fun Filled Rejuvenating Kids Spa for Little Ones' Pampering</p>
                                    <a href="./service.php" class="our-ser-button">Read More</a>
                                </div>
                                <img class="card-img" src="./image/ourser-2.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="card our-service_card">
                            <div class="card-body d-flex">
                                <div class="content">
                                    <h3 class="card-title">Slimming Services</h3>
                                    <p class="card-text">Personalized programs to help you achieve your ideal body</p>
                                    <a href="./service.php" class="our-ser-button">Read More</a>
                                </div>
                                <img class="card-img" src="./image/ourser-3.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="card our-service_card">
                            <div class="card-body d-flex">
                                <div class="content">
                                    <h3 class="card-title">Laser Treatments</h3>
                                    <p class="card-text">State-of-the-art laser treatments for various skin concerns</p>
                                    <a href="./service.php" class="our-ser-button">Read More</a>
                                </div>
                                <img class="card-img" src="./image/ourser-4.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="card our-service_card">
                            <div class="card-body d-flex">
                                <div class="content">
                                    <h3 class="card-title">Aesthetic services</h3>
                                    <p class="card-text">Enhancing beauty through advanced aesthetic treatments</p>
                                    <a href="./service.php" class="our-ser-button">Read More</a>
                                </div>
                                <img class="card-img" src="./image/ourser-5.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="card our-service_card">
                            <div class="card-body d-flex">
                                <div class="content">
                                    <h3 class="card-title">Ayurvedic Family Spa</h3>
                                    <p class="card-text">Luxurious Ayurvedic Day Spa for Holistic Wellness</p>
                                    <a href="./service.php" class="our-ser-button">Read More</a>
                                </div>
                                <img class="card-img" src="./image/ourser-6.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto py-5 text-center">
                        <a href="./service.php" class="our-ser-link">
                            Read More &#8594;
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- after our service banner -->
<div class="container">
    <img src="./image/af-orser.png" class="img-fluid" alt="">
</div>

<!-- AESTHETIC SERVICES -->

<div class="aesthetic_services my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 aesthetic_ser-leftcard">

                <p class="aesthetic_heading">
                    AESTHETIC SERVICES
                </p>
                <h3>
                    Our Most Popular Aesthetic Services
                </h3>
                <p class="aesthetic_content">
                    Transform your appearance with our advanced aesthetic treatments. Our expert team offers a range of
                    personalized solutions to enhance your natural beauty, from skin rejuvenation and anti-aging to
                    non-invasive cosmetic procedures.
                </p>
            </div>
            <div class="col-md-8">
                <!-- Swiper -->
                <div class="swiper aesthetic_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/aesth-1.png" class="card-img-top" alt="...">
                                <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                    <h5 class="aesthetic_slider-title">ANTI AGEING</h5>
                                    <p class="aesthetic_slider-text">Advanced treatments to rejuvenate and restore
                                        youthful skin.
                                    </p>
                                    <a href="#" class="aesthetic_slider-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Book Now &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/aesth-2.png" class="card-img-top" alt="...">
                                <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                    <h5 class="aesthetic_slider-title">ORGANIC PEELS</h5>
                                    <p class="aesthetic_slider-text">Reveal youthful skin by removing dead skin.
                                    </p>
                                    <a href="#" class="aesthetic_slider-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Book Now &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/aesth-3.png" class="card-img-top" alt="...">
                                <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                    <h5 class="aesthetic_slider-title">VAGINAL TIGHTENING</h5>
                                    <p class="aesthetic_slider-text">Non-invasive, beneficial for women experiencing
                                        laxity due to aging.
                                    </p>
                                    <a href="#" class="aesthetic_slider-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Book Now &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/aesth-4.png" class="card-img-top" alt="...">
                                <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                    <h5 class="aesthetic_slider-title">HAIR EXTENSION</h5>
                                    <p class="aesthetic_slider-text">Transform your look with our premium hair extension
                                        services.
                                    </p>
                                    <a href="#" class="aesthetic_slider-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Book Now &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/aesth-5.png" class="card-img-top" alt="...">
                                <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                    <h5 class="aesthetic_slider-title">HIFU TREATMENT</h5>
                                    <p class="aesthetic_slider-text">Tightens and lift skin with focused ultrasound
                                        technology.
                                    </p>
                                    <a href="#" class="aesthetic_slider-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Book Now &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/aesth-6.png" class="card-img-top" alt="...">
                                <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                    <h5 class="aesthetic_slider-title">HAIR TRANSPLANT</h5>
                                    <p class="aesthetic_slider-text">Regain Your Confidence with Our Expert Hair
                                        Transplant.
                                    </p>
                                    <a href="#" class="aesthetic_slider-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Book Now &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="./image/aesth-7.png" class="card-img-top" alt="...">
                                <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                    <h5 class="aesthetic_slider-title">OXYGENEO-POLLOGEN TREATMENT</h5>
                                    <p class="aesthetic_slider-text">Ultimate in skin rejuvenation with our advanced
                                        OxyGeneo Pollogen.
                                    </p>
                                    <a href="#" class="aesthetic_slider-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Book Now &#8594;</a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- offer slider -->
<div class="offer_slider">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ofr_slider-1.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ofr_slider-2.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ofr_slider-3.png" class="img-fluid" alt="">
                </a>
            </div>

        </div>

    </div>
</div>

<!-- Affordable Price frame -->
<div class="affordable_price my-5">
    <div class="row">
        <div class="col-md-5">

        </div>
        <div class="col-md-7">
            <!-- Swiper -->
            <div class="swiper af_p_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p1.png" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Salon Services</h5>
                                <!-- <hr class="border-ln"> -->
                                <p class="af_p-text">Avail 20% OFF on Facials and Hair Services
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p2.png" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Spa Services</h5>
                                <p class="af_p-text">Ayurvedic massages @ 50% OFF
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p3.png" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Kids Spa</h5>
                                <p class="af_p-text">Pamper your child with a Kids Spa and Enjoy a Free Haircut
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p4.png" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Slimming Services</h5>
                                <p class="af_p-text">Trial Offer - Lose upto 5kgs @ 3999
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p5.png" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Laser Treatments</h5>
                                <p class="af_p-text">Bonanza offer - Upper lip / chin Laser @ 699 /s
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p6.png" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Aesthetic services</h5>
                                <p class="af_p-text">Hydra Facial @ 2999 only
                                    Glow peel @ 999 only
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- testimonial -->
<div class="testimonial">

    <p class="testimonial-subhead text-center">
        Join over 15000+ happy clients
    </p>
    <h3 class="testimonial-head text-center">
        India’s #1 platform for beauty and wellness
    </h3>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-34313136-7fde-407a-bd45-4fc8d223ec46" data-elfsight-app-lazy></div>
</div>

<!-- blog -->
<div class="blog my-5">

    <h3 class="testimonial-head text-center">
        Latest News & Events
    </h3>
    <p class="testimonial-subhead text-center">
        Latest from Our Blog
    </p>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./image/bg.png" class="img-fluid" alt="...">
                    <div class="card-body aesthetic_slider-card-body" style="display: block;">
                        <p class="aesthetic_slider-text">Wellness Tips
                        </p>
                        <h5 class="aesthetic_slider-title">Top 10 Tips for a Healthier Lifestyle</h5>

                        <p class="blog-content">
                            Discover simple yet effective tips to improve your overall health and well-being. From
                            balanced diets to regul...
                        </p>
                        <a href="#" class="aesthetic_slider-link">Read More &#8594;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./image/bg.png" class="img-fluid" alt="...">
                    <div class="card-body aesthetic_slider-card-body" style="display: block;">
                        <p class="aesthetic_slider-text">Wellness Tips
                        </p>
                        <h5 class="aesthetic_slider-title">Top 10 Tips for a Healthier Lifestyle</h5>

                        <p class="blog-content">
                            Discover simple yet effective tips to improve your overall health and well-being. From
                            balanced diets to regul...
                        </p>
                        <a href="#" class="aesthetic_slider-link">Read More &#8594;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./image/bg.png" class="img-fluid" alt="...">
                    <div class="card-body aesthetic_slider-card-body" style="display: block;">
                        <p class="aesthetic_slider-text">Wellness Tips
                        </p>
                        <h5 class="aesthetic_slider-title">Top 10 Tips for a Healthier Lifestyle</h5>

                        <p class="blog-content">
                            Discover simple yet effective tips to improve your overall health and well-being. From
                            balanced diets to regul...
                        </p>
                        <a href="#" class="aesthetic_slider-link">Read More &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once "./footer.php";
?>