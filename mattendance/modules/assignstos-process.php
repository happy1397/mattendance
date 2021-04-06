
<?php
if(isset($_GET['submit']))
{
    $student_name=$_GET['student'];
	$subject_name=$_GET['subject'];
	//echo "$faculty_name";
	//echo "$subject_name";
	
	$conn = new mysqli("localhost", "root", "", "mattendance");
	if($conn->connect_errno)
	{
		echo "Failed to connect to MySQL: " . $conn->connect_error;
		exit();
	}
	$query = "SELECT sid FROM student where name='$student_name'";
    $query_run = mysqli_query($conn,$query);
	
	$query1 = "SELECT id FROM subject where name='$subject_name'";
    $query_run1 = mysqli_query($conn,$query1);
	
	$row = $query_run->fetch_assoc();//user id from faculty
   
	//echo $row['sid']."";
	
	$row1 = $query_run1->fetch_assoc();//subject if from subject
	//echo $row1['id']."";
	
	 $query2 = "INSERT INTO student_subject(sid,id) VALUES('" . $row['sid'] . "', '" . $row1['id'] . "')";
	$data = mysqli_query($conn,$query2);

 	if ($data) 
	{
		
			//<script type="text/javascript">alert("Update Successful!!")</script>
		 
		header('location:http://localhost/mattendance/modules/assignstudenttosubject.php');
	}
	else
	{
		
	//<script>alert("error : while updating!!")</script>
	
		header('location:http://localhost/mattendance/modules/assignstudenttosubject.php');
	}  
}

