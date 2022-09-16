<?php include('header.php') ?>
<?php include('nav-login.php') ?>

<section class="social-media">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 px-lg-0 pb-4 pb-lg-0">
                <div class="social-left-card">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="grp-card-heading">Groups</h3>
                        </div>
                    </div>
                    <div class="row border-bottom-1">
                        <div class="col-12">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="group-search" placeholder="Search Groups">
                                    <button type="submit" class="button-yellow">Create New Group</button>
                                </div>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <p class="grey-text-500">Your Groups</p>
                                </div>
                                <div class="col-12">
                                    <div class="social-left-inner border-0 mt-3">
                                        <div class="media align-items-center">
                                            <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                            <div class="media-body">
                                                <p class="mb-0 lh-1">Group ABC</p>
                                                <p class="p-xs mb-0 lh-1 grey-text">Last active: 2 hrs ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="social-left-inner border-0 mt-3">
                                        <div class="media align-items-center">
                                            <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                            <div class="media-body">
                                                <p class="mb-0 lh-1">Group ABC</p>
                                                <p class="p-xs mb-0 lh-1 grey-text">Last active: 2 hrs ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="social-left-inner border-0 mt-3">
                                        <div class="media align-items-center">
                                            <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                            <div class="media-body">
                                                <p class="mb-0 lh-1">Group ABC</p>
                                                <p class="p-xs mb-0 lh-1 grey-text">Last active: 2 hrs ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-9 px-lg-1">
                <div class="group-header-card">
                    <img src="images/group-banner.png" class="img-fluid group-banner" alt="">
                    <div class="d-flex align-items-center justify-content-between flex-column flex-md-row px-2">
                        <div>
                            <h5 class="grp-d-name">ABC Group</h5>
                            <p class="grp-d-members">100K Members</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="images/grp-member.png" class="grp-mem" alt="">
                                <img src="images/grp-member.png" class="grp-mem" alt="">
                                <img src="images/grp-member.png" class="grp-mem" alt="">
                                <img src="images/grp-member.png" class="grp-mem" alt="">
                                <img src="images/grp-member-more.png" class="grp-mem" alt="">
                            </div>
                            <button class="button-yellow d-block min-w-100 ml-2" data-target="#invite-friends" data-toggle="modal">+ Invite</button>
                        </div>
                    </div>
                </div>
                <div class="group-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discussion</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Members</a>
                        </li>
                    </ul>

                </div>
                <div class="grp-tab-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="grp-about-card">
                                <h4 class="grp">About This Group</h4>
                                <p class="grp-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.
                                    <br><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.
                                </p>
                                <h4 class="grp">History</h4>
                                <p class="grp-p">Group Created on: Mm/Dd/Yy</p>
                            </div>
                            <div class="grp-about-card">
                                <h4 class="grp purple">Members : 100K</h4>
                                <hr>
                                <div class="row align-items-center">
                                    <div class="col-sm-6 text-center text-sm-left">
                                        <img src="images/profile.png" class="avatar-sm" alt="">
                                        <p class="grp-p my-3">Sam Aiden is the owner</p>

                                    </div>
                                    <div class="col-sm-6 text-sm-right text-center">
                                        <button class="button-yellow d-block min-w-100 ml-sm-auto mx-auto mx-sm-0">See All</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="new-post-tag">
                                <img src="images/camera-icon.png" alt="" class="img-fluid mr-2">
                                <p>Photo/Video</p>
                            </div>
                            <div class="new-post-details">
                                <textarea name="" id="" class="w-100 post-area" placeholder="What's on your mind?" rows="10"></textarea>
                                <img src="images/profile-sm.png" alt="" class="img-fluid profile-sm">
                                <div class="text-right mt-3">
                                    <button class="btn-default light-btn" data-target=".createPost" data-toggle="modal">Upload</button>
                                </div>
                            </div>
                            <div class="user-post mt-1">
                                <div class="post-details">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="images/profile-sm.png" alt="" class="img-fluid profile-sm">
                                            <div>
                                                Name</p>
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
                                    <a href="post-view.php"><img src="images/post-bg.png" alt="" class="img-fluid w-100"></a>
                                    <hr>
                                    <div class="d-flex align-items-center">
                                        <button class="post-btn"><img src="images/like.png" alt="" class="img-fluid mr-2"> Like</button>
                                        <button class="post-btn"><img src="images/comment.png" alt="" class="img-fluid mr-2"> Comment</button>
                                        <button class="post-btn" data-target=".sharePost" data-toggle="modal"><img src="images/share.png" alt="" class="img-fluid mr-2"> Share</button>
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
                                        <div class="user-comment">
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
                                    <a href="post-view.php"><img src="images/video.png" alt="" class="img-fluid w-100"></a>
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
                                        <div class="user-comment">
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
                                        <div class="col-md-8 pr-lg-0">
                                            <a href="post-view.php"><img src="images/post-bg.png" alt="" class="img-fluid w-100 post-bg"></a>
                                        </div>
                                        <div class="col-md-4 d-flex d-md-block pl-lg-1">
                                            <a href="post-view.php"><img src="images/post-sm-1.png" alt="" class="img-fluid w-100 mt-1 mt-md-0 post-sm"></a>
                                            <div class="last-img">
                                                <div class="overlay-img">
                                                    <span id="text">02+</span>
                                                </div>
                                                <img src="images/post-sm-2.png" alt="" class="img-fluid mt-1 w-100 post-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex align-items-center">
                                        <button class="post-btn"><img src="images/like.png" alt="" class="img-fluid mr-2"> Like</button>
                                        <button class="post-btn"><img src="images/comment.png" alt="" class="img-fluid mr-2"> Comment</button>
                                        <button class="post-btn" data-target=".editMultiple" data-toggle="modal"><img src="images/share.png" alt="" class="img-fluid mr-2"> Share</button>
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
                                        <div class="user-comment">
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
                                        <div class="col-md-8 pr-lg-0">
                                            <a href="post-view.php"><img src="images/post-bg.png" alt="" class="img-fluid w-100 post-bg"></a>
                                        </div>
                                        <div class="col-md-4 d-flex d-md-block pl-lg-1">
                                            <a href="post-view.php"><img src="images/post-sm-1.png" alt="" class="img-fluid w-100 mt-1 mt-md-0 post-sm"></a>
                                            <div class="last-img">
                                                <div class="overlay-img">
                                                    <span id="text">02+</span>
                                                </div>
                                                <img src="images/post-sm-2.png" alt="" class="img-fluid mt-1 w-100 post-sm">
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
                                        <div class="user-comment">
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
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="grp-about-card">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="grp-p2">Members: 1000K</p>
                                    </div>
                                    <div class="col-12">
                                        <p class="yellow-p-grp"><i class="fas fa-info-circle mr-2"></i>Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="group-search" placeholder="Search Groups">
                                            </div>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="social-left-inner border-0 mt-3">
                                            <div class="media align-items-center">
                                                <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                                <div class="media-body">
                                                    <p class="mb-0 lh-1">Sammy Aiden</p>
                                                    <p class="p-xs mb-0 lh-1 grey-text">Joined 00 minutes ago</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                                    <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu custom-dropdown">
                                                        <a class="dropdown-item" href="#_" data-toggle="modal" data-target=".leave-group">Leave Group</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="social-left-inner border-0 mt-3">
                                            <div>
                                                <p class="purple m-0 fw-bold">Owner</p>
                                                <div class="media align-items-center">
                                                    <div>
                                                        <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mb-0 lh-1">Sammy Aiden</p>
                                                        <p class="p-xs mb-0 lh-1 grey-text">Joined 00 minutes ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="button-purple">+ Add Friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="social-left-inner border-0 mt-3 bg-light-yellow">
                                            <div>
                                                <div class="media align-items-center">
                                                    <div>
                                                        <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mb-0 lh-1">Sammy Aiden</p>
                                                        <p class="p-xs mb-0 lh-1 grey-text">Joined 00 minutes ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="button-yellow bkgsm-button">+ Add Friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="social-left-inner border-0 mt-3 bg-light-yellow">
                                            <div>
                                                <div class="media align-items-center">
                                                    <div>
                                                        <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mb-0 lh-1">Sammy Aiden</p>
                                                        <p class="p-xs mb-0 lh-1 grey-text">Joined 00 minutes ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="button-yellow bkgsm-button">+ Add Friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="social-left-inner border-0 mt-3 bg-light-yellow">
                                            <div>
                                                <div class="media align-items-center">
                                                    <div>
                                                        <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mb-0 lh-1">Sammy Aiden</p>
                                                        <p class="p-xs mb-0 lh-1 grey-text">Joined 00 minutes ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="button-yellow bkgsm-button">+ Add Friend</button>
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

