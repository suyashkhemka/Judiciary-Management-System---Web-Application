<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>Table of Case Type: <?php
echo($_POST['case_type']);
?>
</h1>
</br>
<?php
$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
$id="'".$_POST['case_type']."'";
$R=$conn->query("SELECT * FROM case_data,client WHERE CaseId=client_case_id AND case_type=".$id);
echo("<table style=\"widh:100%\" border=\"1\">");
echo("<tr><th>Case Id</th><th>Case Description</th><th>Case Type</th><th>Court Id</th><th>Case Status</th><th>Client id</th><th>client name</th><th>client Address</th><th>Client DOB</th><th>Case Id</th><th>Contact</th></tr>");

while($row=$R->fetch_assoc()){
	echo("<tr>");
	foreach($row as $key=>$value){
		echo("<td>".$value."</td>");
	}
	echo("</tr>");
}

$conn->close();
?>
</body>
</html>
