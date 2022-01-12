<?php
	if(isset($_REQUEST['id'])){
		require "CONNECT.php";
		$pid=$_REQUEST['id'];
		$q="delete from payment where id='$id'";
		if(mysqli_query($con,$q))
			header("location:PASSENGER_DETAILS.php");
		else
			exit("Query failed..".mysqli_error($con));

	}
?>