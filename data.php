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
        background: url(main-bg.png);
        background-size: 1540px 730px;
        font-family: 'Bebas Neue', cursive;
        }
        
        .container-fluid{
        padding: 7px 120px;
        border: 3px solid white;
        border-radius: 25px;
        margin: -11% auto;
        width: 20%;
        color: white;
        text-align:left ;
        display: block;
        
        }
        .data{
            display: inline-block;
            vertical-align: middle;
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
        <div class="container-fluid">
            <div class="data"> 
            <h2>See full data</h2>
            <form method="post" action="records.php">
                <input type="submit" value="Show">
            </form></div>

            <h2>OR</h2>

            <h2>See a single record</h2>
            <form method="post" action="single.php">
                Student No : <input type="text" name="student_no"><br>
                <input type="submit" value="Show">
                
            </form>
        </div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>