<?php include('header.php') ?>
<?php include('nav-login.php') ?>

<section class="post-view">
    <div class="container">
        <div class="post-view-card">
            <div class="row">
                <div class="col-lg-7">
                    <div class="post-view-inner">
                        <div class="owl-carousel post-slider owl-theme">
                            <div class="item">
                                <img src="images/post-slider-img.png" alt="" class="img-fluid w-100">
                            </div>
                            <div class="item">
                                <img src="images/post-slider-img.png" alt="" class="img-fluid w-100">
                            </div>
                            <div class="item">
                                <img src="images/post-slider-img.png" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="post-view-comment">
                        <div class="d-flex align-items-center">
                            <img src="images/profile-sm.png" alt="" class="img-fluid profile-sm">
                            <div>
                                <h6 class="my-0 p-lg">Sammy Aiden</h6>
                                <p class="grey-text p-md mb-0">@Sammy96</p>
                            </div>
                        </div>
                        <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="position-relative">
                                <div class="no-likes">
                                    <button class="post-btn" data-target=".noOfLikes" data-toggle="modal"><img src="images/like-circle.png" alt="" class="img-fluid mr-1"> 5</button>
                                    <div class="likes-cont">
                                        <p class="mb-2">Daniel Jacobs</p>
                                        <p class="mb-2">Daniel Jacobs</p>
                                        <p class="mb-2">Daniel Jacobs</p>
                                        <p class="mb-2">Daniel Jacobs</p>
                                        <a class="mb-0">And 63 more....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="post-btn mr-3"><span class="m-grey-text">20 </span> Comments</button>
                                <button class="post-btn mr-0" data-toggle="modal" data-target=".noOfShares"><span class="m-grey-text">00 </span> Shares</button>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex mt-3 align-items-center">
                            <img src="images/profile-sm.png" alt="" class="img-fluid profile-pic mr-2">
                            <div class="position-relative w-100">
                                <textarea name="" class="post-comment pr-5" id="" cols="30" rows="1" placeholder="Write a comment…"></textarea>
                                <div class="comment-emojis">
                                    <button class="post-btn mr-2"><img src="images/comment-shape.png" alt="" class="img-fluid"></button>
                                    <button class="post-btn mr-0"><img src="images/emoji.png" alt="" class="img-fluid"></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <img src="images/profile-1.png" alt="" class="img-fluid profile-pic mr-2">
                            <div class="user-comment w-100 rounded-pill d-flex ml-2">
                                <div>
                                    <p class="p-md mb-0">Mark Anderson</p>
                                    <p class="p-sm mb-0">It is a long established fact that a reader will</p>
                                </div>
                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu custom-dropdown"> 
                                        <a class="dropdown-item" href="#_">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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