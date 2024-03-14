<?php 
session_start();
if(isset($_SESSION["aid"]))
{

}
else
{
echo "<script>alert('First Login Then Goto NextZone');window.location.href='../login.php'</script>";
}
?>
<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet"/>
<link href="../css/font-awesome.min.css" rel="stylesheet"/>
<link href="../css/hover-min.css" rel="stylesheet"/>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<style>
#menu a
{
text-decoration:none;
margin-left:10px;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="min-height:90px;background:blue;text-align:center;color:white;font-size:40px">Welcome to Admin Zone</div>
</div>
<div class="row">
<div id="menu" class="col-sm-2" style="min-height:600px;background:silver">
<br/>
<span class="fa fa-dashboard" style="font-size:25px"></span><a href="dashboard.php">Dashboard</a><br/><br/>
<span class="fa fa-users" style="font-size:20px"></span><a href="volunteermgmt.php">Volunteer Mgmt</a><br/><br/>
<span class="fa fa-users" style="font-size:20px"></span><a href="donatemgmt.php">Donate Mgmt</a><br/><br/>
<span class="fa fa-users" style="font-size:20px"></span><a href="contactmgmt.php">Contact Mgmt</a><br/><br/>
<span class="fa fa-edit" style="font-size:20px"></span><a href="addnews.php">Add News</a><br/><br/>
<span class="fa fa-pencil" style="font-size:20px"></span><a href="newsmgmt.php">New Mgmt</a><br/><br/>
<span class="fa fa-edit" style="font-size:20px"></span><a href="changepass.php">Chanage Pass</a><br/><br/>
<span class="fa fa-user" style="font-size:20px;color:red"></span><a href="logout.php">Logout</a><br/><br/>
</div>
<div class="col-sm-10" style="min-height:550px;">
<!--Page Block section -->
<div class="row">
<div class="col-sm-12">
<h2 style="text-align:center">Chanage Password</h1><br/>
</div>
</div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6" style="padding:20px;border:1px solid blue">
<form action="../codes/chpass.php" method="post">
Old Password <input type="password" name="opass" class="form-control" required/>
New Password <input type="password" name="npass" class="form-control" required/>
Confirm Password <input type="password" name="cpass" class="form-control" required/><br/><br/>
<button type="submit" class="btn btn-danger">Change Password</button>
</form>
</div>
<div class="col-sm-3"></div>
</div>
<!--End Page block section --->
</div>
</div>
<div class="row">
<div class="col-sm-12" style="min-height:50px;background:blue;text-align:center;font-size:20px;color:white;">
Copyright &copy Mecatredz Technology Developed & Designed By Er. Ram
</div>
</div>
</div>
</body>
</html>


