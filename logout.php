<?php

include "class/adminclass.php";
session_destroy();
session_unset();
header('Location:login.php');

 ?>
