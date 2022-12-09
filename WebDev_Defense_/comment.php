<?php
    date_default_timezone_set('Asia/Manila');
    include 'comment_con.php';
    include 'comment_inc.php';
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comment.css">
    <title>Comment</title>
</head>
<body>
<header>
		<div class="logo">
            <a href="Homepage.html"><img src="images/logo_nobg.png"></a>
		</div>
		<ul class="navigations">
			<li><a href="selfdefense.html">Self Defense</a></li>
            <li><a href="equipments.html">Equipments</a></li>
			<li><a href="hotline.html">Emergency Hotlines</a></li>
            <li><a href="comment.php">Forums</a></li>
            <li><a href="profile.php">Profile</a></li>
		</ul>
		<ul class="registration">
            <li><a href="login_page.php"><button class="btnNav">Sign In</button></a></li>
            <li><a href="registration.php"><button class="btnNav">Sign Up</button></a></li>
        </ul>
	</header>

   <?php
        if(isset($_SESSION['id'])){
            echo"
            <div class='title'>
                <h1>HELP EACH OTHER TO DEFEND OURSELVES</h1>
            </div>
            <div class='break'>
               <hr>
            </div>
            <div class='container'>
            <form method='POST' action='".setComments($conn)."'>
                <input type='hidden' name='uid' value='".$_SESSION['id']."'>
                <input type='hidden' name='date' value='".date('Y-m-d g:i')."'>
            <div class='outerTextArea'>
                <span class='username'>$_SESSION[userN]</span><br>
                <textarea name='comment' placeholder='Write your comment' required></textarea><br>
                <button type='submit' name='commentSubmit' class='commentButton'>Comment</button>
            </div>
            </form>
        <h3>Comments:</h3>";
        getComments($conn);
        }
        else{
            echo"<div class='warning'>
                <h1>You need an account to view Forums.</h1><br>
                <a href='registration.php'>Register Now</a><br>
                <a href='login_page.php'>Already have an account?</a>
            </div>";
        }
    ?>

</body>
</html>