O<html>
<head></head>
<body>
<?php 
session_start();
if(isset($_SESSION["aid"]))
{
session_destroy();
echo "<script>alert('Logout');window.location.href='../login.php'</script>";
}
else
{
echo "<script>alert('First Login Then Goto NextZone');window.location.href='../login.php'</script>";
}
?>
</body>
</html>