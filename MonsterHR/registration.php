<?php
  
include './external_autoload.php';

(new controllers\RegistrationController())->index();
    
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
        
        <div id="application-header" class="navbar">
            <h1 class="logo">Monster HR - Registration</h1>
            <div id="super-header-placeholder" class="">
                <ul class="">
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/index.php">Home</a>
                    </li>
                    <li class="header-nav">
                        <a class="nav-link header-link" href="http://localhost/monsterhr/login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="dashboard col-3">
            
           <form method="POST" name="registration">
               <div class="" id="selectUser">
                        <ul class="nav mb-3" id="category-panel">
                            <li class="">
                                <a class="nav-link" href="#" onclick="showSuperForm()" id="userSuper">Super</a>
                            </li>  
                            <li class="">
                                <a class="nav-link" href="#" onclick="showHrForm()" id="userHr">HR</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="#" onclick="showEmployerForm()" id="userEmployer">Employer</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="#" onclick="showEmployeeForm()" id="userEmployee">Employee</a>
                            </li>
                        </ul>
                </div>
               
               <div id="registration-form-super">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Last Name" name="lname">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail"  name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Password"  name="password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Repeat Password"  name="repeat-password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="post_submit" value="Sign Up">
                    </div>
                    <input type="hidden" name="post_tokken" value="0">
               </div>
               
               <div id="registration-form-hr">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Last Name" name="lname">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Company" name="company">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail"  name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Password"  name="password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Repeat Password"  name="repeat-password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="post_submit" value="Sign Up">
                    </div>
                    <input type="hidden" name="post_tokken" value="1">
               </div>
               
               <div id="registration-form-employer">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Company" name="company">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail"  name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Password"  name="password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Repeat Password"  name="repeat-password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="post_submit" value="Sign Up">
                    </div>
                    <input type="hidden" name="post_tokken" value="2">
               </div>
               
               <div id="registration-form-employee">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="First Name" name="fname">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Last Name" name="lname">
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail"  name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Password"  name="password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Repeat Password"  name="repeat-password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="post_submit" value="Sign Up">
                    </div>
                    <input type="hidden" name="post_tokken" value="3">
               </div>
            </form>
            
        </div>
        
        <script src="scripts/application/registration.js"></script>
    </body>
</html>
