<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted pt-1">
    <style>
        .follow-up-link img {
            width: 94px;
            height: 94px;
        }

        .copy-right-content {
            background-color: #CBE7CC;
        }

        .footer-maincard {
            background-color: #162F33;
        }

        .footer-heading {
            color: white;
            line-height: 25px;
        }

        .footer-contenty {
            color: #B0C491;
        }

        .footer-content {
            color: #FFFFFF;
        }
    </style>

    <!-- Section: Links  -->
    <section class="footer-maincard pt-1">
        <div class="container text-center text-md-start mt-3">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <img src="./image/footer-logoimg.webp" style="width:250px;" class="img-fluid" alt="">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold footer-heading mb-4">
                        Our Services
                    </h6>
                    <p class="footer-contenty">
                        <a href="./service.php#SALON SERVICES" class="text-reset"><i
                                class="fas fa-chevron-right me-2"></i>SALON SERVICES
                        </a>
                    </p>
                    <p class="footer-contenty">
                        <a href="./service.php#SPA SERVICES" class="text-reset"><i
                                class="fas fa-chevron-right me-2"></i>SPA SERVICES
                        </a>
                    </p>
                    <p class="footer-contenty">
                        <a href="./service.php#SLIMMING SERVICES" class="text-reset"><i
                                class="fas fa-chevron-right me-2"></i>SLIMMING SERVICES
                        </a>
                    </p>
                    <p class="footer-contenty">
                        <a href="./service.php#AESTHETIC SERVICES" class="text-reset"><i
                                class="fas fa-chevron-right me-2"></i>AESTHETIC SERVICES
                        </a>
                    </p>
                    <p class="footer-contenty">
                        <a href="./service.php#LASER" class="text-reset"><i class="fas fa-chevron-right me-2"></i>LASER
                        </a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4 mt-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 footer-heading">
                        Follow us
                    </h6>
                    <div class="footer-follow d-flex" id="footersocial">
                        <a href="https://www.facebook.com/profile.php?id=61563851213696" target="_blank"
                            class="follow-up-link me-2">
                            <img src="./image/ft-fb.webp" class="img-fluid" alt="">
                        </a>
                        <a href="https://www.instagram.com/cogniwellness_tharamani?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank" class="follow-up-link me-2">
                            <img src="./image/ft-ig.webp" class="img-fluid" alt="">
                        </a>
                        <a href="#" class="follow-up-link me-2">
                            <img src="./image/ft-x.webp" class="img-fluid" alt="">
                        </a>

                    </div>
                    <style>
                        @media screen and (max-width:500px) {
                            #footersocial {
                                justify-content: center;
                            }
                        }
                    </style>
                    <div class="footer-follow">
                        <a href="#" class="follow-up-link">
                            <img src="./image/ft-li.webp" class="img-fluid mt-2" alt="">
                        </a>
                        <a href="#" class="follow-up-link ">
                            <img src="./image/ft-yt.webp" class="img-fluid mt-2" alt="">
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 footer-heading">Contact</h6>

                    <p class="footer-content"><i class="fas fa-phone-alt me-3"></i>+91 8056121346/9003132242</p>
                    <p class="footer-content">
                        <i class="fas fa-envelope me-3"></i>
                        cogniwellnesshub@gmail.com / <br> support@cogniwellness.com
                    </p>
                    <p class="footer-content">
                        <i class="fas fa-clock me-3"></i>10:00 - 21:00
                    </p>
                    <p class="footer-content"><i class="fas fa-home me-3"></i> Old.141, New.4/585, Rajiv Gandhi Salai,
                        Kottivakkam, Tamil Nadu,
                        Chennai 600041</p>


                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="d-flex copy-right-content">
        <div class="text-start p-4">
            Copyright © Cogni Wellness Hub. All rights reserved.
        </div>
        <div class="ms-auto p-4">
            Powered by RAINBOW MEDIA
        </div>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        speed: 600,
        parallax: true,
        loop: true, // Enable looping
        autoplay: {
            delay: 4000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    var swiper = new Swiper(".aesthetic_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }
    });

    var swiper = new Swiper(".af_p_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true, // Enable looping
        autoplay: {
            delay: 3000, // 6 seconds interval
            disableOnInteraction: false, // Keeps autoplay active after user interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // When the viewport is 768px or larger
            768: {
                slidesPerView: 3, // Show 3 slides per view
            },
            // When the viewport is 576px or larger
            576: {
                slidesPerView: 2, // Show 2 slides per view
            },
            // When the viewport is less than 576px (mobile devices)
            0: {
                slidesPerView: 1, // Show 1 slide per view on mobile
            }
        }
    });
</script>

</body>

</html>