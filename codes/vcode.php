<?php
require "../config.php";
$uploadir = "C:/wamp/www/YATI Foundation/volunteers/";
$uploadfile = $uploadir . basename($_FILES["file"]["name"]);
$name = $_POST["name"];
$email = $_POST["email"];
$mob = $_POST["mob"];
$gen = $_POST["gen"];
$vpic = $_FILES["file"]["name"];
$addr = $_POST["addr"];
$dt = date('d/m/Y');
$cmd = "insert into volunteer values('$name','$gen','$email','$mob','$vpic','$addr','$dt')";
$db = (new Db())->dbConnection();
try {
    $x = $db->exec($cmd);
    if ($x == true) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)) {
            echo "<script>alert('Thanks for become a Volunteer');window.location.href='../Volunteer.php'</script>";
        }
    } else {
        echo "<script>alert('Your Request is not completed ');window.location.href='../Volunteer.php'</script>";
    }
} catch (\PDOException $th) {
    echo "<script>alert('You are already a voluntear ');window.history.back()</script>";
    // echo $th->getMessage();
}
