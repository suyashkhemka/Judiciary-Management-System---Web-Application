<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>UPDATE CASE ID no: <?php
echo($_POST['case_id']);
?>
</h1>
</br>
<?php
$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
$constraint="'".$_POST['case_id']."'";
$Rows=$conn->query("SELECT * FROM case_data WHERE CaseId=".$constraint);
echo("<form action=\"Updateit.php\" method=\"Post\">");
while($R=$Rows->fetch_assoc()){
foreach($R as $key=>$value){
	if($key=="CaseId"){
		echo("<p>".$key.":".$value."</p>");
		echo("<input type=\"text\" name=\"".$key."\" value=\"".$value."\" hidden/></p>");
	}
	else{
	echo(" <p>".$key."<input type=\"text\" name=\"".$key."\" value=\"".$value."\"/></p>");
	}
}
}
echo("<input type=\"submit\" value=\"Submit\"/>");
echo("</form>");


$conn->close();
?>
</body>
</html>
