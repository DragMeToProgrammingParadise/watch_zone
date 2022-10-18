<?php 

include 'partials/header.php';

?>

    <!-- My Order card -->

    <?php
$con = new mysqli("localhost","root","","watch_zone");
// Check connection
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  ?>

<div class="container mt-2 mb-2 mb-3">
<div class="card-header">
            <h2 class="card-title text-center">My Orders</h2>
          </div>
          <?php $query = "select * from orders";
          $result=mysqli_query($con,$query);
          
          
         
          while($row = mysqli_fetch_array($result)){ 
          ?>
    <section class="h-100 h-custom " style="background-color: #eee;">
        
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #ff4949 !important;">
                        <div class="card-body p-5">

                            <p class="lead fw-bold mb-5" style="color: #ff4949;">Purchase Reciept</p>

                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p><?php echo $row['created_at']; ?></p>
                                </div>
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    <p><?php echo $row['id'] ?></p>
                                </div>
                            </div>

                            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        <p><?php echo $row['title'] ?></p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p><?php echo $row['price'] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        <p> Quantity </p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p><?php echo $row['quantity'] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        <p class="mb-0">Shipping</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p class="mb-0"><?php echo $row['delivery_charges'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-4">
                                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                    <p class="lead fw-bold mb-0" style="color: #ff4949;"><?php echo $row['amount'] ?></p>
                                </div>
                            </div>

                            <p class="lead fw-bold mb-4 pb-2" style="color: #ff4949;">Tracking Order</p>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="horizontal-timeline">

                                        <ul class="list-inline items d-flex justify-content-between">
                                            <li class="list-inline-item items-list">
                                                <p class="py-1 px-2 rounded text-white"
                                                    style="background-color: #ff4949;"><?php echo $row['status'] ?></p
                                                    class="py-1 px-2 rounded text-white"
                                                    style="background-color: #f37a27;">
                                            </li>
                                            
                                        </ul>

                                    </div>

                                </div>
                            </div>

                            <p class="mt-4 pt-2 mb-0">Want any help? <a href="contact.php"
                                    style="color: #ff4949;">Please contact
                                    us</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- <section class="h-100 h-custom" style="background-color: #eee;">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #ff4949 !important;">
                        <div class="card-body p-5">

                            <p class="lead fw-bold mb-5" style="color: #ff4949;">Purchase Reciept</p>

                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p>10 April 2021</p>
                                </div>
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    <p>012j1gvs356c</p>
                                </div>
                            </div>

                            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        <p>BEATS Solo 3 Wireless Headphones</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p>£299.99</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        <p class="mb-0">Shipping</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p class="mb-0">£33.00</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-4">
                                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                    <p class="lead fw-bold mb-0" style="color: #ff4949;">£262.99</p>
                                </div>
                            </div>

                            <p class="lead fw-bold mb-4 pb-2" style="color: #ff4949;">Tracking Order</p>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="horizontal-timeline">

                                        <ul class="list-inline items d-flex justify-content-between">
                                            <li class="list-inline-item items-list">
                                                <p class="py-1 px-2 rounded text-white"
                                                    style="background-color: #ff4949;">Ordered</p
                                                    class="py-1 px-2 rounded text-white"
                                                    style="background-color: #f37a27;">
                                            </li>
                                            <li class="list-inline-item items-list">
                                                <p class="py-1 px-2 rounded text-white"
                                                    style="background-color: #ff4949;">Shipped</p
                                                    class="py-1 px-2 rounded text-white"
                                                    style="background-color: #f37a27;">
                                            </li>
                                            <li class="list-inline-item items-list">
                                                <p class="py-1 px-2 rounded text-white"
                                                    style="background-color: #ff4949;">On the way
                                                </p>
                                            </li>
                                            <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                                <p style="margin-right: -8px;">Delivered</p>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                            </div>

                            <p class="mt-4 pt-2 mb-0">Want any help? <a href="contact.html"
                                    style="color: #ff4949;">Please contact
                                    us</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</div>

    <!-- Footer -->
    <?php 

include 'partials/footer.php';

?>