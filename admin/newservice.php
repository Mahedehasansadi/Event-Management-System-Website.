<?php
// Include your database connection file
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['submit2'])) {
    $servicename = $_POST['servicename'];
    $servicedes = $_POST['servicedes'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $images = $_FILES['serviceimage']['name'];
    $target_dir = "uploads/"; // Make sure this directory exists and has proper permissions
    $target_file = $target_dir . basename($_FILES['serviceimage']['name']);

    // Check if the file was uploaded successfully
    if (move_uploaded_file($_FILES['serviceimage']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO tblservice(ServiceName, SerDes, ServicePrice, ServiceImage, Category) VALUES (:servicename, :servicedes, :price, :images, :category)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':servicename', $servicename, PDO::PARAM_STR);
        $query->bindParam(':servicedes', $servicedes, PDO::PARAM_STR);
        $query->bindParam(':price', $price, PDO::PARAM_STR);
        $query->bindParam(':images', $images, PDO::PARAM_STR);
        $query->bindParam(':category', $category, PDO::PARAM_STR);
        $query->execute();

        if ($query) {
            $LastInsertId = $dbh->lastInsertId();
            if ($LastInsertId > 0) {
                echo '<script>alert("Service has been added.")</script>';
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
  <h4 class="card-title">AddService Form</h4>
  <form class="forms-sample" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="category">Category</label>
      <select name="category" class="form-control" id="category" required>
        <option value="">Select Category</option>
        <option value="Category 1">Category 1</option>
        <option value="Category 2">Category 2</option>
        <option value="Category 3">Category 3</option>
        <option value="Category 4">Category 4</option>
        <option value="Category 5">Category 5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="servicename">Service Name</label>
      <input type="text" name="servicename" class="form-control" id="servicename" placeholder="Service Name" required>
    </div>
    <div class="form-group">
      <label for="price">Service Price</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="Price" required>
    </div> 
    <div class="form-group">
      <label for="serviceimage">Service Image</label>
      <input type="file" name="serviceimage" class="form-control-file" id="serviceimage" required>
    </div>
    <div class="form-group">
      <label for="servicedes">Service Description</label>
      <textarea class="form-control" name="servicedes" id="servicedes" rows="5" required></textarea>
    </div>

    <button type="submit" name="submit2" class="btn btn-primary btn-fw mr-2">Submit</button>
  </form>
</div>
