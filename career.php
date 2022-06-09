<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      *{
        margin: 0;
        padding: 0;
      }
    h1,p{
      color: black;
    }
    .jobs{
      border: 1px solid black;
      box-shadow: 5px 5px 4px 5px grey;
      margin: 10px;
      padding: 10px;
    }
    </style>
    <title>Career</title>
</head>
<body>
    <div class="row mr-0">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid" style="background-image: url('banner.png'); background-size: cover;">
          <div class="container">
            <h1 class="display-4">Job Portal</h1>
            <p class="lead">Best Jobs available matching your skills</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-0">
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

        $sql="SELECT `cname`, `position`, `Jdesc`, `CTC`, `skills` FROM `jobs`";
        $result = mysqli_query($conn,$sql);
        if ($result->num_rows>0){
          while($rows=$result->fetch_assoc()){
            echo'
            <div class="col-md-4" >
            <div class="jobs">
            <h3 style="text-align: center;">'.$rows['position'].'</h3>
            <h4 style="text-align: center;">'.$rows['cname'].'</h4>
            <p style="color: black; text-align: justify;">'.$rows['Jdesc'].'</p>
            <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
            <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">Apply Now</button>
            </div>
            </div>';
             }
        }
        else{
          echo"";
        }
        ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apply for openings!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submits">Apply</button>
        </form>
      </div>
      </div>
    </div>
    </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWPOWintQrMb4s7ZOdauHnUtxwoG2vI5DkLts3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>