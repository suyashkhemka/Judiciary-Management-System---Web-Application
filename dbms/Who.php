<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>Client And His Attorney <?php
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
$id="'".$_POST['case_id']."'";
$R=$conn->query("(SELECT b.attorney_id,b.attorney_name,c.client_id,c.client_name FROM prosecute p INNER JOIN client c ON client_case_id=pro_case_id AND pro_case_id=".$id."INNER JOIN attorney b ON pro_attorney_id=attorney_id )");

echo("<table style=\"width:100%\" border=\"1\">");
echo("<tr><th>Prosecuter ID</th><th>Prosecuter Name</th><th>Client Id</th><th>Client Name</th><th>Defence Attorney Id</th><th>Defence Attorney Name</th></tr>");
echo"<tr>";
while($row=$R->fetch_assoc()){
	foreach($row as $key=>$value){
		echo("<td>".$value."</td>");
	}
}

$R=$conn->query("SELECT a.attorney_id,a.attorney_name FROM defence d INNER JOIN client c ON client_id=def_client_id AND client_case_id=".$id ."INNER JOIN attorney a ON attorney_id=def_attorney_id");
while($p=$R->fetch_assoc()){
	foreach($p as $key=>$value){
		echo("<td>".$value."</td>");
	}
}
echo("</tr>");
echo("</table>");
$conn->close();
?>
</body>
</html>
