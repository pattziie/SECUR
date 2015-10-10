<body background =bg01.jpg>


<style type="text/css">
h3{font-family: Showcard Gothic; font-size: 25pt; font-style: normal; font-weight:; color:#01A9DB;
text-align: center; text-decoration: }
table{font-family: Kristen ITC; color:#0B173B; font-size: 16pt; font-style: normal; font-weight: bold;
text-align:; background-color: #F5D0A9; border-collapse:; border: 7px solid #FAFAFA ; table.inner{border: 0px}

</body>
</style>

<br><br><br><br><br><br><br><br><br>
<center><h3><font color=#190707>REGISTER NOW!
<br><br>
<table border =5 bgcolor=#F5D0A9 align=center>

<form action ="insert.php" method=get>
<tr>
<td><center><font size=5><b>Email <td><input type=text name=Name required>
<tr>
<td><center><font size=5><b>Password <td><input type=Password name=password required>
</tr>

<tr>
<td><input type=submit value='Save Record' name=save>
<td><input type=reset value='Clear'>
</table>
</form>

<?php 

	if(isset($_GET['save']))
	{
	$a=$_GET['Name'];
	$b=$_GET['password'];
	$encrypt=md5($b);
	include("dbconnect.php");
	$k="select * from profiles where Name='$a' and password='$encrypt'";
	$res=mysql_query($k);
	$bilang=mysql_num_rows($res);
	if($bilang==0)
	{
	$insert ="insert into profiles(Name,password) values('$a','$encrypt')";
	mysql_query ($insert);
	print "Record Saved!";
	
	
	}
	else 
	print"$a Already Exists";
	
	
	
}
?> <center><b><br><font size=4><a href="login.php">Back to Login</a>
<td colspan = 7 bgcolor=#F6CECE><center><b><br><br><font size=3>Copyright &copy; ANTONIO & DIMAYUGA 
