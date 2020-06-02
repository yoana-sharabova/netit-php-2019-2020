<?php
    include './external_autoload.php';
    
    (new controllers\IndexController())->index();
    
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
        
        <div id="index-header" class="navbar">
            <h1 id="web-logo" class="logo">Monster HR</h1>
            <div id="index-header-placeholder" class="">
                <ul class="">
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/index.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/registration.php">Sign up</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div id="blog" class="dashboard col-3">

            <ul class="nav mb-3" id="category-panel">
                <li class="">
                    <a class="nav-link" href="index.php">Обяви</a>
                </li>  
                <li class="">
                    <a class="nav-link" href="#">Фирми</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Сфера на заетост</a>
                    <div class="dropdown-menu" id="category-dropdown" aria-labelledby="navbarDropdown"></div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" id="search-form">
                <input class="form-control mr-lg-2" id="search-post" type="text" placeholder="Search" aria-label="Search">

                <select class="custom-select mr-lg-2" id="search-post-combobox">
                    <option value="title">Search by Title</option>
                    <option value="description">Search by Description</option>
                </select>

                <div class="d-flex">
                    <input class="btn btn-outline-success my-2 my-sm-0 mr-2" id="search-post-action" type="button" value="Search">
                    <input class="btn btn-outline-success my-2 my-sm-0" id="search-post-clear" type="button" value="Clear">
                </div>
            </form>

            <div id="content-full-view" class="container mt-4">
                <div id="content-full-view-post" class=""></div>

                <div id="content-full-view-comment" class="form-group">

                    <div id="content-full-view-comment-placeholder"></div>

                    <form method="POST">
                        <textarea class = "form-control h-160 mb-3" id="full-view-comment-textarea" name="full-view-comment"></textarea>
                        <button class="btn btn-primary" id="full-view-comment-action" type="button">Send Comment</button>
                    </form>
                </div>
            </div>

            <div id="content" class="container">

            </div>
        </div>
        
        <script src="scripts/client/netitquery.js"></script>
        <script src="scripts/vendor/jquery.js"></script>
        <script src="scripts/application/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    </body>
</html>
