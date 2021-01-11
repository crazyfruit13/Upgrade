<?php
    require("../data/mysql.php");
?>
echo"<html>"
    echo"<body>"
    	echo"<h1> Kowskicoin Database </h1>"
        echo "<table border='1'>

        <tr>

        <th>Username</th>

        <th>Coin Total</th>

        </tr>";
          <?php
                $query = "select Username,coinval FROM Users, Kowskicoin WHERE Users_idUsers = idUsers ORDER BY coinval DESC;";
                $result = mysqli_query($dbase, $query);
                while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";

                      echo "<td>" . $row['Username'] . "</td>";

                      echo "<td>" . $row['coinval'] . "</td>";      

                      echo "</tr>";
                }
        echo "</table>";
    echo "</body>"
echo "</html>"
>?
