<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set uid='" . $_POST['uid'] . "',uname='" . $_POST['uname'] . "',sex='".$_POST['sex']."',city='".$_POST['city']."',email='".$_POST['email']."',phone='".$_POST['phone']."' WHERE uid='" . $_POST['uid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE uid='" . $_GET['uid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Faculty Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Faculty Id: <br>
<input type="hidden" name="uid" class="txtField" value="<?php echo $row['uid']; ?>">
<input type="text" name="uid"  value="<?php echo $row['uid']; ?>">
<br>
Name :<br>
<input type="text" name="uname" class="txtField" value="<?php echo $row['uname']; ?>">
<br>
Sex: <br>
<input type="text" name="sex" class="txtField" value="<?php echo $row['sex']; ?>">
<br>

city :<br>
<input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>">
<br>
email :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
phone :<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>