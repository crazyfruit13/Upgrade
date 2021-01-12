  <?php
  function val($user, $userdel, $totaluser, $total) {
     if (!empty($total)) {
      if (mysqli_query("UPDATE kowskicoin, Users SET coinval= $total WHERE Username =" $totaluser ") === TRUE) {
        $message = "Total successfully adjusted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
      else {
        printf("Error: %s\n", $mysqli->error);
      }
     }elseif (!empty($userdel)) {
       if (mysqli_query("DELETE from kowskicoin WHERE Username=" $userdel") === TRUE) {
        $message = "User successfully deleted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
      else {
        printf("Error: %s\n", $mysqli->error);
      }
    }elseif (!empty($user)) {
       if (mysqli_query("insert Users values (0," $user")) === TRUE) {
        $message = "User successfully adjusted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
      else {
        printf("Error: %s\n", $mysqli->error);
      }  
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
    val($user, $userdel, $totaluser, $total);
 }
echo "<html>";
  echo "<body>";
    echo "<h1>Post Successful.</h1>";
  echo "</body>";
echo "</html>";
 ?>
