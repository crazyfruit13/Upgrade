  <?php

    $db = mysqli_connect('localhost','root','E68}eb%.@>8+LNMA','kowskicoin')
 or die('Error connecting to MySQL server.');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user =  $_POST['adduser'];
    $userdel =  $_POST['removeuser'];
    $totaluser =  $_POST['totaluser'];
    $total =  $_POST['total'];
    if (!empty($total)) {
     $result = real_query("UPDATE kowskicoin, Users SET coinval= $total WHERE Username = '$totaluser'");
     echo "<script type='text/javascript'>alert(Total successfully adjusted!);</script>";
    }elseif (!empty($userdel)) {
     $result = real_query("DELETE from kowskicoin WHERE Username= '$userdel'");
     echo "<script type='text/javascript'>alert(User successfully deleted!);</script>";
    }elseif (!empty($user)) {
     $result = real_query("insert Users values (0, '$user')");
     echo "<script type='text/javascript'>alert(User successfully added!);</script>";
    }else {
        echo "<script type='text/javascript'>alert(Please select an option!);</script>";
    } 
 }
 return $result == true;
 mysqli_close($db);
 ?>
<html>
</html>
