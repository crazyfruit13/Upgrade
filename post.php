<?php
    $db = mysqli_connect('localhost','root','E68}eb%.@>8+LNMA','kowskicoin')
 or die('Error connecting to MySQL server.');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user =  $_POST['adduser'];
    $userdel =  $_POST['removeuser'];
    $totaluser =  $_POST['totaluser'];
    $total =  $_POST['total'];
    if (isset($total)) {
     mysqli_real_query($db, "UPDATE kowskicoin, Users SET coinval= $total WHERE Username = '$totaluser'");
     alert("Total successfully adjusted!");
    }elseif (isset($userdel)) {
     mysqli_real_query($db, "DELETE from kowskicoin WHERE Username= '$userdel'");
     alert("User successfully deleted!");
    }elseif (isset($user)) {
    mysqli_real_query($db, "insert Users values (0, '$user')");
     alert("User successfully added!");
    }else {
        alert('Please select an option!');
    } 
 }
 
 ?>
