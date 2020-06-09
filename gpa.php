<?php
 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $db_selected = mysql_select_db("DBMS",$con);
  $result = mysql_query("SELECT MAX(CGPA) FROM STUDENT",$con);
  while ($r1 =mysql_fetch_row($result))
{
	print_r($r1);
       	echo "<br>";
}
 mysql_close($con);
?>
