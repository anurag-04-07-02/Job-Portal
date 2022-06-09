<?php include 'header.php'?>

  <div class="content">
  <table class="table" style="margin-top:50px;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Candidate Name</th>
          <th scope="col">Position</th>
          <th scope="col">Year Passout</th>
        </tr>
      </thead>
      <tbody>
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

        $sql="SELECT `name`, `apply`, `year` FROM `candidates`";
        $result=mysqli_query($conn,$sql);
        $i=0;
        if ($result->num_rows > 0){
          while($rows=$result->fetch_assoc()){
            echo'
        <tr>
          <th scope="row">'.++$i.'</th>
          <td>'.$rows['name'].'</td>
          <td>'.$rows['apply'].'</td>
          <td>'.$rows['year'].'</td>
        </tr>';}}
        else{
          echo"";
        }
        ?>
      </tbody>
    </table>
      </div>
    </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>