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

    .heading-site {
        font-size: 36px;
        font-weight: 400;
        color: #271605;
        line-height: 70px;
    }

    .about_overview {
        margin-top: 55px;
    }
</style>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#">
                <img src="./image/ban-1.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- about overview -->
<!-- <div class="about_overview ">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./image/about-over.png" class="img-fluid about-top-img" alt="">
                        <!-- heading -->
<div class="abt-cont py-5">
    <h3 class="heading-site">
        Welcome to Cogni <br>
        Wellness Hub <span><img src="./image/about-head.png" class="about-head-img" alt=""></span>
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
</div> -->

<?php
include_once "./footer.php";
?>