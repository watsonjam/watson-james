<?php 
include 'bio_head.php';

 	?>	
 	<!DOCTYPE html>
 	<html>
 	<head>
 		<title></title>
 	</head>
 	<style type="text/css">
 		.fomu{
		 			border-radius: 4px;
		 			border:1px solid black ;
		 			width: 50%;
		 			margin-top: -30px;
		 			padding: 20px;
		 			background-color: blue;
		 			z-index: 80px;
		 			
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
			table{
						width: 55%;
						margin: 20px auto;
						border-collapse: collapse;
						text-align: left;
						border-radius: 10px;
						border:1px solid silver;
						border-spacing: 
						
					}
					tr{
						border-bottom: 1px solid black;
						border-right: 1px solid black;
						

					}
					th, td{
						border:none; ;
						
						height: 30px;
						padding: 2px;
					}
					tr:hover{
						background-color:silver;
					}
 	</style>
 	<body style="background-image: url('images/mzu4.jeg'); background-size: cover;">
 		<div>
 			<?php include 'server.php'; 
	$per_page=4;
	$page_query=mysqli_query($conne, "SELECT * FROM watumiaji" );
	$jam=mysqli_fetch_array($page_query);
	$pg=count($jam);
	$pages=ceil($pg  / $per_page);
	$page= (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
	$start=($page-1) * $per_page;


				$as="SELECT * FROM watumiaji LIMIT $start , $per_page";
				$qw=mysqli_query($conne, $as);
				?>

				<div>
	<table class="table">
					<thead>
						<tr><th>FIRST NAME</th>
							<th>MIDDLE NAME</th>
							<th>SURNAME</th>
							<th>DATE</th>
							<th>EMAIL</th>
							<th>STATUS</th>
							<th>SUBJECT</th>
							<th>NON TEACHING STAFF</th>
							<th>MOBILE NUMBER</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row= mysqli_fetch_array($qw)) {?>
						<tr><td><?php echo $row['fname']; ?></td>
							<td><?php echo $row['mname']; ?></td>
							<td><?php echo $row['sname']; ?></td>
							<td><?php echo $row['dat']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['status']; ?></td>
							<td><?php echo $row['subject']; ?></td>
							<td><?php echo $row['nontch']; ?></td>
							<td><?php echo $row['mobile']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>
				<div style="text-align: center; margin-right: 77px; margin-top: -10px;">
						<?php 
						$prev= $page - 1;
					    $next= $page + 1;
					    if (!($page<=1)) {
						echo " <a href='bio.php?page=$prev'>PREV<a/>  ";
					}
						if ($pages>=1 && $page<=$pages) {
						for ($x=1; $x <=$pages ; $x++) { 
							echo ($x==$page) ? '<b><a style="color:black; text-decoration:none;font-size:18px;" href="?"> '.$x.' <a/></b>':'<a href="?page='.$x.'">'.$x.'<a/> ';
						}
					} 
					if (!($page>=$pages)) {
						echo "<a href='bio.php?page=$next'>NEXT<a/> ";
					}
					?>
					</div>

 	
 	</body>
 	</html>