<?php
  include_once 'header.php';
?>

<style>
th {
  background-color:green;
  color:white;
}

td, label{
  color:white;
}
</style>


<form>

<table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nero D' Avola</td>
        <td>Red Wine</td>
        <td>1</td>
        <td>£50.00</td>
      </tr>
      <tr>
        <td>Chateau de Sancere</td>
        <td>Red Wine</td>
        <td>1</td>
        <td>£40.00</td>
      </tr>
      <tr>
        <td>Chandon</td>
        <td>Fizzy Wine</td>
        <td>1</td>
        <td>£90.00</td>
      </tr>
    </tbody>
  </table>



  <label>Total: </label><br>
  <label>£180.00</label>";
  

</form>




<?php
  include_once 'footer.php';
?>