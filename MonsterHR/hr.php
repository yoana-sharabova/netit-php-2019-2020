<?php
    include './external_autoload.php';
    
    (new controllers\HrController())->index();
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Monster HR</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/public.css">
    </head>
    <body>
        
        <div id="hr-header" class="navbar">
            <h1 class="logo">Monster HR - HR</h1>
            <div id="hr-header-placeholder" class="">
                <ul class="">                    
                    <li class="header-nav">
                        <a class="nav-link header-link" href="./index.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="hr.php?action=logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div id="blog" class="dashboard col-3">
            
            <ul class="nav">
              <li class="">
                <a class="nav-link" href="#">Позиции</a>
              </li>
              <li class="">
                <a class="nav-link" href="#">Кандидати</a>
              </li>
            </ul>
            
            <div id="content"class="container"></div>
            
        </div>
        
        <script src="scripts/client/netitquery.js"></script>
        <script src="scripts/vendor/jquery.js"></script>
        <script src="scripts/application/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    </body>
</html>
