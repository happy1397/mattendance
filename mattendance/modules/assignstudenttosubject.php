<?php
	$conn = new mysqli("localhost", "root", "", "mattendance");
	if($conn->connect_errno)
	{
		echo "Failed to connect to MySQL: " . $conn->connect_error;
		exit();
	}
	$query = "SELECT * FROM student";
    $query_run = mysqli_query($conn,$query);
	$query1 = "SELECT * FROM subject ";
    $query_run1 = mysqli_query($conn,$query1);
?>


<html>
<head>
  <title>Assign student to subject</title>
  <link rel="stylesheet" href="addcustomer.css">
  <style>
  .card {
    border-radius: 15px;
    background-color: #ffffff;
    background-repeat: no-repeat;
    background-position: center;
    width: 800px;
    height: 460px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.10), 0 0px 0px rgba(0, 0, 0, 0.10);
    }
  </style>
</head>
<body>
  <center>
    <header>
      <nav>
        <!-- <img class="img" height="100px" width="310px" alt="" src="logo FL final w.svg"> -->
        <div class="btn">
         <input  type="button" value="Back" onclick="window.location.href='admindashboard.php';"/>
        </div>
      </nav>
    </header>
    <div class="card">
      <table>
    <form action="assignstos-process.php" method="get">
 
      <div class="box">
      <h3>Student:</h3>
        <select name='student'>
          <option disabled selected>-- Student name --</option>
          <?php
            

              while($data = mysqli_fetch_array($query_run))
              {
                  echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
              }	
          ?>  
          </select>      
          <br>
      </div>
      
       <div class="box1">
       <h3>Subject Name:</h3>
          <select name='subject'>
            <option disabled selected>-- subject name --</option>
            <?php
                
                while($data = mysqli_fetch_array($query_run1))
                {
                    echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
                }	
            ?>  
          </select>
       </div>
      
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <div class="b">
          <input type="submit" name="submit" value="assign" onclick="javascript:completeAndRedirect();"> </div>
          </div>
    </form>
    </div>
    <script>
    function completeAndRedirect(){
      var r = confirm("Are you sure u want to assign?");
        if (r == true) {
      location.href='assignstos-process.php';
        }
      }
    </script>
  </center>
</body>
</html>