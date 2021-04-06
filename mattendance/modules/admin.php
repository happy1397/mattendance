<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
 
<body>
<center>
<header>
<!-- <input  type="button" value="Back" class="btn2" onclick="window.location.href='index.php';"/>
</header> -->
    <nav>
        <img class="img" height="200px" width="310px" alt="" src="images/logo.svg">
    </nav>  
</header>
<div class="flex-container">
<input  type="button" value="Back" class="btn2" onclick="window.location.href='/mattendance/index.php';"/>
    <div>
        <div class="bg">
            <img height="600px" width="600px" src="adminlogin.svg">
        </div>
    </div>
    <div>
        <div class="card">
            <div class="container">
                <form action="adminlogin.php" method="post">
                    <div class="login-box">
                        <h1>Admin Login</h1>
            
                        <div class="textbox">
                            <h3>Name</h3>
                            <input type="text" placeholder=" enter Admin name"
                                    name="adminname" value="">
                        </div>
            
                        <div class="textbox">
                            <h3> password</h3>
                            <input type="password" placeholder="enter Password"
                                    name="password" value="">
                        </div>
                            <br>
                        <input class="btn" type="submit"
                                name="login" value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</center>
</body>
 
</html>