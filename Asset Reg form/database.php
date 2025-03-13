<?php

$conn=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"CITYCOT");
if($conn){
    #echo "successfully connect";
}
else{
    echo "error";
}
?>