<body background=bg9.jpg>
<style type="text/css">
h4{font-family: Berlin Sans FB; font-size: 17pt; font-style: normal; font-weight: bold; color:#FE2E64;
text-align: center; text-decoration: underline }
table{font-family: STENCIL; color:#0B173B; font-size: 16pt; font-style: normal; font-weight: bold;
text-align:; background-color: #F5D0A9; border-collapse:; border: 7px solid #FAFAFA ; table.inner{border: 0px}

</style>
</body>
<tr>
<center><img src=head.png></td>
<?php
	session_start();
 ?>
 <br><br><br><br> <br><br>
<table border=5 bgcolor=#F5D0A9 align=center>
 <form action=login.php method=post>
<tr>
<td><center><font size=5><b>Username:
<td><input type=text name=Name placeholder= "Enter Your Username" required>
<tr>
<td><center><font size=5><b>Password:
<td><input type=password name=password placeholder= "Enter Your Password" required>
<tr>
<td><input type=submit value=Login name=go>
<td><input type=reset value=Clear>
</tr>
<tr>
<tr>
<td colspan = 7 bgcolor=#F6CECE><center><b><font size=3>Copyright &copy; ANTONIO & DIMAYUGA 
</table>
</form>
<center><b><br><br><br><br><font size=4><h4><a href=insert.php> Register New User </a>
<center><b><br><font size=4><h4><a href=login2.php>Admin Login</a>
</td>
<?php
	if (isset($_POST['go']))
	{
        include("dbconnect.php");
        $a=$_POST['Name'];
       $query="select * from profiles where Name='$a'";
$result=mysql_query($query);
$bilang=mysql_num_rows($result);

if($bilang==0)
print"<script language=javascript>
alert('Invalid $a');

</script>";
else
{

$_SESSION['Name']=$a;
print"<script language=javascript>
alert('Welcome $a');
window.location='page1-1.html';

</script>";

}





}



?>
