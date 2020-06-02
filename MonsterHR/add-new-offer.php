<?php
    include './external_autoload.php';
    
    (new controllers\EmployerController())->index();
    
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
        
        <div id="employer-header" class="navbar">
            <h1 class="logo">Monster HR - Employer</h1>
            <div id="employer-header-placeholder" class="">
                <ul class="">
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/employer.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="employer.php?action=logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <?php
            
            if(\session\Session::checkFlashMessage('create_offer_post')) {
                
                echo '<div class="message success">';
                echo \session\Session::getFlashMessage('create_offer_post');
                echo '</div>';
                
            }
        ?>
        
        <div id="blog" class="dashboard col-3">
            
            <ul class="nav">
              <li class="">
                  <a class="nav-link" href="http://localhost/monsterhr/employer.php">Обяви</a> <!-- List company's offers to update status (available -> not available) ot to add new offer -->
              </li>
              <li class="">
                <a class="nav-link" href="#">Кандидати</a> <!-- List all candidates to check their progress -->
              </li>
              <li class="">
                <a class="nav-link" href="#">Нова Обява</a> <!-- List all candidates to check their progress -->
              </li>
            </ul>
            
        </div>
        
        <div id="employer-editor" class="dashboard col-3">
            <form method="POST" name="new-job-offer">
                <select  
                        id      = "select-job-category" 
                        class   = "custom-select mb-3">
                    <option value="1">Art and Design</option>
                    <option value="2">IT Industry</option>
                    <option value="3">Health and Sports</option>
                    <option value="4">Media and Publishing</option>
                    <option value="5">Finance</option>
                </select>
                <div class="form-group">
                    <input class        = "form-control" 
                           type         = "text" 
                           placeholder  = "Job Title"  
                           name         = "post_title" 
                           id           = "post_title">
                </div>
                <div class="form-group">    
                    <textarea class         = "form-control h-40" 
                              type          = "text" 
                              placeholder   = "Job Details" 
                              name          = "post_details" 
                              id            = "post_details"></textarea>
                </div>
                <div class="form-group">    
                    <textarea class         = "form-control h-160" 
                              type          = "text" 
                              placeholder   = "Job Description" 
                              name          = "post_description" 
                              id            = "post_description"></textarea>
                </div>
                
                <div class="form-group">    
                    <input class="btn btn-primary" type="button" id="employer-post-submit" name="offer_submit" value="Submit">
                </div>
                <input type="hidden" name="post_tokken" value="1">
            </form>
        </div>

        <script src="scripts/client/netitquery.js"></script>
        <script src="scripts/vendor/jquery.js"></script>
        <script src="scripts/application/index.js"></script>
        <script src="scripts/application/employer/employer.js"></script>
        
    </body>
</html>
