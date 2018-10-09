<?php

include "class/adminclass.php";
include 'inc/layout_admin.php';
$user = new Admin();

$code = $_GET['code'];

if (isset($_POST['insert'])) {
  $user->update_product($code);
  $user->messages();

}
?>


<?php

$query1 = "SELECT * FROM product WHERE code='$code'";
$result = $user->fetch($query1);
while ($row = $result->fetch_assoc()) { ?>

  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <h3 class="text-center">Update Product</h3>
      </div>

      <div class="col-md-4">
        <form class="form-group" action="" method="POST" enctype="multipart/form-data">

          <div class="form-group text-center">
             <label for="formGroupExampleInput">Product name</label>
             <input type="text" class="form-control" name="p_name" placeholder="<?php echo $row['name']; ?>"
             value="<?php echo $row['name']; ?>">
         </div>
      </div>
      <div class="col-md-4">
          <div class="form-group text-center">
             <label for="formGroupExampleInput2">Product price</label>
             <input type="text" class="form-control" name="p_price" placeholder="<?php echo $row['price']; ?>"
             value="<?php echo $row['price']; ?>">
          </div>
      </div>
      <div class="col-md-4">
         <div class="form-group text-center">
             <label for="formGroupExampleInput2">Product description</label>
             <input type="text" class="form-control" name="p_description" placeholder="<?php echo $row['description']; ?>" value="<?php echo $row['description']; ?>">
          </div>
      </div>
      <div class="col-md-4">
         <div class="form-group text-center">
             <label for="formGroupExampleInput2">Product image</label>
             <input type="file" class="form-control" name="p_image">
          </div>
      </div>
      <div class="col-md-4">
          <div class="form-group text-center">
             <label for="formGroupExampleInput2">Product code</label>
             <input type="text" class="form-control" name="p_code" placeholder="<?php echo $row['code']; ?>" value="<?php echo $row['code']; ?>">
          </div>
          <div class="form-group text-center">
              <button type="submit" name="insert" class="btn btn-primary">Update Product</button>
           </div>
        </form>
      </div>


    </div>
  </div>

<?php } ?>








<?php include 'inc/footer.php';?>
