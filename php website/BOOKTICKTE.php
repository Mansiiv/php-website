<?php
	session_start();
?>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<form action="" method="post">
<table width="1270" border="1" align="center">
  <tr>
    <td height="61" colspan="2"><span class="style1">
      <h1>BOOK YOUR TMT AIRLINES TICKET</h1></span></td>
    </tr>
  <tr>
    <td width="179">From City :</td>
    <td width="1075"><label>
      <select name="select" id="select">
        <option value="please select city">please select city</option>
        <option value="Surat">Surat</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Amritsar">Amritsar</option>
        <option value="Ahemdabad">Ahemdabad</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Pune">Pune</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Jodhpur">Jodhpur</option>
        <option value="Shimla">Shimla</option>
        <option value="Manali">Manali</option>
            </select>
    </label></td>
  </tr>
  <tr>
    <td height="31">To City :</td>
    <td><label>
      <select name="select3" id="select3">
        <option value="Please select city">Please select city</option>
        <option value="Surat">Surat</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Amritsar">Amritsar</option>
        <option value="Ahemdabad">Ahemdabad</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Pune">Pune</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Jodhpur">Jodhpur</option>
        <option value="Shimla">Shimal</option>
        <option value="Manali">Manali</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Date :</td>
    <td><label>
      <input type="date" name="textfield" id="textfield">
    </label></td>
  </tr>
  <tr>
    <td>Passengar :</td>
    <td><label>
      <select name="adult" id="select4">
        <option value="Adult">Adult</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
<select name="child" id="select5">
        <option value="Child">Child</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    <select name="infants" id="select6">
      <option value="Infants">Infants</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
    </label></td>
  </tr>
  <tr>
    <td>Class :</td>
    <td><label>
      <input type="radio" name="radio" id="radio" value="radio">
      BUSSINESS
      <input type="radio" name="radio2" id="radio2" value="radio2">
    ECONOMY</label></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label>
      <input type="submit" name="submit" id="button" value="SUBMIT">
      <input type="submit" name="reset" id="button2" value="RESET">
    </label></td>
    </tr>
</table>


<label></label>
</form>

<?php
 if (isset($_REQUEST['submit']))
{
	header('location:BUYFLIGHT.php');
 }
 ?>
 
 <?php
if(isset($_REQUEST['submit']))
{
	$fromcity=$_REQUEST['fromcity'];
	$tocity=$_REQUEST['tocity'];
	$date=$_REQUEST['date'];
	$passenger=$_REQUEST['passenger'];
	$class=$_REQUEST['class'];
	$adult=$_REQUEST['adult'];
	$child=$_REQUEST['child'];
	$infants=$_REQUEST['infants'];
	$_SESSION['s_a']=$adult;
	$_SESSION['s_c']=$child;
	$_SESSION['s_i']=$infants;
	
	require ('CONNECT.php');
	$q="insert into booking values(null,'$fromcity','$tocity','$date','$passenger','$class')";
	echo "$q";
	//$_SESSION[
if(mysqli_query($con,$q))
	echo "<script>alert('Registration Successfully Done!!');</script>";
else
	die ("Query Failed!!".mysqli_error($con));
}
?>