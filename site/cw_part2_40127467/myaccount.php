<?php
  include_once 'header.php';
?>



<div class="alert alert-success">
  <?php
    $name = $_SESSION['name'];
    echo "<strong>Name:</strong> $name ";
  ?>
</div>


<div class="alert alert-success">
  <?php
    $lname = $_SESSION['lname'];
    echo "<strong>Last Name:</strong> $lname";
  ?>
</div>

<div class="alert alert-success">
  <?php
    $mail = $_SESSION['email'];
    echo "<strong>Email: </strong> $mail";   
  ?> 
</div>

 <br><br>

<form action = "action.myaccount.php" method="post" >
<input type="submit" name="order" class="btn btn-success" value="Order History" />
<input type="submit" name="update" class="btn btn-success" value="Update Details" />
<input type="submit" name="delete" class="btn btn-success" value="Delete Account" />
</form>




<?php
  include_once 'footer.php';
?>