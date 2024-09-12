<?php
include_once "./header.php";
?>

<?php
include_once("./header.php");

// Your API endpoint
$api_url = "https://admin-backend.cogniwellness.com/list-blog";

// Initialize cURL
$ch = curl_init();

$img_url = "https://admin-backend.cogniwellness.com/upload/";

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Only if your API uses HTTPS and you encounter SSL issues

// Execute cURL and fetch the data
$response = curl_exec($ch);

// Close cURL
curl_close($ch);

// Decode JSON response to PHP array
$blogs = json_decode($response, true);

// Check if the data is in the expected format
$blogs = isset($blogs['listblog']) ? $blogs['listblog'] : [];


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
        background-image: url('./image/aff-price.webp');
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

    .job-banner img {
        width: 100%;
        height: auto;
    }

    .coursecontainer {
        text-align: center;
        margin: 50px 0;
    }

    .h4heading {
        text-transform: uppercase;
        color: #008AFF;
        font-size: 24px;
    }

    .h3heading {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .blogcontainer .card {
        border: none;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .blogcontainer .card:hover {
        transform: translateY(-5px);
    }

    .blogcontainer .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .blogcontainer .card-body {
        padding: 20px;
    }

    .blogcontainer .aesthetic_slider-text {
        color: #FF6F61;
        font-weight: bold;
        font-size: 16px;
    }

    .blog-title {
        font-size: 20px;
        margin: 10px 0;
    }

    .blog-content {
        font-size: 14px;
        color: #777;
        margin-bottom: 15px;
    }

    .blogcontainer .aesthetic_slider-link {
        color: #008AFF;
        text-decoration: none;
        font-weight: bold;
    }

    .blogcontainer .aesthetic_slider-link:hover {
        text-decoration: underline;
    }

    @media screen and (max-width:500px) {
        .aesthetic_ser-leftcard {
            margin-top: 6px;
        }
    }
</style>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-2.webp" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-1.webp" class="img-fluid" alt="">
            </a>
        </div>

        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-3.webp" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-4.webp" class="img-fluid" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="./image/ban-5.webp" class="img-fluid" alt="">
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
                        <img src="./image/about-over.webp" class="img-fluid about-top-img" alt="">

                        <div class="abt-cont py-5">
                            <h3 class="heading-site">
                                Welcome to Cogni <br>
                                Wellness Hub <span><img src="./image/about-head.webp" class="about-head-img"
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
                        <img src="./image/about-overview.webp" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our service -->

<img src="./image/orser-topimg.webp" class="out-service-topimg" alt="">

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
                                <img class="card-img" src="./image/ourser-1.webp" alt="Card image cap">
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
                                <img class="card-img" src="./image/ourser-2.webp" alt="Card image cap">
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
                                <img class="card-img" src="./image/ourser-3.webp" alt="Card image cap">
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
                                <img class="card-img" src="./image/ourser-4.webp" alt="Card image cap">
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
                                <img class="card-img" src="./image/ourser-5.webp" alt="Card image cap">
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
                                <img class="card-img" src="./image/ourser-6.webp" alt="Card image cap">
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
    <img src="./image/af-orser.webp" class="img-fluid" alt="">
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
                                <img src="./image/aesth-1.webp" class="card-img-top" alt="...">
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
                                <img src="./image/aesth-2.webp" class="card-img-top" alt="...">
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
                                <img src="./image/aesth-3.webp" class="card-img-top" alt="...">
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
                                <img src="./image/aesth-4.webp" class="card-img-top" alt="...">
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
                                <img src="./image/aesth-5.webp" class="card-img-top" alt="...">
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
                                <img src="./image/aesth-6.webp" class="card-img-top" alt="...">
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
                                <img src="./image/aesth-7.webp" class="card-img-top" alt="...">
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
                    <img src="./image/ofr_slider-1.webp" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ofr_slider-2.webp" class="img-fluid" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="./image/ofr_slider-3.webp" class="img-fluid" alt="">
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
                            <img src="./image/af-p1.webp" class="card-img-top" alt="...">
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
                            <img src="./image/af-p2.webp" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Spa Services</h5>
                                <p class="af_p-text">Ayurvedic massages @ 50% OFF
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p3.webp" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Kids Spa</h5>
                                <p class="af_p-text">Pamper your child with a Kids Spa and Enjoy a Free Haircut
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p4.webp" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Slimming Services</h5>
                                <p class="af_p-text">Trial Offer - Lose upto 5kgs @ 3999
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p5.webp" class="card-img-top" alt="...">
                            <div class="card-body af_p-card-body" style="display: block;">
                                <h5 class="af_p-title">Laser Treatments</h5>
                                <p class="af_p-text">Bonanza offer - Upper lip / chin Laser @ 699 /s
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="./image/af-p6.webp" class="card-img-top" alt="...">
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
    <?php if (!empty($blogs)): ?>
        <div class="container">
            <div class="row">
                <?php
                $count = 0;
                foreach ($blogs as $blog):
                    if ($count >= 3)
                        break;

                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $img_url . $blog['thumbnail_image']; ?>" class="img-fluid" alt="...">
                            <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                <!--<p class="aesthetic_slider-text">Wellness Tips-->
                                <!--</p>-->
                                <h5 class="blog-title"><?php echo !empty($blog['title']) ? $blog['title'] : 'No Title'; ?></h5>

                                <p class="blog-content">
                                    <?php echo !empty($blog['short_description']) ? $blog['short_description'] : 'No Description'; ?>
                                </p>
                                <a href="./blog-detail.php?id=<?php echo $blog['_id']; ?>" class="aesthetic_slider-link">Read
                                    More &#8594;</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php else: ?>
        <p>No blog posts found.</p>
    <?php endif; ?>
</div>


<?php
include_once "./footer.php";
?>