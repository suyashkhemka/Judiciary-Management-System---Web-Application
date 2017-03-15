<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>UPDATE CASE ID no: <?php
echo($_POST['judge_id']);
?>
</h1>
</br>
<?php
$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
$constraint="'".$_POST['judge_id']."'";
$Rows=$conn->query("SELECT * FROM judge WHERE judge_id=".$constraint);
echo("<form action=\"UpdateJud.php\" method=\"Post\">");
while($R=$Rows->fetch_assoc()){
foreach($R as $key=>$value){
	if($key=='judge_id'){
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
