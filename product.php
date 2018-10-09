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


if (isset($_GET['code'])) {
  $code = $_GET['code'];
  $row = $obj->viewProducts($code);
}


 ?>

<div class="container-fuid">
  <div class="row">
    <div class="col-md-3 col-sm-3 text-center">
      <a href="<?php echo $row['image']; ?>" data-toggle="lightbox" data-title="<?php echo $row['name']; ?>" data-footer="<?php echo "Price: $" . $row['price']; ?>">
      <img src="<?php echo $row['image']; ?>" class="img-fluid">
    </a>
    </div>

    <div class="col-md-4 col-sm-4 header_style text-center">
      <h3><?php echo $row['name'];?></h3>
      <h4>Prezzo: $<?php echo $row['price'];?></h4>
      <form method="post" action="">
        <div class="form-group text-center">
          <label>Quantity: </label>
          <input type="text" name="quantity" value="1"/ class="form-control">
          <input type="hidden" name="code" value="<?php echo $row['code'];?>"/>
          <input type="submit" class="btn btn-primary primary_style" name="add" value="Add To Cart"/></p>
        </div>
      </form>
    </div>

    <div class="col-md-4 col-sm-4 text-justify">
      <h3><?php echo $row['description'];?><h3>
    </div>
  </div>
</div>

<?php include 'inc/footer.php';
 ?>
