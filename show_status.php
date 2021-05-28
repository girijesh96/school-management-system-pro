<html>	
<?php
	$email=$_POST['email'];
	echo $email;
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'eq_form');
	$q="select * from enquiry where email='$email'";
	$result =mysqli_query($con,$q);
	
?>
<a href="genpdf.php" class="btn btn-success">PDF GENERATE</a>
    <?php
	if($row = mysqli_fetch_array($result))
	{
	$i=1;
	echo "\n name :".$row['name']." email: ".$row['email']." password : ".$row['password']." gender: ".$row['gender']." class: ".$row['class']." carrier: " .$row['branch'];
	}
	else
	echo "your query is in waiting";
	if( $row['email']=$email)
	{
	echo "your schedule is 10pm";
	}
	echo .$row['gender'];
	if($i=1)
	echo "go";
	else
	echo "went";
	mysqli_close($con);
    ?>
</html>