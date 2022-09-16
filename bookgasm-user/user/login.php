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
                <h2 class="text-uppercase mb-0">Login</h2>
                <p class="mt-0">Please enter your login credentials in order to proceed.</p>
                <form action="index-login.php">
                    <label for="" class="mt-2 ml-3 bold">Email Address:</label>
                    <input type="email" name="" class="w-100" placeholder="Email Address" id="">
                    <label for="" class="mt-3 ml-3 bold">Password:</label>
                    <div class="form-field mb-0">
                        <input type="password" class="reg-input login-input pl-2 pr-5 login both-icon enter-input" placeholder="Enter Password" name="" id="">
                        <i class="fa enter-icon right-icon fa-eye-slash" aria-hidden="true"></i>
                    </div>
                    <div class="text-right">
                        <a href="forget-password.php" class="yellow-text">Forget Password</a>
                    </div>
                    <button type="submit" class="w-100 mt-4 btn-default">Sign In</button>
                </form>
                <div class="text-center">
                    <p class="grey-text mb-0 mt-4">Don't Have An Account?</p>
                    <a href="sign-up.php" class="p-lg">Create One</a>
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