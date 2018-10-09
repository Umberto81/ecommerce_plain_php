<?php
include "class/cartclass.php";
include 'inc/layout.php';


$obj=new Cart();

if(isset($_GET["action"])){
 $code=$_GET['code'];
 $obj->remove($code);
}


$msg = $obj->messages();
if (!empty($msg)) {
  echo "<h3 class='alert alert-success text-center'>" . $msg . "</h3>";

}else {
  echo "";
}



?>
  <div class="container-fluid">
<?php
if(!empty($_SESSION['cart'])){
 $total=0;
 ?>

  <table class="table table-hover">
  <thead>
    <tr>
       <th>Name</th>
       <th class="text-center">Price</th>
       <th class="text-center">Quantity</th>
       <th class="text-center">Total Price</th>
       <th class="text-center">Action</th>
    </tr>
  </thead>
  <?php foreach($_SESSION['cart'] as $row){

   ?>
     <tr>
    <td><?php echo $row['name'];?></td>
    <td class="text-center">$<?php echo number_format($row['price'],2);?></td>
    <td class="text-center"><?php echo $row['quantity'];?></td>
    <td class="text-center">$<?php echo number_format(($row['price'])*($row['quantity']),2);?></td>
    <td class="text-center"><a href="?action=remove&code=<?php echo $row['code'];?>"><i class="fas fa-trash-alt "></i></a></td>
  </tr>
  <?php
  $total +=$row['price']*$row['quantity'];
  };?>
  <tr>
     <td colspan="3">Total price:</td>
  <td colspan="4">$<?php echo number_format($total,2);?></td>
  </tr>
  </table>
<?php
 }else{
  echo '<div class="alert alert-danger text-center"><b>Your Cart is Empty</b></div>';
 }?>
 <div class="text-center"><a href="show.php" class="text-center"><i class="fas fa-shopping-cart"></i> Continue Shopping</a></div>

   </div>
   <?php include 'inc/footer.php';
    ?>
