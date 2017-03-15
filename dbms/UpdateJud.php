<?php

$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$str="'".$_POST['Heads_court_id']."'";
$sth=$conn->query("Select COUNT(*) FROM nyayalaya WHERE c_id=".$str);
	$ans=$sth->fetch_array(MYSQLI_NUM);
	if($ans[0]==0){
	echo("Court id doesnot exist");
	echo("<p>Create The court Id</p>");
	echo("<form action=\"InsertCourt.php\" method=\"Post\">");
	echo(" <p>Court Id:c_id</p>");
	echo("<input type=\"text\" name=\"court_location\" placeholder=\"court Loactaion\" hidden/></p>");
	echo(" <p>Court Location<input type=\"text\" name=\"court_location\" placeholder=\"court Loactaion\" required/></p>");
	echo(" <p>Court Name<input type=\"text\" name=\"court_name\" placeholder=\"Court Name\" required/></p>");
	echo(" <p>Court Rank<input type=\"text\" name=\"court_rank\" placeholder=\"Court Rank\"/required></p>");
	echo("<input type=\"submit\" value=\"Submit\"/>");
	echo("</form>");		
	}
$constraint="'".$_POST['judge_id']."'";
$R=$conn->query("SELECT * FROM judge WHERE judge_id=".$constraint);

foreach($_POST as $key=>$value){
	if($conn->query("UPDATE judge SET ".$key."= '".$value."' WHERE judge_id=".$constraint))
{
	}
	else{
		echo'error';
	}
	}
$conn->close();
?>
