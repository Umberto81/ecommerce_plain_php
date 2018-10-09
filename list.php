<?php

include "class/adminclass.php";
include 'inc/layout_admin.php';
$user = new Admin();

if (isset($_GET['action'])) {

  $action = $_GET['action'];
  $code = $_GET['code'];
  switch ($action) {
    case 'remove':
      $user->remove_product($code);
      $user->messages();
      break;

    default:
      echo "Error loading the products";
      break;
  }
}

if (isset($_POST['search']) && !empty($_POST['search'])) {?>
  <div class="container-fluid ">

  <div class="row">
    <table class="table table-hover">
    <thead>
      <tr>
         <th>Name</th>
         <th class="text-center">Price</th>
         <th class="text-center">Code</th>
         <th class="text-center">Remove</th>
         <th class="text-center">Update</th>
      </tr>
    </thead>
               <tr>

  <?php  $item = $_POST['search'];
    $query = "SELECT * FROM product WHERE name LIKE '%$item%' OR price LIKE '%$item%'";
    $result = $user->fetch($query);
    while ($row = $result->fetch_assoc()) { ?>

                     <td ><?php echo $row['name']; ?></td>
                     <td class="text-center">$ <?php echo number_format($row['price'],2); ?></td>
                     <td class="text-center"><?php echo $row['code']; ?></td>
                     <td class="text-center" ><a href="?action=remove&code=<?php echo $row['code'];?>"><i class="fas fa-trash-alt "></i></a></td>
                     <td class="text-center"><a href="update.php?action=update&code=<?php echo $row['code'];?>"><a href="update.php?action=update&code=<?php echo $row['code'];?>"><i class="fas fa-edit"></i></a></td>
                  </tr>


                <?php }?>
          </table>
         </div>
       </div>

<?php
}  else { ?>

    <div class="container-fluid ">

    <div class="row">

      <table class="table table-hover">
      <thead>
        <tr>
           <th>Name</th>
           <th class="text-center">Price</th>
           <th class="text-center">Code</th>
           <th class="text-center">Remove</th>
           <th class="text-center">Update</th>
        </tr>
      </thead>
           <?php
               $query = "SELECT * FROM product";
               $result = $user->fetch($query);
               while ($row = $result->fetch_assoc()) {?>
                 <tr>
                   <td ><?php echo $row['name']; ?></td>
                   <td class="text-center">$ <?php echo number_format($row['price'],2); ?></td>
                   <td class="text-center"><?php echo $row['code']; ?></td>
                   <td class="text-center" ><a href="?action=remove&code=<?php echo $row['code'];?>"><i class="fas fa-trash-alt "></i></a></td>
                   <td class="text-center"><a href="update.php?action=update&code=<?php echo $row['code'];?>"><a href="update.php?action=update&code=<?php echo $row['code'];?>"><i class="fas fa-edit"></i></a></td>
                </tr>

              <?php }?>

        </table>
       </div>
     </div>

<?php  }

?>

<?php include 'inc/footer.php';?>
