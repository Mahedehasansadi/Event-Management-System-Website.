<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
  $eid=$_SESSION['edid'];
  $packagename=$_POST['packagename'];
  $packagedes=$_POST['packagedes'];
  $price=$_POST['price'];
  $image = $_FILES['packageimage']['name'];   
  $target_dir = "uploads/"; // Make sure this directory exists and has proper permissions
  $target_file = $target_dir . basename($_FILES['packageimage']['name']);
  if (move_uploaded_file($_FILES['packageimage']['tmp_name'], $target_file)) {
  $sql="update tblpackage set PackageName =:packagename,PacDes=:packagedes,PackagePrice=:price,PackageImage=:image  where tblpackage.ID=:eid";
  $query=$dbh->prepare($sql);
  $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
  $query->bindParam(':packagename',$packagename,PDO::PARAM_STR);
  $query->bindParam(':packagedes',$packagedes,PDO::PARAM_STR);
  $query->bindParam(':price',$price,PDO::PARAM_STR);
  $query->bindParam(':image',$image,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute()){
    echo '<script>alert("Package has been updated")</script>';
  }else{
    echo '<script>alert("update failed! try again later")</script>';
  }
}
}
?>
<div class="card-body">
  <h4 class="card-title">Update Package Form </h4>
  <form class="forms-sample" method="post" enctype="multipart/form-data" class="form-horizontal">
    <?php
    $eid=$_POST['edit_id'];
    $sql="SELECT * from  tblpackage where tblpackage.ID=:eid";
    $query = $dbh -> prepare($sql);
    $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
      foreach($results as $row)
      { 
        $_SESSION['edid']=$row->ID;
        ?>        
        <div class="form-group">
          <label for="exampleInputName1">Package Name</label>
          <input type="text" name="packagename" class="form-control" id="packagename" value="<?php  echo $row->PackageName;?>" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Package Price</label>
          <input type="text" name="price" class="form-control" id="price" value="<?php  echo $row->PackagePrice;?>" required>
        </div>
        <div class="form-group">
          <label for="exampleTextarea1">Package Description</label>
          <textarea class="form-control" name="packagedes" id="packagedes" rows="4" style="line-height: 30px;" required><?php  echo $row->PacDes;?></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Package Image</label>
          <input type="file" name="packageimage" class="form-control-file" id="packageimage">
        </div>
        <?php
        $cnt=$cnt+1;
      }
    } ?>
    <button type="submit" name="submit" class="btn btn-primary btn-fw mr-2">Update</button>
    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
  </form>
</div>