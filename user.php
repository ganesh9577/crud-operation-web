<?php
    include 'connect.php';
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";

        $result = mysqli_query($con,$sql);
        if($result){
            //echo "inserted successfull....";
            header('location:display.php');
        }else{

            die(mysqli_error($con));
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    

    <title>main page</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div>
    <form method="post">
        <div>
            <label>Ename</label>
            <input type="text" placeholder="Enter your name" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email"  placeholder="Enter your email id" name="email">
        </div>
        <div class="form-group">
            <label>mobileno</label>
            <input type="text"  placeholder="Enter your mobile number" name="mobile">
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="text"  placeholder="Enter your password" name="password">
        </div>
            
        <button type="submit" name="submit">Submit</button>
    </form>
    </div>
  
  </body>
</html>