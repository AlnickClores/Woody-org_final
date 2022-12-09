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
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
</head>
<body>
    <div class="reg"><h1>REGISTRATION</h1></div>
    
    <div class="container">
        <form action="summary.php" method="post" target="_blank">
            <h1>Sign Up</h1>
            <div class="innerContainer">
                <div class="info">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter your First Name" name="FirstName" required>
                </div>
                <div class="info">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your Last Name" name="LastName" required>
                </div>
                <div class="info">
                    <span class="details">Username</span>
                    <input type="text" maxlength="15" placeholder="Enter your Username" name="Username" required>
                </div>
                <div class="info">
                    <span class="details">Password</span>
                    <input type="password" maxlength="30" placeholder="Enter your Password" name="Password" required>
                </div>
                <div class="info">
                    <span class="details">E-mail</span>
                    <input type="email" placeholder="(Optional)" name="Email">
                </div>
                <div class="info">
                    <span class="details">Age</span>
                    <input type="number" placeholder="Enter your Age" name="Age">
                </div>
            </div>
            <div class="innerContainer2">
                <span>Gender</span>
                <div class="info2">
                    <input type="radio" name="Gender" value="Male">&nbsp;Male
                    <input type="radio" name="Gender" value="Female">&nbsp;Female
                </div>
            </div>
            <button class="btn" type="submit">Register</button>
        </form>
    </div>
</body>
</html>