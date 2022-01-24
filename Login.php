<?php 


$conn=mysqli_connect("localhost","root","","biology");


if(isset($_POST['submit']))
{
    $user=$_POST['username'];

    $pass=$_POST['password'];


	$sql="SELECT * from 'register' where username='$user'";


	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("Location: upload.php");
	}
	else 
	{
		echo "Not Registered User";
	}
}

?>