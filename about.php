<html lang="en">

<head>
    <title>Cogni Wellness Hub</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        .colimg img {
            width: 100%;
            height: 80%;
        }

        .colimg1 img {
            width: 100%;
        }

        /* .margintop8{
    margin:8rem auto;
} */
        .content {
            padding: 3rem;
            background-repeat: no-repeat;

        }

        .content h4 {
            padding-bottom: 1rem;
            font-size: 1.7rem;
        }

        .tickrow {
            margin: 3rem auto;
        }

        .tickrow img {
            width: 50px;
            height: 50px;
        }

        .card {
            border: none !important;
        }

        .card-body {
            padding: 0px;
        }

        .card-title {
            padding: 17px 0 10px 0;
        }

        .lsitspan {
            color: #757575;
            font-weight: 600;
        }

        #imgtext li {
            color: #757575;
        }

        @media screen and (max-width:500px) {
            .hero {
                padding: 4em;
            }

            .content {
                padding: 1rem;
            }

            #content {
                padding: 1rem;
                /* Reduce padding for mobile */
                background-size: cover;
                /* Adjust background image size for smaller screens */
                height: auto;
            }

            #dermoimg {
                width: 362px !important;
            }

            .lsitspan:first-of-type {
                margin-top: 10px;
            }

            .centered h2 {
                font-size: 1.2rem !important;
            }
        }
    </style>
</head>

