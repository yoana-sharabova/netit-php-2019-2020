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
        
        <div id="super-header" class="navbar web-header">
            <h1 class="logo">Monster HR - Super</h1>
            <div id="super-header-placeholder" class="">
                <ul class="">
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/super.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/categories.php">Add New</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="super.php?action=logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div id="blog" class="dashboard col-3">

            <ul class="nav mb-3">
              <li class="">
                  <a class="nav-link" href="http://localhost/monsterhr/list-post.php">Обяви</a>
              </li>  
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Категории</a>
                  <div class="dropdown-menu" id="category-dropdown" aria-labelledby="navbarDropdown"></div>
              </li>
              <li class="">
                <a class="nav-link" href="#">HR</a>
              </li>
              <li class="">
                <a class="nav-link" href="#">Работодатели</a>
              </li>
              <li class="">
                <a class="nav-link" href="#">Кандидати</a>
              </li>
            </ul>
            
            <div id="content" class="container">
                
            </div>    
        </div>

        <script src="scripts/client/netitquery.js"></script>
        <script src="scripts/vendor/jquery.js"></script>
        <script src="scripts/application/super/list-hr.js"></script>
        <script src="scripts/application/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    </body>
</html>

