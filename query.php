 <?php include('common/connection.php');?>
 <?php
				                   if(!empty($_GET['save']))
							      {

								   $na=$_GET['en'];
								   $ma=$_GET['em'];
								   $pa=$_GET['er'];
								   $ra=$_GET['rr'];
								   $query="insert into query (name,email,review,rating) values('$na','$ma','$pa','$ra')";
								  if(mysqli_query($connect,$query))
								  {

									header("Location:http://localhost/enest/review.php");
									echo "Query Submitted";
								  }
								  else
								 {

									echo "Query Submission Unsuccessfull";
								 }
							   }
							 ?>