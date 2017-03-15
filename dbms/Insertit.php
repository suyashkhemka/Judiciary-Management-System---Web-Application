<?php
		$servername = "localhost";
		$username="root";
		$password="";
		$Dbase="case_management";
		$conn= new mysqli($servername,$username,$password,$Dbase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$conn= new mysqli($servername,$username,$password,$Dbase);
	$str="'".$_POST['case_court_id']."'";
	//$check=mysql_query("Select COUNT(*) FROM nyayalaya WHERE c_id=".$str);
	//echo($check);
	//if($check==1){
	$sth=$conn->query("Select COUNT(*) FROM nyayalaya WHERE c_id=".$str);
	$ans=$sth->fetch_array(MYSQLI_NUM);
	if($ans[0]!=0)
	{
	echo 'already exists';
		
	}
	else{
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
	$cid = "'".$_POST['CaseId']."'";
	$cd = "'".$_POST['case_description']."'";
	$ct = "'".$_POST['case_type']."'";
	$ccd = "'".$_POST['case_court_id']."'";
	$cs = "'".$_POST['case_status']."'";
	$q = "INSERT INTO `case_management`.`case_data` (`CaseId`, `case_description`, `case_type`, `case_court_id`, `case_status`) VALUES ($cid,$cd,$ct,$ccd,$cs)";
	if($conn->query($q))
	{
		echo 'Successfully Inserted';}
	
?>