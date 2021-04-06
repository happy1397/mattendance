<?php
	session_start();
?>

<?php if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1) : ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
							<a href="index.php">
								<img src="images/logosmall.svg" alt="mAttendance" height="40px" width="200px">
							</a>
					</li>
					<li>
							<a href="index.php?page=dashboard">Dashboard</a>
					</li>
					<li>
							<a href="index.php">Take Attendance</a>
					</li>
					<li>
							<a href="index.php?page=studentinfo">Assigned to You</a>
					</li>
					<li>
							<a href="index.php?page=reports">Reports</a>
					</li>
					<li> 
							<a href="index.php?page=updatestudent">update student details</a>
					</li>
					<li>
							<a href="index.php?page=help">Help</a>
					</li>
					<li>
							<a href="index.php?page=logout">Logout</a>
					</li>
			</ul>
	</nav>
<?php else: ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
							<a href="index.php">
								<img src="images/logosmall.svg" alt="mAttendance" height="40px" width="200px">
							</a>
					</li>
					<li>
							<a href="index.php">Login</a>
					</li>
					<li>
							<a href="http://localhost/mattendance/modules/admin.php">Admin login</a>
					</li>
			</ul>
	</nav>
<?php endif; ?>