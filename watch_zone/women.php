<?php 

include 'partials/header.php';

?>

  <!-- Luxury Watches -->

  <?php
$con = new mysqli("localhost", "root", "", "watch_zone");
// Check connection
if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
$query = "select * from products where category_id = '4'";
  $result = mysqli_query($con, $query);
?>

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">Luxury Watches</h1>
</div>
<div class="row row-cols-1 row-cols-md-4 g-2">
  <?php
    
    while ($row = mysqli_fetch_array($result)) { ?>
    <div class="col">
      <div class="card">
        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title']; ?></h5>
          <p class="card-text"><?php echo $row['description']; ?></p>
          <h5>Price: <?php echo $row['price']; ?> pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <?php } ?>
</div>
<!-- Smart Watches -->

<?php
$query = "select * from products where category_id = '5'";
  $result = mysqli_query($con, $query);
?>

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">Smart Watches</h1>
</div>
<div class="row row-cols-1 row-cols-md-4 g-2">
  <?php
    
    while ($row = mysqli_fetch_array($result)) { ?>
    <div class="col">
      <div class="card">
        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title']; ?></h5>
          <p class="card-text"><?php echo $row['description']; ?></p>
          <h5>Price: <?php echo $row['price']; ?> pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <?php } ?>
</div>

    <!-- Fashion Watches -->

    <?php
$query = "select * from products where category_id = '6'";
  $result = mysqli_query($con, $query);
?>

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">Fashion Watches</h1>
</div>
<div class="row row-cols-1 row-cols-md-4 g-2">
  <?php
    
    while ($row = mysqli_fetch_array($result)) { ?>
    <div class="col">
      <div class="card">
        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title']; ?></h5>
          <p class="card-text"><?php echo $row['description']; ?></p>
          <h5>Price: <?php echo $row['price']; ?> pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <?php } ?>
</div>

    <!-- Sport Watches -->
    <?php
$query = "select * from products where category_id = '7'";
  $result = mysqli_query($con, $query);
?>

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">Sports Watches</h1>
</div>
<div class="row row-cols-1 row-cols-md-4 g-2">
  <?php
    
    while ($row = mysqli_fetch_array($result)) { ?>
    <div class="col">
      <div class="card">
        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title']; ?></h5>
          <p class="card-text"><?php echo $row['description']; ?></p>
          <h5>Price: <?php echo $row['price']; ?> pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <?php } ?>
</div>





  <!-- Footer -->

  <?php 

include 'partials/footer.php';

?>