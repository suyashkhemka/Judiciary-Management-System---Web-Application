<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>Table of Case Type: <?php
echo($_POST['Experience']);
?>
</h1>
</br>
<?php
$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
$id="'".$_POST['Experience']."'";
$R=$conn->query("SELECT * FROM judge WHERE judge_id IN(Select judge_id from judge where years_of_services >".$id);
echo("<table style=\"widh:100%\" border=\"1\">");
echo("<tr><th>judge ID</th><th>Judge Name</th><th>Judge Year of Service</th><th>Judge Court head Id</th>");

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
