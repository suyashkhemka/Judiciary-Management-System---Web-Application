<?php

$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$constraint="'".$_POST['CaseId']."'";
$str="'".$_POST['case_court_id']."'";
	$sth=$conn->query("Select COUNT(*) FROM nyayalaya WHERE c_id=".$str);
	$ans=$sth->fetch_array(MYSQLI_NUM);
	if($ans[0]==0)
	{
	echo("Court id doesnot exist");
	echo("<p>Create The court Id</p>");
	echo("<form action=\"InsertCourt.php\" method=\"Post\">");
	echo(" <p>Court Id<input type=\"text\" name=\"c_id\" placeholder=\"Court id\"/></p>");
	echo(" <p>Court Location<input type=\"text\" name=\"court_location\" placeholder=\"court Loactaion\"/></p>");
	echo(" <p>Court Name<input type=\"text\" name=\"court_name\" placeholder=\"Court Name\"/></p>");
	echo(" <p>Court Rank<input type=\"text\" name=\"court_rank\" placeholder=\"Court Rank\"/></p>");
	echo("<input type=\"submit\" value=\"Submit\"/>");
	echo("</form>");		
	}

$R=$conn->query("SELECT * FROM case_data WHERE CaseId=".$constraint);

foreach($_POST as $key=>$value){
	if($conn->query("UPDATE case_data SET ".$key."= '".$value."' WHERE CaseId=".$constraint))
	{
		echo 'Updated<br>';
	}
	else{
		echo'error';
	}
	}
$conn->close();
?>
