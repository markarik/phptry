<?php 
 $conn = mysqli_connect("localhost","mark","markarik1","mydatabase");

 if(!$conn){

    die("connection failed".mysqli_connect_error());
 }

?>