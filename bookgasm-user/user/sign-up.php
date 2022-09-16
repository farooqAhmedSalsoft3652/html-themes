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
                <div class="text-center">
                    <h6 class="text-uppercase mb-0">CREATE YOUR ACCOUNT</h6>
                    <div class="upload-profile mt-3">
                        <img src="images/profile.png" alt="" class="img-fluid">
                        <label for="uplaod-img" class="camera-btn"><i class="fas fa-camera"></i></label>
                        <div class="d-none">
                            <input type="file" name="" id="uplaod-img">
                        </div>
                    </div>
                </div>
                <form action="login.php">
                    <label for="" class="mt-2 ml-3 bold">Full Name *:</label>
                    <input type="text" name="" class="w-100" placeholder="Enter Full Name" id="">
                    <label for="" class="mt-3 ml-3 bold">Email Address *:</label>
                    <input type="email" name="" class="w-100" placeholder="Email Address" id="">
                    <label for="" class="mt-3 ml-3 bold">Sign Up As *:</label>
                    <select name="" id="" class="form-control w-100">
                        <option value="">Select</option>
                    </select>
                    <label for="" class="mt-3 ml-3 bold">Password: *</label>
                    <div class="form-field mb-0">
                        <input type="password" class="reg-input login-input pl-2 pr-5 login both-icon enter-input" placeholder="Enter Password" name="" id="">
                        <i class="fa enter-icon right-icon fa-eye-slash" aria-hidden="true"></i>
                    </div>
                    <label for="" class="mt-3 ml-3 bold">Confirm Password: *</label>
                    <div class="form-field mb-0">
                        <input type="password" class="reg-input login-input pl-2 pr-5 login both-icon confirm-input" placeholder="Confirm Password" name="" id="">
                        <i class="fa confirm-icon right-icon fa-eye-slash" aria-hidden="true"></i>
                    </div>
                    <button type="submit" class="w-100 mt-4 btn-default">Sign Up</button>
                </form>
                <div class="text-center">
                    <p class="grey-text mb-0 mt-4 bold">Don't Have An Account? <a href="login.php" class="pink-text text-uppercase">LOGIN</a></p>
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