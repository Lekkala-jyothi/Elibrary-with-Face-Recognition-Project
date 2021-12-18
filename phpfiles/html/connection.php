<?php
    $db=mysqli_connect("localhost","root","","librarydata");
	
	if(!$db)
	{
		die("connection failed: " . mysqli_connect_error());
	}
	
	echo "connected successfully";

?>

