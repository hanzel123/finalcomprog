<?php 
session_start();
session_destroy();
echo "<center>You have been logged out</center>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container{
			columns: center;
		}
	</style>
</head>
<style>
body {
  background-image: url("giphy (1).gif");
  background-size: cover;
  background-attachment: fixed;


}
</style>
<body>
<center>

	<div class="container"> <label></label><a href="studentlogin.php">Home</a> </div>
	</center>
</body>
</html>
