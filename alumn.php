<?php 
session_start();
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
		.input select{
				width: 99%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 16px;
				height: 40px;
				padding: 5px 10px;
				margin-top: 5px;
			}
		
		.log{
			display: none;
		}
		body{
			background: #f8f8ff;
			font-size: 120%;
			}
			form{
				border: 1px solid silver;
				background: white;
				padding: 20px;
				height: auto;
				width: 40%;
				border-radius: 0px 0px 10px 10px;

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
			i{
				
				margin-left: 100%;
				position: relative;
				right: 30px;
				top: -30px;
				cursor: pointer;
			}
			.ivalid{
				color: red;
				font-size: 16px;
				
			}
			
		.valid:before {
			font-family: 'Font Awesome 5 Free';font-weight: 900;content: '\f00c';color: green;
		}
		.back{
				background: #5F9EA0;
				color: white;
				border-radius: 10px;
				margin-top: 15px;
				margin-left: 10px;
				
				cursor: pointer;
			}
			.refresh{
				background: green;
				color: white;
				border-radius: 5px;
				cursor: pointer;
			}
	</style>
</head>
<body>
	<?php
include 'server.php';
if (isset($_POST['tuma'])) {
	$username=$_POST['username'];
	$enr=$_POST['enrol'];
	$gra=$_POST['grad'];
	$enhnemu=$_POST['ehn'];
	$ghnnemu=$_POST['ghn'];
	$tch=$_POST['teacher'];
	$dvsn=$_POST['div'];
	$kaz=$_POST['work'];
	$pa=$_POST['password_1'];
	$meil=$_POST['email'];
	$slp=$_POST['adres'];
	$mob=$_POST['namba'];
	$pwd=md5($pa);
	$asd= "INSERT INTO alumn (id, username,enrolyear,graduyear,ehdname,ghdname,ftname,division,occupation,password,email,address,mobile )VALUES(NULL,'$username','$enr','$gra','$enhnemu','$ghnnemu','$tch','$dvsn','$kaz','$pwd','$meil','$slp','$mob')";
	$result=mysqli_query($conne, $asd);
	if ($result) {
		echo "<script>alert('umefanikiwa kusajili');window.location.href='alumn.php';</script>";
	}
	else{
		echo "<script>alert('ujafanikiwa kusajili');window.location.href='alumn.php';</script>";
	}
	
}
 ?>
	<div class="bac"><button class="back"><a style="text-decoration: none; color: white;" href="index.php">BACK&nbsp;&nbsp;<i class="fa fa-arrow-left" style="margin-top: 15px; margin-right: 45px;"></i></a></button></div>
		 
		 		<div style="float: right; margin-right: 20px;"><button class="refresh"><b>REFRESH PAGE<b/><i class="fa fa-redo-alt" style="margin-top: 15px; margin-right: 55px;"></i></button></div>
		<div class="box">
			<div class="tbjoshua">
				
				<center>
	<div class="header" style="height: ">
		<h2>ALUMNI REGISTRATION FORM</h2>	
	</div>
</center>
				<center>
	<form method="POST" action="alumn.php">
		<div class="input">
			<label>USERNAME</label>
			<input type="text" name="username" class="nem" placeholder="username more than 30 character submit button will disappear">	
			<span><div style="border:1px solid grey; margin-left: -7px; font-size: 17px;
				height: 30px; width: 97%; color: red ;">less than 30 character</div></span>
		</div>
		<div class="input">
			<label>ENROLMENT YEAR</label>
			<input type="date" name="enrol" class="nemu">	
		</div>
		<div class="input">
			<label>GRADUATION YEAR</label>
			<input type="date" name="grad" class="nemu">	
		</div>
		<div class="input">
			<select  name="ehn"; value="hey">
			<option>ENROLMENT HEADMASTER NAME</option>
			<option>wenslaus kihongozi</option>
			<option>Robert njau</option>
			</select>
		</div>	
			<div class="input">
			<select  name="ghn">
			<option>GRADUATION HEADMASTER NAME</option>
			<option>wenslaus kihongozi</option>
			<option>Robert njau</option>
			</select>
		</div>	
		<div class="input">
			<label>FAMOUS TEACHER NAME</label>
			<input type="text" name="teacher" class="tc" placeholder="name more than 30 character submit button will disappear">	
			<span><div style="border:1px solid grey; margin-left: -7px; font-size: 17px;
				height: 30px; width: 97%; color: red ;">less than 30 character</div></span>
		</div>
		<div class="input">
			<select  name="div">
			<option>DIVISION</option>
			<option>one</option>
			<option>two</option>
			<option>three</option>
			<option>four</option>
			</select>
		</div>	
		<div class="input">
			<label>CURRENT OCCUPATION</label>
			<input type="text" name="work" class="nemu">	
			<span>less than 20 characters</span>
		</div>
		<div class="jinput">

			<label>PASSWORD</label>
			<input  type="password" name="password_1" class="paswd" placeholder="password"><i id="eye" class="fa fa-eye"></i>
			<span> <div style="border-radius:8px 8px 0px 0px; border:2px solid silver;"><h3 style="color: black;">Password must contain the following:</h3></div>
				<div style="border:1px solid silver; border-radius: 0px 0px 8px 8px;" class="passinfo">
				<div id="lower" class="ivalid"><b>Lower case</b></div>
				<div id="upper" class="ivalid"><b>Upper case</b></div>
			   <div id="number" class="ivalid"><b>contain numbers</b></div>
			   <div id="specs" class="ivalid"><b>contain special character</b></div>
			<div id="character" class="ivalid"><b>Minimum 8 character</b></div>
			</div>
		</span>
		</div>	
		<div class="input">
			<label>EMAIL</label>
			<input type="email" name="email" class="emeil" placeholder="email">	
			<span><div style="border:1px solid grey; margin-left: -7px; font-size: 17px;
				height: 30px; width: 97%; color: red ;">input valid email</div></span>
		</div>
		<div class="input">
			<label>ADDRESS</label>
			<input type="text" name="adres" class="address" placeholder="p.o.box">	
		</div>
		<div class="input">
			<label>MOBILE NUMBER</label>
			<input type="number" name="namba" class="address" placeholder="+255...">	
		</div>
		
		
		
		<div class="input">
			<button type="submit" class="btn" name="tuma" >SUBMIT</button>
		</div>
		<p>Already a memeber? <label id="reg" style="cursor: pointer; color: blue">Sign in here</label></p>
		
	</form>
</center>
				
			</div>
			<?php 
			include 'server.php';
			if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$pass=$_POST['password_1'];
	$pssd=md5($pass);
	if($username!=null && $pssd!=null){
		$query="SELECT * FROM alumn WHERE username='$username' AND password= '$pssd'";
		$sql=mysqli_query($conne, $query);
		$row= mysqli_fetch_array($sql);
		if (!empty($row)) {
			
			$_SESSION['username']=$row['username'];
			$_SESSION['id'] = $data['id'];
					
					echo "<script>window.location.href='aluprofile.php';</script>";
		}
		else {
			echo "<script>alert('check username or password');window.location.href='alumn.php';</script>";
		}
	}
	else {
			echo "<script>alert('not field');window.location.href='alumn.php';</script>";
		}
	
		
		}
		
			?>
			<div class="log">
				
				<center>
	<div class="header">
		<h2>LOGIN FORM</h2>	
	</div>
