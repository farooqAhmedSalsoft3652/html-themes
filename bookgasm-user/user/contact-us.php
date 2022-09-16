<?php include('header.php') ?>
<?php include('nav-login.php') ?>

<section class="social-media">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center my-auto">
                <img src="images/login-banner-img.png" alt="" class="img-fluid">
                <h2 class="pink-text text-uppercase mt-3 lh-1">hello bookworms</h2>
                <p class="p-md lh-1 letter-space text-uppercase">Welcome to your favourite</p>
                <h2 class="yellow-text text-uppercase mt-0 lh-1">online bookstore</h2>
            </div>
            <div class="col-xl-5 col-lg-6 mx-auto mt-3 my-lg-auto">
                <h3 class="text-uppercase text-center mb-0">Contact Us</h3>
                <form action="index-login.php">
                    <label for="" class="mt-3 ml-3 bold">Full Name*:</label>
                    <input type="text" name="" class="w-100 border-0" placeholder="Enter Full Name" id="">
                    <label for="" class="mt-3 ml-3 bold">Email Address*:</label>
                    <input type="email" name="" class="w-100 border-0" placeholder="Enter Email Address" id="">
                    <label for="" class="mt-3 ml-3 bold">Subject*:</label>
                    <input type="text" name="" class="w-100 border-0" placeholder="Enter Subject" id="">
                    <label for="" class="mt-3 ml-3 bold">Description*:</label>
                    <textarea name="" id="" cols="30" rows="10" class="border-0 site-textarea" placeholder="Enter Description"></textarea>
                    <button type="submit" class="w-100 mt-5 btn-default">Submit</button>
                </form>
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

