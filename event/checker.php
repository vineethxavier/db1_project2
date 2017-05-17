<?php
include 'config.php'; // include the library for database connection
if(isset($_POST['action'])=='login'){ // Check the action `login`
	$username 		=$_POST['username']; // Get the username
	$password 		= $_POST['password']; // Get the password and decrypt it
	$password=urlencode( base64_encode( $password ) );
	$query= mysql_query("SELECT * 
	FROM tb_login WHERE name='$username' and password='$password' and del=0 "); 
	$num_rows		= mysql_num_rows($query); // Get the number of rows
	if($num_rows <= 0)
	{ // If no users exist with posted credentials print 0 like below.
		echo 0;
		
		
	} 
	else 
	{
		$row = mysql_fetch_array($query);
				
		$_SESSION['logid']=$row['id'];
		//$_SESSION['name']=$row['name'];
		
		echo 1;
	
		
	}
}
?>