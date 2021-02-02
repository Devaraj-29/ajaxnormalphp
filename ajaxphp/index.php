<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container jumbotron">
        <form id="frm">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email"  name="email"class="form-control" id="email">
            </div> 
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="password"name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date"name="date" class="form-control" id="date">
            </div> 
            <br>
            <input type="hidden" value="0" id="id" name="id">
            <button type="button" name="delete" id="save" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    <div class="container-fluid jumbotron">
        <table class="table table-bordered">
        <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>

        <tbody id="all_data">

        </tbody>
        </table>

    </div>
    
<script>


</script>


    <script>
$(document).ready(function(){
    //$("#output").("insert.php");
    fetch_data();
    function fetch_data(){
    $.ajax({
        url:"table.php",
        type:"post",
        data:$("#frm").serialize(),
        success:function(d){
       // alert(d);
        //$("#frm")[0].reset();
       //alert("operation success");
     // console.log(d);
       //fetch_data(d);
       //fetch_data(d);
      $('#all_data').html(d);

        }   
    });
    }
    
        $("#save").click(function(){
            var id=$("#id").val();
             console.log(id);
             if(id==0){
     $.ajax({
    url:"action.php",
    type:"POST",
    data:$("#frm").serialize(),
    success:function(d){
       // alert(d);
        //$("#frm")[0].reset();
      // alert(d);
      //console.log(d);
       //fetch_data(d);
       $('#frm')[0].reset();

       fetch_data();
        
    }
 });
             }
             else{
                $.ajax({
    url:"update.php",
    type:"POST",
    data:$("#frm").serialize(),
    success:function(d){
       // alert(d);
        $("#frm")[0].reset();
      // alert(d);
      //console.log(d);
       //fetch_data(d);
       fetch_data();
        
    }
 });
             }

});
       
        
       



       
        
    $(document).on("click",".edit",function(){
var row=$(this);
var id=$(this).attr("value");
//alert(id);
$("#id").val(id);
//alert(id);
// $.ajax({
//     url:"update.php",
//     type:"POST",
//     //data:{id:id},
//     success:function(id){
//        $(this).closest("tr").remove();
//        //console.log(id);
//        //alert("mesage deleted");
//        //deletedata();
//        fetch_data();

        
//     }
//  });
var email=row.closest("tr").find("td:eq(1)").text();
$("#email").val(email);
var password=row.closest("tr").find("td:eq(2)").text();
$("#password").val(password);
var date=row.closest("tr").find("td:eq(3)").text();
$("#date").val(date);

 });

$(document).on("click",".del",function(){
var del=$(this);
var id=$(this).attr("value");
//alert(id);
$.ajax({
    url:"delete.php",
    type:"POST",
    data:{id:id},
    success:function(id){
       $(this).closest("tr").remove();
       //console.log(id);
       //alert("mesage deleted");
       //deletedata();
       fetch_data();

        
    }
 });

 });
 
});

 </script>
</body>