<?php
require "../config.php";
session_start();
$db = (new Db())->dbConnection();

$uid = $_POST["uid"];
$passwd = $_POST["psd"];
$cmd = "select userid,passwd from login where userid='$uid' and passwd='$passwd'";


$stm = $db->query($cmd);
if ($row = $stm->fetch()) {

    $email = $row["userid"];
    $p = $row["passwd"];
    if ($email == $uid && $p == $passwd) {
        //set value into session 
        $_SESSION["aid"] = $email;
        echo "<script>alert('Welcome to AdminZone ');window.location.href='../Admin/dashboard.php'</script>";
    } else {
        echo "<script>alert('Invalid UserId or Password');window.location.href='../login.php'</script>";
    }
} else {
    echo "<script>alert('Invalid UserId or Password');window.location.href='../login.php'</script>";
}
