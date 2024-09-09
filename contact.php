<?php
include_once "./header.php";
?>

<style>
    * {
        overflow-x: hidden;
    }

    .form-group {
        margin-right: 10px;
    }

    .formcard_img {
        z-index: -99999;
        position: absolute;
    }

    .form_mainimg {
        margin-top: 29px;
    }

    .form_card {
        position: relative;
        margin-top: 75px;
        z-index: 99999;
        background: white;
    }

    .sub_heading {
        text-transform: uppercase;
    }

    .heading {
        line-height: 1.5;
    }

    .link_button {
        margin-top: 20px;
        padding: 13px 40px;
        background: #162F33;
        display: block;
        width: 100%;
        color: white;
        text-decoration: none;
        font-size: 20px;
        text-align: center;
    }
</style>

<div class="contactus">
    <img src="./image/contact-bg.png" class="img-fluid" alt="">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <img src="./image/adds.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="./image/ph.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="./image/em.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="form_bg">
        <img src="./image/frm-bg.png" class="img-fluid formcard_img" alt="">
        <div class="contactus_form">
            <div class="row ">
                <div class="col-md-8 mx-auto shadow form_card mb-5">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="./image/fr-img.png" class="img-fluid form_mainimg" alt="">
                        </div>
                        <div class="col-md-7 my-5">
                            <p class="sub_heading">
                                cogni wellness hub
                            </p>
                            <h3 class="heading">
                                Book appointment
                            </h3>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label for="inputEmail4">First name</label>
                                        <input type="text" class="form-control" id="f_name" placeholder="First name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="inputEmail4">Last name</label>
                                        <input type="text" class="form-control" id="l_name" placeholder="Last name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="inputEmail4">Phone</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="inputEmail4">Date</label>
                                        <input type="date" class="form-control" id="date" placeholder="Date">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="inputEmail4">Time</label>
                                        <input type="time" class="form-control" id="time" placeholder="Time">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="inputEmail4">Choose Service</label>
                                        <select class="form-control mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose service</option>
                                            <option value="AESTHETIC SERVICES">AESTHETIC SERVICES </option>
                                            <option value="SALON SERVICES">SALON SERVICES</option>
                                            <option value="SPA SERVICES">SPA SERVICES</option>
                                            <option value="SLIMMING SERVICES">SLIMMING SERVICES</option>
                                            <option value="LASER">LASER</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <a href="#" class="link_button">Send message</a>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60374.55107183255!2d80.22659464039079!3d12.992283622156775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d4d2705d2fd%3A0xec9f4ff16c69678!2sCOGNI%20WELLNESS%20HUB!5e0!3m2!1sen!2sin!4v1725528366354!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php
include_once "./footer.php";
?>