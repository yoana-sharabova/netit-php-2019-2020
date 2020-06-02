<?php
    include './external_autoload.php';
    
    (new controllers\CategoryController())->index();
    
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
        
        <div id="super-header" class="navbar">
            <h1 class="logo">Monster HR - Super</h1>
            <div id="super-header-placeholder" class="">
                <ul class="">
                    <li class="header-nav">
                        <a class="nav-link header-link" href="./super.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="super.php?action=logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div id="message-banner" class="message success">
            Success record !!!
        </div>
                
        <div id="super-editor" class="dashboard col-3">
            <ul class="nav mb-3">
              <li class="">
                  <a class="nav-link" href="http://localhost/monsterhr/list-post.php">Обяви</a>
              </li>
              <li class="">
                  <a class="nav-link " href="#">Категории</a>
              </li>
              <li class="">
                <a class="nav-link" href="http://localhost/monsterhr/list-hr.php">HR</a>
              </li>
              <li class="">
                <a class="nav-link" href="#">Работодатели</a>
              </li>
              <li class="">
                <a class="nav-link" href="#">Кандидати</a>
              </li>
            </ul>
            <form id="category-editor" method="POST" name="category-editor">
                <div class="form-group">
                    <input id           = "category_title" 
                           class        = "form-control" 
                           type         = "text" 
                           placeholder  = "Category Title"  
                           name         = "category_title">
                </div>
                <div class="form-group d-inline-block">
                    <input id           = "category-editor-submit" 
                           class        = "btn btn-primary" 
                           type         = "submit"
                           value        = "Add New"
                           name         = "category_submit">
                </div>    
                <div class="form-group d-inline-block align-self-center">
                    <input id           = "category-editor-cancel" 
                           class        = "btn btn-dark" 
                           type         = "button"
                           value        = "Cancel"
                           name         = "category_cancel">
                </div>
                <input type         = "hidden" 
                       name         = "post_tokken" 
                       value        = "1">
            </form>
        </div>
        
        <div id="category-container" class="dashboard col-3"></div>

        <script src="scripts/client/netitquery.js"></script>
        <script src="scripts/vendor/jquery.js"></script>
        <script src="scripts/application/categories.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    </body>
</html>
