<?php 
require "../config.php";
$d=$_GET["v"];
$cmd="delete from addnews where title='$d'";
$db=(new Db())->dbConnection();
$x=$db->exec($cmd);
if($x==true)
{
echo "<script>alert('Record Deleted');window.location.href='../../Admin/newsmgmt.php'</script>";
}
else
{
echo "<script>alert('Record not Deleted');window.location.href='../../Admin/newsmgmt.php'</script>";
}