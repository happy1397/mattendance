<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn," DELETE FROM subject WHERE id='" . $_POST['id'] . "'");
$message = "Record DELETED Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM subject WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Delete subject Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Subject Id: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>" disabled>
<br>
Subject Name :<br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>" disabled>
<br>
Subject code:<br>
<input type="text" name="sex" class="txtField" value="<?php echo $row['subject_code']; ?>" disabled>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>