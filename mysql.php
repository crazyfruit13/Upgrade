<?php
$host = "localhost";
$user = "root";
$pass = "E68}eb%.@>8+LNMA";
$dbase = "Kowskicoin";

$link = mysqli_connect($host,$user,$pass); if ($link->connect_errno>0) {
    die('Could not connect: ' . $db->error ); }

$db_selected = mysqli_select_db($link, $dbase); if (!$db_selected) {
    die ('Can\'t use database $db : ' . $db->error); }

?>