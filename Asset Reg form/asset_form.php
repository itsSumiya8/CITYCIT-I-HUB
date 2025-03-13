<?php


include ("database.php");

if(isset($_POST['submit'])){
    $id=$_POST['Asset_id'];
    $name=$_POST['Asset_name'];
    $category=$_POST['category'];
    $purchase=$_POST['purchased_date'];
     $location=$_POST['location'];
     $condition=$_POST['Asset_condition'];
     $assign=$_POST['assigned_to'];
     $notes=$_POST['notes'];

     $sql="INSERT INTO asset_reg(Asset_id,Asset_name,category,purchased_date,location,Asset_condition,assigned_to,notes)VALUES
     ( $id, '$name' ,'$category', '$purchase', '$location', '$condition','$assign','$notes')";
     $result=mysqli_query($conn,$sql);
     if($result){
       echo "guul";
     }
     else{
       echo "error".mysqli_error($conn);
     }
 
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>last project</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

 <!--make form----->

  <main class="px-3 py-2">
    <div class="container-fluid">
      <!------assets registration----->
      <div class="card mb-4">
        <div class="card-header " style="color:white" >
          <h1 class="card-title" style="background-color:blue " align=center><b> Form Design</b></h1>
        </div>
        <div class="card-body">
          <form id="asset_form.php" method="post">
            <!---row one---->
            <div class="row g-3 mb-4">


              <div class="col-md-4">
                <label for="Asset ID">Asset ID</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa-solid fa-id-card" style="color:blue"></i></span>
                  <input type="text" class="form-control" placeholder="asset id" name="Asset_id" required>
                </div>
              </div>


              <div class="col-md-4">
              <label for="Asset Name">Asset Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa-solid fa-user" style="color:blue"></i></span>
                  <input type="text" class="form-control" placeholder="asset name" name="Asset_name" required>
                </div>
              </div>
              <div class="col-md-4">
              <label for="Asset Category">Category</label>
                <div class="input-group">
                  <span class="input-group-text">
                  <i class="fa-solid fa-building"  style="color:blue" ></i>

                  </span>
                  <input type="text" class="form-control" placeholder="category" name="category" required>
                </div>
              </div>


            </div>
            <!-------row two---->
            <div class="row g-3 mb-4">
              <div class="col-md-4">
              <label for="purchase date">Purchase date</label>
                <div class="input-group">
                  <span class="input-group-text">
 

 <i class="fa-solid fa-calendar-days"  style="color:blue"></i></span>
                  <input type="text" class="form-control" placeholder="purchase date" name="purchased_date" required>
                </div>
              </div>
              <div class="col-md-4">
              <label for="Location">Location</label>
                <div class="input-group">
                  <span class="input-group-text">
                  <i class="fa-solid fa-location-dot" style="color:blue" ></i>

                  </span>
                  <select class="form-select" required id="location" name="location">
                    <option>nakhiil compus</option>
                    <option>main compus</option>
</select>

                </div>
                </div>

                <div class="col-md-4">
                <label for="Asset condition">Asset Condition</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-regular fa-file" style="color:blue"></i></span>
                    <select class="form-select" name="Asset_condition" required>
                      <option>work</optio>
                      <option>scrap</optio>
</select>
                  
                </div>
              </div>
              


            </div>
            <!-------row three---->

            <div class="row g-3 mb-4">
            <div class="col-md-4">
            <label for="assigned to">Assigned to</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature" style="color:blue"></i></span>
                <input type="text" class="form-control" placeholder="assigned to" name="assigned_to" required>
              </div>
            </div>

            <div class="col-md-4">
            <label for="notes">Notes</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-notes-medical" style="color:blue"></i></span>
                <textarea class="form-control" placeholder="notes" name="notes"></textarea>

              </div>
            </div>
</div>

<!-----buttons---->
<div class="row g-3 mb-4">


  <div class="col-md-3">
    <button type="submit" class="btn btn-info w-100" name="submit">save <i class="fa-regular fa-floppy-disk" style="color:blue" ></i></button>

  </div>
</form>

<!-------table--->
<div class="card">
  <div class="card-header" style="color:white" align="center">
    <h3 class="card-title" style="background-color:blue">
     <b> Asset Registration Form</b>
    </h3>

  </div>
  <div class="card-body">
  <table class=" table table-striped">
      <tr>
        <th>Asset_id</th>
        <th>Asset_name</th>
        <th>category</th>
        <th>purchased_date</th>
        <th>location</th>
        <th>Asset_condition </th>
        <th>assigned_to</th>
        <th>notes </th>
        <th>actions</th>
      
</tr>
<?php

$sql="select*from asset_reg ";
$result=mysqli_query($conn,$sql);
if($result){


while($row=mysqli_fetch_assoc($result)){

    $id=$row['Asset_id'];
    $name=$row['Asset_name'];
    $category=$row['category'];
    $purchase=$row['purchased_date'];
     $location=$row['location'];
     $condition=$row['Asset_condition'];
     $assign=$row['assigned_to'];
     $notes=$row['notes'];
     echo '<tr>
     <td>'. $id.' </td>
         <td>'. $name.' </td>
          <td>'. $category.' </td>
          <td>'. $purchase.' </td>
             <td>'. $location.' </td>
              <td>'. $condition.' </td>
               <td>'. $assign.' </td>
                <td>'. $notes.' </td>

                  <td>
                <button class="btn btn-primary"><a href="update.php?
                        updateAsset_id='.$row['Asset_id'].'"  class="text-light" style="text-decoration:none;">Update<a/> </button>
                        <button class="btn btn-danger"><a href="delete.php?
                        deleteAsset_id='. $row['Asset_id'].'"  class="text-light" style="text-decoration:none;">Delete<a/> </button>
    
                </td>




                </tr>';
}
}



?>
