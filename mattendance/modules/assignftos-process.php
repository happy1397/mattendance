<?php
if(isset($_GET['submit']))
{
    $faculty_name=$_GET['faculty'];
	$subject_name=$_GET['subject'];
	echo "$faculty_name";
	echo "$subject_name";
	
	$conn = new mysqli("localhost", "root", "", "mattendance");
	if($conn->connect_errno)
	{
		echo "Failed to connect to MySQL: " . $conn->connect_error;
		exit();
	}
	$query = "SELECT uid FROM user where uname='$faculty_name'";
    $query_run = mysqli_query($conn,$query);
	
	$query1 = "SELECT id FROM subject where name='$subject_name'";
    $query_run1 = mysqli_query($conn,$query1);
	
	$row = $query_run->fetch_assoc();//user id from faculty
    echo $row['uid']."";
	
	$row1 = $query_run1->fetch_assoc();//subject if from subject
	echo $row1['id']."";
	
	$query2 = "INSERT INTO user_subject(uid,id) VALUES('" . $row['uid'] . "', '" . $row1['id'] . "')";
	$data = mysqli_query($conn,$query2);

	if ($data) 
	{
		
			//<script type="text/javascript">alert("Update Successful!!")</script>
		 
		header('location:http://localhost/mattendance/modules/assignfacultytosubject.php');
	}
	else
	{
		
	//<script>alert("error : while updating!!")</script>
	
		header('location:http://localhost/mattendance/modules/assignfacultytosubject.php');
	}  
}
?>