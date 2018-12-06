<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="main">
        <div id="info">
            <h2>Login Here</h2>
                <form method="post" action="login.php">
                	<label><b>Username</b></label>
                	<input type="text" name="uname" placeholder="Username"><br><br>
                	<label><b>Password</b></label>
                	<input type="Password" name="pass" placeholder="Password"><br><br>

                	<button style="background-color: #6495ed; color: white;" type="submit">Login</button>
                    <h2>Don't have an account sign up<a href="register.php"> here</a></h2>

                </form>
        </div>
    </div>
</body>
</html>