<?php
$host = "localhost";
$uname = "root";
$passwd = "";
$db = "mts";
$condb = mysqli_connect($host,$uname,$passwd,$db);
if($condb->connect_error){
    die("Connection Failed : ".$condb->connect_error);
}
$condb->set_charset('utf8');
?>