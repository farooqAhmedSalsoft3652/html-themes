<?php include('header.php') ?>
<?php include('nav-login.php') ?>

<section class="social-media">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-profile mt-2">
                    <div class="profile_bg">
                        <img src="images/profile_bf.png">
                    </div>
                    <div class="profile_img mb-3">
                        <img src="images/profile_img.png">
                        <h6 class="mt-3">Mark Carson</h6>
                    </div>
                </div>
                <div class="profilemain">
                    <nav class="mb-4">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="timeline" data-toggle="tab" href="#nav-timeline" role="tab" aria-controls="nav-timeline" aria-selected="true">Timeline</a>
                            <a class="nav-link" id="about" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">about</a>
                            <a class="nav-link" id="friends" data-toggle="tab" href="#nav-friends" role="tab" aria-controls="nav-friends" aria-selected="false">friends</a>
                        </div>
                    </nav>    
                    
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active group-therapy" id="nav-timeline" role="tabpanel" aria-labelledby="timeline">
                            <div class="user-post mt-2">
                                <div class="post-details">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="images/profile-sm.png" alt="" class="img-fluid profile-sm">
                                            <div>
                                                <p class="my-0 p-lg bold">User Name <i class="fas fa-caret-right text-purple pl-2 pr-2"></i> Abc Group</p>
                                                <p class="gr-text mb-0">April 13 at 4:31am <img src="images/globe.png" alt="" class="img-fluid"></p>
                                            </div>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu custom-dropdown"> 
                                                <a class="dropdown-item" data-target=".editPostText" data-toggle="modal" href="#_">Edit Post</a>
                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".removePost">Remove Post</a> 
                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".reportPost">Report Post</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-md my-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                                    <a href="post-view.php"><img src="images/profile_bg.png" alt="" class="img-fluid w-100"></a>
                                    <hr>
                                    <div class="d-flex align-items-center">
                                        <button class="post-btn"><img src="images/like.png" alt="" class="img-fluid mr-2"> Like</button>
                                        <button class="post-btn"><img src="images/comment.png" alt="" class="img-fluid mr-2"> Comment</button>
                                        <button class="post-btn" data-target=".shareVideo" data-toggle="modal"><img src="images/share.png" alt="" class="img-fluid mr-2"> Share</button>
                                    </div>
                                </div>
                                <div class="post-comment-section">
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
                                            <button class="post-btn"><span class="m-grey-text">20 </span> Comments</button>
                                            <button class="post-btn mr-0" data-target=".noOfShares" data-toggle="modal"><span class="m-grey-text">00 </span> Shares</button>
                                        </div>
                                    </div>
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
                                        <div class="user-comment  w-100">
                                            <p class="p-md mb-0">Mark Anderson</p>
                                            <p class="p-sm mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
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
                            <div class="user-post mt-2">
                                <div class="post-details">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="images/profile-sm.png" alt="" class="img-fluid profile-sm">
                                            <div>
                                                <p class="my-0 p-lg bold">User Name <i class="fas fa-caret-right text-purple pl-2 pr-2"></i> Abc Group</p>
                                                <p class="gr-text mb-0">April 13 at 4:31am <img src="images/globe.png" alt="" class="img-fluid"></p>
                                            </div>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu custom-dropdown"> 
                                                <a class="dropdown-item" data-target=".editPostText" data-toggle="modal" href="#_">Edit Post</a>
                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".removePost">Remove Post</a> 
                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".reportPost">Report Post</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-md my-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                                    <a href="post-view.php"><img src="images/profile_video.jpg" alt="" class="img-fluid w-100"></a>
                                    <hr>
                                    <div class="d-flex align-items-center">
                                        <button class="post-btn"><img src="images/like.png" alt="" class="img-fluid mr-2"> Like</button>
                                        <button class="post-btn"><img src="images/comment.png" alt="" class="img-fluid mr-2"> Comment</button>
                                        <button class="post-btn" data-target=".shareVideo" data-toggle="modal"><img src="images/share.png" alt="" class="img-fluid mr-2"> Share</button>
                                    </div>
                                </div>
                                <div class="post-comment-section">
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
                                            <button class="post-btn"><span class="m-grey-text">20 </span> Comments</button>
                                            <button class="post-btn mr-0" data-target=".noOfShares" data-toggle="modal"><span class="m-grey-text">00 </span> Shares</button>
                                        </div>
                                    </div>
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
                                        <div class="user-comment  w-100">
                                            <p class="p-md mb-0">Mark Anderson</p>
                                            <p class="p-sm mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
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
                            <div class="user-post mt-2">
                                <div class="post-details">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="images/profile-sm.png" alt="" class="img-fluid profile-sm">
                                            <div>
                                                <p class="my-0 p-lg bold">User Name</p>
                                                <p class="gr-text mb-0">April 13 at 4:31am <img src="images/globe.png" alt="" class="img-fluid"></p>
                                            </div>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu custom-dropdown"> 
                                                <a class="dropdown-item" data-target=".editPostText" data-toggle="modal" href="#_">Edit Post</a>
                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".removePost">Remove Post</a>
                                                <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".reportPost">Report Post</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-md my-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                                    <div class="row">
                                        <div class="col-md-6 pr-lg-0">
                                            <a href="post-view.php"><img src="images/profile_img_1.png" alt="" class="img-fluid w-100 post-bg"></a>
                                        </div>
                                        <div class="col-md-6 d-flex d-md-block pl-lg-1">
                                            <a href="post-view.php"><img src="images/profile_img_2.png" alt="" class="img-fluid w-100 mt-1 mt-md-0 post-sm"></a>
                                            <div class="row ">
                                                <div class="col-md-6 pr-lg-0 pt-1">
                                                    <a href="post-view.php"><img src="images/profile_img_3.png" alt="" class="img-fluid w-100 mt-1 mt-md-0 post-sm"></a>
                                                </div>
                                                <div class="col-md-6 d-flex d-md-block pl-lg-1">
                                                    <div class="last-img">
                                                        <div class="overlay-img">
                                                            <span id="text">02+</span>
                                                        </div>
                                                        <img src="images/profile_img_4.png" alt="" class="img-fluid mt-1 w-100 post-sm">
                                                    </div>                                                    
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex align-items-center">
                                        <button class="post-btn"><img src="images/like.png" alt="" class="img-fluid mr-2"> Like</button>
                                        <button class="post-btn"><img src="images/comment.png" alt="" class="img-fluid mr-2"> Comment</button>
                                        <button class="post-btn" data-target=".shareStack" data-toggle="modal"><img src="images/share.png" alt="" class="img-fluid mr-2"> Share</button>
                                    </div>
                                </div>
                                <div class="post-comment-section">
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
                                            <button class="post-btn"><span class="m-grey-text">20 </span> Comments</button>
                                            <button class="post-btn mr-0" data-target=".noOfShares" data-toggle="modal"><span class="m-grey-text">00 </span> Shares</button>
                                        </div>
                                    </div>
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
                                        <div class="user-comment w-100">
                                            <p class="p-md mb-0">Mark Anderson</p>
                                            <p class="p-sm mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
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
                        <div class="tab-pane fade group-therapy" id="nav-about" role="tabpanel" aria-labelledby="about">
                            <div class="profile_about">
                                <div id="profile_about">
                                    <div class="profile_aboxm d-flex justify-content-center" >
                                        <div class="col-md-5 text-center">
                                            <div class="profile_abox">
                                                <label for="" class="pl-0 mb-0">Full Name</label>
                                                <p>Mark Carson</p>
                                            </div> 
                                            <div class="profile_abox">
                                                <label for="" class="pl-0 mb-0">Email Address</label>
                                                <p>abc@xyz.com</p>
                                            </div>  
                                            <div class="profile_abox mt-5">
                                                <a href="javascript:;" class="btn-purple mr-2 edit-profile">Edit Profile</a>
                                                <a href="javascript:;" class="btn-purple-border change-password px-4">Change Password</a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div id="profile_about2">
                                    <div class="profile_aboxm d-flex justify-content-center">
                                        <div class="col-md-5">
                                            <div class="profile_abox">
                                                <label for="">Full Name</label>
                                                <input type="text" name="" class="" placeholder="Mark Carson">
                                            </div> 
                                            <div class="profile_abox">
                                                <label for="">Email Address</label>
                                                <p class="fs-16 d-inline-block">abc@xyz.com</p>
                                            </div>  
                                            <div class="profile_abox mt-5">
                                                <a href="javascript:;" class="btn-purple mr-2">Save Changes</a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div id="profile_about3">
                                    <div class="profile_aboxm d-flex justify-content-center">
                                        <div class="col-md-5">
                                            <div class="profile_abox">
                                                <h4>Change Password</h4>
                                            </div>
                                            <div class="profile_abox">
                                                <label for="">Current Password*:</label>
                                                <input type="text" name="" class="" placeholder="Enter Current Password"><i class="fas fa-eye-slash"></i>
                                            </div> 
                                            <div class="profile_abox">
                                                <label for="">New Password*:</label>
                                                <input type="text" name="" class="" placeholder="Enter New Password"><i class="fas fa-eye-slash"></i>
                                            </div> 
                                            <div class="profile_abox">
                                                <label for="">Confirm Password*:</label>
                                                <input type="text" name="" class="" placeholder="Enter Confirmation Password"><i class="fas fa-eye-slash"></i>
                                            </div> 
                                            <div class="profile_abox mt-5">
                                                <a href="javascript:;" class="btn-purple mr-2">Save Changes</a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade group-therapy" id="nav-friends" role="tabpanel" aria-labelledby="friends">
                            <div class="profile_friend">
                                <div class="profile_fboxm">
                                    <div class="row justify-content-md-end">
                                        <div class="col-md-7 d-flex justify-content-end">
                                            <ul class="profile_fboxtop">
                                                <li>
                                                    <input type="text" name="" placeholder="Search...">
                                                    <i class="far fa-search"></i>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="btn-p">Friend Requests</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="btn-p">Sent Requests</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>   
                                        <div class="col-md-6">
                                            <div class="profile_fboxbott d-flex mt-3 align-items-center">
                                                <img src="images/fprofile_img.png" alt="" class="img-fluid profile-pic mr-2">
                                                <div class="user-comment  w-100">
                                                    <p class="p-md mb-0">Daniel Jacob</p>
                                                </div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown"> 
                                                        <a class="dropdown-item" href="#_" data-target=".unfriend-review" data-toggle="modal">Unfriend</a>
                                                    </div>
                                                </div>  
                                            </div>                                            
                                        </div>                                        
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





<!-- Popup Modal -->
<div class="modal fade editPostText" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <h6 class="gray-text bold">Edit Post</h6>
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
<!-- delete-review-modal start -->
<div class="modal fade unfriend-review " tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center"> <img src="images/exclamation.png" alt="" class="img-fluid">
                <p class="p-lg bold mb-1 mt-4">Are you sure you want to unfriend Daniel Jacob?</p>
                <div class="d-flex justify-content-center"> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a> </div>
            </div>
        </div>
    </div>
</div>
<!-- delete-review-modal end -->


<div class="pink-footer">
    <?php include('footer.php') ?>
</div>