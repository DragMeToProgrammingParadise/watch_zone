<?php include ('partials/header.php'); ?>

<?php
$con = new mysqli("localhost", "root", "", "watch_zone");
// Check connection
if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

$page_id = $_GET['page_id'];
$query = "select * from pages where id = $page_id";
  $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo $row['description'];
    }
?>
 
<?php include ('partials/footer.php'); ?>
