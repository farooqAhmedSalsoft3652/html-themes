<?php include('header.php') ?>
<div class="header-absolute">
    <?php include('nav.php') ?>
</div>

<section class="banner login-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center my-auto">
                <img src="images/login-banner-img.png" alt="" class="img-fluid">
                <h2 class="pink-text text-uppercase mt-3 lh-1">hello bookworms</h2>
                <p class="p-md lh-1 letter-space text-uppercase">Welcome to your favourite</p>
                <h2 class="yellow-text text-uppercase mt-0 lh-1">online bookstore</h2>
            </div>
            <div class="col-xl-5 col-lg-6 mx-auto mt-3 my-lg-auto">
                <h4 class="text-uppercase ml-3 mb-0">Forgot password</h4>
                <form action="forget-password-2.php">
                    <label for="" class="mt-4 ml-3 bold">Email Address:</label>
                    <input type="email" name="" class="w-100 mb-2" placeholder="Email Address" id="">
                    <button type="submit" class="w-100 mt-4 btn-default">Continue</button>
                </form>
                <div class="text-center mt-3">
                    <a href="login.php">Back To Login</a>
                </div>
            </div>
        </div>
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

<div class="pink-footer">
    <?php include('footer.php') ?>
</div>