<?php
$con=mysqli_connect("localhost","root","") or die ("could not connect to server");
mysqli_select_db($con,"airlines") or die("invalid database");
?>