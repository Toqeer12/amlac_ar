<?php 
session_start();
if(session_destroy())
{
header("Location: login.php");
}
else
{
header("Location: index_2.html");

}
?>
