<?php
  include_once 'header.php';
?>

<style>

body{
  background-image: url(CarouzelPhotos/beer.jpeg);
  background-color: #cccccc;
  height: 500px;
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>

    <br><br><br> 
    
        <form action="action.login.php" method="post">

          <div class="form-group">
            <input class="col-lg-4" type="email" id="email" name="email" placeholder="Email" required autofocus><br><br>
          </div>

          <div class="form-group">
            <input  class="col-lg-4" type="password" id="password" name="password" placeholder="Password" pattern=".{6,}" title="Six or more characters" required><br><br>
          </div>
          
          <button type="submit" name="submit" class="btn btn-default">Log In</button>

        </form>
        
<?php
  include_once 'footer.php';
?>
