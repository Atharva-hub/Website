<?php
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$con = mysqli_connect("localhost","id17591241_root","Jzm2J/WM~R6-qgv$","id17591241_details");
$stmt = $con->prepare("SELECT * FROM demo WHERE Nam =? and pass=?");
$stmt->bind_param("ss",$uname,$pwd);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows == 0)
{
	echo "Login Failure.... Try Again";
}
else
{
	header("Location:home.html");
}
$stmt->close();

?>