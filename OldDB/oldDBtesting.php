<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html slmns="http://www.w3.org/TR/xhtml1">
<head>
<style>
select {
    width: 100%;
    border: solid;
    border-radius: 4px;
    background-color: lightgray;
	color: black;
}
body {
    background-color: black;
color: lightgray;
font-family:'calibri';
}
table, th, td {
border-radius:5px;

}
th, td {
    text-align: center;
}
table#t01{
border:solid;
border-color:#494949;
background-color:#565656;
 }
table#t01 th{
color:#28FF21;
background-color:black;
border-radius:5px;
 }
 table#t01 tr{ 
 color:#28FF21;
border:solid;
border-color:red;
 }
table#t01 tr:hover {
background-color: #28FF21;
color: #565656;

}
</style>

<Title>Search Old Daily Pricing DB</title>
<script src="testground.php"></script>

</head>

<body>
<table align="center" style="margin-top:200px">
  <tr style="border:solid;">
    <th>Pick a Table:</th>
    <td>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"id="frm1">
    <?php include 'DBTableList.php';?>
	</form>
  </td>
  <!--<tr>
   <th>Search:</th>
   <td><p>
      <span id="txtHint">Select a table above</span></p> 
  </td>-->
  </tr>
</table>
<p align="center"><span id="txtHint2">Select a table above</span></p>
</br>


</body>
</html>
