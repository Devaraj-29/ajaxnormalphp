<?php
include 'db.php';
    // $id= $_POST['id'];
    //   $email= $_POST['email'];
    //   $password= $_POST['password'];
    //   $date =$_POST['date'];
    //   $query="UPDATE table1
    //           SET email='$_POST["id"]',
    //               password='$_POST["password"]',
    //               date= '$_POST["date"]',
    //               WHERE id=".$_POST["id"];
$sql="UPDATE table1 SET email='{$_POST["email"]}',password='{$_POST["password"]}',date='{$_POST["date"]}' WHERE id=".$_POST["id"];
$res=mysqli_query($conn,$sql);


?>