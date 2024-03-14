<?php
require "../config.php";
$name = $_POST["name"];
$email = $_POST["email"];
$mob = $_POST["mob"];
$amount = $_POST["amount"];
$pd = $_POST["pd"];
$addd = $_POST["addd"];
$dt = date('d/m/Y');


$db = (new Db())->dbConnection();
$cmd = "insert into donate values('$name','$email','$mob','$amount','$pd','$addd','$dt')";
$x = $db->exec($cmd);
if ($x == true) {
    echo "<script>alert('Thanks for Donation as soon as we my team contact you ');window.location.href='../donate.php'</script>";
} else {
    echo "<script>alert('Your Request is not completed');window.location.href='../donate.php'</script>";
}