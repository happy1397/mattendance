<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn," DELETE FROM user WHERE uid='" . $_POST['uid'] . "'");
$message = "Record DELETED Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE uid='" . $_GET['uid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Delete Faculty Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Faculty Id: <br>
<input type="hidden" name="uid" class="txtField" value="<?php echo $row['uid']; ?>">
<input type="text" name="uid"  value="<?php echo $row['uid']; ?>" disabled>
<br>
Name :<br>
<input type="text" name="uname" class="txtField" value="<?php echo $row['uname']; ?>" disabled>
<br>
sex :<br>
<input type="text" name="sex" class="txtField" value="<?php echo $row['sex']; ?>" disabled>
<br>

city :<br>
<input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>" disabled>
<br>
email :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>" disabled>
<br>
phone :<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>" disabled>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>