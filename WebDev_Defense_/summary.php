<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

session_start();

$con = mysqli_connect('localhost', 'root', 'AnreDeWoodydisney35','db_woody_users');

// get the post records
$Username = $_POST["Username"];
$LastName = $_POST["LastName"];
$FirstName = $_POST["FirstName"];
$Password  = $_POST["Password"];
$Email = $_POST["Email"];
$Age = $_POST["Age"];
$Gender = $_POST["Gender"];

// database insert SQL code
$sql = "INSERT INTO tbl_users (ID, Username, LastName, FirstName, Password, Email, Age, Gender) VALUES ('0', '$Username', '$LastName', '$FirstName', '$Password', '$Email', '$Age', '$Gender')";

// insert in database 
$rs = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="73436_woody_icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="summary.css">
    <title>Summary</title>
</head>
<body>
    
    <header>
    <div class="logo">
            <a href="Homepage.html"><img src="images/logo_nobg.png"></a>
		</div>
	</header>

    <section>
    <div class="welcome">
    <h1><span class=welc>Welcome</span>,
    <?php
        	$userName = $_POST["Username"];
            echo $userName;
    ?>
    </h1>
    </div>


    <div class="php">

    <?php
    $lastName = $_POST["LastName"];
    echo "<span>Last Name: </span>"  . $LastName;
    echo "<br>";

    $firstName = $_POST["FirstName"];
	echo "<span>First Name: </span>" . $FirstName;
	echo "<br>";
	
	$passWord  = $_POST["Password"];
	echo "<span>Password: </span>" . md5($Password);
	echo "<br>";

    $email = $_POST["Email"];
	echo "<span>E-mail: </span>" . $Email;
	echo "<br>";

    $age = $_POST["Age"];
	echo "<span>Age: </span>" . $Age;
	echo "<br>";
	
	$gender = $_POST["Gender"];
	echo "<span>Gender: </span>" . $Gender;
	echo "<br>";
    ?>

    </div>
    </section>
    
    <footer>
        <button class="btn"><a href="aboutus.html">Learn More About Us</a></button>
        <p>Woody.Org © All Rights Reserved. 2022</p>
    </footer> 
</body>
</html>