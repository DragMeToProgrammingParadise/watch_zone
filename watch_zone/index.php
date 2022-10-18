<?php

include 'partials/header.php';

?>
<!-- Carousel -->

<?php
$con = new mysqli("localhost", "root", "", "watch_zone");
// Check connection
if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
$query = "select * from sliders where type = '1'";
  $result = mysqli_query($con, $query);
?>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
 



  <!-- // while ($row = mysqli_fetch_array($result)) {
  // ?> -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
   
    <div class="carousel-inner">
    <?php
    $slider = 0;
    while ($row = mysqli_fetch_array($result)) {
  ?>
      <div class="carousel-item <?php if($slider==0){echo "active";}?>" data-bs-interval="10000">
        <img src="<?php echo $row['image']; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $row['title']; ?></h5>
          <p><?php echo $row['description']; ?></p>
          <a class="btn btn-outline-danger" href="<?php echo $row['link']; ?>">Order Now</a>
          <?php $slider++; ?>
        </div>
      </div>
      <?php } ?>
      <!-- <div class="carousel-item" data-bs-interval="2000">
        <img src="http://source.unsplash.com/900x300/?apple,watch,sports" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="http://source.unsplash.com/900x300/?apple,watch,women" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
          <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
        </div>
      </div> -->
    </div> 
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- New Arrivals -->
<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">New Arrivals</h1>
  </div>
<?php
$query = "select * from sliders where type = '2'";
  $result = mysqli_query($con, $query);
  ?>

<div class="d-md-flex flex-md-equal w-100 my-md-0 ps-md-0 d-flex justify-content-center justify-content-around">
<?php
    $slider = 0;
    while ($row = mysqli_fetch_array($result)) {
  ?>
<div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3 mt-2">
      <h2 class="display-5"><?php echo $row['title'] ?></h2>
      <p class="lead"><?php echo $row['description'] ?></p>
      <a class="btn btn-outline-danger" href="<?php echo $row['link'] ?>">Order Now</a>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="<?php echo $row['image'] ?>" alt="">
    </div>

  </div>
  <?php } ?>
  <!-- <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3 mt-2">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
      <a class="btn btn-outline-danger" href="order-now.html">Order Now</a>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="http://source.unsplash.com/320x370/?watch,Men" alt="">
    </div>
  </div> -->
  
</div>
<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
  <a class="btn btn-outline-dark" href="new-arrivals.php">See More</a>
</div>

<!-- Men Watches -->

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">Men Watches</h1>
</div>

<div class="row row-cols-1 row-cols-md-4 g-2 mt-1 mb-2">
  <div class="col">
    <div class="card">
      <img src="http://source.unsplash.com/300x300/?watch,men,apple" class="card-img-top" alt="...">
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

  </div>

  <div class="col">
    <div class="card">
      <img src="http://source.unsplash.com/300x300/?watch,women,fashion" class="card-img-top" alt="...">
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
      <img src="http://source.unsplash.com/300x300/?watch,women,android" class="card-img-top" alt="...">
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
      <img src="http://source.unsplash.com/300x300/?apple,watch,women" class="card-img-top" alt="...">
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
  
</div>

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
  <a class="btn btn-outline-dark" href="men.php">See More</a>
</div>

<!-- Women Watches -->

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
    <h1 class="font-monospace">Women Watches</h1>
</div>

<div class="row row-cols-1 row-cols-md-4 g-2 mt-1 mb-2">
  <div class="col">
    <div class="card">
      <img src="http://source.unsplash.com/300x300/?watch,men,apple" class="card-img-top" alt="...">
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

  </div>

  <div class="col">
    <div class="card">
      <img src="http://source.unsplash.com/300x300/?watch,women,fashion" class="card-img-top" alt="...">
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
      <img src="http://source.unsplash.com/300x300/?watch,women,android" class="card-img-top" alt="...">
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
      <img src="http://source.unsplash.com/300x300/?apple,watch,women" class="card-img-top" alt="...">
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
  
</div>

<div class=" align-items-center justify-content-center text-center mt-4 mb-4">
  <a class="btn btn-outline-dark" href="women.php">See More</a>
</div>






<!-- Footer -->

<?php

include 'partials/footer.php';

?>