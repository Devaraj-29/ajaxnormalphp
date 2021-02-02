<?php
include 'db.php';
$sql="SELECT * FROM table1";
$res=mysqli_query($conn,$sql);
if($res->num_rows > 0){


while($row=mysqli_fetch_array($res)){
    ?>
    
    
    <tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["password"]?></td>
    <td><?php echo $row["date"]?></td>
    <td><button type='button' class='btn btn-primary edit'value='<?php echo $row["id"]?>'>Edit</button></td>;
    <td><button type='button' class='btn btn-danger del' value='<?php echo $row["id"]?>'>Delete</button></td>;
    </tr>
    
    
    
    
    

    <?php
}
}




?>