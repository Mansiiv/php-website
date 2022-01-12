<form action="" method="post">
<table width="1281" border="1" align="center">
  <tr>
    <td colspan="4" style="color:#660033"><h1>MAKE PAYMENT...</h1></p>      </td>
    </tr>
  <tr>
    <td width="284"><img src="image/Discovercard.png" alt="discover" width="300" height="192"></td>
    <td width="317"><img src="image/American.png" alt="american" width="319" height="192"></td>
    <td width="345"><img src="image/visacard.png" alt="visa" width="319" height="192"></td>
    <td width="307"><img src="image/mastercard.png" alt="mastercard" width="319" height="192"></td>
  </tr>
  <tr>
    <td style="font-size:large"><strong>ID :</strong></td>
    <td><label>
      <input type="text" name="id" id="textfield6" />
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-size:large"><strong> Card No.:</strong></td>
    <td><label>
      <input type="text" name="cardno" id="textfield">
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong style="font-size:large">Name On Card :</strong></td>
    <td><label>
      <input type="text" name="nameoncard" id="textfield2">
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong style="font-size:large">Card Type :</strong></td>
    <td><label>
      <select name="cardtype" id="select">
        <option value="card type">card type</option>
        <option value="Discover Network">Discover Network</option>
        <option value="American Express">American Express</option>
        <option value="Visa Card">Visa Card</option>
        <option value="Master card">Master Card</option>
                  </select>
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35"><strong style="font-size:large">Card Expiry :</strong></td>
    <td><label>
      <input type="date" name="cardexpiry" id="textfield5" />
    </label>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong style="font-size:large">CVV No. :</strong></td>
    <td><label>
      <input type="password" name="cvvno" id="textfield3">
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong style="font-size:large">Total Amount :</strong></td>
    <td><label>
      <input type="text" name="amount" id="textfield4">
    </label></td>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><label>
      <input type="submit" name="payment" id="button" value="PAYMENT">
      <input type="submit" name="reset" id="button2" value="RESET">
    </label></td>
    </tr>
</table>

</form>

 <?php
if(isset($_REQUEST['payment']))
{
	$cardno=$_REQUEST['cardno'];
	$nameoncard=$_REQUEST['nameoncard'];
	$cardtype=$_REQUEST['cardtype'];
	$cardexpiry=$_REQUEST['cardexpiry'];
	//$year=$_REQUEST['year'];
	$cvvno=$_REQUEST['cvvno'];
	$amount=$_REQUEST['amount'];
	require ('CONNECT.php');
	$q="insert into payment values(null,'$cardno','$nameoncard','$cardtype','$cardexpiry','$cvvno','$amount')";
	echo "$q";
if(mysqli_query($con,$q))
	echo "<script>alert('Payment Successfully Done!!');</script>";
else
	die ("Query Failed!!".mysqli_error($con));
}
?>