<?php 

include 'admin.php';

  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.css">
	<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
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
		.big{
			height: 600px;
			float: right;
			width: 1280px;
			margin-top: -600px;
		}
		.picha{
			height: 450px;
			width: 950px;
			margin-top: -40px;
			background-image: url(images/mzu1.jpeg);
	  		animation: slide 20s infinite;
		}
			@keyframes slide{
	  		25%{
	  			background-image: url(images/mzu3.jpg);
	  			height: 400px;
	  		}
	  		50%{
	  			background-image: url(images/logo.png);
	  		}
	  		75%{
	  			background-image: url(images/mzu6.jpg);
	  		}
	  		100%{
	  			background-image: url(images/mzu2.jpeg);
	  		}
	  	}
	</style>
</head>
<body>
	<div class="boy">
		<ul>
			<form action="index.php" method="POST">
				<button name="staff"><li><i class="fa fa-home"></i>&nbsp;HOME</li></button>
				<button name="my"><li><i class="fa fa-phone"></i>&nbsp;<a style="text-decoration: none;color: white; cursor: pointer;" href="contact.php">CONTACT US</a></li></button>
				<button name="my"><li><i class="fa fa-user"></i>&nbsp;<a style="text-decoration: none;color: white;" href="alumn.php">ALUMNI</a></li></button>
				<button name="cs"><li><i class="fas fa-question-circle"></i>&nbsp;<a href="about.php" style="text-decoration: none; color: white;">ABOUT</a> </li></button>
				<button name="mu"><li><i class="fa fa-user-plus"></i>&nbsp;<a style="text-decoration: none;color: white;" href="register.php">REGISTER</a></li></button>
				
				<button name="my"><li><i class="fa fa-user"></i>&nbsp;<a style="text-decoration: none;color: white;" href="staff.php">STAFF</a></li></button>
				
				
				
			</form>
		</ul>	
	</div>	
	<div class="big">
		<div class="picha">
		</div>
		<div><h1 style="font-style: italic;">The mzumbe official website</h1>
			<p style="font-family: fantasy;">welcome to reliable site of mzumbe secondary school that provides your with freshiest information about us!</p><br>
			<div id="down" style="height: 25px; cursor: pointer; width: 150px; border: 1px solid black;" ><h3 align="center">Read more <i class="fas fa-caret-down" style="margin-left: 3px; cursor: pointer;" id="down" ></i></h3> </div>
			<div style="height: 84px; width: 900px;  border: 1px solid black; margin-top: 5px; display:none; " id="jam"><p style="margin-left: 14px; font-family: cursive;">mzumbe secondary school is located at morogoro region 25km from msavu bus terminal, with P.O.BOX of 213.<i class="fas fa-times" id="times" style="float: right; margin-right: 15px; font-size: 22px; cursor: pointer;"></i><br> its also one among special school in tanzania. welcome to the home of exellence </p><br><a href="https://mopawa.com/mzumbe-secondary-school-necta-results/" style="text-decoration: none; color: green;cursor: pointer;">&nbsp;&nbsp;<b> click here for previous examination results</b></a> </div>
		</div>

		
	
		
	</div>

	<?php include 'footer.php'; ?>

</body>
</html>
	<script type="text/javascript">
			$("#down").click(function()
			{
				
				$("#jam").show(1500);
			} );

			$("#times").click(function()
			{
				$("#jam").hide(1500);
				
			} );
		</script>



