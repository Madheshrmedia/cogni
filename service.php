<?php
include_once "./header.php";
?>
<style>
    * {
        overflow-x: hidden;
    }

    .our-best-services {
        font-family: 'YourFontFamily', sans-serif;
        font-weight: 300;
        color: #162F33;
        text-transform: uppercase;
        font-size: 18px;
    }

    .line {
        width: 100px;
        /* Set your desired width */
        height: 2px;
        background-color: #001010;
        /* Replace with the exact color from your image */
    }

    .service_mainheading {
        line-height: 1.6;
    }

    .service_heading {
        font-size: 26px;
        font-weight: 500;
        color: #162F33;
    }

    .service_content {
        margin-top: 1rem;
        color: #4E6845;
    }

    .service_line {
        width: 82%;
        height: 1px;
        background-color: #9BB7BF;
        /* Replace with the exact color from your image */
    }

    .service_link {
        padding: 13px 55px;
        color: #FFFFFF;
        background: linear-gradient(to right,
                #D4A200 0%,
                #FFD13D 45%,
                #D6A608 75%,
                #FFC300 100%);
        text-decoration: none;
    }

    .right-img {
        position: relative;
        margin-left: -98px;
    }
</style>
<div class="service-frame">
    <img src="./image/service-bg.png" class="img-fluid" alt="">
    <div class="container text-center my-5">
        <div class="d-flex align-items-center justify-content-center">
            <div class="line"></div>
            <h2 class="mx-3 text-uppercase font-weight-bold our-best-services my-auto">Our Best Services</h2>
            <div class="line"></div>
        </div>
        <h3 class="service_mainheading mt-5">
            We are Experienced in making you <br> very Beautiful
        </h3>
    </div>

    <!-- main frame -->
    <div class="main_frame">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <!-- 1st service -->
                    <div class="col-md-6">
                        <img src="./image/ser-1.png" class="img-fluid w-100" alt="">
                    </div>

                    <div class="col-md-6 mt-3" id="SALON SERVICES">
                        <p class="service_heading">
                            SALON SERVICES
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            HAIR STYLING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            HAIR CUT
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            HAIR SPA
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            HAIR COLOURING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            HAIR COLOURING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            PEDICURE (HEEL CRACKS REMOVAL)
                        </p>
                        <div class="service_line" style="margin-bottom:40px"></div>

<<<<<<< HEAD
                        <a href="./service-detail.php" class="service_link">
=======
                        <a href="./salon-detail.php" class="service_link">
>>>>>>> eec324ee7ab5b396ec8819b5bd3797cc1056488a
                            VIEW ALL
                        </a>
                    </div>
                    <!-- 2nd service -->
                    <div class="col-md-6  mt-5" id="SPA SERVICES">
                        <p class="service_heading">
                            SPA SERVICES
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            BODY SPA
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            BODY POLISH
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            AYURVEDIC SPA
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            KIDS SPA
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            BODY UBTAN
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            STEAM THERAPY
                        </p>
                        <div class="service_line" style="margin-bottom:40px"></div>

                        <a href="./spa-detail.php" class="service_link">
                            VIEW ALL
                        </a>
                    </div>
                    <div class="col-md-6 right-img">
                        <img src="./image/ser-2.png" class="img-fluid w-100" alt="">
                    </div>
                    <!-- 3rd service -->
                    <div class="col-md-6">
                        <img src="./image/ser-3.png" class="img-fluid w-100" alt="">
                    </div>

                    <div class="col-md-6 mt-5" id="SLIMMING SERVICES">
                        <p class="service_heading">
                            SLIMMING SERVICES
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            COOL SCULPTING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            WEIGHTLOSS
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            INCHLOSS
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            BODY CONTOURING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            CRYOLIPOLYSIS
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            SKIN TIGHTENING
                        </p>
                        <div class="service_line" style="margin-bottom:40px"></div>

                        <a href="./slimming-detail.php" class="service_link">
                            VIEW ALL
                        </a>
                    </div>
                    <!-- 4th service -->
                    <div class="col-md-6  mt-5" id="AESTHETIC SERVICES">
                        <p class="service_heading">
                            AESTHETIC SERVICES
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            ANTI AGEING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            FINE LINES & WRINKLE TREATMENT
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            SKIN TIGHTENING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            FACE LIFTING
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            FACE CORRECTION
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            WATT REMOVAL
                        </p>
                        <div class="service_line" style="margin-bottom:40px"></div>

                        <a href="./aesthetic-detail.php" class="service_link">
                            VIEW ALL
                        </a>
                    </div>
                    <div class="col-md-6 right-img">
                        <img src="./image/ser-4.png" class="img-fluid w-100" alt="">
                    </div>
                    <!-- 5rd service -->
                    <div class="col-md-6">
                        <img src="./image/ser-5.png" class="img-fluid w-100" alt="">
                    </div>

                    <div class="col-md-6 mt-5" id="LASER">
                        <p class="service_heading">
                            LASER

                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            HAIR REMOVAL
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            SCAR REMOVAL
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            TATOO REMOVAL (BLACK & COLOR)
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            CARBON FACIAL
                        </p>
                        <div class="service_line"></div>
                        <p class="service_content">
                            ANTI PIGMENTATION
                        </p>

                        <div class="service_line" style="margin-bottom:40px"></div>

                        <a href="./laser-detail.php" class="service_link">
                            VIEW ALL
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <img src="./image/ser-6.png" class="img-fluid mt-5" alt="">
</div>

<?php
include_once "./footer.php";
?>