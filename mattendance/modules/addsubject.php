<?php
$conn = new mysqli("localhost", "root", "", "mattendance");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $name = $_POST['name'];
  $subject_code = $_POST['subject_code'];
  $insert="insert";
  
  //echo $subject_code;
  //$query =  "INSERT INTO subject(name,subject_code)  VALUES('" . $name . "', '" . $subject_code . "')";
  $query = "CALL insertupdate('','".$name."','".$subject_code."','".$insert."')";
  $data = mysqli_query($conn,$query);
  if ($data) {
    ?>
    <script>
    alert("Details Uploaded Succesfully")
    </script>
    <?php
        }
        else{
            ?>
            <script>
                alert("Error Accoured While Uploading Details")
            </script>
            <?php
            }   
          }                  
     ?>
<html lang="en" dir="ltr">

<head>
  <title> addsubject </title>
  <link rel="stylesheet" href="addcustomer.css">
  <style>
      .card {
          border-radius: 15px;
          background-color: #ffffff;
          background-repeat: no-repeat;
          background-position: center;
          width: 800px;
          height: 440px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.10), 0 0px 0px rgba(0, 0, 0, 0.10);
        }
  </style>
</head>

<body class="bg">
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
      <h1>Add Subject info</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="flex-container">
            <div> 
            <h3>Subject Name:</h3>  
            <input type="text" placeholder="enter subject name" class="field" name="name" required>
            </div>
            <div></div>             
        </div>   
        <div class="flex-container">
        
            <div> 
                <h3>Subject Code:</h3>
            <input type="text" placeholder="enter subejct code" class="field" name="subject_code" required> 
            </div>
        </div>              
         <div class="b">
         <input  type="submit" value="Add" />
        </div>
      </form>   
    </div>
  </center>
</body>
</html>