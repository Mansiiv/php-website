<?php
session_start();
$s_a=$_SESSION['s_a'];
	$s_c=$_SESSION['s_c'];
	$s_i=$_SESSION['s_i'];
?>

<body><form action="" method="post">
<table width="1339" border="1" align="center">
  <tr>
    <td colspan="5" style="color:#660033"><table border="0" cellpadding="0" cellspacing="0">
    </table>    </td>
  </tr>
  <tr>
    <td colspan="5" style="color:#660033"><strong>ADULT PASSENGER DETAILS..</strong></td>
    </tr>
  <tr>
    <td width="179" style="font-size:large"><a href="#">DELETE</a></td>
    <td width="176" style="font-size:large"><strong>Sr. No.</strong></td>
    <td width="277" style="font-size:large"><strong>Name</strong> </td>
    <td width="216" style="font-size:large"><strong>Gender</strong></td>
    <td width="457" style="font-size:large"><strong>Age</strong></td>
    </tr>
    <?php
		for($i=1;$i<=$s_a;$i++){
	?>
  <tr>
    <td>&nbsp;</td>
    <td>Adult 01</td>
    <td><label>
      <input type="text" name="uname[]" id="textfield">
    </label></td>
    <td><label>
      <select name="adult" id="select">
        <option value="gender">gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
    </label></td>
    <td><label>
    <input type="text" name="age" id="textfield4"> 
    YEAR
</label></td>
    </tr>
     <a href="DELETE.php">DELETE</a>
    <?php } ?>
  </table>
<table width="1339" border="1" align="center">
  <tr>
    <td colspan="5" style="color:#660033"><strong>CHILD PASSENGER DETAILS..</strong></td>
    </tr>
  <tr>
    <td width="177" style="font-size:large"><a href="#">DELETE</a></td>
    <td width="176" style="font-size:large"><strong>Sr. No.</strong></td>
    <td width="280" style="font-size:large"><strong>Name </strong></td>
    <td width="213" style="font-size:large"><strong>Gender</strong></td>
    <td width="459" style="font-size:large"><strong>Age</strong></td>
    </tr>
    <?php
		for($i=1;$i<=$s_c;$i++){
	?>
  <tr>
    <td>&nbsp;</td>
    <td>Child 01</td>
    <td><label>
      <input type="text" name="uname" id="textfield">
    </label></td>
    <td><label>
      <select name="child" id="select">
        <option value="gender">gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
    </label></td>
    <td><label>
    <input type="text" name="age" id="textfield4"> 
    YEAR
</label></td>
    </tr>
     <a href="DELETE.php">DELETE</a>
     <?php } ?>
  <tr>
</table>

<table width="1338" border="1" align="center">
  <tr>
    <td colspan="5" style="color:#660033"><strong>INFANT PASSENGER DETAILS..</strong></td>
    </tr>
  <tr>
    <td width="174" style="font-size:large"><a href="#">DELETE</a></td>
    <td width="178" style="font-size:large"><strong>Sr. No.</strong></td>
    <td width="281" style="font-size:large"><strong>Name </strong></td>
    <td width="211" style="font-size:large"><strong>Gender</strong></td>
    <td width="460" style="font-size:large"><strong>Age</strong></td>
    </tr>
    <?php
		for($i=1;$i<=$s_i;$i++){
	?>
  <tr>
    <td>&nbsp;</td>
    <td>Infant 01</td>
    <td><label>
      <input type="text" name="uname" id="textfield">
    </label></td>
    <td><label>
      <select name="select" id="select">
        <option value="gender">gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
    </label></td>
    
    <td><label>
    <input type="text" name="age" id="textfield4"> 
    YEAR
</label></td>
    </tr>
     <a href="DELETE.php">DELETE</a>
    <?php } ?>
  
  <tr>
    <td height="44" colspan="11" align="center"><label></label>      <label>
      <input type="submit" name="payment" id="button" value="Continue To Payment">
    </label> </td>
    </tr>
</table>
</form>

<?php
 if (isset($_REQUEST['payment']))
{
	$s_a=$_SESSION['s_a'];
	$s_c=$_SESSION['s_c'];
	$s_i=$_SESSION['s_i'];
	header('location:PAYMENT.php');
 }
 ?>
 