<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {
	color: #000000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style9 {color: #000000; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<form action="" method="post">
  <table width="1269" border="1" align="center"  bgcolor="#999999">
    <tr>
      <td colspan="2" align="center"><h1 class="style1 style2"> LOGIN TO YOUR ACCOUNT</h1></td>
    </tr>
    <tr>
      <td width="223"><span class="style9">User Name :</span></td>
      <td width="1030"><span class="style9">
        <label>
        <input type="text" name="uname" id="textfield">
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="style9">Password :</span></td>
      <td><span class="style9">
        <label>
        <input type="password" name="pwd" placeholder="Password" required size=50>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"> <a href="#" class="style9">Cilck here for Register</a></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><span class="style9">
        <label>
        <input type="submit" name="submit" id="button" value="SUBMIT">
        <input type="submit" name="reset" id="button2" value="RESET">
        </label>
      </span></td>
    </tr>
  </table>


</form>


 
 <?php
	if(isset($_REQUEST['submit'])){
	echo "hi";
		$eid=$_REQUEST['uname'];
		$pwd=$_REQUEST['pwd'];
		require("CONNECT.php");
		$q="select * from booking order by UserName='$uname' and Password='$pwd'";
		//echo $q;
		$res=mysqli_query($con,$q) or die("Error..!!".mysqli_error($con));
		$nor=mysqli_num_rows($res);
		//echo $nor;
		if($nor>=1){
			$r=mysqli_fetch_array($res);
			header('location:BOOKTICKTE.php');
		}
		else
			echo "<script>alert('UserName or Password is incorrect..!');</script>";
	}
?>