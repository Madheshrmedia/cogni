<!-- Modal -->
<style>
    .pop-input {
        margin-top: 23px;
        border-color: #E5EDDA;
    }

    .pop-input::placeholder {
        color: #A1A1A1;
        font-size: 16px;
    }

    .pop-link {
        padding: 13px 55px;
        color: #FFFFFF;
        background: linear-gradient(to right, #D4A200 0%, #FFD13D 45%, #D6A608 75%, #FFC300 100%);
        text-decoration: none;
        border-radius: 10px;
        overflow-x: visible;
        cursor: pointer;
    }

    .popheader {
        color: #4E6845;
        font-size: 36px;
        font-weight: bold;
        overflow-x: visible;
    }

    .popspl {
        color: #4E6845;
        font-size: 24px;
        font-weight: bold;
    }

    .popcontent {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .btn-close {
        position: absolute;
        margin-left: -50px;
    }

    .modal-content {
        transform: rotate(-3.71deg);
        position: relative;
    }

    .modal.show .modal-dialog {
        margin-top: 60px;
        border: 1px solid white;
        border-radius: 5px;
        overflow-x: visible;
    }

    @media only screen and (max-width: 600px) {
        .pop-img {
            display: none;
        }

        .modal-content {
            transform: rotate(0deg);
            position: relative;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal.show .modal-dialog {
            margin-top: 60px;
            border: none;
            border-radius: 5px;
            padding: 5px;
            height: 100% !important;
        }

        .pop-fromcard {
            padding: 30px;
        }
    }
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-12 text-end">
                    <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="col-md-4">
                    <img src="./image/popimg.webp" class="img-fluid pop-img" alt="">
                </div>
                <div class="col-md-8 pop-fromcard">
                    <h2 class="popheader text-center mt-5">
                        Wait A Second !
                    </h2>
                    <p class="popcontent text-center">
                        New customers get <span class="popspl">50 %</span> discount on first booking
                    </p>
                    <form id="bookingForm">
                        <div class="row pe-2">
                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" placeholder="Enter Your Name"
                                    id="name">
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" placeholder="Phone number" id="phone">
                                <div class="invalid-feedback">Please enter your phone number.</div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" onfocus="(this.type='date')"
                                    placeholder="Date" id="date">
                                <div class="invalid-feedback">Please select a date.</div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" placeholder="Service" id="service">
                                <div class="invalid-feedback">Please specify the service.</div>
                            </div>
                            <div class="col-md-12 text-center" style="margin-top: 35px;">
                                <a href="#" class="pop-link" onclick="sendWhatsApp()">Book now</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function sendWhatsApp() {
        const nameField = document.getElementById('name');
        const phoneField = document.getElementById('phone');
        const dateField = document.getElementById('date');
        const serviceField = document.getElementById('service');

        const name = nameField.value.trim();
        const phone = phoneField.value.trim();
        const date = dateField.value.trim();
        const service = serviceField.value.trim();

        let isValid = true;

        // Regex for validating Indian phone number
        const phoneRegex = /^[6-9]\d{9}$/;

        // Validate Name
        if (!name) {
            nameField.classList.add('is-invalid');
            isValid = false;
        } else {
            nameField.classList.remove('is-invalid');
        }

        // Validate Phone
        if (!phone || !phoneRegex.test(phone)) {
            phoneField.classList.add('is-invalid');
            phoneField.nextElementSibling.textContent = 'Please enter a valid 10-digit Indian phone number.';
            isValid = false;
        } else {
            phoneField.classList.remove('is-invalid');
        }

        // Validate Date
        if (!date) {
            dateField.classList.add('is-invalid');
            isValid = false;
        } else {
            dateField.classList.remove('is-invalid');
        }

        // Validate Service
        if (!service) {
            serviceField.classList.add('is-invalid');
            isValid = false;
        } else {
            serviceField.classList.remove('is-invalid');
        }

        // If form is invalid, do not proceed
        if (!isValid) {
            return;
        }

        // Form the WhatsApp message
        const message = `Name: ${name}%0aPhone: ${phone}%0aDate: ${date}%0aService: ${service}`;

        // WhatsApp number you want to send the message to
        const whatsappNumber = '918056121346';  // Use international format without '+' symbol

        // WhatsApp URL
        const whatsappLink = `https://wa.me/${whatsappNumber}?text=${message}`;

        // Redirect to WhatsApp
        window.open(whatsappLink, '_blank');
    }
</script>