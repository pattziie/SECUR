<body background =bg01.jpg>

<style type="text/css">
h4{font-family: Berlin Sans FB; font-size: 17pt; font-style: normal; font-weight: bold; color:#FE2E64;
text-align: center; text-decoration: underline }
table{font-family: STENCIL; color:#0B173B; font-size: 16pt; font-style: normal; font-weight: bold;
text-align:; background-color: #F5D0A9; border-collapse:; border: 7px solid #FAFAFA ; table.inner{border: 0px}

</style>
</body>

<?php
session_start();

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table border=5 bgcolor=#F5D0A9 align=center>
<form action=login2.php method=post>
<tr>
<td><center><font size=5><b>Admin:
<td  colspan = 7><input type=text name=email required>
<tr>
<td><center><font size=5><b>Password:
<td  colspan = 7><input type=password name=password required>

<tr>
<td><center><input type=submit value='Login' name=go>
<td><center><input type=reset value='Clear' >
</tr>
<tr>
<tr>
<td colspan = 7 bgcolor=#F6CECE><center><b><font size=3>Copyright &copy; ANTONIO & DIMAYUGA 
</table>
</form>
<center><b><br><br><br><br><font size=4><h4><a href=insert.php> Register New Admin </a>
<br><a href=login.php>Back</a>
<?php
if (isset($_POST['go']))
{
include("dbconnection.php");
$a=$_POST['email'];
$b=$_POST['password'];
$query="SELECT * from profile where email='$a' and password='$b'";
$result= mysql_query($query);
$bilang=mysql_num_rows($result);
if ($bilang==0)
print "Invalid $a & $b";
else
{

$_SESSION['email']=$a;
print"<script language=javascript>
alert('Welcome $a');
window.location='display2.php';
</script>";
}
}
?>



