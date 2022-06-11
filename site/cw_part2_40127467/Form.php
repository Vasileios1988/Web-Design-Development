<?php
  include_once 'header.php';
?>

<style>
body{
  background-image: url(CarouzelPhotos/cocktailOne.jpeg);
  background-color: #cccccc;
  height: 500px;
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>

        <br><br><br>
        <form action="action.form.php" method="post">

          <div class="form-group">
            <input class="col-lg-4"  type="text" id="fname" name="fname" minlength = "2" maxlength="128" placeholder="Name" required autofocus><br><br>
          </div>

          <div class="form-group">
            <input class="col-lg-4" type="text" id="lname" name="lname" minlength = "2"maxlength="128" placeholder="Surname" required><br><br>
          </div>

          <div class="form-group">
            <input class="col-lg-4" type="email" id="email" name="email" placeholder="Email" required><br><br>
          </div>

          <div class="form-group">
            <input class="col-lg-4" type="password" id="password" name="passwordOne" placeholder="Password" pattern=".{6,}" title="Six or more characters" required><br><br>
          </div>

          <div class="form-group">
            <input  class="col-lg-4" type="password" id="password" name="passwordTwo" placeholder="Repeat Password" pattern=".{6,}" title="Six or more characters"  required><br><br>
          </div>
          
          <button type="submit" name="submit" class="btn btn-default">Sign Up</button>

        </form>

        
 <?php
  include_once 'footer.php';
?>