<div class="modal fade noOfLikes" id="invite-friends" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <p class="p-md gray-text mb-0"> Invite Friends To This Group</p>
                <hr class="my-3">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group mb-0">
                            <input type="text" class="group-search mb-0" placeholder="Search For Friends">
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <div class="social-left-inner border-0 mt-3 inv-frnds">
                                <div class="media align-items-center">
                                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
                                    <div class="media-body">
                                        <p class="mb-0 lh-1">Mark Carson</p>
                                    </div>
                                </div>
                                <div>
                                    <label class="container-checkboxx">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark-checkboxx"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="social-left-inner border-0 mt-3 inv-frnds">
                                <div class="media align-items-center">
                                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
                                    <div class="media-body">
                                        <p class="mb-0 lh-1">Mark Carson</p>
                                    </div>
                                </div>
                                <div>
                                    <label class="container-checkboxx">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark-checkboxx"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="social-left-inner border-0 mt-3 inv-frnds">
                                <div class="media align-items-center">
                                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
                                    <div class="media-body">
                                        <p class="mb-0 lh-1">Mark Carson</p>
                                    </div>
                                </div>
                                <div>
                                    <label class="container-checkboxx">
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark-checkboxx"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-dark-gray">
                    <div class="row">
                        <div class="col-12 bg-darker-gray p-1">
                            <p class="m-0 text-gr">1 Friend Selected</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="social-left-inner border-0 mt-3 inv-holder">
                                <div class="media align-items-center">
                                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
                                    <div class="media-body">
                                        <p class="mb-0 lh-1">Mark Carson</p>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="remove-inv"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="social-left-inner border-0 mt-3 inv-holder">
                                <div class="media align-items-center">
                                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
                                    <div class="media-body">
                                        <p class="mb-0 lh-1">Mark Carson</p>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="remove-inv"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="social-left-inner border-0 mt-3 inv-holder">
                                <div class="media align-items-center">
                                    <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
                                    <div class="media-body">
                                        <p class="mb-0 lh-1">Mark Carson</p>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="remove-inv"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-right mt-4">
                    <button class="button-yellow outline" data-dismiss="modal">Cancel</button>
                    <button class="button-yellow new" data-dismiss="modal">Send Invites</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade leave-group" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <img src="images/exclamation.png" alt="" class="img-fluid">
                <p class="p-lg bold mb-1 mt-4">Are you sure you want to leave this group?</p>
                <div class="d-flex justify-content-center">
                    <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a>
                    <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pink-footer">
    <?php include('footer.php') ?>
</div>