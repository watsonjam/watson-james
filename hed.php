<?php
session_start();	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="boostrap/css/boostrap.css">
	<title></title>
	<style type="text/css">
		*{
			margin: 0px;
		}
		b{
			text-transform: capitalize;
		}
	</style>
</head>
<body>
	<div style="background: silver;color: black; height: 100px;">
		<div>
		<img src="images/logo.png" height="90" width="104" style="margin-left: 7px; margin-top: 2px;">
		<h1 style="margin-left: 113px; margin-top: -80px;">Mzumbe secondary school</h1>
		<h3 style="color:#CD0E02; margin-left: 123px;">determination is our motto</h3>
		</div>
		<div  style="float: right; margin-top: -30px;">

			<button  style="padding: 10px; height: 50px; width: 90px;border-radius: 5px;"><a style="text-decoration: none;color: red;" href="alumn.php">LOGOUT</a></button>
		</div>
		
	</div>
	<div>
			<?php if (isset($_SESSION['username'])):?>
		<h3 style="float: right; margin-right: 110px; margin-top: -30px;"><i class="fa fa-user"></i>&nbsp; WELCOME <b style="color: blue" > <?php echo $_SESSION['username'];?> </b> </h3>
	<?php endif ?>
		</div>
</body>
</html>