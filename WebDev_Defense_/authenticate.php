<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'AnreDeWoodydisney35';
$DATABASE_NAME = 'db_woody_users';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['Username'], $_POST['Password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT ID, Password, Firstname, Lastname, Email, Age, Gender FROM tbl_users WHERE Username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['Username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($ID, $Password, $Firstname, $Lastname, $Email, $Age, $Gender);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if ($_POST['Password'] === $Password) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['userN'] = $_POST['Username'];
            $_SESSION['id'] = $ID;
            $_SESSION['Firstname'] = $_POST['Firstname'];
            $_SESSION['Lastname'] = $_POST['Lastname'];
            $_SESSION['Email'] = $_POST['Email'];
            $_SESSION['Age'] = $_POST['Age'];
            $_SESSION['Gender'] = $_POST['Gender'];

            header("Location: profile.php");
        } else {
            // Incorrect password
            header("Location: login_page.php?error=Incorrect Username or Password");
        }
    } else {
        // Incorrect username
        header("Location: login_page.php?error=Incorrect Username or Password");
    }

	$stmt->close();
}

?>