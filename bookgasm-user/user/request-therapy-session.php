<?php include('header.php') ?>
<?php include('nav-login.php') ?>
<!-- request-therapy-session start -->

<section class="req-therapy pink-bg pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="font-weight-lighter mb-4">Request Therapy Session</h4>
                <form action="">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="">Select Therapy Session*:</label>
                            <input type="text" class="form-control">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="">Date*:</label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="">Time*:</label>
                            <input type="time" name="" id="" class="form-control">
                        </div>
                        <div class="col-lg-12 col-12 form-group">
                            <label for="">Cost*:<span>$000</span></label>
                        </div>
                        <div class="col-lg-12 col-12 ">
                            <button type="button" class="default-btn" data-toggle="modal" data-target="#pdetails-popup">make payment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<div class="modal fade pdetails-popup" id="pdetails-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md payment-details" role="document">
        <div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <p class="p-md gray-text mb-0"> Payment Details</p>
                <hr class="my-3">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="form-group mb-0">
                            <p class="mb-0 gray-text">ABC Session</p>
                            <label for="" class="gray-text">Cost:<span class="pl-2">$000</span></label>
                            <div class="d-flex mt-2 align-items-center">
                                <input class="mr-2" type="radio" name="" id="mk-payment">
                                <label for="mk-payment" class="mb-0"><i class="fas fa-credit-card mr-2"></i> Add a debit or credit card</label>
                            </div>
                        </div>
                        <div class="row  mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="mb-0" placeholder="Card Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="mb-0" placeholder="Cardholder Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="mb-0" placeholder="Expiration Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="mb-0" placeholder="Security Code">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-12 text-center">
                        <button class="button-yellow new" id="mpayemnt">Make Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="modal fade mpayemnt-popup" id="mpayemnt" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md payment-details" role="document">
        <div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="form-group mb-0">
                            <i class="fas fa-check"></i>
                            <p class="text-center pt-4 pb-2">Your Have successfully booked 1 0n 1 session <br>with the admin.</p>
                            
                            <div class="col-12 text-center">
                                <button class="button-yellow new" data-dismiss="modal">Make Payment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="pink-footer"><?php include('footer.php') ?></div>