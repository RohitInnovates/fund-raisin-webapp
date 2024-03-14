<?php
require "../config.php";
$uploadir = __DIR__."/../news/";

$uploadfile = $uploadir . basename($_FILES["pic"]["name"]);

$title = $_POST["title"];
$pic = $_FILES["pic"]["name"];
$d = $_POST["descri"];
$dt = date('d/m/Y');

$cmd = "insert into addnews values('$title','$pic','$d','$dt')";
$db = (new Db())->dbConnection();
if ($db->exec($cmd)) {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $uploadfile)) {
        echo "<script>alert('News Added successfully ');window.location.href='../Admin/addnews.php'</script>";
    }
} else {
    echo "<script>alert('News not Added ');window.location.href='../Admin/addnews.php'</script>";
}
