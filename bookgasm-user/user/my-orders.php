<?php include('header.php') ?>
<?php include('nav-login.php') ?>






<section class="my-learning my-orders pink-bg therapy-session">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>My Orders</h3>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="all" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">All</a>
                        <a class="nav-link" id="pending" data-toggle="tab" href="#nav-pending" role="tab" aria-controls="nav-pending" aria-selected="false">Pending</a>
                        <a class="nav-link" id="in-process" data-toggle="tab" href="#nav-inprocess" role="tab" aria-controls="nav-inprocess" aria-selected="false">In-Process</a>
                        <a class="nav-link" id="delivered" data-toggle="tab" href="#nav-delivered" role="tab" aria-controls="nav-delivered" aria-selected="false">Delivered</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active group-therapy" id="nav-all" role="tabpanel" aria-labelledby="all">
                        <select class="form-control ml-auto mb-4">
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                        </select>
                        <ul>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-green">Delivered</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-yellow">Pending</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-purple-light">In-Process</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-green">Delivered</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade therapy-with-admin" id="nav-pending" role="tabpanel" aria-labelledby="pending">
                        <select class="form-control ml-auto mb-4">
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                        </select>
                        <ul>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-yellow">Pending</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-yellow">Pending</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-yellow">Pending</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-yellow">Pending</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade therapy-with-admin" id="nav-inprocess" role="tabpanel" aria-labelledby="in-process">
                        <select class="form-control ml-auto mb-4">
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                        </select>
                        <ul>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-purple-light">In-Process</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-purple-light">In-Process</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-purple-light">In-Process</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-purple-light">In-Process</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade therapy-with-admin" id="nav-delivered" role="tabpanel" aria-labelledby="delivered">
                        <select class="form-control ml-auto mb-4">
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                            <option>Last 5 Orders</option>
                        </select>
                        <ul>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-green">Delivered</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-green">Delivered</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-green">Delivered</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="therapy-card">
                                    <div class="d-flex justify-content-between top-content">
                                        <div class="">
                                            <h5>Order #001</h5>
                                            <p class="mt-0">Placed on: mm/dd/yy 00:00:00</p>
                                        </div>
                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                            <a href="therapy-logs.php" class="pur">Manage</a>
                                        </div>
                                    </div>
                                    <table class="table shopping-cart-wrap m-0">
                                        <tbody>
                                            <tr>
                                                <td class="v-align-middle">
                                                    <div class="product-description d-flex align-items-center">
                                                        <img src="images/product-thumbnail.png" class="img-fluid" alt="">
                                                        <div class="ml-5">
                                                            <p class="mb-0 p-md bold">After The End</p>
                                                            <p class="mb-0 p-xs grey-text">By: Clare Mackintosh </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Qty: 01 </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-description">
                                                        <a href="#" class="btn-green">Delivered</a>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="product-description">
                                                        <p class="mb-0">Delivered On: Mm/Dd/Yy</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pink-footer">
    <?php include('footer.php') ?>
</div>