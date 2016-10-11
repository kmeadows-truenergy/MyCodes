<!DOCTYPE html>
<html lang="en">
<!-- All tables in the Database to choose from  -->

<form> 
<select onchange="showHint(this.value);showHint2(this.value)" id="TableList" name="PickTable" form="frm1" 
	style="height:30px; width:400px; font-size:large">
<?php
echo "<option>Select a table</option>";
$myDB = new mysqli("dailypricing.crjb42eeu2yx.us-west-2.rds.amazonaws.com", "EB7447user", "EB7447pass", "dailypricing", 3306);
$sqlShowTables = "SELECT * FROM information_schema.tables WHERE TABLE_TYPE='BASE TABLE'";
$resultSQLTables = $myDB->query($sqlShowTables);

while ($row4 = $resultSQLTables->fetch_assoc()) {
echo "<option>{$row4['TABLE_NAME']}</option></br>";
  } 
?>
</select></form>
</html>