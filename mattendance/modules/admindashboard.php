<html lang="en" dir="ltr">

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="admindashboard.css">
</head>

<body class="bg">
  <center>
    <header>
      <nav>
        <img class="img" height="300px" width="300px" alt="" src="images/logo.svg">
        <div class="b">
        <input type="button" value="Log out" onclick="window.location.href='admin.php';"/>
        </div>
      </nav>
    </header>
 
    <!-- <div class="card">
      <div class="container">
        <h1>Admin Dashboard</h1>
      </div>
    </div> -->
  
    <div class="card">
      <h3> Dashboard </h3>
      <!-- <div class="flex-container">
     
        <div> 
          <img src="customer.svg" height="150px" width="150px">
        </div>
  
        <div> 
          <img src="pawprints.svg" height="140px" width="150">
        </div>
  
        <div> 
          <img src="supplies.svg" height="140px" width="150px">
        </div>
        
        <div> 
          <img src="box.svg" height="140px" width="160px">
        </div>
      </div>    -->
    <div class="flex-container">
        
      <div> 
        <input type="button" value="Add Faculty" class="btn"  onclick="window.location.href='addfaculty.php';"/> 
      </div>      
    
      <div> 
        <input type="button" value="view Faculty" class="btn" onclick="window.location.href='viewfaculty.php';"/> 
      </div>
   
      <div> <input type="submit" value="assign student" class="btn" onclick="window.location.href='assignstudenttosubject.php';"/> </div>
    
    </div>    

    <br>

    <div class="flex-container">

    <div> 
        <input type="button" value="Add Student" class="btn"  onclick="window.location.href='addstudent.php';"/> 
      </div>
     

       <div> 
        <input type="button" value="view student" class="btn" onclick="window.location.href='viewstudent.php';"/> 
      </div>
      <div> <input type="submit" value="assign faculty" class="btn" onclick="window.location.href='assignfacultytosubject.php';"/> </div>
     

    </div>

      <br>

    <div class="flex-container">     
     
    <div> 
        <input type="button" value="Add Subject" class="btn" onclick="window.location.href='addsubject.php';"/> 
      </div>

      <div> 
        <input type="button" value="view subject" class="btn" onclick="window.location.href='viewsubject.php';"/> 
      </div>
  

      <div> </div>

     

    </div>


    </div>
  </center>
</body>
</html>