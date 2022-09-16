<?php include('header.php') ?>
<?php include('nav-login.php') ?>

<section class="inner-page cart-section pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="mt-3 mb-0">Book Admin</h4>
            </div>
            <div class="col-lg-6">
                <div class="row align-items-center">
                    <div class="col-sm-2 mt-3">
                        <label for="" class="my-0">Sort By</label>
                    </div>
                    <div class="col-sm-5 mt-3">
                        <input type="date" name="" id="" class="site-input w-100">
                    </div>
                    <div class="col-sm-5 mt-3">
                        <input type="date" name="" id="" class="site-input w-100">
                    </div>
                </div>
            </div>
            <div class="offset-xl-2 mt-3 offset-lg-1 col-xl-4 col-lg-5 text-right">
                <a href="request-visit.php" class="btn-default">Request View</a>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-3">
                <div class="row align-items-center">
                    <div class="col-8 mt-3">
                        <label for="" class="my-0">Items Per Page</label>
                    </div>
                    <div class="col-4 mt-3">
                        <select name="" id="" class="site-input px-2 rounded">
                            <option value="">10</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 mt-3">
                <div class="position-relative table-search">
                    <input type="search" placeholder="Search" class="site-input w-100">
                    <i class="fas fa-search grey-text"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 px-0">
                <div class="shopping-cart">
                    <div class="grey-border">
                        <div class="table-responsive data-table px-3">
                            <table class="table shopping-cart-wrap m-0">
                                <thead class="border-0">
                                    <tr>
                                        <th scope="col">SR.NO.</th>
                                        <th scope="col" class="">Booked For</th>
                                        <th scope="col" >Date</th>
                                        <th scope="col" class="">Starting Time</th>
                                        <th scope="col" class="">Ending Time</th>
                                        <th scope="col" class="">Status</th>
                                        <th scope="col" class="">aCTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>School</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>00:00 PM</td>
                                        <td>-</td>
                                        <td class="yellow-text">Pending</td>
                                        <td><a href="#_"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>School</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>00:00 PM</td>
                                        <td>00:00 PM</td>
                                        <td class="blue-text">In-Process</td>
                                        <td><a href="#_"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>School</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>00:00 PM</td>
                                        <td>-</td>
                                        <td class="gren-text">Completed</td>
                                        <td><a href="#_"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>School</td>
                                        <td>mm/dd/yyyy</td>
                                        <td>00:00 PM</td>
                                        <td>00:00 PM</td>
                                        <td class="reed-text">Rejected</td>
                                        <td><a href="#_"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-md-flex align-items-center justify-content-between">
                            <p class="mb-0 mt-3">Showing 1 to 20 of 52 entries </p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0 mt-3">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
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

<div class="pink-footer">
    <?php include('footer.php') ?>
</div>