<?php

include "class/adminclass.php";


$user = new Admin();

if (isset($_POST['submit'])) {
  $user->login();
  $user->messages();

}
 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">

   <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">



     <title>Admin </title>
   </head>


   <body>


   <div class="container-fluid">

     <nav class="navbar navbar-expand-lg navbar-light bg-light">

     </nav>
 <br>

<div class="container-fluid">

  <div class="row bg">
    <div class="col-md-4">
    </div>

    <form class="col-md-3" method="POST" action="" class="form-group">
          <h1 class="text-center ">Log in</h1>

      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" class="form-control" name="username"  placeholder="Enter username">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

<div class="col-md-4">
</div>
  </div>
</div>







 <?php include 'inc/footer.php';?>
