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

    @media screen and (max-width:500px) {
        .banner-img {
            height: 200px;
        }

        .cont-form-mob {
            padding: 0px 35px;
        }
    }
</style>

<div class="contactus">
    <img src="./image/contact-bg.webp" class="img-fluid banner-img" alt="">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 mt-5">
                <img src="./image/adds.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/ph.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 mt-5">
                <img src="./image/em.webp" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="form_bg">
        <img src="./image/frm-bg.webp" class="img-fluid formcard_img" alt="">
        <div class="contactus_form">
            <div class="row ">
                <div class="col-md-8 mx-auto shadow form_card mb-5">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="./image/fr-img.webp" class="img-fluid form_mainimg" alt="">
                        </div>
                        <div class="col-md-7 my-5 cont-form-mob">
                            <p class="sub_heading">
                                cogni wellness hub
                            </p>
                            <h3 class="heading">
                                Book appointment
                            </h3>
                            <form id="contactForm" method="post" onsubmit="sendToWhatsApp(event)">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label for="f_name">First name</label>
                                        <input type="text" class="form-control" id="f_name" placeholder="First name"
                                            required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="l_name">Last name</label>
                                        <input type="text" class="form-control" id="l_name" placeholder="Last name"
                                            required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" placeholder="Date" required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="time">Time</label>
                                        <input type="time" class="form-control" id="time" placeholder="Time" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="service">Choose Service</label>
                                        <select class="form-control" id="service" required>
                                            <option selected>Choose service</option>
                                            <option value="AESTHETIC SERVICES">AESTHETIC SERVICES</option>
                                            <option value="SALON SERVICES">SALON SERVICES</option>
                                            <option value="SPA SERVICES">SPA SERVICES</option>
                                            <option value="SLIMMING SERVICES">SLIMMING SERVICES</option>
                                            <option value="LASER">LASER</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="link_button">Send Message</button>
                                    </div>
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
<script>
    function sendToWhatsApp(event) {
        event.preventDefault(); // Prevents the form from submitting traditionally

        // Get form values
        const firstName = document.getElementById('f_name').value;
        const lastName = document.getElementById('l_name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        const service = document.getElementById('service').value;

        // Format message for WhatsApp
        const message = `First Name: ${firstName}%0ALast Name: ${lastName}%0AEmail: ${email}%0APhone: ${phone}%0ADate: ${date}%0ATime: ${time}%0AService: ${service}`;

        // WhatsApp link
        const whatsappLink = `https://wa.me/918056121346?text=${message}`;

        // Redirect to WhatsApp
        window.open(whatsappLink, '_blank');
    }
</script>

<?php
include_once "./footer.php";
?>