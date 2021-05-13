<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body class="container p-4 card mt-4">

<?php

    session_start();
    if($_SESSION["logged_in"]==true){

        echo '
        
            <h3> Hello,'.$_SESSION["name"].'</h3>

            <div class="row mt-4">
            
                <div class="col"><a  href="logout.php" class="text-light btn btn-danger">Logout</a>
                </div>
        
            </div>
        ';
    }

    else{

        header("location: /views/forms/login.php");
    }


?>

</body>
</html>