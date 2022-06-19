<?php 
include 'hed.php';
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
			table{
						width: 50%;
						margin: 15px auto;
						border-collapse: collapse;
						text-align: left;
						border-radius: 10px;
						
					}
					tr{
						border-bottom: 1px solid black;
					}
					th, td{
						border: solid 1px ;
						
						height: 30px;
						padding: 2px;
					}
					tr:hover{
						background-color:silver;
					}
	</style>
</head>
<body>
	<?php include 'alumnside'; ?>
<div class="big">
	<?php include 'server.php'; 
	$per_page=4;
	$page_query=mysqli_query($conne, "SELECT * FROM alumn" );
	$jam=mysqli_fetch_array($page_query);
	$pg=count($jam);
	$pages=ceil($pg  / $per_page);
	$page= (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
	$start=($page-1) * $per_page;


				$as="SELECT * FROM alumn LIMIT $start , $per_page";
				$qw=mysqli_query($conne, $as);
				?>
				<div>
	<table class="table">
					<thead>
						<tr><th>ID</th>
							<th>USERNAME</th>
							<th>ENROLEMNT YEAR</th>
							<th>GRADUATION YEAR</th>
							<th>FAVOURITE TEACHER</th>
							<th>OCCUPATION</th>
							<th>EMAIL</th>
							<th>MOBILE NUMBER</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row= mysqli_fetch_array($qw)) {?>
						<tr><td><?php echo $row['id']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['enrolyear']; ?></td>
							<td><?php echo $row['graduyear']; ?></td>
							<td><?php echo $row['ftname']; ?></td>
							<td><?php echo $row['occupation']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['mobile']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>
				<div style="text-align: center; margin-right: 77px; margin-top: -10px;">
					<div style="border">
						<?php 
						$prev= $page - 1;
					    $next= $page + 1;
					    if (!($page<=1)) {
						echo " <a href='otheralumn.php?page=$prev'>PREV<a/>  ";
					}
						if ($pages>=1 && $page<=$pages) {
						for ($x=1; $x <=$pages ; $x++) { 
							echo ($x==$page) ? '<b><a style="color:black; text-decoration:none;font-size:18px;" href="?"> '.$x.' <a/></b>':'<a href="?page='.$x.'">'.$x.'<a/> ';
						}
					} 
					if (!($page>=$pages)) {
						echo "<a href='otheralumn.php?page=$next'>NEXT<a/> ";
					}
					?>
					</div>
					</div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>