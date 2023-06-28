<?php
if(isset($_POST['update'])){
    $conn = mysqli_connect("localhost","root","","crud_operation") or die("connection failed");

$userid = $_POST['id'];    
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$query = "UPDATE  crud  SET full_name ='{$name}',email ='{$email}',moblie ='{$mobile}',
            passwords = '{$password}' WHERE id= '{$userid}' ";
$result = mysqli_query($conn,$query)or die("query failed");

 if(mysqli_query($conn,$query)){
    header("Location: http://localhost/crud/display.php");
 }

    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- boostrap css cdn  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
 
<div class="container">
    <div class="row">
        <h2 class="mt-3">Update Users</h2>
        <div class=" col-md-4 offset-md-4 mt-5">
            <?php
               
                $conn = mysqli_connect("localhost","root","","crud_operation") or die("connection failed");
                
                $user_id = $_GET['id'];
                
                $query = "SELECT * FROM crud WHERE id ={$user_id}";
                $result = mysqli_query($conn,$query)or die("query failed");

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
               
            ?>

            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control"
                     value="<?php echo $row['id'];?>" placeholder="">
                </div>
                <div class="form-group mt-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control"
                     value="<?php echo $row['full_name'];?>" placeholder="" autocomplete="off">
                </div>
                <div class="form-group mt-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control"
                     value="<?php echo $row['email'];?>" placeholder="" autocomplete="off">
                </div>
                <div class="form-group mt-3">
                    <label for="">Mobile</label>
                    <input type="text" name="mobile" class="form-control"
                     value="<?php echo $row['moblie'];?>" placeholder="" autocomplete="off">
                </div>
                <div class="form-group mt-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"
                     value="<?php echo $row['passwords'];?>" placeholder="" autocomplete="off">
                </div>
                <input type="submit" name="update" class="btn btn-primary mt-3" value="Update">
            </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
 
</body>
</html>