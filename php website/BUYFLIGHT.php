<form name="form1" method="post" action="">
  <table width="1269" border="1"  align="center">
  <tr>
    <td colspan="6" align="left" bgcolor="#663333" style="color:#FFFFFF"><h1>ALL AVAILABLE AIRLINES...</h1></td>
    </tr>
  <tr>
    <td width="233" height="67" align="center" bgcolor="#999999" style="font-size:x-large" ><strong>Airlines</strong></td>
    <td width="187" align="center" bgcolor="#999999" style="font-size:larger"><strong>AirlinesNo</strong></td>
    <td width="190" align="center" bgcolor="#999999" style="font-size:larger"><strong>Arrivals</strong></td>
    <td width="180" align="center" bgcolor="#999999" style="font-size:larger"><strong>Depature</strong></td>
    <td width="182" align="center" bgcolor="#999999" style="font-size:larger"><strong>Price</strong></td>
    <td width="257" align="center" bgcolor="#999999" style="font-size:larger"><strong>Action</strong></td>
  </tr>
  <tr>
    <td><img src="image/airlines.png" alt="airlines" width="237" height="100" /></td>
    <td align="center" style="font-size:x-large">A1-1210</td>
    <td align="center" style="font-size:x-large">03:20</td>
    <td align="center" style="font-size:x-large">06:32</td>
    <td align="center" style="font-size:x-large">8000</td>
    <td align="center" style="font-size:x-large; background-color: #FFFFFF; color: #FFFFFF;"><label>
      <input type="submit" name="buynow" id="button" value="BUYNOW">
    </label></td>
  </tr>
  <tr>
    <td><img src="image/indigo.png" alt="indigo" width="200" height="100"></td>
    <td align="center" style="font-size:x-large" >B1-2101</td>
    <td align="center" style="font-size:x-large">08:30</td>
    <td align="center" style="font-size:x-large">11:45</td>
    <td align="center" style="font-size:x-large">6500</td>
    <td align="center" style="font-size:x-large; color: #0033CC;" ><label>
      <input type="submit" name="buynow" id="button2" value="BUYNOW">
    </label></td>
  </tr>
  <tr>
    <td><img src="image/spicejet.png" alt="spicejet" width="200" height="100"></td>
    <td align="center" style="font-size:x-large">C1-1510</td>
    <td align="center" style="font-size:x-large">12:45</td>
    <td align="center" style="font-size:x-large">04:00</td>
    <td align="center" style="font-size:x-large">10000</td>
    <td align="center" style="font-size:x-large"><label>
      <input type="submit" name="buynow" id="button3" value="BUYNOW">
    </label></td>
  </tr>
</table>

</form>

<?php
 if (isset($_REQUEST['buynow']))
{
	header('location:PASSENGER_DETAILS.php');
 }
 ?>
