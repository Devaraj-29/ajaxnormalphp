<?php
include 'db.php';

$email=$_POST['email'];
$password=$_POST['password'];
$date=$_POST['date'];

$sql="INSERT INTO table1 (email,password,date) VALUES ('{$email}','{$password}','{$date}')";
$res=mysqli_query($conn,$sql);





?>