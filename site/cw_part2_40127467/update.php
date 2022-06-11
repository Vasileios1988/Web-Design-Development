<?php
  include_once 'header.php';
?>


<form action = "action.myaccount.php" method="post">
    <div class="form-group">    
         <input class="col-lg-4"  type="text" id="fname" name="fname" minlength = "2" maxlength="128" placeholder="Name" required autofocus><br><br>
    </div>

    <div class="form-group">
        <input class="col-lg-4" type="text" id="lname" name="lname" minlength = "2"maxlength="128" placeholder="Surname" required><br><br>
    </div>

    <div class="form-group">
        <input class="col-lg-4" type="email" id="email" name="email" placeholder="Email" required><br><br>
    </div>

     <button type="submit" name="updateBtn" class="btn btn-info">Update Details</button>
</form>


<?php
  include_once 'footer.php';
?>