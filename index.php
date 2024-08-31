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
        line-height: 70px;
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
        width: 100%;
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
</style>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#">
                <img src="./image/ban-2.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img src="./image/ban-1.png" class="img-fluid" alt="">
            </a>
        </div>

        <div class="swiper-slide">
            <a href="#">
                <img src="./image/ban-3.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img src="./image/ban-4.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img src="./image/ban-5.png" class="img-fluid" alt="">
            </a>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
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
                                    <a href="#" class="our-ser-button">Read More</a>
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
                                    <a href="#" class="our-ser-button">Read More</a>
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
                                    <a href="#" class="our-ser-button">Read More</a>
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
                                    <a href="#" class="our-ser-button">Read More</a>
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
                                    <a href="#" class="our-ser-button">Read More</a>
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
                                    <a href="#" class="our-ser-button">Read More</a>
                                </div>
                                <img class="card-img" src="./image/ourser-6.png" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto py-5 text-center">
                        <a href="#" class="our-ser-link">
                            Read More &#8594;
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- after our service banner -->
<!-- <div class="container">
    <img src="./image/af-orser.png" class="img-fluid" alt="">
</div> -->

<?php
include_once "./footer.php";
?>