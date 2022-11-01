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
        padding: 12px 150px;
        border: 3px solid white;
        border-radius: 25px;
        margin: -10% auto;
        width: 20%;
        color: white;
        text-align:left ;
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
        background-color:lightskyblue;
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
            <table>
                <tr>
                <th>ID</th><td>
                    <th>No.</th></td><td>
                    <th>First Name</th></td><td>
                    <th>Last Name</th></td><td>
                    <th>Course</th></td><td>
                    <th>Section</th></td><td>
                    <th>Time</th></td><td>
                    <th>Date</th></td>
                </tr>
                <style>
                th{color: cyan;}</style>

                <?php        
                    $conn = mysqli_connect("localhost", "root", "", "db_sars");
                    $sql = "SELECT s.*, t.time, t.date FROM student s inner join time t on s.student_no=t.student_no";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0)
                    {
                        while($row = $result -> fetch_assoc())
                        {
                            echo "<tr><td>".$row["student_id"]."</td><td></td><td>".$row["student_no"]."</td><td></td><td>".$row["firstname"]."</td><td></td><td>".$row["lastname"]."</td><td></td><td>".$row["course"]."</td><td></td><td>".$row["section"]."</td><td></td><td>".$row["time"]."</td><td></td><td>".$row["date"]."</td></tr>";
                        }
                    }
                    else
                    {
                        echo "No Results";
                    }
                    
                    $conn->close()
                ?>
            </table>
        </div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>