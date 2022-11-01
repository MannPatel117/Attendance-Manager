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

        .footer {
            position: fixed;
            text-align: center;
            background-color: black;
            padding: 3px;
            color: white;
            bottom: 0;
            left: 0;
            width: 100%;
        }
	</style>
	<body class = "alert-info">

        <div class=centre>
            
            <ul class="navbar">
                <li><a href="main.php">Home</a></li>
                <li><a href="index.php">Student login</a> </li> 
                <li><a href="data.php">Records</a></li>
                <li><a href=" #">Admin login</a></li>
                <li><a href="#">About Us</a></li>
            </ul>

        </div>
        <div class="container-fluid">
            <a href="index.php">
                <img src="data:image/jpeg;base64,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" alt="studentLogin" width="140px" height="140px">
            </a>
            <br> Student Login
        </div>
        <div class="footer">
            Made By: BAM x K
        </div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>