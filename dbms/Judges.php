<html>
<head>
<title>Search</title>
</head>
<body>
<h1>Details About Case Id: <?php
echo($_POST['Judge_id']);
?>
</h1>
</br>
<?php
$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
$id="'".$_POST['Judge_id']."'";
$R=$conn->query("SELECT * FROM judge,nyayalaya client where judge_id=".$id." AND Heads_court_id=c_id ");
echo("<table>");

while($row=$R->fetch_assoc()){
	echo("<tr>");
	foreach($row as $key=>$value){
		echo("<td>".$key."</td><td>".$value."</td>");
		echo("</tr>");
	}
	
}

$conn->close();
?>
</body>
</html>
