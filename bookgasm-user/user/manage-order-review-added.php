<?php include('header.php') ?>
<?php include('nav-login.php') ?>






<section class="my-learning order-details pink-bg therapy-session">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-4">Order Details</h3>
                <ul>
                    <li>
                        <div class="therapy-card">
                            <div class="d-flex justify-content-between top-content">
                                <div class="">
                                    <h5>Order #001</h5>
                                    <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                </div>
                                <div class="btn-group custom-dropdown ml-2 mb-1">
                                    <p>Total: <strong>$ 000</strong></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="therapy-card pt-4">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="pending" data-toggle="tab" href="#nav-pending" role="tab" aria-controls="nav-pending" aria-selected="false">Pending</a>
                                    <a class="nav-link active" id="in-process" data-toggle="tab" href="#nav-inprocess" role="tab" aria-controls="nav-inprocess" aria-selected="true">In-Process</a>
                                    <a class="nav-link" id="delivered" data-toggle="tab" href="#nav-delivered" role="tab" aria-controls="nav-delivered" aria-selected="false">Delivered</a>
                                </div>
                            </nav>    
                            
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade group-therapy" id="nav-pending" role="tabpanel" aria-labelledby="pending">
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text mt-0">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Cost: $ 00</p>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description text-right">
                                                        <a href="#" class="btn-yellow">Pending</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text mt-0">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Cost: $ 00</p>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description text-right">
                                                        <a href="#" class="btn-purple-light">In-Process</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>
                                <div class="tab-pane fade show active group-therapy" id="nav-inprocess" role="tabpanel" aria-labelledby="in-process">
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text mt-0">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Cost: $ 00</p>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Write A Review <i class="fa fa-ellipsis-v"></i> </button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#" data-target=".delete-review-modal" data-toggle="modal">Delete Review</a>
                                                            <a class="dropdown-item" href="#" data-target=".leave-group" data-toggle="modal">Report</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text mt-0">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Cost: $ 00</p>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description text-right">
                                                        <a href="#" class="btn-purple-light">In-Process</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>                        
                            
                        </div>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="ordetailsbox">
                                    <h5>Shipping Address: </h5>
                                    <ul>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>United States</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>Mark Carson</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>ABC Road</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>ABC City</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>ABC Region</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>00000</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>abc@xyz.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="ordetailsbox">
                                    <h5>Billing Address: </h5>
                                    <ul>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>United States</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>Mark Carson</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>ABC Road</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>ABC City</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>ABC Region</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>00000</p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-4">
                                                <p>abc@xyz.com</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>000-00-0000</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="ordetailsbox">
                            <h5>Total Summary</h5>
                            <ul>
                                <li class="row">
                                    <div class="col-md-8">
                                        <p>Sub-Total</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>$ 000</p>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-8">
                                        <p>Discount</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>$ 000</p>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-8">
                                        <p>Shipping Fees</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>$ 000</p>
                                    </div>
                                </li>
                                <li class="row summary-total">
                                    <div class="col-md-8">
                                        <p>Total</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>$ 000</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- delete-review-modal start -->
<div class="modal fade delete-review-modal " tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center"> <img src="images/exclamation.png" alt="" class="img-fluid">
                <p class="p-lg bold mb-1 mt-4">Are you sure you want to delete your review? </p>
                <div class="d-flex justify-content-center"> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a> </div>
            </div>
        </div>
    </div>
</div>
<!-- delete-review-modal end -->

<!-- rating-modal start -->
<div class="modal fade rating-modal rating-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal moratereview"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
        <form action="">
            <h3>Rate & Review</h3>
            <div class="d-flex mt-3">
                <label class="mb-0">Order Id:</label>
                <p class="mt-0">001</p>
            </div>
            <div class="d-flex">
                <label class="mb-0">Product Name:</label>
                <p class="mt-0">ABC Product</p>
            </div>
            <ul class="mt-3 mb-3">
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <div class="mt-2 mb-2">
                <h5 class="mb-0">Average, Could be better</h5>
                <p class="mt-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- rating-modal end -->
<!-- rating-reply-modal start -->
<div class="modal fade rating-reply-modal rating-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal moratereview"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
        <form action="">
            <h3>Rate & Review</h3>
            <div class="d-flex mt-3">
                <label class="mb-0">Order Id:</label>
                <p class="mt-0">001</p>
            </div>
            <div class="d-flex">
                <label class="mb-0">Product Name:</label>
                <p class="mt-0">ABC Product</p>
            </div>
            <ul class="mt-3 mb-3">
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <div class="mt-2 mb-2">
                <h5 class="mb-0">Average, Could be better</h5>
                <p class="mt-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
            </div>
            <div class="mt-4 mb-2">
                <h5 class="mb-0">Average, Could be better</h5>
                <p class="mt-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
            </div>
            <div class="text-right"><a href="#" class="text-purple">Reply</a></div>
            </form>
        </div>
    </div>
</div>
<!-- rating-reply-modal end -->
<!-- rating-reply-modal start -->
<div class="modal fade rating-reply-modal rating-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal moratereview"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
        <form action="">
            <h3>Rate & Review</h3>
            <div class="d-flex mt-3">
                <label class="mb-0">Order Id:</label>
                <p class="mt-0">001</p>
            </div>
            <div class="d-flex">
                <label class="mb-0">Product Name:</label>
                <p class="mt-0">ABC Product</p>
            </div>
            <ul class="mt-3 mb-3">
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <div class="mt-2 mb-2">
                <h5 class="mb-0">Average, Could be better</h5>
                <p class="mt-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
            </div>
            <div class="mt-4 mb-2">
                <h5 class="mb-0">Average, Could be better</h5>
                <p class="mt-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
            </div>
            <div>
                <textarea name="" id="" cols="30" class="site-textarea mt-3" placeholder="Enter reporting reason" rows="7"></textarea>
                <div class="text-right mt-3">
                    <button class="btn-default" data-dismiss="modal" aria-label="Close">Submit</button>
                </div>                
            </div>
            </form>
        </div>
    </div>
</div>
<!-- rating-reply-modal end -->




<div class="modal fade leave-group" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center"> <img src="images/exclamation.png" alt="" class="img-fluid">
                <p class="p-lg bold mb-1 mt-4">Are you sure you want to delete your review?</p>
                <div class="d-flex justify-content-center"> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a> <a href="#_" data-target=".reportReason" data-toggle="modal" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a> </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade reportReason" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
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
                        <button class="btn-default" data-target=".ratereview" data-toggle="modal">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade ratereview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal moratereview"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-left">
                <p class="p-md gray-text mb-0">Rate & Review</p>
                <hr class="my-3">
                <form action="#_">
                    <div class="d-flex">
                        <label>Order Id:</label>
                        <p>001</p>
                    </div>
                    <div class="d-flex">
                        <label>Product Name:</label>
                        <p>ABC Product</p>
                    </div>
                    <div>
                        <ul class="d-flex">
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li> 
                            <li><i class="far fa-star"></i></li> 
                            <li><i class="far fa-star"></i></li> 
                        </ul>
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


<div class="pink-footer">
    <?php include('footer.php') ?>
</div>