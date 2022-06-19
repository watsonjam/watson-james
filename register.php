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
		
		.header{
			background: #5F9EA0;
			color: white;
			border-radius: 10px 10px 0px 0px;
			 text-align: center;
			 width: 40%;
			 border: 1px solid #B0C4DE;
			 padding: 20px;
			 margin-top: 20px;
			 height: 30px;

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
			.input select{
				width: 99%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 16px;
				height: 40px;
				padding: 5px 10px;
				margin-top: 5px;
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
				border-radius: 5px;
				padding: 10px;
				margin-top: -1000px;
				font-size: 13px;
				cursor: pointer;
				width: 150px;
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
	<div class="bac"><button class="back"><a style="text-decoration: none; color: white;" href="index.php">BACK&nbsp;&nbsp;<i class="fa fa-arrow-left" style="margin-top: 15px; margin-right: 45px;"></i></a></button></div>
		 
		 		<div style="float: right; margin-right: 20px;"><button class="refresh"><b>REFRESH PAGE<b/><i class="fa fa-redo-alt" style="margin-top: 15px; margin-right: 55px;"></i></button></div>
	 <div class="big">	
	 <?php
	 
include 'server.php';
if(isset($_POST['reg']))
	{
		$file=$_FILES['file'];
		$name = $_FILES['file']['name'];
		$type = $_FILES['file']['type'];
		$tname = $_FILES['file']['tmp_name'];
		$size = $_FILES['file']['size']; 
		$fn = $_POST['firstname'];
		$mn = $_POST['middlename'];
		$sn = $_POST['surname'];
		$un = $_POST['username'];
		$dt = $_POST['date'];
		$psd = $_POST['password_1'];
		$em = $_POST['email'];
		$st= $_POST['status'];
		$sb = $_POST['subje'];
		$nt = $_POST['nonteach'];
		$nu = $_POST['number'];
		$so = $_POST['social'];
		$paswed=md5($psd);
		$path = "mlay/";
		
		$tok1 = pathinfo($name, PATHINFO_EXTENSION);
		$tok = strtolower($tok1);
		$allowed = array('txt', 'docx', 'doc', 'pdf','pptx','png','jpeg','jpg','mp4');
		if(in_array($tok, $allowed))
		{
			if($size < 102400000)
			{
				$real = $path.$name; 
				move_uploaded_file($tname , $path.$name);
				$sql= "INSERT INTO watumiaji (id, fname,mname,sname,uname,dat,password,email,status, subject,nontch,cv,mobile,social) VALUES (NULL,'$fn','$mn','$sn','$un','$dt','$paswed','$em','$st','$sb','$nt','$real','$nu','$so')";
				$put = mysqli_query($conne, $sql);
				if($put)
				{
					echo("<script>alert('Your bio successfuly captured');window.location.href='index.php'</script>");
				}else{
					echo("<script>alert('Your bio NOT successfuly captured');window.location.href='register.php'</script>");
				}
			}
			else
			{
				echo 'your file size is bigger';
			}
				
		
		}
		else
		{
			echo 'invallid extension';
		}
		
	}
	
	
 ?> 
<div class="tbjoshua" style="margin-top: -80px;">
				<center>
	<div class="header" style="height: ">
		<h2>REGISTRATION FORM</h2>	
	</div>
</center>
				<center>
	<form method="POST" action="register.php" enctype='multipart/form-data'>
		<div class="input">
			<label>FIRST NAME</label>
			<input type="text" name="firstname" class="nemu" placeholder="first name">	
		</div>
		<div class="input">
			<label>MIDDLE NAME</label>
			<input type="text" name="middlename" class="nemu" placeholder="middle name">	
		</div>
		<div class="input">
			<label>SURNAME NAME</label>
			<input type="text" name="surname" class="nemu" placeholder="surname name">	
		</div>
		<div class="input">
			<label>USERNAME NAME</label>
			<input type="text" name="username" class="nemu" placeholder="username">	
		</div>
		<div class="input">
			<label>DATE</label>
			<input type="date" name="date" class="nemu" >	
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
			<select  name="status"; >
			<option>EMPLOYED STATUS</option>
			<option>teaching staff</option>
			<option>non teaching staff</option>
			</select>
		</div>	
		<div class="input">
			<select  name="subje"; >
			<option>TEACHING SUBJECT</option>
			<option>math</option>
			<option>physics</option>
			<option>language</option>
			<option>none(for none teaching role)</option>
			</select>
		</div>	
		
		<div class="input">
			<select  name="nonteach"; >
			<option>NONE TEACHING ROLE</option>
			<option>secretary</option>
			<option>bursar</option>
			<option>security</option>
			<option>other</option>
			<option>none</option>
			</select>
		</div>	
		<div class="input">
			<label>CURRICULUM VITAE</label>
			<input type='file' name='file'>
		</div>
		<div class="input">
			<label>MOBILE NUMBER</label>
			<input type='NUMBER' name='number' placeholder="mobile number">
		</div>
		<div class="input">
			<label>SOCIAL MEDIA ACCOUNT</label>
			<input type='text' name='social' placeholder="eg..instagram,fb,twitter..etc..input any of either account">
		</div>

		<div class="input">
			<button type="submit" class="btn" name="reg" >SUBMIT</button>
		</div>
		
	</form>
</center>
			</div>
	 </div>
	
</body>
</html>
<script type="text/javascript">
			$("form span").hide();
			$(".paswd").keyup(errormessage);
			$(".cpaswd").keyup(confmesg);
			$(".emeil").keyup(msg);
			


			function validpass() {
				return $(".paswd").val().length > 7 &&  $(".paswd").val().length < 30 &&  $(".paswd").val().match(/[A-Z]/) &&  $(".paswd").val().match(/[a-z]/) &&  $(".paswd").val().match(/[0-9]/) && $(".paswd").val().match(/[?.#*%!_&^$""]/);
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
		
		<script type="text/javascript">
		 $(".refresh").click(function(){
	    	window.location.reload();
	    });
		 	</script>
		
