<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
    //$query = "SELECT * FROM user";
    $query ="CALL getfaculty()";
    $query_run = mysqli_query($conn,$query);
?>
<html>
<head>
<link rel="stylesheet" href="view.css">
<title>view Faculty</title>
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
        <th scope="col">Faculty Id</th>
        <th scope="col">Name</th>
        <th scope="col">sex</th>
        <th scope="col">City</th>
        <th scope="col">Email id</th>
        <th scope="col">phone</th>
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
        <td><?php echo $row["uid"]; ?></td>
        <td><?php echo $row["uname"]; ?></td>
        <td><?php echo $row["sex"];?></td>
        <td><?php echo $row["city"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["phone"];?></td>

        <td><a href="http://localhost/mattendance/modules/viewfaculty-process.php?uid=<?php echo $row["uid"]; ?>" class="button">Update</a></td>
        <td><a href="http://localhost/mattendance/modules/viewfaculty-delete.php?uid=<?php echo $row["uid"]; ?>" class="button">Delete</a></td>
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