<?php session_start();
if (!isset($_SESSION['authenticated']))
{
  header('Location login.php');
  exit;
}
else
{
echo"<html>";
    echo"<head>";
         # Required meta tags 
    echo"<meta charset='utf-8'>";
     echo"<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
         # Bootstrap CSS 
         echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
        echo"<title> Kowskicoin Admin Panel </title>";
        echo"<link rel='icon' href='https://icons.iconarchive.com/icons/ph03nyx/super-mario/256/Retro-Coin-icon.png'>";
     echo"</head>";
     # Nav bar 
     echo"<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>";
     echo"<a class='navbar-brand' href='index.php'><img src='https://i.ibb.co/Xx1SGVW/Untitled.png' width='200' height='100'> </a>";
     echo"<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>";
     echo"<span class='navbar-toggler-icon'></span>";
     echo"</button>";
    echo"<div class='collapse navbar-collapse' id='navbarSupportedContent'>";
     echo"<ul class='navbar-nav mr-auto'>";
       echo"<li class='nav-item active'>";
         echo"<a class='nav-link' href='index.php'>Home</a>";
       echo"</li>";
       echo"<li class='nav-item'>";
         echo"<a class='nav-link' href='admin.php'>Admin<span class='sr-only'>(current)</span></a>";
       echo"</li>";
         echo"</nav>";
     echo"<body style='background-color: #343A40'>";
     echo"<div>";
       echo"<h1> Add User</h1>";
       echo"<form action='post.php' method='post'>";
      echo" <div class='form-group row'>";
     echo"<label for='colFormLabelLg' class='col-sm-2 col-form-label col-form-label-lg'><svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person-plus' viewBox='0 0 16 16'>
   <path d='M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
   <path fill-rule='evenodd' d='M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z'/>
</svg></label>";
     echo"<div class='col'>";
       echo"<input type='text' class='form-control' name='adduser' placeholder='Username'>";
     echo"</div>";
     echo"</div>";
   echo"<input type='submit' class='btn btn-info' enctype='multipart/form-data'>";
 echo"</form>";
    /* <div>
      <h1> Remove User</h1> 
      <form action='post.php' method='post'>
      <div class='form-group row'>
    <label for='colFormLabelLg' class='col-sm-2 col-form-label col-form-label-lg'><svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person-x' viewBox='0 0 16 16'>
  <path d='M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
  <path fill-rule='evenodd' d='M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z'/>
</svg></label>
    <div class='col'>
      <input type='text' class='form-control' name='removeuser' placeholder='Username'>
    </div>
    </div>
  <input type='submit' class='btn btn-info' enctype='multipart/form-data'>
 </form>*/
     echo"<div>";
       echo"<h1> Adjust Kowskicoins</h1>";
        echo"<form action='post.php' method='post'>";
        echo"<div class='form-row'>";
     echo"<label for='colFormLabelLg' class='col-sm-2 col-form-label col-form-label-lg'><svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-wallet2' viewBox='0 0 16 16'>
  <path d='M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z'/>
</svg></label>";
     echo"<div class='col'>";
       echo"<input type='text' class='form-control' name='totaluser' placeholder='Username'>";
     echo"</div>";
      echo"<div class='col'>";
       echo"<input type='number' class='form-control' name='total' placeholder='New Total'>";
     echo"</div>";
     echo"</div>";
  echo" <input type='submit' class='btn btn-info' enctype='multipart/form-data'>"; 
 echo"</form>";
     echo"</body>";
# Footer 
 echo"<footer class='bg-dark text-center text-lg-start'>";
# Copyright 
   echo"<div class='text-light p-3' style='background-color: rgba(0, 0, 0, 0.2)'>
    © 2021 Copyright:
    <a class='text-light'>Arktech Consulting Group, LLC</a>";
     echo"</div>";
 echo"</footer>";
 echo"</html>";
}
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
