<?php

    include "connect.php";

    $id=$_GET['updateid'];
    
    $sql="select * from crud where id=$id";
    $results=mysqli_query($con,$sql);
    if($results){
       $row= mysqli_fetch_assoc($results);
       $name=$row['name'];
       $email=$row['email'];
       $mobile=$row['mobile'];
       $password=$row['password'];
    }

    if(isset($_POST['submit'])){
       
        $name=$_POST["name"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $password=$_POST["password"];

       $new= "update crud set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
       $results=mysqli_query($con,$new);

       if( $results){
        header('location:view.php');
       }else{
        echo 'Data updated Failed';
       }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>CRUD Operation</title>
</head>
<body>
<div class="container my-5" style="border-radius: 10px; background-color: #f4f4f4; padding: 20px;">
    <form method="post" style="background-color: #ffffff; padding: 20px; border-radius: 8px;" autocomplete="off">
      <div class="mb-3">
        <label>Name</label>
        <input type="text" class="form-control" name="name" autocomplete="off" value=<?php echo $name; ?>>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" autocomplete="off" value=<?php echo $email; ?>>
      </div>
      <div class="mb-3">
        <label>Mobile</label>
        <input type="text" class="form-control" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="text" class="form-control" name="password" autocomplete="off" value=<?php echo $password; ?>>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </form>
  </div>
    </div>
</body>
</html>