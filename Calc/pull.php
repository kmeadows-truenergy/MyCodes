<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$myDB = new mysqli("dailypricing.crjb42eeu2yx.us-west-2.rds.amazonaws.com", "EB7447user", "EB7447pass", "dailypricing", 3306);

// get the q parameter from URL
$q = $_REQUEST["q"];
$PickTable = $q;

$sqlShowCol = "DESCRIBE ".$PickTable;
$resultSQLCol = $myDB->query($sqlShowCol);
echo '<select onchange="showHint2(this.value)" id="collistID" name="PickCol" form="frm1" style="height:30px; width:400px; font-size:large">';
echo "<option>Select Column</option>";
while ($row = $resultSQLCol->fetch_assoc()) {
	  echo "<option>{$row['Field']}</option>";
      $a[] = "{$row['Field']}";
}

?>
</select>
</body>
</html>