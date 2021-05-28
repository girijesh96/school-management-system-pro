<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$class=$_POST['class'];
	$branch=$_POST['branch'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'eq_form');
	$q="insert into enquiry(name,email,password,gender,class,branch) values('$name','$email',$password,'$gender',$class,'$branch')";
	$i=mysqli_query($con,$q);
	echo $i;
	if($i=1)
		{
			echo "you are sucessfully registered";
		}else
		{
		echo "you don't sucessfully registered";
		}
	mysqli_close($con);
?>
<html>
	<head>
		<style type="text/css">
			#a2
			{
			margin-left:11px;
			}
		</style>
	</head>
	<body>
		<br/>
		<a id="a1"href="form1.html">go to form page</a>
		<a id="a2">PRINT</a>	
		<a id="a3" href="show data.html">show data</a>
	</body>
</html>