</center>
<center>
	<form method="POST" action="alumn.php">
		
		<div class="input">
			<label>USERNAME</label>
			<input type="text" name="username" placeholder="username" required >
			
		</div>
		<div class="input">
			<label>PASSWORD</label>
			<input type="password" name="password_1" placeholder="password" required>
		</div>	
		
		<div class="input">
			<button type="submit" class="btn" name="login" >LOGIN</button>
		</div>
		<p>Not yet a memeber? <label id="logn" style="text-decoration: none;">Sign up</label></p>
		
	</form>
</center>

				
			</div>
		
			
		</div>
		<script type="text/javascript">
			$("form span").hide();
			$(".paswd").keyup(errormessage);
			$(".cpaswd").keyup(confmesg);
			$(".emeil").keyup(msg);
			$(".nem").keyup(na);
			$(".tc").keyup(jw);
			


			function validpass() {
				return $(".paswd").val().length > 7 &&  $(".paswd").val().length < 11 &&  $(".paswd").val().match(/[A-Z]/) &&  $(".paswd").val().match(/[a-z]/) &&  $(".paswd").val().match(/[0-9]/) && $(".paswd").val().match(/[?.#*%!_&^$""]/) ;
			}
			function nam(){
				return $(".nem").val().length > 0 && $(".nem").val().length < 30 ;
			}
			function wat(){
				return $(".tc").val().length > 0 && $(".tc").val().length < 30 ;
			}

			function confirm(){
				return $(".cpaswd").val() == $(".paswd").val();
			}
			function mail(){
				return $(".emeil").val().indexOf("@") > 0 && $(".emeil").val().indexOf(".") > 1 &&  !$(".emeil").val().match(/[A-Z]/)  ;
			}
			function errormessage() {
				if (validpass()) {
					$(".jinput").find("span").hide();
					
				}
				else{
					$(".jinput").find("span").show();
					$(".btn").hide();
				}
				if ($(".paswd").val().match(/[A-Z]/)) {
					$("#upper").removeClass("invalid").addClass("valid").css('color','green').css('font-size','16px');;
						}
						else{
							$("#upper").addClass(".invalid").removeClass("valid").css('color','red').css('font-size','16px');;
						}
						if ($(".paswd").val().match(/[a-z]/)) {
					$("#lower").removeClass("invalid").addClass("valid").css('color','green').css('font-size','16px');;
						}
						else{
							$("#lower").addClass(".invalid").removeClass("valid").css('color','red').css('font-size','16px');;
						}
						if ($(".paswd").val().match(/[0-9]/)) {
					$("#number").removeClass("invalid").addClass("valid").css('color','green').css('font-size','16px');;
						}
						else{
							$("#number").addClass(".invalid").removeClass("valid").css('color','red').css('font-size','16px');;
						}
						if ($(".paswd").val().match(/[?.#*%!_&^$""@]/)) {
					$("#specs").removeClass("invalid").addClass("valid").css('color','green').css('font-size','16px');;
						}
						else{
							$("#specs").addClass(".invalid").removeClass("valid").css('color','red').css('font-size','16px');;
						}
						if ($(".paswd").val().length > 7) {
							$("#character").removeClass("invalid").addClass("valid").css('color','green').css('font-size','16px');
						}
						else{
							$("#character").addClass(".invalid").removeClass("valid").css('color','red').css('font-size','16px');;
						}

			}
			function msg(){
				if (mail()) {
					$(this).next().hide();
					$(".btn").show();
				}
				else{
					$(this).next().show();
					$(".btn").hide();
				}
			}
			function na(){
				if (nam()) {
					$(this).next().hide();
					$(".btn").show();
				}
				else{
					$(this).next().show();
					$(".btn").hide();
				}
			}
			function jw(){
				if (wat()) {
					$(this).next().hide();
					$(".btn").show();
				}
				else{
					$(this).next().show();
					$(".btn").hide();
				}
			}
			function confmesg() {
				if (confirm()) {
					$(".winput").find("span").hide();
					$(".btn").show();
				}
				else{
					$(".winput").find("span").show();
					$(".btn").hide();
				}
			}
			

		</script>
		<script type="text/javascript">
			var password = $(".paswd");
			$("#eye").click(function(){ 	
				if (password.prop("type")=="password") {
					$(this).addClass("fa fa-eye-slash");
					password.attr('type','text');
				}
				else{
					$(this).removeClass("fa fa-eye-slash").addClass("fa fa-eye");
					password.attr('type','password');

				}

				})	
			var james = $(".cpaswd");
			$("#eyes").click(function(){ 
				if (james.prop("type")=="password") {
					$(this).addClass("fa fa-eye-slash");
					james.attr('type','text');
				}
				else{
					$(this).removeClass("fa fa-eye-slash").addClass("fa fa-eye");
					james.attr('type','password');

				}

				})	
		</script>
		<script type="text/javascript">
			$("#reg").click(function()
			{
				$(".tbjoshua").hide(2000);
				$(".log").show(2000);
			} );

			$("#logn").click(function()
			{
				$(".log").hide(2000);
				$(".tbjoshua").show(2000);
			} );
		</script>
		

</body>
</html>
<script type="text/javascript">
		 $(".refresh").click(function(){
	    	window.location.reload();
	    });
		 	</script>