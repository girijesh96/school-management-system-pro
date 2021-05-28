<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'d');
	$q="select * from t2";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	for($i=1;$i<=$num;$i++)
	{
	$row=mysqli_fetch_array($result);
	echo "\n name :".$row['name']." email: ".$row['email']." password : ".$row['password']." gender: ".$row['gender']." class: ".$row['class']." carrier: " .$row['carrier'];?>
	<html>
		<p><br/></p>
	</html>
	<?php
	}
	mysqli_close($con);
?>