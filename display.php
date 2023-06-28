<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap css cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary  mt-5"><a  href="user.php" class="text-light">Adduser</a></button>

    <?php
        $conn = mysqli_connect("localhost","root","","crud_operation") or die("connection failed");
        $query = "SELECT * FROM crud ";
        $result = mysqli_query($conn,$query) or die("query failed");

        if(mysqli_num_rows($result) > 0){

     ?>

        <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Moble</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  
       while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['full_name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['moblie']; ?></td>
      <td><?php echo $row['passwords']; ?></td>
      <td>
        <ul>
            <li><a href="update.php?id=<?php echo $row['id'];?>" class="update_btn">Update</a></li>
            <li><a href="delete.php?id=<?php echo $row['id'];?>" class="delete_btn" >Delete</a></li>
        </ul>

      </td>
    </tr>
    <?php } ?>
   
  </tbody>
</table>
 <?php } ?>
    </div>
</body>
</html>