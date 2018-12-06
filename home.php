<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">

</head>
<body>
<div id="main">
	<h1 style="background-color: #6495ed; color: white;"><?php echo $_SESSION['name'];?>-online</h1>
 <div class="output">
			
				<div>
					<?php //include 'myn.php';?>

					</div>
			
		</div> 
		<form method="post" action="send.php">
			<textarea name="msg" placeholder="Type to send message..." class="form-control"cols=50 rows=10></textarea><br>
			<input type="submit" value="Send" name="">
		</form>
		<br>
		<form action="logout.php">
			<input style="width: 100px; background-color: #6495ed; color: white; font-size: 20px;" type="submit" value="Logout" name="">
		</form>
</div>
</body>
</html> 