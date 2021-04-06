<?php
	$conn = new mysqli("localhost", "root", "", "mattendance");
	if($conn->connect_errno)
	{
		echo "Failed to connect to MySQL: " . $conn->connect_error;
		exit();
	}
	$query = "SELECT * FROM user";
    $query_run = mysqli_query($conn,$query);
	$query1 = "SELECT * FROM subject";
    $query_run1 = mysqli_query($conn,$query1);
?>


<html>
<head>
  <title>Assign subject to Faculty</title>
  <link rel="stylesheet" href="addcustomer.css">
  <style>
  .cards {
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
    <div class="cards">
      <table>
    <form action="assignftos-process.php" method="get">
 
      <div class="box">
      <h3>Faculty:</h3>
        <select name='faculty'>
          <option disabled selected>-- Faculty name --</option>
       
            <?php
                  

                  while($data = mysqli_fetch_array($query_run))
                  {
                      echo "<option value='". $data['uname'] ."'>" .$data['uname'] ."</option>";  // displaying data in option menu
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
      var r = confirm("Are you sure u want to Assign?");
        if (r == true) {
      location.href='assignftos-process.php';
        }
      }
    </script>
  </center>
</body>
</html>




