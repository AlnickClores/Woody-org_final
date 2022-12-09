<!--
<!DOCTYPE html>
<html lang="en" >
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="73436_woody_icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="login_page.css" rel="stylesheet">

<div class="box-form">
	<div class="left">
        <img src="images/wazzup.gif" alt="">
		<div class="overlay">
            <img src="images//logo_nobg.png">
		</div>
	</div>
	
	
	<div class="right">
        <form action="authenticate.php" method="post">
           <h5>Login</h5>
            <pre>                                           </pre> 
            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>
        
            <?php } ?>
            <div class="inputs">
                <input type="text" placeholder="Username" name="Username" required>
                <br>
                <input type="password" placeholder="Password" name="Password" required>
            </div>
                
            <br>

            <button class="learn-more">
                <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
                </span>
                <span class="button-text">Log In</span>
            </button>
                
            <br><br>
            <div class="remember-me--forget-password">
                <a href="Homepage.html"><p>Enter as Guest</p></a>
                <p>Don't have an account? <a href="registration.php">Create Your Account</a></p>
            </div>
                
        </form>

	</div>
	
</div>
  
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login_page.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
                <img src="images/logo_nobg.png">
					<button><a href="registration.php">Sign up</a></button>
                    <a class="guest" href="Homepage.html"><p>Enter as Guest</p></a>
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
			</div>

			<div class="login">
				<form action="authenticate.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="Username" placeholder="Username" required="">
					<input type="password" name="Password" placeholder="Password" required="">
					<button>Login</button>
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
				</form>
			</div>
	</div>
</body>
</html>
