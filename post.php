<?php
    $db = mysqli_connect('localhost','root','E68}eb%.@>8+LNMA','kowskicoin')
 or die('Error connecting to MySQL server.');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user =  $_POST['adduser'];
    $userdel =  $_POST['removeuser'];
    $totaluser =  $_POST['totaluser'];
    $total =  $_POST['total'];
    if (isset($total)) {
        adustotal(); 
    }elseif (isset($userdel)) {
        deluser();
    }elseif (isset($user)) {
        adduser();
    }else {
        alert('Please select an option!');
    } 
 }
 
 function adjusttotal() {
     $query = $mysqli->query("UPDATE kowskicoin, Users SET coinval= $total WHERE Username = '$totaluser'");
     alert("Total successfully adjusted!");
 }
 function deluser() {
     $query = $mysqli->query("DELETE from kowskicoin WHERE Username= '$userdel'");
     alert("User successfully deleted!");
 }
 function adduser() {
     $query = $mysqli->query("insert Users values (0, '$user')");
     alert("User successfully added!"); 
 }
 ?>