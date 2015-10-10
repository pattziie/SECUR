<body background=bg10.jpg>
<center><table border=5>
<center><img src=head.png></td>
<form action=summary-2.php method=get>
<tr><td><font face = 'veranda' size = 5>NAME:<td><input name=Name value=<?php print $_GET['Name'];?>>
<tr><td><font face = 'veranda' size = 5>PASSWORD:<td><input type=password name=password value=<?php print md5($_GET['password']);?>>
<tr><td><font face = 'veranda' size = 5>ITEM NAME:<td><input name=item value=<?php print $_GET['item'];?>>
<tr><td><font face = 'veranda' size = 5>UNIT COST:<td><input name=ucost value=<?php print $_GET['ucost'];?>>
<tr><td><font face = 'veranda' size = 5>QUANTITY:<td><input name=qty value=<?php print $_GET['qty'];?>>
<tr><td><font face = 'veranda' size = 5>AMOUNT:<td><input name=amt value=<?php print $_GET['ucost']*$_GET['qty'];?>>
<tr><td colspan=2><center><p>Thank you! You may back again.</p></table><br>
<center><b><br><font size=4><h4><a href=login.php> Return to Login</a>
<?php
if(isset($_POST['save']))
{
include("dbconnect.php");
$a=$_GET['Name'];
$b=md5($_GET['password']);
$c=$_GET['item'];
$d=$_GET['ucost'];
$e=$_GET['qty'];
$f=$_GET['amt'];

// search the email if it already active
$query="select * from profiles where Name='$a'";
$result=mysql_query($query) or die ("Error in query");
$bilang=mysql_num_rows($result);
if ($bilang==0)
{
// insert record
$insert="insert into profiles values('$a','$b', '$c', '$d', '$e','$f')";
mysql_query($insert);
print "<p><font color=green><b>Order Successful!</b></font>";
}
else
print "<p><font color=red>$a</font>Already Exists!!!</b></font>";
}
?>
<br><br><td colspan = 4 bgcolor=grey><center>Copyright &copy; P.L.S. DIMAYUGA.
