<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display data</title>
</head>
<body>
<div>
<button><a href="user.php">add user</a></button>
<table class="table">
  <thead>
    <tr>
      <th >no</th>
      <th>name</th>
      <th>email</th>
      <th>mobile</th>
      <th>password</th>
      <th>operation</th>
    </tr>
  </thead>
  <tbody>
<?php

    $sql = "select *from `crud`";
    $result = mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];

            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];

            echo '<tr>
            <th>'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td><button><a href="update.php? updateid='.$id.'">update</a></button><button><a href="delete.php? deleteid='.$id.'">delete</a></button></td>
            </tr>';
        }
    }
?>
    <!-- <td>
        <button><a href="">update</a></button>
        
        <button><a href="">delete</a></button>


    </td> -->
  </tbody>
</table>

</div>
    
</body>
</html>