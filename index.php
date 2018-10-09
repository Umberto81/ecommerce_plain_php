<?php

include "class/cartclass.php";
include 'inc/layout.php';

$obj = new Cart();
 ?>

 <section class="bgimage">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <h3 class="hero">This is a plain Php Ecommerce website.. built with no frameworks at all!</h3>
         <p class="hero-btn"><a href="show.php" class="btn btn-primary btn-large">View all products »</a></p>
       </div>
     </div>
   </div>
 </section>
 <br>

<div class="row">
    
       <?php
           $query = "SELECT * FROM product";
           $result = $obj->fetch($query);
           if($result){
           while($row=$result->fetch_assoc()){?>



             <div class="col-md-4 col-sm-3 text-center ">
               <a href="<?php echo $row['image']; ?>" data-toggle="lightbox" data-title="<?php echo $row['name']; ?>" data-footer="<?php echo "Price: $" . $row['price']; ?>">
               <img src="<?php echo $row['image']; ?>" class="img-fluid">
               </a>
             </div>


            <hr>

           <?php }
           }
 ?>
   </div>




 <?php include 'inc/footer.php';
  ?>
