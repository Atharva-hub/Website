<?php
$name=$_POST["name"];
$city=$_POST["city"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$con = mysqli_connect("localhost","id17591241_root","Jzm2J/WM~R6-qgv$","id17591241_details");
$stmt = $con->prepare("insert into demo (Nam,Pass,Name,City)
values (?,?,?,?)");
$stmt-> bind_param("ssss",$name,$pwd,$uname,$city);
$stmt->execute();
echo "Accout Created You can log in through login portal";
?>