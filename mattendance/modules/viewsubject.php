<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
    //$query = "SELECT * FROM subject";
    $query = "CALL insertupdate('','','','')"; 
    $query_run = mysqli_query($conn,$query);
?>

<html>
<head>
<link rel="stylesheet" href="view.css">
<title>view Subject</title>
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
          <th>Subject Id</th>
          <th>Subject Name</th>
          <th>Subject code</th>

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
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["subject_code"]; ?></td>

          <td><a href="http://localhost/mattendance/modules/viewsubject-process.php?id=<?php echo $row["id"]; ?>" class="button">Update</a></td>
          <td><a href="http://localhost/mattendance/modules/viewsubject-delete.php?id=<?php echo $row["id"]; ?>" class="button">Delete</a></td>
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