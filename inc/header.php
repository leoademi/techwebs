<?php
    ob_start();
    require "funksionet.php";
    require "funk.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> TechWebs</title>
    <link rel="stylesheet" href="styleee.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    
</head>
<body>
    <header>
        <div class="container">
            <div id="emri">
            <img src="images/techwebslogo1.png-removebg-preview.png">
            </div>
            <div class="toggle-navbar-icon" onclick="toggleNav()"><img src="images/icon.png" alt=""></div>
            <div class="toggle-navbar">
                <nav>
                    <ul>
                        <li><a href='home.php'>Home</a></li>
                        <li><a href='about.php'>About</a></li>
                        <li><a href='services.php'>Services</a></li>
                        <li><a href='news.php'>News</a></li>
                        <li><a class="register" href='signin.php'>Sign In/Register</a></li> 
                        
                        <?php if(isset($_SESSION['antari'])){
                        
                            if($_SESSION['antari']['roli'] == 1){
                        echo "<li><a href='antaret.php'>Anetaret</a></li>";       
                            }
                        } ?>                                       
                                
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <script src="header.js"></script>
</body>                                                                               