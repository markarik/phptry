<?php 
 
 session_start();
 include'dbh.php';



$msg= $_POST['msg'];
$name= $_SESSION['name'];





$sql = "insert into post(msg,name) values('$msg ','$name')";
$result = $conn -> query($sql);






header("location:home.php");
?>

