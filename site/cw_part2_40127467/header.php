<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Boozy Monkey</title>
    <link rel="stylesheet" href="Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
   
    <style>

      body{
        background-color: #030303;
        height: 500px;
      }
      
    </style>
  </head>

  <body>

<!-- CONTAINER --------------------------------------------------------------------------->
    <div class="container">
      <!-- JUMBOTRON-->
      <div class="jumbotron" style="background-color:#030303;">

      <?php
        $name = $_SESSION['name'];
          if(isset($_SESSION['userId'])){
            echo "<h1> Cheers $name !!!</h1>" ;
          
          }
      ?>

        <!-- NAVBAR ---------------------------------------------------------------------->
          <nav class="navbar navbar-inverse">

            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Boozy Monkey</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="Homepage.php">Home</a></li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Drinks<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Spirits</a></li>
                    <li><a href="Wines.php">Wines</a></li>
                    <li><a href="#">Beers</a></li>
                    <li><a href="#">Coctails</a></li>
                    <li><a href="#">Mixers</a></li>
                  </ul>
                </li>
                <li><a href="#">Mixers</a></li>
                <li><a href="#">Snacks</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">

                <?php

                if(isset($_SESSION['userId'])){
                  
                    echo "<li><a href='trolley.php'><span class='glyphicon glyphicon-shopping-cart'></span>Trolley</a></li>";
                    echo "<li><a href='myaccount.php'><span class='glyphicon glyphicon-user'></span>My Account</a></li>";
                    echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> LogOut</a></li>";
                }else{
                  echo "<li><a href='Form.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                  echo "<li><a href='LogIn.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }

                ?>
                
                
                
             </ul>

          </div>

        </nav><!-- END OF NAVBAR ------------------------------------------------------------------>

      </div><!-- END OF JUMBOTRON ----------------------------------------------------------------->
