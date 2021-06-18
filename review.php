<?php include('common/connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>enest</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php include('common/header.php'); ?>
   
	<div class="maincontainer4">
			<div class="innercontainer4">
				<?php include('common/nav.php'); ?>
				<div class="contact">
					
					<h1>REVIEWS</h1>
					<div class="dish">
						<table border="2" width="100%" >
	<tr>
		<th>Name</th>
		<th>REVIEWS</th>
		<th>RATING</th>
	</tr>
	<?php 
			$query="select * from query";
		$result=mysqli_query($connect,$query);	
		while($row=mysqli_fetch_assoc($result))
		{
			?>
				<tr>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['review']?></td>
					<td><?php
							if($row['rating']==5){
								echo"&#11088;&#11088;&#11088;&#11088;&#11088;";
							}elseif($row['rating']==4){
								echo"&#11088;&#11088;&#11088;&#11088;";
							}
							elseif($row['rating']==3){
								echo"&#11088;&#11088;&#11088;";
							}
							elseif($row['rating']==2){
								echo"&#11088;&#11088;";
							}
							elseif($row['rating']==1){
								echo"&#11088;";
							}
							?></td>
				</tr>
			<?php
		}	
	?>
</table>

					</div>
				</div>
			</div>
		</div>
                  <?php include('common/footer.php'); ?>
				</body>
			</html>