<?php
	$name=$_POST['name'];
	echo $name;
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$class=$_POST['class'];
	$carrier=$_POST['carrier'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'db1');
	$q="insert into t3(name,email,gender,carrier,password,class) values('$name','$email','$gender','$carrier',$password,$class)";
	$i=mysqli_query($con,$q);
	echo $i;
	echo "U R successfully registered";
	mysqli_close($con);
?>