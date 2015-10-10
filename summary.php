<body background=bg9.jpg>
<center>
<form action=summary-2.php method=get>
<center><h1>Confirmation Of Orders</h1></center>
<br><br><br><br><br><br><br>
<table border = 7 bgcolor=Pink>
<tr>
<td><b><font size=4>Item
<td><input name=item value=<?php print $_GET['item'];?>>
<tr>
<td><b><font size=4>Unit Cost
<td><input name=ucost value=<?php print $_GET['ucost'];?>>
<tr>
<td><b><font size=4>Quantity
<td><input name=qty value=<?php print $_GET['qty'];?>>
<tr>
<td><input type=submit name=save value='Order Now'>

</table>
</form>
