<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Simple Attendance Record System</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<style>
		
		body {
        margin: 0px;
        padding: 0px;
        background: url("main-bg.png");
        background-size: 1540px 730px;
        font-family: 'Bebas Neue', cursive;
            }
        .container-fluid{
        padding: 12px 97px;
        border: 3px solid white;
        border-radius: 25px;
        margin: -8% auto;
        width: 16%;
        color: white;
        text-align:center ;
        display: block;

        }
        .navbar {
        display: inline-block;
                }

        .navbar li {
        display: inline-block;

            }

        .navbar li a {
        color: rgb(0, 0, 0);
        text-decoration: none;
        padding: 20px 15px;
        font-weight:bold;
        
        }

        .centre {
        border: 2px solid white;
        border-radius: 10px;
        background-color: lightskyblue;
        color: rgb(0, 0, 0);
        display: block;
        width: 38%;
        margin: 12% auto;
        text-decoration: none;
    }
	</style>
	<body class = "alert-info">

        <div class=centre>
            
            <ul class="navbar">
                <li><a href=" #">Home</a></li>
                <li><a href="index.php">Student login</a> </li> 
                <li><a href="data.php">Records</a></li>
                <li><a href=" #">Admin login</a></li>
                <li><a href="#">About Us</a></li>
            </ul>

        </div>
		
		<div class = "container-fluid">
			
				<h2 class="attendance">Attendance Login</h2>
				<div id = "result"></div>
				<form enctype = "multipart/form-data" id="loginFrm" method="POST">
					<div class = "form-group">
						<label>Student ID : &nbsp; </label>
						<input type = "text" id = "student" class = "form-control" required = "required"/>
						<div id = "error"></div>
						<br />
						<button type = "button" id = "login" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-login"></span>Login</button>
					</div>
				</form>
			</div>
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>