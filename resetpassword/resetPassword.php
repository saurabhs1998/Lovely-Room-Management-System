<?php
include('config.php');

if(!isset($_GET["code"])){
	exit("con not find page");
}

$code =$_GET["code"];

$getEmailQuery = mysqli_query($con,"SELECT email FROM reset_passwords WHERE code='$code'");

if(mysqli_num_rows($getEmailQuery) == 0){
	exit("con not find page");
}


if(isset($_POST["password"])) {
	$pw =$_POST["password"];
	$pw =md5($pw);

	$row =mysqli_fetch_array($getEmailQuery);
	$email =$row['email'];

	$query =mysqli_query($con ,"UPDATE userforms SET password='$pw' WHERE email='$email'");

	if($query){
		$query =mysqli_query($con ,"DELETE FROM reset_passwords WHERE code='$code'");
		exit("password updated");
	}
	else{
		exit("Something went wrong");
	}
}

?>

<form method="POST">
	<input type="password" name="password" placeholder="new password">
	<br><br>
	<input type="submit" name="submit" value="update password">
</form>