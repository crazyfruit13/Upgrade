<?php
require 'admin.php';

    $db = mysqli_connect('localhost','root','E68}eb%.@>8+LNMA','kowskicoin')
 or die('Error connecting to MySQL server.');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user =  $_POST['adduser'];
    $userdel =  $_POST['removeuser'];
    $totaluser =  $_POST['totaluser'];
    $total =  $_POST['total'];
    if (isset($total)) {
     $result = real_query("UPDATE kowskicoin, Users SET coinval= $total WHERE Username = '$totaluser'");
     alert("Total successfully adjusted!");
    }elseif (isset($userdel)) {
     $result = real_query("DELETE from kowskicoin WHERE Username= '$userdel'");
     alert("User successfully deleted!");
    }elseif (isset($user)) {
     $result = real_query("insert Users values (0, '$user')");
     alert("User successfully added!");
    }else {
        alert('Please select an option!');
    } 
 }
 return $result == true;
 mysqli_close($db);
 ?>
<html>
    <meta http-equiv="refresh" content="time; URL=index.php" />
</html>
