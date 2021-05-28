<html>
<?php
	$email=$_POST['email'];
	echo $email;
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'eq_form');
	$q="select * from t2 where email='$email' ";
	$result =mysqli_query($con,$q);
	$row = mysqli_fetch_array($result);
	//echo "\n name :".$row['name']." email: ".$row['email']." password : ".$row['password']." gender: ".$row['gender']." class: ".$row['class']." carrier: " .$row['carrier'];
	echo $row['gender'];
	mysqli_close($con);
?>

	<a href="genpdf.php" class="btn btn-success">PDF GENERATE</a>
</html>