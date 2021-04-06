<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
    //$query = "SELECT * FROM student";
    $query ="CALL getstudent()";
    $query_run = mysqli_query($conn,$query);
?>

<html>
<head>
<link rel="stylesheet" href="view.css">
<title>view Student</title>
</head>
<body class="bg">
<header>
    <div class="btn">
    <input  type="button" value="Back" onclick="window.location.href='admindashboard.php';"/>
    </div>
  </header>
  <center>  
      <div class="card">
        <table class="table">
          <tr>
          <th>Student Id</th>
          <th>Roll No</th>
          <th>Name</th>
          <th>sex</th>
          <th>City</th>
          <th>Email id</th>
          <th>phone</th>

          </tr>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($query_run)) {
          if($i%2==0)
          $classname="even";
          else
          $classname="odd";
          ?>
          <tr class="<?php if(isset($classname)) echo $classname;?>">
          <td><?php echo $row["sid"]; ?></td>
          <td><?php echo $row["rollno"]; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["sex"];?></td>
          <td><?php echo $row["city"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["phone"];?></td>

          <td><a href="http://localhost/mattendance/modules/viewstudent-process.php?sid=<?php echo $row["sid"]; ?>" class="button">Update</a></td>
          <td><a href="http://localhost/mattendance/modules/viewstudent-delete.php?sid=<?php echo $row["sid"]; ?>" class="button">Delete</a></td>
          </tr>
          <?php
          $i++;
          }
          ?>
          </table>
        </div>
  </center>
</body>
</html>