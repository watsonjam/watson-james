<?php 

include 'hed.php';

  if (isset($_SESSION['username'])) 
	{ 
 	?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.big{
			height: 600px;
			float: right;
			width: 1280px;
			margin-top: -600px;
		}
		.fomu{
		 			border-radius: 4px;
		 			border:1px solid black ;
		 			width: 50%;
		 			margin-top: -30px;
		 			padding: 20px;
		 			
		 		}
		 		.fomu2{
		 			border-radius: 4px;
		 			border:1px solid black ;
		 			width: 50%;
		 			margin-top: 10px;
		 			padding: 20px;
		 			display: none;
		 		}
		 		
		 		span{
				float: left;
				display: block;
				margin: 3px;
				font-size: 20px;
			}
			    input{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 16px;
				height: 30px;
				padding: 5px 10px;
			}
			.btn{
				background: #5F9EA0;
				color: white;
				border-radius: 5px;
				padding: 10px;
				margin-top: 10px;
				font-size: 15px;
				cursor: pointer;
			}
			.btn1{
background: #5F9EA0;
				color: white;
				border-radius: 5px;
				padding: 10px;
				margin-top: 10px;
				font-size: 13px;
				cursor: pointer;
				color: black;
			}
			.btn2{
				background: #5F9EA0;
				color: white;
				border-radius: 5px;
				padding: 10px;
				margin-top: 10px;
				font-size: 13px;
				cursor: pointer;
				display: none;

			}
			.btn:hover{
				background: pink;
				transition: 0.9sec;
			}
			.result{
				border-radius: 5px;
				color: #3c763d;
				text-align: center;
				background: #dff0d8;
				border:1px solid #3c763d;
				width: 50%;
				margin-top: 8px;
			}
	</style>
</head>
<body>
	<?php include 'alumnside'; ?>
<div class="big">
	<div class="fomu" >
		<?php include 'server.php'; 
		$jam= $_SESSION['username'];
		 	$jav= "SELECT * FROM alumn WHERE username = '$jam'";
		 	$july=mysqli_query($conne,$jav);
		 	$frnk=mysqli_num_rows($july);
		 	if ($frnk > 0) {
		 		$jack=mysqli_fetch_array($july);
		 	}
		?>
		 			<form method="POST" action="">
		 				<div style="border:1px solid silver; text-align: center;">MY PROFILE</div>
		 				<span><b>ID</b></span>
		 			<div>	<input type="text" name="id" value="<?php echo $jack['id'] ?>";  disabled></div>
		 				<span><b>USERNAME<b/></span>
		 			<div>	<input type="text" name="name" value="<?php echo $jack['username'] ?>"></div>
		 			<span><b>Enrolment year<b/></span>
		 			<div>	<input type="text" name="email" value="<?php echo $jack['enrolyear'] ?>" ></div>
		 			<span><b>Graduation year<b/></span>
		 			<div>	<input type="text" name="email" value="<?php echo $jack['graduyear'] ?>" ></div>
		 			<span><b>Division<b/></span>
		 			<div>	<input type="text" name="email" value="<?php echo $jack['division'] ?>" ></div>
		 			<span><b>Current Occupation<b/></span>
		 			<div>	<input type="text" name="email" value="<?php echo $jack['occupation'] ?>"></div>
		 				<button class="btn" name="save">SAVE CHANGES</button>
		 			</form>
		 		</div>
	
</div>
<?php include 'footer.php'; ?>

</body>
</html>
<?php } 
else {
	echo "<script>alert('u need to login');.window.location.href='alumn.php';<script/>";
}
 ?>