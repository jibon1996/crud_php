<?php
 
if(isset($_POST['submit'])){
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost","root","","crud_operation") or die("connection failed");
    $query = "INSERT INTO crud (full_name,email,moblie,passwords)
              VALUES('$name','$email','$mobile','$password')";
    $result = mysqli_query($conn,$query) or die("query failed") ; 

    header("Location: http://localhost/crud/display.php");
    
    mysqli_close($conn);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <!-- boostrap css cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="container py-5">
      <div class="row">
        <h2>Add Users</h2>
        <div class=" col-md-4 offset-md-4 ">
        <form action="<?php $_SERVER['PHP_SELF'] ;  ?>" method="post">
  <div class="form-group mt-3">
      <label >Name</label>
      <input type="text" class="form-control" placeholder="Enter Your Name" 
       name="name" autocomplete="off">
  </div>
  <div class="form-group mt-3 ">
      <label >Email</label>
      <input type="email" class="form-control" placeholder="Enter Your Email"
       name="email" autocomplete="off">
  </div>
  <div class="form-group mt-3">
      <label >Mobile</label>
      <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off">
  </div>
  <div class="form-group mt-3">
      <label >Password</label>
      <input type="text" class="form-control" placeholder="Enter Your Password"
       name="password" autocomplete="off">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
</form>
        </div>
      </div>
    </div>
    
</body>
</html>