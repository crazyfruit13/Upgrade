<!-- Database connection -->
<?php
    $db = mysqli_connect('localhost','root','E68}eb%.@>8+LNMA','kowskicoin')
 or die('Error connecting to MySQL server.');
?>
<html>
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title> Kowskicoin Database </title>
        <link rel="icon" href="https://icons.iconarchive.com/icons/ph03nyx/super-mario/256/Retro-Coin-icon.png">
    </head>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="https://i.ibb.co/Xx1SGVW/Untitled.png" width="200" height="100"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Admin.php">Admin</a>
      </li>
        </nav>
    <body style="background-color: #343A40">
        <table class="table table-striped table-dark">
        <thead class="thead-dark">

        <tr>
        
        <th scope="col">Ranking</th>

        <th scope="col">Username</th>

        <th scope="col">Total Coins</th>

        </tr>
            </thead>
            <tbody>
          <?php
                $i=0;
                $query = "select Username,coinval FROM Users, Kowskicoin WHERE Users_idUsers = idUsers ORDER BY coinval DESC;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                    
                      echo "<th scope='row'>" . ++$i . "</th>";

                      echo "<td>" . $row['Username'] . "</td>";

                      echo "<td>" . $row['coinval'] . "</td>";      

                      echo "</tr>";
                }     
?>
            </tbody>
</table>
</body>
<!-- Footer -->
<footer class="bg-dark text-center text-lg-start">
<!-- Copyright -->
  <div class="text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-light">Arktech Consulting Group, LLC</a>
    </div>
</footer>
</html>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
