<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFFFF;
}
-->
</style>
<form action="" method="post">
<table width="800" align="center" border="1 ">
  <tr bgcolor="#003399">
    <td colspan="6"><h1 align="center" class="style1" > Flight Ticket Booking System </h1></td>
    </tr>
  
    <td width="138"><label>
      <input type="submit" name="home" id="button" value="HOME">
    </label></td>
    <td width="200"><label>
      <input type="submit" name="aboutus" id="button2" value="ABOUT US">
    </label></td>
    <td width="225"><label>
      <input type="submit" name="book ticket" id="button3" value="BOOK TICKET">
    </label></td>
    <td width="219"><label>
      <input type="submit" name="register" id="button4" value="REGISTER">
    </label></td>
    <td width="226"><label>
    <input type="submit" name="login" id="button5" value="LOGIN">
    </label></td>
    <td width="183"><label>
      <input type="submit" name="contactus" id="button6" value="CONTACT US">
    </label></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="114" colspan="6"><img src="image/UnitedAirlines.jpg" alt="flight" width="1200" height="400"></td>
    </tr>
</table>

</form>

 <?php
 if (isset($_REQUEST['aboutus']))
{
	header('location:ABOUTUS.php');
 }
 ?>
 
  <?php
 if (isset($_REQUEST['contactus']))
{
	header('location:CONTACTUS.php');
 }
 ?>
 
 <?php
 if (isset($_REQUEST['register']))
{
	header('location:REGISTER.php');
 }
 ?>
 
 <?php
 if (isset($_REQUEST['login']))
{
	header('location:LOGIN.php');
 }
 ?>