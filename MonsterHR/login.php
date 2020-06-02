<?php
  
include './external_autoload.php';

(new controllers\LoginController())->index();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Monster HR</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style/style.css">
        <link rel="stylesheet" href="style/public.css">
    </head>
    <body>
               
        <div id="application-header" class="navbar">
            <h1 class="logo">Monster HR - Log In</h1>
            <div id="super-header-placeholder" class="">
                <ul class="">
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/index.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/registration.php">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <?php
            
            if(\session\Session::checkFlashMessage('error_message')) {
                
                echo '<div class="message error">';
                echo \session\Session::getFlashMessage('error_message');
                echo '</div>';
                
            }
            
        ?>
        
        <div class="dashboard col-3">
            
           <form method="POST" name="login">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="E-mail"  name="email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Password"  name="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="post_submit" value="Log In">
                </div>
                    <input type="hidden" name="post_tokken" value="1">
               
            </form>
            
        </div>
        
    </body>
</html>
