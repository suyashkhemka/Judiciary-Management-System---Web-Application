<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>Details About Case Id: <?php
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
$R=$conn->query("SELECT * FROM case_data, client where CaseId=".$id." AND client_case_id=CaseId ");

while($row=$R->fetch_assoc()){
	foreach($row as $key=>$value){
		echo($key.":".$value."<br>");
	}
}

$conn->close();
?>
</body>
</html>
