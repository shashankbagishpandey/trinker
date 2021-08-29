<!--
Here, we write code for login.
-->
<?php

$conn=mysqli_connect("localhost","root","","ecom");//ecom is the name of my database 
$email = $password = '';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: tinkerhome.php");
}
else
{
	echo $email;
	echo $password;
}
?>