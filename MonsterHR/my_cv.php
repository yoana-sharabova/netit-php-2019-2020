<?php
    include './external_autoload.php';
    
    (new controllers\EmployeeController())->index();
    
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
        
        <div id="employee-header" class="navbar web-header">
            <h1 class="logo">Monster HR - My CV</h1>
            <div id="employee-header-placeholder" class="">
                <ul class="">
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/employee.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="">Offer Updates</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="employee.php?action=logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        
         <?php
            
            if(\session\Session::checkFlashMessage('create_cv')) {
                
                echo '<div class="message success">';
                echo \session\Session::getFlashMessage('create_cv');
                echo '</div>';
                
            }
        ?>
        
        <div id="employee-editor" class="dashboard col-3">
            <form method="POST" name="new-cv">
                <div class="form-group">
                    <input class="form-control" type="text" required placeholder="Address"  name="address">
                </div>
                <div class="form-group">
                    <input class="form-control" type="telephone" required placeholder="Mobile"  name="mobile">
                </div>
                <div class="form-group">
                    <textarea class="form-control h-160" type="text" required placeholder="Experience" name="experience"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control h-160" type="text" required placeholder="Skills" name="skills"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control h-160" type="text" required placeholder="Education" name="education"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update CV" name="cv_submit">
                </div>
                <input type="hidden" name="post_tokken" value="1">
            </form>
        </div>