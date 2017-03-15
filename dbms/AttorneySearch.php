<html>
<head>
<title>Update case</title>
</head>
<body>
<h1>Table of Attorney: <?php
echo($_POST['attorney_special']);
?>
</h1>
</br>
<?php
$servername = "localhost";
$username="root";
$password="";
$Dbase="case_management";
$conn= new mysqli($servername,$username,$password,$Dbase);
$id="'".$_POST['attorney_special']."'";
$R=$conn->query("SELECT * FROM attorney WHERE attorney_special=".$id);
echo("<table style=\"widh:100%\" border=\"1\">");
echo("<tr><th>Attorney Id</th><th>Attorney Name</th><th>Attorney Special</th><th>Attorney Address</th>");
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
