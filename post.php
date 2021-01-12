  <?php
  function val() {
     $message = "Func val";
     echo "<script type='text/javascript'>alert('$message');</script>";
     if (!empty($total)) {
     $result = real_query("UPDATE kowskicoin, Users SET coinval= $total WHERE Username = '$totaluser'");
     $message = "Total successfully adjusted!";
     echo "<script type='text/javascript'>alert('$message');</script>";
     }elseif (!empty($userdel)) {
     $result = real_query("DELETE from kowskicoin WHERE Username= '$userdel'");
     $message = "User successfully adjusted!";
     echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif (!empty($user)) {
     $result = real_query("insert Users values (0, '$user')");
     $message = "User successfully added!";
     echo "<script type='text/javascript'>alert('$message');</script>";
     
    }else {
        echo "<script type='text/javascript'>alert(Please select an option!);</script>";
    }
     return $result == true;
     mysqli_close($db);
  }
    $db = mysqli_connect('localhost','root','E68}eb%.@>8+LNMA','kowskicoin')
 or die('Error connecting to MySQL server.');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user =  $_POST['adduser'];
    $userdel =  $_POST['removeuser'];
    $totaluser =  $_POST['totaluser'];
    $total =  $_POST['total'];
    val();
 }
echo "<html>";
  echo "<body>";
    echo "<h1>Post Successful.</h1>";
  echo "</body>";
echo "</html>";
 ?>
