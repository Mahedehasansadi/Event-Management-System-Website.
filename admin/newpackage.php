<?php
// Include your database connection file
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['submit2'])) {
    $packagename = $_POST['packagename'];
    $packagedes = $_POST['packagedes'];
    $price = $_POST['price'];
    $images = $_FILES['packageimage']['name'];
    $target_dir = "uploads/"; // Make sure this directory exists and has proper permissions
    $target_file = $target_dir . basename($_FILES['packageimage']['name']);

    // Check if the file was uploaded successfully
    if (move_uploaded_file($_FILES['packageimage']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO tblpackage(PackageName, PacDes, PackagePrice, PackageImage) VALUES (:packagename, :packagedes, :price, :images)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':packagename', $packagename, PDO::PARAM_STR);
        $query->bindParam(':packagedes', $packagedes, PDO::PARAM_STR);
        $query->bindParam(':price', $price, PDO::PARAM_STR);
        $query->bindParam(':images', $images, PDO::PARAM_STR);
        $query->execute();

        if ($query) {
            $LastInsertId = $dbh->lastInsertId();
            if ($LastInsertId > 0) {
                echo '<script>alert("Event package has been added.")</script>';
            } else {
                echo '<script>alert("Something Went Wrong. Please try again")</script>';
            }
        } else {
            echo '<script>alert("Error in query execution.")</script>';
        }
    } else {
        echo '<script>alert("Error uploading file. Please try again.")</script>';
    }
}
?>

<div class="card-body">
  <h4 class="card-title">AddPackage Form</h4>
  <form class="forms-sample" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="packagename">Package Name</label>
      <input type="text" name="packagename" class="form-control" id="packagename" placeholder="Package Name" required>
    </div>
    <div class="form-group">
      <label for="price">Package Price</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="Price" required>
    </div> 
    <div class="form-group">
      <label for="packageimage">Package Image</label>
      <input type="file" name="packageimage" class="form-control-file" id="packageimage" required>
    </div>
    <div class="form-group">
      <label for="packagedes">Package Description</label>
      <textarea class="form-control" name="packagedes" id="packagedes" rows="5" required></textarea>
    </div>

    <button type="submit" name="submit2" class="btn btn-primary btn-fw mr-2">Submit</button>
  </form>
</div>
