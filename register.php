<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['phone_no'];

    $sql = "INSERT INTO `users`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn,$sql)){
        echo "Records inserted succesfully.";
    }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Register</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-image: url('bg.jpg');
      background-size: cover;
    }

    form {
      margin-top: 2em;
      margin-bottom: 6em;
      margin-left: 35em;
      margin-right: 3em;
      padding-left: 23px;
      padding-right: 23px;
      padding-top: 23px;
      padding-bottom: 13px;
      box-shadow: 10px 10px 8px 10px black;
      background-color: white;
      opacity: 0.95;
    }
  </style>
</head>

<body>
  <form method="POST">
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="exampleInputName" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputNumber" class="form-label">Contact Number</label>
      <input type="number" class="form-control" id="exampleInputNumber" name="phone_no" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword2">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <p style="text-align: center;">Already Registered?<br><a href="login.php">Login</a></p>

  </form>
</body>

</html>