<?php

if (isset($_GET['show'])) {
  $show=$_GET['show'];
}else {
  $show = "home";
}

if ($show == "home") {
  include 'content/home.php';
}elseif ($show == "portofolio") {
  include 'content/portofolio.php';
}


?>
