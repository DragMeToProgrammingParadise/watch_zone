<footer class="d-flex flex-wrap justify-content-between align-items-center py-2 my-1 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-1 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        
      </a>
      <span class="mb-1 mb-md-0 text-muted">© 2022 Watch Zone, Inc</span>
    </div>
    <div class=" align-items-center justify-content-center text-center ">

      <a href="pages.php?page_id=1" class=" text-danger text-decoration-none "> Contact Us |</a>
      <a href="pages.php?page_id=3" class=" text-danger text-decoration-none ">Privacy & Policy</a>
    </div>
    <?php
$con = new mysqli("localhost","root","","watch_zone");
// Check connection
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
} ?>
<?php 
   $query = "select * from social_apps";
          $result=mysqli_query($con,$query);
        ?>
          
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
   <?php while($row = mysqli_fetch_array($result)){ ?>
      <li class="ms-3">
        <a class="text-muted" href="<?php echo $row['link']; ?>" target="<?php echo $row['target']; ?>">
          <img src="<?php echo $row['image']; ?>" alt="" class="bi" width="24" height="24">

          </image>
        </a>
      </li> <?php } ?>

      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        
      </a>
    </ul> 
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>

</html>