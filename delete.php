<?php

$conn = mysqli_connect("localhost","root","","crud_operation") or die("connection failed");
$userid=$_GET['id'];

$query = "DELETE FROM crud WHERE id = '{$userid}'";

$resut = mysqli_query($conn,$query) or die("query failed");

    if(mysqli_query($conn,$query)){
        header("Location: http://localhost/crud/display.php");
    }
   
    mysqli_close($conn);


?>