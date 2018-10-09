
<?php
include 'class/cartclass.php';
include 'inc/layout.php';

$obj = new Cart();
//sending product code to cartclass
if (isset($_POST['add'])) {
  $code = $_POST['code'];
  $result = $obj->addtocart($code);
  $msg = $obj->messages();
  echo "<h3 class='alert alert-success text-center'>" . $msg . " <a href='cart.php'>view cart</a>" . "</h3>" ;
}



 ?>

      <?php
          $query = "SELECT * FROM product";
          $result = $obj->fetch($query);
          if($result){
          while($row=$result->fetch_assoc()){?>

          <form method="POST" action="">
            <div class="row bg">
            <div class="col-md-3 col-sm-3 text-center ">
              <a href="<?php echo $row['image']; ?>" data-toggle="lightbox" data-title="<?php echo $row['name']; ?>" data-footer="<?php echo "Price: $" . $row['price']; ?>">
              <img src="<?php echo $row['image']; ?>" class="img-fluid">
              </a>
            </div>

            <div class="col-md-4 col-sm-4 header_style text-center">
              <h3><?php echo $row['name'];?></h3>
              <h4>Prezzo: $<?php echo $row['price'];?></h4>
            <a href="product.php?action=details&code=<?php echo $row['code'];?>">View all the details</a>
            </div>

            <div class="col-md-3 col-sm-3">
            <p class="text-center">Code: <?php echo strtoupper($row['code']);?></p>

            </div>

            <div class=" col-md-2 col-sm-2 form-group text-center header_style">
              <label>Quantity: </label>
              <input type="text" name="quantity" value="1"/ class="form-control">
              <input type="hidden" name="code" value="<?php echo $row['code'];?>"/>
              <input type="submit" class="btn btn-primary primary_style" name="add" value="Add To Cart"/></p>
            </div>

            </div>
           </form>
           <hr>
           </div>
          <?php }
          }
?>
  </div>
<?php include 'inc/footer.php';
 ?>
