<?php 
// We need to use sessions, so you should always start sessions using the below code.
session_start();

$Username = $_POST["Username"];
$LastName = $_POST["LastName"];
$FirstName = $_POST["FirstName"];
$Password  = $_POST["Password"];
$Email = $_POST["Email"];
$Age = $_POST["Age"];
$Gender = $_POST["Gender"];

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login_page.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'AnreDeWoodydisney35';
$DATABASE_NAME = 'db_woody_users';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT Email, Password, FirstName, LastName, Age, Gender FROM tbl_users WHERE ID = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['ID']);
$stmt->execute();
$stmt->bind_result($Email, $Password, $FirstName, $LastName, $Age, $Gender);
$stmt->fetch();
$stmt->close();

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
    <link rel="stylesheet" href="profile.css">
    <title>Profile Page</title>
</head>
<body>
    
    <header>
    <div class="logo">
            <a href="Homepage.html"><img src="images/logo_nobg.png"></a>
		</div>
            <ul class="logout">
                <li>
                    <a href="logout.php"><button class="btnNav">Log Out</button></a>
                </li>
            </ul>
	</header>

    <section>
    <div class="welcome">
    <h1><span class=welc>Hello</span>,
    <?php
        echo $_SESSION['userN'];
    ?>
    </h1>
    </div>

    <div class="php">
    <?php
        echo "<span>Name: </span>" . $_SESSION['Firstname'] . "<span> </span>" . $_SESSION['Lastname'];
        echo "<br>";
        echo "<span>Password: </span>" . md5($Password);
        echo "<br>";
        echo "<span>E-mail: </span>" . $_SESSION['Email'];
        echo "<br>";
        echo "<span>Age: </span>" . $_SESSION['Age'];
        echo "<br>";
        echo "<span>Gender: </span>" . $_SESSION['Gender'];
        echo "<br>";
    ?>

    </div>
    </section>
</body>
</html>