<?php
include ("database.php");

$table="CREATE TABLE asset_reg(
Asset_id INT PRIMARY KEY AUTO_INCREMENT,
Asset_name varchar(100),
category varchar(100),
purchased_date DATE  ,
location varchar(255),
Asset_condition VARCHAR(255),
assigned_to varchar(255),
notes varchar(255)
)";



$result=mysqli_query($conn,$table);
if($result){
    echo "success";
}
else{
    echo "failed";
}
?>