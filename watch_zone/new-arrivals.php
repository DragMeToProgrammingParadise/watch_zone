<?php 

include 'partials/header.php';

?>

  <!-- Product Cards -->
  <?php
$con = new mysqli("localhost", "root", "", "watch_zone");
// Check connection
if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
$query = "select * from products where type = '1'";
  $result = mysqli_query($con, $query);
?>

  <div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">New Arrivals</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-4 g-2">
  <?php
    
    while ($row = mysqli_fetch_array($result)) { ?>
    <div class="col">
      <div class="card">
        <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title'] ?></h5>
          <p class="card-text"><?php echo $row['description'] ?></p>
          <h5>Price: <?php echo $row['price'] ?> pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.php">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.php">Add to Cart</a>
        </div>
      </div>
    </div>
    <?php } ?>
    <!-- <div class="col">
      <div class="card">
        <img src="http://source.unsplash.com/300x300/?watch,men,android" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Smart Watch</h5>
          <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
          <h5>Price: 30,000 pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="http://source.unsplash.com/300x300/?apple,watch,men" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Smart Watch</h5>
          <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
          <h5>Price: 30,000 pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>

      </div>

    </div>
    <div class="col">
      <div class="card">
        <img src="http://source.unsplash.com/300x300/?watch,men,professional" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Smart Watch</h5>
          <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
          <h5>Price: 30,000 pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="http://source.unsplash.com/300x300/?watch,men,iphone" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Smart Watch</h5>
          <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
          <h5>Price: 30,000 pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="http://source.unsplash.com/300x300/?watch,men,android" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Smart Watch</h5>
          <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
          <h5>Price: 30,000 pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="http://source.unsplash.com/300x300/?watch,men,sports" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Smart Watch</h5>
          <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
          <h5>Price: 30,000 pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="http://source.unsplash.com/300x300/?watch,men" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Smart Watch</h5>
          <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
          <h5>Price: 30,000 pkr </h5>

        </div>
        <div class=" text-center mb-2">
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
          <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="http://source.unsplash.com/300x300/?smart,watch,men" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Apple Smart Watch</h5>
        <p class="card-text">Classy apple smart watch that is made for men with glossy outlook.</p>
        <h5>Price: 30,000 pkr </h5>

      </div>

      <div class=" text-center mb-2">
        <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
        <a class="btn btn-outline-danger mx-3" href="add-to-cart.html">Add to Cart</a>
      </div>

    </div> -->
  </div>



  <!-- Footer -->

  <?php 

include 'partials/footer.php';

?>