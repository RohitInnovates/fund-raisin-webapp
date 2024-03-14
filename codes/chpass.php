<?php 
require "../config.php";
session_start();
$opass=$_POST["opass"];
$npass=$_POST["npass"];
$cpass=$_POST["cpass"];
if($npass==$cpass)
{
$uid=$_SESSION["aid"];
$cmd="update login set passwd='$npass' where userid='$uid' and passwd='$opass'";
$db=(new Db())->dbConnection();
$x=$db->exec($cmd);
if($x==true)
{
echo "<script>alert('Password changed successfully ');window.location.href='../login.php'</script>";
}
else
{
echo "<script>alert('Password not changed ');window.location.href='../Admin/changepass.php'</script>";
}
}
else
{
echo "<script>alert('Password does not match ,Plz enter above password');window.location.href='../Admin/changepass.php'</script>";
}
