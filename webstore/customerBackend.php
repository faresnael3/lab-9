<style><?php include 'style.css';?></style>
<?php
echo "<p>Hi, your password is ". $_POST["password"] ."</p>";
$sub1 =floatval($_POST["quantity1"])*floatval(199.59);
$sub2 =floatval($_POST["quantity2"])*floatval(27.5);
$sub3 = floatval($_POST["quantity3"])*floatval(14.5);
function shipping()
{
  if("free" == $_POST["shipping"])
  {
    return 0;
  }
  elseif ("night" == $_POST["shipping"]) {
    return 5;
  }
  else {
    return 50;
  }
}
function shiptype()
{
  if("free" == $_POST["shipping"])
  {
    return("7 day");
  }
  elseif ("night" == $_POST["shipping"]) {
    return ("over night");
  }
  else {
    return ("three day");
  }
}
function total()
{
  return (floatval($_POST["quantity2"])*floatval(27.5)+floatval($_POST["quantity1"])*floatval(199.59)+($_POST["quantity3"])*floatval(14.5)+shipping());
}
echo "<table><tr>
<th></th>
<th>Quantity</th>
<th>Cost Per Item</th>
<th>Sub Total</th></tr>
<br>
<tr>
<td>Item 1</td>
<td>".$_POST["quantity1"]."</td>
<td>199.59</td>
<td>".$sub1."</td></tr>
<br>
<tr>
<td>Item 2</td>
<td>".$_POST["quantity2"]."</td>
<td>27.5</td>
<td>".$sub2."</td></tr>
<br>
<tr>
<td>Item 3</td>
<td>".$_POST["quantity3"]."</td>
<td>14.5</td>
<td>".$sub3."</td></tr>
<br>
<tr>
<td>shipping</td>
<td colspan = '2'>".shiptype()."</td>
<td>".shipping()."</td></tr>
<tr>
<br>
<td colspan ='3'>Total cost</td>
<td>".total()."</table>"
?>
