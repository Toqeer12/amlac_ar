<?php

$db_username = ''; //username
$db_password = ''; //password

//path to database file
$database_path = "C:\Users\Arrowtec\Downloads\db1.mdb";

//check file exist before we proceed
if (!file_exists($database_path)) {
    die("Access database file not found !");
}

//create a new PDO object
$database = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$database_path; Uid=$db_username; Pwd=$db_password;");

$sql  = "SELECT * FROM users";
$result = $database->query($sql);
while ($row = $result->fetch()) {
    echo $row["u_name"];
    echo $row["u_email"];
    echo $row["u_website"];
}
?>