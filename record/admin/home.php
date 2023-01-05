<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Admin</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<style>
body {
  font-size: 100%;
}

h1 {
  font-size: 7em;
}
</style>
	</head>
	<body style="background-color:#000033">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					
			
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i ></i> <?php echo htmlentities($admin_name)?></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			
				<ul class = "nav navbar-nav navbar-right">
						<li><h2><a style="color: blue" href = "admin.php"> Start</a></h2></li>
			</ul>
			<br />
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

           <center> <table>				
						<tr style="background-color:#000033;color:#d9ffff;">	
							<th><h1>Students Attendance System</h1></th>
							<th class="hidden-print"></th>
						</tr>				
</table></center>
			<br />
			<br />	
			<br />	
			</div>
		</div>
	
			
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>