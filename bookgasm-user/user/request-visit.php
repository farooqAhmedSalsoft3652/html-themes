<?php include('header.php') ?>
<?php include('nav-login.php') ?>

<section class="inner-page cart-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="mt-3 mb-0">Request Visit</h4>
            </div>
        </div>
        <form action="#_">
            <div class="row">
                <div class="col-12 mt-3">
                    <label for="" class="ml-3">Select Visit Type*:</label>
                    <div class="position-relative table-search">
                        <input type="search" placeholder="Search" class="site-input w-100">
                        <i class="fas fa-search grey-text"></i>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <label for="" class="ml-3">Date*:</label>
                    <input type="date" name="" id="" class="site-input">
                </div>
                <div class="col-lg-6 mt-3">
                    <label for="" class="ml-3">Duration*:</label>
                    <select name="" id="" class="site-input">
                        <option value="">Select Duration</option>
                    </select>
                </div>
                <div class="col-12 mt-3">
                    <label for="" class="ml-3">Cost*: <span class="grey-text ml-1">$ 000</span></label>
                </div>
                <div class="col-12 mt-3">
                    <button class="btn-default px-5" data-target=".paymentDetails" data-toggle="modal">Make Payment</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="signup-newsletter signup-newsletter-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5 text-center text-lg-left pb-3 pb-sm-3 pb-lg-0">
                <h4 class="pink-text lh-1">Sign Up For Newsletters</h4>
                <h5 class="p-lg yellow-text lh-1">Sign Up For Newsletter Today</h5>
            </div>
            <div class="col-12 col-lg-6 col-xl-7 d-flex align-items-center">
                <div class="newsletter-form w-100">
                    <form action="" class="d-block d-sm-flex justify-content-center text-center text-lg-left">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                        <button type="sumit" class="btn-default">Subscribe!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade paymentDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Payment Details</h6>
                <hr>
                <p class="mb-0">ABC Session</p>
                <p class="mb-0">Cost: <span class="grey-text">$000</span></p>
                <div class="d-flex mt-2 align-items-center">
                    <input class="mr-2" type="radio" name="" id="mk-payment">
                    <label for="mk-payment" class="mb-0"><i class="fas fa-credit-card mr-2"></i> Add a debit or credit card</label>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <input type="text" placeholder="Cardholder Name" class="site-input w-100 border">
                    </div>
                    <div class="col-12 mt-2">
                        <input type="number" placeholder="Card Number" class="site-input w-100 border">
                    </div>
                    <div class="col-lg-6 mt-2">
                        <input type="date" class="site-input w-100 border" placeholder="Expiration Date">
                    </div>
                    <div class="col-lg-6 mt-2">
                        <input type="number" placeholder="Security Code" class="site-input w-100 border">
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button class="btn-default px-5" data-dismiss="modal" aria-label="Close">Make Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pink-footer">
    <?php include('footer.php') ?>
</div>