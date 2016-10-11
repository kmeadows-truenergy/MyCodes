<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$myDB = new mysqli("dailypricing.crjb42eeu2yx.us-west-2.rds.amazonaws.com", "EB7447user", "EB7447pass", "dailypricing", 3306);

// get the q parameter from URL
$q = $_REQUEST["q"];
$split = $_REQUEST["q"];
$pieces = explode("X", $split);

$PickTable = $pieces[0];
//$PickCol = $pieces[1];


$sqlShowCol = "DESCRIBE ".$PickTable;
$resultSQLCol = $myDB->query($sqlShowCol); 
while ($row = $resultSQLCol->fetch_assoc()) {
     $a[] = "{$row['Field']}";
}

echo '</br></br></br><table id="t01" align="center">'; 
echo '<tr>';
for ($w = 0; $w < sizeof($a); $w++){
   echo "<th>".$a[$w]."</th>";
}
echo '</tr>';

$ShowAll = "SELECT * from ".$PickTable." LIMIT 75";
$resultSQL3 = $myDB->query($ShowAll);
while ($row3 = $resultSQL3->fetch_assoc()) {
   echo '<tr>';
   for ($w = 0; $w < sizeof($a); $w++){
      echo "<td>{$row3[$a[$w]]}</td>";
   }
   echo '</tr>';	
}
echo "</table>";

?>
</select>
</body>
</html>
