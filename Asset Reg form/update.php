<?php

include ("database.php");


if(isset($_GET['updateAsset_id'])){
$id = $_GET['updateAsset_id'];




   
$sql = "SELECT * FROM asset_reg WHERE Asset_id= $id";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0) 
{
    echo "guul.";
}
else 
{
$row = mysqli_fetch_assoc($result);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['Asset_name'];
    $category= $_POST['category'];
    $purchase = $_POST['purchased_date'];
    $location = $_POST['location'];
    $condition = $_POST['Asset_condition'];
    $assign= $_POST['assigned_to'];
    $notes = $_POST['notes'];



$sql = "UPDATE asset_reg set Asset_id='$id', Asset_name='$name',category='$category', purchased_date='$purchase',
location='$location', Asset_condition='$condition', assigned_to='$assign', notes='$notes' WHERE Asset_id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    #echo "guul";
    header('location:asset_form.php');
} else {
   echo "failed";
} 
    


}
}

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>last project</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 <!--make form----->

  <main class="px-3 py-2">
    <div class="container-fluid">
      <!------assets registration----->
      <div class="card mb-4">
        <div class="card-header " style="color:white" >
          <h1 class="card-title" style="background-color:blue " align=center>form design</h1>
        </div>
       

        <div class="card-body">

          <form id="assetform" method="post">
            <!---row one---->
            <div class="row g-3 mb-4">


              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-text"><i class="fa-solid fa-id-card" style="color:blue"></i></span>
                  <input type="text" class="form-control" placeholder="asset id" value="<?php echo $id=$row['Asset_id'];?>" disabled name="Asset_id" required>
                </div>
              </div>


              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-text"><i class="fa-solid fa-user" style="color:blue"></i></span>
                  <input type="text" class="form-control" placeholder="sset name" value="<?php echo $row['Asset_name'];?>"  name="Asset_name" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-text">
                  <i class="fa-solid fa-building"  style="color:blue" ></i>

                  </span>
                  <input type="text" class="form-control"  placeholder="category" value="<?php echo $row['category'];?>" name="category" required>
                </div>
              </div>


            </div>
            <!-------row two---->
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-text">
 

 <i class="fa-solid fa-calendar-days"  style="color:blue"></i></span>
                  <input type="text" class="form-control" placeholder="purchase date" value="<?php echo $row['purchased_date'];?>"  name="purchased_date" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-text">
                  <i class="fa-solid fa-location-dot" style="color:blue" ></i>

                  </span>
                  <select class="form-select" required  id="asset_location" value="<?php echo $row['location'];?>" name="location">
                    <option>nakhiil compus</option>
                    <option>main compus</option>
</select>

                </div>
                </div>

                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-regular fa-file" style="color:blue"></i></span>
                    <select class="form-select"  name="asset_condition" value="<?php echo $row['Asset_condition'];?>" required>
                      <option>work</optio>
                      <option>scrap</optio>
</select>
                  
                </div>
              </div>
              


            </div>
            <!-------row three---->

            <div class="row g-3 mb-4">
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature" style="color:blue"></i></span>
                <input type="text" class="form-control" placeholder="assigned to" value="<?php echo $row['assigned_to'];?>" name="assigned_to" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-notes-medical" style="color:blue"></i></span>
                <textarea class="form-control" placeholder="notes" value="<?php echo $row['notes'];?>"  name="notes"></textarea>

              </div>
            </div>
            <button class="btn btn-primary" name="submit">Update</button>

</div>
</body>
</html>


