<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.boy{
			background-color: aqua;
			width: 300px;
			height: 680px;
		}
		.boy button{
			margin-top: 5px;
			font-size: 20px;
			border-radius: 14px;
			background-color: silver;
			padding: 10px;
		}
		
		
		.boy button li:hover{
			background-color:pink;
			transition:0.9s;
		}
		.boy ul button li{
			padding-bottom: 20px;
			font-size: 20px;
			border-bottom: 1px solid black;
			color: white;
			padding-top: 20px;
			
			width: 200px;
			list-style: none;
			background-color: black;
			min-height: 100%;
		}
		
	</style>
</head>
<body>
<div class="boy">
		<ul>
			<form action="index.php" method="POST">
				<button name="staff"><li><i class="fa fa-home"></i>&nbsp;HOME</li></button>
				<button name="my"><li><i class="fa fa-phone"></i>&nbsp;<a style="text-decoration: none;color: white;" href="contact.php">CONTACT US</a></li></button>
				<button name="my"><li><i class="fa fa-user-friends"></i>&nbsp;<a style="text-decoration: none;color: white;" href="alumn.php">ALUMNI</a></li></button>
				<button name="cs"><li><i class="fas fa-question-circle"></i>&nbsp;<a href="about.php" style="text-decoration: none; color: white;">ABOUT</a> </li></button>
				<button name="mu"><li><i class="fa fa-user-plus"></i>&nbsp;<a style="text-decoration: none;color: white;" href="register.php">REGISTER</a></li></button>

				<button name="my"><li><i class="fa fa-user"></i>&nbsp;<a style="text-decoration: none;color: white;" href="staff.php">STAFF</a></li></button>
				
			</form>
		</ul>	
	</div>
	
</body>
</html>