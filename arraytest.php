<?php

require("connect.php");

$query = "SELECT * FROM property_expense";
$result = mysql_query($query) or die ("no query");

$result_array = array();
while($row = mysql_fetch_assoc($result))
{
    $result_array[] = $row;
}
$query2 = "SELECT * FROM service_bill";
$result2 = mysql_query($query2) or die ("no query");

$result_array2 = array();
while($row2 = mysql_fetch_assoc($result2))
{
    $result_array2[] = $row2;
}

$query3= "SELECT * FROM finaical";
$result3 = mysql_query($query3) or die ("no query");

$result_array3 = array();
while($row3 = mysql_fetch_assoc($result3))
{
    $result_array3[] = $row3;
}
print_r($result_array2[0]);
print_r($result_array[0]);
print_r($result_array3[0]);
?>