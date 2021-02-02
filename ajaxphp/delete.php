<?php
include 'db.php';
if(isset($_POST["id"])){
$sql="DELETE FROM table1 WHERE id=".$_POST["id"];
$conn->query($sql);

}


?>