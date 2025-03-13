<?php

$conn=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"");
if($conn){
    echo "successfully connect";
}
else{
    echo "error";
}
$data="CREATE DATABASE CITYCOT";
$result=mysqli_query($conn,$data);
if($result){
    echo "guul";
}
else{
    echo "error";
}

?>