<div class="modal fade sharePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="grey-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-0 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 lh-1 grey-text">@Sammy96</p>
                    </div>
                </div>
                <p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                <div class="position-relative mt-2">
                    <img src="images/share-post.png" alt="" class="img-fluid w-100">
                    <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                </div>
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade shareVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="grey-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-0 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 lh-1 grey-text">@Sammy96</p>
                    </div>
                </div>
                <p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                <div class="position-relative mt-2">
                    <img src="images/video.png" alt="" class="img-fluid w-100">
                    <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                </div>
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade sharePostMultiple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
                    </div>
                </div>
                <p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <div class="position-relative mr-1 mt-2">
                            <img src="images/multiple-post-1.png" alt="" class="img-fluid multiple-post w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 pl-0">
                        <div class="position-relative mt-2">
                            <img src="images/multiple-post-2.png" alt="" class="img-fluid multiple-post w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                </div>    
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade shareMultiple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
                    </div>
                </div>
                <p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <div class="position-relative mr-1 mt-2">
                            <img src="images/multiple-post-1.png" alt="" class="img-fluid multiple-bg w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 pl-0">
                        <div class="position-relative mt-2">
                            <img src="images/multiple-bg.png" alt="" class="img-fluid multiple-bg w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="position-relative mr-1 mt-2">
                            <img src="images/multiple-1.png" alt="" class="img-fluid multiple-sm w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-md-4 px-0">
                        <div class="position-relative mr-1 mt-2">
                            <img src="images/multiple-2.png" alt="" class="img-fluid multiple-sm w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-md-4 pl-0">
                        <div class="position-relative mr-1 mt-2">
                            <img src="images/multiple-3.png" alt="" class="img-fluid multiple-sm w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                </div>    
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade shareStack" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
                    </div>
                </div>
                <p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative mr-1 mt-2">
                            <img src="images/stack-1.png" alt="" class="img-fluid stack-bg w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="position-relative mt-2">
                            <img src="images/stack-2.png" alt="" class="img-fluid stack-bg w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="position-relative mr-1 mt-2">
                            <img src="images/stack-1.png" alt="" class="img-fluid stack-bg w-100">
                            <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </div>
                </div>    
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade editMultiple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
                    </div>
                </div>
                <p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                <div class="position-relative">
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="multiple-overlay mr-1 mt-1">
                                <img src="images/multiple-post-1.png" alt="" class="img-fluid multiple-bg w-100">
                                <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="multiple-overlay mt-1">
                                <img src="images/multiple-bg.png" alt="" class="img-fluid multiple-bg w-100">
                                <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                            </div>
                        </div>
                        <div class="col-md-4 pr-0">
                            <div class="multiple-overlay mr-1 mt-1">
                                <img src="images/multiple-1.png" alt="" class="img-fluid multiple-sm w-100">
                                <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="multiple-overlay mr-1 mt-1">
                                <img src="images/multiple-2.png" alt="" class="img-fluid multiple-sm w-100">
                                <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="multiple-overlay mr-1 mt-1">
                                <img src="images/multiple-3.png" alt="" class="img-fluid multiple-sm w-100">
                                <button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="grey-tag-edit border-0 p-0">Edit All</button>
                </div>
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade createPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
                    </div>
                </div>
                <textarea name="" class="border-0" id="" placeholder="What's on your mind, Sammy?" cols="30" rows="10"></textarea>
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade createPostText" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
                    </div>
                </div>
                <textarea name="" class="border-0" id="" cols="30" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</textarea>
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade editPostText" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Create Post</h6>
                <hr>
                <div class="media align-items-center">
                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Sammy Aiden</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
                    </div>
                </div>
                <textarea name="" class="border-0" id="" cols="30" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</textarea>
                <hr>
                <div class="d-sm-flex align-items-center mt-3 justify-content-between">
                    <div class="d-sm-flex align-items-center">
                        <p class="grey-text mb-0">Add To Your Post</p>
                        <div class="grey-pill ml-sm-3 mt-sm-0 mt-3">
                            <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
                            <a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
                        </div>
                    </div>
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade postAudience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold"><i class="fas fa-angle-left" data-target=".createPost" data-toggle="modal" data-dismiss="modal" aria-label="Close"></i> Post Audience</h6>
                <hr>
                <div class="media mb-3 align-items-center">
                    <img src="images/globe-circle.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Public</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text">Anyone on Bookgasm</p>
                    </div>
                </div>
                <div class="media mb-3 align-items-center">
                    <img src="images/users-circle.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Friends</p>
                        <p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text">Your friends on Bookgasm</p>
                    </div>
                </div>
                <div class="media align-items-center">
                    <img src="images/lock.png" alt="" class="img-fluid mr-2">
                    <div class="media-body">
                        <p class="mb-1 lh-1">Only Me</p>
                    </div>
                </div>
                <hr>
                <div class="mt-3 text-right">
                    <button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade removePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <img src="images/exclamation.png" alt="" class="img-fluid">
                <p class="p-lg bold mb-1 mt-4">Are you sure you want to remove this post?</p>
                <div class="d-flex justify-content-center">
                    <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a>
                    <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade reportPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <img src="images/exclamation.png" alt="" class="img-fluid">
                <p class="p-lg bold mb-1 mt-4">Are you sure you want to report this post?</p>
                <div class="d-flex justify-content-center">
                    <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a>
                    <a href="#_" data-dismiss="modal" aria-label="Close" data-target=".reportReason" data-toggle="modal" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade reportReason" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <p class="p-md gray-text mb-0">Reason For Reporting</p>
                <hr class="my-3">
                <form action="#_">
                    <div>
                        <input type="radio" name="" id="r1">
                        <label for="r1" class="ml-2">Reason 1</label>
                    </div>
                    <div>
                        <input type="radio" name="" id="r2">
                        <label for="r2" class="ml-2">Reason 2</label>
                    </div>
                    <div>
                        <input type="radio" name="" id="r3">
                        <label for="r3" class="ml-2">Reason 3</label>
                    </div>
                    <div>
                        <input type="radio" name="" id="r4">
                        <label for="r4" class="ml-2">Reason 4</label>
                    </div>
                    <div>
                        <input type="radio" name="" id="r5">
                        <label for="r5" class="ml-2">Reason 5</label>
                    </div>
                    <textarea name="" id="" cols="30" class="site-textarea mt-3" class="p-3" placeholder="Enter reporting reason" rows="7"></textarea>
                    <div class="text-right mt-3">
                        <button class="btn-default" data-dismiss="modal" aria-label="Close">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade noOfLikes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <p class="p-md gray-text mb-0"><i class="far fa-thumbs-up"></i> Likes</p>
                <hr class="my-3">
                <div class="media mb-3 align-items-center">
                    <div class="position-relative mr-3">
                        <img src="images/user-sm.png" alt="" class="img-fluid">
                        <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                    </div>
                    <div class="media-body">
                        <p class="mb-0">Mark Carson</p>
                    </div>
                </div>
                <div class="media mb-3 align-items-center">
                    <div class="position-relative mr-3">
                        <img src="images/user-sm.png" alt="" class="img-fluid">
                        <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                    </div>
                    <div class="media-body">
                        <p class="mb-0">Mark Carson</p>
                    </div>
                </div>
                <div class="media mb-3 align-items-center">
                    <div class="position-relative mr-3">
                        <img src="images/user-sm.png" alt="" class="img-fluid">
                        <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                    </div>
                    <div class="media-body">
                        <p class="mb-0">Mark Carson</p>
                    </div>
                </div>
                <div class="media mb-3 align-items-center">
                    <div class="position-relative mr-3">
                        <img src="images/user-sm.png" alt="" class="img-fluid">
                        <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                    </div>
                    <div class="media-body">
                        <p class="mb-0">Mark Carson</p>
                    </div>
                </div>
                <div class="media mb-3 align-items-center">
                    <div class="position-relative mr-3">
                        <img src="images/user-sm.png" alt="" class="img-fluid">
                        <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                    </div>
                    <div class="media-body">
                        <p class="mb-0">Mark Carson</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade noOfShares" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <p class="p-md gray-text mb-0">Peopes Who Shared This</p>
                <hr class="my-3">
                <div class="d-flex justify-content-between mb-3 align-items-center">
                    <div class="media align-items-center">
                        <div class="position-relative mr-3">
                            <img src="images/user-sm.png" alt="" class="img-fluid">
                            <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                        </div>
                        <div class="media-body">
                            <p class="mb-0">Mark Carson</p>
                        </div>
                    </div>
                    <p class="p-xs mb-0 grey-text">02 sec ago</p>
                </div>
                <div class="d-flex justify-content-between mb-3 align-items-center">
                    <div class="media align-items-center">
                        <div class="position-relative mr-3">
                            <img src="images/user-sm.png" alt="" class="img-fluid">
                            <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                        </div>
                        <div class="media-body">
                            <p class="mb-0">Mark Carson</p>
                        </div>
                    </div>
                    <p class="p-xs mb-0 grey-text">02 sec ago</p>
                </div>
                <div class="d-flex justify-content-between mb-3 align-items-center">
                    <div class="media align-items-center">
                        <div class="position-relative mr-3">
                            <img src="images/user-sm.png" alt="" class="img-fluid">
                            <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                        </div>
                        <div class="media-body">
                            <p class="mb-0">Mark Carson</p>
                        </div>
                    </div>
                    <p class="p-xs mb-0 grey-text">02 sec ago</p>
                </div>
                <div class="d-flex justify-content-between mb-3 align-items-center">
                    <div class="media align-items-center">
                        <div class="position-relative mr-3">
                            <img src="images/user-sm.png" alt="" class="img-fluid">
                            <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                        </div>
                        <div class="media-body">
                            <p class="mb-0">Mark Carson</p>
                        </div>
                    </div>
                    <p class="p-xs mb-0 grey-text">02 sec ago</p>
                </div>
                <div class="d-flex justify-content-between mb-3 align-items-center">
                    <div class="media align-items-center">
                        <div class="position-relative mr-3">
                            <img src="images/user-sm.png" alt="" class="img-fluid">
                            <img src="images/like-sm.png" alt="" class="img-fluid like-sm">
                        </div>
                        <div class="media-body">
                            <p class="mb-0">Mark Carson</p>
                        </div>
                    </div>
                    <p class="p-xs mb-0 grey-text">02 sec ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pink-footer">
    <?php include('footer.php') ?>
</div>