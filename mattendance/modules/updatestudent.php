<?php
  //session_start();
	//echo"Take a view here";
  $suid = $_SESSION['uid'];
  //echo $suid;
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
    //$query = "SELECT * FROM student";
    //$query="SELECT DISTINCT name, rollno FROM `user_subject` INNER JOIN student_subject INNER JOIN student WHERE user_subject.id = student_subject.id AND student_subject.sid = student.sid AND user_subject.uid = $suid";
   $query= "select DISTINCT s.sid,s.rollno,s.name,s.city,s.email,s.phone
from student s,user,student_subject,user_subject
WHERE s.sid = student_subject.sid AND
student_subject.id =user_subject.id AND
user.uid =$suid";
    $query_run = mysqli_query($conn,$query);
?>
<head>
<link rel="stylesheet" href="view.css">
<title>Student data</title>
</head>
<body class="">    
  <center>    
      <div class="card">
        <table class="table">
          <tr>
          <td>Student Id</td>
          <td>Roll No</td>
          <td>Name</td>
          <td>City</td>
          <td>Email id</td>
          <td>phone</td>
          <td>Action</td>
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
          <td><?php echo $row["city"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["phone"];?></td>

          <td><a href="http://localhost/mattendance/modules/update-process.php?sid=<?php echo $row["sid"]; ?>" class="btn btn-warning">Update</a></td>
          </tr>
          <?php
          $i++;
          }
          ?>
         </table>
  </center>
</body>
</html>