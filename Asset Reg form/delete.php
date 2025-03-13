<?php

include("database.php");

if(isset($_GET['deleteAsset_id'])){
  $id=$_GET['deleteAsset_id'];
  $sql="DELETE from asset_reg where Asset_id=$id";
  $result=mysqli_query($conn,$sql);
  if($result){
    #echo "guul";
    header('location:asset_form.php');
  
  }
  else{
    echo "failed".mysqli_error($conn);
  }
}
?>