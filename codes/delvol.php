<?php 
require "../config.php";
$d=$_GET["v"];
$cmd="delete from volunteer where email='$d'";
$db=(new Db())->dbConnection();
$x=$db->exec($cmd);
if($x==true)
{
echo "<script>alert('Record Deleted');window.location.href='../../Admin/volunteermgmt.php'</script>";
}
else
{
echo "<script>alert('Record not Deleted');window.location.href='../../Admin/volunteermgmt.php'</script>";
}

?>