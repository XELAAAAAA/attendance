<!DOCTYPE html>
<html lang = "eng">
	<head>
	
		<meta charset = "utf-8" />
		<title> LOGOUT</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body style="background-color:#000033">
	<center style="background-color:  #ff4d4d;"><h1 style="color:#000033"><b> Daily Attendance </b></h1></center>
	<center ><h1 style="color:#d9ffff"><b>Logout</b></h1></center>


				</div>
			</div>
		</nav>
		<div class = "container-fluid">	
			<br />
			<br />
			<div class = "col-lg-3" ></div>
			<div class = "col-lg-6 well" style="background-color: #d9ffff;">
			<h4  class = "nav navbar-nav navbar-right"><a style="color: blue" href = "index.php"><span class="glyphicon glyphicon-refresh">Login</span></a></h4>

				<br />
				<div id = "result"></div>
				<br />
				<form enctype = "multipart/form-data">
					<div class = "form-group">
						
						<h3><label>Student Id:</label></h3>
						<input type = "text" id = "student" class = "form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<button type = "button" id = "logout" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-login"></span>Submit</button>
					</div>
				</form>
			</div>
			</div>
			
		</div>	
		</div>	
	</body>
    <script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
		<script src = "js/out.js"></script>
</html>