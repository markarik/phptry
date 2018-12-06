<?php
session_start();
include'dbh.php';
$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM signups WHERE username ='$uname'AND password = '$pass'";

$result = $conn -> query($sql);
if(!$row = $result -> fetch_assoc()){
    header("location:error.php");

} else{


$_SESSION['name']=$_POST['uname'];


    header("location:home.php");
}
?>