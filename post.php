<?php
$servername = "localhost";
$username = "root";
$password = "E68}eb%.@>8+LNMA";
$dbname = "kowskicoin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  function adduser($user) {
        global $conn;
        $sql = "insert into Users (idUsers, Username) values (0," '.$user.'")";
        if ($conn->query($sql) === TRUE) {
        $message = "User successfully adjusted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else {
        printf("Error: %s\n", $conn->error);
      }  
 }
 
  function deluser($userdel) {
       global $conn;
       $sql = "DELETE from kowskicoin WHERE Username=" '.$userdel';
       if ($conn->query($sql) === TRUE) {
        $message = "User successfully deleted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else {
        printf("Error: %s\n", $mysqli->error);
  }
}
  function adjust($total, $totaluser) {
    global $conn;
     $sql = "UPDATE kowskicoin, Users SET coinval=" .$total. "WHERE Username =" '.$totaluser';
     if ($conn->query($sql) === TRUE) {
     $message = "Total successfully adjusted!";
     echo "<script type='text/javascript'>alert('$message');</script>";
      }else {
        printf("Error: %s\n", $mysqli->error);
  }
}
  function val($user, $userdel, $totaluser, $total) {
     if (!empty($total)) {
       adjust($total, $totaluser);
    }elseif (!empty($userdel)) {
       deluser($userdel);
    }elseif (!empty($user)) {
       adduser($user);
    }else {
        echo "<script type='text/javascript'>alert(Please select an option!);</script>";
    }
  }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user =  $_POST['adduser'];
    $userdel =  $_POST['removeuser'];
    $totaluser =  $_POST['totaluser'];
    $total =  $_POST['total'];
    val($user, $userdel, $totaluser, $total);
 }
echo "<html>";
  echo "<body>";
    echo "<h1>Post Successful.</h1>";
  echo "</body>";
echo "</html>";
 $conn->close();
 ?>
