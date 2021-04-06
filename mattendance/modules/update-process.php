<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set sid='" . $_POST['sid'] . "', rollno='" . $_POST['rollno'] . "', name='" . $_POST['name'] . "',city='".$_POST['city']."',email='".$_POST['email']."',phone='".$_POST['phone']."' WHERE sid='" . $_POST['sid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE sid='" . $_GET['sid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Student Data</title>
<link rel="stylesheet" href="addcustomer.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.card {
    border-radius: 15px;
    background-color: #ffffff;
    background-repeat: no-repeat;
    background-position: center;
    width: 800px;
    height: 720px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.10), 0 0px 0px rgba(0, 0, 0, 0.10);
}

</style>
</head>
<body>
  <center>
  <header>   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <!-- <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a> -->
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/mattendance/index.php?page=updatestudent">back</a>
            </li>
          </ul>
        </div>
      </div>      
      </nav>
  <!-- <a href="http://localhost/mattendance/index.php?page=updatestudent" class="button">Cancel</a>  -->
  </header>
  <br><br>
  <div class="card">
    <form method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    </div>
    <div class="flex-container">
        <div>
        <h3>Register Id:</h3>        
        <input type="hidden" name="sid" class="txtField" value="<?php echo $row['sid']; ?>">
        <input type="text" name="sid"  value="<?php echo $row['sid']; ?>">
        </div>
        <div></div>
    </div>
     <div class="flex-container">
       <div>
      <h3>Roll No:</h3>      
      <input type="text" name="rollno" class="txtField" value="<?php echo $row['rollno']; ?>">
      </div>
      <div></div>
    </div> 


    <div class="flex-container">
    <div>
      <h3>Name:</h3>      
      <input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
      </div>
      <div></div>
    </div>


    <div class="flex-container">
    <div>
      <h3>city:</h3>      
      <input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>">
      </div>
      <div></div>
    </div>


    <div class="flex-container"> 
    <div>  
    <h3>email:</h3>      
      <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
      </div>
      <div></div>
    </div>  


    <div class="flex-container"> 
    <div> 
    <h3>phone:</h3>      
      <input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
      </div>
      <div></div>
    </div>
      <br>
    <div class="b">
      <input type="submit" name="submit" value="Submit">      
    </div>

    </form>
  </div>
  </center>
</body>
</html>