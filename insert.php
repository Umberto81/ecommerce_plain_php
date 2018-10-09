<?php

include "class/adminclass.php";
include 'inc/layout_admin.php';
$user = new Admin();

if (!isset($_SESSION['login'])) {
  header('Location:login.php');
}

if (isset($_POST['insert'])) {
  $user->insert_product();
  $user->messages();
}
?>


<div class="container-fluid">
  <div class="row">

    <div class="col-md-12">
      <h3 class="text-center">Insert Product</h3>
    </div>

    <div class="col-md-4">
      <form class="form-group" action="" method="POST" enctype="multipart/form-data">

        <div class="form-group text-center">
           <label for="formGroupExampleInput">Product name</label>
           <input type="text" class="form-control" name="p_name" placeholder="Product name">
       </div>
    </div>
    <div class="col-md-4">
        <div class="form-group text-center">
           <label for="formGroupExampleInput2">Product price</label>
           <input type="text" class="form-control" name="p_price" placeholder="Product price">
        </div>
    </div>
    <div class="col-md-4">
       <div class="form-group text-center">
           <label for="formGroupExampleInput2">Product description</label>
           <input type="text" class="form-control" name="p_description" placeholder="Product description">
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
           <input type="text" class="form-control" name="p_code" placeholder="Product code">
        </div>
        <div class="form-group text-center">
            <button type="submit" name="insert" class="btn btn-primary">Insert Product</button>
         </div>
      </form>
    </div>


  </div>
</div>

 <?php include 'inc/footer.php';?>