<body>
    <header>
        <?php
        include_once "./header.php";
        ?>
    </header>
    <main>
        <div class="hero" style="background-image: url(./images/about/abtbanner.webp);">
            <h1>About Us</h1>
        </div>
        <div class="container text-left">
            <div class="row margintop8" style="margin-top: 5rem;">
                <div class="col-sm-5 col-md-6">
                    <p class="popregular">Our Journey <span> <img src="./images/about/line.webp" alt="image"></span></p>
                    <h2>Unlock Your Mindful Wellness with COGNI WELLNESS HUB
                        <span> <img src="./images/about/flower.webp" alt="image"></span>
                    </h2>
                    <p>Welcome to COGNI WELLNESS HUB, your comprehensive wellness platform dedicated to enhancing your
                        wellbeing. At Cogni, we bring together all wellness and personal grooming services under one
                        roof, including Salon, Spa, Slimming, Laser Treatments, Aesthetic & Dermat Services.</p>
                    <p>As the premier Wellness Hub of Chennai, we offer the most advanced technologies and treatments
                        for revitalization and relaxation. Our focus is on providing holistic care through Ayurveda
                        Treatments, Aroma Therapy, and Organic Kids Spa treatments.</p>
                    <p>Join us at COGNI WELLNESS HUB and embark on a journey to unlock your mindful wellness. Experience
                        the perfect blend of traditional and modern therapies designed to rejuvenate your body, mind,
                        and spirit.</p>
                </div>
                <div class="col-sm-6 col-md-6 offset-md-0 colimg">
                    <img src="./images/about/placeholder.webp" alt="image">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="content" style="background-image:url(./images/about/feature1.webp)">
                            <h4 style="color:#FFFFFF">Our Vision</h4>
                            <p style="color:#FFFFFF">To be the leading destination for holistic wellness and beauty,
                                inspiring a global community to embrace a balanced and healthy lifestyle. We envision a
                                world where every individual feels empowered, rejuvenated, and confident in their own
                                skin through natural and sustainable wellness practices. At Cogni Wellness Hub, we
                                innovate and set new standards in the wellness industry, fostering a culture of care,
                                respect, and excellence.</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content" style="background-image:url(./images/about/feature2.webp)">
                            <h4>Our Mission</h4>
                            <p>Our mission is to inspire and empower individuals to embrace a lifestyle of holistic
                                wellness. We aim to deliver exceptional, personalized services that enhance our clients'
                                physical, mental, and emotional well-being. At Cogni Wellness Hub, we believe in the
                                power of natural and organic products, and we are committed to sustainability and
                                ethical practices in all that we do.</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:2rem">
                    <div class="col-md-12">
                        <div class="content" style="background-image:url(./images/about/feature3.webp)" id="content">
                            <h4>Our Commitment</h4>
                            <p>At COGNI WELLNESS HUB, we are committed to delivering superior quality experiences by
                                blending advanced technologies with traditional therapies. Our team works
                                collaboratively to ensure you receive the best care possible, fostering a supportive and
                                nurturing environment.</p>

                        </div>
                    </div>
                </div>
                <div class="row margintop8" style="margin-top: 5rem;" id="imgtext">
                    <div class="col-sm-6 col-md-12">
                        <p class="popregular">Our Expert Team <span> <img src="./images/about/line.webp"
                                    alt="image"></span></p>
                        <h2>Expert Team of Doctors and Professionals
                            <span> <img src="./images/about/flower.webp" alt="image"></span>
                            <img src="./images/about/imagetext.webp" alt="image"
                                style="float:right;height:400px;width:500px" id="dermoimg">
                        </h2>
                        <ul>
                            <li><span class="lsitspan">Dermatologists & Cosmetologists:</span> Specialised in Skin, Hair
                                & Nail health.</li><br>
                            <li><span class="lsitspan">Nutritionist-Dietitian: </span> Experts in diet and nutrition,
                                offering personalized dietary plans and advice.
                            </li><br>
                            <li><span class="lsitspan">Trichologist:</span> Specialists in hair and scalp health,
                                addressing issues like hair loss and scalp conditions.
                            </li><br>
                            <li><span class="lsitspan">Physiotherapist: </span> Professionals who specialize in
                                developing tailored exercise programs. They ensure that members perform exercises with
                                the correct form to maximize benefits.
                            </li><br>
                            <li><span class="lsitspan">Aesthetician: </span> Experts in skincare treatments, including
                                facials, peels, and other beauty treatments.
                            </li><br>
                            <li><span class="lsitspan">Weight Loss Specialist: </span> Professionals dedicated to
                                helping clients achieve and maintain a healthy weight through personalized plans.
                            </li><br>
                            <li><span class="lsitspan">Master Hair Stylist: </span> Skilled in advanced hair styling
                                techniques, providing cutting, colouring, and styling services.
                            </li><br>
                            <li><span class="lsitspan">Beauty Specialist: </span> Experts in various beauty treatments,
                                including skincare, makeup, and nail care.
                            </li><br>
                            <li><span class="lsitspan">Makeup Artist: </span> Professionals skilled in makeup
                                application for various occasions, from everyday looks to special events.
                            </li><br>
                            <li><span class="lsitspan">Certified Ayurvedic Massage Therapists: </span> Specialists in
                                traditional Ayurvedic massage techniques, promoting relaxation and holistic well-being.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row " style="margin-top:8rem">
                    <div class="col-sm-12 col-md-12">
                        <p class="popregular">Our Awesome Benefits <span> <img src="./images/about/line.webp"
                                    alt="image"></span></p>
                        <h2>Actually what you’ll get from</h2>
                    </div>

                    <div class="row tickrow">
                        <div class="col-md-4">
                            <div class="card" style="width: 25rem;">
                                <img src="./images/about/tick.webp" class="card-img-top" alt="tick_image">
                                <div class="card-body">
                                    <h5 class="card-title">Expert Team</h5>
                                    <ul>
                                        <li>
                                            <p><span class="black">Doctors & Professionals:</span> Our team comprises
                                                highly
                                                qualified doctors and professionals dedicated to your wellness and
                                                personal grooming needs.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 25rem;">
                                <img src="./images/about/tick.webp" class="card-img-top" alt="tick_image">
                                <div class="card-body">
                                    <h5 class="card-title">Comprehensive Services</h5>
                                    <ul>
                                        <li>
                                            <p><span class="black">All Under One Roof:</span> Enjoy a wide range of
                                                services including Salon, Spa,
                                                Slimming, Laser Treatments, Clinical Aesthetic & Dermat Services.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 25rem;">
                                <img src="./images/about/tick.webp" class="card-img-top" alt="tick_image">
                                <div class="card-body">
                                    <h5 class="card-title">Advanced Technology</h5>
                                    <ul>
                                        <li>
                                            <p><span class="black">FDA/CE Approved Machines:</span> We use the latest
                                                technology for effective treatments.
                                            </p>
                                        </li>
                                        <li>
                                            <p><span class="black">Guaranteed Results</span> Our treatments are
                                                result-oriented and use genuine products.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tickrow">
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <img src="./images/about/tick.webp" class="card-img-top" alt="tick_image">
                            <div class="card-body">
                                <h5 class="card-title">State-of-the-Art Facilities</h5>
                                <ul>
                                    <li>
                                        <p><span class="black">Ventilated, Fully Air-Conditioned Space:</span>Experience
                                            comfort in a hygienic and sanitized environment.</p>
                                    </li>
                                    <li>
                                        <p><span class="black">Congenial Environment: </span>Relax with a scenic view of
                                            OMR.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">VIP Rooms, Steam Rooms, Jacuzzi, Body Jets, Shower
                                                Cabins: </span>Indulge in luxury.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Hygienic Washrooms, Pantry: </span>Clean and convenient
                                            amenities.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Wheelchair Accessible Elevator: </span>Accessibility for
                                            everyone.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Free Valet Parking: </span>Hassle-free parking.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Easily Accessible Location: </span>Conveniently located
                                            on OMR main road.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Friendly Crew: </span> Our well-mannered staff ensures a
                                            pleasant visit. </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <img src="./images/about/tick.webp" class="card-img-top" alt="tick_image">
                            <div class="card-body">
                                <h5 class="card-title">Premium Products</h5>
                                <ul>
                                    <li>
                                        <p><span class="black">International Elite Beauty Products: </span> Featuring
                                            brands like L’Oreal Paris, KERASTASE Paris, and SKEYNDOR Spain.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Organic Non-Allergic Hair & Skin Products: </span> Safe
                                            and effective for all skin types.

                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Organic Child Care Spa Products: </span> Gentle and safe
                                            for children.

                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Ayush Approved Ayurveda Products: </span> Traditional and
                                            trusted.

                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <img src="./images/about/tick.webp" class="card-img-top" alt="tick_image">
                            <div class="card-body">
                                <h5 class="card-title">Affordable Luxury</h5>
                                <ul>
                                    <li>
                                        <p><span class="black">Reasonable Prices:</span> Premium services at competitive
                                            rates.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Expertise:</span> Years of experience help us recommend
                                            the best products for your skin and hair.

                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">EMI Options: </span> Pay in easy, zero-interest
                                            instalments.

                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Free Consultation: </span> Get expert advice at no cost.

                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="black">Membership Programs: </span> Enjoy exclusive benefits and
                                            discounts.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margintop8">
                    <div class="col-sm-5 col-md-6">
                        <p class="popregular">Gallery <span> <img src="./images/about/line.webp" alt="image"></span></p>
                        <h2>Our Space
                            <span> <img src="./images/about/flower.webp" alt="image"></span>
                        </h2>
                        <p>Explore our beautifully designed wellness hub that offers a serene and luxurious environment.
                        </p>
                    </div>
                    <div class="col-sm-6  col-md-6 offset-md-0 colimg1">
                        <img src="./images/about/image.webp" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="banner">
            <img src="./image/af-orser.webp" alt="Snow" style="width:100%;" id="frame">
            <div class="centered">
                <!-- <h2>NEED TO ADD COGNI WELLNESS EXPERT TEAM GROUNP PHOTO</h2> -->
            </div>
        </div>
        <style>
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .centered h2 {
                font-size: 3rem;
            }

            #banner {
                position: relative;
                text-align: center;
                color: white;
                margin: 5rem auto 3rem auto;
            }
        </style>
    </main>
    <footer>
        <?php
        include_once "./footer.php";
        ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>