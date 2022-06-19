 <?php 
include 'admin.php';
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
		form{
				border: 1px solid silver;
				
				padding: 20px;
				height: auto;
				width: 40%;
				border-radius: 0px 0px 10px 10px;

			}
			
			.header{
			background: #5F9EA0;
			color: white;
			border-radius: 10px 10px 0px 0px;
			 text-align: center;
			 width: 40%;
			 border: 1px solid #B0C4DE;
			 padding: 20px;
			 margin-top: 20px;
			 height: 50px;

		}
		.input label {
				float: left;
				display: block;
				margin: 3px;
			}
			.jinput label{
				float: left;
				display: block;
				margin: 3px;
			}
			.winput label{
				float: left;
				display: block;
				margin: 3px;
			}
			.input input{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 17px;
				height: 30px;
				padding: 5px 10px;
			}
			.jinput input{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 17px;
				height: 30px;
				padding: 5px 10px;
			}
			.winput input{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 17px;
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
			}
			.input span{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 14px;
				height: 10px;
				padding: 5px 10px;
				
			}
			.jinput span{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 14px;
				height: 10px;
				padding: 5px 10px;
				margin-top: 20px;
			}
			.winput span{
				display: block;
				font-size: 15px;
				margin-left: 80;
				background-color: #2d2c87;
				color:#fff;
				margin-top: 4px;
				padding: 5px;
				width: 180px;
				left: 105%;
				top: 10px;
			}
	</style>
</head>
<body>
<?php 
			include 'server.php';
			if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$pass=$_POST['password_1'];
	$pssd=md5($pass);
	if($username!=null && $pssd!=null){
		$query="SELECT * FROM watumiaji WHERE uname='$username' AND password= '$pssd'";
		$sql=mysqli_query($conne, $query);
		$row= mysqli_fetch_array($sql);
		if (!empty($row)) {
			
			$_SESSION['username']=$row['uname'];
			
					
					echo "<script>window.location.href='bio.php';</script>";
		}
		else {
			echo "<script>alert('check username or password');window.location.href='staff.php';</script>";
		}
	}
	else {
			echo "<script>alert('not field');window.location.href='staff.php';</script>";
		}
	
		
		}
		
			?>

	<?php
	include 'aside.php'; ?>
	 <div class="big">
	 	<center>
	 	<div class="header">
		<h2>STAFF LOGIN FORM</h2>	
	</div></center>
	<center>
	<form method="POST" action="staff.php">
		
		<div class="input">
			<label>USERNAME</label>
			<input type="text" name="username" placeholder="username">
			
		</div>
		<div class="input">
			<label>PASSWORD</label>
			<input type="password" name="password_1" placeholder="password">
		</div>	
		
		<div class="input">
			<button type="submit" class="btn" name="login" >LOGIN</button>
		</div>
		<p>need to have a staff account so to get into staff page? <label id="logn" style="text-decoration: none;"> <a style="text-decoration: none;" href="register.php">Sign up</a> </label></p>
		
	</form>
	</center>
</div>
	<?php include 'footer.php'; ?>
	 

	

</body>
</html>