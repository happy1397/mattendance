<?php
$conn = new mysqli("localhost", "root", "", "mattendance");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $uname = $_POST['uname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $sex = $_POST['sex'];
  $phone= $_POST["phone"];    
  $city=$_POST["city"];
  $status=1;
  $query =  "INSERT INTO user(uname,password,email,sex,phone,city,status) VALUES('" . $uname . "', '" . $password . "', '" . $email . "', '" . $sex . "', '" . $phone . "','".$city."','".$status."' )";
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
  <title> addFaculty</title>
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
      <h1>Add Faculty info</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="flex-container">
            <div> 
            <h3>Name</h3>  
            <input type="text" placeholder="enter name" class="field" name="uname" required>
            </div>
            <div></div>             
        </div>   
        <div class="flex-container">
        
            <div> 
                <h3>Password</h3>
            <input type="password" placeholder="enter password" class="field" name="password" required> 
            </div>
    
            <div> 
                <h3>Email</h3>
                <input type="text" placeholder="enter email " class="field" name="email" required> 
            </div>
            
        </div>    
    
        <div class="flex-container">
            
            <div> 
            <h3>Sex</h3>
            <input type="text" placeholder="enter Male / Female" class="field" name="sex" required>             
            </div>

            <div>  </div>    
        </div>

        <div class="flex-container">            
            <div> 
            <h3>Phone</h3>  
            <input type="text" placeholder="enter Phone number" class="field" name="phone" required>
            </div>
            <div>     
            </div>             
        </div>  

    <div class="flex-container">
            
            <div> 
            <h3>City</h3>
            <input type="text" placeholder="enter city" class="field" name="city" required>             
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