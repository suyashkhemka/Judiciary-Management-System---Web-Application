<?php
		$servername = "localhost";
		$username="root";
		$password="";
		$Dbase="case_management";
		$conn= new mysqli($servername,$username,$password,$Dbase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$cid = "'".$_POST['c_id']."'";
	$cd = "'".$_POST['court_location']."'";
	$ct = "'".$_POST['court_name']."'";
	$ccd = "'".$_POST['court_rank']."'";
	$q = "INSERT INTO `case_management`.`nyayalaya` (`c_id`, `court_location`, `court_name`, `court_rank`) VALUES ($cid,$cd,$ct,$ccd)";
	if($conn->query($q))
	{
	}
	
?>