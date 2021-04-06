<?php
$conn = new mysqli("localhost", "root", "", "mattendance");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $rollno = $_POST['rollno'];
  $name = $_POST['name'];
  $sex = $_POST['sex'];
  $city = $_POST['city'];
  $email = $_POST['email'];   
  $phone=$_POST['phone']; 
  $query =  "INSERT INTO student(rollno,name,sex,city,email,phone) VALUES('" . $rollno . "', '" . $name . "', '" . $sex . "', '" . $city. "', '" . $email . "','".$phone."' )";
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
  <title> addStudent </title>
  <link rel="stylesheet" href="addcustomer.css">
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
      <h1>Add Student info</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="flex-container">
            <div> 
            <h3>Student RollNO:</h3>  
            <input type="text" placeholder="enter Roll" class="field" name="rollno" required>
            </div>
            <div></div>             
        </div>   
        <div class="flex-container">
        
            <div> 
                <h3>Student Name</h3>
            <input type="text" placeholder="enter name" class="field" name="name" required> 
            </div>
    
            <div> 
                <h3>Sex</h3>
                <input type="text" placeholder="enter sex- male/female " class="field" name="sex" required> 
            </div>
            
        </div>    
    
        <div class="flex-container">
            
            <div> 
            <h3>city/</h3>
            <input type="text" placeholder="enter city " class="field" name="city" required>             
            </div>

            <div>  </div>    
        </div>

        <div class="flex-container">            
            <div> 
            <h3>Email id:</h3>  
            <input type="text" placeholder="enter email id" class="field" name="email" required>
            </div>
            <div>     
            </div>             
        </div>  

  <div class="flex-container">
            
            <div> 
            <h3>Phone No:</h3>
            <input type="text" placeholder="enter phone " class="field" name="phone" required>             
            </div>

            <div>  </div>    
        </div>          
         <div class="b">
         <input  type="submit" value="Add" />
        </div>
      </form>   
    </div>
  </center>
</body>
</html>