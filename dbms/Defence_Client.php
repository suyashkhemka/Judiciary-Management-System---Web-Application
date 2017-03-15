<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>Client And His Attorney <?php
echo($_POST['client_id']);
?>
</h1>
</br>
<?php
$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
$id="'".$_POST['client_id']."'";
$R=$conn->query("SELECT a.*,c.* FROM defence d INNER JOIN client c ON client_id=def_client_id AND def_client_id=".$id ."INNER JOIN attorney a ON attorney_id=def_attorney_id");
echo("<table style=\"widh:100%\" border=\"1\">");
echo("<tr><th>attorney Id</th><th>attorney Name</th><th>attorney speciality</th><th>attorney Address</th><th>Client Id</th><th>Client Name</th><th>Client Address</th><th>Client DOB</th><th>Case Id</th><th>Contact</th></tr>");

while($row=$R->fetch_assoc()){
	echo("<tr>");
	foreach($row as $key=>$value){
		echo("<td>".$value."</td>");
	}
	echo("</tr>");
}
echo("</table>");

$conn->close();
?>
</body>
</html>
