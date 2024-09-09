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
    }

    .popheader {
        color: #4E6845;
        font-size: 36px;
        font-weight: bold;
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
        /* margin-top: 60px; */
        transform: rotate(-3.71deg);
        position: relative;
    }

    .modal.show .modal-dialog {
        margin-top: 60px;
        border: 1px solid white;
        border-radius: 5px;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="row">
                <div class="col-md-12 text-end ">
                    <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="col-md-4">
                    <img src="./image/popimg.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="popheader text-center mt-5">
                        Wait A Second !
                    </h2>
                    <p class="popcontent text-center">
                        New customers get <span class="popspl">50 %</span> discount on first booking
                    </p>
                    <form action="#" method="post">
                        <div class="row pe-2">

                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" placeholder="Phone number">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" onfocus="(this.type='date')"
                                    placeholder="Date">

                            </div>
                            <div class="col-md-6">
                                <input class="form-control pop-input" type="text" placeholder="Service">
                            </div>
                            <div class="col-md-12 text-center" style="margin-top: 35px;">
                                <a href="#" class="pop-link">Book now</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>