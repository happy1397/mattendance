<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
  $update="update";
 //mysqli_query($conn,"UPDATE subject set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', subject_code='" . $_POST['subject_code'] . "' WHERE id='" . $_POST['id'] . "'");
mysqli_query($conn,"CALL insertupdate('" . $_POST['id'] . "','" . $_POST['name'] . "','" . $_POST['subject_code'] . "','".$update."')");
 $message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM subject WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Subject Data</title>
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

subject Name :<br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Subject Code :<br>
<input type="text" name="subject_code" class="txtField" value="<?php echo $row['subject_code']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>