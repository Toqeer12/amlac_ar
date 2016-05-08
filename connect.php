<?php




$user='root';
$password='';
$database='test';


mysqli_connect('localhost',$user,$password);

@mysql_select_db($database) or die( "Connection Error");



// $Instance = "ARROWTEC4";
// $ConnectionInfo = array( "Database"=>"Users", "UID"=>"Toqeer12", "PWD"=>"123456");
// $conn = sqlsrv_connect( $Instance, $ConnectionInfo);
// if( $conn ) {
//         echo "Connection established to ";
// }else{
//  echo "Connection could not be established.";
//  print_r($ConnectionInfo);
//      die( print_r( sqlsrv_errors(), true));
// }

?>